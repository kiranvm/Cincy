<!-- start: page -->
	<section class="panel">
		<header class="panel-heading">
			<div class="panel-actions">
				<a href="#" class="fa fa-caret-down"></a>
				<a href="#" class="fa fa-times"></a>
			</div>
	
			<h2 class="panel-title">locations</h2>
		</header>
		<div class="panel-body">
			<div> 
				<a href="index.php?act=add_promotion" >  
				<button type="button" class="mb-xs mt-xs mr-xs btn btn-primary">Add Location</button>
				</a> 
			</div> 
			<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
				<thead>
					<tr>
						<th>ID</th>
						<th>title</th>
						<th>Description</th>
						<th>latitude</th>
						<th>longitude</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
				<?php
					$locations_json =  file_get_contents("http://sbuddy-api-heroku.herokuapp.com/sbuddy/api/v1.0/locations");
					
						$locations = json_decode($locations_json, true); 
						foreach ($locations as $key => $value) 
						{
							foreach ($value as $locationDetails)
							{
								//print_r($locationDetails); exit;
								//Array ( [category] => All items [description] => steep 10 % off [expirydate] => 12/01/2018 [id] => 1 [items] => 10,11,12 [name] => Black Friday [persona] => healthy,fastfood )
								echo "<tr class='gradeA'> ";
								echo " <td>{$locationDetails['id']}</td>	" ; 
								echo " <td>{$locationDetails['name']}</td>	" ; 
								echo " <td>{$locationDetails['description']}</td>	" ; 
								echo " <td>{$locationDetails['latitude']}</td>	" ; 
								echo " <td>{$locationDetails['longitude']}</td>	" ; 
								echo " <td> 
											<i  class='fa fa-edit'     style='cursor: pointer;font-size: 18px;' ></i> &nbsp;
											<i  class='fa fa-trash-o' style='cursor: pointer;font-size: 18px;' onclick='delet_promotion({$locationDetails['id']})'></i> &nbsp;
											<i class='fa fa-info-circle' style='cursor: pointer;font-size: 18px;' onclick='view_permotion({$locationDetails['id']})'></i> 
										</td>"; 
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