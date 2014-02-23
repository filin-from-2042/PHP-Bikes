<?php
        header("Content-type:text/html;charset=utf-8");
?>
<html>
    <head>
        <title>Галерея</title>
    </head>
    <body>
        <table border="3">
            <?php
                include "autoload.php";
                $g=new gallery('descript.ion',3);
                try{
                    $g->explodeNames();
                    $g->renderGallery();
                }
                catch (Exception $e){
                    echo $e->getTraceAsString();
                }
                
            ?>
        </table>
    </body>
</html>
