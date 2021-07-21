<?php
if(isset($_POST['submit'])){

    // Count total files
    $countfiles = count($_FILES['file']['name']);

    // Looping all files
    for($i=0;$i<$countfiles;$i++){
        $target_dir = "./repository_pending/";
        $target_file = $target_dir . basename($_FILES['file']['name'][$i]);
        $fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $filename = $_FILES['file']['name'][$i];

        // check file extension
        if($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "pdf" && $fileType != "doc" && $fileType != "docx" && $fileType != "ppt"  && $fileType != "pptx" ) {
            echo "Error: Only word, porwepoint, pdf and images are allowed ( ". $filename . ") <br>";
        }
        // upload file
        else if(move_uploaded_file($_FILES['file']['tmp_name'][$i],'./repository_pending/'.$filename)) {
            echo "Upload successful: ". $filename . "  <br>";
        } else {
            echo "Error uploading: ". $filename . " <br>";
        }
    }
    echo "<hr>";
    echo "After being approved, the files will be availble <a href='./viewArcc.php'>here</a>.";
}

?>
