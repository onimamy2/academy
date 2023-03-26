<?php
 include './includes/header.php';
?>
<div class="container">
    <h1>Connexion</h1>
    <div class="row">
        <div class="col-sm-6">
            <div class="card p-4">
                <form method="POST" action="action.php">
                    <div class="row p-2">
                        <div class="col-6">
                            <label>Adresse email</label>
                        </div>
                        <div class="col-6">
                            <input type="email" class="form-control" name="email">
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-6">
                            <label>Mot de passe</label>
                        </div>
                        <div class="col-6">
                            <input type="password" class="form-control" name="mdp">
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-6">
                          
                        </div>
                        <div class="col-6">
                            <input type="submit" name="btn-connexion" class="btn btn-primary" value="Se connecter">
                        </div>
                    </div>
                    
                    
                </form>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card p-4">
                <form method="POST" action="action.php">
                    <div class="row p-1">
                        <div class="col-6">
                            <label>Nom</label>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control" name="nom">
                        </div>
                    </div>
                    <div class="row p-1">
                        <div class="col-6">
                            <label>Prenom</label>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control" name="prenom">
                        </div>
                    </div>
                    <div class="row p-1">
                        <div class="col-6">
                            <label>Nom d'utilisateur</label>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control" name="nom_utilisateur">
                        </div>
                    </div>
                    <div class="row p-1">
                        <div class="col-6">
                            <label>Email</label>
                        </div>
                        <div class="col-6">
                            <input type="email" class="form-control" name="email">
                        </div>
                    </div>
                    <div class="row p-1">
                        <div class="col-6">
                            <label>Date de naissance</label>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control" name="date_naissance">
                        </div>
                    </div>
                    <div class="row p-1">
                        <div class="col-6">
                            <label>Mot de passe</label>
                        </div>
                        <div class="col-6">
                            <input type="password" class="form-control" name="mdp">
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-6">
                          
                        </div>
                        <div class="col-6">
                            <input type="submit" name="btn-inscription" class="btn btn-primary" value="S'inscrire">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</div>

<?php
 include './includes/footer.php';
?>
