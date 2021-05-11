<?php

require_once 'vendor/autoload.php';
$db = new \Fetch\Classes\Db();
$dogs = \Fetch\Hydrators\DogHydrator::getDogs($db->getDb());
$displayDogs = \Fetch\Classes\DogDisplayer::displayMainPage($dogs);

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
        <header>
            <img src="assets/fetchDog.svg" alt="Fetch Logo" />
            <h1 tabindex="1">FETCH</h1>
            <h4 tabindex="1">An app which gives you a ruff idea of which dog is best for you.</h4>
            <h4 tabindex="1">You'd be barking mad not to try it.</h4>
        </header>
        <main>
            <?= $displayDogs; ?>
        </main>
        <footer>
            <div>
                <img src="assets/paw.svg" />
            </div>
            <div>
                <p tabindex="3">This page will lead to a best friend you want to stick by.</p>
                <p tabindex="3">Companion app coming soon.</p>
            </div>
        </footer>
    </body>
</html>
