<?php require_once('../vendor/autoload.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha256-YLGeXaapI0/5IgZopewRJcFXomhRMlYYjugPLSyNjTY=" crossorigin="anonymous" />
    <title>Bird types</title>
</head>
<body>
<div class="container" style="margin-top:1rem">
    <h1>Birds</h1>
    <table class="table table-striped table-bordered table-hover">
        <?php Bird::asTableFromCSV("../data/birdtypes.csv"); ?>
    </table>
</div>
</body>
</html>
