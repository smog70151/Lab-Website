<!-- Inherit  -->
@extends('pages.prototype')

@section('prototype-header')
	<link href="{{ asset('styles/members.css') }}" rel="stylesheet">
@endsection

@section('navbar-content')
	<div class="row h-100 py-5">
		<div class="col-sm-10 offset-md-2 col-md-3 h-25 align-self-center">
			<div class="text-center">
				<figure class="sniper">
					<img src="{{ asset('images/members/professor.png') }}" alt="Professor" >
  				<figcaption class="text-center"> Professor </figcaption>
  				<a href="/members/professor"></a>
				</figure>
			</div>
    </div>
    <div class="col-sm-10 offset-md-2 col-md-3 h-25 align-self-center">
			<div class="text-center">
				<figure class="sniper">
					<img src="{{ asset('images/members/boy.png') }}" alt="Students" >
  				<figcaption class="text-center"> Students </figcaption>
  				<a href="/members/students"></a>
				</figure>
			</div>
		</div>
	</div>
@endsection

@section('prototype-content')
  <!-- Professor -->
	@if($mode === 'professor')
	<div id="professor">
		<div class="container py-5">
			<!-- Profile -->
			<div class="row h-100 py-4">
				<div class="class-sm-11 offset-sm-1">
					<h3><i class="fas fa-id-card"></i><b> About ME </b></h3>
				</div>
			</div>
			<div class="row h-100">
		    <div class="col-sm-12 col-md-6 my-auto align-items-center align-self-center justify-content-center">
		      <img class="mx-auto d-block photo" src="/images/members/pywu.jpg" alt="Selfie">
		    </div>
		    <div class="col-sm-12 col-md-6 align-self-center text-justify">
					Pei-Yuan Wu is an assistant professor at National Taiwan University since 2017. He was born in Taipei, Taiwan, R.O.C., in 1987. He received the B.S.E. degree in electrical engineering from National Taiwan University in 2009, and the M.A. and Ph.D. degrees in electrical engineering from Princeton University in 2012 and 2015, respectively. He joined Taiwan Semiconductor Manufacturing Company from 2015 to 2017. He was a recipient of the Gordon Y.S. Wu Fellowship in 2010, Outstanding Teaching Assistant Award at Princeton University in 2012. His research interest lies in artificial intelligence, signal processing, estimation and prediction, and cyber-physical system modeling.
		    </div>
		  </div>
			<!-- Contact Info-->
			<div class="row h-100 py-4">
				<div class="class-sm-11 offset-sm-1">
						<h3><i class="fas fa-address-card"></i><b> Contact Info </b></h3>
						<hr>
						<ul>
							<li> <b>Office:</b> EE2-234, Department of Electrical Engineering, National Taiwan University, Taipei 106, Taiwan </li>
							<li> <b>Phone:</b> +886-2-33664687 </li>
							<li> <b>FAX:</b> +886-2-23671909 </li>
							<li> <b>Email:</b> peiyuanwu [AT] ntu.edu.tw </li>
						</ul>
				</div>
			</div>
			<!-- Publications -->
			<div class="row h-100 py-1">
				<div class="class-sm-11 offset-sm-1">
					<h3><i class="fas fa-server"></i><b> Publications </b></h3>
					<table class="table table-hover py-3">
						<thead>
							<tr>
								<th scope="col"><h3> # </h3></th>
								<th scope="col"><h3><b> Journal articles & book chapters </b></h3></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row"> 1 </th>
								<th> B. Tseng and P. Wu , “Compressive Privacy Generative Adversarial Network,” IEEE Transactions on Information Forensics and Security, vol. 15, 2499~2513, 2020 </th>
							</tr>
						</tbody>
						<tbody>
							<tr>
								<th scope="row"> 2 </th>
								<th> Hung Nguyen, Di Zhuang, Pei-Yuan Wu, Morris Chang, “AutoGAN-based dimension reduction for privacy preservation,” Neurocomputing, vol. 384, 94~103, 2020 </th>
							</tr>
						</tbody>
						<tbody>
							<tr>
								<th scope="row"> 3 </th>
								<th> S. Y. Kung, Thee Chanyaswad, J. Morris Chang, and P. Y. Wu, “Collaborative PCA/DCA Learning Methods for Compressive Privacy,” ACM Transactions on Embedded Computing Systems, Volume 16 Issue 3, 76:1~76:18, Jul. 2017 </th>
							</tr>
						</tbody>
						<tbody>
							<tr>
								<th scope="row"> 4 </th>
								<th> P. Y. Wu, C. C. Fang, J. M. Chang, and S. Y. Kung, “Cost-Effective Kernel Ridge Regression Implementation for Keystroke-Based Active Authentication System,” IEEE Trans. Cybern., vol. 47, no. 11, 3916~3927, Aug. 2016 </th>
							</tr>
						</tbody>
						<tbody>
							<tr>
								<th scope="row"> 5 </th>
								<th> J. M. Chang, C. C. Fang, K. H. Ho, N. Kelly, P. Y. Wu, Y. Ding, C. Chu, S. Gilbert, A. E. Kamal, S. Y. Kung, “Capturing Cognitive Fingerprints from Keystroke Dynamics,” IT Professional, vol. 15, 24~28, Jul. 2013 </th>
							</tr>
						</tbody>
					</table>
					<div class="py-3">
						<table class="table table-hover">
							<thead>
								<tr>
									<th scope="col"><h3> # </h3></th>
									<th scope="col"><h3><b> Conference & proceeding papers </b></h3></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row"> 1 </th>
									<th> M. Al-Rubaie, P. Y. Wu, J. M. Chang and S. Y. Kung, “Privacy-preserving PCA on horizontally-partitioned data,” 2017 IEEE Conference on Dependable and Secure Computing, 280~287, Taipei, Taiwan, Aug. 2017 </th>
								</tr>
							</tbody>
							<tbody>
								<tr>
									<th scope="row"> 2 </th>
									<th> S. Y. Kung and P. Y. Wu, “A Partial Cosine Kernel Approach to Incomplete Data Analysis,” Int’l Conf. on Advances in Big Data Analysis (ABDA), 95~101, Las Vegas, Jul. 2014 </th>
								</tr>
							</tbody>
							<tbody>
								<tr>
									<th scope="row"> 3 </th>
									<th> C. H. Lu and P. Y. Wu, “Using Density Invariant Graph Laplacian to Resolve Unobservable Parameters for Three-Dimensional Optical Bio-Imaging,” Int’l Conf. Acoustic, Speech, Signal Proc. (ICASSP), 1621~1625, Florence, May 2014 </th>
								</tr>
							</tbody>
							<tbody>
								<tr>
									<th scope="row"> 4 </th>
									<th> P. Y. Wu, C. C. Fang, J. M. Chang, S. Gilbert, and S. Y. Kung, “Cost-Effective Kernel Ridge Regression for Keystroke-Based Active Authentication System,” ICASSP, 6028~6032, Florence, May 2014 </th>
								</tr>
							</tbody>
							<tbody>
								<tr>
									<th scope="row"> 5 </th>
									<th> S. Y. Kung and P. Y. Wu, “Perturbation Regulated Kernel Regressors for Supervised Machine Learning,” Int’l Workshop on Machine Learning for Signal Processing (MLSP), 1~6, Santander, Sept. 2012 </th>
								</tr>
							</tbody>
							<tbody>
								<tr>
									<th scope="row"> 6 </th>
									<th> S. Y. Kung and P. Y. Wu, “On Efficient Learning and Classification Kernel Methods,” ICASSP, 2065~2068, Kyoto, Mar. 2012 </th>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="py-3">
						<table class="table table-hover">
							<thead>
								<tr>
									<th scope="col"><h3> # </h3></th>
									<th scope="col"><h3><b> Patents </b></h3></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row"> 1 </th>
									<th> Chia-Feng Liao, Chun-Hsien Lin, Pei-Yi Su, Yi-Ming Dai, Chung-Hsing Lee, Chien-Ko Liao, Chun-Yung Chang, Nan-Jung Chen, Pei-Yuan Wu, Hsien-Mao Huang, “Photolithography tool and method thereof,” US20170123328A1 , Jan. 2017 </th>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- <div class="row no-gutters">
				<div class="col-md-4">
		      <img src="/images/members/pywu.jpg" class="card-img" >
		    </div>
				<div class="col-sm-10 col-md-8">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title"> 吳沛遠 </h4>
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
							<p> Intro ...</p>
						</div>
					</div>
				</div>
			</div> -->
		</div>
	</div>
	@endif
	<!-- Students -->
	@if($mode === "students")
	<div id="students">
		<div class="container py-3">
			<div class="row justify-content-around">
				<figure class="gallery_member col-md-3 col-sm-3 col-xs-6 filter hdpe">
		      <img src="https://graph.facebook.com/v2.2/100000197921547/picture?type=large" class="img-thumbnail">
					<figcaption>
				    <h3>Johnny Liao</h3>
				    <p>Weekends don't count unless you spend them doing something completely pointless.</p>
				  </figcaption>
				  <a href="#"></a>
		    </figure>

				<figure class="gallery_member col-md-3 col-sm-3 col-xs-6 filter hdpe">
		      <img src="https://graph.facebook.com/v2.2/100001379402482/picture?type=large" class="img-thumbnail">
					<figcaption>
				    <h3>Alex Chao</h3>
				    <p>Weekends don't count unless you spend them doing something completely pointless.</p>
				  </figcaption>
				  <a href="#"></a>
		    </figure>

				<figure class="gallery_member col-md-3 col-sm-3 col-xs-6 filter hdpe">
		      <img src="https://graph.facebook.com/v2.2/100002083167926/picture?type=large" class="img-thumbnail">
					<figcaption>
				    <h3>Ann Chen</h3>
				    <p>Weekends don't count unless you spend them doing something completely pointless.</p>
				  </figcaption>
				  <a href="#"></a>
		    </figure>

				<figure class="gallery_member col-md-3 col-sm-3 col-xs-6 filter hdpe">
		      <img src="{{ asset('images/members/boy.png') }}" class="img-thumbnail">
					<figcaption>
				    <h3>Johnny Liao</h3>
				    <p>Weekends don't count unless you spend them doing something completely pointless.</p>
				  </figcaption>
				  <a href="#"></a>
		    </figure>

				<figure class="gallery_member col-md-3 col-sm-3 col-xs-6 filter hdpe">
		      <img src="{{ asset('images/members/boy.png') }}" class="img-thumbnail">
					<figcaption>
				    <h3>Johnny Liao</h3>
				    <p>Weekends don't count unless you spend them doing something completely pointless.</p>
				  </figcaption>
				  <a href="#"></a>
		    </figure>

				<div class="gallery_member col-lg-3 col-md-3 col-sm-3 col-xs-6 filter hdpe">
		      <img src="http://fakeimg.pl/365x365/" class="img-thumbnail">
		    </div>
			</div>
		</div>
	</div>
	@endif
@endsection
