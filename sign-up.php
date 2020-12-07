<?php

include 'conn.php';
if (isset($_POST['username'])) {
  $username = $_POST['username'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  if (!empty($username) || !empty($email) || !empty($phone) || !empty($password)) {
    if (isset($_POST['password']) && $_POST['password'] !== $_POST['confirm_password']) {
      echo "<script type='text/javascript'>alert('The two passwords do not match'); window.location.href = 'sign-up.php';</script>";
    } else {
      $query = @mysqli_query($con, "SELECT * FROM users WHERE email='$email' LIMIT 1;");
      if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
        if ($email == isset($row['email'])) {
          echo "<script type='text/javascript'>alert('Email already exists');</script>";
        }
      } else {
        $ins = mysqli_query($con, "insert into users(username,email,phone,password) values('$username','$email','$phone','$password')");
        if ($ins > 0) {
          @session_start();
          $_SESSION['email'] = $email;
          echo "<script type='text/javascript'>alert('You are successfully registered.'); window.location.href = 'index.php';</script>";
        } else {
          echo "An error in database query";
        }
      }
    }
  } else {
    echo "All fields are required";
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Welcome to Campus Cauldron!</title>
  <!-- SPACE FOR FONTS -->
  <?php include 'include/navbar.php' ?>

    </div>
  </nav>
  <br><br>
  <center>
    <section class="sign-in" style="width: 30rem;">
      <div class="card">
        <div class="card-body">
          <div class="form-container">
            <div class="row">

              <div class="col-lg-12 white-background">
                <h2 class="sign-up-head">Sign Up to Campus Cauldron!</h2>
                <form action="#" method="POST">

                  <div style="text-align:left" class="form-group">
                    <label>Your Name</label>
                    <input type="text" id="username" name="username" class="form-control" placeholder="Name" required>
                  </div>
                  <div style="text-align:left" class="form-group">
                    <label>Phone</label>
                    <input type="digits" class="form-control" id="number" name="phone" placeholder="Mobile no.">
                  </div>
                  <div style="text-align:left" class="form-group">
                    <label>Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                  </div>
                  <div style="text-align:left" class="form-group">
                    <label>Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                  </div>
                  <div style="text-align:left" class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" id="password" name="confirm_password" class="form-control" placeholder="Confirm Password" required>
                  </div>
                  <div style="text-align:left">
                    <input type="checkbox" id="terms" name="terms">
                    <label for="checkbox">I agree to terms and Conditions</label>
                  </div>
                  <button type="submit" name="submit" class="btn btn-primary btn-block">SUBMIT</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>


    </section>
  </center>
  <!-- FOOTER EXPERIMENT -->
  <br><br>
  <!-- Footer -->
  <section id="footer">
    <footer class="page-footer font-small mdb-color pt-4">

      <!-- Footer Links -->
      <div class="container text-center text-md-left">

        <!-- Footer links -->
        <div class="row text-center text-md-left mt-3 pb-3">

          <!-- Grid column -->
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Campus Cauldron</h6>
            <p>We hope you enjoyed your visit to our homepage!</p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none">

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Links</h6>
            <p>
              <a class="footer-link" href="index.php#after-intro">Notice</a>
            </p>
            <p>
              <a class="footer-link" href="index.php#after-questions">Gallery</a>
            </p>
            <p>
              <a class="footer-link" href="index.php#after-gallery">Clubs and Cells</a>
            </p>
            <p>
              <a class="footer-link" href="index.php#after-clubs">Events and Fests</a>
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none">

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contact us</h6>
            <p>
              <a class="footer-link" href="#!"><i class="fab fa-facebook-square mr-3"></i>Facebook</a>
            </p>
            <p>
              <a class="footer-link" href="#!"><i class="fab fa-linkedin mr-3"></i>LinkedIn</a>
            </p>
            <p>
              <a class="footer-link" href="#!"><i class="fab fa-twitter-square mr-3"></i>Twitter</a>
            </p>
            <p>
              <a class="footer-link" href="#!"><i class="fas fa-envelope mr-3"></i>E-mail</a>
            </p>
          </div>

          <!-- Grid column -->
          <hr class="w-100 clearfix d-md-none">

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Legal</h6>
            <p>
              <a class="footer-link" href="#!">Privacy Policy</a>
            </p>
            <p>
              <a class="footer-link" href="#!">Cookie Policy</a>
            </p>
            <p>
              <a class="footer-link" href="#!">Terms Of Us</a>
            </p>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Footer links -->

        <hr>


        <!-- Grid row -->

      </div>
      <!-- Footer Links -->

    </footer>
    <!-- Footer -->
  </section>

  <!-- SCRIPTS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
