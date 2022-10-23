<?php
include "database.php";

if(isset($_POST['submit'])) {
    $airline = $_POST['airline'];
    $country = $_POST['country'];

    $sql = "INSERT INTO `airlines`(`id`, `name`, `country`) VALUES (NULL,'$airline','$country')";

    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: index.php?msg=New record created successfully");
    }
    else {
        echo "Failed: " . mysqli_error($conn);
    }
}

?>

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
    <title>Airlines</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5 text-light" style="background-color: black" >
        Airlines
    </nav>
    <div class="container">
        <div class="text-center mb-4">
            <h3>New Airline</h3>
            <p class="text-muted">Complete the form to add a new airline</p>
        </div>
        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row">
            <div class="col">
                <label class="form-label">Name of airline</label>
                <input type="text" class="form-control" name="airline" placeholder="Airline">
            </div>





        </div>
        <div class="">
        <select class="form-select" name="country" aria-label="Default select example">
  <option selected>Select country</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
</div>
        <div>
            <button type="submit" class="btn btn-success" name="submit">Save</button>
            <a href="index.php" class="btn btn-danger">Cancel</a>
        </div>
        </form>

        </div>
    </div>
    
</body>
</html>