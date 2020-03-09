angular.module('angularApp', [
  'ngRoute',
  'ngResource',
  'angular-loading-bar',
  'ngAnimate',
  'ngMaterial',
  'ngMessages'
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
    $routeProvider.otherwise({ redirectTo: '/home' })

  })