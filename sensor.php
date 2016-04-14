
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
 <a href="untitled.php"> <button class="btn btn-success btn-lg" style="width: 200px; position: fixed; left:30px;"> Go Back</button></a> 
 <button data-toggle="modal" data-target="#myModal" class="btn btn-success btn-lg" style="width: 200px; position: fixed; right:30px;"> Add Sensor</button> <br><br>
 <hr>
  <table style="width: 800px" id="myTable" class="table table-hover">
    <thead>
      <tr >
        <th>Sensor Name</th>
        <th>Sensor ID</th>
        <th>Status</th>
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

         $id = $_GET['id'];

        //if ($conn->query($r) === TRUE) {
            //echo "New record created successfully";
        //} else {
            //echo "Error: " . $sql . "<br>" . $conn->error;
        //}
        $r = "Select * FROM sensor_list WHERE hub_id = '".$id."'";

        $a = $conn->query($r);
          while( $row = mysqli_fetch_array($a) ){
            echo "<tr><td>" . $row['Sensor_name'] . "</td><td>" . $row['Sensor_id'] . "</td><td>" . $row['status'] . "</td>"; 
            $id = $row['Sensor_name']; //$row['index'] the index here is a field name
           echo '<td> <a class="btn btn-danger" href="del.php?id='.$id.'" ><span class="glyphicon glyphicon-trash">';
           echo '</span> Delete </a> &nbsp<button data-toggle="modal" data-target="#myModal2" class="btn btn-info">';
           echo '<span class="glyphicon glyphicon-pencil"></span> Edit Status</a>';
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
          <h4 class="modal-title">Provide Details of Your Sensor</h4>
        </div>
     <form action="handle.php" method="Get" >

  <div class="row">
  <div class="col-sm-2"></div>
  <div class="col-sm-8">
    <label for="sensorname">Sensor Name</label>
    <input type="email" class="form-control" name="sensorname" placeholder="Sensor Name"><br>
 
    <label for="type">Long</label>
    <input type="email" class="form-control" name="Description" placeholder="What Type"><br>
    <label for="url">Latitude</label>
   <input type="email" class="form-control" name="url" placeholder="URL"><br>

    <label for="format">Sensor Id</label>
   <input type="email" class="form-control" name="format" placeholder="Data Format"><br>
     <label for="hub">Select Existing Sensor hub</label>
    <input type="email" class="form-control" name="hub" placeholder="Select Existing Sensor hub"><br>
  
    <label for="api">Sensor Status</label>
    <input type="email" class="form-control" name="api" placeholder="API Token"><br>
    <p class="help-block">Please Provide the Correct Information so that We can MAP your Sensor correctly.</p>
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
<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Provide Details of the Group</h4>
        </div>
     <form action="handle3.php" method="Get">

  <div class="row">
  <div class="col-sm-2"></div>
  <div class="col-sm-8">
    <label for="sensorname">New Status</label>
    <input type="email" class="form-control" id="sensorname" placeholder="Sensor Name"><br>
    <input id="id" value=''><br>
 
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
</body>
</html>