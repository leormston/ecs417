<!DOCTYPE html>
<html>
  <head>
    <title>Creating Post</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="index.css">

  </head>
  <body>
    <?php
      $servername = "localhost";
      $username = "admin";
      $password = "password";

      // Create connection
      $conn = mysqli_connect($servername, "admin", "password", 'PortfolioDB');

      // Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
      $title = mysqli_real_escape_string($conn, $_REQUEST['blogTitle']);
      $content = mysqli_real_escape_string($conn, $_REQUEST['blogContent']);

      $sql = "INSERT INTO Blog (`blogTitle`, `blogContent`)
      VALUES ('$title', '$content')";

      if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
      } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

      mysqli_close($conn);
      header("Location: viewBlog.php");
      ?>
  </body>
</html>
