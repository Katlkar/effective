<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Montserrat:wght@800&family=Raleway:ital,wght@1,300&family=Roboto+Slab:wght@600&family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">
<!-- FONT AWESOME LINKS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/959552e028.js" crossorigin="anonymous"></script>
<!-- STYLESHEETS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="css/styles.css">
</head>

<!-- FOR EVENTS AND FESTS -->
<style>
#test {
  margin-top: 3rem;
  height: 665px;
  overflow: auto;
  text-align: justify;
  border: 3px solid black;
  padding: 10px;
}


@media (min-width: 768px) {

  .carousel-inner .active,
  .carousel-inner .active+.carousel-item,
  .carousel-inner .active+.carousel-item+.carousel-item {
    display: block;
  }

  .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
  .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item,
  .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item+.carousel-item {
    transition: none;
    margin-right: initial;
  }

  .carousel-inner .carousel-item-next,
  .carousel-inner .carousel-item-prev {
    position: relative;
    transform: translate3d(0, 0, 0);
  }

  .carousel-inner .active.carousel-item+.carousel-item+.carousel-item+.carousel-item {
    position: absolute;
    top: 0;
    right: -33.3333%;
    z-index: -1;
    display: block;
    visibility: visible;
  }

  .active.carousel-item-left+.carousel-item-next.carousel-item-left,
  .carousel-item-next.carousel-item-left+.carousel-item,
  .carousel-item-next.carousel-item-left+.carousel-item+.carousel-item,
  .carousel-item-next.carousel-item-left+.carousel-item+.carousel-item+.carousel-item {
    position: relative;
    transform: translate3d(-100%, 0, 0);
    visibility: visible;
  }

  .carousel-inner .carousel-item-prev.carousel-item-right {
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    display: block;
    visibility: visible;
  }

  .active.carousel-item-right+.carousel-item-prev.carousel-item-right,
  .carousel-item-prev.carousel-item-right+.carousel-item,
  .carousel-item-prev.carousel-item-right+.carousel-item+.carousel-item,
  .carousel-item-prev.carousel-item-right+.carousel-item+.carousel-item+.carousel-item {
    position: relative;
    transform: translate3d(100%, 0, 0);
    visibility: visible;
    display: block;
    visibility: visible;
  }

  .my-img:hover {
    -ms-transform: scale(1.2);
    /* IE 9 */
    -webkit-transform: scale(1.2);
    /* Safari 3-8 */
    transform: scale(1.2);
  }

}
</style>

<body>
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark my-bg">
  <a class="navbar-brand" href="index.php">Campus Cauldron</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Links
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../Campus_Cauldron/index.php#after-intro">Notices</a>
          <a class="dropdown-item" href="../Campus_Cauldron/index.php#after-notice">Gallery</a>
          <a class="dropdown-item" href="../Campus_Cauldron/index.php#after-gallery">Clubs and Cells</a>
          <a class="dropdown-item" href="../Campus_Cauldron/index.php#after-clubs">Events and Fests</a>
          <a class="dropdown-item" href="../Campus_Cauldron/index.php#after-fests">FAQs</a>
          <a class="dropdown-item" href="../Campus_Cauldron/index.php#after-questions">College Map</a>

        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ask.php">Ask</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../Campus_Cauldron/suggest.php">Questions For You</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
    </ul>
    <?php
    if (!isset($_SESSION['email'])) {

    ?>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="admin_login.php"><i class="icon fas fa-lock"></i>Admin Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../Campus_Cauldron/sign-in.php">Sign In</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../Campus_Cauldron/sign-up.php">Sign Up</a>
        </li>
      </ul>
    <?php } else {
      include 'conn.php';
      $sql1 = "select * from users WHERE email='" . $_SESSION['email'] . "'";
      $rs_result1 = mysqli_query($con, $sql1);
      $roww = mysqli_fetch_assoc($rs_result1);
    ?>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa icon fa-user-circle"></i><?php echo $roww['username']; ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="userprofile.php?id=<?php echo $roww["userid"]; ?>">View Profile</a>
          <a class="dropdown-item" href="logout.php">Logout</a>

        </div>
    </ul>


      <?php } ?>
      </ul>
  </div>
</nav>
