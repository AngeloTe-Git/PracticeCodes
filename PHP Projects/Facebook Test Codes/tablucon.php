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
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Date Added</th>
                    </tr>
                    <?php
                    $servername = "localhost";
                    $username = "Angelo";
                    $password = "Angelo";
                    $dbname = "fbacc";

                    session_start();

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT id, first, last, email, date FROM users";
                    $result = $conn->query($sql);

                    if ($result->num_rows != 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                          echo "<tr>";
                          echo "<td>" . $row["id"]. "</td>";
                          echo "<td>" . $row["first"]. "</td>";
                          echo "<td>" . $row["last"]. "</td>";
                          echo "<td>" . $row["email"]. "</td>";
                          echo "<td>" . $row["date"]. "</td>";
                          echo "</tr>";
                        }
                    } else {
                        echo "0 results";
                    }

                    $conn->close();
                    ?>

                
                </table>
                <a href="logout.php"><button class="btn btn-danger">Log out</button></a>
            </div>
        </div>
    </body>
</html>