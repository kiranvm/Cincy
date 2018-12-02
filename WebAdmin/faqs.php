<!-- start: page -->
	<section class="panel">
		<header class="panel-heading">
			<div class="panel-actions">
				<a href="#" class="fa fa-caret-down"></a>
				<a href="#" class="fa fa-times"></a>
			</div>
	
			<h2 class="panel-title">FAQs</h2>
		</header>
		<div class="panel-body">			
			<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
				<thead>
					<tr>
						<th>ID</th>
						<th>Question</th>
						<th>Answers</th>
						
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
				<?php
					$faqs_json =  file_get_contents("http://sbuddy-api-heroku.herokuapp.com/sbuddy/api/v1.0/list_faqs");
					
					$faqs = json_decode($faqs_json, true); 
				
							$ev_od = "even"; 					
						foreach ($faqs as $key => $value) 
						{
							foreach ($value as $faqDetails)
							{
								
								echo "<tr class='gradeA'> ";
									
								echo " <td>{$faqDetails['id']}</td>	" ; 
								echo " <td>{$faqDetails['name']}</td>	" ; 
								echo " <td>{$faqDetails['description']}</td>	" ; 
							
								echo " <td> 
											<i class='fa fa-edit'     style='cursor: pointer;font-size: 18px;' ></i> &nbsp;
											<i class='fa fa-trash-o' style='cursor: pointer;font-size: 18px;' onclick='delet_recipe({$faqDetails['id']})'></i> 
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