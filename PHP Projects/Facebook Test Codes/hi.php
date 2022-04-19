<?php
session_start();

if(!isset($_SESSION['aToken'])){
    header("Location: login.php");
    exit();
}
?>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body Style="background-color:#FDDDFC;">
        <div class="jumbotron" style="background-color:#9A0794;color:#F415ED;">
            <h1>The Facebook Practice</h1>
        </div>
        <div class="container">
            <div class="col-sm-12">
                <table class="table table-hover table-bordered">
                    <tr>
                        <td>ID</td>
                        <td><?php echo $_SESSION['uData']['id']?></td>
                    </tr>
                    <tr>
                        <td>First Name</td>
                        <td><?php echo $_SESSION['uData']['first_name']?></td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td><?php echo $_SESSION['uData']['last_name']?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?php echo $_SESSION['uData']['email']?></td>
                    </tr>
                </table>
                <a href="logout.php"><button class="btn btn-danger">Log out</button></a>
            </div>
        </div>
    </body>
</html>