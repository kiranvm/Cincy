<!-- start: page -->
	<section class="panel">
		<header class="panel-heading">
			<div class="panel-actions">
				<a href="#" class="fa fa-caret-down"></a>
				<a href="#" class="fa fa-times"></a>
			</div>
	
			<h2 class="panel-title">Events</h2>
		</header>
		<div class="panel-body">
			<div> 
				<a href="index.php?act=add_event" >  
				<button type="button" class="mb-xs mt-xs mr-xs btn btn-primary">Add Event</button>
				</a> 
			</div> 
			<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
				<thead>
					<tr>
						<th>ID</th>
						<th>title</th>
						<th>Description</th>
						<th>Organiser</th>
						<th>Contact</th>
						<th>location</th>
						<th>time</th>
						<th>date</th>
					</tr>
				</thead>
				<tbody>
				<?php
					$events_json =  file_get_contents("http://sbuddy-api-heroku.herokuapp.com/sbuddy/api/v1.0/events");
					
					$events = json_decode($events_json, true); 
				
							$ev_od = "even"; 					
						foreach ($events as $key => $value) 
						{
							foreach ($value as $eventDetails)
							{
								
								echo "<tr class='gradeA'> ";
									
								echo " <td>{$eventDetails['id']}</td>	" ; 
								echo " <td>{$eventDetails['name']}</td>	" ; 
								echo " <td>{$eventDetails['description']}</td>	" ; 
								echo " <td>{$eventDetails['organiser']}</td>	" ; 
								echo " <td>{$eventDetails['contact']}</td>	" ; 
								echo " <td>{$eventDetails['location']}</td>	" ; 
								echo " <td>{$eventDetails['time']}</td>	" ; 
								echo " <td>{$eventDetails['date']}</td>	" ; 
								echo " <td> 
											<i class='fa fa-edit'     style='cursor: pointer;font-size: 18px;' ></i> &nbsp;
											<i class='fa fa-trash-o' style='cursor: pointer;font-size: 18px;' onclick='delet_event({$eventDetails['id']})'></i> 
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