<!-- Inherit  -->
@extends('pages.prototype')

@section('prototype-header')
	<link href="{{ asset('styles/research.css') }}" rel="stylesheet">
@endsection

@section('navbar-content')
	<div class="row h-50 py-5">
		<div class="col-sm-10 offset-md-2 col-md-3 h-25 align-self-center">
			<div class="text-center">
				<figure class="sniper">
					<img src="{{ asset('images/research/authentication_color_0.png') }}" alt="Active Authentication" >
					<figcaption class="text-center"> 主動識別 </figcaption>
				</figure>
			</div>
		</div>
		<div class="col-sm-10 offset-md-2 col-md-3 h-25 align-self-center">
			<div class="text-center">
				<figure class="sniper">
					<img src="{{ asset('images/research/privacy_color_1.png') }}" alt="Students" >
					<figcaption class="text-center"> 隱私維護機器學習 </figcaption>
				</figure>
			</div>
		</div>
	</div>
	<div class="row h-50 py-5">
		<div class="col-sm-10 offset-md-2 col-md-3 h-25 align-self-center">
			<div class="text-center">
				<figure class="sniper">
					<img src="{{ asset('images/members/professor.png') }}" alt="Professor" >
					<figcaption class="text-center"> 核方法 </figcaption>
				</figure>
			</div>
		</div>
		<div class="col-sm-10 offset-md-2 col-md-3 h-25 align-self-center">
			<div class="text-center">
				<figure class="sniper">
					<img src="{{ asset('images/research/neural-network_color_0.png') }}" alt="Students" >
					<figcaption class="text-center"> 深度學習應用 </figcaption>
				</figure>
			</div>
		</div>
	</div>
@endsection

@section('prototype-content')
<div class="container py-4">
	<div class="row">
		<div class="col-sm-12 offset-md-2 col-md-8">
			<div class="card">
				<div class="card-header">
					<i class="fas fa-bell"></i>
					<b> 研究領域摘要 </b>
				</div>
				<ul class="list-group">
					<li class="list-group-item">
						<div class="w-100 justify-content-between">
							<h5 class="text-left"> 主動識別 </h5>
							<hr />
							<p class="text-justify"> 本研究團隊與普林斯頓大學及愛荷華州立大學合作，透過分析人機互動過程中使用者的生物特徵與行為特徵進行持續性且非干擾性身分識別。 </p>
							<p class="text-right">
								<a href="https://www.cnet.com/news/one-way-to-make-passwords-obsolete-just-keep-typing/">
									<button class="btn btn-outline-secondary btn-sm">
										<i class="far fa-file-pdf"></i>
										 NEWS
									</button>
								</a>
							</p>
						</div>
					</li>
					<li class="list-group-item">
						<div class="w-100 justify-content-between">
							<h5 class="text-left"> 隱私維護機器學習</h5>
							<hr />
							<p class="text-justify"> 將同態加密、亂碼電路等加密機制加入機器學習演算法，以降低個人隱私資料在機器學習中遭到揭露的風險。 </p>
							<p class="text-right">
							</p>
						</div>
					</li>
					<li class="list-group-item">
						<div class="w-100 justify-content-between">
							<h5 class="text-left"> 核方法</h5>
							<hr />
							<p class="text-justify"> 提升核方法的運算效率與強健性，以應用於大數據分析。</p>
							<p class="text-right">
							</p>
						</div>
					</li>
					<li class="list-group-item">
						<div class="w-100 justify-content-between">
							<h5 class="text-left"> 深度學習應用 </h5>
							<hr />
							<p class="text-justify"> 場景文字識別、影像除霧、姿態識別。 </p>
							<p class="text-right">
							</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
@endsection
