<html>
	<head>
		<title>AngularJS naptar</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.12/angular-material.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.6/angular.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.6/angular-animate.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.6/angular-aria.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.6/angular-messages.min.js"></script>

		<!-- Angular Material Library -->
		<script src="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.12/angular-material.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>

		<!-- Saját controller -->
		<script src="<?php echo base_url(); ?>assets/js/controllers/naptarCtrl.js"></script>
	</head>
	<body ng-app="naptar" ng-controller="naptarCtrl">
		<div class="kisures"></div>
		<div class="container">
			<p class="h2 font-weight-bold text-dark text-center pt-3 pb-3">Esemény vezérlő</p>
			<div class="row justify-content-md-center">
			    <div class="col-md-7 termek">
			    	<!-- esemény hozzáadása --> 	
			    	<div class="text-left ml-3" ng-repeat="hg in hozzaadgomb">
						<button ng-show="showAddChoice(choice)" ng-click="addNewChoice()" class="text-left btn btn-success mt-3"><i class="fa fa-plus"></i></button>
					</div>
					<div class="text-left ml-3" ng-repeat="hg in megsegomb">
						<button ng-show="showAddChoice(choice)" ng-click="deleteChoice()" class="text-left btn btn-danger mt-3"><i class="fa fa-minus"></i></button>
					</div>
					<hr>
					<!-- input mezők-->
					<form>
					<div class="row" ng-repeat="choice in choices">
						<div class="col-md-12">
							<small class="font-italic text-secondary mt-3 mb-3">A csillaggal jelölt rész kitöltése kötelező!</small>
						</div>
				      	<div class="col-md-12 mt-3 mb-3">
				      		Dátum: <input type="date" ng-model="datumkezdo" ng-required="true" />* - <input type="date" ng-model="datumvege"/>
				      	</div>
				      	<div class="col-md-6">
				      		<label for="mySelect">Jelző kiválasztása*:</label>
				      		<select name="repeatSelect" id="repeatSelect" ng-model="jelzo" ng-required="true">
						      <option ng-repeat="option in jelzok" value="{{option.ID}}">{{option.Ertek}}</option selected>
						    </select>
				      	</div>
				      	<div class="col-md-6">
				      		Cím*: <input type="text" ng-model="cim" ng-required="true"/>
				      	</div>
				      	<div class="col-md-12">
				      		<label for="mySelect">Leírás*:</label>
				      		<textarea rows="6" cols="44" ng-model="leiras" ng-required="true"></textarea>
				      	</div>
				      	<div class="col-md-12">
				      		<button type="button" class="btn btn-success mt-3 mb-3" ng-click="esemenyADD(datumkezdo, datumvege, jelzo, cim, leiras)">Hozzáadás</button>
				      	</div>
				    </div> 
					</form>
					<!-- input vége 
					<small class="font-italic">Itt látható a létrehozott események!</small>
				-->	
			        
			      	<div class="row esemenytabla" ng-repeat="x in esemenyeklista | orderBy: 'esemeny_kezdes'">
				      	<div ng-if="x.esemeny_jelzo == '1'" class="col-2 bg-danger mb-1 col-centered" >
				      		<i class="fa fa-exclamation pt-3" style="font-size:40px;"></i>
				      	</div>
				      	<div ng-if="x.esemeny_jelzo == '2'" class="col-2 bg-warning mb-1 col-centered" >
				      		<i class="fa fa-hourglass-half pt-3" style="font-size:40px;"></i>
				      	</div>
				      	<div ng-if="x.esemeny_jelzo == '3'" class="col-2 bg-info mb-1 col-centered" >
				      		<i class="fa fa-calendar pt-3" style="font-size:40px;"></i>
				      	</div>
				      	<div class="col-8 bg-white mb-1">
				      		<p class="h6 text-left text-secondary">Létrehozva: {{x.esemeny_kezdes}}</p>
				      		<p ng-if="x.esemeny_vege != '0000-00-00 00:00:00'" class="h6 text-left text-secondary">Esemény vége: {{x.esemeny_vege}}</p>
				      		<p class="text-left font-weight-bold h3">{{x.esemeny_cim}}</p>
				      		<p class="text-left">{{x.esemeny_leiras}}</p>
				      	</div>
				      	<div class="col-2 bg-danger mb-1">
				      		<button type="submit" class="btn" ng-click="esemenyDELETE(x)"><i class="fa fa-trash-o pt-3" style="font-size:40px;" ></i></button>
				      	</div>
			      	</div>		      				      	
			    </div>
  			</div>
		</div>

	</body>
</html>