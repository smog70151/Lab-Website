<!-- Inherit  -->
@extends('pages.prototype')

@section('prototype-header')
	<link href="{{ asset('styles/demo.css') }}" rel="stylesheet">
@endsection

@section('navbar-content')
	<div class="row justify-content-center h-100">
    <div class="col-md-8 col-sm-12 text-center align-self-center header-bg header-text">
			<br />
      <h5> SecureML Demo </h5>
			<!-- <h5> MLE Lab, NTU </h5> -->
			<p >
        Abstract
			</p>
    </div>
	</div>
@endsection

@section('prototype-content')
  <div class="container py-5">
    <div class="row">
      <div class="col-sm-10 offset-md-1 col-md-10">
        <ul>
					<!-- XXX: Conventional Machine Learning Guide -->
          <li class="py-2">
            <h4> Conventional Machine Learning <i class="fas fa-project-diagram"></i></h4>
						<div class="collapse.show" id="conventional-ML">
							<img class="border-0 img-thumbnail" src="{{ asset('images/demo/images.002.jpeg') }}" alt="">
							<img class="border-0 img-thumbnail" src="{{ asset('images/demo/images.003.jpeg') }}" alt="">
						</div>
            <blockquote>
              <p>
                在傳統機器學習中，我們會將資料上傳到雲端或是將資料聚集到某一伺服器中進行相關的模型訓練。但傳統的方式隱含一些缺點，比方說：資料量不夠、隱私問題。Google 基於此問題，提出一個相關的解決辦法聯邦式學習 (Federated Learning)。
              </p>
            </blockquote>
            <p class="text-right">
              <button class="btn btn-outline-secondary btn-sm" data-toggle="collapse" data-target="#conventional-ML">
                <i class="fas fa-chalkboard"></i> Figure
              </button>
            </p>
						<hr>
          </li>
					<!-- XXX: Federated Learning Guide -->
          <li>
            <h4> 聯邦式學習 </h4>
						<div class="collapse.show" id="federated-learning">
							<img class="border-0 img-thumbnail" src="{{ asset('images/demo/images.005.jpeg') }}" alt="">
							<img class="border-0 img-thumbnail" src="{{ asset('images/demo/images.006.jpeg') }}" alt="">
							<blockquote>
						</div>
              <p>
                我們可以從上圖中瞭解聯邦學習的機制，從原先的資料上傳變成更新數值上傳。此外，原先是透過雲端給出預測結果，現在則由使用者的裝置直接給出預測結果。
              </p>
              <p class="text-right">
                <button class="btn btn-outline-secondary btn-sm" data-toggle="collapse" data-target="#federated-learning">
                  <i class="fas fa-chalkboard"></i> Figure
                </button>
              </p>
            </blockquote>
          </li>
					<!-- XXX: Federated Learning Drawback -->
					<!-- Related work: Deep Models Under the GAN: Information Leakage from Collaborative Deep Learning -->
					<li>
            <h4> 聯邦式學習 </h4>
						<div class="collapse.show" id="fl-related">
							<img class="border-0 img-thumbnail" src="{{ asset('images/demo/images.008.jpeg') }}" alt="">
							<img class="border-0 img-thumbnail" src="{{ asset('images/demo/images.009.jpeg') }}" alt="">
						</div>
						<blockquote>
              <p>
                我們可以從上圖中瞭解聯邦學習的機制，從原先的資料上傳變成更新數值上傳。此外，原先是透過雲端給出預測結果，現在則由使用者的裝置直接給出預測結果。
              </p>
              <p class="text-right">
								<a href="https://arxiv.org/abs/1702.07464">
									<button class="btn btn-outline-secondary btn-sm">
										<i class="far fa-file-pdf"></i>
										 Paper
									</button>
								</a>
								<button class="btn btn-outline-secondary btn-sm" data-toggle="collapse" data-target="#fl-related">
                  <i class="fas fa-chalkboard"></i> Figure
                </button>
              </p>
            </blockquote>
          </li>
					<hr>
					<!-- XXX: Secure Multi-Party Computation Guide -->
					<li>
            <h4> Secure Multi-Party Computation Guide</h4>
						<div class="collapse.show" id="SMPC-toy-example">
							<div id="SMPC-toy-example-indicators" class="carousel slide" data-interval="false" data-ride="carousel">
								<ol class="carousel-indicators">
							    <li data-target="#SMPC-toy-example-indicators" data-slide-to="0" class="secondary active"></li>
							    <li data-target="#SMPC-toy-example-indicators" data-slide-to="1"></li>
							    <li data-target="#SMPC-toy-example-indicators" data-slide-to="2"></li>
									<li data-target="#SMPC-toy-example-indicators" data-slide-to="3"></li>
									<li data-target="#SMPC-toy-example-indicators" data-slide-to="4"></li>
									<li data-target="#SMPC-toy-example-indicators" data-slide-to="5"></li>
							  </ol>
							  <div class="carousel-inner">
							    <div class="carousel-item active">
							      <img src="{{ asset('images/demo/images.010.jpeg') }}" class="d-block w-100" alt="...">
							    </div>
							    <div class="carousel-item">
							      <img src="{{ asset('images/demo/images.011.jpeg') }}" class="d-block w-100" alt="...">
							    </div>
							    <div class="carousel-item">
							      <img src="{{ asset('images/demo/images.012.jpeg') }}" class="d-block w-100" alt="...">
							    </div>
									<div class="carousel-item">
							      <img src="{{ asset('images/demo/images.013.jpeg') }}" class="d-block w-100" alt="...">
							    </div>
									<div class="carousel-item">
							      <img src="{{ asset('images/demo/images.014.jpeg') }}" class="d-block w-100" alt="...">
							    </div>
									<div class="carousel-item">
							      <img src="{{ asset('images/demo/images.015.jpeg') }}" class="d-block w-100" alt="...">
							    </div>
							  </div>
							  <a class="carousel-control-prev" href="#SMPC-toy-example-indicators" role="button" data-slide="prev">
							    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
							    <span class="sr-only">Previous</span>
							  </a>
							  <a class="carousel-control-next" href="#SMPC-toy-example-indicators" role="button" data-slide="next">
							    <span class="carousel-control-next-icon" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
							  </a>
							</div>
						</div>
						<blockquote>
              <p>
								Secure Multi-Party Computation Description
              </p>
              <p class="text-right">
								<button class="btn btn-outline-secondary btn-sm" data-toggle="collapse" data-target="#SMPC-toy-example">
                  <i class="fas fa-chalkboard"></i> Slide
                </button>
              </p>
            </blockquote>
          </li>
					<!-- XXX: SecureML -->
					<!-- Related work: SecureML: A System for Scalable Privacy-Preserving Machine Learning -->
					<li>
            <h4> SecureML </h4>
						<div class="collapse.show" id="SecureML">
							<div id="SecureML-indicators" class="carousel slide" data-interval="false" data-ride="carousel">
								<ol class="carousel-indicators">
							    <li data-target="#SecureML-indicators" data-slide-to="0" class="secondary active"></li>
							    <li data-target="#SecureML-indicators" data-slide-to="1"></li>
							    <li data-target="#SecureML-indicators" data-slide-to="2"></li>
									<li data-target="#SecureML-indicators" data-slide-to="3"></li>
									<li data-target="#SecureML-indicators" data-slide-to="4"></li>
									<li data-target="#SecureML-indicators" data-slide-to="5"></li>
									<li data-target="#SecureML-indicators" data-slide-to="6"></li>
									<li data-target="#SecureML-indicators" data-slide-to="7"></li>
									<li data-target="#SecureML-indicators" data-slide-to="8"></li>
									<li data-target="#SecureML-indicators" data-slide-to="9"></li>
									<li data-target="#SecureML-indicators" data-slide-to="10"></li>
							  </ol>
							  <div class="carousel-inner">
							    <div class="carousel-item active">
							      <img src="{{ asset('images/demo/images.016.jpeg') }}" class="d-block w-100" alt="...">
							    </div>
							    <div class="carousel-item">
							      <img src="{{ asset('images/demo/images.017.jpeg') }}" class="d-block w-100" alt="...">
							    </div>
							    <div class="carousel-item">
							      <img src="{{ asset('images/demo/images.018.jpeg') }}" class="d-block w-100" alt="...">
							    </div>
									<div class="carousel-item">
							      <img src="{{ asset('images/demo/images.019.jpeg') }}" class="d-block w-100" alt="...">
							    </div>
									<div class="carousel-item">
							      <img src="{{ asset('images/demo/images.020.jpeg') }}" class="d-block w-100" alt="...">
							    </div>
									<div class="carousel-item">
							      <img src="{{ asset('images/demo/images.021.jpeg') }}" class="d-block w-100" alt="...">
							    </div>
									<div class="carousel-item">
							      <img src="{{ asset('images/demo/images.022.jpeg') }}" class="d-block w-100" alt="...">
							    </div>
									<div class="carousel-item">
							      <img src="{{ asset('images/demo/images.023.jpeg') }}" class="d-block w-100" alt="...">
							    </div>
									<div class="carousel-item">
							      <img src="{{ asset('images/demo/images.024.jpeg') }}" class="d-block w-100" alt="...">
							    </div>
									<div class="carousel-item">
							      <img src="{{ asset('images/demo/images.025.jpeg') }}" class="d-block w-100" alt="...">
							    </div>
									<div class="carousel-item">
							      <img src="{{ asset('images/demo/images.026.jpeg') }}" class="d-block w-100" alt="...">
							    </div>
							  </div>
							  <a class="carousel-control-prev" href="#SecureML-indicators" role="button" data-slide="prev">
							    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
							    <span class="sr-only">Previous</span>
							  </a>
							  <a class="carousel-control-next" href="#SecureML-indicators" role="button" data-slide="next">
							    <span class="carousel-control-next-icon" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
							  </a>
							</div>
						</div>
						<blockquote>
              <p>
              </p>
              <p class="text-right">
								<a href="https://ieeexplore.ieee.org/document/7958569" alt="IEEE.7958569">
									<button class="btn btn-outline-secondary btn-sm">
										<i class="far fa-file-pdf"></i>
										 Paper
									</button>
								</a>
								<button class="btn btn-outline-secondary btn-sm" data-toggle="collapse" data-target="#SecureML">
                  <i class="fas fa-chalkboard"></i> Slide
                </button>
              </p>
            </blockquote>
          </li>
        </ul>
      </div>
    </div>
  </div>
@endsection
