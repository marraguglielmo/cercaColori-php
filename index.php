<?php

$colori = ['giallo', 'verde', 'rosso'];
// $colore = isset($_POST['colore']) ? $_POST['colore'] : '';
$colore = $_POST['colore'] ?? '';
// se $_POST['colore'] esiste e non è una string vuota
if (isset($_POST['colore']) && !empty($_POST['colore'])) {
    if (in_array($colore, $colori)) {
        $messaggio = 'Il colore ' . $colore . ' esiste';
    } else {
        $messaggio = "Il colore $colore non esiste";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerca Colori</title>
</head>

<body>
    <h1>Cerca Colori</h1>

    <?php if (!isset($_POST['colore'])) : ?>

        <form action="index.php" method="post">

            <input name="colore" type="text" placeholder="colore">
            <button type="submit">Invio</button>

        </form>
    <?php else : ?>
        <div>
            <h2><?php echo $messaggio ?></h2>
        </div>
    <?php endif ?>
</body>

</html>