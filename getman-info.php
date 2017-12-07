<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/style-getman.css">
    <title><?php echo $_GET['name'] ?></title>
</head>
<body>
    <div class="wrapper">
        <?php include("/include/header.php");?>
        <?php include("/include/nav.php");?>
        <main>
                <div>
                    <div>
                        <p>
                           <?php echo($_GET['name']) ?>
                        </p>
                        <p>
                            <?php echo($_GET['content']) ?>     
                        </p>
                    </div>
                    <p>
                        <img src="<?php echo($_GET['img']) ?>" alt="<?php echo($_GET['name']) ?>">
                    </p>
                </div>
        </main>   
        <?php include("/include/footer.php");?>
    </div>
</body>
</html>