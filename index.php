<?php
require_once "cfg.php";
require_once CLASSES."gate.php";
$proc = new gate;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        echo gate::$HTML["METAS"];
        echo gate::$HTML["LINKS"];
        echo gate::$HTML["NO_INDEX_LINKS"];
        echo gate::$HTML["HEAD_SCRIPTS"];
    ?>
    <title><?php echo gate::$HTML["TITLE"];?></title>
</head>
<body>
    <header>
        <?php echo gate::$HTML["NAVIGATION_BLOCK"];?>
    </header>
    <main>
        <?php echo gate::$HTML["MAIN_BLOCK"];?>
    </main>
    <footer>
        <?php echo gate::$HTML["FOOTER_BLOCK"];?>
    </footer>
    <?php echo gate::$HTML["BODY_SCRIPTS_BLOCK"];?>
</body>
</html>
