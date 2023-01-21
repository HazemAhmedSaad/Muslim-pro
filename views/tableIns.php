<?php
require_once '../controllers/dbController.php';
require_once '../models/Inspiration.php';
$db = new dbController;
$object = new Inspiration;

if (isset($_POST['add_inspire'])) {
    $filename = $_FILES["inspire_image"]["name"];
    $tempname = $_FILES["inspire_image"]["tmp_name"];
    $location = "../static/img/" . date("h-i-s") . $filename;
    if (move_uploaded_file($tempname, $location)) {
        $set = $object->setImage($location);
        $get = $object->getImage($location);
        $insert = $db->create("INSERT INTO inspiration(image) VALUES('$location')");
    }
    else{
        echo "please enter text in the inputfield";
        }
}
if (isset($_GET['id'])) {
    $imgid = $_GET['id'];
    $db->delete('DELETE FROM inspiration WHERE image_id = ' . $imgid);
}

?>

<script>
window.onload = setTimeout(function() {
    document.querySelector(".message-ins").style.display = "none";
}, 3000);
</script>
<div class="container">
    <div class="grid-container">
        <div class="card">
            <h1 class="grid-item-h1">Enter the text </h1>
            <form action="adminDashboard.php#wui-ins" class="grid-item-form flex-cont" method="POST"
                enctype="multipart/form-data">

                <div class="rowAdmin">
                    <label style="font-size:20px; "><strong><em>Inspire</em></strong></label>
                    <input class='fil' type="file" id=" file" name="inspire_image">
                    <button type="submit" class="btn btn-primary" name="add_inspire">Add</button>
                </div>
            </form>
        </div>
        <br>

        <div class="card">
            <div class="information ">
                <div class="hed">
                    <h1>Image</h1>
                    <h1>Action</h1>
                </div>

                <form class="action" action="adminDashboard.php#wui-ins" method="GET">
                    <table>

                        <?php
                        $data = $db->get("SELECT * FROM inspiration");
                        foreach ($data as $data) {
                            echo '<tr>';
                            echo '<td> <img src="' . $data['image'] . '" width="60px" height="60px"> <td>';
                            echo '<td><a class="taplink"  href="adminDashboard.php?id=' . $data['image_id'] . '#wui-ins"><i class="fa-solid fa-trash-can"></i></a></td>';
                            echo '</tr>';
                            echo '<tr>';
                            echo '<td style = "width:90%;" ><hr></td> ';
                            echo '</tr>';
                        }
                        ?>


                    </table>
                </form>
            </div>
        </div>
    </div>
</div>