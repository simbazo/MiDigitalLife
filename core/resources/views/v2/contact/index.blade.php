@extends('v2.templates.master')

@section('content')
<section class="single-page-title">
	<div class="container text-center">
		<h2>Contact us</h2>
	</div>
</section>
<!-- .page-title -->

<section class="contact-form ptb-100">
	<div class="container text-center">
	<h2>If you would like to speak with us about how we can work with, <br> you to create an app you and your clients' love, please fill <br>out the form below and we will get back to you.</h2>

		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<form>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group user-name">
								<label for="nameFive-first" class="sr-only">Name</label>
								<input type="text" class="form-control" required="" id="nameFive-first" placeholder="Name & Surname">
							</div>

							<div class="form-group user-email">
								<label for="emailFive" class="sr-only">Email</label>
								<input type="email" class="form-control" required="" id="emailFive" placeholder="Email Address">
							</div>


							<div class="form-group user-phone">
								<label for="websiteOne" class="sr-only">Phone</label>
								<input type="text" class="form-control" required="" id="websiteOne" placeholder="Phone">
							</div>
						</div><!-- /.col-md-6 -->
						<div class="col-md-6">
							<div class="form-group user-message">
								<label for="messageOne" class="sr-only">Message</label>
								<textarea class="form-control" required="" id="messageOne" placeholder="Write Message"></textarea>
							</div>
						</div><!-- /.col-md-6 -->
					</div><!-- /.row-->
					<button type="submit" class="btn btn-primary" disabled>Send Message</button>
				</form>
			</div><!-- /.col-md-8 -->
		</div>

	</div>
</section>
@endsection