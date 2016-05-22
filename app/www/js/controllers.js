angular.module('starter.controllers', [])
.controller('CerrarSesion',function($ionicHistory,$scope,$state,Login,$ionicLoading){
    $scope.CerrarSesion=function (){
        $ionicLoading.show({})
        $ionicLoading.hide()
        $ionicHistory.clearCache();
        $ionicHistory.clearHistory();
        $state.go('home');
    }
})
.controller('homeCtrl', function($scope, $ionicModal, $timeout,Login,$state,$ionicPopup,$ionicLoading,URL_API,$http) {
    $('body').on('submit','.form-login',function (e){
        e.preventDefault();
        $ionicLoading.show({})
        $http({
            url: URL_API+'api_login',
            method: "POST",
            data: {'user':$('body .txt-user').val(),'pass':$('body .txt-pass').val()}
            ,headers: {
                'Content-type': "application/x-www-form-urlencoded; charset=UTF-8"
            }
        }).success(function(res){                
            $('.form-login')[0].reset();
            switch (res.accion){
                case '1':
                    Login.setUser({name: res.msj,id_token:res.id_token,rol_token:res.rol_token});
                    if(res.rol_token=='1'){
                        $state.go('app.principalPublico');
                    }else if(res.rol_token=='2'){
                        $state.go('app.principalPublico');
                    }else if(res.rol_token=='3'){
                        $state.go('app.principalAdolecente');
                    }else if(res.rol_token=='4'){
                        $state.go('app.principalEscuela');
                    }else if(res.rol_token=='5'){
                        $state.go('app.principalPaciente');
                    }else if(res.rol_token=='6'){
                        $state.go('app.principalMedico');
                    }else if(res.rol_token=='7'){
                        $state.go('app.principalPadredeFamilia');
                    }
                    $scope.modal.hide();
                    break;
                case '2':
                    $ionicPopup.alert({title:res.msj})
                    break;
            }
            $ionicLoading.hide()

        }).error(function(error){

        })

    });
    //ui-sref="app.inicio({id:result_search})"
    $ionicModal.fromTemplateUrl('templates/login.html', function($ionicModal) {
        $scope.modal = $ionicModal; 
    }, {
        // Use our scope for the scope of the modal to keep it simple
        scope: $scope,
        // The animation we want to use for the modal entrance
        animation: 'slide-in-up'
    }); 
})
.controller('principalPublicoCtrl', function($http,$scope,$ionicPopup) {

})
.controller('principalAdolecenteCtrl', function($http,$scope,$ionicPopup) {

})
.controller('principalEscuelaCtrl', function($http,$scope,$ionicPopup) {

})
.controller('principalMedicoCtrl', function($http,$scope,$ionicPopup) {

})
.controller('principalPacienteCtrl', function($http,$scope,$ionicPopup) {

})
.controller('principalPadredeFamiliaCtrl', function($http,$scope,$ionicPopup) {

})
.controller('tiposdeCancerCtrl',function ($scope,$http){
    
})
.controller('tiposdeCancerLeuceniaCtrl',function ($scope,$http){
    
})
.controller('queeselCancerCtrl',function ($scope,$http){
    
})
.controller('frecuenciadelcancerCtrl',function ($scope,$http){
    
})
.controller('signoysintomasdelcancerCtrl',function ($scope,$http){
    
})
.controller('medidaspreventivasCtrl',function ($scope,$http){
    
})
.controller('situamigotienecancerCtrl',function ($scope,$http){
    
})
.controller('diccionarioCtrl',function ($scope,$http,$ionicLoading,URL_API){
    $ionicLoading.show({})
    $http.get(URL_API+'api_diccionarios')
    .success(function(res){
        $ionicLoading.hide()
        $scope.diccionarios=res;
    }).error(function (error){
        
    })
})
.controller('diccionarioverCtrl',function ($scope,$http,$ionicLoading,URL_API,$stateParams){
    $ionicLoading.show({})
    $http.get(URL_API+'api_diccionarios')
    .success(function(res){
        $ionicLoading.hide()
        
        $scope.dic=_.find(res,{diccionario_id:$stateParams.id});
    }).error(function (error){
        
    })
})
.controller('reddeapoyoCtrl',function ($scope,$http){
    
})
.controller('directorioucCtrl',function ($scope,$http,$ionicLoading,URL_API){
    $ionicLoading.show({})
    $http.get(URL_API+'api_get_umas')
    .success(function(res){
        $ionicLoading.hide()
        $scope.umas=res;
    }).error(function (error){
        
    })
})
.controller('directorioUMACtrl',function ($stateParams,$scope,$http,$ionicLoading,URL_API){
    $ionicLoading.show({})
    $http.get(URL_API+'api_get_umas')
    .success(function(res){
        $ionicLoading.hide()
        $scope.uma=_.find(res,{directorio_id:$stateParams.id});
    }).error(function (error){
        
    })
})
.controller('directoriooscCtrl',function ($scope,$http,$ionicLoading,URL_API){
    $ionicLoading.show({})
    $http.get(URL_API+'api_get_osc')
    .success(function(res){
        $ionicLoading.hide()
        $scope.osc=res;
    }).error(function (error){
        
    })
})
.controller('directorioOSCCtrl',function ($scope,$http,$ionicLoading,URL_API,$stateParams){
    $ionicLoading.show({})
    $http.get(URL_API+'api_get_osc')
    .success(function(res){
        $ionicLoading.hide()
        $scope.osc=_.find(res,{osc_id:$stateParams.id});
    }).error(function (error){
        
    })
})
.controller('tiposdeCancerLinfomaCtrl',function ($scope,$http){
    
})
.controller('tiposdeCancerSarcomaCtrl',function ($scope,$http){
    
})
.controller('tiposdeCancerTumoresdeHigadoCtrl',function ($scope,$http){
    
})
.controller('tiposdeCancerTumoresdelSNCtrl',function ($scope,$http){
    
})
.controller('tiposdeCancerTumoresdeWilsCtrl',function ($scope,$http){
    
})
.controller('tiposdeCancerTumoresGerminalesCtrl',function ($scope,$http){
    
})
.controller('tiposdeCancerTumoresNeuroblastomaCtrl',function ($scope,$http){
    
})
.controller('tiposdeCancerTumoresOseosCtrl',function ($scope,$http){
    
})
.controller('tiposdeCancerTumoresRetinoblastomaCtrl',function ($scope,$http){
    
})
.controller('showMenu',function ($scope,$ionicPopover){
    $ionicPopover.fromTemplateUrl('templates/popover.html', {
        scope: $scope
    }).then(function(popover) {
        $scope.popover = popover;
    });
   $scope.openPopover = function($event) {
      $scope.popover.show($event);
   };
   $scope.$on('popover.hidden', function() {});
})
;
