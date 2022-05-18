<?php
include 'connection.php';
session_start();
if (isset($_SESSION['email'])) {
  // header("Location:userI.php");  
} else {
  header("Location:index.php");
}

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>User-Report</title>
</head>
<style>
  body {
    background-image: linear-gradient(to left, #74ebd5, #9face6);
  }

  table {
    background-color: white;
    border-radius: 15px;
  }

  th,
  td {
    font-size: 30px;
    padding: 14px 31px;
  }

  p {
    font-size: 65px;
    font-weight: bold;
  }
</style>

<body>
  <div class="container mt-4">
    <center>

      <div>
        <p> Assigned Project Details</p>
      </div>
      <div>
        <?php
        $id = $_GET['id'];
        // echo $id;
        include 'connection.php';
        // $nemail = $_POST['$email'];
        // echo $nemail;
        $sql = "Select *
        FROM project
        RIGHT OUTER JOIN regdetails
        ON project.name=regdetails.pname  WHERE regdetails.id=$id";
        $ret = pg_query($db, $sql);
        if (!$ret) {
          echo pg_last_error($db);
          exit;
        }
        ?>
        <table class="m-4">
          <?php
          // while ($row = pg_fetch_row($ret)) {
          $row = pg_fetch_row($ret)
          ?>

          <tr>
            <th>Project-Name</th>
            <td><?php echo $row[1]; ?></td>
          </tr>
          <tr>
            <th>start date</th>
            <td> <?php echo $row[2] ?></td>
          </tr>
          <tr>
            <th>End-Date</th>
            <td> <?php echo $row[3]; ?></td>
          </tr>
          <tr>
            <th>Details</th>
            <td> <?php echo $row[4]; ?></td>
          </tr>
          <tr>
            <th>Technology</th>
            <td> <?php echo $row[6]; ?></td>
          </tr>
          <tr>
            <th>Object</th>
            <td> <?php echo $row[7]; ?></td>
          </tr>
        </table>
        <p><a class="btn btn-success" href="destroyy.php">Logout</a></p>
      </div>
    </center>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>