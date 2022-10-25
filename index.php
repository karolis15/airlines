<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Bootstrap -->
    <title>East Airlines</title>
</head>
<body>
  <!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light" >
  <a class="navbar-brand" href="index.php">East Airlines</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Airports<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="countries.php">Countries</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="airlines.php">Airlines</a>
      </li>
    </ul>
  </div>
</nav>
<!-- navbar -->

<div class="container">
  <?php
  if(isset($_GET['msg'])) {
    $msg = $_GET['msg'];
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    '.$msg.'
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>'
  ;}
  ?>
  <a href="add.php" class="btn btn-dark mb-3">Add New</a>

  <table class="table table-hover text-center">
  <thead class ="table-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Country</th>
      <th scope="col">Location</th>
      <th scope="col">Airlines</th>
      <th scope="col">Actions</th>

    </tr>
  </thead>
  <tbody>
    <?php
    include "database.php";
    $sql = "SELECT * FROM `airlines`";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      ?>
          <tr>
      <td><?php echo $row['name'] ?></td>
      <td><?php echo $row['country'] ?></td>
      <td><?php echo $row['location'] ?></td>
      <td><?php echo $row['airlines'] ?></td>
      <td>
      <button type="button" class="btn btn-warning" href="edit.php?id=<?php echo $row['id'] ?>">Edit</button>
      <button type="button" class="btn btn-danger" href="delete.php?id=<?php echo $row['id'] ?>">Delete</button>
      </td>

    </tr>

      <?php
    }
    ?>

  </tbody>
</table>
</div>


    
</body>
</html>