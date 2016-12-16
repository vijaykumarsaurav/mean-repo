<html>
	<head>

    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <script type="text/javascript" src="js/jquery-2.1.4.js"></script>


		<script type="text/javascript" src="js/bootstrap.js"></script>
        <script src="js/angular.min.js"></script>
        <script src="js/angular-messages.js"></script>
        <script src="js/angular-resource.js"></script>
        <script src="js/curd.js"></script>
  
	</head>
    <body >
    <div class="container">

    <div ng-app="myApp" ng-controller="test">
     <form method="post">
        <div>
        <h1 class="modal-header"> Curd In Angular</h1>
       <h3 class="text-success"> {{msg}}</h3>
        <div class="row">
            <div class="col-md-4">
                <label>First Name</label>
                <input type="hidden" name="id" ng-model="id" class="form-control" >
                 <!-- <input type="text" name="id" ng-model="id" class="form-control" ng-disabled="obj.idisable">       -->

                <input type="text" name="fname" ng-model="fname" class="form-control">          
            </div>
            <div class="col-md-4">
                <label>Last Name</label>
            <input type="text" name="lname"  ng-model="lname" class="form-control">
           
            </div>
            <div class="col-md-4">
                 <label>Email</label>
            <input type="text" name="email"  ng-model="email" class="form-control">
           
            </div>
        </div>
            <div class="row">
                <div class="col-md-4 form-group" style="margin-top: 20px;">

                    <input type="submit"  value="{{btnName}}" ng-click="insertdata()" class="btn btn-primary">    
                </div>
                
            </div>
        </div>
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Sr No</th>
                        <th>FirstName</th>
                        <th>LastName</th>
                        <th>Email</th>
                        <th>Action</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="student in data">

                        <td>{{student.id}}</td>
                        <td>{{student.fname}}</td>
                        <td>{{student.lname}}</td>
                        <td>{{student.email}}</td>
                       
                         <td> <button type="button" class="btn btn-primary" ng-click="editdata(student.id,student.fname,student.lname,student.email);">Edit</button>&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-primary" ng-click="deletedata(student.id);">Delete</button> </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </form>

    </div>
 </div>
    </body>
</html>
<script type="text/javascript">


</script>