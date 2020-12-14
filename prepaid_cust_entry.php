<?php
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

if(isset($_POST['submit'])){
    $name = $_POST['cust_num'];
    $status = strtolower('b');

    // $sql = "INSERT INTO test_project VALUES ('" . $name . ', '" . $status . "')";

    $sql = "INSERT INTO test_project (name, status)
    VALUES ('".$name."','".$status."')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    }else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$cust_num = '';





?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet"
        id="bootstrap-css">



    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }


    .logo {
        height: 20%;
        border-bottom: 1px solid #fff;

    }

    .sidebar {
        height: 100vh;
        background: #2c3e50;
        opacity: .9;
    }

    .sidebar_item {
        padding: 0;
        list-style: none;
    }

    .sidebar_item li {
        text-indent: 20px;
        line-height: 40px;
    }

    .sidebar_item li a {
        display: block;
        text-decoration: none;
        color: #ddd;
        font-size: 18px;
    }

    .sidebar_item li a:hover {
        background: #16A085;
    }

    .tbl_btn {
        background: teal;
        border-radius: 100px;
    }
    </style>


    <title>Small Project</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row">


            <!-- sidebar starts  -->
            <div class="col-lg-2 col-md-2 col-sm-2 p-0">

                <div class="sidebar">

                    <div class="logo">

                    </div>
                    <div class="sidebar_item">
                        <h1 class="text-white p-4 logo">Dashboard</h1>
                        <li><a href="./dashboard.php">Home</a></li>
                        <li><a href="./prepaid_cust_entry.php">Prepaid Customer Entry</a></li>
                    </div>
                </div>
            </div>
            <!-- sidebar ends  -->

            <!-- page content starts  -->
            <div class="col-lg-10 col-md-10 col-sm-10 p-0">
                <div class="row m-0">
                    <div class="col-lg-12 col-md-12 col-sm-12 bg-dark p-0">
                        <h1 class="text-white text-center">Header</h1>
                    </div>
                </div>

                <div class="row m-0">
                    <div class="span12">
                        <form class="form-horizontal span6" action="" method="post">
                            <fieldset>
                                <legend>Customer Entry</legend>

                                <div class="control-group">
                                    <label for="cust_num" class="control-label">Customer Num. :</label>
                                    <div class="controls">
                                        <input type="text" class="input-block-level" title="Fill Customer Name" required
                                            name="cust_num" id="cust_num" value="<?php echo $cust_num; ?>">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Bill Cycle :</label>
                                    <div class="controls">
                                        <div class="row-fluid">
                                            <div class="span9">
                                                <select class="input-block-level">
                                                    <option>January</option>
                                                    <option>...</option>
                                                    <option>December</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label for="sr_pk_reading" class="control-label">SR/PK Reading :</label>
                                    <div class="controls">
                                        <input type="text" class="input-block-level" title="Fill Customer Name" 
                                            name="sr_pk_reading" id="sr_pk_reading">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label for="off_pk_reading" class="control-label">OFF PK Reading :</label>
                                    <div class="controls">
                                        <input type="text" class="input-block-level" title="Fill Customer Name" 
                                            name="off_pk_reading" id="off_pk_reading">
                                    </div>
                                </div>


                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary float-right" name="submit"
                                        id="submit">New</button>

                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>

                <div class="row m-0">

                    <div class="span12">

                        <table class="table table-striped  table-responsive-md">

                            <thead>
                                <tr>
                                    <th>Name</th>

                                    <th>Status</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php


$sql = "SELECT * FROM test_project";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    // output data of each row
    while($row = $result->fetch_assoc()) { ?>
        <tr> 
            <td> <?php echo $row['name']; ?></td> 
            <td>
                <?php 
                    $status = $row['status'];
                    
                    switch ($status) {
                        case "n":
                          echo "<button type='button' class='btn   m-0 tbl_btn' name='add' id='add'>New</button>";
                          break;
                        case "b":
                          echo "<button type='button' class='btn   m-0 tbl_btn' disabled
                          style='background:#ccc;'>Being Processing</button>";
                          break;
                        case "p":
                          echo "<button type='button' class='btn   m-0 tbl_btn' disabled
                          style='background:#ccc;'>Processed</button>";
                          break;
                        default:
                          echo "<button type='button' class='btn   m-0 tbl_btn'>New</button>";
                      }
                ?>
            </td> 
        </tr>
    <?php }
    
}

$conn->close();
?>
                                <!-- <tr> 
                                    <td>Karim</td>

                                    <td>
                                        <button type="button" class="btn   m-0 tbl_btn">New</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Rahim</td>

                                    <td>
                                        <button type="button" class="btn   m-0 tbl_btn" disabled
                                            style="background:#ccc!important;">Being Processing</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Karim</td>

                                    <td>
                                        <button type="button" class="btn   m-0 tbl_btn" disabled
                                            style="background:#ccc">Processed</button>
                                    </td>
                                </tr> -->
                            </tbody>

                        </table>


                    </div>
                </div>

            </div>
            <!-- page content ends  -->


        </div>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
