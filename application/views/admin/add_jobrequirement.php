					<?php $this->load->view('header');?>
              <div class="portlet box grey" style="border:1px solid #E5E5E5;">
									<div class="portlet-title">
										<div class="caption">
											<?=$page_title;?> |
										</div>
									
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="<?=base_url();?>jobrequirement/save" method="post" class="horizontal-form">
											<div class="form-body">
												<br>
												<div class="row">

												<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">Job</label>
															<select class="form-control" name="job_id">
																<option selected disabled>Job</option>
																<?php foreach($this->M_job->get_jobs() as $row){?>
																<option <?php if($job_id == $row['job_id'] ) echo 'selected';?> value="<?=$row['job_id'];?>">
																<?=$row['job'];?></option>
																<?php }?>
															</select>
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">Status</label>
															<select class="form-control" name="status">
																<option selected disabled>Option</option>
																<option <?php if($status == 'Mandatory') echo 'selected';?> value="Mandatory">Mandatory</option>
																<option <?php if($status == 'Not Mandatory') echo 'selected';?> value="Not Mandatory">Not Mandatory</option>
															</select>
														</div>
													</div>

													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">Job Requirement</label>
															<input type="text" name="jobrequirement" class="form-control" value="<?php if (!empty($jobrequirement)){echo $jobrequirement;}?>" required>
														</div>
													</div>

												
											</div>
											<div class="form-actions left">
											       <?php if (isset($update_id)){?>
                                                     <input type="hidden" name="update_id" id="update_id" value="<?=$update_id;?>">
                                                  <?php }?>
												<button type="submit" class="btn default blue-stripe"> Save</button>
												<a href="<?=base_url();?>jobrequirement" class="btn default green-stripe"> Back</a>
											</div>
										</form>
										<!-- END FORM-->
								</div>
						<?php $this->load->view('footer');?>
