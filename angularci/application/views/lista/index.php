<html>
	<head>
		<title>AngularJS lista keresőmezővel</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.12/angular-material.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.6/angular.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.6/angular-animate.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.6/angular-aria.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.6/angular-messages.min.js"></script>

		<!-- Angular Material Library -->
		<script src="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.12/angular-material.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>

		<!-- Saját controller -->
		<script src="<?php echo base_url(); ?>assets/js/controllers/nevekCtrl.js"></script>
	</head>
	<body ng-app="szuro" ng-controller="nevekCtrl">
		<a href="javascript:history.go(-1)">Vissza</a>
		<div>
			<p class="text-uppercase font-weight-bold h2 text-center pt-3">Gumi kereső</p>
			<div class="kisures"></div>
			<div class="container">
				Gumi neve: <input type="text" ng-model="nev" placeholder="Gumi neve" />
				Szélesség: <input type="text" ng-model="szel" placeholder="Gumi szélessége" />
				Per: <input type="text" ng-model="per" placeholder="Gumi per" />
				Átmérő: <input type="text" ng-model="atmero" placeholder="Gumi átmérő" />
			</div>
			<div class="kisures"></div>
			<div class="table-responsive" id="oder_table">
				<table class="table table-bordered table-striped">
					<tr>
						<th width="25%">Termék neve</th>
						<th width="25%">Szélesség</th>
						<th width="25%">Per</th>
						<th width="25%">Átmérő</th>
					</tr>
					<tr ng-repeat="x in names | filter:{Nev: nev, Szelesseg: szel, Per : per, Atmero : atmero}">
						<td>{{x.Nev}}</td>
						<td>{{x.Szelesseg}}</td>
						<td>{{x.Per}}</td>
						<td>{{x.Atmero}}</td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>