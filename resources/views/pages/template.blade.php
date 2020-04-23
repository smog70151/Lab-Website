<!-- Inherit  -->
@extends('pages.prototype')

@section('prototype-header')
	<link href="{{ asset('styles/index.css') }}" rel="stylesheet">
@endsection

@section('navbar-content')
	<div class="row h-100 py-5">
		<div class="col-sm-12 offset-md-2 col-md-4 my-auto align-items-center align-self-center justify-content-center">
      <img class="mx-auto d-block photo" src="/images/members/pywu.jpg" alt="Professor Photo">
    </div>
    <div class="col-sm-12 col-md-5 text-center align-self-center header-bg header-text">
			<br />
      <h3> Pei-Yuan Wu, 吳沛遠</h3>
			<p>Assistant Professor, EE, NTU
        <br />Email: peiyuanwu [AT] ntu.edu.tw
        <br />Phone/Fax: +886-2-33664687/+886-2-23671909
				<br />Office: EE2-234
        <br />Address: Department of Electrical Engineering, National Taiwan University, Taipei 106, Taiwan
			</p>
    </div>
	</div>
@endsection

@section('prototype-content')

@endsection
