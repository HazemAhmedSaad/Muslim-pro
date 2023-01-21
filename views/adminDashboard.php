<!DOCTYPE html>
<html lang="en">
<?php
if (!isset($_SESSION["userRole"])) {
    session_start();
}


if ($_SESSION['userRole'] == 'Client') {
    header("location: ./login.php");
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/css/menu.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="../static/css/all.min.css" />

    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700&family=Comforter&family=Jomhuria&family=Open+Sans:ital,wght@1,300&family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <title>Admin</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="../static/menu.js"></script>
    <script src="../static/Active.js"></script>
    <link rel="stylesheet" href="../static/css/admin.css">
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const page = window.location.href.split('#').pop();
            pageDis = document.querySelector("." + page);
            document.querySelector(".wui-ins").style.display = "none";
            document.querySelector(".wui-quran").style.display = "none";

            document.querySelector(".wui-hadith").style.display = "none";
            document.querySelector(".wui-hijj").style.display = "none";
            pageDis.style.display = "block";

        });

        function disIns() {
            document.querySelector(".wui-ins").style.display = "block";
            document.querySelector(".wui-quran").style.display = "none";

            document.querySelector(".wui-hadith").style.display = "none";
            document.querySelector(".wui-hijj").style.display = "none";
        }

        function disQur() {
            document.querySelector(".wui-ins").style.display = "none";
            document.querySelector(".wui-quran").style.display = "block";

            document.querySelector(".wui-hadith").style.display = "none";
            document.querySelector(".wui-hijj").style.display = "none";
        }

        function disAz() {
            document.querySelector(".wui-ins").style.display = "none";
            document.querySelector(".wui-quran").style.display = "none";

            document.querySelector(".wui-hadith").style.display = "none";
            document.querySelector(".wui-hijj").style.display = "none";
        }

        function disHadith() {
            document.querySelector(".wui-ins").style.display = "none";
            document.querySelector(".wui-quran").style.display = "none";

            document.querySelector(".wui-hadith").style.display = "block";
            document.querySelector(".wui-hijj").style.display = "none";
        }

        function disHijj() {
            document.querySelector(".wui-ins").style.display = "none";
            document.querySelector(".wui-quran").style.display = "none";
            document.querySelector(".wui-hadith").style.display = "none";
            document.querySelector(".wui-hijj").style.display = "block";
        }
    </script>
</head>

<body>

    <div class="wui-side-menu open pinned" data-wui-theme="dark">
        <div class="wui-side-menu-header">
            <a href="#" class="wui-side-menu-trigger"><i class="fa fa-bars"></i></a>
            <a href="#" class="wui-side-menu-pin-trigger">
                <i class="fa fa-thumb-tack"></i>
            </a>
        </div>
        <ul class="wui-side-menu-items">

            <a onclick="disIns()" class="wui-side-menu-item" href="#wui-ins">
                <i class="fa-solid fa-lightbulb"></i>
                <span class="box-title">Inspirations</span>
            </a>

            <a onclick="disQur()" class="wui-side-menu-item" href="#wui-quran">
                <i class="fa-solid fa-book-quran"></i>
                <span class="box-title">Supplication</span>
            </a>


            <a onclick="disHadith()" class="wui-side-menu-item" href="#wui-hadith">
                <i class="box-ico fa fa-users fa-fw"></i>
                <span class="box-title">Hadith</span>
            </a>


            <a onclick="disHijj()" class="wui-side-menu-item" href="#wui-hijj">
                <i class="box-ico fa fa-list-alt fa-fw"></i>
                <span class="box-title">Hijj</span>
            </a>




        </ul>
    </div>
    <div class="wui-content">
        <div class="wui-content-header">
            <a href="#" class="wui-side-menu-trigger"><i class="fa fa-bars"></i></a>
            <span class="wui-title">Admin Panel</span>
        </div>

        <div class="wui-ins">
            <span style="font-weight:bold;font-size:20px" class="box-title">inspirations</span>
            <br>
            <?php include './tableIns.php' ?>
        </div>
        <div class="wui-quran">

            <span style="font-weight:bold;font-size:20px" class="box-title">Supplication</span>
            <br>
            <?php include './tableSupp.php' ?>
        </div>
        <div class="wui-hadith">
            <span style="font-weight:bold;font-size:20px" class="box-title">Hadith</span>
            <br>
            <?php include './tableHad.php' ?>
        </div>
        <div class="wui-hijj">
            <span style="font-weight:bold;font-size:20px" class="box-title">Haijj</span>
            <br>
            <?php include './tableHijj.php' ?>
        </div>


    </div>


</body>

</html>