<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Project 01</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!--I won't do more than barebone HTML, since this isn't an HTML tutorial.-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/style1.css">
  </head>
  <body>
  <div class="container>">

    <!--A quick navigation-->
    <nav>
      <div class="wrapper">
        <a href="index.php"><img src="img/logo-white.png" alt="Blogs logo"></a>
        <ul>
          <li><a href="index.php">Start</a></li>
            <li><a href="blog.php">Om</a></li>

            <?php
            if (isset($_SESSION["useruid"])) {
              echo "<li><a href='discover.php'>TE19</a></li>";
              echo "<li><a href='blog.php'>TE20</a></li>";
              echo "<li><a href='te21.php'>TE21</a></li>";
              echo "<li><a href='logout.php'>Logout</a></li>";
            }
            else {
              echo "<li><a href='signup.php'>Sök</a></li>";
              echo "<li><a href='login.php'>Inlogg</a></li>";
            }
          ?>
        </ul>
      </div>
    </nav>

<!--A quick wrapper to align the content (ends in footer.php)-->
<div class="wrapper">
