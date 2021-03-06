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

    $routeProvider.when('/requeriments', {
      templateUrl: 'partials/requeriments/requeriments.html',
      controller: 'requerimentsController'
    })

    $routeProvider.when('/seeTimes', {
      templateUrl: 'partials/seeTimes/seeTimes.html',
      controller: 'seeTimesController'
    })
    
    $routeProvider.otherwise({ redirectTo: '/home' })

  })