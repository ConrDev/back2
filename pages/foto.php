<?php

require_once '../backend/config/config.inc.php';
require_once '../backend/controllers/session.inc.php';

$id = $_GET['id'];

if (is_numeric($id)) {
    $query = "SELECT * FROM `back2_leden` WHERE `id`=$id";
    $result = mysqli_query($link, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
    } else {
        echo "Geen lid gevonden.";
        exit;
    }
} else {
    echo "Onjuist ID!";
    exit;
}

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Foto</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body style="background-color: lightgray;">
    <div class="modal-content col-5 mx-auto p-5">
        <?php
            if (file_exists(dirname(dirname(__FILE__)) . '/assets/uploads/' . $id . '.jpg')) {
        ?>
            <img src="../assets/uploads/<?=$id; ?>.jpg" class="rounded mx-auto d-block" alt="foto"><br><br>
            <button onclick="history.back(); return false;" class="btn btn-secondary text-center">Ga terug</button>
        <?php
            } else {
        ?>
            <!-- <form method="post" action="../backend/controllers/foto_verwerk.php" enctype="multipart/form-data">

                <input type="hidden" name="id" value="<?=$id; ?>">

                <div class="form-group"> -->
                    <!-- <label for="foto">Foto</label>
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="foto" name="foto" accept="image/jpeg">
                            <label class="custom-file-label" for="foto" aria-describedby="foto">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary text-center" id="foto">Uploaden</button>
                        </div>
                    </div> -->
                <!-- </div>

                <button onclick="history.back(); return false;" class="btn btn-secondary text-center">Annuleren</button>

            </form> -->

            <form method="post" action="../backend/controllers/foto_verwerk.php" enctype="multipart/form-data">

                <input type="hidden" name="id" value="<?=$id; ?>">

                <div class="form-group">
                    <label for="foto">Foto</label><br>
                    <input type="file" id="foto" name="foto" accept="image/jpeg">
                </div>

                <button type="submit" class="btn btn-primary text-center" id="foto">Uploaden</button>
                <button onclick="history.back(); return false;" class="btn btn-secondary text-center">Annuleren</button>

            </form>
        <?php
            }
        ?>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>