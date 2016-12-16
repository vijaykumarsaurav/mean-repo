 var app = angular.module('myApp',[]);


app.controller('test',function($scope,$http){

$scope.obj = {'idisable':false}
$scope.btnName = "Insert";

    $scope.insertdata=function(){
       alert($scope)
        $http.post("insert.php",{'id':$scope.id,'fname':$scope.fname,'lname':$scope.lname,'email':$scope.email,'btnName':$scope.btnName})
        .success(function(data){
            $scope.msg="Data insert Successfully";
             $scope.data=data;     
        })

    
    }
       /* $scope.displaystud = function(){
            $http.get("select.php")
            .success(function(data){
                //alert(data)
            $scope.data=data;           
        })
        }*/

         $scope.editdata=function(id,fname,lname,email){
           
            $scope.fname = fname;
            $scope.lname= lname;
            $scope.email= email; 
            $scope.id= id; 
            $scope.btnName ="Update";
            $scope.obj.idisable = true;   
            $scope.displaystud();
    }

        $scope.deletedata=function(id){          
        $http.post("delete.php",{'id':id})
        .success(function(){
            $scope.msg="Data insert Successfully";
            $scope.displaystud();
        }) 
          
    }

    
});