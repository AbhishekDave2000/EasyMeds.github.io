<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Easy-Meds-Display</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
        crossorigin="anonymous"></script>

    <style>
        body{
            /* background-color: rgb(250, 242, 233); */
            background-color: lightblue;
        }
        #concerns {
            width: 90%;
            margin-left: 5%;
            margin-right: 5%;
            margin-top: 2%;
            margin-bottom: 2%;

        }

        #footer {
            text-align: center;
            background-color: black;
            color: white;
        }

        @media only screen and (max-width: 1230px) {
            #card2 {
                flex-direction: column;
            }
        }

        @media only screen and (max-width: 400px) {
            #navi2_1 {
                display: flex;
                flex-direction: column;
            }
        }
    </style>


</head>

<body>
    <div id="navigation">
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    Easy-Meds
                </a>
                <!-- <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
            </div>
            <div>
                <ul class="nav justify-content-center" id="navi2_1">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Display.php">Medicines</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact-Us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

<hr>

    <div id="display">

        <?php

        $conn = mysqli_connect("localhost","root","");
        if(!$conn){
            die("Connection error".mysqli_connect_error());
        }

        mysqli_select_db($conn,"meds");

        $per_page=5;
        $start=0;
        $current_page=1;
        if(isset($_GET['start'])){
            $start=$_GET['start'];
            if($start<=0){
                $start=0;
                $current_page=1;
            }else{
                $current_page=$start;
                $start--;
                $start=$start*$per_page;
            }
        }
    
        $record=mysqli_num_rows(mysqli_query($conn,"select * from info"));
        $pagi=ceil($record/$per_page);

        $query="select * from info limit $start,$per_page"; // Fetch all the records from the table address
        $result=mysqli_query($conn,$query);
        ?>

        <table style="margin-left: auto; margin-right: auto; width:60%;">
            <tr>
                <td>
                    <?php
 
                    if(mysqli_num_rows($result)>0){
                        while( $row = mysqli_fetch_assoc( $result )) {
                    ?>
                    <div class="card" style="margin-bottom:2%;margin-top:2%;">

                        <div class="card-body">
                            <h5 class="card-title"> <u><b>Medicine Name:</b></u> 
                                <b><?php echo $row['Meds_name']; ?></b>
                                
                            </h5>
                            <p class="card-text">Use :
                                <?php echo $row['Meds_use']; ?>
                            </p>
                            <p class="card-text">Contradiction :
                                <?php echo $row['Meds_contra']; ?>
                            </p>
                            <p class="card-text">Side effect :
                                <?php echo $row['Meds_side']; ?>
                            </p>
                            <p class="card-text">Direction :
                                <?php echo $row['Meds_direction']; ?>
                            </p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                    <?php } 
                    } else {?>
                    No records
                    <?php }
                    ?>
                    <ul class="pagination mt-30">
                        <?php 
	                    for($i=1;$i<=$pagi;$i++){
	                    $class='';
	                    if($current_page==$i){
		                ?>
                        <li class="page-item active"><a class="page-link" href="javascript:void(0)">
                                <?php echo $i?>
                            </a></li>
                        <?php
	                    }else{
	                    ?>
                        <li class="page-item"><a class="page-link" href="?start=<?php echo $i?>">
                                <?php echo $i?>
                            </a></li>
                        <?php
	                    }
	                    ?>

                        <?php } ?>
                    </ul>
                </td>
            </tr>
        </table>

    </div>

    <hr>

    <div id="cards">
        <div class="container  d-flex justify-content-center container-fluid" >
            <div class="row row-cols-4 d-flex justify-content-center" id="card2">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="caed2.jfif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">About-us</h5>
                            <p class="card-text">We have Put here only the information of meds and by the help of
                                doctors
                                for your help.</p>
                            <a href="contact.php" class="btn btn-primary">About us</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="card9.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Login</h5>
                            <p class="card-text">Only the admin and the authorized doctors are allowed to enter the
                                information about the medicine.</p>
                            <a href="login.php" class="btn btn-primary">Log-in</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="card3.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Medicine-info</h5>
                            <p class="card-text">We have Put here only the information of the medicine that is used
                                in only used in the basic cure.</p>
                            <a href="Display.php" class="btn btn-primary">Medicines</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="card5.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Contact-us</h5>
                            <p class="card-text">You can contact us for any guidence and help also to get authorized
                                to log-in meds.</p>
                            <a href="contact.php" class="btn btn-primary">Contact-us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div id="concerns">
        <form action="" method="post" id="concernform">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                    style="height: 100px;"></textarea>
                <label for="floatingTextarea2">Feedback :</label>
            </div>
        </form>
    </div> -->

    <div id="footer">
        <p> &copy; This site is reserved by Easymeds Group.</p>
    </div>

</body>

</html>