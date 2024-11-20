<?php require_once('./layout/header.php'); ?>

<h2> post Test</h2>
<hr>
<h2>Login</h2>

<section>
    <form class="form">

        <input type="text" name="xuser" class="input input-field mb-2" placeholder="Benutzername">
        <input type="password" name="xpass" class="input-field mb-2" placeholder="Passwort">
        <br>
        <button type="submit" class="btn btn-sm btn-primary">Einloggen</button>
    </form>
    <div class="signup-link">
        <p>Noch kein Konto? <a>Jetzt registrieren</a></p>
    </div>
</section>

<!-- section result !-->
<section>
    <p>
        hire ist php action result: 
        <br>
        <span><?=$_GET["xuser"]?></span>
    </p>
</section>


<?php require_once('./layout/footer.php'); ?>