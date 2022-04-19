<html>
    <body>
        <?php
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $num = $_POST['number'];
                echo "<h1>".$num."</h1>";
            }
        ?>
        <form action="samplenumber.php" method="post" onsubmit="return confirm('Confirm Payment?')">
            <input type="text" name="number" pattern="[0-9]+" onKeyPress="if(this.value.length==3) return false;">
            <button type="submit">Count</button>
        </form>
    </body>
</html>