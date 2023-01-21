<?php
require_once '../controllers/dbController.php';
require_once '../models/Hijj.php';
$db = new dbController;
$object = new Hijj;

if (isset($_FILES['hijj-image']) or isset($_POST['place-name'])) {
    if (!empty($_FILES['hijj-image']) or !empty($_POST['place-name'])) {
        $place = $_POST['place-name'];
        $filename = $_FILES["hijj-image"]["name"];
        $tempname = $_FILES["hijj-image"]["tmp_name"];
        $location = "../static/img/" . date("h-i-s") . $filename;
        if (move_uploaded_file($tempname, $location)) {
            $insert = $db->create("INSERT INTO hijj(hijj_image,hijj_place) VALUES('$location','$place')");
        }
        
    } 
    else{
        echo "Please fill all the fields";
    }
}

if (isset($_GET['id'])) {
    $hijjid = $_GET['id'];
    $db->delete('DELETE FROM hijj WHERE id = ' . $hijjid);
}
?>
<script>
window.onload = setTimeout(function() {
    document.querySelector(".message").style.display = "none";
}, 3000);
</script>
<div class="container">

    <div class="grid-container">

        <div class="card">
            <h1 class="grid-item-h1">Fill in all fields </h1>
            <form action="adminDashboard.php#wui-hijj" class="grid-item-form flex-cont" method="POST"
                enctype="multipart/form-data">
                <div class="rowAdminHad">
                    <div class="ro">
                        <label style="font-size:20px; "><strong><em>Hijj </em></strong></label>
                        <input class='fil' type="file" id="file" name="hijj-image">
                    </div>

                    <div class="ro">
                        <label style="font-size:20px; "><strong><em>Name</em></strong></label>
                        <input type="text" id="file" name="place-name">
                    </div>
                    <button type="submit" class="btn btn-primary" name="add_hijj">Add</button>
                </div>
            </form>
        </div>
        <br>
        <div class="card tall">
            <div class="information ">
                <div class="hed">
                    <h1>Name Place</h1>
                    <h1>Image</h1>
                    <h1>Action</h1>
                </div>

                <form class="action" method="POST">
                    <table>
                        <?php
                        $data = $db->get("SELECT * FROM hijj");
                        foreach ($data as $data) {
                            echo '<tr>';
                            echo '<td style = "width: 46%;">' . $data['hijj_place'] . '</td>';
                            echo '<td style = "width: 46%;" > <img width="60px" height ="60px" src="' . $data['hijj_image'] . '"></img> <td>';
                            echo '<td ><a class="taplink"  href="adminDashboard.php?id=' . $data['id'] . '#wui-hijj"><i class="fa-solid fa-trash-can"></i></a></td>';
                            echo '</tr>';
                            echo '<tr>';
                            echo '<td  style = "width: 46%;" ><hr></td> ';
                            echo '<td  style = "width: 46%;" ><hr></td> ';
                            echo '</tr>';
                        }
                        ?>
                    </table>
                </form>
            </div>
        </div>
        <br>

    </div>
</div>