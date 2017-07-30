@extends('layouts.master',['pageTitle'=>'About'])
@section('content')
<div class="container">
	<h2>What is Laracarte?</h2>
	<p>Laracarte is a clone app of <a href="laramap.com" target="_blank">Laramap.com</a>.</p>
	<div class="row">
	<p class="alert alert-warning col-md-6">
	 <strong><i class="fa fa-exclamation-triangle"></i> This app has been built by <a href="http://instagram.com/maroulu">@maroulu</a> for learning purposes.</strong></p></div>
	<p>Feel free to help to improve the source code.</p>
	<hr>
	<h2>What is Laramap?</h2>
	<p>Laramap is the website by which Laracarte was inspired :).</p>
	<p>More info <a href="http://laramap.com/p/about">here.</a></p>

	<h2>Which tools and services are used in Laracarte?</h2>
	<p>Basically it's built on Laravel & Bootstrap. But there's a bunch of services used for email and other sections.</p>
	<ul>
	<li>Laravel</li>
	<li>Bootstrap</li>
	<li>Amazon S3</li>
	<li>Mandrill</li>
	<li>Google Maps</li>
	<li>Gravatar</li>
	<li>Antony Martin's Geolocation Package</li>
	<li>Michel Fortin's Markdown Parser Package</li>
	<li>Heroku</li>
	</ul>
</div>
@endsection