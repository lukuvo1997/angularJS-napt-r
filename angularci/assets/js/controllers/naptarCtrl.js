angular.module('naptar', []).controller('naptarCtrl', function($scope,  $http){

   	$scope.esemenyeklista = [];

   	$scope.getUsers = function(){
	    $http.get('select').then(function successCallback(response) {
	      // Assign response to users object
	      $scope.esemenyeklista = response.data;
	    }); 
	}
	$scope.getUsers();
	
	$scope.jelzok = [
		{
			ID : '1',
			Ertek : 'Fontos'
		},
		{
			ID : '2',
			Ertek : 'Határidős'
		},
		{
			ID : '3',
			Ertek : 'Alap'
		}
	];
	$scope.choices = [];
	$scope.hozzaadgomb = [{
		ID : '1'
	}];
	$scope.megsegomb =[];
   
	$scope.addNewChoice = function() {
		var newItemNo = $scope.choices.length+1;
		var newItemNo2 = $scope.hozzaadgomb.length-1;
		var newItemNo3 = $scope.megsegomb.length+1;

		if (newItemNo <2){
			$scope.choices.push({'id' : '' + newItemNo});
			$scope.megsegomb.push({'id' : '' + newItemNo});
		}
		$scope.hozzaadgomb.pop();
     	
	};
   
    $scope.removeNewChoice = function() {
     	var newItemNo = $scope.choices.length-1;
    	if ( newItemNo !== 0 ) {
      		$scope.choices.pop();
     	}
   	};

   	$scope.deleteChoice = function() {
     	var newItemNo = $scope.choices.length-1;
     	var newItemNo2 = $scope.megsegomb.length-1;
     	var newItemNo3 = $scope.hozzaadgomb.length+1;
      	$scope.choices.pop();
      	$scope.megsegomb.pop();
      	$scope.hozzaadgomb.push({'id' : '' + newItemNo});
   	};
   
   	$scope.showAddChoice = function(choice) {
     	return choice.id === $scope.choices[$scope.choices.length-1].id;
   	};

   	$scope.esemenyDELETE = function($x){
   		$http({
   			method: 'POST',
   			url: 'delete',
   			data: {'esemeny_id':$x.esemeny_id}
   		})
   		$scope.getUsers();
   	}

   	$scope.esemenyADD = function(datumkezdo, datumvege, jelzo, cim, leiras){
   		$http({
   			method: 'POST',
   			url: 'insert',
   			data: {'datum_kezdo':datumkezdo, 'datum_vege':datumvege ,'jelzo':jelzo, 'cim':cim, 'leiras':leiras}
   		})
   		$scope.getUsers();
   	}
   	
});