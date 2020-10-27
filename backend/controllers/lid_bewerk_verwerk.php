<?php

require_once '../config/config.inc.php';
require_once '../config/controllers/session.inc.php';

$id             = $_POST['id'];
$gender         = $_POST['gender'];
$first_name     = $_POST['first_name'];
$last_name      = $_POST['last_name']; 
$birth_date     = $_POST['birth_date'];
$member_since   = $_POST['member_since'];

if (strlen($id) > 0 &&
    strlen($gender) > 0 &&
    strlen($first_name) > 0 &&
    strlen($last_name) > 0 &&
    strlen($birth_date) > 0 &&
    strlen($member_since) > 0) {
    
    $check1 = strtotime($birth_date);
    $check2 = strtotime($member_since);
    if (date('Y-m-d', $check1) == $birth_date &&
        date('Y-m-d', $check2) == $member_since) {

        $query = "UPDATE `back2_leden` SET `gender`='$gender', `first_name`='$first_name', `last_name`='$last_name', `birth_date`='$birth_date', `member_since`='$member_since' 
                    WHERE `id`=$id";

        $result = mysqli_query($link, $query);

        if ($result) {
            header('Location: ../../pages/home.php');
            exit;
        } else {
            echo 'Er ging wat mis met het bewerken!';
        }
    } else {
        echo 'Een van de ingevulde data was ongeldig!';
    }
} else {
    echo 'Niet alle velden waren ingevuld!';
}

?>