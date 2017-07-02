<?php
ob_start();
$noImagen =  $_POST['No'];
$titulo = $_POST['Titulo'];
$activar = (isset($_POST['activar']))? 1 : 0;
echo $activar;
$imagenA = $_POST['ImagenA'];
echo $titulo;
echo $activar;


$target_dir = "../assets/images/slider/";
$target_fileName = basename($_FILES["Imagen"]["name"]);
$target_file = $target_dir . $target_fileName;
if($target_fileName !== ''){
$target_file = $target_dir . $target_fileName;
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["Imagen"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists: ".$target_file;
    $uploadOk = 0;
}
// Check file size
if ($_FILES["Imagen"]["size"] > 2000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["Imagen"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["Imagen"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.".$_FILES["Imagen"]["error"];
    }
}
}else if($imagenA !==''){
  $target_file = $imagenA;  
  $target_fileName = $imagenA;  
}else{
  $target_file="";
  $target_fileName = "";  
}
//Data Connection
include_once "../util/con.php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$sql="UPDATE productos set producto = '".$titulo."', productImage = '".$target_fileName."', activa=".$activar." where idProducto = ".$noImagen;
$stmt = $conn->prepare($sql);

//Execute Insert
$stmt->execute();

//Close Statement and Connection
$stmt->close();
$conn->close();
?>

<script type="text/javascript">
window.location.href = 'index.php';
</script>