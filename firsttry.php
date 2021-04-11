
<!doctype html>
<html>
<head></head>
<body>
<?php
$chaine ="salem etudie gl2";
$stats= count_chars($chaine,1);

?>
<table border="bold">
    <tr>
        <th>caractere</th>
        <th>nb_occurence</th>
    </tr>
    <?php
    //var_dump($stats);
    foreach($stats as $car => $nbo ){ ?>
        <tr>
            <td><?= chr($car) ?></td>
            <td><?= $nbo ?></td>
        </tr>
    <?php  } ?>
</table>
</body>
</html>
