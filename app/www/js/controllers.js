angular.module('starter.controllers', [])
.controller('AppCtrl', function($scope, $ionicModal, $timeout) {

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
.controller('diccionarioCtrl',function ($scope,$http){
    
})
.controller('reddeapoyoCtrl',function ($scope,$http){
    
})
.controller('directoriooscCtrl',function ($scope,$http){
    
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
.controller('homeCtrl',function ($ionicModal,$scope){
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
