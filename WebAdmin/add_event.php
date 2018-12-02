<!-- start: page -->

<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
				<div class="panel-actions">
					<a href="#" class="fa fa-caret-down"></a>
					<a href="#" class="fa fa-times"></a>
				</div>

				<h2 class="panel-title">Add Events</h2>
			</header>
			
			<div class="panel-body">
				<form class="form-horizontal form-bordered" method="post" action="http://sbuddy-api-heroku.herokuapp.com/sbuddy/api/v1.0/add_events" >
				
				
					<div class="form-group">
						<label class="col-md-3 control-label" for="textareaDefault">Name</label>
						<div class="col-md-6">
								<input type="text" name="name" id="name"  class="form-control" id="inputDefault">
						</div>
					</div>		<div class="form-group">
						<label class="col-md-3 control-label" for="textareaDefault">date</label>
						<div class="col-md-6">
								<input type="date" name="date" id="date"  class="form-control" id="inputDefault">
						</div>
					</div>		<div class="form-group">
						<label class="col-md-3 control-label" for="textareaDefault">Location</label>
						<div class="col-md-6">
								<input type="text" name="location" id="location"  class="form-control" id="inputDefault">
						</div>
					</div>								
					<div class="form-group">
						<label class="col-md-3 control-label" for="textareaDefault">Description</label>
						<div class="col-md-6">
							<textarea name="description" id="description" class="form-control" rows="3" id="textareaDefault"></textarea>
						</div>
					</div>								
					
					<div class="form-group">
						<label class="col-md-3 control-label" for="textareaDefault">Organiser</label>
						<div class="col-md-6">
							<textarea name="organiser" id="organiser" class="form-control" rows="3" id="textareaDefault"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="textareaDefault">Contact</label>
						<div class="col-md-6">
							<textarea name="contact" id="contact" class="form-control" rows="3" id="textareaDefault"></textarea>
						</div>
					</div>
                    <div class="form-group">
						<label class="col-md-3 control-label" for="textareaDefault">Time</label>
						<div class="col-md-6">
							<input type="time" name="time" id="time" class="form-control" rows="3" id="textareaDefault"></input>
						</div>
					</div>
	
					<div class="form-group">
						<label class="col-md-3 control-label" for="inputDefault"></label>
						<div class="col-md-6">
							<button type="button" onclick="add_event()" class="mb-xs mt-xs mr-xs btn btn-primary">Add Event</button>
						</div>
					</div>

				</form>
			</div>
		</section>

	</div>
</div>

