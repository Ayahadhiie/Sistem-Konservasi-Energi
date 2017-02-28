<div class="span9" id="content">
  	<div class="row-fluid">
	      <!-- block --><?php
	      				if ($ntfy=="sukses"){
	      						echo '<div class="alert alert-success">';
								echo '	<button class="close" data-dismiss="alert">&times;</button>';
								echo '<strong>Berhasil!</strong> Operasi Yang anda Lakukan Berhasil.';
								echo '	</div>';
						}
						if ($ntfy=="error"){
	      						echo '<div class="alert alert-error">';
								echo '	<button class="close" data-dismiss="alert">&times;</button>';
								echo '<strong>Operasi Gagal!</strong> Maaf Operasi Yang anda Lakukan Tidak dapat diproses.';
								echo '	</div>';
						}
						?>
             <div class="span9" id="content">
	<div class="row-fluid">
	      <!-- block -->
<?php
$app_logo=$db->Select(option,array('option_name' =>app_logo));
$app_favicon=$db->Select(option,array('option_name' =>app_favicon));
$app_name=$db->Select(option,array('option_name' =>app_name));
$app_about=$db->Select(option,array('option_name' =>app_about));
$app_description=$db->Select(option,array('option_name' =>app_description));
$app_version=$db->Select(option,array('option_name' =>app_version));

$contact_address=$db->Select(option,array('option_name' =>contact_address));
$contact_phone=$db->Select(option,array('option_name' =>contact_phone));
$contact_fax=$db->Select(option,array('option_name' =>contact_fax));
$contact_email=$db->Select(option,array('option_name' =>contact_fax));

$fb_page=$db->Select(option,array('option_name' =>fb_page));
$fb_appid=$db->Select(option,array('option_name' =>fb_appid));
$fb_appsecret=$db->Select(option,array('option_name' =>fb_appsecret));
$twitter_account=$db->Select(option,array('option_name' =>twitter_account));
$running_text=$db->Select(option,array('option_name' =>running_text));

?>
             <div class="block">
                <div class="navbar navbar-inner block-header">
                   <div class="muted pull-left"><?php echo $act ?></div>
                </div>
                <div class="block-content collapse in">
                 	 <form class="form-horizontal" method="post" id="form" action="modules/<?php echo $mod ?>/update.php?id=<?php echo $id ?>">
                 	 	            <fieldset>
                 	 	            	<h3>Tentang Website</h3>
                                        <div class="control-group">
                                          <label class="control-label" for="textarea2">Judul Website</label>
                                          <div class="controls">
                                            <input type="text" name="<?php echo $app_about['option_name'] ?>" class="span6" value="<?php echo $app_about['value'] ?>" />
                                             </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="textarea2">Deskripsi Website</label>
                                          <div class="controls">
                                            <input type="text" name="<?php echo $app_description['option_name'] ?>" class="span6" value="<?php echo $app_description['value'] ?>" />
                                             </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="textarea2">Running Text Beranda</label>
                                          <div class="controls">
                                            <input type="text" name="<?php echo $running_text['option_name'] ?>" class="span6" value="<?php echo $running_text['value'] ?>" />
                                             </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="textarea2">Logo Website</label>
                                          <div class="controls">
										<button type="button" onclick="BrowseServer('folder');">Browse</button>
  										<input type="text" id="folder" name="<?php echo $app_logo['option_name'] ?>" value="<?php echo $app_logo['value'] ?>" /><br />
										<span></span><br />
										</div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="textarea2">Favicon</label>
                                          <div class="controls">
										<button type="button" onclick="BrowseServer('folder');">Browse</button>
  										<input type="text" id="folder" name="<?php echo $app_favicon['option_name'] ?>" value="<?php echo $app_favicon['value'] ?>" /><br />
										<span></span><br />
										</div>
                                        </div>
                                        <h3>Informasi Kontak</h3>
                                        <div class="control-group">
                                          <label class="control-label" for="textarea2">Alamat Kontak</label>
                                          <div class="controls">
                                            <input type="text" name="<?php echo $contact_address['option_name'] ?>" class="span6" value="<?php echo $contact_address['value'] ?>" />
                                             </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="textarea2">Telepon Kontak</label>
                                          <div class="controls">
                                            <input type="text" name="<?php echo $contact_phone['option_name']?>" class="span6" value="<?php echo $contact_phone['value'] ?>" />
                                             </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="textarea2">Fax Kontak</label>
                                          <div class="controls">
                                            <input type="text" name="<?php echo $contact_fax['option_name'] ?>" class="span6" value="<?php echo $contact_fax['value'] ?>" />
                                             </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="textarea2">Email Kontak</label>
                                          <div class="controls">
                                            <input type="text" name="<?php echo $contact_email['option_name'] ?>" class="span6" value="<?php echo $contact_email['value'] ?>" />
                                             </div>
                                        </div>
                                        <h3>Media Sosial</h3>
                                        <div class="control-group">
                                          <label class="control-label" for="textarea2">Halaman Facebook</label>
                                          <div class="controls">
                                            <input type="text" name="<?php echo $fb_page['option_name'] ?>" class="span6" value="<?php echo $fb_page['value'] ?>" />
                                             </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="textarea2">Facebook APP ID</label>
                                          <div class="controls">
                                            <input type="text" name="<?php echo $fb_appid['option_name'] ?>" class="span6" value="<?php echo $fb_appid['value'] ?>" />
                                             </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="textarea2">FB APP Secret</label>
                                          <div class="controls">
                                            <input type="text" name="<?php echo $fb_appsecret['option_name'] ?>" class="span6" value="<?php echo $fb_appsecret['value'] ?>" />
                                             </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="textarea2">Twitter Account</label>
                                          <div class="controls">
                                            <input type="text" name="<?php echo $twitter_account['option_name'] ?>" class="span6" value="<?php echo $twitter_account['value'] ?>" />
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