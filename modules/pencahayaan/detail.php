<?php
echo modtitle('Detail Ruang');
echo panel('Detail Ruangan & Jumlah Titik Lampu');

	$query = mysql_query("SELECT * FROM admin_users, users_detail WHERE admin_users.id = $user_id and users_detail.id = $user_id ");
	$data = mysql_fetch_array($query);

$id = $_REQUEST['id'];
$username = $data['username'];


                                    	 
											$query2 = mysql_query("SELECT * FROM lampu,ruang,pencahayaan WHERE pencahayaan.id=$id and pencahayaan.user_id = ruang.user_id");
											$data2 = mysql_fetch_array($query2);
									        $jumlah_lampu = $data2['jumlah_lampu'];
                                            $lumen = $data2['lumen'];
                                            $nama_lampu = $data2['nama_lampu'];
                                            $jenis_ruang = $data2['jenis_ruang'];
                                            $nama_ruang = $data2['nama_ruang'];
                                            echo form('#', '');
											echo formedit('hidden','id','','', $id);
                                            echo formedit('text', 'nama_ruang','Nama Ruang', 'form-control', $nama_ruang, 'disabled');
                                            echo formedit('text', 'jenis_ruang','Jenis Ruang', 'form-control', $jenis_ruang , 'disabled');
                                            echo formedit('text', 'nama_lampu','Nama Lampu', 'form-control', $nama_lampu, 'disabled');
                                            echo formedit('text', 'lumen','Lumen Lampu', 'form-control', $lumen  , 'disabled');
                                            echo formedit('text', 'jumlah_lampu','Jumlah Lampu Yg Disarankan', 'form-control', $jumlah_lampu , 'disabled' );
											?>

                              </div>
                            </div>
                          </div>
                        </div><!--/.row-->  