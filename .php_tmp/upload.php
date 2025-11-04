<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){
        if($_FILES ["file"] ["error"] === 0){

            $uploaddir = "uploads/";
            $file_name = basename($_FILES["file"]["name"]);

            $target_file = $uploaddir . $file_name;

            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)){
                echo "The file, " . basename($_FILES["file"]["name"]). " has been uploaded";
            } else {
                echo "Sorry there was an error uploading your file";
            }

        }

}





// echo "<pre>";
// var_dump ($_FILES);
// echo "</pre>";

