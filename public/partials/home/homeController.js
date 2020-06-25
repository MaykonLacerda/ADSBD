angular.module('angularApp').controller('HomeController', function ($scope, vcRecaptchaService, $resource) {
  const publicKey = '6LehQe4UAAAAAK-WG5VL8bjeJiPlnsXmFNJzlOSb'
  $scope.showButtonSentEmail = false
  $scope.showDanger = false
  $scope.showWarning = false
  $scope.showSuccess = false
  $scope.name = ''
  $scope.email = ''
  $scope.phone = ''
  $scope.message = ''

  $scope.captcha = {
    response: null,
    widgetId: null,
    modelKey: publicKey,
    size: 'normal',
    setResponse: function (response) {
      $scope.captcha.response = response;
      $scope.showButtonSentEmail = true
    },
    setWidgetId: function (widgetId) {
      $scope.captcha.widgetId = widgetId;
    },
    cbExpiration: function () {
      vcRecaptchaService.reload($scope.captcha.widgetId);
      $scope.showButtonSentEmail = false
      $scope.captcha.response = null;
    }
  }

  const validadeFields = () => {
    if ($scope.name.length === 0) {
      $scope.showWarning = true
      return false
    }
    if ($scope.email === undefined || $scope.email.length === 0 || $scope.email.indexOf('@') === -1 || $scope.email.indexOf('.') === -1) {
      $scope.showWarning = true
      return false
    }
    if ($scope.phone.length === 0) {
      $scope.showWarning = true
      return false
    }
    if ($scope.message.length === 0 && $scope.message.length > 5000) {
      $scope.showWarning = true
      return false

    }
    return true
  }


  $scope.sendMessage = () => {
    $scope.showDanger = false

    if (!validadeFields()) {
      return
    }

    const mailServer = $resource('/api/sendmail')

    const ds = new mailServer({
      name: $scope.name,
      email: $scope.email,
      phone: $scope.phone,
      message: $scope.message,
      'g-recaptcha-response': vcRecaptchaService.getResponse()
    })
    ds.$save().then((response) => {
      $scope.name = ''
      $scope.email = ''
      $scope.phone = ''
      $scope.message = ''
      $scope.showSuccess = true
    }).catch((error) => {
      $scope.showDanger = true
      console.error(error)
    })
  }


})