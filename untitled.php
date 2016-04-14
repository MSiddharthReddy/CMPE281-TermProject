
<html>
<head>
<script type='text/javascript'
  src='http://code.jquery.com/jquery-2.0.2.js'></script>
<link rel="stylesheet" type="text/css"
  href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css"
  href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/simple-sidebar.css">
<script type='text/javascript'
  src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css"
  href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">

  <style type="text/css">
  table{
      text-align: center;
      margin: auto;
      width: 400px;

    }
    th
    {
      text-align: center;
    }
    button *{
      margin-right: 30px;
    }
    </style>
</head>
<body>
<nav class="navbar navbar-inverse">
   <a class="navbar-brand" href="markers.html"><span class="glyphicon glyphicon-home"></span></a>
</nav>
<br>
 <button data-toggle="modal" data-target="#myModal" class="btn btn-success btn-lg" style="width: 200px; position: fixed; right:30px;"> Add a HUB</button> <br><br>
 <hr>
  <table style="width: 800px" id="myTable" class="table table-hover">
    <thead>
      <tr >
        <th>Hub ID</th>
        <th>Hub Name</th>
        <th>Manage</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbnam = "sensor";

        // Create connection
        $conn = new mysqli($servername, $username, $password,$dbnam);



        //if ($conn->query($r) === TRUE) {
            //echo "New record created successfully";
        //} else {
            //echo "Error: " . $sql . "<br>" . $conn->error;
        //}
        $r = "Select * FROM hub_list";

        $a = $conn->query($r);
          while( $row = mysqli_fetch_array($a) ){
            echo "<tr><td>" . $row['id'] . "</td><td>" . $row['name'] . "</td>"; 
            $id = $row['id']; //$row['index'] the index here is a field name
           echo '<td> <a class="btn btn-danger" href="del2.php?id='.$id.'" ><span class="glyphicon glyphicon-trash">';
           echo '</span> Delete </a> &nbsp<a href="sensor.php?id='.$id.'" class="btn btn-info">';
           echo '<span class="glyphicon glyphicon-pencil"></span> Edit</a>';
         echo '</td>';
        echo '</tr>';
           }
      ?>
      
    </tbody>
  </table>
 </div>
 </div>
 </div>
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Provide Details of Your Hub</h4>
        </div>
     <form action="handle2.php" method="Get" >

  <div class="row">
  <div class="col-sm-2"></div>
  <div class="col-sm-8">
    <label for="sensorname">Hub Name</label>
    <input type="email" class="form-control" name="sensorname" placeholder="Sensor Name"><br>
 
    <label for="type">Long</label>
    <input type="email" class="form-control" name="Longitude" placeholder="What Type"><br>

    <label for="format">Hub Id</label>
   <input type="email" class="form-control" name="format" placeholder="Data Format"><br>
    <label for="url">Latitude</label>
   <input type="email" class="form-control" name="Latitude" placeholder="URL"><br>
  <div style="text-align: center;">
  <button type="submit" class="btn btn-success">Submit</button>
  <button type="reset" class="btn btn-danger">Reset</button><br><br>
  </div>
  </div>
  </div>
</form>
</div>
</div>
</div>

  </div>
  </div>
</form>
</div>
</div>
</div>
</body>
</html>