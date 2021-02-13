<?php
require 'inc/functions.php';
logged_only();
if(!empty($_POST)){

    if(empty($_POST['password']) || $_POST['password'] != $_POST['password_confirm']){
        $_SESSION['flash']['danger'] = "Les mots de passes ne correspondent pas";
    }else{
        $user_id = $_SESSION['auth']->id;
        $password= password_hash($_POST['password'], PASSWORD_BCRYPT);
        require_once 'inc/db.php';
        $pdo->prepare('UPDATE users SET password = ? WHERE id = ?')->execute([$password, $user_id]);
        $_SESSION['flash']['success'] = "Votre mot de passe a bien été mis à jour";
    }

}
require 'inc/header.php';
?>

    <h3>Bonjour <?= $_SESSION['auth']->username; ?></h3>

    <form action="" method="post">
        <div class="form-group">
            <input class="form-control" type="password" name="password" placeholder="Changer de mot de passe"/>
        </div>
        <div class="form-group">
            <input class="form-control" type="password" name="password_confirm" placeholder="Confirmation du mot de passe"/>
        </div>
        <button class="btn btn-primary">Changer mon mot de passe</button>
    </form>
    </div>
</section>
<div class="container cardprofil">
<div class="row">
    <div class=" profil1 col-sm-4 ">
coucou!
    </div>
    <div class=" profil2 col-sm-8" style="text-align:center; color:red">
    
    <form action="" method="post">
    <label for="basic-url">Informations Personnelles de l'Agent</label>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon3" style="width:150px">id</span>
        </div>
        <input type="disable" class="form-control" placeholder=" <?= $_SESSION['auth']->id; ?>" readonly  style="text-align:center" id="basic-url" aria-describedby="basic-addon3">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon3" style="width:150px">Pseudo</span>
        </div>
        <input type="text" class="form-control" placeholder="<?= $_SESSION['auth']->username; ?>" readonly style="text-align:center"  id="basic-url" aria-describedby="basic-addon3">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon3" style="width:150px">Email</span>
        </div>
        <input type="text" class="form-control" placeholder="<?= $_SESSION['auth']->email; ?>" readonly  style="text-align:center"  id="basic-url" aria-describedby="basic-addon3">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon3" style="width:150px">Nom</span>
        </div>
        <input type="text" class="form-control" placeholder="<?= $_SESSION['auth']->nom; ?>" style="text-align:center"  id="basic-url" aria-describedby="basic-addon3">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon3" style="width:150px">Prénoms</span>
        </div>
        <input type="text" class="form-control" placeholder="<?= $_SESSION['auth']->prenom; ?>" style="text-align:center"  id="basic-url" aria-describedby="basic-addon3">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon3" style="width:150px">Age</span>
        </div>
        <input type="text" class="form-control" placeholder="<?= $_SESSION['auth']->age; ?>" style="text-align:center"  id="basic-url" aria-describedby="basic-addon3">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon3" style="width:150px">Sexe</span>
        </div>
        <input type="text" class="form-control" placeholder="<?= $_SESSION['auth']->sexe; ?>" style="text-align:center"  id="basic-url" aria-describedby="basic-addon3">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon3" style="width:150px">Adresse</span>
        </div>
        <input type="text" class="form-control" placeholder="<?= $_SESSION['auth']->adresse; ?>" style="text-align:center"  id="basic-url" aria-describedby="basic-addon3">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon3" style="width:150px">Pays</span>
        </div>
        <input type="text" class="form-control" placeholder="<?= $_SESSION['auth']->pays; ?>" style="text-align:center"  id="basic-url" aria-describedby="basic-addon3">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon3" style="width:150px">Date d'entrée</span>
        </div>
        <input type="text" class="form-control" placeholder="<?= $_SESSION['auth']->date_in; ?>" style="text-align:center"  id="basic-url" aria-describedby="basic-addon3">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon3" style="width:150px">Date de sortie</span>
        </div>
        <input type="text" class="form-control" placeholder="<?= $_SESSION['auth']->date_out; ?>" style="text-align:center"  id="basic-url" aria-describedby="basic-addon3">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon3" style="width:150px">Type de contrat</span>
        </div>
        <input type="text" class="form-control" placeholder="<?= $_SESSION['auth']->contrat; ?>" style="text-align:center"  id="basic-url" aria-describedby="basic-addon3">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon3" style="width:150px">Administrateur</span>
        </div>
        <input type="text" class="form-control" placeholder="<?= $_SESSION['auth']->admin; ?>" style="text-align:center"  id="basic-url" aria-describedby="basic-addon3">
    </div>
        <button class="btn btn-primary">Sauvegarder les modifications</button>
    </form>
    </div>
</div></div>

<?php require 'inc/footer.php'; ?>