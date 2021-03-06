package com.vmvlimayrac.app.vmv;

import android.content.Context;
import android.content.Intent;
import android.content.pm.PackageManager;
import android.content.res.Resources;
import android.location.Location;
import android.os.AsyncTask;
import android.os.Handler;
import android.os.StrictMode;
import android.support.v4.app.ActivityCompat;
import android.support.v4.app.FragmentActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.*;

import com.google.android.gms.location.FusedLocationProviderClient;
import com.google.android.gms.location.LocationServices;
import com.google.android.gms.maps.CameraUpdateFactory;
import com.google.android.gms.maps.GoogleMap;
import com.google.android.gms.maps.OnMapReadyCallback;
import com.google.android.gms.maps.SupportMapFragment;
import com.google.android.gms.maps.model.BitmapDescriptorFactory;
import com.google.android.gms.maps.model.LatLng;
import com.google.android.gms.maps.model.MapStyleOptions;
import com.google.android.gms.maps.model.Marker;
import com.google.android.gms.maps.model.MarkerOptions;
import com.google.android.gms.tasks.OnSuccessListener;
import com.google.android.gms.tasks.Task;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.io.BufferedReader;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.URL;
import java.net.URLConnection;
import java.util.ArrayList;
import java.util.List;
import java.util.concurrent.Executors;
import java.util.concurrent.ScheduledExecutorService;
import java.util.concurrent.TimeUnit;

public class MapsFoJoueurActivity extends FragmentActivity implements OnMapReadyCallback,GetResultQuery {

    private Location currentLocation;
    private FusedLocationProviderClient fusedLocationProviderClient;
    private static final int LOCATION_REQUEST_CODE =101;
    private MarkerOptions options = new MarkerOptions();
    private GoogleMap googleMapGlobal;
    private Marker previousMarker = null;
    private Handler handler = new Handler();

    private ArrayList<LatLng> latlngs = new ArrayList<>();
    private ArrayList<Marker> listMarker = new ArrayList<>();
    private ArrayList<Marker> listMarkerDo = new ArrayList<>();
    private ArrayList<Marker> listMarkerEquipe = new ArrayList<>();
    private final List<String> listNomEquipe = new ArrayList<String>();


    private JSONArray AllMarker;

    private int markerID;

