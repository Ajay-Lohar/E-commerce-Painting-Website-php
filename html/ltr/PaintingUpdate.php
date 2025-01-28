<?php
  include 'Connection.php';
  $id = $_POST['id'];
//    echo $id
$PaintingName = $_POST['PaintingName'];
$PaintingCategories = $_POST['PaintingCategories'];
$PaintingSize = $_POST['PaintingSize'];
$MRPPrice = $_POST['MRPPrice'];
$SellingPrice = $_POST['SellingPrice'];
$PaintingDiscription = $_POST['PaintingDiscription'];
$Features1 = $_POST['Features1'];
$Features2 = $_POST['Features2'];
$Features3 = $_POST['Features3'];
$Features4 = $_POST['Features4'];


 $sql="UPDATE `paintings` SET 
        PaintingName ='$PaintingName',
        PaintingCategories ='$PaintingCategories',
        PaintingSize ='$PaintingSize',
        MRPPrice ='$MRPPrice',
        SellingPrice ='$SellingPrice',
        PaintingDiscription ='$PaintingDiscription',
        Features1 ='$Features1',
        Features2 ='$Features2',
        Features3 ='$Features3',
        Features4 ='$Features4'

        WHERE id='$id' ";

        if ($connection->query($sql) === TRUE)
        {
        echo '<script type="text/javascript">'; 
        echo 'alert("painting update Successfully!");'; 
        echo 'window.location.href = "PaintingList.php"';
        echo '</script>';
        } 
        else 
        {
        echo '<script type="text/javascript">'; 
        echo 'alert("Error Occured! painting Record not updated!");'; 
        echo 'window.location.href = "PaintingList.php"';
        echo '</script>';
        }

?>