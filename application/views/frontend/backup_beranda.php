<table id="kebijakan" class="table table-bordered">
					<thead>
						<tr>
							<th width="2%">No.</th>
							<th width="30%">Narasi</th>
							<th width="20%">Status</th>
							<th width="20%">Indikator</th>
							<th width="20%">PIC</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$i = 1;
						foreach ($kebijakan as $key) {
							$data = $this->M_progress->getProgressKebijakan($key->no);
							if ($data->num) {
								# code...
							}
							?>
							<tr>
								<td><?php echo $i;?></td>
								<td><?php echo nl2br($key->narasi);?></td>
								<?php 
								if (strlen($key->status) > 300) {
									?><td><?php echo substr(nl2br($key->status), 0,300);?><span id="status_<?php echo $i;?>" class="collapse"><?php echo substr(nl2br($key->status), 300) ?></span><a data-toggle="collapse" data-target="#status_<?php echo $i;?>"> Readmore..</a></td><?php
								}else{
									?> <td><?php echo nl2br($key->status);?></td><?php 
								}
								?>
								<td><?php echo nl2br($key->indikator);?></td>
								<td><?php echo nl2br($key->pic);?></td>
							</tr>
							<?php $i++;
						} ?>
					</tbody>
				</table>