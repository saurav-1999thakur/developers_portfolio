<?php 
include('layout/header.php');
include('layout/sidebar.php');

include('../../db_con/db_conn.php');
$query="SELECT * FROM `contact`";
$result=mysqli_query($connect,$query);
?>     
                                    <!--begin::Tables Widget 9-->
                                    <div class="card mb-5 mb-xl-8">
										<!--begin::Header-->
										<div class="card-header border-0 pt-5">
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bold fs-3 mb-1">Contacts Members</span>
											</h3>
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
															<th class="min-w-200px">Name</th>
															<th class="min-w-150px">Contact No.</th>
															<th class="min-w-150px">Email</th>
															<th class="min-w-100px">Subjects</th>
															<th class="min-w-100px ">Message</th>
														</tr>
													</thead>
													<!--end::Table head-->
													<!--begin::Table body-->
													<tbody>
													<?php while($rs=mysqli_fetch_assoc($result)){?>
														<tr>
															<td>
																<?php echo $rs['id'];?>
															</td>
															<td>
																<?php echo $rs['name'];?>
															</td>
															<td>
																<?php echo $rs['phn_no'];?>
															</td>
															<td>
																<?php echo $rs['email'];?>
															</td>
															<td>
															    <?php echo $rs['subject'];?>
															</td>
															<td>
															    <?php echo $rs['your_msg'];?>
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