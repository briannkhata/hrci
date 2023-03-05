					<?php $this->load->view('header');?>
	          <div class="portlet box grey" style="border:1px solid #E5E5E5;">
									<div class="portlet-title">
										<div class="caption">
											<?=$page_title;?> |
										</div>
									
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="<?=base_url();?>staff_type/save" method="post" class="horizontal-form">
											<div class="form-body">
												<br>
												<div class="row">
												

													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">Staff type</label>
															<input type="text" name="staff_type" class="form-control" value="<?php if (!empty($staff_type)){echo $staff_type;}?>" required>
														</div>
													</div>

													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">Working Days</label>
															<input type="text" name="days" class="form-control" value="<?php if (!empty($days)){echo $days;}?>" required>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">Days Per Month</label>
															<input type="text" name="days_per_month" class="form-control" value="<?php if (!empty($days_per_month)){echo $days_per_month;}?>" required>
														</div>
													</div>

													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">Days Per Month</label>
															<input type="text" name="hours_per_day" class="form-control" value="<?php if (!empty($hours_per_day)){echo $hours_per_day;}?>" required>
														</div>
													</div>

												</div>
												
											</div>
											<div class="form-actions left">
											       <?php if (isset($update_id)){?>
                                                     <input type="hidden" name="update_id" id="update_id" value="<?=$update_id;?>">
                                                  <?php }?>
												<button type="submit" class="btn default blue-stripe"> Save</button>
												<a href="<?=base_url();?>staff_type" class="btn default green-stripe"> Back</a>
											</div>
										</form>
										<!-- END FORM-->
								</div>
						<?php $this->load->view('footer');?>
