<html>
	<head>
		<title>AngularJS kosár</title>
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
		<script src="<?php echo base_url(); ?>assets/js/controllers/shoppingCartController.js"></script>
	</head>
	<body ng-app="shoppingCart" ng-controller="shoppingCartController" ng-cloak>
		<a href="javascript:history.go(-1)">Vissza</a>
		<p class="text-uppercase h2 text-center font-weight-bold pt-3 pb-3">Kosár angularjs használatával</p>
		<div class="container" >
			<div class="row">
				<div class="col-md-4 mt-3" ng-repeat="x in items">
					<div class="termek">
						<p class="h4 text-info">{{x.Name}}</p>
						<p class="h4 text-danger">{{x.Price}} Ft</p>
						<input type="submit" class="btn btn-success form-control mt-3" value="Hozzáadás a kosárhoz" ng-click="addRow(x)" />
					</div>
				</div>
			</div>

			<p class="text-uppercase text-center h2 pt-3 pb-3">Kosár tartalma</p>
			<div class="table-responsive" id="oder_table">
				<table class="table table-bordered table-striped">
					<tr>
						<th width="50%">Termék neve</th>
						<th width="25%">Darab</th>
						<th width="25%">Darab ár</th>
					</tr>
					<tr ng-repeat="rowContent in row">
						<td>{{rowContent.Nev}}</td>
						<td>{{rowContent.Db}}</td>
						<td>{{rowContent.Ar}} Ft</td>
					</tr>
					<tr>
						<th colspan="2" class="text-right">Teljes ár:</th>
						<th class="bg-danger">{{ getTotal() }} Ft</th>
					</tr>
				</table>
			</div>
			<p>{{errortext}}</p>
		</div>
	</body>
</html>