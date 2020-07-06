<!DOCTYPE html >
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="x-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
  </head>
  <body ng-app = 'myApp'>>
    
    <div class="jumbotron text-center " ng-controller = "myCtrl">
        
        
      <table class="table table-striped">
      <tr>
            <th>ID</th>
            <th>Name</th>
      </tr>
        
      <tr ng-repeat = "x in names">
          <td>{{ x.ID }}</td>
          <td>{{ x.Name }}</td>
          
      </tr>
      </table>

    
    </div>
    <script src="app/controllers/postcontroller.js"></script>
  </body>
</html>
