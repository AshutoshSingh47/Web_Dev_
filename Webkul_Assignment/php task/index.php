<?php
ini_set('display_errors', '1');
if ($_FILES['image']['name'] != NULL) {

    $file = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];

    $extension = pathinfo($file, PATHINFO_EXTENSION);
    $path = "./images/";

    $validExtensions = array('jpg', 'jpeg', 'png', 'gif', 'svg');
    $flag = true;
    foreach ($validExtensions as $values) {

        if ($extension == $values) {
            $flag = true;
        } else {
            $flag = false;
        }
    }

    if ($flag) {
        if ($file_size <= 2000000) {
            move_uploaded_file($_FILES['image']['tmp_name'], $path);
            echo "File uploaded successfully";
        } else {
            echo "Image size must be less than 2MB";
        }
    } else {
        echo "File must be an image";
    }

}else{
    echo "Field cannot be empty";
}

?>