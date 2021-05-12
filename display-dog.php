<?php

require_once 'vendor/autoload.php';
if (!isset($_GET['Id']) || !is_numeric($_GET['Id'])) {
    header('Location: index.php');
}
$dogId = $_GET['Id'];
$db = new \Fetch\Classes\Db();
$dog = \Fetch\Hydrators\DogHydrator::getSingleDog($db->getDb(), $dogId);
if ($dog[0] instanceof \Fetch\Classes\Dog) {
    $displayDog = \Fetch\Classes\DogDisplayer::displayDetailedInfo($dog[0]);
} else {
    header('Location: index.php');
}

?>

<html lang="en-GB">
    <head>
        <title>Fetch</title>
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet" />
        <link href="css/normalize.css" type="text/css" rel="stylesheet" />
        <link href="css/styles.css" type="text/css" rel="stylesheet" />
        <link href="css/display-dog.css" type="text/css" rel="stylesheet" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>
    <body>
        <?php include_once 'src/Templates/header.php' ?>
        <main>
            <a tabindex="2" href="index.php">Back to all dogs</a>
            <?= $displayDog; ?>
        </main>
        <?php include_once 'src/Templates/footer.php' ?>
    </body>
</html>