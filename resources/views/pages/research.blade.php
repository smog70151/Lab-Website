<!-- Inherit  -->
@extends('pages.prototype')

@section('prototype-header')
	<link href="{{ asset('styles/research.css') }}" rel="stylesheet">
@endsection

@section('navbar-content')
	<div class="row h-50 py-4">
		<div class="col-sm-10 offset-md-2 col-md-3 h-25 align-self-center">
			<div class="text-center">
				<img class="bg-group" src="{{ asset('images/research/privacy_color_1.png') }}" alt="ICON - COURSES" class="img-thumbnail">
			</div>
    </div>
		<div class="col-sm-10 offset-md-2 col-md-3 h-25 align-self-center">
			<div class="text-center">
				<img class="bg-group" src="{{ asset('images/research/authentication_color_0.png') }}" alt="ICON - COURSES" class="img-thumbnail">
			</div>
    </div>
	</div>
	<div class="row h-50">
		<div class="col-sm-10 offset-md-2 col-md-3 h-25 align-self-center">
			<div class="text-center">
				<img class="bg-group" src="{{ asset('images/research/kernel-machine-wiki_color_0.svg') }}" alt="ICON - COURSES" class="img-thumbnail">
			</div>
    </div>
		<div class="col-sm-10 offset-md-2 col-md-3 h-25 align-self-center">
			<div class="text-center">
				<img class="bg-group" src="{{ asset('images/research/neural-network_color_0.png') }}" alt="ICON - COURSES" class="img-thumbnail">
			</div>
    </div>
	</div>
@endsection

@section('prototype-content')
<div class="container">
	<div class="title justify-items-center">
		<div class="row w-50">
			<h5> Privacy Preserving Machine Learning </h5>
			<hr>
			<p>We study the embedding of cryptography, such as homeomorphic encryption and garbled circuits, into machine learning algorithms, in order to reduce the risk of exposing confidential personal information.</p>
		</div>
		<div class="row w-50">
			<h5> Active Authentication </h5>
			<hr>
			<p>In collaboration with Princeton University and Iowa State University, we study how to continuously and unintrusively authenticate user's identity based on his/her behavior biometrics. (CBS news: https://www.cnet.com/news/one-way-to-make-passwords-obsolete-just-keep-typing/)</p>
		</div>
		<div class="row w-50">
			<h5> Kernel Methods </h5>
			<hr>
			<p> We study the cost-effectiveness and robustness issues in kernel-based machine learning. </p>
		</div>
		<div class="row w-50">
			<h5> Deep Learning Applications </h5>
			<hr>
			<p> Scene text recognition, image dehazing, pose estimation. </p>
		</div>
	</div>
</div>
@endsection
