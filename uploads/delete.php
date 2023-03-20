<?php

// $dir = opendir(".\\imgs");

$imgs = filter_input_array(INPUT_POST);

foreach ($imgs as $position => $files) {
    foreach ($files as $pos => $file_name) {
        unlink(".\\imgs\\$file_name");
    }
}
// closedir($dir);
header("location:index.php?message=Arquivos excluídos com sucesso!")
// echo var_dump($imgs);

?>