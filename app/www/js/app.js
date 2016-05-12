angular.module('underscore', [])
.factory('_', function() {
  return window._; // assumes underscore has already been loaded on the page
});

angular.module('starter', ['ionic','ngCordova', 'starter.controllers','underscore','ngResource','ngAnimate'])

.run(function($ionicPlatform) {
  $ionicPlatform.ready(function() {
    // Hide the accessory bar by default (remove this to show the accessory bar above the keyboard
    // for form inputs)
    if (window.cordova && window.cordova.plugins.Keyboard) {
      cordova.plugins.Keyboard.hideKeyboardAccessoryBar(true);
      cordova.plugins.Keyboard.disableScroll(true);

    }
    if (window.StatusBar) {
      // org.apache.cordova.statusbar required
      StatusBar.styleDefault();
    }
  });
})

.config(function($stateProvider, $urlRouterProvider,$ionicConfigProvider) {
    $ionicConfigProvider.tabs.position('bottom');
    $ionicConfigProvider.navBar.alignTitle('center');
    $stateProvider
    .state('home', {
        url: '/home',
        templateUrl: 'templates/inicio.html',
        controller: 'homeCtrl'
    })
    .state('app', {
        url: '/app',
        abstract: true,
        templateUrl: 'templates/menu.html',
        controller: 'AppCtrl'
    })

    .state('app.principalPublico', {
        url: '/principalPublico',
        views: {
            'menuContent': {
                templateUrl: 'templates/principal_publico.html',
                controller:'principalPublicoCtrl'
            }
        }
    }) 
    .state('app.principalAdolecente', {
        url: '/principalAdolecente',
        views: {
            'menuContent': {
                templateUrl:'templates/principal_adolecente.html',
                controller:'principalAdolecenteCtrl'
            }
        }
    }) 
    .state('app.principalEscuela', {
        url: '/principalEscuela',
        views: {
            'menuContent': {
                templateUrl:'templates/principal_escuela.html',
                controller:'principalEscuelaCtrl'
            }
        }
    })
    .state('app.principalMedico', {
        url: '/principalMedico',
        views: {
            'menuContent': {
                templateUrl:'templates/principal_medico.html',
                controller:'principalMedicoCtrl'
            }
        }
    })
    .state('app.principalPaciente', {
        url: '/principalPaciente',
        views: {
            'menuContent': {
                templateUrl:'templates/principal_paciente.html',
                controller:'principalPacienteCtrl'
            }
        }
    })
    .state('app.principalPadredeFamilia', {
        url: '/principalPadredeFamilia',
        views: {
            'menuContent': {
                templateUrl:'templates/principal_padredefamilia.html',
                controller:'principalPadredeFamiliaCtrl'
            }
        }
    })
    .state('app.tiposdeCancer', {
        url: '/tiposdeCancer',
        views: {
            'menuContent': {
                templateUrl: 'templates/prin_tiposdecancer.html',
                controller:'tiposdeCancerCtrl'
            }
        }
    })   
    .state('app.tiposdeCancerSarcoma', {
        url: '/tiposdeCancerSarcoma',
        views: {
            'menuContent': {
                templateUrl: 'templates/prin_tiposdecancer_sarcomas.html',
                controller:'tiposdeCancerSarcomaCtrl'
            }
        }
    })  
    $urlRouterProvider.otherwise('home');
});
