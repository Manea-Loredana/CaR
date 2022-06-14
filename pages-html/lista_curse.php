<!DOCTYPE html>
<html lang="ro">

<head>
    <link rel="stylesheet" href="../styles/listare_pisici.css">
    <?php include "../php/db-conn.php"; 
    ?>
    <title>Listare curse</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <h1>Lista curse</h1>
    <div class="optiuni">
        <div class="adaugare">
            <p>Adauga cursa</p>
            <a class="add" href="form_cursa.php"></a>
        </div>
    </div>
    <table id="lista_utilizatori">
        <tr>
            <th>
                Id
            </th>
            <th>
                Pisica 1
            </th>
            <th>
                Pisica 2
            </th>
            <th>
                Data cursa
            </th>
            <th>
                Data limita
            </th>
            <th>
                Castigator
            </th>
            <th>
                Actiune
            </th>
        </tr>
        <?php
        foreach($test_curse as $c){
            $pisica1 = $connector->get_1_pisica($c->p1);
            $pisica2 = $connector->get_1_pisica($c->p2);
        echo"
        <tr>
            <td class='text'>".$c->getId()."</td>
            <td class='text'>".$pisica1->nume."</td>
            <td class='text'>".$pisica2->nume."</td>
            <td class='text'>".$c->data_cursa."</td>
            <td class='text'>".$c->data_limita."</td>
            <td class='text'>".$c->castigator."</td>
            <td class='actiune'>
                <a class='modifica' href='form_cursa.php?id=".$c->getId()."'></a>
                <a class='sterge'></a>
            </td>
        </tr>";
    }
        ?>
    </table>

</body>

</html>