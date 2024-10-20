<?php

// print_r($_FILES['fileUplpoad']);
if ($_FILES['fileUpload']) {
    $path = $_FILES['fileUpload']['name'];
    echo $path . "File uploaded";
    $upload_path = "./uploads/" . $path;
    move_uploaded_file($_FILES['fileUpload']['tmp_name'], $upload_path) || die("failed to upload");
} else {
    die("No file found");
}
