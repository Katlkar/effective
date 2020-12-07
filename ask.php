<?php
@session_start();

if (isset($_POST['question'])) {
  $question = $_POST['question'];
  if (!isset($_SESSION['email'])) {
    echo "<script type='text/javascript'>alert('You've to sign-in before asking a question!'); window.location.href= 'sign-in.php';</script>";
  } else {
    if (empty($question)) {
      echo "<script type='text/javascript'>alert('Ask a question!');</script>";
    } else {
      include 'conn.php';
      $ins = mysqli_query($con, "INSERT INTO q_and_a(question) VALUES ('$question')");
      if ($ins > 0) {
        echo "<script type='text/javascript'>alert('Your question has been successfully submitted.'); window.location.href = 'index.php';</script>";
      } else {
        echo "An error in database query";
      }
    }
  }
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Welcome to Campus Cauldron!</title>

      <?php
      include 'include/navbar.php';
      ?>

    </div>
  </nav>
  <br><br>
  <center>
    <section class="ask_ques" style="width: 30rem;">
      <div class="card">
        <div class="card-body">
          <div class="form-container">
            <div class="row">

              <div class="col-lg-12 white-background">
                <h2 class="sign-up-head">Ask your questions here!</h2>
                <form action="#" method="POST">
                  <div style="text-align:left" class="form-group">
                    <label><b>Write Question</b></label>
                    <textarea name="question" style="width:100%" cols="48" rows="10" placeholder="Write your question here" id="ask-question"></textarea>
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
  <?php include 'include/footer.php' ?>
  <!-- SCRIPTS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
