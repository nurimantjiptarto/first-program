<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha256-YLGeXaapI0/5IgZopewRJcFXomhRMlYYjugPLSyNjTY=" crossorigin="anonymous" />
    <title>BirdTypes</title>
</head>
<body>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Shape</th>
                <th>Name</th>
                <th>Location</th>
            </tr>
        </thead>

        <tbody>
            <?php 
                require("Animal.php");
                require("Bird.php");
                $birds = Bird::fromCSVFile("../data/birdtypes.csv");
                foreach ($birds as $bird) {
            ?>
                <tr>
                    <td><?php echo $bird->shape; ?></td>
                    <td><?php echo $bird; ?></td>
                    <td><?php echo $bird->location; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
