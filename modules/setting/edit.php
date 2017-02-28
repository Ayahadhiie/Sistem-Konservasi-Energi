<div class="span9" id="content">
	<div class="row-fluid">
	      <!-- block -->
<?php
$query = mysql_query("select * from posts where id='$id'");
$row = mysql_fetch_array($query);
$kategori = $row['cat'];
$isi = $row['isi'];
$judul = $row['judul'];
$foto = $row['foto'];
?>
             <div class="block">
                <div class="navbar navbar-inner block-header">
                   <div class="muted pull-left"><?php echo $act ?></div>
                </div>
                <div class="block-content collapse in">
                 	 <form class="form-horizontal" method="post" id="form" action="modules/<?php echo $mod ?>/update.php?id=<?php echo $id ?>">
                 	 	            <fieldset>
                                        <div class="control-group">
                                          <label class="control-label" for="textarea2">Judul</label>
                                          <div class="controls">
                                            <input type="text" name="judul" class="span6" value="<?php echo $judul ?>" required />
                                             </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="textarea2">Kategori</label>
                                          <div class="controls">
                                         <select name="cat" required>
                                         	<option value="">--Pilih--</option>
                                         <?php
                                            $query = mysql_query("select * from cat");
											while ($row = mysql_fetch_array($query)) {
											$value = $row['cat'];
											?>
											<option value="<?php echo $value ?>"><?php echo $value ?></option>
											<?php
											}
											?>
											</select>
                                         </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="textarea2">Isi konten</label>
                                          <div class="controls">
                                            <textarea class="ckeditor" name="isi"><?php echo $isi ?></textarea>
                                             <span id="remaining"></span>
                                             
                                          </div>
                                        </div>
                                         <div class="control-group">
                                          <label class="control-label" for="textarea2">Pilih Gambar</label>
                                          <div class="controls">
										<button type="button" onclick="BrowseServer('folder');">Browse</button>
  										<input type="text" id="folder" name="foto" value="<?php echo $foto ?>" /><br />
										<span></span><br />
										</div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="textarea2">Status Publikasi</label>
                                          <div class="controls">
										<input type="radio" name="status" value="published" checked="true"/> Publikasi<br />
										<input type="radio" name="status" value="archieved"/> Arsip <br />
										<span><i>Konten akan muncul pada website jika statusnya dipublikasi</i></span><br />
										</div>
                                        </div>
                                        <input type="hidden" name="mod" value="<?php echo $mod ?>" />
                                        <div class="form-actions">
                                          <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                      </fieldset>
                                    </form>

                                </div>
                            </div>
             </div>
         </div>
</div>
</div>