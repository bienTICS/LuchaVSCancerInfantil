angular.module('starter.services', [])
    .service('Login', function() {
        var setUser = function(user_data) {
            localStorage.removeItem("login_user");
            window.localStorage.removeItem("login_user");
            window.localStorage.login_user = JSON.stringify(user_data);
        };
        var getUser = function(){
            return JSON.parse(window.localStorage.login_user || '{}');
        };
        return {
            getUser: getUser,
            setUser: setUser
        };
    }) 
;
