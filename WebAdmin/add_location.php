<!-- start: page -->

<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
				<div class="panel-actions">
					<a href="#" class="fa fa-caret-down"></a>
					<a href="#" class="fa fa-times"></a>
				</div>

				<h2 class="panel-title">Add Location</h2>
			</header>
			
			<div class="panel-body">
				<form class="form-horizontal form-bordered" method="post" action="http://sbuddy-api-heroku.herokuapp.com/sbuddy/api/v1.0/add_location" >
				
					<div class="form-group">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-sm-4 control-label">Name</label>
									<div class="col-sm-6">
										<input type="text" name="name" id="name" class="form-control" id="inputDefault">
									</div>
								</div>
							</div>
					</div>
                    <div class="form-group">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-sm-4 control-label">latitude</label>
									<div class="col-sm-6">
										<input type="text" name="latitude" id="latitude"  class="form-control" id="inputDefault">
									</div>
								</div>
							</div>
                    </div>
                    <div class="form-group">
                            <div class="col-md-6">
								<div class="form-group">
									<label class="col-sm-4 control-label">longitude</label>
									<div class="col-sm-6">
										<input type="text" name="longitude" id="longitude"  class="form-control" id="inputDefault">
									</div>
								</div>
							</div>
                    </div>
														
					<div class="form-group">
						<label class="col-sm-2 control-label" for="textareaDefault">Description</label>
						<div class="col-sm-6">
							<textarea name="description" id="description" class="form-control" rows="3" id="textareaDefault"></textarea>
						</div>

					<div class="form-group">
						<label class="col-md-3 control-label" for="inputDefault"></label>
						<div class="col-md-6">
							<button type="button" onclick="add_location()" class="mb-xs mt-xs mr-xs btn btn-primary">Add Location</button>
						</div>
					</div>

				</form>
			</div>
		</section>

	</div>
</div>

