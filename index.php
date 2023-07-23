<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Colorlib | Free Bootstrap Website Timplate</title>

    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="/css/colorib.css">
    <link rel="stylesheet" href="/css/slick.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet" />
</head>

<body>
    <h1 style="display: none;">here is the header to the website</h1>
    <!--------------------------------------------------------------------------------------------------------------->
    <div class="side-nav">
        <div class="container">
            <div id="mySidenav" class="sidenav">
                <div class="sidenav-header"><button href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</button></div>
                <ul class="site-nav-wrap sidenav-body">
                    <li><button class="active" href="/html/colorib.html">Home</button></li>
                    <li class="has-children">
                        <span class="first-chiled-arrow arrow-collapse collapsed fa-solid fa-chevron-down rounded-pill" data-bs-toggle="collapse" data-bs-target="#collapseItem0"></span><button href="#">Categories</button>
                        <ul class="collapse" id="collapseItem0">
                            <li><button href="#">Travel</button></li>
                            <li><button href="#">Food</button></li>
                            <li><button href="#">Technology</button></li>
                            <li><button href="#">Business</button></li>
                            <li class="has-children">
                                <span class="second-chiled-arrow arrow-collapse collapsed fa-solid fa-chevron-down rounded-pill" data-bs-toggle="collapse" data-bs-target="#collapseItem1"></span><button href="#">Dropdown</button>
                                <ul class="collapse" id="collapseItem1">
                                    <li><button href="#">Sub Menu One</button></li>
                                    <li><button href="#">Sub Menu Two</button></li>
                                    <li><button href="#">Sub Menu Three</button></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><button href="#">Travel</button></li>
                    <li><button href="#">Food</button></li>
                    <li><button href="#">Technology</button></li>
                    <li><button href="#">Business</button></li>
                </ul>
            </div>
        </div>
    </div>

    <!--------------------------------------------------------------------------------------------------------------->
    <div class="site-nav d-flex align-items-center  border-bottom">
        <div class="container my-3">
            <div class="row d-flex align-items-center">
                <div class="col-md-12 col-lg-6 text-uppercase text-center order-1 order-md-2 fs-5 fw-bold">
                    magdesign
                </div>
                <div class="col-md-12 mt-md-5 mt-lg-0 col-lg-3 d-flex align-items-center text-start order-1 border-search rounded-pill">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text bg-body border-0" id="addon-wrapping"><i class="fa-solid fa-magnifying-glass searchLogo"></i></span>
                        <input type="text" class="form-control border-0" placeholder="Search..." aria-label="Search..." aria-describedby="addon-wrapping">
                    </div>

                </div>
                <div class="col-md-12 col-lg-3 text-end order-3 align-items-center d-flex justify-content-between gap-4">
                    <div class="d-flex gap-4 align-items-center">
                        <div class="twitter">
                            <a href="#"><i class="fa-brands fa-twitter socialMedia"></i></a>
                        </div>
                        <div class="facebook">
                            <a href="#"><i class="fa-brands fa-facebook socialMedia"></i></a>
                        </div>
                        <div class="instagram">
                            <a href="#"><i class="fa-brands fa-instagram socialMedia"></i></a>
                        </div>
                    </div>
                    <div class="siteNavBtn">
                        <i class="btn fa-solid fa-bars" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" onclick="openNav()"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--------------------------------------------------------------------------------------------------------------->
    <div class="container text-center my-5">
        <p class="fw-bold fs-1 mb-0">Trending</p>
    </div>
    <div class="container">
        <div class="for-slick-slider multiple-items">
            <div class="items">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <div class="h-100">
                                <img src="/img/teat.jpeg" class="img-fluid rounded-3 h-100 w-100" />
                            </div>
                        </div>
                        <div class="p-5 col-lg-8 col-md-12">
                            <div class="row">
                                <p><span class="f-b">Business 1 , Travel</span><span class="c-g"> — July 2, 2020</span></p>
                            </div>
                            <div class="row">
                                <h2>
                                    Your most unhappy customers are your greatest source of
                                    learning.
                                </h2>
                            </div>
                            <div class="row">
                                <p class="c-g m-1">
                                    Far far away, behind the word mountains, far from the
                                    countries Vokalia and Consonantia, there live the blind
                                    texts. Separated they live in Bookmarksgrove right at the
                                    coast of the Semantics, a large language ocean.
                                </p>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-2">
                                    <img src="/img/mohammad.jpg" alt="" class="rounded-circle h-100 w-50" />
                                </div>
                                <div class="col-10">
                                    <div class="row">
                                        <div class="fw-bold">Sergy Campbell</div>
                                        <div class="fs-6 c-g m-1">CEO and Founder</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="items">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <div class="h-100">
                                <img src="/img/teat.jpeg" class="img-fluid rounded-3 h-100 w-100" />
                            </div>
                        </div>
                        <div class="p-5 col-lg-8 col-md-12">
                            <div class="row">
                                <p><span class="f-b">Business 2 , Travel</span><span class="c-g"> — July 2, 2020</span></p>
                            </div>
                            <div class="row">
                                <h2>
                                    Your most unhappy customers are your greatest source of
                                    learning.
                                </h2>
                            </div>
                            <div class="row">
                                <p class="c-g m-1">
                                    Far far away, behind the word mountains, far from the
                                    countries Vokalia and Consonantia, there live the blind
                                    texts. Separated they live in Bookmarksgrove right at the
                                    coast of the Semantics, a large language ocean.
                                </p>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-2">
                                    <img src="/img/mohammad.jpg" alt="" class="rounded-circle h-100 w-50" />
                                </div>
                                <div class="col-10">
                                    <div class="row">
                                        <div class="fw-bold">Sergy Campbell</div>
                                        <div class="fs-6 c-g m-1">CEO and Founder</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="items">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <div class="h-100">
                                <img src="/img/teat.jpeg" class="img-fluid rounded-3 h-100 w-100" />
                            </div>
                        </div>
                        <div class="p-5 col-lg-8 col-md-12">
                            <div class="row">
                                <p><span class="f-b">Business 3 , Travel</span><span class="c-g"> — July 2, 2020</span></p>
                            </div>
                            <div class="row">
                                <h2>
                                    Your most unhappy customers are your greatest source of
                                    learning.
                                </h2>
                            </div>
                            <div class="row">
                                <p class="c-g m-1">
                                    Far far away, behind the word mountains, far from the
                                    countries Vokalia and Consonantia, there live the blind
                                    texts. Separated they live in Bookmarksgrove right at the
                                    coast of the Semantics, a large language ocean.
                                </p>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-2">
                                    <img src="/img/mohammad.jpg" alt="" class="rounded-circle h-100 w-50" />
                                </div>
                                <div class="col-10">
                                    <div class="row">
                                        <div class="fw-bold">Sergy Campbell</div>
                                        <div class="fs-6 c-g m-1">CEO and Founder</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="items">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <div class="h-100">
                                <img src="/img/teat.jpeg" class="img-fluid rounded-3 h-100 w-100" />
                            </div>
                        </div>
                        <div class="p-5 col-lg-8 col-md-12">
                            <div class="row">
                                <p><span class="f-b">Business 4 , Travel</span><span class="c-g"> — July 2, 2020</span></p>
                            </div>
                            <div class="row">
                                <h2>
                                    Your most unhappy customers are your greatest source of
                                    learning.
                                </h2>
                            </div>
                            <div class="row">
                                <p class="c-g m-1">
                                    Far far away, behind the word mountains, far from the
                                    countries Vokalia and Consonantia, there live the blind
                                    texts. Separated they live in Bookmarksgrove right at the
                                    coast of the Semantics, a large language ocean.
                                </p>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-2">
                                    <img src="/img/mohammad.jpg" alt="" class="rounded-circle h-100 w-50" />
                                </div>
                                <div class="col-10">
                                    <div class="row">
                                        <div class="fw-bold">Sergy Campbell</div>
                                        <div class="fs-6 c-g m-1">CEO and Founder</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------------------------------------------------------------------------------------------------------------->
    <div class="container d-flex">
        <div class="mt-5">
            <div class="row ">
                <?php

                $serverName = "localhost";
                $userName = "mohammad";
                $password = "159875320Mohammad123Joker$";
                $database = "colorlibWithCRUD";

                $connection = new mysqli($serverName, $userName, $password, $database);

                if ($connection->connect_error) {
                    die("Connection failed: " . $connection->connect_error);
                }

                $sql = "SELECT * FROM cards";
                $result = $connection->query($sql);

                if (!$result) {
                    die("Invalid query: " . $connection->error);
                }

                while ($row = $result->fetch_assoc()) {

                    echo "

                        <div class='col-lg-4 align-items-center mt-3 mb-3'>
                        <img src='/img/{$row['main_pic']}' class='rounded-3 main_img' />
                        <div class='mt-3'>
                            <div class='row'>
                                <p><span class='f-b'>{$row['name']}</span><span class='c-g'> — {$row['date_posted']}</span></p>
                            </div>
                            <div class='row'>
                                <h5 class='fw-bold'>
                                {$row['title']}
                                </h5>
                            </div>
                            <div class='row'>
                                <p class='c-g m-1'>
                                {$row['description']}
                                </p>
                            </div>
                            <div class='row align-items-center'>
                                <div class='col-2'>
                                    <img src='/img/{$row['profile_pic']}' alt='' class='rounded-circle prof_img' />
                                </div>
                                <div class='col-10'>
                                    <div class='row'>
                                        <div class='fw-bold'>{$row['profile_name']}</div>
                                        <div class='fs-6 c-g m-1'>{$row['name_description']}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>

                    ";
                }

                $connection->close();

                ?>

            </div>
        </div>
    </div>
    <!--------------------------------------------------------------------------------------------------------------->
    <div class="contianer my-5">
        <div class="text-center fs-1 fw-bold mb-5">Most Popular Posts</div>
    </div>
    <div class="for-slick-slider s-multiple-items">

        <?php


        $serverName = "localhost";
        $userName = "mohammad";
        $password = "159875320Mohammad123Joker$";
        $database = "colorlibWithCRUD";

        $connection = new mysqli($serverName, $userName, $password, $database);

        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }

        $sql = "SELECT * FROM slider2";
        $result = $connection->query($sql);

        if (!$result) {
            die("Invalid query: " . $connection->error);
        }

        while ($row = $result->fetch_assoc()) {
            echo "
                        <div class='items'>
                            <div class='container d-flex justify-content-center'>
                                <div class='col-11 mt-3 d-flex flex-column'>
                                    <img src='/img/{$row['main_pic']}' class='img-fluid w-100 card-img-top rounded-3 slider_main_img' />

                                    <div class='w-100 py-4 px-1'>
                                        <div class='fs-6 fw-bold'>
                                            <p><span class='f-b'>{$row['name']}</span><span class='c-g'> — {$row['date_posted']}</span></p>
                                        </div>
                                        <div class='fs-4 fw-bold'>
                                            <p>
                                            {$row['title']}
                                            </p>
                                        </div>
                                        <div class='fs-6 c-g m-1'>
                                            <p>
                                            {$row['description']}
                                            </p>
                                        </div>
                                        <div class='row align-items-center'>
                                            <div class='col-2'>
                                                <img src='/img/{$row['profile_pic']}' alt='' class='rounded-circle h-100 w-50' />
                                            </div>
                                            <div class='col-10'>
                                                <div class='row'>
                                                    <div class='fw-bold'>{$row['profile_name']}</div>
                                                    <div class='fs-6 c-g m-1'>{$row['name_description']}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }

        $connection->close();

        ?>

    </div>
    </div>

    </div>

    <!--------------------------------------------------------------------------------------------------------------->
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-6 col-md-12 mt-5">
                <div class="fs-2 fw-bold mb-4">
                    <p>sports</p>
                </div>
                <div class="row mb-3">
                    <div class="col-4">
                        <img src="/img/it.jpg" class="img-fluid h-75 w-100 rounded-3" />
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <p><span class="f-b">Business 1 , Travel</span><span class="c-g"> — July 2, 2020</span></p>
                        </div>
                        <div class="row fw-bold fs-4">
                            <p>
                                Your most unhappy customers are your greatest source of
                                learning.
                            </p>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-2">
                                <img src="/img/mohammad.jpg" alt="" class="rounded-circle h-100 w-100" />
                            </div>
                            <div class="col-10">
                                <div class="fw-bold">Sergy Campbell</div>
                                <div class="fs-6 c-g m-1">CEO and Founder</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3 mb-3">
                    <div class="col-4">
                        <img src="/img/it.jpg" class="img-fluid h-75 w-100 rounded-3" />
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <p><span class="f-b">Business 2 , Travel</span><span class="c-g"> — July 2, 2020</span></p>
                        </div>
                        <div class="row fw-bold fs-4">
                            <p>
                                Your most unhappy customers are your greatest source of
                                learning.
                            </p>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-2">
                                <img src="/img/mohammad.jpg" alt="" class="rounded-circle h-100 w-100" />
                            </div>
                            <div class="col-10">
                                <div class="fw-bold">Sergy Campbell</div>
                                <div class="fs-6 c-g m-1">CEO and Founder</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-4">
                        <img src="/img/it.jpg" class="img-fluid h-75 w-100 rounded-3" />
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <p><span class="f-b">Business 3 , Travel</span><span class="c-g"> — July 2, 2020</span></p>
                        </div>
                        <div class="row fw-bold fs-4">
                            <p>
                                Your most unhappy customers are your greatest source of
                                learning.
                            </p>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-2">
                                <img src="/img/mohammad.jpg" alt="" class="rounded-circle h-100 w-100" />
                            </div>
                            <div class="col-10">
                                <div class="fw-bold">Sergy Campbell</div>
                                <div class="fs-6 c-g m-1">CEO and Founder</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 mt-5">
                <div class="fs-2 fw-bold mb-4">
                    <p>Business</p>
                </div>
                <div class="row mb-3">
                    <div class="col-4">
                        <img src="/img/it.jpg" class="img-fluid h-75 w-100 rounded-3" />
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <p><span class="f-b">Business 4 , Travel</span><span class="c-g"> — July 2, 2020</span></p>
                        </div>
                        <div class="row fw-bold fs-4">
                            <p>
                                Your most unhappy customers are your greatest source of
                                learning.
                            </p>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-2">
                                <img src="/img/mohammad.jpg" alt="" class="rounded-circle h-100 w-100" />
                            </div>
                            <div class="col-10">
                                <div class="fw-bold">Sergy Campbell</div>
                                <div class="fs-6 c-g m-1">CEO and Founder</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3 mb-3">
                    <div class="col-4">
                        <img src="/img/it.jpg" class="img-fluid h-75 w-100 rounded-3" />
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <p><span class="f-b">Business 5 , Travel</span><span class="c-g"> — July 2, 2020</span></p>
                        </div>
                        <div class="row fw-bold fs-4">
                            <p>
                                Your most unhappy customers are your greatest source of
                                learning.
                            </p>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-2">
                                <img src="/img/mohammad.jpg" alt="" class="rounded-circle h-100 w-100" />
                            </div>
                            <div class="col-10">
                                <div class="fw-bold">Sergy Campbell</div>
                                <div class="fs-6 c-g m-1">CEO and Founder</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-4">
                        <img src="/img/it.jpg" class="img-fluid h-75 w-100 rounded-3" />
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <p><span class="f-b">Business 6 , Travel</span><span class="c-g"> — July 2, 2020</span></p>
                        </div>
                        <div class="row fw-bold fs-4">
                            <p>
                                Your most unhappy customers are your greatest source of
                                learning.
                            </p>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-2">
                                <img src="/img/mohammad.jpg" alt="" class="rounded-circle h-100 w-100" />
                            </div>
                            <div class="col-10">
                                <div class="fw-bold">Sergy Campbell</div>
                                <div class="fs-6 c-g m-1">CEO and Founder</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------------------------------------------------------------------------------------------------------------->
    <div class="section p-5">
        <div class="container">
            <div class="footter">
                <div class="row row-hight">
                    <div class="fs-3 fw-bold mt-1 mb-1">Subscribe to newsletter</div>
                    <div class="col-lg-8 col-md-12" style="height: 50px">
                        <input type=" text" placeholder="        Enter Your Email" class="h-100 w-100 rounded-3 txt" />
                    </div>
                    <div class="col-lg-4 col-md-12 mt-lg-0 mt-md-3">
                        <input type="submit" class="btn btn-primary h-100 w-100 rounded-pill" value="Subscribe" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------------------------------------------------------------------------------------------------------------->
    <div class="p-5">
        <div class="container p-5">
            <div class="d-flex justify-content-center">
                <div class="fotr-icon mx-2">
                    <i class="fa-brands fa-facebook-f"></i>
                </div>
                <div class="fotr-icon mx-2"><i class="fa-brands fa-twitter"></i></div>
                <div class="fotr-icon mx-2">
                    <i class="fa-brands fa-linkedin-in"></i>
                </div>
                <div class="fotr-icon mx-2"><i class="fa-brands fa-youtube"></i></div>
            </div>
            <div class="c-g fs-6 text-center my-4">
                Copyright ©2023 All rights reserved | This template is made with
                <i class="fa-solid fa-heart red-heart"></i> by
                <span class="underline-hover">Colorlib</span>
            </div>
            <div class="c-g fs-6 text-center my-4">
                <span class="underline-hover">Terms & Conditions</span> /
                <span class="underline-hover">Privacy Policy</span>
            </div>
        </div>
    </div>
    <!--------------------------------------------------------------------------------------------------------------->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="/js/jquery-3.6.4.js"></script>
    <script src="/js/slick.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/all.min.js"></script>
    <script src="/js/colorlib.js"></script>
</body>

</html>
</body>

</html>