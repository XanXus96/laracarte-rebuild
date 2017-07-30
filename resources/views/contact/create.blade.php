@extends('layouts.master',['pageTitle'=>'Contact'])
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
			<h2>Get in Touch</h2>
			<p class="text-mute">If you having trouble with this service, please <a href="mailto:marouanekafou@gmail.com"> ask for help</a>.</p>
			<form action="#" method="POST">
				<div class="form-group">
					<label for="name" class="control-label">
						Name
					</label>
					<input type="text" name="name" class="form-control" id="name" required>
				</div>
				<div class="form-group">
					<label for="email" class="control-label">
						Email
					</label>
					<input type="text" name="email" class="form-control" id="email" required>
				</div>
				<div class="form-group">
					<label for="message" class="control-label sr-only">
						Message
					</label>
					<textarea class="form-conrol well-lg" name="message" id="message" style="width: 100%; border-color: white" rows="10" required></textarea>
				</div>
				<div class="form-group">
					<input type="submit" value="Submit Enquiry >>" class="form-control btn btn-info">
				</div>
			</form>
		</div>
	</div>
</div>
@endsection