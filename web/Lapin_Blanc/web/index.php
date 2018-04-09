<?php
session_start();

//Verifie le cookie
function get_flag($access) {
	$flag = false;
	$token = explode(";", $access);
	if (sizeof($token) === 2) {
		if ($token[0] === 'true' && $token[1] === hash('sha256', $token[0])) 
			$flag = true;
	}
	return $flag;
}

//Login
$error = false;
if(isset($_POST["username"]) && isset($_POST["password"])) {
	if($_POST['username'] === 'admin' && $_POST['password'] === 'strongpassword') {
		header("Location: /");
		$_SESSION['session'] = "true";
		setcookie('access', 'false;fcbcf165908dd18a9e49f7ff27810176db8e9f63b4352213741664245224f8aa');
	}
	else
		$error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <title>Lapin Blanc</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
  </head>
  <body>
  <div class="container">
  <br><br><br>
  
  <!-- navbar -->
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
  	  <div class="navbar-header">
	    <a class="navbar-brand" href="/">Administration</a>
	  </div>
	  <div class="collapse navbar-collapse">
      <?php if(isset($_SESSION['session']) && $_SESSION['session'] === 'true'): ?> 
        <ul class="nav navbar-nav navbar-right">
          <li><a href="/logout.php">Se d&eacute;connecter</a></li>
		</ul>
      <?php endif; ?>
      </div>
    </div>
  </nav>
  
  <?php if(isset($_SESSION['session']) && $_SESSION['session'] === 'true'): ?>
  <!-- Logged -->
  <div class="well">
    Bravo! <mark>FLAG-6f209b3270405988efdba2ee208d15a3</mark>. 
  </div>
  <div class="panel panel-warning">
    <div class="panel-body">
	  <center>
      <?php if(isset($_COOKIE['access']) && get_flag($_COOKIE['access']) === true): ?>
      <img alt="futurama" src="img/futurama2.gif"/><br><br>
      <h4 class="text-muted">Miam.  FLAG-859780595ea41f76c690bb00c06d14a5<br><br>
	  <?php else: ?>
	  <img alt="futurama" src="img/futurama.gif"/><br><br>
	  <h4 class="text-muted">Pas de lapin blanc, seulement un crapaud. Le crapaud n'aime pas le biscuit que tu lui offres.<br><br>
	  <?php endif; ?>
      </center>
	  
    </div>
  </div> 
  
  <?php else: ?>
  <!-- Login -->
  <div class="well bs-component">
    <form action="/" method="post" class="form-horizontal">
      <fieldset>
      <legend>Connexion</legend>
      <div class="form-group">
        <label class="col-lg-2 control-label">Nom d'utilisateur</label>
        <div class="col-lg-10">
          <input class="form-control" name="username" placeholder="Nom d'utilisateur" type="text">
        </div>
      </div>
      <div class="form-group">
        <label class="col-lg-2 control-label">Mot de passe</label>
        <div class="col-lg-10">
          <input class="form-control" name="password" placeholder="Mot de passe" type="password">
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
          <button type="submit" class="btn btn-success">Soumettre</button>
        </div>
      </div>
      </fieldset> 
    </form>
    <?php if($error): ?>
    <div class="alert alert-dismissible alert-danger">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Erreur!</strong> Nom d'utilisateur/Mot de passe invalide.
    </div>
    <?php endif; ?>
  </div>
  <?php endif; ?>

  </div>
  <footer>
    <div class="container">
      <div class="row">
        <hr class="small">
        <p class="text-muted">Rosemont CTF</p>
      </div>
    </div>
  </footer>
</body>
</html>
