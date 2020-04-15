<!-- Inherit  -->
@extends('pages.prototype')

@section('prototype-header')
	<link href="{{ asset('styles/index.css') }}" rel="stylesheet">
@endsection

@section('navbar-content')
	<div class="row justify-content-center h-100">
    <div class="col-md-8 col-sm-12 text-center align-self-center header-bg header-text">
			<br />
      <h5> 國立臺灣大學電機工程學系 </h5>
			<h5> 機器學習與估計理論實驗室 </h5>
			<h5> MLE Lab, NTU </h5>
			<!-- TODO: Lab Info -->
			<p> About this lab ...
			</p>
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
						<b>最新訊息</b>
					</div>
					<ul class="list-group">
					  <li class="list-group-item">
							<div class="d-flex w-100 justify-content-between">
								<span> Dummy Post 01 </span>
								<div class="">
									<button class="btn btn-outline-secondary btn-sm">
										<i class="far fa-file-pdf"></i>
										 PDF
									</button>
									<button class="btn btn-outline-primary btn-sm">
										<i class="fab fa-github"></i>
										 CODE
									</button>
								</div>
							</div>
						</li>
					  <li class="list-group-item">Dummy Post 02</li>
					  <li class="list-group-item">Dummy Post 03</li>
					  <li class="list-group-item">Dummy Post 04</li>
					  <li class="list-group-item">Dummy Post 05</li>
						<li class="list-group-item">Dummy Post 06</li>
					  <li class="list-group-item">Dummy Post 07</li>
					  <li class="list-group-item">Dummy Post 08</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
@endsection
