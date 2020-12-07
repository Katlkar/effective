<?php
@session_start();
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
    <section class="sug_ques">
      <div class="container">
        <?php
        include 'conn.php';
        if (isset($_GET["page"])) {
          $page = $_GET["page"];
        } else {
          $page = 1;
        };
        $start_from = ($page - 1) * 20;
        $sql = "select * from q_and_a ORDER BY id DESC LIMIT $start_from, 20";
        $rs_result = mysqli_query($con, $sql);
        ?>
        <table class="table">
          <thead>
            <tr>
              <th width="20%">Questions for You!</th>
              <th colspan=2 width="18%">Want to Answer!</th>
            </tr>
          </thead>

          <?php
          while ($row = mysqli_fetch_assoc($rs_result)) {
          ?>

            <tbody>
              <tr>
                <td> <?php echo $row["question"]; ?> </td>
                <td><a class="btn btn-success" href='1=<?php echo $row["notice_id"]; ?>'>Answer it</a>
                </td>

              </tr>

            </tbody>

          <?php
          };
          ?>
        </table>
        <strong>Pages </strong>


        <!-- STOP WORK HERE -->



      </div>
      <!-- /.container-fluid -->

    </section>
  </center>


  <!-- FOOTER EXPERIMENT -->
  <?php include 'include/footer.php' ?>

  <!-- SCRIPTS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
