@extends('layout')
@includes('includes/navBar', ['logout' => true])
<div class="d-flex flex-column align-items-center align-content-center justify-content-center vh-100" style="position: fixed;">
    <div class="bg-info rounded">
        <form action="" method="post" class="text-primary d-flex flex-column justify-content-between align-items-center p-5">
        
            <h3 class="card-title mb-4">Créer un compte</h3>
        
            <div class="form-floating w-100 mb-4">
                <input type="pseudo" class="form-control" id="floatingInput" placeholder="pseudo">
                <label for="floatingInput">Pseudo</label>
            </div>
            <div class="form-floating w-100 mb-4">
                <input type="password" class="form-control" id="floatingPassword" placeholder="mot de passe">
                <label for="floatingPassword">Mot de passe</label>
            </div>
            <div class="form-floating w-100 mb-5">
                <input type="password" class="form-control" id="floatingConfirmPassword" placeholder="mot de passe">
                <label for="floatingConfirmPassword">Confirmer mot de passe</label>
            </div>
            <button type="submit" class="btn btn-success">S'inscrire</button>
        </form>
    </div>
</div>