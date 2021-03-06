<!DOCTYPE html>
<html lang="en">

<head>

<?php
require_once "../php/login_check.php";
require_once "../php/db-conn.php";
$uid = intval($connector->getUID($nume));
            $admin = $connector->isAdmin($uid);
            
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@700&family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../styles/style_admin.css">
    <link rel="stylesheet" href="../styles/general.css">
    <link rel="stylesheet" href="../styles/header.css">
    <title>CaR | Admin</title>
</head>

<body>
<?php
    if($admin){
        echo'
    <header>

        
        <div class="logo">
            <a href="./index.php"><img src="../poze_tw/logo.png" class="img-fluid" alt="logo"></a>
        </div>
        <div class="meniu">
            <a href="./istoric.php" target=”_blank”><img src="../poze_tw/account.svg" class="imag" alt="account"></a>
            <a href="./admin.php" target=”_blank”><img src="../poze_tw/admin.svg" class="imag" alt="admin"></a>
            <a href="./help.php" target=”_blank”><img src="../poze_tw/help.svg" class="imag" alt="help"></a>
        </div>
        <div class=" button">
            <a href="../php/logout.php" class="btn">Log out</a>
        </div>
    </header>
    <div>
        <h3>Admin</h3>
    </div>
    <section>
        
        <div class="menu">
            <a href="listare_pisici.php" class="btn2">Pisici</a>
        </div>
        <div class="menu">
            <a href="lista_curse.php" class="btn2">Curse</a>
        </div>
        <div class="menu">
            <a href="lista_pariuri.php" class="btn2">Pariuri</a>
        </div>
        <div class="menu">
            <a href="lista_utilizatori.php" class="btn2">Utilizatori</a>
        </div>
    </section>';}
    else echo "Nu aveti dreptul de acces la aceasta pagina!";
?>
</body>

</html>