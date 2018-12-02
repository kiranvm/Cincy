<!-- start: page -->
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
				<div class="panel-actions">
					<a href="#" class="fa fa-caret-down"></a>
					<a href="#" class="fa fa-times"></a>
				</div>

				<h2 class="panel-title">Add Faculty</h2>
			</header>
			
			<div class="panel-body">
				<form class="form-horizontal form-bordered" method="post" action="http://localhost:5000/add_faculties" >
								<div class="form-group">
									<label class="col-md-3 control-label" for="facultyName">Faculty name</label>

									<div class="col-md-6">
										<input type="text" name="name" class="form-control" id="facultyName">
									</div>
								</div>
														
					<div class="form-group">
						<label class="col-md-3 control-label" for="facultyDescription">Office Hours</label>
						<div class="col-md-6">
							<textarea name="officehours" class="form-control" rows="3" id="facultyDescription"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="facultyTags">Email Id</label>
						<div class="col-md-6">
							<textarea name="emailid" class="form-control" rows="3" id="facultyTags"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="addfaculty"></label>
						<div class="col-md-6">
							<button type="button" onclick="add_faculty()" class="mb-xs mt-xs mr-xs btn btn-primary">Add Faculty</button>
						</div>
					</div>
				</form>
			</div>
		</section>

	</div>
</div>

