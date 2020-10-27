<?php

require_once '../backend/controllers/session.inc.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body style="background-color: lightgray;">
    <div class="modal-content col-5 mx-auto p-5">
        <h1 for="" class="text-center">Nieuw lid inschrijven</h1><br>

        <form method="post" action="../backend/controllers/lid_nieuw_verwerk.php">
            
            <div class="form-check form-check-inline">
                <label>
                    <input type="radio" class="form-check-input" name="gender" id="gender_m" value="M" checked>
                    <br>
                    <i class="fas fa-male    "></i>
                </label>
                
                <label>
                    <input type="radio" class="form-check-input" name="gender" id="gender_f" value="F">
                    <br>
                    <i class="fas fa-female    "></i>
                </label>
            </div>

            <div class="form-group">
                <label for="first_name">Voornaam</label>
                <input type="text" class="form-control" name="first_name" id="first_name" required>
            </div>
            <div class="form-group">
                <label for="last_name">Achternaam</label>
                <input type="text" class="form-control" name="last_name" id="last_name" required>
            </div>
            <div class="form-group">
                <label for="birth_date">Geboortedatum</label>
                <input type="date" class="form-control" name="birth_date" id="birth_date" required>
            </div>
            <div class="form-group">
                <label for="member_since">Lid sinds</label>
                <input type="date" class="form-control" name="member_since" id="member_since" required>
            </div>

            <button type="submit" class="btn btn-primary text-center">Opslaan</button>
            <button onclick="history.back(); return false;" class="btn btn-secondary text-center">Annuleren</button>
        </form>
    </div>
    <!-- Optional JavaScript -->
    <script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js" integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a" crossorigin="anonymous"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>