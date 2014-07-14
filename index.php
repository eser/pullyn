<?php require "functions.php"; ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Pullyn</title>
        <meta name="description" content="Pullyn" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="stylesheet" href="assets/css/boilerplate.min.css" />
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="container">
            <header class="row">
                <h1>Pullyn</h1>
                <p>Shows the directories only marked as git repository. To pull latest changes of selected directory from git, simply click on the button matches the directory name.</p>
            </header>

            <ul class="row list-group">
<?php foreach ($directories as $directory) { ?>
                <li class="list-group-item col-md-3"><a href="index.php?folder=<?php echo urlencode($directory); ?>" class="btn btn-default btn-block"><?php echo $directory; ?></a></li>
<?php } ?>
            </ul>

<?php if (isset($_GET["folder"])) { ?>
            <div class="row">
                <h2>Output</h2>
<?php
    chdir($config["directory"] . "/" . $_GET["folder"]);
    passthru("git pull");
?>
            </div>
<?php } ?>

            <br />
            <br />
            <br />
            <br />
            <br />
            <br />

            <footer>
                (C)opyright 2004 - Eser 'Laroux' Ozvataf (<a href="http://eser.ozvataf.com/">http://eser.ozvataf.com/</a>) - Submit pull requests and issues on <a href="https://github.com/larukedi/pullyn">project's github repository</a>.
            </footer>
        </div>

        <script src="assets/js/boilerplate.min.js"></script>
    </body>
</html>
