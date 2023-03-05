					<?php $this->load->view('header');?>
					<div class="portlet box grey" style="border:1px solid #E5E5E5;">
									<div class="portlet-title">
										<div class="caption">
											<?=$page_title;?> |
										</div>
									
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="<?=base_url();?>user/delete" method="post" class="horizontal-form">
											<div class="form-body">

											
											<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label class="control-label">Delete Action</label>
														<select class="form-control" name="grade_level_id" required="">
															<option selected="" disabled="">Option</option>
																<option value="Fired">Fired</option>
																<option value="Resigned">Resigned</option>
															</select>
														</div>
													</div>
													</div>


												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">Enter Reason </label>
															<textarea class="form-control" name="deletereason">
															</textarea>
															<input type="hidden" name="user_id" value="<?=$user_id;?>">
														</div>
													</div>
												</div>
												
											</div>
											<div class="form-actions left">
												<button type="submit" class="btn default red-stripe"> Delete </button>
											</div>
										</form>
										<!-- END FORM-->
								</div>
						<?php $this->load->view('footer');?>
