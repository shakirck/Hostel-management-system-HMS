<?php 
    $page_title = 'Homepage';
    include_once'includes/header.php';
    include_once'config/Session.php';    
?>

<div class="jumbotron">
	<div class="container text-center">
		<h1>Hostel Management System.</h1>
		<?php 
            if(!isset($_SESSION['username'])):
        ?>
        <div id="loreg">
            <ul class="list-inline">
                <li>
                    <a class="btn btn-primary btn-lg" href="login.php">Login</a>
                </li>
                <li>
                    <a class="btn btn-primary btn-lg" href="register.php">Register</a>
                </li>
            </ul>
        </div>
        <?php else: ?>
        <div id="usr">
            <p>
                MR/MS <?php if(isset($_SESSION['username'])) echo $_SESSION['username']; ?> Welcome TO Gecw</div> <a class='btn' href="logout.php">Logout</a>
                <a class='btn' href="all.php"></a>
            </p>
        </div>
        <?php endif; ?>
        </div>
   
    </div>
<!--     
    <div class="container">
  <div class="row">
    <div class="col-sm-3">
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
<p class="card-text"> Monitha Mohanan</p>  </div>
</div>
    </div>
    <div class="col-sm-3">
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
  <p class="card-text"> Muhammed Shakir CK</p>  </div>
  </div>
</div>
    </div>
    <div class="col-sm-3">
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
  <p class="card-text">  Muhammed Safwan<</p>  </div>
  </div>
</div>
    </div>
    <div class="col-sm-3">
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
  <p class="card-text">  Muhammed Nadeer</p>  </div>
  </div>
</div> -->
    </div>
  </div>
</div>
</div>
<?php include_once'includes/footer.php'; ?>
