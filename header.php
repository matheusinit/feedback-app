<?php
$uri = $_SERVER["REQUEST_URI"];
$uri_array = explode("/", $uri);
$current_page = $uri_array[count($uri_array) - 1];
?>

<header>
  <nav class="navbar navbar-expand-sm bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Hello Feedback</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <? if ($current_page == "index.php") : ?>
            <a href="" class="nav-link active" aria-current="page">Home</a>
          <? else : ?>
            <a href="" class="nav-link">Home</a>
          <? endif ?>

          <? if ($current_page == "feedback.php") : ?>
            <a href="" class="nav-link active" aria-current="page">Feedback</a>
          <? else : ?>
            <a href="" class="nav-link">Feedback</a>
          <? endif ?>

          <? if ($current_page == "about-us.php") : ?>
            <a href="" class="nav-link active" aria-current="page">About us</a>
          <? else : ?>
            <a href="" class="nav-link">About-us</a>
          <? endif ?>
        </ul>
      </div>
    </div>
  </nav>
</header>