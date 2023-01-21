<?php
require_once '../controllers/dbController.php';
require_once '../models/Hadith.php';
$db = new dbController;
$object = new Hadith;
// $content = $_POST['had-contant']; //edit
// $name = $_POST['had-name']; //edit

if (isset($_POST['had-contant']) && isset($_POST['had-name'])) {
    if (!empty($_POST['had-contant']) or !empty($_POST['had-name'])) {
        $set_cont = $object->setContent($_POST['had-contant']); //edit
        $get_cont = $object->getContent();
        $set_name = $object->setNameOfNarrator($_POST['had-name']); //edit
        $get_name = $object->getNameOfNarrator();
        $insert = $db->create("INSERT INTO hadith(Content , NameOfNarrator) VALUES('$get_cont','$get_name')");
        echo "new hadith added successfully";
    }else{
    echo "please enter text in the inputfield";
    }
}
if (isset($_GET['id'])) {
    $hadid = $_GET['id'];
    $db->delete('DELETE FROM hadith WHERE id = ' . $hadid);
}
?>
<script>
window.onload = setTimeout(function() {
    document.querySelector(".message").style.display = "none";
}, 3000);
</script>
<div class="container">

    <div class="grid-container">
        <?php
        // if ($message) {
        //    foreach ($message as $message) {
        //         echo '<span class="message">' . $message . '</span>';
        //     }
        // }
        ?>
        <div class="card">
            <h1 class="grid-item-h1">Enter the text </h1>
            <form action="adminDashboard.php#wui-hadith" class="grid-item-form flex-cont" method="POST">

                <div class="rowAdminHad">
                    <div class="ro">
                        <label style="font-size:20px; "><strong><em>Hadith</em></strong></label>
                        <input type="text" id="file" name="had-contant">
                    </div>
                    <div class="ro">

                        <label style="font-size:20px; "><strong><em>Name</em></strong></label>
                        <input type="text" id="file" name="had-name">
                    </div>

                    <button type="submit" class="btn btn-primary" name="add_hadith">Add</button>
                </div>
            </form>
        </div>
        <br>

        <div class="card tall">
            <div class="information ">
                <div class="hed">
                    <h1>Hadith</h1>
                    <h1>Name</h1>
                    <h1>Action</h1>
                </div>

                <form class="action" method="POST">
                    <table>
                        <?php
                        $data = $db->get("SELECT * FROM hadith");
                        foreach ($data as $data) {
                            echo '<tr>';
                            echo '<td style = "width: 46%;">' . $data['Content'] . '</td>';
                            echo '<td style = "width: 44%;">' . $data['NameOfNarrator'] . '</td>';
                            echo '<td><a class="taplink" href="adminDashboard.php?id=' . $data['id'] . '#wui-hadith"><i class="fa-solid fa-trash-can"></i></a></td>';
                            echo '</tr>';
                            echo '<tr>';
                            echo '<td  style = "width: 47%;" ><hr></td> ';
                            echo '<td  style = "width: 44%;" ><hr></td> ';

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