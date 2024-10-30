<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="schedule/schedcss.css">
    <title>Time Table</title>
    <style>
  
    </style>
  </head>
  <body>
  
  <br><br><br>
  <div class="container">
    <div class="jumbotron">
      <h1 class="display-4" align="center">Schedule</h1>
      <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Code</th>
      <th scope="col">Subject</th>
      <th scope="col">Day</th>
      <th scope="col">Starting Time</th>
      <th scope="col">Ending Time</th>
      <th scope="col">Room</th>
      <th scope="col">Section</th>
    </tr>
  </thead>
  <tbody style='text-align: center;'>
  <?php
include "dbsched.php";
$sql = "Select * from studenttimetable";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_array($result)) {
        echo "<tr><td>" . $row["cd"]. "</td><td>" . $row["sb"] . "</td><td>" . $row["dy"] . "</td>
        <td>". $row["st"] . "</td><td>" . $row["et"]. "</td><td>" . $row["rm"]. "</td><td>" . $row["sc"]. "</td></tr>";
    }
    echo "</table>";
}
?>
  </tbody>
</table>
      </p>
    </div>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>