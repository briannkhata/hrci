<?php $this->load->view('header');?>
		<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
	<div class="portlet box grey" style="border:1px solid #E5E5E5;">
						<div class="portlet-title">
							<div class="caption">
								<?=$page_title;?>
							</div>

						</div>
						<div class="portlet-body">
							<div class="table-toolbar">
								<div class="row">
									<br>
									<div class="col-md-12">
												<a href="<?=base_url();?>transfer/read" class="btn default green-stripe">
											Add New
											</a>
									</div>
									
								</div>
							</div>
							<hr>
							<table class="table table-striped table-bordered">
							<thead>
							<tr>
								<th>Staff</th>
								<th>From</th>
								<th>To</th>
								<th>Date</th>
								<th>Reason</th>
								<th>Reported</th>
								<th></th>
							</tr>
							</thead>
							<tbody>
							<?php foreach ($this->M_transfer->get_transfers() as $row):?>
							<tr>
								<td><?=$this->M_user->get_user($row['user_id']);?></td>
								<td><?=$this->M_branch->get_branch($row['from']);?></td>
								<td><?=$this->M_branch->get_branch($row['to']);?></td>
								<td><?=date('d M Y',strtotime($row['date_of_transfered']));?></td>
								<td><?=$row['reason_of_transfered'];?></td>
								<td>
									<?php if($row['reported']==1):?>
										Yes,Reported
									<?php else:?>
										Not yet Reported
									<?php endif;?>
								</td>
								<td>
									<div class="btn-group">
										<a href="<?=base_url();?>transfer/read/<?=$row['transfer_id'];?>" class="btn btn-sm default green-stripe"><i class="fa fa-edit"></i></a>
										<a href="<?=base_url();?>transfer//<?=$row['transfer_id'];?>" class="btn btn-sm default blue-stripe">Complete Tranfer</a>

									</div>
								</td>
							</tr>
							<?php endforeach;?>
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
			<?php $this->load->view('footer');?>
