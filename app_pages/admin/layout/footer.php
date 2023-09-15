<!--begin::Footer-->
<div id="kt_app_footer" class="app-footer">
							<!--begin::Footer container-->
							<div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
								<!--begin::Copyright-->
								<div class="text-dark order-2 order-md-1">
									<span class="text-muted fw-semibold me-1">&copy;2022. All rights reserved by</span>
									<a href="#" target="_blank" class="text-gray-800 text-hover-primary">Saurav Thakur</a>
								</div>
								<!--end::Copyright--> 
							</div>
							<!--end::Footer container-->
						</div>
						<!--end::Footer--> 
					</div>
					<!--end:::Main-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::App-->
	
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="../../assets/admin_assets/plugins/global/plugins.bundle.js"></script>
		<script src="../../assets/admin_assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="../../assets/admin_assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<script src="../../assets/admin_assets/cdn.amcharts.com/lib/5/index.js"></script>
		<script src="../../assets/admin_assets/cdn.amcharts.com/lib/5/xy.js"></script>
		<script src="../../assets/admin_assets/cdn.amcharts.com/lib/5/percent.js"></script>
		<script src="../../assets/admin_assets/cdn.amcharts.com/lib/5/radar.js"></script>
		<script src="../../assets/admin_assets/cdn.amcharts.com/lib/5/themes/Animated.js"></script>
		<script src="../../assets/admin_assets/cdn.amcharts.com/lib/5/map.js"></script>
		<script src="../../assets/admin_assets/cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
		<script src="../../assets/admin_assets/cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
		<script src="../../assets/admin_assets/cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
		<script src="../../assets/admin_assets/cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
		<script src="../../assets/admin_assets/cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
		<script src="../../assets/admin_assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="../../assets/admin_assets/js/widgets.bundle.js"></script>
		<script src="../../assets/admin_assets/js/custom/widgets.js"></script>
		<script src="../../assets/admin_assets/js/custom/apps/chat/chat.js"></script>
		<script src="../../assets/admin_assets/js/custom/utilities/modals/create-campaign.js"></script>
		<script src="../../assets/admin_assets/js/custom/utilities/modals/upgrade-plan.js"></script>
		<script src="../../assets/admin_assets/js/custom/utilities/modals/offer-a-deal/type.js"></script>
		<script src="../../assets/admin_assets/js/custom/utilities/modals/offer-a-deal/details.js"></script>
		<script src="../../assets/admin_assets/js/custom/utilities/modals/offer-a-deal/finance.js"></script>
		<script src="../../assets/admin_assets/js/custom/utilities/modals/offer-a-deal/complete.js"></script>
		<script src="../../assets/admin_assets/js/custom/utilities/modals/offer-a-deal/main.js"></script>
		<script src="../../assets/admin_assets/js/custom/utilities/modals/create-app.js"></script>
		<script src="../../assets/admin_assets/js/custom/utilities/modals/users-search.js"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
<script type="text/javascript">
// edit services
	// $(document).ready(function(){
	// 	$("#form_edit").submit(function(e){
	// 		e.preventDefault();
	// 		$.ajax({
	// 			type:"POST",
    //             url:"services_update.php",
    //             data:$(this).serialize(),
    //             success:function(data){
    //                 if(data=="success"){
    //                     swal({title: "Thankyou!",text: "Data Edit Successfully",icon: "success"}).then(function() {window.location ="services.php";});
    //                 }else{
    //                     swal({title: "sorry!",text: "Data Not Inserted!",icon: "error"}).then(function() {window.location ="services_edit.php";});
    //                 }
    //             }
	// 		});
	// 	});
	// });

	// services status change
	function change_status(id,status){
			$.ajax({
				type:"POST",
				url:"../admin/status_update.php",
				data:{row_id:id,status_id:status},//status_id/row_id vo name hai jis name se status.php page ke andr id ko get krenge ye sirf ek naam hai id ko get krne ka
				success:function(){
					// $("#status").html(data);
					swal({title: "hurray!",text: "status changed successfully",icon: "success"}).then(function() {window.location ="../admin/service.php";});
				}
			});
		}
		// portfolio status change
	function change_status_2(id,port_status){
		$.ajax({
			type:"POST",
			url:"../admin/portfolio_status_update.php",
			data:{row_id:id,status_id:port_status},
			success:function(){
				swal({title: "hurray!",text: "status changed successfully",icon: "success"}).then(function() {window.location ="../admin/portfolio.php";});
			} 
		})
	}
	// delete services
	function delete_service_row(id) {
		// alert("oops");
            $.ajax({
                type:"POST", 
                url:"services_delete.php",
                data:{delete_id:id},
                success:function(){
                    swal("Okay", "your data Deleted Succesfully ", "success").then(function() {window.location ="service.php";});;
                }
            }); 
        }
		// delete portfolio
	function delete_row(id) {
            $.ajax({
                type:"POST",
                url:"portfolio_delete.php",
                data:{delete_id:id},
                success:function(){
                    swal("Okay", "your data Deleted Succesfully ", "success").then(function() {window.location ="portfolio.php";});;
                }
            });
        }
		// function change_status_off(id){
		// 	$.ajax({
		// 		type:"POST",
		// 		url:"../admin/status_off.php",
		// 		data:{status_id:id},//status_id vo name hai jis name se status.php page ke andr id ko get krenge ye sirf ek naam hai id ko get krne ka
		// 		success:function(){
		// 			// $("#status").html(data);
		// 			swal({title: "hurray!",text: "status off successfully",icon: "success"}).then(function() {window.location ="../admin/service.php";});
		// 		}
		// 	});
		// }
		// function change_status_on(id){
		// 	$.ajax({
		// 		type:"POST",
		// 		url:"../admin/status_on.php",
		// 		data:{status_id:id},//status_id vo name hai jis name se status.php page ke andr id ko get krenge ye sirf ek naam hai id ko get krne ka
		// 		success:function(){
		// 			swal({title: "hurray!",text: "status on successfully",icon: "success"}).then(function() {window.location ="../admin/service.php";});
		// 		}
		// 	});
		// }
</script>