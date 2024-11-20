<?php require_once('./layout/header.php'); 
$incoming_username = $_POST['xuser'];
$incoming_password = $_POST['xpass'];

/**data in database */
$database_username = 'ali@ali.com';
$database_password = 'e10adc3949ba59abbe56e057f20f883e';
//123456 original password
/**data in database */
/**
 * md5 ist nicht mehr sicher!!!
 * nutzen wir password_hash menthod
 *  $hashed_password = password_hash($klar_text_password,2);
 *password_verify('gegebene_password',$hashed_password);
 *if(!password_verify('gegebene_password',$hashed_password))
 *{
 *   return false;
 *}
 *else
 *{
  *  return true;
 * }
 */


function login($username , $database_username , $password , $database_password)
{
    if(!$username == $database_username)
    {
        echo "user existiert nicht";
        die;
    }
    /**md5 ist nicht sicher!!!! nutzen sie password_hash method! */
    if(md5(string: $password) !== $database_password)
    {
        echo 'Kennwort Bestimmt nicht';
    }
    else{

        echo "Hurraaaaaaaaaaaa!";
    }
}

login($incoming_username,$database_username,$incoming_password,$database_password);


?>

<h2> post Test</h2>
<hr>
<h2>Login</h2>
<section>
    <form class="form" method="post">

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
        <span><?=$hash_pass?></span>
        <br>
        <?=$password?>
    </p>
</section>

<?php require_once('./layout/footer.php'); ?>