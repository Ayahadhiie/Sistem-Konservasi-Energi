<?php
    //buat data json
  $user_id = $_SESSION['user_id'];
    //fetch table rows from mysql db
    $sql = "select * from ruang where user_id=".$user_id."";
    $result = mysql_query($sql);

    //create an array
    $emparray = array();
    while($row =mysql_fetch_assoc($result))
    {
        $emparray[] = $row;
    }

  $fp = fopen('modules/ruang/data.json', 'w');
    fwrite($fp, json_encode($emparray));
    fclose($fp);
    mysqli_close($connection);

echo modtitle('Menu Ruang');
echo panel2('Data Ruang Rumah');
?>
<span>
<a href="?mod=ruang&act=new" ><button type="submit" class="btn btn-primary">Tambah Ruang</button></a> 
</span>

                    <table data-toggle="table" data-url="modules/ruang/data.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                                    <thead>
                                    <tr>
                                        <th data-field="nama_ruang" data-sortable="true">Nama Ruang</th>
                                        <th data-field="jenis_ruang"  data-sortable="true">Jenis Ruang</th>
                                        <th data-field="panjang" data-sortable="true">Panjang</th>
                                        <th data-field="lebar" data-sortable="true">Lebar</th>
                                        <th data-field="keterangan" data-sortable="false">Keterangan</th>
                                       
                                    </tr>
                                    </thead>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div><!--/.row-->                     
 
<script type="text/javascript">
		$(document).ready(function() {
$('#dt').dataTable( {
"sPaginationType": "bootstrap"
} );
} );
</script>