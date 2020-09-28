<?php
    $people = 0;
    $error = "../templates/Layout.html.php";
    $location = "../Includes/BMI.txt";
    $flag=false;
    if($_POST["name"]!=null){
        if($_POST["h"]!=null){
            if($_POST["w"]!=null){
                $name = $_POST["name"];
                $h = $_POST["h"];
                $w= $_POST["w"];
                $bmi = $w/($h*$h);
                $file = fopen($location,'a');
                $information = "$name,$bmi\n";
                fwrite($file,"$information");
                fclose($file);
                $flag =true;
            }else{
                include $error;
            }
        }else{
            include $error;
        }
    }else{
        include $error;
    }
    if($flag){
         $read = file_get_contents($location);
    $read = explode("\n",$read);
    $people = count($read)-1;
    include "../templates/BMI.html.php";
    }
?>
