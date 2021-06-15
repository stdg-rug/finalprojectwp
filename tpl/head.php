<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $page_title ?></title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
   <?php
   if($page_title == 'Home'){
       echo '<link rel="stylesheet" href="css/index.css">';
   } else{
       echo '<link rel="stylesheet" href="css/style.css">';
   } ?>



    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <script type="application/javascript" src="scripts/main.js"></script>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php"><img src="media/logo.png"></a>
            <ul class="navbar-nav mr-auto">
                <?php
                    $active = $navigation['active'];
                ?>
                <?php
                foreach($navigation['items'] as $title => $url){
                    if ($title == $active){
                ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= $url ?>"><?= $title ?></a>
                    </li>
                <?php
                    } else {
                ?>
                    <li class="nav-item" id="start_over">
                        <a class="nav-link" href="<?= $url ?>"><?= $title ?></a>
                    </li>
                <?php
                    }
                ?>
                <?php
                    }
                ?>
            </ul>
    </nav>
</header>
