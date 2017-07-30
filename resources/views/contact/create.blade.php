@extends('layouts.master',['pageTitle'=>'Contact'])
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
			@if(session()->has('messageenvoye'))
			<div class="alert alert-success">
                {{session()->get('messageenvoye')}}
			</div>
			@endif
			<h2>Get in Touch</h2>
			<p class="text-mute">If you having trouble with this service, please <a href="mailto:{{config('app.admin_email')}}"> ask for help</a>.</p>
			<form action="{{route('contact')}}" method="POST">
			{{csrf_field()}}
				<div class="form-group {{$errors->has('name')? 'has-error':''}}">
					<label for="name" class="control-label">
						Name
					</label>
					<input type="text" name="name" class="form-control" id="name" value="{{old('name')}}"required>
					{!!$errors->first('name','<span class="help-block">:message</span>')!!}
				</div>
				<div class="form-group {{$errors->has('email')? 'has-error':''}}">
					<label for="email" class="control-label">
						Email
					</label>
					<input type="text" name="email" class="form-control" id="email" value="{{old('email')}}" required>
					{!!$errors->first('email','<span class="help-block">:message</span>')!!}
				</div>
				<div class="form-group {{$errors->has('message')? 'has-error':''}}">
					<label for="message" class="control-label sr-only">
						Message
					</label>
					<textarea class="form-conrol well-lg" name="message" id="message" style="width: 100%; border-color: white" rows="10" required>{{old('message')}}</textarea>
					{!!$errors->first('message','<span class="help-block">:message</span>')!!}
				</div>
				<div class="form-group">
					<input type="submit" value="Submit Enquiry >>" class="form-control btn btn-info">
				</div>
			</form>
		</div>
	</div>
</div>
@endsection