<?php
$alert = (isset($_GET["alert"]))? $_GET["alert"]: "default";

switch ($alert) {
    case "no-email":
        echo'<div class="alert alert-warning w-25 mx-auto mt-5" role="alert">
vul je email in
</div>';
header("refresh: 3; url=./index.php?content=registratie");
    break;
    case "emailexists" :
        echo'<div class="alert alert-warning w-25 mx-auto mt-5" role="alert">
        het email addres bestaat al vul een adere in
        </div>';
        header("refresh: 3; url=./index.php?content=registratie");
    break;
    case 'register-success':
        echo '<div style="text-align:center"class="alert alert-success mt-1" role="alert">U bent succesvol geregistreerd. U ontvangt een activatie mail voor het
        voltooien van het registeren.</div>';
        header("refresh: 3; url=./index.php?content=registratie");
    break;
    case 'register-error':
        echo '<div style="text-align:center"class="alert alert-info mt-1" role="alert">Het registeren is niet voltooid. Probeer het nogmaals.</div>';
        header("refresh: 3; url=./index.php?content=registratie");
    break;

    default:
    header("location: ./index.php?content=home");
}
?>