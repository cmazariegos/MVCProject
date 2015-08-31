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

    $scope.getERP = function(){
        //alert("Hello\nHow are you?");
        /*$http.get($scope.ajaxUrl + '&classMethod=getList&type=' + $scope.currentListItem).success(function(r){
            $scope.list = r;
        });*/
        
        $http.get("http://localhost/MVCProject/post/getMsg").success(function(r){
                        $scope.list = r;
                        
            alert($scope.list.msg);
        });
        
        //$scope.send("http://localhost/MVCProject/post/getMsg", "hi", function(r){
          //  alert(r.msg);
        //});    
        //alert("si llego al fin");
    };
    $scope.send = function(url, data, $cb){
        $http.post(url, data, {
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            }
        }).success(function(response) {
            if(response.result == 1){
                $cb(response);
                //alert("good!!");
            } else if((response.result == 0)){
                alert("error");
            }
        });
    };    
    
});
