<!-- start: page -->
	<section class="panel">
		<header class="panel-heading">
			<div class="panel-actions">
				<a href="#" class="fa fa-caret-down"></a>
				<a href="#" class="fa fa-times"></a>
			</div>
	
			<h2 class="panel-title">Faculty</h2>
		</header>
		<div class="panel-body">			
			<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
				<thead>
					<tr>
						<th>id</th>
						<th>Name</th>
						<th>Office Hours</th>
						<th>Email Id</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
				<?php
					$faculties_json =  file_get_contents("http://localhost:5000/sbuddy/api/v1.0/list_faculties");
					
					$faculties = json_decode($faculties_json, true); 
				
							$ev_od = "even"; 					
						foreach ($faculties as $key => $value) 
						{
							foreach ($value as $facultyDetails)
							{
								
								echo "<tr class='gradeA'> ";
									
								echo " <td>{$facultyDetails['id']}</td>	" ; 
								echo " <td>{$facultyDetails['name']}</td>	" ;
								echo " <td>{$facultyDetails['officehours']}</td>	" ; 
								echo " <td>{$facultyDetails['emailid']}</td>	" ;
								echo " <td> 
											<i class='fa fa-edit'     style='cursor: pointer;font-size: 18px;' ></i> &nbsp;
											<i class='fa fa-trash-o' style='cursor: pointer;font-size: 18px;' onclick='delet_faculty({$facultyDetails['id']})'></i> 
											</td>	" ;
								echo "</tr>"; 
							
							if ($ev_od == "even")
							{ $ev_od = "odd"; } else { $ev_od = "even"; }
							}
						}
					
					?>
				
				</tbody>
			</table>
		</div>
	</section>
						
<!-- end: page -->