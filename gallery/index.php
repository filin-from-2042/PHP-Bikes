<?php
/*  Имеется подкаталог, содержащий некоторое количество графических файлов (jpg/gif/bmp). 
    В этом же подкаталоге есть файл descript.ion, содержащий описание некоторых файлов в виде:
        111.jpg описание этой фото  
        222.gif а это просто картинка  
        333.bmp а этого файла нет, но описание есть

    Необходимо создать скрипт index.php, который будет находиться в этом же подкаталоге и будет выводить таблицу,
    в каждой ячейке которой будет изображение и подпись к нему (если она есть).   
                                                                                     */
       
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
                $g=new gallery('descript.ion',2);
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
