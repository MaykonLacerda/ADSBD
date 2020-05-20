angular.module('angularApp', [
  'ngRoute',
  'ngResource',
  'angular-loading-bar',
  'ngAnimate',
  'ngMaterial',
  'ngMessages',
  'vcRecaptcha'
])  

  .config(($routeProvider, $httpProvider, $mdDateLocaleProvider) => {
    $mdDateLocaleProvider.formatDate = function (date) {
      var m = moment(date)
      return m.isValid() ? m.format('DD/MM/YYYY') : ''
    }
    //$httpProvider.interceptors.push('auth')
    $routeProvider.when('/home', {
      templateUrl: 'partials/home/home.html',
      controller: 'HomeController'
    })

    $routeProvider.when('/donate', {
      templateUrl: 'partials/donate/donate.html',
      controller: 'DonateController'
    })
    $routeProvider.otherwise({ redirectTo: '/home' })

  })

  .controller('recapCtrl',['vcRecaptchaService','$http',function(vcRecaptchaService,$http){
    var vm = this;
    vm.publicKey = "6LehQe4UAAAAAK-WG5VL8bjeJiPlnsXmFNJzlOSb";

    vm.sendMessage = function(){

     /* vcRecaptchaService.getResponse() gives you the g-captcha-response */

        if(vcRecaptchaService.getResponse() === ""){ //if string is empty
            alert("Por favor, resolva o captcha!")
        }else {
            var post_data = {  //prepare payload for request
                'name':vm.name,
                'email':vm.email,
                'phone':vm.phone,
                'mensage':vm.mensage,
                'g-recaptcha-response':vcRecaptchaService.getResponse()  //send g-captcah-response to our server
            }


/* MAKE AJAX REQUEST to our server with g-captcha-string */
                $http.post('/api/sendmail',post_data).success(function(response){
                if(response.error === 0){
                    alert("Successfully verified and signed up the user");
                }else{
                    alert("User verification failed");
                }
            })
            .error(function(error){
              alert(error);
            })
        }
    }
}])