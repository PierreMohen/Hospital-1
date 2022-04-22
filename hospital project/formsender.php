<!DOCTYPE html>
<html lang="EN">
<head>
    <title>Monkole's Hospital registration</title>
   <?php require "header.php"; ?>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
    <div class="container-fluid">
        <a href="../hospital project/index.php" class="navbar-brand">MONKOLE HOSPITAL</a>
            <button 
                class="navbar-toggler" 
                type="button" 
                data-bs-toggle="collapse"
                data-bs-target="#navmenu">
            <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navmenu">
             <?php include"navbar.php";?>
        </div>
    </div>
    </nav>
    <section class="pt-5">
        <img src=""/>
    <div class="container pt-5">
        <div class="row pt-5">
            <div class="col-4"><img src="../img/pngegg (4).png" class="img-fluid"/> </div>
            <div class="col-4">
                <form action="formlocal.php" method="POST">
                    <table border="3" class="m-3 p-5 ">
                        <tr class="text-center">
                            <th class="pb-5" colspan="2">Patient's Registration</th>
                        </tr>
                        <tr>
                            <td>First Name :</td>
                            <td><input type="text" name="firstname" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Last Name :</td>
                            <td><input type="text" name="lastname" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Email :</td>
                            <td><input type="email" name="email" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Mobile :</td>
                            <td><input type="number" name="phone" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Password :</td>
                            <td><input type="password" name="password" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="submit" class="mt-3 mb-3 mr-5 ml-3 form-control"></td>
                        </tr>
                    </table>
            </form>
            </div>
            <div class="col-4"><img src="../img/pngegg (4).png" class="img-fluid"/> </div>
        </div>
    </div>
    </section>
    </body>
    </html>