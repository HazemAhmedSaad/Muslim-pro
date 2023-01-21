<!DOCTYPE html>
<html lang="en">
<?php
require_once '../controllers/dbController.php';
$db = new dbController();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hijj</title>
    <link rel="stylesheet" href="../static/css/leon.css" />
    <link rel="stylesheet" href="../static/css/normalize.css" />
    <link rel="stylesheet" href="../static/css/all.min.css" />
</head>

<body>
    <?php include "nav.php" ?>

    <!-- start portfolio -->
    <div class="portfolio hijj" id="portfolio">
        <div class="container">
            <h2 class="spechial-heading text_hijj"> Hijj </h2>
            <div class="portfolio-content">
                <?php
                $data = $db->get("SELECT * FROM hijj");
                foreach ($data as $data) {
                    echo "<div class='card'>";
                        echo '<img src="' . $data['hijj_image'] . '" >';
                        echo "<div class='info'>";
                             echo "<h3>  $data[hijj_place]  </h3>";
                        echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>
    <!-- end portfolio -->
    <?php include "footer.php" ?>

</body>

</html>