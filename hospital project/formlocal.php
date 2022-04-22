<!DOCTYPE html>
<html lang="EN">
<head>
    <title>Monkole's Hospital registration</title>
    <?php include "header.php"; ?>
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
    <div class="container-fluid">
        <a href="../hospital project/index.html" class="navbar-brand">MONKOLE HOSPITAL</a>
            <button 
                class="navbar-toggler" 
                type="button" 
                data-bs-toggle="collapse"
                data-bs-target="#navmenu">
            <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navmenu">
        <?php include "navbar.php"; ?>
        </div>
    </div>
    </nav>
    <section class="pt-5">
        <img src=""/>
    <div class="container pt-5">
        <div class="row pt-5">
            <div class="col-4"><img src="../img/pngegg (4).png" class="img-fluid"/> </div>
            <div class="col-4">
            <?php
$firstname=$_REQUEST['firstname'];
$lastname=$_REQUEST['lastname'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$password=$_REQUEST['password'];

include "db.php";
$q=mysqli_query ($con,"INSERT INTO patients(firstname,lastname,email,phone,password) values (' $firstname ',' $lastname ',' $email ',' $phone ','$password')");

if($q){
    echo "Record inserted successfully!";
}
else{
    echo mysqli_error($con);
}
mysqli_close($con);
?>
            </div>
            <div class="col-4"><img src="../img/pngegg (4).png" class="img-fluid"/> </div>
        </div>
    </div>
    </section>
    </body>
    </html>