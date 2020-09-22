//Controllers AngularJS
var AngioApp = angular.module('AngioApp', [
	'AngioApp.Services',
	'angular-loading-bar'
]);

AngioApp

//Isso executa SEMPRE que o angular for chamado, independentemente do controller
.run(['$rootScope', '$http', '$interval', function($rootScope, $http, $interval) {
	onlines(false);

	$interval(function(){
		onlines(true);
	}, 10000)
	
	function onlines(ignoreLoading) {
		$http.get('/info/onlinesJSON', {ignoreLoadingBar: ignoreLoading})
		.success(function(response) {
			//O nome disso que vc ta criando se chama heartbeat avisar pro servidor quando o cara ta online.
			//console.log("heartbeat enviado com sucesso");
		});
	}
	
	angular.element('body').mouseenter(function(){
		$.post('/info/heartbeat', {status: 1}, {ignoreLoadingBar: true})
		.success(function(response) {
			//console.log("heartbeat enviado com sucesso");
		});
	});
	
	angular.element('body').mouseleave(function(){
		$.post('/info/heartbeat', {status : 2}, {ignoreLoadingBar: true})
		.success(function(response) {
			//console.log("heartbeat enviado com sucesso");
		});
	});
}]) 

.controller('RecadosCtrl', ['$rootScope', '$interval', 'AngioApi', function ($scope, $interval, AngioApi) {
	$scope.recados = [];

	getRecados(false);

	function getRecados(ignoreLoading) {
		AngioApi.Recados.GetAll(ignoreLoading).then(function(response){
			$scope.recados = response.data;
		});
	}
	
	$scope.fnDeletarRecado = function(data, index) {
		AngioApi.Recados.Deletar(data).then(function(response){
			if(response.data)
				getRecados(true);
			
		});
	};

	$interval(function(){
		getRecados();
	}, 1000000)
}])

.controller('PainelADMController', ['$rootScope', 'AngioApi', '$interval', function ($scope, AngioApi, $interval) {
	$scope.Painel = [];

	getPainelADM();

	function getPainelADM() {
		AngioApi.Painel.Get().then(function(response){
			$scope.Painel = response.data;
		});
	}

	$scope.fnAlterarTelaInicial = function(index) {
		AngioApi.TelaInicial.Alterar(data).then(function(response){
			if(response.data)
				getPainelADM(true);
			
		});
	};
	
	$interval(function(){
		getPainelADM();
	}, 10000)
}])

.controller('EnviarSMSCtrl', ['$rootScope', '$http', function($rootScope, $http){

	$rootScope.data = [];

	$rootScope.enviarSMS = function(data) {

		//http://api.zenvia360.com.br/GatewayIntegration/msgSms.do
		//enctype="account"  charset="ISO-8859-1"
		
		var SMSAuth = {};

		SMSAuth.url = 'http://api.zenvia360.com.br/GatewayIntegration/msgSms.do';
		SMSAuth.account = 'acorpore';
		SMSAuth.code = 'PwZe3ynkpP';
		SMSAuth.dispatch =  'send';

		var headers = {
			    'enctype': 'account',
			    'charset': 'ISO-8859-1'
		 	};

		$.post(SMSAuth.url, {
				'account' : SMSAuth.account,
				'code' : SMSAuth.code,
				'dispatch' : SMSAuth.dispatch,
				'to' : data.to,
				'msg': data.msg
			}		
		).error(function(response){
			window.location = 'http://www.angiocorpore.com.br/info/recados';
		});
	}

}])

.controller('FilaAtendimentoCtrl', ['$rootScope', '$interval', 'AngioApi', function ($scope, $interval, AngioApi) {
	$scope.Fila = [];

	getFila();

	function getFila() {
		AngioApi.Fila.Get().then(function(response){
			$scope.Fila = response.data;
		});
	}
	
	$interval(function(){
		getFila();
	}, 300000)
}])

;

//Filtros AngularJS

AngioApp
	.filter('nl2br', ['$sce', function ($sce) {
        return function (text) {
            return text ? $sce.trustAsHtml(text.replace(/\n/g, '<br/>')) : '';
        };
    }])

    .filter('todate', function () {
        return function (date) {
            return new Date(moment(date));
        }
    })