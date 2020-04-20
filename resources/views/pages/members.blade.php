<!-- Inherit  -->
@extends('pages.prototype')

@section('prototype-header')
	<link href="{{ asset('styles/members.css') }}" rel="stylesheet">
@endsection

@section('navbar-content')
	<div class="row h-100 py-5">
		<div class="col-sm-10 offset-md-2 col-md-3 h-25 align-self-center">
			<div class="text-center">
				<a href="#professor">
					<img class="bg-group" src="{{ asset('images/members/professor.png') }}" alt="Professor" class="img-thumbnail">
				</a>
			</div>
    </div>
    <div class="col-sm-10 offset-md-2 col-md-3 h-25 align-self-center">
			<div class="text-center">
				<a href="#students">
					<img class="bg-group" src="{{ asset('images/members/boy.png') }}" alt="Students" class="img-thumbnail">
				</a>
			</div>
		</div>
	</div>
@endsection

@section('prototype-content')
<div id="professor">
	<div class="container py-5">
		<div class="row">
			<div class="col-sm-10 offset-md-2 col-md-8">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title"> 吳沛遠 </h5>
						<h6 class="card-subtitle mb-2 text-muted"> 國立台灣大學電機工程學系 助理教授 </h6>
					</div>
					<div class="card-body">
						<i class="fab fa-buffer"></i>
						<a class="card-link" href="http://w3.ee.ntu.edu.tw/profile1?id=1060803"> 個人網站 </a>
					</div>
					<div class="card-body">
						<ul>
							<li> 辦公室 </li>
							<li> 電話 </li>
							<li> 傳真 </li>
							<li> 電子信箱 </li>
						</ul>
					</div>
					<div class="card-footer">
						<!-- XXX: Self Intro -->
						<pre> Intro ...</pre>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="students">
	<div class="container py-5">
		<div class="row">
			<div class="gallery_product col-lg-3 col-md-3 col-sm-3 col-xs-6 filter hdpe">
	      <img src="{{ asset('images/members/girl.png') }}" class="img-thumbnail">
	    </div>

			<div class="gallery_product col-lg-3 col-md-3 col-sm-3 col-xs-6 filter hdpe">
	      <img src="{{ asset('images/members/boy.png') }}" class="img-thumbnail">
	    </div>

			<div class="gallery_product col-lg-3 col-md-3 col-sm-3 col-xs-6 filter hdpe">
	      <img src="{{ asset('images/members/boy.png') }}" class="img-thumbnail">
	    </div>

			<div class="gallery_product col-lg-3 col-md-3 col-sm-3 col-xs-6 filter hdpe">
	      <img src="{{ asset('images/members/boy.png') }}" class="img-thumbnail">
	    </div>

			<div class="gallery_product col-lg-3 col-md-3 col-sm-3 col-xs-6 filter hdpe">
	      <img src="{{ asset('images/members/girl.png') }}" class="img-thumbnail">
	    </div>

			<div class="gallery_product col-lg-3 col-md-3 col-sm-3 col-xs-6 filter hdpe">
	      <img src="http://fakeimg.pl/365x365/" class="img-thumbnail">
	    </div>
		</div>
	</div>
</div>
@endsection
