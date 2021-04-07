<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact-us</title>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        #concerns {
            width: 90%;
            margin-left: 5%;
            margin-right: 5%;
            margin-top: 2%;
            margin-bottom: 2%;

        }
        body{
            background-color: rgb(250, 242, 233);
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
        @media only screen and (max-width: 400px){
            #navi2_1{
                display: flex;
                flex-direction: column;
            }
        }
        }

        /* #contact {
            width: 100%;
            height: 800px;
            margin-bottom: 2%;
            justify-content: center;
            text-align: center;
        } */
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

    <div id="about_us">
        <div class="card">
            <div class="card-header">
                About us
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p>Developer and Admin Group.</p>
                    <footer class="blockquote-footer">We have developed this site only to help people
                        who have doctor's priscription and wants to know about the medicine and the content of that medicine.</footer>
                </blockquote>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                Contact us
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p>You can contact us through e-mail or message.</p>
                    <footer class="footer">
                          <p>
                            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="true" aria-controls="collapseExample">
                              Contact information
                            </button>
                          </p>
                          <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                                <ul class="list-group">
                                    <li class="list-group-item">gmail: xyz@gmail.com</li>
                                    <li class="list-group-item">Phone: 9878899887</li>
                                  </ul>
                            </div>
                          </div>
                    </footer>
            </div>
        </div>
    </div>

    <div id="contact_us">
        <div class="card text-center">
            <div class="card-header">

            </div>
            <div class="card-body">
                <h5 class="card-title">Authorization Process!</h5>
                <p class="card-text">If you want to enter the data releated to any kind of medicine then you have to
                    fill the form.</p>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSew0b2chEaVkUeTbF0uRTlEUj5ds4K8CHQnFPADIbG0dtAhzw/viewform?usp=sf_link"
                    class="btn btn-primary">Click Me!</a>
            </div>
            <div class="card-footer text-muted">

            </div>
        </div>

        <!-- <a class="btn btn-primary"
            href="https://docs.google.com/forms/d/e/1FAIpQLSew0b2chEaVkUeTbF0uRTlEUj5ds4K8CHQnFPADIbG0dtAhzw/viewform?usp=sf_link"
            role="button">Enter Your Data</a> -->
        <!-- <iframe
            src="https://docs.google.com/forms/d/e/1FAIpQLSew0b2chEaVkUeTbF0uRTlEUj5ds4K8CHQnFPADIbG0dtAhzw/viewform?embedded=true"
            width="640" height="800" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe> -->
    </div>

    <hr>

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