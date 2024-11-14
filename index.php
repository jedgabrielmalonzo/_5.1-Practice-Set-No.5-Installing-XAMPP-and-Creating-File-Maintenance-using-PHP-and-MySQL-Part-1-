<?php

include "connection.php";

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <title>Basic Database Connection</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="col-lg-4">
            <h2>Basic Database Connection</h2>
            <form action="" name="forml" method="post">
                <div class="form-group">
                    <label for="firstname">Firstname:</label>
                    <input type="text" class="form-control" id="firstname" placeholder="Enter Fristaname"
                        name="firstname">
                </div>
                <div class="form-group">
                    <label for="lastname">Lastname:</label>
                    <input type="text" class="form-control" id="lastname" placeholder="Enter Lastname" name="lastname">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email">
                </div>
                <div class="form-group">
                    <label for="contact">Contact Number:</label>
                    <input type="text" class="form-control" id="contact" placeholder="Enter Contact Number"
                        name="contact">
                </div>


                <button type="submit" name="insert" class="btn btn-default">Insert</button>
                <button type="submit" name="update" class="btn btn-default">Update</button>
                <button type="submit" name="delete" class="btn btn-default">Delete</button>

            </form>
        </div>
    </div>
    <div class="col-lg-12">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Contact</th>
                </tr>
            </thead>
            <tbody>

                <?php

                $res = mysqli_query($link, "select * from table1");
                while ($row = mysqli_fetch_array($res)) {

                    echo "<tr>";
                    echo "<td>";
                    echo $row["id"];
                    echo "</td>";
                    echo "<td>";
                    echo $row["first name"];
                    echo "</td>";
                    echo "<td>";
                    echo $row["last name"];
                    echo "</td>";
                    echo "<td>";
                    echo $row["email"];
                    echo "</td>";
                    echo "<td>";
                    echo $row["contact"];
                    echo "</td>";
                    echo "</tr>";

                }


                ?>


            </tbody>
        </table>

    </div>
    <?php

    if (isset($_POST["insert"])) {
        mysqli_query($link, "insert into table1 values(NULL,'$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[contact]')");
    }
  




    ?>

</body>

</html>