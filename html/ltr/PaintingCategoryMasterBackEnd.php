<?php
    include 'Connection.php';

    $PaintingCategoryName = $_POST['PaintingCategoryName'];
    $PaintingImage = $_POST['PaintingImage'];
    $PaintingDiscription = $_POST['PaintingDiscription'];

    $PaintingCategoryArray = array(
                            
                            "PaintingCategoryName"=>"'".$PaintingCategoryName."'",
                            "PaintingImage"=>"'".$PaintingImage."'",
                            "PaintingDiscription"=>"'".$PaintingDiscription."'"
                            );
    
    // print_r($PaintingArray);

    $Columns= implode (',',array_keys($PaintingCategoryArray));
    $Values= implode (',',array_values($PaintingCategoryArray));

    $sql="INSERT INTO `category` ($Columns) VALUES($Values)";

    // print_r($Columns);
    // print_r($Values);

    if($connection->query($sql)===true)
    {
        echo '<script>';
        echo 'alert("Paintig category add successfully");';
        echo 'window.location.href="PaintingCatagoriesList.php";';
        echo '</script>';
    }
    else {
        echo '<script>';
        echo 'alert("Paintig category is not add try again");';
        echo 'window.location.href="PaintingCategoryMaster.php";';
        echo '</script>';
    }

?>
