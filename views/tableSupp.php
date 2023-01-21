<?php
require_once '../controllers/dbController.php';
require_once '../models/supplication.php';
$db = new dbController;
$object = new supplication;
// $content = $_POST['supp-contant']; //edit
if (isset($_POST['supp-contant'])) {
    if (!empty($_POST['supp-contant'])){
    $set = $object->setContent($_POST['supp-contant']); //edit
    $get = $object->getContent();
    $insert = $db->create("INSERT INTO supplication(content) VALUES('$get')");
    echo "new supplication added successfully";
    }else{
    echo "please enter text in the inputfield";
}
}
if (isset($_GET['id'])) {
    $suppid = $_GET['id'];
    $db->delete('DELETE FROM supplication WHERE supp_id = ' . $suppid);
}
?>
<style>
h1 {
    font-size: 30px;
    text-align: center;
}
</style>
<script>
window.onload = setTimeout(function() {
    document.querySelector(".message").style.display = "none";
}, 3000);
</script>
<div class="container">

    <div class="grid-container">
        <!-- <?php
                if ($message) {
                    foreach ($message as $message) {
                        echo '<span class="message">' . $message . '</span>';
                    }
                }
                ?> -->
        <div class="card">
            <h1 class="grid-item-h1">Enter the text </h1>
            <form action="adminDashboard.php#wui-quran" class="grid-item-form flex-cont" method="POST">

                <div class="rowAdmin">
                    <label style="font-size:20px; "><strong><em>Supplication</em></strong></label>

                    <input type="text" id="file" name="supp-contant">

                    <button type="submit" class="btn btn-primary" name="add_supplication">Add</button>
                </div>
            </form>
        </div>
        <br>

        <div class="card">
            <div class="information ">
                <div class="hed">
                    <h1>Supplication</h1>
                    <h1>Action</h1>
                </div>

                <form class="action" method="POST">
                    <table>
                        <?php
                        $data = $db->get("SELECT * FROM supplication");
                        foreach ($data as $data) {
                            echo '<tr>';
                            echo '<td style = "width: 91%;">' . $data['content'] . '</td>';
                            echo '<td><a class="taplink"  href="adminDashboard.php?id=' . $data['supp_id'] . '#wui-quran"><i class="fa-solid fa-trash-can"></i></a></td>';
                            echo '</tr>';
                            echo '<td  style = "width: 91%;" ><hr></td> ';
                        }
                        ?>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>