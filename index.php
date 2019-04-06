<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
  </head>
  <body>
    <?php
    if (!isset($_SESSION['access_token'])){
      header('location: ./login.php');
  } else {
    ?>
    <h1 class="text-centered">Welcome <?php echo $_SESSION['userData']['first_name']; echo ", "; echo $_SESSION['userData']['last_name']; ?></h1>
    <div class="content">
      <table>
        <tbody>
          <tr>
            <td><img src="<?php echo $_SESSION['userData']['picture']['url'];?>"></td>
            <td> ID: <?php echo  $_SESSION['userData']['id']; ?>
            <br/>Name: <?php echo  $_SESSION['userData']['first_name']; ?>
            <br/>Surname: <?php echo  $_SESSION['userData']['last_name']; ?>
            <br/>E-mail: <?php echo  $_SESSION['userData']['email']; ?>
            <form class="" action="./logout.php" method="post">
              <button type="submit" id="logout" name="logout" value="1">Logout</button>
            </form>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <?php
  }?>
  </body>
</html>
