<?php

if(isset($_POST['submit'])){
    foreach ($_FILES['myImages']['tmp_name'] as $key => $image){
        $imageName = $_FILES['myImages']['name'][$key];
        $imagesTmpName = $_FILES['myImages']['tmp_name'][$key];

        $directory = 'images/';

        $result = move_uploaded_file($imagesTmpName,$directory.$imageName);

        if($result){
            echo "Images Uploaded successfully !";
        }
    }
}