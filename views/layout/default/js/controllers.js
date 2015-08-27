var myApp = angular.module('myApp', []);

myApp.controller('mainCtrl', function ($scope, $http, $timeout) {
    $scope.miVector = [
      {'name': '8',
       'snippet': 'Oye, hijo m�o, la instrucci�n de tu padre, Y no desprecies la direcci�n de tu madre;'},
      {'name': '9',
       'snippet': 'Porque adorno de gracia ser�n a tu cabeza, Y collares a tu cuello. '},
      {'name': '10',
       'snippet': 'Hijo m�o, si los pecadores te quisieren enga�ar, No consientas.'}
    ];


    $scope.mContactar = function()
    {
          $('#contactUs').modal();
    };  

    $scope.getList = function(){

        $http.get($scope.ajaxUrl + '&classMethod=getList&type=' + $scope.currentListItem).success(function(source){
            $scope.list = source;
        });
    };
    
});
