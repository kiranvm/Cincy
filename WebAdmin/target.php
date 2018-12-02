<!-- start: page -->
	<section class="panel">
		<header class="panel-heading">
			<div class="panel-actions">
				<a href="#" class="fa fa-caret-down"></a>
				<a href="#" class="fa fa-times"></a>
			</div>
	
			<h2 class="panel-title">items</h2>
		</header>
		<div class="panel-body">
			<div> 
				<a href="index.php?act=add_item" >  
				<button type="button" class="mb-xs mt-xs mr-xs btn btn-primary">Add Item</button>
				</a> 
			</div> 
			<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
				<thead>
					
					<tr>
						<th>ID</th>
						<th>title</th>
						<th>Description</th>
						<th>Ingredients</th>
						<th>Nutritiona</th>
						<th>price</th>
						<th>Actions</th>
					</tr>
				
				</thead>
				<tbody>
				<?php
					$items_json =  file_get_contents("http://sbuddy-api-heroku.herokuapp.com/sbuddy/api/v1.0/promotions");
					
					$items = json_decode($items_json, true); 
				
							$ev_od = "even"; 					
						foreach ($items as $key => $value) 
						{
							foreach ($value as $itemDetails)
							{
								
								echo "<tr class='gradeA'> ";
									
								echo " <td>{$itemDetails['id']}</td>	" ; 
								echo " <td>{$itemDetails['title']}</td>	" ; 
								echo " <td>{$itemDetails['description']}</td>	" ; 
								echo " <td>{$itemDetails['ingredients']}</td>	" ; 
								echo " <td>{$itemDetails['nutrition']}</td>	" ; 
								echo " <td>{$itemDetails['price']}</td>	" ; 
								echo " <td> - </td>	" ;
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