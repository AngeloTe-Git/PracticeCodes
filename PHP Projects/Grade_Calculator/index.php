<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        <form action="index.php" method="post">
            <div class="row">
                <div class="col-sm-12">
                    Student Name: <input type="text" name="student">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table class="table-borderless">
                        <tr>
                            <td>Subject</td>
                            <td>Grade</td>
                            <td># of Units</td>
                        </tr>
                        <tr>
                            <td><input type="text" name="sub1"></td>
                            <td><input type="number" name="grade1" min="0" max="4" step="0.5" value="0"></td>
                            <td><input type="number" name="units1" min="1" max="4" step="1" value="1"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="sub2"></td>
                            <td><input type="number" name="grade2" min="0" max="4" step="0.5" value="0"></td>
                            <td><input type="number" name="units2" min="1" max="4" step="1" value="1"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="sub3"></td>
                            <td><input type="number" name="grade3" min="0" max="4" step="0.5" value="0"></td>
                            <td><input type="number" name="units3" min="1" max="4" step="1" value="1"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="sub4"></td>
                            <td><input type="number" name="grade4" min="0" max="4" step="0.5" value="0"></td>
                            <td><input type="number" name="units4" min="1" max="4" step="1" value="1"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="sub5"></td>
                            <td><input type="number" name="grade5" min="0" max="4" step="0.5" value="0"></td>
                            <td><input type="number" name="units5" min="1" max="4" step="1" value="1"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="sub6"></td>
                            <td><input type="number" name="grade6" min="0" max="4" step="0.5" value="0"></td>
                            <td><input type="number" name="units6" min="1" max="4" step="1" value="1"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><button type="submit" class="btn-primary">Evaluate</button></td>
                        </tr>

                    </table>
                </div>
            </div>
        </form>
        <?php
            if(isset($_POST['student'])) {
                $student=$_POST['student'];
                $sub1=$_POST['sub1'];
                $sub2=$_POST['sub2'];
                $sub3=$_POST['sub3'];
                $sub4=$_POST['sub4'];
                $sub5=$_POST['sub5'];
                $sub6=$_POST['sub6'];
                $grad1=$_POST['grade1'];
                $grad2=$_POST['grade2'];
                $grad3=$_POST['grade3'];
                $grad4=$_POST['grade4'];
                $grad5=$_POST['grade5'];
                $grad6=$_POST['grade6'];
                $unit1=$_POST['units1'];
                $unit2=$_POST['units2'];
                $unit3=$_POST['units3'];
                $unit4=$_POST['units4'];
                $unit5=$_POST['units5'];
                $unit6=$_POST['units6'];

                echo "Hello," , $student  , "!</br>";

                echo "Your chosen subjects are: " , $sub1 ,", " ,$sub2, ", " ,$sub3,", ", $sub4,"," ,$sub5,", " ,"and " , $sub6,"</br>";

                $x = $grad1+$grad2+$grad3+$grad4+$grad5+$grad6;

                echo "You have ", $x, " units this term.</br>";

                $y = (($unit1*$grad1)+($unit2*$grad2)+($unit3*$grad3)+($unit4*$grad4)+($unit5*$grad5)+($unit6*$grad6));

                $y=$y/$x;

                echo "Your grade point average is " , $y,"</br>";
            }
        ?>





        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>