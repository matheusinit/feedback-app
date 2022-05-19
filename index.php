<?php

$name = $email = $feedback = "";
$nameErr = $emailErr = $feedbackErr = false;
$isPost = false;
$wasSuceeded = false;

if (isset($_POST["submit"])) {
  $isPost = true;

  if (!empty($_POST["name"])) {
    $name = $_POST["name"];
  } else {
    $nameErr = true;
  }

  if (!empty($_POST["email"])) {
    $email = $_POST["email"];
  } else {
    $emailErr = true;
  }

  if (!empty($_POST["feedback"])) {
    $feedback = $_POST["feedback"];
  } else {
    $feedbackErr = true;
  }

  if ($nameErr == false && $emailErr == false && $feedbackErr == false) {
    $wasSuceeded = true;
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
  <!-- Bootstrap 5 (CSS) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <title>Your Feedback</title>
</head>

<body class="position-relative vh-100">
  <?php
  require_once 'header.php';
  ?>

  <main>
    <div class="container d-flex flex-column align-items-center my-5">
      <h2>Give a feedback</h2>
      <p class="lead text-center">Leave a feedback for Hello Feedback</p>

      <form action="index.php" class="mt-4 w-75" method="POST" novalidate>
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control <?= !$isPost ? "" : ($nameErr == 1 ? 'is-invalid' : 'is-valid') ?>" id="name" name="name" value="<?= $name ?>" placeholder="Enter your name" required>
          <div class="valid-feedback">
            Looks good.
          </div>
          <div class="invalid-feedback">
            Please provide a valid name.
          </div>
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" class="form-control <?= !$isPost ? "" : ($emailErr == 1 ? 'is-invalid' : 'is-valid') ?>" id="email" name="email" value="<?= $email ?>" placeholder="Enter your e-mail" required>
          <div class="valid-feedback">
            Looks good.
          </div>
          <div class="invalid-feedback">
            Please provide a valid e-mail.
          </div>
        </div>

        <div class="mb-3">
          <label for="feedback" class="form-label">Feedback</label>
          <textarea class="form-control  <?= !$isPost ? "" : ($feedbackErr == 1 ? 'is-invalid' : 'is-valid') ?>" id="feedback" name="feedback" placeholder="Enter your feedback" required><?= $feedback ?></textarea>
          <div class="valid-feedback">
            Looks good.
          </div>
          <div class="invalid-feedback">
            Please provide a valid feedback text.
          </div>
        </div>

        <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
      </form>
  </main>

  <div aria-live="polite" aria-atomic="true">
    <div class="toast-container bottom-0 end-0 p-3">
      <div class="toast fade <?= !$wasSuceeded ?: "show" ?>" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
          <img src="" class="rounded me-2" alt="...">
          <strong class="me-auto">Feedback App</strong>
          <small class="text-muted">just now</small>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
          Your feedback was added.
        </div>
      </div>
    </div>
  </div>

  <?php
  require_once 'footer.php'
  ?>

  <!-- JavaScript Bundle with Popper (Bootstrap 5) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>