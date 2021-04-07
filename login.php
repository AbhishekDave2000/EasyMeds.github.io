<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-in</title>
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
        #container{
            width: 100%;
            height: 500px;
            justify-content: center;
            background-image: url(form_5.jpg);
            background-size: 100% 100%;
            margin-bottom: 2%;  
        }
        body{
            background-color: rgb(250, 242, 233);
        }
        #container1{
            width: 50%;
            margin-left: 25%;
            margin-right: 25%;
            position: relative;
            top: 20%;
        }
        #container form{
            width: 60%;
            margin-left: 20%;
            margin-right: 20%;
            color: white;
        }
        #container h2{
            margin-left: 20%;
            position: relative;
            top: 25%;
        }
        @media only screen and (max-width: 800px){
            #container form{
            width: 90%;
            margin-left: 5%;
            margin-right: 5%;
            color: white;
        }
        #container1{
            width: 80%;
            margin-left: 10%;
            margin-right: 10%;
            position: relative;
            top: 20%;
        }
        #container h2{
            margin-left: 5%;
        }
        #container{
            width: 100%;
            height: 400px;  
        }
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
        #logtxt{
            color: red;
        }
        @media only screen and (max-width: 1230px) {
            #card2 {
                flex-direction: column;

            }
        }
        @media only screen and (max-width: 400px){
            #navi2_1{
                display: flex;
                flex-direction: column;
            }
        }
        
        
    </style>
    
    <?php
        $conn = mysqli_connect("localhost","root","","meds");
        if(!$conn){
            die("error in connection".mysqli_connect_error());
        }
        $msg = " ";
        if( isset($_POST['use']) && isset($_POST['pass'])){

            $name = $_POST['use'];
            $password = $_POST['pass'];

            $query = "SELECT user,passwordP FROM detail WHERE user='$name' and passwordP='$password' ";
            $result = mysqli_query($conn,$query);

            $count = mysqli_num_rows($result);

            if($count>0){
                $msg = "Login successful!";
                if($msg = "Login successful!")
                {
                    echo '<meta http-equiv="refresh" content="1; URL=Enter1.php" />';
                }      
            }
            else{ 
                $msg = "invalid username or password!";
            }
        }   
?>
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

    <div id="container">
        <div id="container1">
        <h2>Login Form</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="user">Username:</label>
                <input type="text" class="form-control" name="use" id="user" placeholder="Enter username" name="email">
            </div><br>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" name="pass" id="pwd" placeholder="Enter password" name="pswd">
            </div><br>
            <button type="submit" class="btn btn-primary">Submit</button>
            <div id="logtxt">
                <?php echo $msg; ?>
            </div>
        </form>
        </div>
        
    </div>

    <div id="cards">
        <div class="container  d-flex justify-content-center container-fluid" id="card1" >
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