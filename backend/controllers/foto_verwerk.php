<?php
// var_dump($_FILES['foto']);
if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
    if ($_FILES['foto']['type'] == "image/jpg" ||
        $_FILES['foto']['type'] == "image/jpeg" ||
        $_FILES['foto']['type'] == "image/pjpg") {
        
        $map = dirname(dirname(dirname(__FILE__))) . "/assets/uploads/";
        $bestand = $_POST['id'] . '.jpg';
        
        move_uploaded_file($_FILES['foto']['tmp_name'], $map . $bestand);
        header('Location: ../../pages/foto.php?id=' . $_POST['id']);
    } else {
        echo "Het bestand is van het verkeerde type.";
    }
} else {
    echo "Er ging iets fout bij het uploaden.";
}

?>