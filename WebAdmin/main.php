<?php
					$items_json =  file_get_contents("http://sbuddy-api-heroku.herokuapp.com/sbuddy/api/v1.0/dashboard");
					
					$items = json_decode($items_json, true); 
					//print_r($items);exit;
						// Array ( [('health',)] => 0 [item_count] => 2 [promotions_count] => 1 [recipes_count] => 1 )
					
					?>
<div class="col-md-6 col-lg-12 col-xl-6">
							<div class="row">
								<div class="col-md-12 col-lg-6 col-xl-6">
									<section class="panel panel-featured-left panel-featured-primary">
										<div class="panel-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-primary">
														<i class="fa fa-map-marker"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">locations</h4>
														<div class="info">
															<strong class="amount"><?php echo "{$items['promotions_count']}" ?></strong>
															
														</div>
													</div>													
												</div>
											</div>
										</div>
									</section>
								</div>
								<div class="col-md-12 col-lg-6 col-xl-6">
									<section class="panel panel-featured-left panel-featured-tertiary">
										<div class="panel-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-tertiary">
														<i class="fa fa-list-alt"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Total Events</h4>
														<div class="info">
															<strong class="amount"><?php echo "{$items['item_count']}" ?></strong>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
								<div class="col-md-12 col-lg-6 col-xl-6">
									<section class="panel panel-featured-left panel-featured-quartenary">
										<div class="panel-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-quartenary">
														<i class="fa fa-question-circle"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">FAQs</h4>
														<div class="info">
															<strong class="amount"><?php echo "{$items['recipes_count']}" ?></strong>
														</div>
													</div>													
												</div>
											</div>
										</div>
									</section>
								</div>
								<div class="col-md-12 col-lg-6 col-xl-6">
									<section class="panel panel-featured-left panel-featured-quartenary">
										<div class="panel-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-quartenary">
														<i class="fa fa-male"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Faculty</h4>
														<div class="info">
															<strong class="amount"><?php echo "{$items['personas_count']}" ?></strong>
														</div>
													</div>													
												</div>
											</div>
										</div>
									</section>
								</div>
							</div>
						</div>