    private int CountAllQuestion = 0 ;
    private int CountAllQuestionDone = 0;
    private Spinner spinnerEquipe;
    private String pinEquipe;
    private String idPartie;
    private String nomEquipe;
    private String scoreEquipe;
    private String pointDepart;
    private String nompointDepart;
    private String lespoint;
    private String thereIsPoint;
    private String opt_visu_scor;
    private String opt_visu_loc;
    private ArrayList<String> lesPoints;
    private String myCurrentLong;
    private String myCurrentLat;
    private String insertNewPosition;
    private Intent loading;
    private boolean isEquipeAfficher = false;
    boolean done = false;
    private ScheduledExecutorService scheduleTaskExecutor;
    private JSONArray InsertPosition;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        //loading = new Intent(this, LoadingActivity.class);
        //startActivity(loading);

        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_maps_fo_joueur);

        Bundle extras = getIntent().getExtras();
        idPartie =  extras.getString("idPartie");
        nomEquipe = extras.getString("nomEquipe");
        scoreEquipe = extras.getString("scoreEquipe");
        pointDepart = extras.getString("pointDepart");
        pinEquipe = extras.getString("pinEquipe");
        thereIsPoint = extras.getString("thereIsPoint");
        opt_visu_scor = extras.getString("opt_visu_scor");
        opt_visu_loc = extras.getString("opt_visu_loc");
        lesPoints = extras.getStringArrayList("lesPoints");
        listNomEquipe.add("Toutes les équipes");
        spinnerEquipe = findViewById(R.id.spinnerNomEquipe);
        spinnerEquipe.setVisibility(View.INVISIBLE);
        Button mButton = (Button) findViewById(R.id.buttonGetScore);
        if(opt_visu_scor.equals("0")){
            mButton.setVisibility(View.INVISIBLE);
        }

        mButton.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(getApplicationContext(), ScoreActivity.class);
                intent.putExtra("idPartie" , idPartie);
                intent.setFlags(Intent.FLAG_ACTIVITY_NEW_TASK);
                startActivity(intent);
            }
        });

        Button buttonViewTeam = (Button) findViewById(R.id.buttonPlayerPosition);
        if(opt_visu_loc.equals("0")){
            buttonViewTeam.setVisibility(View.INVISIBLE);
        }
        buttonViewTeam.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                listNomEquipe.clear();
                listNomEquipe.add("Toutes les équipes");
                if(isEquipeAfficher == false) {
                    String test = "https://visite-ma-ville.fr/external/external_app.php?action=GetAllPositionByGameId&gameId=" + idPartie;
                    JSONArray result = JSONParser.makeHttpRequest(test, "GET");

                    for (int i = 0; i < result.length(); i++) {

                        JSONObject PositionEquipe = null;
                        try {
                            PositionEquipe = result.getJSONObject(i);
                        } catch (JSONException e) {
                            e.printStackTrace();
                        }
                        String eqp_nom = null;
                        try {
                            eqp_nom = PositionEquipe.getString("eqp_nom");
                            listNomEquipe.add(eqp_nom);
                        } catch (JSONException e) {
                            e.printStackTrace();
                        }
                        String loc_lat = null;
                        try {
                            loc_lat = PositionEquipe.getString("loc_lat");
                        } catch (JSONException e) {
                            e.printStackTrace();
                        }
                        String loc_long = null;
                        try {
                            loc_long = PositionEquipe.getString("loc_long");
                        } catch (JSONException e) {
                            e.printStackTrace();
                        }

                        LatLng point = new LatLng(Double.parseDouble(loc_lat), Double.parseDouble(loc_long));
                        options.title(eqp_nom);
                        options.zIndex(7);
                        options.position(point);
                        options.icon(BitmapDescriptorFactory
                                .defaultMarker(BitmapDescriptorFactory.HUE_ORANGE));
                        Marker marker = googleMapGlobal.addMarker(options);
                        listMarkerEquipe.add(marker);

                    }

                    isEquipeAfficher = true;
                    spinnerEquipe.setVisibility(View.VISIBLE);
                    ArrayAdapter<String> adp2 = new ArrayAdapter<String>(getApplicationContext(),android.R.layout.simple_spinner_item,listNomEquipe);
                    adp2.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
                    spinnerEquipe.setAdapter(adp2);

                    spinnerEquipe.setOnItemSelectedListener(new AdapterView.OnItemSelectedListener()
                    {
                        @Override
                        public void onItemSelected(AdapterView<?> arg0, View arg1, int position, long id) {
                            // TODO Auto-generated method stub
                            if(position == 0){
                                for(Marker m : listMarkerEquipe){
                                    m.setVisible(true);
                                }
                            }else{
                                for(Marker m : listMarkerEquipe){
                                    m.setVisible(false);
                                    if(m.getTitle().equals(listNomEquipe.get(position))){
                                        m.setVisible(true);
                                    }
                                }
                            }
                        }

                        @Override
                        public void onNothingSelected(AdapterView<?> arg0) {
                            // TODO Auto-generated method stub
                        }
                    });


                }
                else{
                    for(Marker m : listMarkerEquipe){
                        m.remove();
                    }
                    isEquipeAfficher = false;
                    spinnerEquipe.setVisibility(View.INVISIBLE);
                }
            }
        });

        fusedLocationProviderClient = LocationServices.getFusedLocationProviderClient(this);
        if (ActivityCompat.checkSelfPermission(MapsFoJoueurActivity.this, android.Manifest.permission.ACCESS_FINE_LOCATION) != PackageManager.PERMISSION_GRANTED && ActivityCompat.checkSelfPermission(MapsFoJoueurActivity.this, android.Manifest.permission.ACCESS_COARSE_LOCATION) != PackageManager.PERMISSION_GRANTED) {
            ActivityCompat.requestPermissions(this, new String[] {android.Manifest.permission.ACCESS_FINE_LOCATION}, LOCATION_REQUEST_CODE);
            return;
        }else{}



        fetchLastLocation();

    }

    public void downloadJSON(final String urlWebService, Context context,final GoogleMap map) {

        class DownloadJSON extends AsyncTask<Void, Void, String> {
            public String result;
            public JSONArray objetJsonFinal;
            private Context mContext;
            private GetResultQuery mCallback;

            public DownloadJSON(Context context){
                this.mContext = context;
                this.mCallback = (GetResultQuery) context;
            }


            @Override
            protected void onPreExecute() {
                super.onPreExecute();
            }

            @Override
            protected void onPostExecute(String s) {
                super.onPostExecute(s);
                try {
                    objetJsonFinal = loadJson(s);
                    mCallback.onTaskComplete(objetJsonFinal,map);
                } catch (JSONException e) {
                    e.printStackTrace();
                }

            }

            @Override
            protected String doInBackground(Void... voids) {
                try {
                    URL url = new URL(urlWebService);
                    HttpURLConnection con = (HttpURLConnection) url.openConnection();
                    StringBuilder sb = new StringBuilder();
                    BufferedReader bufferedReader = new BufferedReader(new InputStreamReader(con.getInputStream()));
                    String json;
                    while ((json = bufferedReader.readLine()) != null) {
                        sb.append(json + "\n");
                    }
                    return sb.toString().trim();
                } catch (Exception e) {
                    return null;
                }
            }
        }
        DownloadJSON getJSON = new DownloadJSON(context);
        getJSON.execute(); }

    public JSONArray loadJson(String json) throws JSONException {
        JSONArray jsonArray = new JSONArray(json);
        return jsonArray;
    }

    private Runnable runnable = new Runnable() {
        @Override
        public void run() {

            myCurrentLong = Double.toString(currentLocation.getLongitude());
            myCurrentLat =  Double.toString(currentLocation.getLatitude());
            insertNewPosition =  "https://visite-ma-ville.fr/external/external_app.php?action=InsertNewPosition&latitude="+myCurrentLat +"&longitude="+myCurrentLong + "&pinTeam="+pinEquipe+"";
            InsertPosition = JSONParser.makeHttpRequest(insertNewPosition,"POST");
            if(isPartieEnd() == true && done == false){
                Intent myIntent = new Intent(MapsFoJoueurActivity.this, EndGameActivity.class);
                myIntent.setFlags(Intent.FLAG_ACTIVITY_NEW_TASK);
                startActivityForResult(myIntent, 9999);
                done = true;
            }
            if(isEquipeAfficher == true) {
                String test = "https://visite-ma-ville.fr/external/external_app.php?action=GetAllPositionByGameId&gameId=" + idPartie;
                JSONArray result = JSONParser.makeHttpRequest(test, "GET");

                for (int i = 0; i < result.length(); i++) {

                    JSONObject PositionEquipe = null;
                    try {
                        PositionEquipe = result.getJSONObject(i);
                    } catch (JSONException e) {
                        e.printStackTrace();
                    }
                    String eqp_nom = null;
                    try {
                        eqp_nom = PositionEquipe.getString("eqp_nom");
                        listNomEquipe.add(eqp_nom);
                    } catch (JSONException e) {
                        e.printStackTrace();
                    }
                    String loc_lat = null;
                    try {
                        loc_lat = PositionEquipe.getString("loc_lat");
                    } catch (JSONException e) {
                        e.printStackTrace();
                    }
                    String loc_long = null;
                    try {
                        loc_long = PositionEquipe.getString("loc_long");
                    } catch (JSONException e) {
                        e.printStackTrace();
                    }

                    LatLng point = new LatLng(Double.parseDouble(loc_lat), Double.parseDouble(loc_long));
                    options.title(eqp_nom);
                    options.zIndex(7);
                    options.position(point);
                    options.icon(BitmapDescriptorFactory
                            .defaultMarker(BitmapDescriptorFactory.HUE_ORANGE));
                    Marker marker = googleMapGlobal.addMarker(options);
                    listMarkerEquipe.add(marker);

                }
            }







            handler.postDelayed(runnable, 60000);
        }
    };

    public void onTaskComplete(JSONArray result,final GoogleMap googleMap ){
        try {

            googleMapGlobal = googleMap;
            CountAllQuestion = result.length();
            for (int i = 0; i < result.length(); i++) {
                JSONObject marker = result.getJSONObject(i);
                String id = marker.getString("pts_id");
                String nom = marker.getString("pts_nom");
                String longi = marker.getString("pts_long");
                String lati = marker.getString("pts_lat");
                LatLng point = new LatLng(Double.parseDouble(lati), Double.parseDouble(longi));

                latlngs.add(point);
                options.position(point);
                options.snippet(id);
                options.zIndex(1);

                if (id.equals(pointDepart)) {
                    options.icon(BitmapDescriptorFactory
                            .defaultMarker(BitmapDescriptorFactory.HUE_YELLOW));
                } else {
                    options.icon(BitmapDescriptorFactory
                            .defaultMarker(BitmapDescriptorFactory.HUE_VIOLET));
                }
                if(thereIsPoint.equals("1")) {
                    for (String s : lesPoints) {
                        String[] parts = s.split("-");
                        String pointIdDone = parts[0];
                        String reponseResult = parts[1];
                        if (pointIdDone.equals(id) && reponseResult.equals("0")) {
                            options.icon(BitmapDescriptorFactory
                                    .defaultMarker(BitmapDescriptorFactory.HUE_RED));
                            options.zIndex(0);
                        } else if (pointIdDone.equals(id) && reponseResult.equals("1")) {
                            options.icon(BitmapDescriptorFactory
                                    .defaultMarker(BitmapDescriptorFactory.HUE_GREEN));
                            options.zIndex(0);
                        }

                    }
                }
                options.title(nom);

                Marker aMarker = googleMap.addMarker(options);
                if(!id.equals(pointDepart) && thereIsPoint.equals("0")){
                    aMarker.setVisible(false);
                }
                listMarker.add(aMarker);

                handler.post(runnable);
            }
        }catch (Exception e){}


    }

    private boolean checkDonePoint(Marker clickedMarker){
        CountAllQuestionDone = 0;
        String getExistingPoint = "https://visite-ma-ville.fr/external/external_app.php?action=GetQuestionDone&pinTeam="+pinEquipe;
        JSONArray resultT = JSONParser.makeHttpRequest(getExistingPoint,"GET");
        boolean isDone = false;
        CountAllQuestionDone = resultT.length();
        for (int i = 0; i < resultT.length(); i++) {
            String concat = null;
            JSONObject PointFait = null;
            try {
                PointFait = resultT.getJSONObject(i);
            } catch (JSONException e) {
                e.printStackTrace();
            }
            String rps_eqp_pnt_id = null;
            try {
                rps_eqp_pnt_id = PointFait.getString("rps_eqp_pnt_id");
            } catch (JSONException e) {
                e.printStackTrace();
            }
            String rps_eqp_statut = null;
            try {
                rps_eqp_statut = PointFait.getString("rps_eqp_statut");
            } catch (JSONException e) {
                e.printStackTrace();
            }

            for(Marker aMarker : listMarker){
                if(aMarker.getSnippet().equals(rps_eqp_pnt_id)){
                    if(aMarker.getSnippet().equals(clickedMarker.getSnippet())){
                        isDone = true;
                    }
                    if(rps_eqp_statut.equals("0")){
                        aMarker.setIcon(BitmapDescriptorFactory
                                .defaultMarker(BitmapDescriptorFactory.HUE_RED));
                    }else if (rps_eqp_statut.equals("1")){
                        aMarker.setIcon(BitmapDescriptorFactory
                                .defaultMarker(BitmapDescriptorFactory.HUE_GREEN));
                    }
                }
            }


        }
        return isDone;
    }

    private void fetchLastLocation(){
        fusedLocationProviderClient = LocationServices.getFusedLocationProviderClient(this);
        Task<Location> task = fusedLocationProviderClient.getLastLocation();
        task.addOnSuccessListener(new OnSuccessListener<Location>() {
            @Override
            public void onSuccess(Location location) {
                if (location != null) {
                    currentLocation = location;

                    // Toast.makeText(MapsFoJoueurActivity.this,currentLocation.getLatitude()+" "+currentLocation.getLongitude(),Toast.LENGTH_SHORT).show();
                    SupportMapFragment supportMapFragment= (SupportMapFragment) getSupportFragmentManager().findFragmentById(R.id.map);
                    supportMapFragment.getMapAsync(MapsFoJoueurActivity.this);
                }else{
                    Toast.makeText(MapsFoJoueurActivity.this,"Activer votre GPS !",Toast.LENGTH_SHORT).show();
                }
            }
        });
    }

    @Override
    public void onMapReady(final GoogleMap googleMap) {

        try {
            // Customise the styling of the base map using a JSON object defined
            // in a raw resource file.
            boolean success = googleMap.setMapStyle(
                    MapStyleOptions.loadRawResourceStyle(
                            this, R.raw.map_toulouse_color));
            if (!success) {}
        } catch (Resources.NotFoundException e) {  }

        LatLng latLng = new LatLng(currentLocation.getLatitude(),currentLocation.getLongitude());
        //MarkerOptions markerOptions = new MarkerOptions().position(latLng).title("You are Here");
        googleMap.animateCamera(CameraUpdateFactory.newLatLngZoom(latLng,14));

        new MapsFoJoueurActivity().downloadJSON("https://visite-ma-ville.fr/external/external_app.php?action=GetParcPointByGameId&gameId="+idPartie,this,googleMap);

        googleMap.setMyLocationEnabled(true);
        googleMap.setOnMarkerClickListener(new GoogleMap.OnMarkerClickListener() {

            @Override
            public boolean onMarkerClick(Marker marker) {
                boolean isEverDone = checkDonePoint(marker);
                if(isEverDone == false){
                    float z = marker.getZIndex();
                    if (z == 1) {
                        if (marker.getSnippet().equals(pointDepart)) {

                            Intent myIntent = new Intent(MapsFoJoueurActivity.this, questionActivity.class);
                            int idquestion = Integer.parseInt(marker.getSnippet());
                            markerID = idquestion;
                            myIntent.putExtra("Idquestion", idquestion);
                            myIntent.putExtra("idPartie", idPartie);
                            startActivityForResult(myIntent, 1);

                            overridePendingTransition(R.anim.slide_in_right, R.anim.slide_out_left);

                            Intent consigne = new Intent(MapsFoJoueurActivity.this, ConsignePremierPointActivity.class);
                            startActivity(consigne);
                            overridePendingTransition(R.anim.slide_in_right, R.anim.slide_out_left);
                        }
                        else if(marker.getZIndex() == 7){
                            marker.getTitle();
                        }
                        else {
                            Intent myIntent = new Intent(MapsFoJoueurActivity.this, questionActivity.class);
                            int idquestion = Integer.parseInt(marker.getSnippet());
                            markerID = idquestion;
                            myIntent.putExtra("Idquestion", idquestion);
                            myIntent.putExtra("idPartie", idPartie);
                            startActivityForResult(myIntent, 1);

                            overridePendingTransition(R.anim.slide_in_right, R.anim.slide_out_left);
                        }
                    }
                    if (z == 7) {
                        marker.showInfoWindow();
                    }
                }else{
                    Toast.makeText(getApplicationContext(),"Point deja validé! ",Toast.LENGTH_LONG);
                }
                return true;
            }
        });




    }

    @Override
    public void onRequestPermissionsResult(int requestCode, String[] permissions, int[] grantResult) {
        switch (requestCode) {
            case LOCATION_REQUEST_CODE:
                if (grantResult.length > 0 && grantResult[0] == PackageManager.PERMISSION_GRANTED) {
                    fetchLastLocation();
                } else {
                    Toast.makeText(MapsFoJoueurActivity.this,"Permission de localisation impossible",Toast.LENGTH_SHORT).show();
                }
                break;
        }
    }

    protected boolean isPartieEnd() {

        String IsPartieEnd = "https://visite-ma-ville.fr/external/external_app.php?action=GetInfoByTeamPin&pinTeam=" + pinEquipe;
        JSONArray resultT = JSONParser.makeHttpRequest(IsPartieEnd, "GET");
        boolean isEnd = false;
        String statutPartie = "";
        for (int i = 0; i < resultT.length(); i++) {

            JSONObject listeinfo = null;
            try {
                listeinfo = resultT.getJSONObject(i);
            } catch (JSONException e) {
                e.printStackTrace();
            }
            String rps_eqp_statut = null;
            try {
                rps_eqp_statut = listeinfo.getString("part_statut");
                statutPartie = rps_eqp_statut;
            } catch (JSONException e) {
                e.printStackTrace();
            }
        }

        if(statutPartie.equals("2")){
            isEnd = true;
        }

        return isEnd;
    }

    @Override
    protected void onActivityResult(int requestCode, int resultCode, Intent data) {

        myCurrentLong = Double.toString(currentLocation.getLongitude());
        myCurrentLat =  Double.toString(currentLocation.getLatitude());
        String insertNewPosition =  "https://visite-ma-ville.fr/external/external_app.php?action=InsertNewPosition&latitude="+myCurrentLat +"&longitude="+myCurrentLong + "&pinTeam="+pinEquipe+"";
        JSONArray InsertPosition = JSONParser.makeHttpRequest(insertNewPosition,"POST");


        if(resultCode == 1){
            String res =  data.getStringExtra("result");
            if (res.equals("ok")){

                for(Marker m : listMarker){
                    if(Integer.parseInt(m.getSnippet()) == markerID){
                        m.setIcon(BitmapDescriptorFactory
                                .defaultMarker(BitmapDescriptorFactory.HUE_GREEN));
                        m.setZIndex(0);
                        String insertDone = "https://visite-ma-ville.fr/external/external_app.php?action=InsertResponseEquipe&pointId="+m.getSnippet()+"&pinTeam="+pinEquipe+"&statut=1";
                        JSONArray resultok = JSONParser.makeHttpRequest(insertDone,"POST");
                    }
                    if(Integer.parseInt(m.getSnippet()) == Integer.parseInt(pointDepart)){
                        for(Marker ma : listMarker){
                            ma.setVisible(true);
                        }
                    }
                }
                int score = Integer.parseInt(scoreEquipe) + 5;
                CountAllQuestionDone = CountAllQuestionDone + 1 ;
                StrictMode.ThreadPolicy policy = new StrictMode.
                        ThreadPolicy.Builder().permitAll().build();
                StrictMode.setThreadPolicy(policy);
                String test = "https://visite-ma-ville.fr/external/external_app.php?action=InsertNewTeamScore&teamScore="+score +"&pinTeam="+ pinEquipe;
                JSONArray result = JSONParser.makeHttpRequest(test,"POST");
            }
            else if (res.equals("nok")){
                for(Marker m : listMarker){
                    if(Integer.parseInt(m.getSnippet()) == markerID){
                        m.setIcon(BitmapDescriptorFactory
                                .defaultMarker(BitmapDescriptorFactory.HUE_RED));
                        String insertDone = "https://visite-ma-ville.fr/external/external_app.php?action=InsertResponseEquipe&pointId="+m.getSnippet()+"&pinTeam="+pinEquipe+"&statut=0";
                        JSONArray resultnok = JSONParser.makeHttpRequest(insertDone,"POST");
                        CountAllQuestionDone = CountAllQuestionDone + 1 ;
                        m.setZIndex(0);
                    }
                    if(Integer.parseInt(m.getSnippet()) == Integer.parseInt(pointDepart)){
                        for(Marker ma : listMarker){
                            ma.setVisible(true);
                        }
                    }
                }
            }
            if(CountAllQuestionDone == CountAllQuestion){
                Intent myIntent = new Intent(MapsFoJoueurActivity.this, EndActivity.class);
                startActivityForResult(myIntent, 9999);
            }
        }

        else if (resultCode == 9999){

            String getExistingPoint = "https://visite-ma-ville.fr/external/external_app.php?action=GetParcPointByGameId&gameId="+idPartie;
            JSONArray resultT = JSONParser.makeHttpRequest(getExistingPoint,"GET");
            boolean isDone = false;
            String currentEndName = "";
            for (int i = 0; i < resultT.length(); i++) {

                JSONObject listePointPartie = null;
                try {
                    listePointPartie = resultT.getJSONObject(i);
                } catch (JSONException e) {
                    e.printStackTrace();
                }
                String pts_nom = null;
                try {
                    pts_nom = listePointPartie.getString("pts_nom");
                } catch (JSONException e) {
                    e.printStackTrace();
                }
                String pnt_parc_typ_pnt_id = null;
                try {
                    pnt_parc_typ_pnt_id = listePointPartie.getString("pnt_parc_typ_pnt_id");
                } catch (JSONException e) {
                    e.printStackTrace();
                }

                for(Marker aMarker : listMarker) {

                    if (pnt_parc_typ_pnt_id.equals("3") && aMarker.getTitle().equals(pts_nom)) {
                        aMarker.setIcon(BitmapDescriptorFactory
                                .defaultMarker(BitmapDescriptorFactory.HUE_CYAN));
                        aMarker.setVisible(true);
                        aMarker.setZIndex(2);

                    } else{
                        aMarker.setVisible(false);
                    }
                }
            }

        }
        else if( resultCode == 897654){
            String getExistingPoint = "https://visite-ma-ville.fr/external/external_app.php?action=GetParcPointByGameId&gameId="+idPartie;
            JSONArray resultT = JSONParser.makeHttpRequest(getExistingPoint,"GET");
            boolean isDone = false;
            String currentEndName = "";
            String pts_nom = null;
            String pnt_parc_typ_pnt_id = null;
            String larriver = "";
            for (int i = 0; i < resultT.length(); i++) {

                JSONObject listePointPartie = null;
                try {
                    listePointPartie = resultT.getJSONObject(i);
                } catch (JSONException e) {
                    e.printStackTrace();
                }

                try {
                    pts_nom = listePointPartie.getString("pts_nom");
                } catch (JSONException e) {
                    e.printStackTrace();
                }

                try {
                    pnt_parc_typ_pnt_id = listePointPartie.getString("pnt_parc_typ_pnt_id");
                } catch (JSONException e) {
                    e.printStackTrace();
                }
                if(pnt_parc_typ_pnt_id.equals("3")){
                   larriver = pts_nom;
                }

            }

            for(Marker aMarker : listMarker) {

                if (aMarker.getTitle().equals(larriver)) {
                    aMarker.setIcon(BitmapDescriptorFactory
                            .defaultMarker(BitmapDescriptorFactory.HUE_CYAN));
                    aMarker.setVisible(true);
                    aMarker.setZIndex(2);
                    break;
                } else{
                    aMarker.setVisible(false);
                }
            }
        }
    }

}