<?php
require_once '../controllers/dbController.php';
$db = new dbController();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Services</title>
    <link rel="stylesheet" href="../static/css/leon.css" />
    <link rel="stylesheet" href="../static/css/normalize.css" />
    <link rel="stylesheet" href="../static/css/all.min.css" />
    <link rel="stylesheet" href="../static/css/pray.css" />
    <link rel="stylesheet" href="../static/css/zaka.css" />

    <script>
    function calculateZakat() {
        if (document.querySelector(".money-in").value == "" || document.querySelector(".years-in").value == "") {
            alert("Please fill all the fields");
        } else {
            if (document.querySelector(".money-in").value < 1000 || document.querySelector(".years-in").value < 1) {
                alert("no zakat for you");
            } else {
                var money = document.querySelector(".money-in").value;
                var years = document.querySelector(".years-in").value;
                var calculate = money / 1000 * years * 2.5;
                alert("you should pay:" + "" + calculate);
            }
        }
    }

    function track() {
        fast = prompt("if you are fasten today, you will get a reward press yes or no");
        if (fast == "yes") {
            alert(
                "prophet muhammed who is the best said who fast day for allah , allah will avoid the distance between him and 'naar' for 70 years"
            );
        } else {
            alert("don't worrry,if you intend to fast,you will be considered to have the same reward as fasten");
        }
    }
    </script>
</head>

<body>
    <?php include "nav.php" ?>
    <!-- start verse -->
    <div class="portfolio" id="vares">
        <div class="container">
            <h2 class="spechial-heading">varse</h2>
            <div class="portfolio-content">

                <?php
                $data = $db->get("SELECT * FROM hadith");
                foreach ($data as $d) {

                ?>
                <div class="card supp">
                    <div class="info">
                        <p>
                            <?php
                                echo  $d["Content"];
                                ?>
                        </p>
                        <hr style=" width:50%;">
                        <h3 style="color:white; text-align: center;">
                            <?php
                                echo  $d["NameOfNarrator"];
                                ?>
                        </h3>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <!-- end vares -->


    <!-- start pary time -->
    <div class=" container">
        <h2 class="spechial-heading" id="pray">Pray Time</h2>
        <div class="pray-cont">
            <button class="btn-pill">
                <span>Fajr </span>
                <span>3:21</span>
            </button>
            <button class="btn-shine">
                <span>Dhohr </span>
                <span>11:51</span>
            </button>
            <button class="btn-slide-line">
                <span> Asr </span>
                <span>3:28</span>
            </button>
            <button class="btn-slide-line center">
                <span>Maghrib </span>
                <span>6:43</span>
            </button>
            <button class="btn-slide-line center">
                <span>Isha </span>
                <span>8:11</span>
            </button>
        </div>
    </div>
    <!-- end pray time -->

    <!-- strat inspiration -->
    <div class="portfolio" id="inspiration">
        <div class="container">
            <h2 class="spechial-heading">Inspiration</h2>

            <div class="portfolio-content">
                <?php
                $data = $db->get("SELECT * FROM inspiration");
                foreach ($data as $data) {

                    echo "<div class='card cardbac'>";
                    echo '<img src="' . $data['image'] . '" >';
                    echo '</div>';
                }
                ?>
            </div>




        </div>
    </div>
    </div>
    <!-- end inspiration -->

    <div class="services" id="supplication">
        <div class="container">
            <h2 class="spechial-heading">Supplication</h2>
            <p>Don't be busy, be productive</p>
            <div class="services-content">
                <?php
                $data = $db->get("SELECT * FROM supplication");
                foreach ($data as $d) {

                ?>
                <div class="col">
                    <!-- start services content -->
                    <div class="srv">
                        <i class="fa-solid fa-hands-praying"></i>
                        <div class="text">
                            <h3>
                                Supplication
                            </h3>

                            <p>
                                <?php
                                    echo  $d["content"];
                                    ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php

                }
                ?>


                <div class="col">
                    <div class="image image-show">
                        <img src="../static/uploaded_img/services.jpg " alt="" />
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div id="zakat">
        <div class="container">

            <h2 class="spechial-heading">Zakat</h2>
            <div class="zakat-content">
                <div class="grid-container">
                    <div class="money">
                        <label class="label">Enter you total money</label>
                        <br>
                        <input class="input money-in" type="text">
                    </div>
                    <div class="years">
                        <label class="label">Enter you total years this money kept with you</label>
                        <br>
                        <input class="input years-in" type="text">
                    </div>
                    <div class="flex-cont">
                        <button onclick="calculateZakat()" class="submit">Calculate</button>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <div id="track">
        <div class="container">
            <h2 class="spechial-heading">Track</h2>
            <div class="track-content">
                <h1 onclick="track()" class="h1">are you fasten today</h1>
            </div>
        </div>
        <!-- end services -->

        <?php include "footer.php" ?>
</body>

</html>