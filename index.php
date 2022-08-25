<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Dischi PHP</title>
</head>
<body>
    <?php 
        include './database.php';
    ?>
    <header>
        <div class="logo">
            <img src="" alt="">
        </div>
    </header>

    <main>
        <div class="container">
            <?php foreach ($albums as $album) { ?>
                <div class="card">
                    <img src="<?php echo $album['poster'] ?>" alt="">
                    <h3><?php echo $album['title']; ?></h3>
                    <p><?php echo $album['author']; ?></p>
                    <p><?php echo $album['genre']; ?></p>
                    <p><?php echo $album['year']; ?></p>
                </div>
            <?php } ?>
    </main>
</body>
</html>