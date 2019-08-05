{block name='page_content'}
<!-- Block TPL FRONT -->
<div id="block_home" class="block block_home_parcours_stats">

	<blockquote class="quote-card">
	  <p>
		Suivi des Parcours
	  </p>

	  <cite>
		Vous trouverez ci-dessous les statistiques des différents parcours proposés.
	  </cite>
	</blockquote>
	<br />

  <div class="container">
  <div class="row">
   {if isset($parcours)}

	<a class="btn btn-primary" href="?controller={$smarty.get.controller}&token={$smarty.get.token}" class="previous">&laquo; Précédent</a>
	
	<div class="col-lg-12 spacer">
		<div class="col-lg-6">
			<div class="card">
			<div class="card-header">
				<b>Statistiques - {$parcours->nom}</b>
			</div>
			<div class="card-body">
				<table class="table table-bordered table-striped mb-0">
					<thead>
					<tr class="table-active">
						<th scope="col">Information</th>
						<th scope="col">Description</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td><b>Nombre d'étapes</b></td>
						<td>{$parcours->nbre_etapes}</td>
					</tr>
					<tr>
						<td><b>Durée</b></td>
						<td>{$parcours->time}</td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="col-lg-6">
		<div id="mapid" style="height: 98%"></div>
	</div>
	</div>
    </div>
    <div class="row">
	<div class="col-lg-12">
		<div class="card">
		<div class="card-header">
			<b>Parties</b>
		</div>
		<div class="card-body">
			<table class="table table-bordered table-striped mb-0">
				<thead>
					<tr class="table-active">
						<th scope="col">Mot de passe</th>
						<th scope="col">Disponibilité</th>
						<th scope="col">Parties</th>
						<th scope="col">Date d'expiration</th>

					</tr>
				</thead>
				<tbody>
				{foreach from=$parcours->achats item=achat}
					<tr>
						<td>
							<b>{$achat->mdp}</b>
						</td>
						<td>
							{if $achat->active eq 1}
								<font color="#4eb357">
									<b>Disponible</b>
								</font>
							{else}
								<font color="#d5676f">
									<b>Indisponible</b>
								</font>
							{/if}
						</td>
						<td>
							{if count($achat->parties) == 0}
								<font color="#d5676f"><b>Pas de parties</b>
							{/if}
							{foreach from=$achat->parties item=parties}
								<p>Nombre d'equipes : {count($parties->equipe)}</p>
								<p>Equipe gagnante :</p>
								<p>Score des gagnants :</p>
							{/foreach}
						<p>
						</td>
						<td>
							{if count($achat->parties) == 0}
								<p>/</b>
							{else}
								{$achat->datefin}
							{/if}
						</td>
					</tr>
				{/foreach}
				</tbody>
			</table>
    	</div>
	</div>

	<a class="btn btn-primary spacer" href="?controller={$smarty.get.controller}&token={$smarty.get.token}" class="previous">&laquo; Précédent</a>
	
  	{else}
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<b>Suivi des ventes</b>
			</div>
			<div class="card-body">
				<canvas id="myChart" width="400px" height="400px" style="width: 400px !important;height:400px !important;"></canvas>
			</div>
		</div>
	</div>

	<div class="col-xs-12" style="height:50px;"></div>

    <div class="col-lg-12">
		<div class="card">
		<div class="card-header">
			<b>Les parcours</b>
		</div>
		<div class="card-body">
		  <table class="card-table table table_parcours_general_stats">
			<thead>
			  <tr class="table-active">
				<th>Nom</th>
				<th>Status</th>
				<th class="textaligncenter">Statistiques</th>
				<th>Action</th>
			  </tr>
			</thead>
			<tbody>
			{foreach from=$Array item=parcours}
			  <tr>
				<td><b>{$parcours->nom}</b></td>
				<td>{if $parcours->active}<font color="#4eb357"><b>Activé</b></font>{else}<font color="#d5676f"><b>Désactivé</b></font>{/if}</td>
				<td class="textaligncenter">
					<a href="?controller={$smarty.get.controller}&token={$smarty.get.token}&id={$parcours->id}" class="btn btn-primary">
						<i class="fa fa-eye" aria-hidden="true"></i>
					</a>
				</td>
				<td>
				  {if $parcours->active == 1}
				  <button onclick="updateparcours({$parcours->id},0);" class="btn btn-danger">DESACTIVER</button>
				  {else}
				  <button onclick="updateparcours({$parcours->id},1);" class="btn btn-success">ACTIVER</button>
				  {/if}
				</td>
			  </tr>
			{/foreach}
			</tbody>
		  </table>
		</div>
		</div>
    </div>
        
      <script>
      var dynamicColors = function() {
            var r = Math.floor(Math.random() * 255);
            var g = Math.floor(Math.random() * 255);
            var b = Math.floor(Math.random() * 255);
            return "rgb(" + r + "," + g + "," + b + ",0.8)";
         };
         var elements = {json_encode($parcoursname)};
        
         
      var colors = [
                      'rgba(255, 99, 132, 0.8)',
                      'rgba(54, 162, 235, 0.8)',
                      'rgba(255, 206, 86, 0.8)',
                      'rgba(75, 192, 192, 0.8)',
                      'rgba(153, 102, 255, 0.8)',
                      'rgba(255, 159, 64, 0.8)'
                  ];
      if(elements.length > 2){   
        for (var i = 0; i < (elements.length)-2; i++) {
          colors.push(dynamicColors());
        }
      }
      var ctx = document.getElementById('myChart').getContext('2d');
      var myChart = new Chart(ctx, {
          type: 'doughnut',
          data: {
              labels: elements,
              datasets: [{
                  label: '# of Votes',
                  data: {json_encode($achats)},
                  fillColor : "rgba(252,233,79,1)",
                  backgroundColor: colors,
                  borderColor: [
                      'rgba(255, 99, 132, 1)',
                      'rgba(54, 162, 235, 1)',
                      'rgba(255, 206, 86, 1)',
                      'rgba(75, 192, 192, 1)',
                      'rgba(153, 102, 255, 1)',
                      'rgba(255, 159, 64, 1)'
                  ],
                  borderWidth: 2
              }]
          },
          options: {
              responsive: true,
              maintainAspectRatio: false,
              scales: {
              }
          }
      });
      </script>
    </div>
 {/if}
  </div>
	</div>
</div>
{literal}
  <script type="text/javascript">
	function updateparcours(id,status){
		  $.ajax({
		   url : 'ajax_disableparcours.php',
		   type : 'POST',
		   dataType : 'html',
		   data:"status="+status+"&id="+id,
		   success : function(e){
			 location.reload(); 
		   }
		});
	}
</script>
{/literal}
<!-- /Block TPL FRONT -->
{/block}