<?php
    spl_autoload_register("autoload");
    function autoload ($className)
    {
        $file=$className.'.class.php';
        include $file;
    }
?>