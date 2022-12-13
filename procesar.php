<?php

if(!empty ($_POST['nickname']) && !empty ($_POST['password'])){
    $nickname = $_POST['nickname'];
    $password = $_POST['password'];
}




if($nickname == "iTash"  && $password== "angel1008" ){
   header("location: https://itashx.github.io/Rojastech.github.io/");
}



else
{

  header("location: index.php");
}

?>

