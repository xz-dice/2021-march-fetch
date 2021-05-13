<?php

require_once 'vendor/autoload.php';
//header('Location: index.php');
$db = new \Fetch\Classes\Db();
$dogs = \Fetch\Hydrators\DogHydrator::getDogs($db->getDb());
$temperamentsArray = \Fetch\Classes\TemperamentGenerator::getUniqueTags($dogs);

if (isset($_GET['temperament']) && is_string($_GET['temperament'])) {
    $dogTemperament = strtolower($_GET['temperament']);
    $displayDogs = \Fetch\Classes\DogDisplayer::displayMainPage($dogs, $dogTemperament);
    $filterButtons = \Fetch\Classes\FilterButtonsDisplayer::displayFilterButtons($temperamentsArray, $dogTemperament);
} else {
    $displayDogs = \Fetch\Classes\DogDisplayer::displayMainPage($dogs);
    $filterButtons = \Fetch\Classes\FilterButtonsDisplayer::displayFilterButtons($temperamentsArray);
}



?>

<html lang="en-GB">
    <head>
        <title>Fetch</title>
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet" />
        <link href="css/normalize.css" type="text/css" rel="stylesheet" />
        <link href="css/styles.css" type="text/css" rel="stylesheet" />
        <link href="css/index.css" type="text/css" rel="stylesheet" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>
    <body>
        <?php include_once 'src/Templates/header.php' ?>
        <section class="filter-buttons">
            <?= $filterButtons ?>
        </section>
        <main>
            <?= $displayDogs; ?>
        </main>
        <?php include_once 'src/Templates/footer.php' ?>
    </body>
</html>