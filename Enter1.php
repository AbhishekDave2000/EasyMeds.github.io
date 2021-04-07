<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicine</title>

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

    <?php
    $conn = mysqli_connect("localhost","root","");
    if(!$conn){
        die("Connection error".mysqli_connect_error());
    }

    mysqli_select_db($conn,"meds");
    $msg = "";
    if( isset($_POST['mname']) &&  isset($_POST['muse']) &&  isset($_POST['mcontra'])&&  isset($_POST['mside'])&&  isset($_POST['mdirection'])){
        $medsname = $_POST['mname'];
        $medsuse = $_POST['muse'];
        $medscontra = $_POST['mcontra'];
        $medsside = $_POST['mside'];
        $medsdirection = $_POST['mdirection'];

        // $medsname=$_POST['mname'];
    $msg = " ";
    $query = mysqli_query($conn,"SELECT * FROM info WHERE Meds_name='$medsname' ");
    $count = mysqli_num_rows($query);

    if($count>0){
        $msg = "This medicine already exists! Kindly check the name of medicine!";
    }
    else{
        $query = "INSERT INTO info (Meds_name,Meds_use ,Meds_contra ,Meds_side ,Meds_direction )
         VALUES ('$_POST[mname]' ,'$_POST[muse]' ,'$_POST[mcontra]' ,'$_POST[mside]' ,'$_POST[mdirection]' )";
        
        mysqli_query($conn,$query);
        $msg = "<p style='color:green;'>upload successful!</p>";
    }
    }

    ?>
    
    <style>
        body{
            background-color: rgb(250, 242, 233); 
        }
        #div_A {
            width: 100%;
            height: 700px;
            margin-bottom: 2%;
            background-image: url(form.jpg);
            background-size: 100% 100%;
        }
        #form {
            height: 100%;
        }
        #table_A {
            color: white;
            width: 90%;
            height: 100%;
            margin-left: 5%;
            margin-right: 5%;
        }

        #div1 {
            height: 90%;
        }

        #div2 {
            text-align: center;
            color: yellow;
        }

        .inp {
            border-width: 1px;
            border-radius: 5px;
            /* background-color:cyan ; */
            width: 94%;
            height: 50%;
        }

        .formbtn{
            width: 80px;
            height: 30px;
            background-color: blue;
            border: 1px solid black;
            color: white;
            border-radius: 5px;
        }
        .formbtn:hover {
            width: 85px;
            background-color: darkblue;
        }
        tr .td1 {
            width: 20%;
        }

        tr .td2 {
            width: 80%;
            text-align: center;
        }

        .txtarea {
            width: 94%;
            height: 90%;    
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
        @media only screen and (max-width: 800px){
            tr .td2 {
            width: 70%;
            text-align: center;
        }
        tr .td1 {
            width: 30%;
        }
        }
        @media only screen and (max-width: 400px){
            #navi2_1{
                display: flex;
                flex-direction: column;
            }
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
    <div class="div_initial" id="div_A">
            
            <div id="div1">
                <form action="" method="post" id="form">
                    <table id="table_A">
                        <tr>
                            <td class="td1">Name :</td>
                            <td class="td2"><input type="text" id="M_name" class="inp" name="mname"></td>
                        </tr>
                        <tr>
                            <td class="td1">Use :</td>
                            <td class="td2"><textarea type="text" class="txtarea" id="M_use" name="muse"></textarea></td>
                        </tr>
                        <tr>
                            <td class="td1">Interaction :</td>
                            <td class="td2"><textarea type="text" class="txtarea" id="M_contra" name="mcontra"></textarea></td>
                        </tr>
                        <tr>
                            <td class="td1">Side effects :</td>
                            <td class="td2"><textarea type="text" class="txtarea" id="M_side" name="mside"></textarea></td>
                        </tr>
                        <tr>
                            <td class="td1">Directions for Use :</td>
                            <td class="td2"><textarea type="text" class="txtarea" name="mdirection" id="M_directon"></textarea></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align:center"><button type="submit" class="formbtn">Submit</button></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align:center"><button type="reset" class="formbtn">Reset</button></td>
                        </tr>
                    </table>
                </form>
            </div>
            <div id="div2">
                     <?php echo $msg; ?>
            </div>
    </div>

    <div id="cards">
        <div class="container d-flex justify-content-center container-fluid" id="card1" >
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