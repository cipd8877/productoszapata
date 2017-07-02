<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$titulo = $_POST['titulo'];
$activar = (isset($_POST['activar']))? $_POST['activar'] : 0;
echo $titulo;
echo $activar;

$target_dir = "../assets/images/slider/";
$target_fileName = basename($_FILES["imagen"]["name"]);
$target_file = $target_dir . $target_fileName;
if($target_fileName !== ''){
$target_file = $target_dir . $target_fileName;
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["imagen"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
//if (file_exists($target_file)) {
//    echo "Sorry, file already exists: ".$target_file;
//    $uploadOk = 0;
//}
// Check file size
if ($_FILES["imagen"]["size"] > 2000000) {
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
    if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["imagen"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}else{
  $target_file="";
}

//Data Connection
include_once "../util/con.php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
echo "Servidor: ".$servername;
echo "Usuario: ".$username;
echo "Password: ".$password;
echo "Tabla: ".$dbname;

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Titulo: ".$titulo;
echo "Archivo: ".$target_fileName;
echo "Activo: ".$activar;

// prepare and bind
$stmt = $conn->prepare("INSERT INTO productos (producto, productImage, activa) VALUES (?, ?, ?)");
$stmt->bind_param("ssi", $titulo, $target_fileName, $activar);

printf("%d Fila insertada.\n", $stmt->affected_rows);
//Execute Insert
$stmt->execute();

//Close Statement and Connection
$stmt->close();
$conn->close();
?>
<script type="text/javascript">
window.location.href = 'index.php';
</script>