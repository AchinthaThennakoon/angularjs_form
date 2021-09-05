var myForm = angular.module('myForm', []);

myForm.controller("myController", function($scope, $http) {

    //submit function
    $scope.sumbit = function () {

        //test
        console.log($scope.username);
        console.log($scope.index);
        console.log($scope.email);



        $http.post("content/lib/insert.php", {
            'userName': $scope.username,
            'userIndex': $scope.index,
            'userEmail': $scope.email
        }).then(function (response){
            alert("successfull");
            console.log(response);

        },function (reason){
            $scope.error= reason.data;
        });
        //clear input field
        /*//
        $scope.username = "";
        $scope.index = "";
        $scope.email = "";
*/
    };
});


