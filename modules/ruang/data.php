<?php
include '../../inc/config.php';
include '../../inc/cek.php';
include '../../lib/func.php';
$user_id = $_SESSION['user_id'];
  $query = "SELECT * FROM ruang where user_id=".$user_id."";
  $result = mysql_query($query);
  
  $table = "";
  
  while($row = mysql_fetch_array($result)){   

    $edit = '<a href=\"edicionUsuario.php?a='.$row['Login'].'&b='.$row['Password'].'&c='.$row['Nombre'].'&d='.$row['TipoLogin'].'&e='.$row['status'].'\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>';
    $delete = '<a href=\"actionDelete.php?id='.$row['Login'].'\" onclick=\"return confirm(\'¿Seguro que desea eliminiar este usuario?\')\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>';
    
    $table.='{
          "nama_ruang":"'.$row['nama_ruang'].'",
          "jenis_ruang":"'.$row['jenis_ruang'].'",
          "panjang":"'.$row['panjang'].'",
          "lebar":"'.$row['lebar'].'",
          "keterangan":"'.$row['keterangan'].'",
          "tindakan:"'.$edit.$delete.'"
        },';    
  } 

  //eliminamos la coma que sobra
  $table = substr($table,0, strlen($table) - 1);

  echo '{"data":['.$table.']}'; 
?>