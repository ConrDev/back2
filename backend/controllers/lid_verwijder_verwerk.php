<?php

require_once '../config/config.inc.php';
require_once '../config/controllers/session.inc.php';

$id = $_GET['id'];

if (is_numeric($id)) {
    $query = "DELETE FROM `back2_leden` WHERE `id`=$id";
    $result = mysqli_query($link, $query);
    if ($result) {
        header('Location: ../../pages/home.php');
        exit;
    } else {
        echo "Er ging wat mis met het verwijderen!";
        exit;
    }
} else {
    echo "Onjuist ID!";
    exit;
}
?>