<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Muslim Pro</title>

    <link rel="stylesheet" href="../static/css/leon.css" />
    <link rel="stylesheet" href="../static/css/extend.css" />
    <link rel="stylesheet" href="../static/css/normalize.css" />
    <link rel="stylesheet" href="../static/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@700&family=Comforter&family=Jomhuria&family=Open+Sans:ital,wght@1,300&family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
</head>

<body>
    <?php include "nav.php" ?>

    <!-- start landing section -->
    <div class="landing">
        <div class="intro-text">
            <h1>Muslim pro</h1>
        </div>
    </div>
    <!-- end landing section -->
    <!-- start extend -->
    <div class="extend" id="extend">
        <div class="container">
            <h2 class="spechial-heading">Services</h2>
            <p>Better late than never</p>
            <div class="extend-content">
                <!-- inspired by https://www.dreamstime.com/infographic-banner-circles-tabs-can-be-used-as-diagram-graph-chart-info-graphic-website-layout-image121043502 -->
                <ul>
                    <a class="decor" href="hijj.php">
                        <li class="box" style="--accent-color: #d00903">
                            <div class="icon">
                                <i class="fa-solid fa-kaaba"></i>

                            </div>
                            <div class="title">Hijj</div>

                        </li>
                    </a>
                    <a class="decor" href="more.php#varse">
                        <li class="box" style="--accent-color: #10cab7">
                            <div class="icon">
                                <i class="fa-solid fa-scroll"></i>

                            </div>
                            <div class="title">Verse</div>

                        </li>
                    </a>
                    <a href="more.php#inspiration">
                        <li class="box" style="--accent-color: rgb(0, 110, 255)">
                            <div class="icon"><i class="fa-solid fa-lightbulb"></i></i></div>
                            <div class="title">Inspiration</div>
                        </li>
                    </a>
                    <a href="more.php#supplication">
                        <li class="box" style="--accent-color: lightcoral">
                            <div class="icon"><i class="fa-solid fa-hands-praying"></i></div>
                            <div class="title">Supplication</div>

                        </li>
                    </a>

                    <a href="more.php#pray">
                        <li class="box" style="--accent-color: #ec9e38">
                            <div class="icon"><i class="fa-solid fa-mosque"></i></div>
                            <div class="title">Pray time</div>

                        </li>
                        <a href="more.php#pray">
                            <li class="box" style="--accent-color:rgb(255, 94, 0)">
                                <div class="icon"><i class="fa-solid fa-microphone-lines"></i></div>
                                <div class="title">Azan </div>

                            </li>
                        </a>
                    </a>
                    <a href="more.php#track">
                        <li class="box" style="--accent-color: #64becf">
                            <div class="icon"><i class="fa-solid fa-plus-minus"></i></div>
                            <div class="title">Trak fast</div>

                        </li>
                    </a>
                    <a href="">
                        <li class="box" style="--accent-color: #2c4755">
                            <div class="icon"><i class="fa-solid fa-circle-play"></i></div>
                            <div class="title">quran audio</div>

                        </li>
                    </a>


                    <a href="more.php#zakat">
                        <li class="box" style="--accent-color: rgba(3, 141, 3, 0.856)">
                            <div class="icon"><i class="fa-solid fa-calculator"></i></div>
                            <div class="title">zakat</div>
                        </li>
                    </a>



                </ul>
            </div>
        </div>
    </div>
    <!-- end extend -->

    <!-- start about -->
    <div class="about" id="about">
        <div class="container">
            <h2 class="spechial-heading">About</h2>
            <p>Less is more work</p>
            <div class="about-content">
                <div class="image">
                    <img src="../static/uploaded_img/about.jpg" alt="" />
                </div>
                <div class="text">
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam
                        rerum recusandae voluptatum error asperiores quis nihil architecto
                        deleniti quidem doloribus voluptatibus optio mollitia consequatur
                        incidunt quaerat dicta, eius non aut.
                    </p>
                    <hr />
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem
                        minus culpa vel! Impedit veniam placeat vero est earum maxime
                        fuga, harum voluptatem, debitis consequuntur, possimus autem
                        labore enim reiciendis temporibus!
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->

    <!-- start contact -->
    <div class="contact" id="contact">
        <div class="container">
            <h2 class="spechial-heading">Contact</h2>
            <p>We are born to create</p>
            <div class="info">
                <p class="label">Fell free to drop us a line at:</p>
                <a href="mailto:leonagecy@mail.com?subject=contact" class="link">MuslimPro@mail.com</a>
                <div class="social">
                    Find Us On Social Networks
                    <i class="fa-brands fa-youtube"></i>
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-twitter"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->

    <!-- start footer -->
    <?php include "footer.php" ?>

</body>

</html>