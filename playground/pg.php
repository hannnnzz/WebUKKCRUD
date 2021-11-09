<div class="form-signin">
    <form action="akunuser.php" method="post">
        <div class="form-floating">
            <input type="text" class="form-control" name="username" placeholder="Username" style="font-family: 'Margarine', cursive; background: rgba(185, 211, 202, 0.459); font-weight: 500;" required="">
            <label style="font-weight: 500;" for="username">Username</label>
        </div>
        <div class="form-floating">
            <input type="email" class="form-control" name="email" placeholder="Email" style="font-family: 'Margarine', cursive; background: rgba(185, 211, 202, 0.459); font-weight: 500;" required="">
            <label style="font-weight: 500;" for="email">Email Address</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" name="telp" placeholder="Phone Number" style="font-family: 'Margarine', cursive; background: rgba(185, 211, 202, 0.459); font-weight: 500;" required="">
            <label style="font-weight: 500;" for="telp">Phone Number</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control mt-3" name="password" placeholder="Password" style="font-family: 'Margarine', cursive; background: rgba(185, 211, 202, 0.459); font-weight: 500;" required="">
            <label style="font-weight: 500;" for="password">Password</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control mt-3" name="confirm_password" placeholder="Confirm Password" style="font-family: 'Margarine', cursive; background: rgba(185, 211, 202, 0.459); font-weight: 500;" required="">
            <label style="font-weight: 500;" for="confirm_password">Confirm Password</label>
        </div>
        <button class="w-100 btn btn-lg mt-3 btn-primary" type="submit">Create Account</button>
    </form>
    <div class="small mt-3 text-white">Been Registered? <a href="indexa.php">Register Now!!</a></div>
    <p class="mt-3 mb-3 text-white">&copy; Adhystira Raihannoeza</p>
</div>


