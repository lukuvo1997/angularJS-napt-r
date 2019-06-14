<!DOCTYPE html>
<html>
<head>
	<title>Főoldal</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
</head>
<body>
	<div class="kisures"></div>
	<div class="container">
		<p class="pb-3 text-success">Elkészült feladatok <b>AngularJS</b> használatával!</p>
		<div class="row">
			<div class="col-md-4 mr-3">
				<p class="text-center text-uppercase h2 font-weight-bold pt-3 pb-3">2. feladat</p>
				<small class="text-justify">
					Leírás: 2. https://material.angularjs.org/ - t felhasználva építs fel egy kosár oldalt (webshop), csak az adatberkérővel. Azaz nem kell semmit menteni, csak hozd létre HTML-ben a webshop-okban szokásos adatlapot.
				</small>
				<p class="h2 text-center pt-3 pb-3"><a href="<?php echo base_url(); ?>pages/kosar">Kosár</a></p>
			</div>
			<div class="col-md-4 ml-3">
				<p class="text-center text-uppercase h2 font-weight-bold pt-3 pb-3">3. feladat</p>
				<small class="text-justify">
					Leírás: 3.https://material.angularjs.org/ - t felhasználva építs fel egy gumi keresőt/szűrőt. Nem kell semmit menteni, csak hozd létre HTML-ben a gumi webshop-okban szokásos keresőt.
				</small>
				<p class="h2 text-center pt-3 pb-3"><a href="<?php echo base_url(); ?>pages/kereso">Gumi kereső</a></p>
			</div>
		</div>
	</div>
</body>
</html>