<?php

require_once '../backend/config/config.inc.php';
require_once '../backend/controllers/session.inc.php';

$query = "SELECT * FROM `back2_leden` ORDER BY `last_name`";
$result = mysqli_query($link, $query);
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body style="background-color: lightgray;">
    <div class="modal-content col-8 mx-auto p-5">
      <h1 for="" class="text-center">Ledenbeheer</h1><br>
        <?php
            if (mysqli_num_rows($result) == 0) {
        ?>
                <p class="p-3 mb-2 text-white text-center bg-danger">Sorry! geen leden gevonden in de database</p>
        <?php
            } else {
        ?>
        <table class="table table-striped table-hover">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Geslacht</th>
              <th scope="col">Voornaam</th>
              <th scope="col">Achternaam</th>
              <th scope="col">Geboortedatum</th>
              <th scope="col">Lid sinds</th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
          </thead >
          <tbody>
          <?php
              while ($row = mysqli_fetch_array($result)) {
          ?>
            <tr>
              <td scope="col"><?=$row['id']; ?></td>
              <td><?=$row['gender']; ?></td>
              <td><?=$row['first_name']; ?></td>
              <td><?=$row['last_name']; ?></td>
              <td><?=$row['birth_date']; ?></td>
              <td><?=$row['member_since']; ?></td>
              <td><a href="lid_bewerk.php?id=<?=$row['id']; ?>" class="btn btn-success text-center">bewerk</a></td>
              <td><a href="lid_verwijder.php?id=<?=$row['id']; ?>" class="btn btn-danger text-center">verwijder</a></td>
              <td><a href="foto.php?id=<?=$row['id']; ?>" class="btn btn-secondary text-center">foto</a></td>
            </tr>
          <?php
              }
            }
          ?>
          </tbody>
      </table>
      <a href="lid_nieuw.php" class="btn btn-primary text-center">Lid toevoegen</a>

      <p class="p-3 mb-2 text-center">
        Je bent ingelogd als <?=$_SESSION['username']; ?><br>
        <a href="../logout.php">Klik hier</a> om uit te loggen.
      </p>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>