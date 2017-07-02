<!DOCTYPE html>
<html lang="en">
<head>
  <title>Imagenes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="shortcut icon" href="../assets/ico/favicon.ico">
  <link rel="icon" type="image/ico" href="img/plenamente.ico" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
</head>
<body>

<div class="container">
  <h1>Imagenes</h1>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#addNews"><i class="fa fa-plus" aria-hidden="true"></i> Agregar</button>
  <!-- Modal -->
  <div class="modal fade" id="addNews" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Agregar Imagen</h4>
        </div>
        <div class="modal-body">
            <form action="saveImage.php" method="post" action="post" onSubmit="window.location.reload()" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="titulo" title="Coloca un título para la imagen">
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-square-o fa-stack-2x"></i>
                            <i class="fa fa-newspaper-o fa-stack-1x"></i>
                        </span>Titulo:
                    </label>
                    <input type="text" class="form-control" id="titulo" name="titulo" title="Coloca un título para noticia" required>
                </div>
                <div class="form-group">
                    <label for="imagen">
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-square-o fa-stack-2x"></i>
                            <i class="fa fa-pencil fa-stack-1x"></i>
                        </span>Imagen:</label>
                    <input type="file"  accept=".gif,.jpg,.jpeg,.png" class="form-control" id="imagen" name="imagen">
                </div>
                <div class="form-group">
                    <label for="activa" title="Activar después de guardar">Activar:</label>
                    <input type="checkbox" name="activar" id="activar" value="1" title="Activar después de guardar"><br>
                </div>
                <button type="submit" class="btn btn-default">Guardar</button>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <?php
    include_once "../util/con.php";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "SELECT * FROM productos";
    
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
    // output data of each row
        echo "<table class='table table-bordered table-striped'>
    <thead>
        <tr>
            <th class=''>No</th>
            <th class=''>Titulo</th>
            <th class=''>Imagen</th>
            <th class=''>Publicación Activa</th>
            <th class=''>Editar</th>
        </tr>
    </thead>
    <tbody>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td style='text-align:center;' class=''>".$row["idProducto"]."</td>";
            echo "<td class=''>".$row["producto"]."</td>";
            echo "<td style='text-align:center;' class=''>".$row["productImage"]."</td>";      
            echo "<td style='text-align:center;' class=''>".$row["activa"]."</td>";
            echo "<td style='text-align:center;'>
                <button class='btn btn-success' data-toggle='modal' data-target='#editNews' contenteditable='false''>Edit</button>
            </td>";
            echo "</tr>";
        }
    echo "</tbody>";
    echo "</table>";
    } else {
        echo "0 results";
    }
    
    $conn->close();
?>
</div>
<div class="modal fade" id="editNews" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content"></div>
    </div>
    <div class="modal-dialog">
        <div class="modal-content"></div>
    </div>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"> <span aria-hidden="true" class="">×   </span><span class="sr-only">Close</span>

                </button>
                 <h4 class="modal-title" id="myModalLabel">Editar Imagen</h4>

            </div>
            <div class="modal-body" id="editarCuerpo"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="button" id="actualiza"class="btn btn-primary">Guardar Cambios</button>
            </div>
        </div>
    </div>
</div>
    
    
</body>
    <script>
    $(".btn[data-target='#editNews']").click(function() {
       var columnHeadings = $("thead th").map(function() {
                 return $(this).text();
              }).get();
       columnHeadings.pop();
       var columnValues = $(this).parent().siblings().map(function() {
                 return $(this).text();
       }).get();
  var modalBody = $('<div id="modalContent"></div>');
  var modalForm = $('<form role="form" name="modalForm" action="updateImage.php" onSubmit="window.location.reload()"  method="post" enctype="multipart/form-data"></form>');
  $.each(columnHeadings, function(i, columnHeader) {
       var formGroup = $('<div class="form-group"></div>');
       formGroup.append('<label for="'+columnHeader+'">'+columnHeader+': </label> ');
      if(columnHeader == 'No'){
        formGroup.append('<input class="form-control" name="'+columnHeader+'" id="'+columnHeader+'" value="'+columnValues[i]+'" readonly />');   
      }else if(columnHeader=='Publicación Activa'){
          if(columnValues[i]==0){
              formGroup.append('<input type="checkbox" name="activar" id="activar" title="Activar después de guardar"><br>');
          }else{
              formGroup.append('<input type="checkbox" name="activar" id="activar" checked title="Activar después de guardar"><br>');
          }
      }else if(columnHeader=='Imagen'){
          var nombreID = columnHeader;
          nombreID = nombreID+"A";
         formGroup.append('<input class="form-control" name="'+nombreID+'" id="'+nombreID+'" value="'+columnValues[i]+'" />');  
          formGroup.append('<input type="file" class="form-control" name="'+columnHeader+'" id="'+columnHeader+'" value="'+columnValues[i]+'" />');  
      }
      else{
         formGroup.append('<input class="form-control" name="'+columnHeader+'" id="'+columnHeader+'" value="'+columnValues[i]+'"  />');  
      }     
       modalForm.append(formGroup);
  });
  modalBody.append(modalForm);
  $('#editarCuerpo').html(modalBody);
});
$('.modal-footer .btn-primary').click(function() {
   $('form[name="modalForm"]').submit();
});
</script>
</html>

