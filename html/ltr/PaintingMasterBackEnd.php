<?php
    include 'Connection.php';

    $PaintingName = $_POST['PaintingName'];
    $PaintingCategories = $_POST['PaintingCategories'];
    $PaintingImage = $_FILES['PaintingImage'];
    $PaintingSize = $_POST['PaintingSize'];
    $MRPPrice = $_POST['MRPPrice'];
    $SellingPrice = $_POST['SellingPrice'];
    $PaintingDiscription = $_POST['PaintingDiscription'];
    $Features1 = $_POST['Features1'];
    $Features2 = $_POST['Features2'];
    $Features3 = $_POST['Features3'];
    $Features4 = $_POST['Features4'];

     //  print_r($image); 
     $ext=strtolower(pathinfo($PaintingImage["name"],PATHINFO_EXTENSION));
     $RenameFile=$PaintingName.".".$ext;
     // print_r($RenameFile);

    $PaintingArray = array(
                            "PaintingName"=>"'".$PaintingName."'",
                            "PaintingCategories"=>"'".$PaintingCategories."'",
                            "PaintingImage"=>"'".$RenameFile."'",
                            "PaintingSize"=>"'".$PaintingSize."'",
                            "MRPPrice"=>"'".$MRPPrice."'",
                            "SellingPrice"=>"'".$SellingPrice."'",
                            "PaintingDiscription"=>"'".$PaintingDiscription."'",
                            "Features1"=>"'".$Features1."'",
                            "Features2"=>"'".$Features2."'",
                            "Features3"=>"'".$Features3."'",
                            "Features4"=>"'".$Features4."'"
                            );
    
    // print_r($PaintingArray);

    $Columns= implode (',',array_keys($PaintingArray));
    $Values= implode (',',array_values($PaintingArray));

    $sql="INSERT INTO `paintings` ($Columns) VALUES($Values)";

    // print_r($Columns);
    // print_r($Values);

    if($connection->query($sql)===true)
    {
        echo	$last_id=$connection->insert_id;
     $target_dir="Uploads/".$last_id;
     if(!file_exists($target_dir))
           {
       mkdir($target_dir);
       $target_file=$target_dir."/".$RenameFile;
       move_uploaded_file($PaintingImage["tmp_name"],$target_file);
       }
        echo '<script>';
        echo 'alert("Paintig add successfully");';
        echo 'window.location.href="PaintingMaster.php";';
        echo '</script>';
    }
    else {
        echo '<script>';
        echo 'alert("Paintig is not add try again");';
        echo 'window.location.href="PaintingMaster.php";';
        echo '</script>';
    }

?>
