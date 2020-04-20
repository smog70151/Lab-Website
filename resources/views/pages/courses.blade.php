<!-- Inherit  -->
@extends('pages.prototype')

@section('prototype-header')
	<link href="{{ asset('styles/courses.css') }}" rel="stylesheet">
@endsection

@section('navbar-content')
	<div class="row h-100 py-5">
		<div class="col-sm-10 offset-md-4 col-md-4 align-self-center h-25">
			<div class="text-center">
				<img class="bg-group" src="{{ asset('images/courses/books.png') }}" alt="ICON - COURSES" class="img-thumbnail">
			</div>
    </div>
	</div>
@endsection

@section('prototype-content')
	<div class="container py-5">
		<div class="row">
			<div class="col-sm-10 offset-md-2 col-md-8">
				<ul>
					<li class="py-2">
						<h5> 資料結構 <i class="fas fa-sort"></i></h5>
						<blockquote>
							<!-- XXX: 資料結構課程資訊 -->
							<p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
							</p>
						</blockquote>
						<p class="text-right">
							<button class="btn btn-outline-secondary btn-sm">
								<i class="fas fa-chalkboard"></i> SPRING 2020
							</button>
						</p>
					</li>
					<li>
						<h5> 機器學習 <i class="fas fa-project-diagram"></i></h5>
						<blockquote>
							<!-- XXX: 機器學習課程資訊 -->
							<p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
							</p>
							<p class="text-right">
								<button class="btn btn-outline-secondary btn-sm">
									<i class="fas fa-chalkboard"></i> FALL 2019
								</button>
							</p>
						</blockquote>
					</li>
				</ul>
			</div>
		</div>
	</div>
@endsection
