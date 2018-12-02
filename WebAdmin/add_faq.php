<!-- start: page -->
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
				<div class="panel-actions">
					<a href="#" class="fa fa-caret-down"></a>
					<a href="#" class="fa fa-times"></a>
				</div>

				<h2 class="panel-title">Add FAQs</h2>
			</header>
			
			<div class="panel-body">
				<form class="form-horizontal form-bordered" method="post" action="http://sbuddy-api-heroku.herokuapp.com/sbuddy/api/v1.0/add_faqs" >
								<div class="form-group">
									<label class="col-md-3 control-label" for="faqquestion">Question</label>

									<div class="col-md-6">
										<textarea name="question" class="form-control" rows="3" id="faqquestion"></textarea>
									</div>
								</div>
														
					<div class="form-group">
						<label class="col-md-3 control-label" for="faqanswer">Answer</label>
						<div class="col-md-6">
							<textarea name="answer" class="form-control" rows="3" id="faqanswer"></textarea>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-md-3 control-label" for="inputDefault"></label>
						<div class="col-md-6">
							<button type="button" onclick="add_faq()" class="mb-xs mt-xs mr-xs btn btn-primary">Add faq</button>
						</div>
					</div>
				</form>
			</div>
		</section>

	</div>
</div>

