<?php 
	include('layout/header.php');
	include('layout/sidebar.php'); 
	include('../../db_con/db_conn.php');
	$query="SELECT * FROM `portfolio`" ;
	$result=mysqli_query($connect,$query); 
?>     
                                    <!--begin::Tables Widget 9-->
                                    <div class="card mb-5 mb-xl-8">
										<!--begin::Header-->
										<div class="card-header border-0 pt-5">
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bold fs-3 mb-1">Portfolio</span>
												<!-- <span class="text-muted mt-1 fw-semibold fs-7">Over 500 members</span> -->
											</h3>
											<div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to add new">
												<a href="portfolio_insert_form.php" class="btn btn-sm btn-light btn-active-primary" data-bs-target="#kt_modal_invite_friends">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
												<span class="svg-icon svg-icon-3">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
														<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->Add New</a>
											</div>
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body py-3">
											<!--begin::Table container-->
											<div class="table-responsive">
												<!--begin::Table-->
												<table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
													<!--begin::Table head-->
													<thead>
														<tr class="fw-bold text-muted">
															<th class="min-w-50px">S.No.</th>
															<th class="min-w-200px">Portfolio Name</th>
															<th class="min-w-200px">Portfolio tag Line</th>
															<th class="min-w-200px">Portfolio icon</th>
															<th class="min-w-200px">Portfolio Category</th>
															<th class="min-w-100px">Status</th>
															<th class="min-w-100px text-end">Actions</th>
														</tr>
													</thead>
													<!--end::Table head-->
													<!--begin::Table body-->
													<tbody>
													<?php 
														$s=1;
														while($rs=mysqli_fetch_assoc($result)){
													?>
														<tr>
															<td>
																<?php echo $s; $s++;?>
															</td>
															<td>
																<?php echo $rs['portfolio_name'];?>
															</td>
															<td> 
																<?php echo $rs['tag_line'];?>
															</td>
															<td>
																<img src="../../assets/admin_assets/portfolio_img/<?php echo $rs['portfolio_icon'];?>" width="150" height="120" >
															</td>
															<td>
																<?php echo $rs['categories'];?>
															</td>
															<td id="port_status">
															<?php if($rs['status']== '1'){ ?>
																<i class="fa fa-toggle-on" style='color: blue' onclick="change_status_2(<?php echo $rs['id']; ?>,'0')"></i>
															<?php }else{?>
																<i class='fa fa-toggle-off' style='color: red' onclick="change_status_2(<?php echo $rs['id']; ?>,'1')"></i>
															<?php }?>
															</td>
															<td> 
																<!-- edit portfolio  for database -->
																<div class="d-flex justify-content-end flex-shrink-0">
																<!-- <i class="fa fa-car"></i> -->
																<a href='portfolio_edit.php?edit_id= <?php echo $rs['id']; ?>'> 
																	<i class="fa fa-pencil-square-o fa-fw" aria-hidden="true" style="font-size: 25px;">
																	</i>
																</a>
																<!-- delete portfolio for database -->
																<a id="del_btn" onclick="delete_row( <?php echo $rs['id']; ?>)">
																	<i class="fa fa-trash fa-fw" aria-hidden="true" style="font-size: 25px;">
																	</i>
																</a>   
																</div>
															</td> 
														</tr>
														<?php } ?>
													</tbody>
													<!--end::Table body-->
												</table>
												<!--end::Table-->
											</div>
											<!--end::Table container-->
										</div>
										<!--begin::Body-->
									</div>
									<!--end::Tables Widget 9-->

<?php
	include('layout/footer.php');
?> 