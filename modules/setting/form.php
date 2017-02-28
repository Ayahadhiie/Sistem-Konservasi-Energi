										<div class="control-group">
                                          <label class="control-label" for="textarea2">Kategori</label>
                                          <div class="controls">
                                         <?php
                                            $query = mysql_query("select * from terms Where type='cat'");
											while ($row = mysql_fetch_array($query)) {
											$value = $row['term'];
											?>
											<input type="checkbox" name="tag" value="<?php echo "$value" ?>" /> <?php echo "$value" ?>
											<?php
											}
											?>
                                         </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="textarea2">Tag</label>
                                          <div class="controls"> 	
                                            <?php
                                            $query = mysql_query("select * from terms Where type='tag'");
											while ($row = mysql_fetch_array($query)) {
											$value = $row['term'];
											?>
											<input type="checkbox" name="tag" value="<?php echo "$value" ?>" /> <?php echo "$value" ?>
											<?php
											}
											?>
                                         </div>
                                        </div>
                                        