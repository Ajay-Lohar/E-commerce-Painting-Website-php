<?php
  include 'Connection.php';
  $id = $_POST['id'];
//    echo $id
$PaintingCategoryName = $_POST['PaintingCategoryName'];
$PaintingDiscription = $_POST['PaintingDiscription'];


 $sql="UPDATE `category` SET 
        PaintingCategoryName ='$PaintingCategoryName',
        PaintingDiscription ='$PaintingDiscription'

        WHERE id='$id' ";

        if ($connection->query($sql) === TRUE)
        {
        echo '<script type="text/javascript">'; 
        echo 'alert("painting category update Successfully!");'; 
        echo 'window.location.href = "PaintingCatagoriesList.php"';
        echo '</script>';
        } 
        else 
        {
        echo '<script type="text/javascript">'; 
        echo 'alert("Error Occured! painting category Record not updated!");'; 
        echo 'window.location.href = "PaintingCatagoriesList.php"';
        echo '</script>';
        }

?>