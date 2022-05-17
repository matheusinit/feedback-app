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

<body>
  <?php
  require_once 'header.php';
  ?>

  <main>
    <div class="container d-flex flex-column align-items-center my-5">
      <h2>Give a feedback</h2>
      <p class="lead text-center">Leave a feedback for Hello Feedback</p>

      <form action="" class="mt-4 w-75">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" placeholder="Enter your name">
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" class="form-control" id="email" placeholder="Enter your e-mail">
        </div>

        <div class="mb-3">
          <label for="feedback" class="form-label">Feedback</label>
          <textarea class="form-control" id="feedback" placeholder="Enter your feedback"></textarea>
        </div>

        <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
      </form>

    </div>
  </main>

  <?php
  require_once 'footer.php'
  ?>

  <!-- JavaScript Bundle with Popper (Bootstrap 5) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>