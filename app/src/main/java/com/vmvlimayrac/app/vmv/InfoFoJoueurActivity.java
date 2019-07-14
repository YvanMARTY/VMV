package com.vmvlimayrac.app.vmv;

import android.content.Intent;
import android.os.StrictMode;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.Map;

public class InfoFoJoueurActivity extends AppCompatActivity {

    private Button start;
    private String idPartie;
    private String nomEquipe;
    private String scoreEquipe;
    private String pointDepart;
    private TextView helloTeam;
    private TextView pointDepartText;
    private String nompointDepart;
    private String pinEquipe;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_info_fo_joueur);
        Bundle extras = getIntent().getExtras();
       idPartie =  extras.getString("idPartie");
       nomEquipe = extras.getString("nomEquipe");
       scoreEquipe = extras.getString("scoreEquipe");
       pointDepart = extras.getString("pointDepart");
       pinEquipe = extras.getString("pinEquipe");

        StrictMode.ThreadPolicy policy = new StrictMode.
                ThreadPolicy.Builder().permitAll().build();
        StrictMode.setThreadPolicy(policy);
        String test = "https://visite-ma-ville.fr/external/external_app.php?action=GetParcPointByGameId&gameId=" + idPartie;
        JSONArray result = JSONParser.makeHttpRequest(test,"GET");

        for (int i = 0; i < result.length(); i++) {

            JSONObject informations = null;
            try {
                informations = result.getJSONObject(i);
            } catch (JSONException e) {
                e.printStackTrace();
            }
            try {
                if (pointDepart.equals(informations.getString("pts_id"))){
                    nompointDepart = informations.getString("pts_nom");
                }

            } catch (JSONException e) {
                e.printStackTrace();
            }
        }


       helloTeam = (TextView) findViewById(R.id.textNomEquipe);
       pointDepartText = (TextView) findViewById(R.id.textPointDepart);
       start = (Button)  findViewById(R.id.buttonGO);
       helloTeam.setText("Bonjour équipe " + nomEquipe );
       pointDepartText.setText("Votre premiere question et point de depart est " + nompointDepart + "(Le point de couleur Jaune sur la carte)");

        start.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                    Intent intent = new Intent(getApplicationContext(), MapsFoJoueurActivity.class);
                    intent.putExtra("pinEquipe",pinEquipe);
                    intent.putExtra("idPartie",idPartie);
                    intent.putExtra("pointDepart",pointDepart);
                    intent.putExtra("scoreEquipe",scoreEquipe);
                    getApplicationContext().startActivity(intent);
                }

        });
    }
}