
<?php
    session_start();

    function __autoload($className){
        $fileName = 'core/'.str_replace('\\', '/', $className).'.class.php';
        if(!file_exists($fileName)){
            throw new Exception('Class not found!');
        }

        require_once $fileName;
    }
?>

<?php require 'core/views/header.php'; ?>
<img src="core/img/luis.png" alt="foto">
<p align="left">Здесь можно писать что угодно и вставлять любую информацию,
    предназначенную для посетителя.</p>
<?php require'core/views/footer.php'; ?>



