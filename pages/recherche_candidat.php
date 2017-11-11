<?php 

if(isset($_POST['zone_recherche'])) {
	header("Location:../public/index.php?p=recherche&q=".$_POST['zone_recherche']);
}

?>


<div class="liste_offre"> 

<div class= "row">
	<div class="col-xs-8" class="liste_offre_1">

		<h1 > Candidats : </h1>

			<?php foreach (App\Table\Personnage::getLast() as $post):
				 ?> 

			<?php endforeach; ?> 
	   	
   
	</div>

	<div class="col-xs-4" class="list_offre_2">
		<ul>
			
				<div class="div-header">
					<p><span class="glyphicon glyphicon-search"></span> Effectuez une recherche de candidats :</p>
				</div>

				<form class="" role="search">
					<div class="form-group">

						<p>Chercher dans :</p>
						<select class="form-control" id="emploi_choix_search">
							<option>Le nom / prénom du candidat</option>
							<option>Les compétences techniques du candidat</option>
							<option>L'adresse du candidat</option>
						</select>
						<p>les mots :</p>
						<input type="text" class="form-control" id="input_search_emploi" placeholder="Ex : Gérard, Bayonne, C++ ...">

						<div class="divider"></div>

						<p>Niveau d'étude :</p>
						<div class="checkbox">
							<label><input type="checkbox" value="">Bac</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" value="">Bac +2 / +3</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" value="">Bac +5 et supérieur</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" value="">Autre</label>
						</div>

						<div class="divider"></div>

						<p>Domaines d'activité :</p>

						<select class="big-select" name="secteur_activite[]" size="5" multiple="multiple">
							<option>Agroalimentaire</option>
							<option>Banque / Assurance</option>
							<option>Bois / Papier / Carton / Imprimerie</option>
							<option>BTP / Matériaux de construction</option>
							<option>Chimie / Parachimie</option>
							<option>Commerce / Négoce / Distribution</option>
							<option>Edition / Communication / Multimédia</option>
							<option>Electronique / Electricité</option>
							<option>Etudes et conseils</option>
							<option>Industrie pharmaceutique</option>
							<option>Informatique / Télécoms</option>
							<option>Machines et équipements / Automobile</option>
							<option>Métallurgie / Travail du métal</option>
							<option>Plastique / Caoutchouc</option>
							<option>Services aux entreprises</option>
							<option>Textile / Habillement / Chaussure</option>
							<option>Transports / Logistique</option>
						</select>


						<button type="button" class="btn btn-default btn-emploi-search"> <span class="glyphicon glyphicon-search"></span> Rechercher</button>

					</div>
				</form>
		</ul>
	</div>
</div> 

</div>

