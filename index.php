<?php
require_once 'inc/functions.php';
reconnect_from_cookie();
if(isset($_SESSION['auth'])){
    header('Location: account.php');
    exit();
}
if(!empty($_POST) && !empty($_POST['username']) && !empty($_POST['password'])){
    require_once 'inc/db.php';
    $req = $pdo->prepare('SELECT * FROM users WHERE (username = :username OR email = :username) AND confirmed_at IS NOT NULL');
    $req->execute(['username' => $_POST['username']]);
    $user = $req->fetch();
    if(password_verify($_POST['password'], $user->password)){
        $_SESSION['auth'] = $user;
$_SESSION['flash']['success'] = 'Vous êtes maintenant connecté';
if($_POST['remember']){
    $remember_token = str_random(250);
    $pdo->prepare('UPDATE users SET remember_token = ? WHERE id = ?')->execute([$remember_token, $user->id]);
    setcookie('remember', $user->id . '==' . $remember_token . sha1($user->id . 'ratonlaveurs'), time() + 60 * 60 * 24 * 7);
}
        header('Location: account.php');
        exit();
    }else{
        $_SESSION['flash']['danger'] = 'Identifiant ou mot de passe incorrecte';
    }
}
?>
<?php require 'inc/header.php'; ?>


<div class="container">
    <h3>bienvenu sur le site de LISPAZ !</h3>
</div>
<div class="card" style="widht: 18rem;">
	<img src="..." class="card-img-top" alt="...">
	<div class="card-body">
	<h5 class="card-title">Card titre</h5>
	<p class="card-text"> n'importe quoi ici et gratuiment!</p>
	<a href="" class="btn btn-primary">liens</a>
	</div>
</div>
</div>
</section>
<?php require 'inc/footer.php'; ?>