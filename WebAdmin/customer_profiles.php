<!-- start: page -->
	<section class="panel">
		<header class="panel-heading">
			<div class="panel-actions">
				<a href="#" class="fa fa-caret-down"></a>
				<a href="#" class="fa fa-times"></a>
			</div>
	
			<h2 class="panel-title">Customer Profiles</h2>
		</header>
		<div class="panel-body">			
			<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Email ID</th>
						<th>Persona</th>
						<th>Items</th>
						<th>Queries</th>
					</tr>
				</thead>
				<tbody>
				<?php
					$items_json =  file_get_contents("http://sbuddy-api-heroku.herokuapp.com/sbuddy/api/v1.0/items");
					
					$items = json_decode($items_json, true); 
				
							$ev_od = "even"; 					
						foreach ($items as $key => $value) 
						{
							foreach ($value as $itemDetails)
							{
								
								echo "<tr class='gradeA'> ";
									
								echo " <td>{$itemDetails['id']}</td>	" ; 
								echo " <td>{$itemDetails['name']}</td>	" ; 
								echo " <td>{$itemDetails['email']}</td>	" ; 
								echo " <td>{$itemDetails['persona']}</td>	" ; 
								echo " <td>{$itemDetails['items']}</td>	" ; 
								echo " <td>{$itemDetails['queries']}</td>	" ;
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