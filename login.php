<?php
require 'includes/header.php';
?>

<main>
    <link rel="stylesheet" href="css/login.css">

    <div class="bg-cover">

        <div class="container">

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="images/c1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/c2.jpeg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/c3.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="h-40 center-me">
            <div class="my-auto">

                <form class="form-signin" action="includes/login-helper.php" method="post">

                    <h1 class="h3 mb-3 fw-normal">Login</h1>
                    <p class="hint-text">Log in to your account!</p>


                    <div class="form-floating">
                        <label for="floatingInput">Username/Email</label>
                        <input type="text" class="form-control" name="uname-email" id="floatingInput"
                            placeholder="username/email">

                    </div>


                    <div class="form-floating">
                        <label for="floatingPassword">Password</label>
                        <input type="password" class="form-control" name="pwd" id="floatingPassword"
                            placeholder="password">

                    </div>


                  
                    <button class="w-100 btn btn-lg btn-primary" name="login-submit" type="submit">Log in</button>
               
                </form>

            </div>


        </div>

    </div>

</main>