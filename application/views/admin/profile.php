<?php $this->load->view('header');?>

		<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
						<div class="portlet box grey" style="border:1px solid #E5E5E5;">
						<div class="portlet-title">
							<div class="caption">
								<?=$this->M_user->get_user($user_id);?>
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-toolbar">
								<ul class="list-group">
								<?php foreach ($this->M_user->get_user_by_id($user_id) as $row) {?>

								  <li style="width:40%; height: auto; padding-bottom: 1%;">
								    <img src="<?=base_url();?>uploads/users/<?=$row['photo'];?>" class="img-thumbnail" style="height: 150px;">
								  </li>
								  <li class="list-group-item d-flex justify-content-between align-items-center">
								    <?=$row['staff_no'];?>
								  </li>
								  <li class="list-group-item d-flex justify-content-between align-items-center">
								  <?=$row['national_id'];?>
								  </li>
								  <li class="list-group-item d-flex justify-content-between align-items-center">
								    <?=$row['gender'];?>
								  </li>
								  <li class="list-group-item d-flex justify-content-between align-items-center">
								  </li>
								  <li class="list-group-item d-flex justify-content-between align-items-center">
								  </li>
								  <li class="list-group-item d-flex justify-content-between align-items-center">
								    <?=$row['email1'];?>
								  </li>
								  <li class="list-group-item d-flex justify-content-between align-items-center">
								   
								  </li>
								  <li class="list-group-item d-flex justify-content-between align-items-center">
								      <?=$row['phone1'];?>
								  </li>

								  <li class="list-group-item d-flex justify-content-between align-items-center">
								    <?=$row['contactaddress'];?> | <?=$row['physicaladdress'];?>
								  </li>

								   <li class="list-group-item d-flex justify-content-between align-items-center">
								  </li>
								  <li class="list-group-item d-flex justify-content-between align-items-center">
									Date Added   <?=date('d F-Y',strtotime($row['date_added']));?>
								  </li>
								  <li class="list-group-item d-flex justify-content-between align-items-center">
									<?=$row['national_id'];?>
								  </li>
								  <li class="list-group-item d-flex justify-content-between align-items-center">
									<?=$row['nationality'];?>
								  </li>

								  <li class="list-group-item d-flex justify-content-between align-items-center">
								  </li>
								<?php }?>
								</ul>

								<ul class="list-group">
								  <li class="list-group-item d-flex justify-content-between align-items-center">
									<b>Qualifications</b>
									</li>
								</ul>

								<ul class="list-group">
								  <li class="list-group-item d-flex justify-content-between align-items-center">
									<b>Promotions</b>
									</li>
								</ul>

								<ul class="list-group">
								  <li class="list-group-item d-flex justify-content-between align-items-center">
									<b>Trainings</b>
									</li>
								</ul>

								<ul class="list-group">
								  <li class="list-group-item d-flex justify-content-between align-items-center">
									<b>Transfers</b>
									</li>
								</ul>

								<ul class="list-group">
								  <li class="list-group-item d-flex justify-content-between align-items-center">
									<b>Leave Details</b>
									</li>
								</ul>

								<ul class="list-group">
								  <li class="list-group-item d-flex justify-content-between align-items-center">
									<b>Salaries</b>
									</li>
								</ul>

								<ul class="list-group">
								  <li class="list-group-item d-flex justify-content-between align-items-center">
									<b>Pensions</b>
									</li>
								</ul>

								<ul class="list-group">
								  <li class="list-group-item d-flex justify-content-between align-items-center">
									<b>Payee</b>
									</li>
								</ul>

							
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
		<?php $this->load->view('footer');?>
