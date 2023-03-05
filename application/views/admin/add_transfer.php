					<?php $this->load->view('header');?>
	          <div class="portlet box grey" style="border:1px solid #E5E5E5;">
									<div class="portlet-title">
										<div class="caption">
											<?=$page_title;?> |
										</div>
									
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="<?=base_url();?>transfer/save" method="post" class="horizontal-form">
											<div class="form-body">
												<br>
												<div class="row">

												<div class="col-md-6">
														<div class="form-group">
														<label class="control-label">Staff</label>
														<select class="form-control" name="user_id" required="">
														<option selected="" disabled="">Option</option>
															<?php foreach ($this->M_user->get_users() as $row) {?>
																<option value="<?=$row['user_id'];?>">
																		<?=$row['name'];?> | <?=$row['staff_no'];?> </option>
																<?php }?>
															</select>
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
														<label class="control-label">Transfered To</label>
														<select class="form-control" name="to" required="">
														<option selected="" disabled="">Option</option>
															<?php foreach ($this->M_branch->get_branches() as $row) {?>
																<option value="<?=$row['branch_id'];?>">
																		<?=$row['name'];?></option>
																<?php }?>
															</select>
														</div>
													</div>

													
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">Reason</label>
															<textarea class="form-control" name="reason_of_transfered">
																<?php if (!empty($reason_of_transfered)){echo $reason_of_transfered;}?>
															</textarea>
														
														</div>
													</div>

													

												
																	
												</div>
												
											</div>
											<div class="form-actions left">
											       <?php if (isset($update_id)){?>
                                                     <input type="hidden" name="update_id" id="update_id" value="<?=$update_id;?>">
                                                  <?php }?>
												<button type="submit" class="btn default"> Save</button>
												<a href="<?=base_url();?>transfer" class="btn default"> Back</a>
											</div>
										</form>
										<!-- END FORM-->
								</div>
						<?php $this->load->view('footer');?>
