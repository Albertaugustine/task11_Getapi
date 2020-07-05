  
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<style>
    table,tr,td{border: solid 3px grey; padding: 2px;}
</style>

<body ng-app = "myApp">
    <div class="jumbotron text-center ">
        <h1>HI!!</h1>
    </div>
<!--
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4" >
                <div ng-app="myApp" ng-controller = "myCtrl">
                    <table style="margin-left:auto; margin-right:auto;"> 
                        <tr>
                            <th> ID  </th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Branch</th>
                        </tr>
                        <tr ng-repeat="x in output">
                            <td><label>{{x.ID}}</label></td>                            
                            <td><label>{{x.Name}}</label></td>
                            <td><label>{{x.listitem}}</label></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>    -->
    <script src="app/controllers/postcontroller.js"></script>

</body>
</html>           