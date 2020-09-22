angular.module("AngioApp.Services", [

])

.factory('AngioApi', ['$http', function($http){
	var Service = {
		Painel: {
			Get : function(){
				return $http({
					method: 'GET',
					url: '/info/recados/painelADMJSON',
					ignoreLoadingBar: true
				}).then(function successCallback(response) {
                    return response;
                }, function errorCallback(response) {
                    return response;
                });				
			}			
		},
		
		Fila: {
			Get : function(){
				return $http({
					method: 'GET',
					url: '/info/filaatendimento/filaatendimentoJSON',
					ignoreLoadingBar: true
				}).then(function successCallback(response) {
                    return response;
                }, function errorCallback(response) {
                    return response;
                });				
			}			
		},
		
		Recados : {
			GetAll: function(ignoreLoading){
				return $http({
					method: 'GET',
					url: '/info/recados/recadosJSON',
					ignoreLoadingBar: true
				}).then(function successCallback(response) {
                    return response;
                }, function errorCallback(response) {
                    return response;
                });
			},
			
			Deletar: function(data) {
				return $http({
					method: 'GET',
					url: '/info/recados/deleteRecado/' + data,
				}).then(function successCallback(response) {
                    return response;
                }, function errorCallback(response) {
                    return response;
                });
			}		
		}
	};
	
	return Service;
}])