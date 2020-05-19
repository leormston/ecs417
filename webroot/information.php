<!DOCTYPE html>
<html>
  <head>
    <title>Louie Ormston</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="index.css">

  </head>
  <?php   session_start(); ?>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">Louie Ormston</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="information.php#Portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="information.php#Education">Education</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="information.php#Education">Experience</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="viewBlog.php">Blog</a>
          </li>
        </ul>
      </div>
    </nav>

    <section id="About Me">
      <div class="informationCard">
        <h2>Who is Louie Ormston</h2>
        <hr>
        <p>I am a first year student currently studying Computer Science at Queen Mary University of London.
          This site was created with the purpose of acting as a presentation
          of what I have learn't in my first year studies. Outside of my studies I am interested in
          mobile development and graphic design.
        </p>
      </div>
    </section>

    <section id="Portfolio">
      <div class="informationCard">
        <h2>My Portfolio</h2>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <a href="https://obscure-castle-22583.herokuapp.com/" target="_blank">
            <div class="portfolioCard">
              <h3>MGR</h3>
              <hr>
              <img src="images/gmrLogo.png" height = "100px">
              <p>This site delivered educational resources for GCSE maths students</p>
            </div>
            </a>
          </div>
          <div class="col-sm-3">
            <a href="https://louie-ormston-portfolio.herokuapp.com/" target="_blank">
            <div class="portfolioCard">
              <h3>Alt Porfolio</h3>
              <hr>
              <img src="images/me2.png" height = "100px">
              <p>This was my original portfolio. Built using ruby on rails</p>
            </div>
            </a>
          </div>
          <div class="col-sm-3">
            <a href="https://a1directsupplies-uk.herokuapp.com/" target="_blank">
            <div class="portfolioCard">
              <h3>A1 Direct Supplies</h3>
              <hr>
              <img src="images/A1Logo.png" height = "100px">
              <p>This was a site developed for a company in the engineering industry</p>
            </div>
            </a>
          </div>
          <div class="col-sm-3">
            <a href="https://book-review-sunday.herokuapp.com/" target="_blank">
            <div class="portfolioCard">
              <h3>Book Review Sunday</h3>
              <hr>
              <img src="images/BookReviewSundayLogo.png" height = "100px">
              <p>This was a site where users could submit reviews of books</p>
            </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section id="Education">
      <div class="informationCard">
        <h2>Education</h2>
        <hr>
        <p>I am currently a first year studying Computer Science and QMUL. For the complete breakdown of all
          academic achievements a list has been created below :</p>
        <div class="row">
          <div class="col-sm-6">
            <h3>Littleover Community Sixth Form</h3>
            <ul>
              <li>B - AS - Physics</li>
              <li>C - AS - Economics</li>
              <li>D - AS - Computer Science</li>
              <li>~B - A Level - Physics</li>
              <li>B - A Level - Computer Science</li>
              <li>B - A Level - Economics</li>
            </ul>
          </div>
          <div class="col-sm-6">
            <h3>Derby Moor Community Sports College (GCSE)</h3>
            <ul>
              <li>A - Physics</li>
              <li>A - Chemistry C</li>
              <li>A - Biology/li>
              <li>A - Mathematics</li>
              <li>A - Citizenship</li>
              <li>B - Computer Science</li>
              <li>B - History</li>
              <li>B - Geography</li>
              <li>C- English</li>
            </ul>
          </div>
        </div>
      </div>

    </section>

    <section id="Experience">
      <div class="informationCard">
        <h2>Experience</h2>
        <hr>
        <p>I currently am working for a company called PhlashWeb which aims to help businesses transfer
        and work digitally. We also give techical support to companies where possible. THis may include
        building websites to building applications. </p>
      </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <footer>
    <div class="row footer-row">
      <div class="col-sm-3">
        <a href="https://louie-ormston-portfolio.herokuapp.com/">My Real Portfolio</a>
      </div>
      <div class="col-sm-3">
        <a href="information.php#Portfolio">Portfolio</a>
      </div>
      <div class="col-sm-3">
        <a href="information.php#Portfolio">Education</a>
      </div>
      <div class="col-sm-3">
        <a href="#">Blog</a>
      </div>
      <div class="col-sm-12">
        <p>Designed & Loved by Louie Ormston</p>
      </div>

      <div class="col-sm-12">
        <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 'true')
        { ?>
          <a href="addPost.html"> Add Post</a> |
          <a href="logout.php"> Log out</a>
       <?php } ?>
        <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 'false')
         { ?>
          <a href="login.html"> Log In</a>
        <?php } ?>
      </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
