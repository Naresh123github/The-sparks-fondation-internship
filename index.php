<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="statics/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="statics/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="statics/favicon-16x16.png">
    <link rel="manifest" href="statics/site.webmanifest">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Welcome to apna bank</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- start container -->
    <div id="container">

        <?php include 'spin.php'; ?>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed fixed-top"
            style="font-family:candara; font-size:18px; box-shadow: 0px 0px 10px 0px black;">
            <div class="container-fluid">
                <p style="color:azure;" id="logo">ÅƤ₦Å ßÅ₦ᛕ</p>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <b>
                    <ul class="navbar-nav ">
                        <li class="nav-item nav-links" style="margin-left:15px;">
                            <a class="nav-link active text-nowrap" aria-current="page" href="home.php">Home</a>
                        </li>
                        <li class="nav-item" style="margin-left:15px; ">
                            <a class="nav-link text-nowrap" href="send_money.php">Send Money</a>
                        </li>
                        <li class="nav-item" style="margin-left:15px;">
                            <a class="nav-link text-nowrap" href="all_cust.php">View All Customers</a>
                        </li>
                        <li class="nav-item" style="margin-left:15px;">
                            <a class="nav-link text-nowrap" href="transactions.php">Transactions</a>
                        </li>
                        <li class="nav-item" style="margin-left:15px; margin-right:75px;">
                            <a class="nav-link text-nowrap" href="#about">About Us</a>
                        </li>
                    </ul>
                </b>
            </div>
        </nav>

        <!-- Carosoul part start -->
        <section id="top" class="top">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/bank4.jpg" class="d-block w-100 img-fluid" alt="...">
                        <div class="carousel-caption d-none d-md-block external-img">
                            <h5 style="color:cadetblue;" >ÅƤ₦Å ßÅ₦ᛕ</h5>
                            <p style="color:cadetblue;">A Safe place for your money.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/bank5.jpg" class="d-block w-100 img-fluid" alt="...">
                        <div class="carousel-caption d-none d-md-block external-img">
                            <h5 style="color:cadetblue;">Transfers Money flawlessly</h5>
                            <p style="color:cadetblue;">Transfering Money is just easy as Dialing a Phone.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/bank6.jpg" class="d-block w-100 img-fluid" alt="...">
                        <div class="carousel-caption d-none d-md-block external-img">
                            <h5 style="color:cadetblue;">Banking is Even Easier</h5>
                            <p style="color:cadetblue;">Visit Our New official Website.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <!-- CArosoul part end -->

        <div class="container-large"
            style="color:white; height:500px; width: 100%; padding:8% 2% 2% 2%; background-color:cadetblue;">
            <div class="row">
                <div class="col" style="margin-left: 5%;">
                    <br><br>&nbsp;<p class="zoomfont"
                        style="font-size:0px; text-shadow:3px 3px 3px grey; text-align:center;"><b>Welcome to <br>
                            ÅƤ₦Å ßÅ₦ᛕ</b></p>
                </div>
                <div class="col" style="margin:4% 0% 0% 5%; text-align:center;">
                    &nbsp;<img style="box-shadow: 1px 5px 12px rgb(52, 62, 63);" src="images/welcome bank.webp"
                        class="zoomin" alt="">
                </div>
            </div>
        </div>

        <center style="margin:60px 0px 20px 0px;">
            <div class="container"
                style="backdrop-filter: blur(10px); box-shadow:3px 3px 15px black; border-radius:30px; padding:20px 0px 20px 0px;">
                <h1 style="text-shadow:2px 2px 2px gray; color:white;"><b>Our Awesome Facilities</b></h1>
                <div class="container" style="margin:30px 0px 20px 0px;">
                    <div class="row">
                        <div class="col-lg">
                            <div
                                style="background-color:cadetblue;color: white; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                                <i class="fas fa-users fa-7x"></i><br><br>
                                <a href="all_cust.php"><button type="button" class="btn btn-outline-light mybtn">View
                                        Customers</button></a><br>
                                <h6>Here, you can watch every customer of the bank.</h6>
                            </div>
                        </div>
                        <div class="col-lg">
                            <div
                                style="background-color:cadetblue; color:white; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                                <i class="fas fa-comments-dollar fa-7x"></i><br><br>
                                <a href="send_money.php"><button type="button"
                                        class="btn btn-outline-light mybtn">Transfer
                                        Money</button></a><br>
                                <h6>Here, you can send money from your account.</h6>
                            </div>
                        </div>
                        <div class="col-lg">
                            <div
                                style="background-color:cadetblue; color:white; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                                <i class="fas fa-coins fa-7x"></i><br><br>
                                <a href="check_blc.php"><button type="button" class="btn btn-outline-light mybtn">Check
                                        Balance</button></a><br>
                                <h6>Here, you can check the remaining balance in your account.</h6>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </center>
        <section id="about" class="about">
            <div class="container">

                <div class="section-title ">
                    <h1 style="color:white;" class="text-center my-5">About Us</h1>
                </div>

                <div class="row content">
                    <div class="col-lg-6 ">
                        <img class="rounded img-fluid float-left" src="images/about.png" />
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 ">
                        <p style="color:azure; font-size: large;">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem quae ex quas suscipit eius
                            vel autem
                            blanditiis. Laboriosam quaerat reiciendis quibusdam commodi et rem tenetur. Magni debitis
                            laudantium quam
                            quo! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt laboriosam quibusdam
                            nulla iure, eos architecto ipsam quo at rerum nostrum.
                        </p>
                        <div id="contact_us" class="container">
                            <div style="border: 3px solid rgb(126, 122, 122); padding: 10px;" class="container">
                                <form action="contact_us.php" method="post">
                                    <input type="text" class="formin form-control" name="name" id=""
                                        placeholder="Name"><br><br>
                                    <input type="email" class="formin form-control" name="email" id=""
                                        placeholder="Email"><br><br>
                                    <textarea name="message" class=""
                                        style="border-radius:20px; padding: 5px 5px 5px 15px;"
                                        placeholder="Enter your message" rows="5" cols="47" id=""></textarea>
                                    <br><br><input class="btn mybtn btn-outline-light" type="submit" value="Submit">
                                </form>
                            </div>
                        </div>
                    </div>
                    <p>all right reserve! &copy;copyright 2023 Naresh</p>
                </div>

            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
            </script>
        <script>

            $(document).ready(function () {

                $(".zoomin").animate({
                    width: '400px'
                }, '5000', 'linear');
                $(".zoomfont").animate({
                    fontSize: '71px'
                }, '5000', 'linear');
            });
        </script>

    </div>
</body>

</html>