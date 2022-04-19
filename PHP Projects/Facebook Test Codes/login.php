<?php
require_once('loadin.php');

$redirectTo="http://localhost/05/serv.php";
$data = ['email'];
$fullURL=$handler->getLoginUrl($redirectTo, $data);
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
                <form>
                    <div class="form-group">
                        <p class="text-center">Email Address</p><br/>
                        <input type="email" class="form-control"/><br/>
                    </div>
                    <div class="form-group">
                        <p class="text-center">Password</p><br/>
                        <input type="password" class="form-control"/><br/>
                    </div>
                    
                    <input type="submit" value="Log In" class="btn btn-danger"/>
                    <input type="button"  onclick="window.location = '<?php echo $fullURL?>'" value="Log In with Facebook" class="btn btn-danger"/>
                </form>
                
            </div>
            <div class="col-sm-12">
                <a href="tablucon.php"><button class="btn btn-primary">Users List</button></a>
            </div>
        </div>
    </body>
</html>