<?php
session_start();
$sesiData = !empty($_SESSION['sesiData']) ? $_SESSION['sesiData'] : '';
if (!empty($sesiData['status']['msg'])) {
    $statusPsn = $sesiData['status']['msg'];
    $jenisStatusPsn = $sesiData['status']['type'];
    unset($_SESSION['sesiData']['status']);
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>PerpusQ || Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/Logo.svg" type="image">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.all.min.css">
    <style>
        body {
            background: url(https://w7.pngwing.com/pngs/413/139/png-transparent-books-background-books-retro-library.png) no-repeat fixed;
            -webkit-background-size: 100% 100%;
            -moz-background-size: 100% 100%;
            -o-background-size: 100% 100%;
            background-size: 100% 100%;
        }
    </style>
</head>

//Regis
<body style="margin-top: 40px;">
    <div class="row mt-5 mx-auto justify-content-center">
        <div class="col-lg-4 p-4 text-center" style="background: rgba(4, 29, 23, 0.5);">
            <h3 class="text-white text-center">Create A New Account</h3>
            <?php echo !empty($statusPsn) ? '<p class="' . $jenisStatusPsn . '">' . $statusPsn . '</p>' : ''; ?>
            <form action="akunuser.php" method="post">
                <div class="form-floating">
                    <input style="background: rgba(185, 211, 202, 0.459); font-weight: 500;" type="text" class="form-control mt-3" name="username" placeholder="Username" style="font-family: 'Margarine', cursive;" required="">
                    <label style="font-weight: 500;" for="username">Username</label>
                </div>
                <div class="form-floating">
                    <input style="background: rgba(185, 211, 202, 0.459); font-weight: 500;" type="email" class="form-control mt-3" name="email" placeholder="Email" style="font-family: 'Margarine', cursive;" required="">
                    <label style="font-weight: 500;" for="email">Email Address</label>
                </div>
                <div class="form-floating">
                    <input style="background: rgba(185, 211, 202, 0.459); font-weight: 500;" type="text" class="form-control mt-3" name="telp" placeholder="Phone Number" style="font-family: 'Margarine', cursive;" required="">
                    <label style="font-weight: 500;" for="telp">Phone Number</label>
                </div>
                <div class="form-floating">
                    <input style="background: rgba(185, 211, 202, 0.459); font-weight: 500;" type="password" class="form-control mt-3" name="password" placeholder="Password" style="font-family: 'Margarine', cursive;" required="">
                    <label style="font-weight: 500;" for="password">Password</label>
                </div>
                <div class="form-floating">
                    <input style="background: rgba(185, 211, 202, 0.459); font-weight: 500;" type="password" class="form-control mt-3" name="confirm_password" placeholder="Confirm Password" style="font-family: 'Margarine', cursive;" required="">
                    <label style="font-weight: 500;" for="confirm_password">Confirm Password</label>
                </div>
                <input class="w-100 btn-lg btn btn-warning mt-3" type="submit" name="daftarSubmit" value="Create Account"><br><br>
                <p class="text-white">Have an Registered Account? <a href="indexa.php">Login</a></p>
                <p class="mt-3 mb-3 text-white">Adhystira Raihan &copy; 2021</p>
            </form>
        </div>
    </div>
</body>

</html>

//Login
<?php
session_start();
$sesiData = !empty($_SESSION['sesiData']) ? $_SESSION['sesiData'] : '';
if (!empty($sesiData['status']['msg'])) {
  $statusPsn = $sesiData['status']['msg'];
  $jenisStatusPsn = $sesiData['status']['type'];
  unset($_SESSION['sesiData']['status']);
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>PerpusQ || Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="shortcut icon" href="img/Logo.svg" type="image">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.all.min.css">
  <style>
    body {
      background: url(https://w7.pngwing.com/pngs/413/139/png-transparent-books-background-books-retro-library.png) no-repeat fixed;
      -webkit-background-size: 100% 100%;
      -moz-background-size: 100% 100%;
      -o-background-size: 100% 100%;
      background-size: 100% 100%;
    }
  </style>
</head>

<body style="margin-top: 150px;">
  <div class="row mt-5 mx-auto justify-content-center">
    <div class="col-lg-4 p-4 text-center" style="background: rgba(4, 29, 23, 0.5);">
      <?php
      if (!empty($sesiData['userLoggedIn']) && !empty($sesiData['userID'])) {
        include 'user.php';
        $user = new User();
        $kondisi['where'] = array(
          'id' => $sesiData['userID'],
        );
        $kondisi['return_type'] = 'single';
        $userData = $user->getRows($kondisi);
        if ($userData['level'] == 'user') {
          header("Location:index.php");
        } else if ($userData['level'] == 'admin') {
          header("Location:daftar.php");
        }
      ?>
      <?php } else { ?>
        <h3 class="text-center text-black text-white">Login To Your Account</h3><br>
        <?php echo !empty($statusPsn) ? '<p class="' . $jenisStatusPsn . '">' . $statusPsn . '</p>' : ''; ?>
        <div class="form-signin">
          <form action="akunuser.php" method="post">
            <div class="form-floating">
              <input style="background: rgba(185, 211, 202, 0.459); font-weight: 500;" type="email" class="form-control" name="email" placeholder="Email" style="font-family: 'Margarine', cursive;" required="">
              <label style="font-weight: 500;" for="email">Email Address</label>
            </div>
            <div class="form-floating">
              <input style="background: rgba(185, 211, 202, 0.459); font-weight: 500;" type="password" class="form-control mt-3" name="password" placeholder="Password" style="font-family: 'Margarine', cursive;" required="">
              <label style="font-weight: 500;" for="password">Password</label>
            </div>
            <button class="w-100 btn btn-lg mt-3 btn-primary" value="Login" name="loginSubmit" type="submit">Login</button>
          </form>
          <div class="small mt-3 text-white">Not Registered ? <a href="daftara.php">Register Now!!</a></div>
          <p class="mt-3 mb-3 text-white">&copy; Adhystira Raihannoeza</p>
        </div>
    </div>
  </div>
<?php } ?>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>