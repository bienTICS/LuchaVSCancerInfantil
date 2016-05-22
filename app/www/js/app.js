angular.module('underscore', [])
    .factory('_', function() {
    return window._; // assumes underscore has already been loaded on the page
});
angular.module('starter', ['ionic','ngCordova', 'starter.controllers','starter.config','starter.services','underscore','ngResource','ngAnimate'])
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
        templateUrl: 'templates/menu.html'
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
    .state('app.queeselCancer', {
        url: '/queeselCancer',
        views: {
            'menuContent': {
                templateUrl:'templates/publico/pub_queeselcancer.html',
                controller:'queeselCancerCtrl'
            }
        }
    })
    .state('app.frecuenciadelcancer', {
        url: '/frecuenciadelcancer',
        views: {
            'menuContent': {
                templateUrl:'templates/publico/pub_frecuenciadelcancer.html',
                controller:'frecuenciadelcancerCtrl'
            }
        }
    })
    .state('app.signoysintomasdelcancer', {
        url: '/signoysintomasdelcancer',
        views: {
            'menuContent': {
                templateUrl:'templates/publico/pub_signosysintomas.html',
                controller:'signoysintomasdelcancerCtrl'
            }
        }
    })
    .state('app.medidaspreventivas', {
        url: '/medidaspreventivas',
        views: {
            'menuContent': {
                templateUrl:'templates/publico/pub_medidaspreventivas.html',
                controller:'medidaspreventivasCtrl'
            }
        }
    })
    .state('app.situamigotienecancer', {
        url: '/situamigotienecancer',
        views: {
            'menuContent': {
                templateUrl:'templates/publico/pub_situamigotienecancer.html',
                controller:'situamigotienecancerCtrl'
            }
        }
    })
    .state('app.diccionario', {
        url: '/diccionario',
        views: {
            'menuContent': {
                templateUrl:'templates/publico/pub_diccionario.html',
                controller:'diccionarioCtrl'
            }
        }
    })
    .state('app.diccionariover', {
        url: '/diccionariover/:id',
        views: {
            'menuContent': {
                templateUrl:'templates/publico/pub_diccionariover.html',
                controller:'diccionarioverCtrl'
            }
        }
    })
    .state('app.reddeapoyo', {
        url: '/reddeapoyo',
        views: {
            'menuContent': {
                templateUrl:'templates/publico/pub_reddeapoyo.html',
                controller:'reddeapoyoCtrl'
            }
        }
    })
    .state('app.directoriouc', {
        url: '/directoriouc',
        views: {
            'menuContent': {
                templateUrl:'templates/publico/pub_directoriounidades.html',
                controller:'directorioucCtrl'
            }
        }
    })
    .state('app.directorioUMA', {
        url: '/directorioUMA/:id',
        views: {
            'menuContent': {
                templateUrl:'templates/publico/pub_directorioUMA.html',
                controller:'directorioUMACtrl'
            }
        }
    })
    .state('app.directorioosc', {
        url: '/directorioosc',
        views: {
            'menuContent': {
                templateUrl:'templates/publico/pub_directorio_osc.html',
                controller:'directoriooscCtrl'
            }
        }
    })
    .state('app.directorioOSC', {
        url: '/directorioOSC/:id',
        views: {
            'menuContent': {
                templateUrl:'templates/publico/pub_directorioOSC.html',
                controller:'directorioOSCCtrl'
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
    .state('app.tiposdeCancerLeucenia', {
        url: '/tiposdeCancerLeucenia',
        views: {
            'menuContent': {
                templateUrl: 'templates/tipos_cancer/tc_leucenia.html',
                controller:'tiposdeCancerLeuceniaCtrl'
            }
        }
    }) 
    .state('app.tiposdeCancerLinfoma', {
        url: '/tiposdeCancerLinfoma',
        views: {
            'menuContent': {
                templateUrl: 'templates/tipos_cancer/tc_linfoma.html',
                controller:'tiposdeCancerLinfomaCtrl'
            }
        }
    }) 
    .state('app.tiposdeCancerSarcoma', {
        url: '/tiposdeCancerSarcoma',
        views: {
            'menuContent': {
                templateUrl: 'templates/tipos_cancer/tc_sarcomas.html',
                controller:'tiposdeCancerSarcomaCtrl'
            }
        }
    })   
    .state('app.tiposdeCancerTumoresdeHigado', {
        url: '/tiposdeCancerTumoresdeHigado',
        views: {
            'menuContent': {
                templateUrl: 'templates/tipos_cancer/tc_tumoresdehigado.html',
                controller:'tiposdeCancerTumoresdeHigadoCtrl'
            }
        }
    })  
    .state('app.tiposdeCancerTumoresdelSN', {
        url: '/tiposdeCancerTumoresdelSN',
        views: {
            'menuContent': {
                templateUrl: 'templates/tipos_cancer/tc_tumoresdelsistemanervioso.html',
                controller:'tiposdeCancerTumoresdelSNCtrl'
            }
        }
    }) 
    .state('app.tiposdeCancerTumoresdeWils', {
        url: '/tiposdeCancerTumoresdeWils',
        views: {
            'menuContent': {
                templateUrl: 'templates/tipos_cancer/tc_tumoresdewils.html',
                controller:'tiposdeCancerTumoresdeWilsCtrl'
            }
        }
    }) 
    .state('app.tiposdeCancerTumoresGerminales', {
        url: '/tiposdeCancerTumoresGerminales',
        views: {
            'menuContent': {
                templateUrl: 'templates/tipos_cancer/tc_tumoresgerminales.html',
                controller:'tiposdeCancerTumoresGerminalesCtrl'
            }
        }
    })
    .state('app.tiposdeCancerTumoresNeuroblastoma', {
        url: '/tiposdeCancerTumoresNeuroblastoma',
        views: {
            'menuContent': {
                templateUrl: 'templates/tipos_cancer/tc_tumoresneuroblastoma.html',
                controller:'tiposdeCancerTumoresNeuroblastomaCtrl'
            }
        }
    })
    .state('app.tiposdeCancerTumoresOseos', {
        url: '/tiposdeCancerTumoresOseos',
        views: {
            'menuContent': {
                templateUrl: 'templates/tipos_cancer/tc_tumoresoseos.html',
                controller:'tiposdeCancerTumoresOseosCtrl'
            }
        }
    })
    .state('app.tiposdeCancerTumoresRetinoblastoma', {
        url: '/tiposdeCancerTumoresRetinoblastoma',
        views: {
            'menuContent': {
                templateUrl: 'templates/tipos_cancer/tc_tumoresretinoblastoma.html',
                controller:'tiposdeCancerTumoresRetinoblastomaCtrl'
            }
        }
    })
    $urlRouterProvider.otherwise('home');
});
