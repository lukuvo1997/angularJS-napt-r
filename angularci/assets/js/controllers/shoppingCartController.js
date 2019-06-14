var app = angular.module('shoppingCart', []);
		app.controller('shoppingCartController', function($scope){
			$scope.items = [
			{
				ID : "0",
				Name : "Laptop",
				Price : "320000"
			},
			{
				ID : "1",
				Name : "Pohár",
				Price : "10000"
			},
			{
				ID : "2",
				Name : "TV",
				Price : "1080000"
			}
			];

			$scope.row = [];
			$scope.teljesar = 1;
			$scope.mehet = 0;
			$scope.foglalt = 0;
			$scope.hely = 0;
			$scope.keep = true;

			$scope.addRow = function($x) {
				if ($scope.mehet == 0){
					$scope.row.push({
						ID : $x.ID,
						Nev : $x.Name,
						Db : 1,
						Ar : $x.Price
					});
				}else{
					angular.forEach($scope.row, function(value, key){
						if ($scope.keep){
							if(value.Nev ==  $x.Name){
				           		console.log("Foglalt");
				           		$scope.foglalt = 1;
				           		$scope.keep = false;
				        	}else{
				        		$scope.hely++;
				        	}
						}
			        	
		        	});
					console.log("for után a hely: ",$scope.hely);
		        	if ($scope.foglalt == 0){
		        		$scope.row.push({
		        			ID : $x.ID,
							Nev : $x.Name,
							Db : 1,
							Ar : $x.Price
						});
		        	}else{
						var product1 = $scope.row[$scope.hely];
						product1.Db += 1;
						$scope.hely = 0;
		        	}

		        	console.log("a végén a hely: ",$scope.hely);
				}

				$scope.foglalt = 0;
				$scope.mehet++;
				$scope.hely = 0;
				$scope.keep = true;

				$scope.getTotal = function(){
				    var total = 0;
				    for(var i = 0; i < $scope.row.length; i++){
				        var product = $scope.row[i];
				        total += (product.Ar * product.Db);
				    }
				    return total;
				}
  			};

  			
		});