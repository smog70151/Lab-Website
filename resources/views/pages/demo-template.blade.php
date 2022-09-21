<!-- Inherit  -->
@extends('pages.prototype')

@section('prototype-header')
	<link href="{{ asset('styles/demo-template.css') }}" rel="stylesheet">
	<script src="{{ asset('scripts/demo-template.js') }}"></script>
@endsection

@section('navbar-content')
	<div class="row justify-content-center h-100">
    <div class="col-md-8 col-sm-12 text-center align-self-center header-bg header-text">
			<br />
      <h2> Demo Title </h2>
			<p >
        吳沛遠 教授團隊
				<!-- Student Name If need... -->
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
						<h5> Video Demo <i class="fas fa-project-diagram"></i></h5>
						<div class="collapse.show" id="conventional-ML">
							<!-- Assert your video -->
							<div class="yt-container">
								<iframe src="https://www.youtube.com/embed/jGwO_UgTS7I" frameborder="0" allowfullscreen class="yt-video"></iframe>
							</div>
							<!-- Assert your figures or experiments -->
							<!-- <img class="border-0 img-thumbnail" src="{{ asset('images/demo/images.002.jpeg') }}" alt=""> -->
						</div>
						<p class="text-right">
              <button class="btn btn-outline-secondary btn-sm" data-toggle="collapse" data-target="#conventional-ML">
                <i class="fas fa-chalkboard"></i> 縮放影片 (不需要請註解)
              </button>
            </p>
            <blockquote>
							<!-- If need u can use text-abbreviation -->
							<p class="video-guide multiline-ellipsis">
                Brief Guide. Dummy Text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vestibulum arcu non erat gravida egestas. In mollis consectetur bibendum. Curabitur dignissim diam arcu, quis molestie orci pulvinar nec. Fusce eros elit, elementum quis molestie eget, blandit sed justo. Ut laoreet tincidunt ipsum vel faucibus. Aenean et pellentesque mauris. Nam euismod vitae diam facilisis facilisis. Duis imperdiet mollis cursus. Aliquam feugiat in leo vitae pellentesque. Nam vel quam quam. Aliquam massa dolor, porta eu iaculis dictum, dignissim sit amet nulla.
								<br>
								Nullam vulputate felis magna. Suspendisse tincidunt, lectus et bibendum auctor, lorem arcu molestie nulla, placerat consectetur turpis justo lacinia odio. Phasellus id iaculis lorem. Mauris feugiat nunc eget dapibus ultricies. Maecenas semper lectus vel orci fermentum, maximus hendrerit magna mattis. Ut lacinia in neque sit amet tincidunt. Praesent pulvinar finibus ante in vehicula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent vestibulum urna urna, ut sagittis orci maximus quis.
								<br>
								Nullam aliquet enim eu condimentum aliquet. In vel lacinia urna. Aliquam lacinia sem leo, id imperdiet nulla venenatis et. Suspendisse potenti. Aenean dapibus, enim sit amet pellentesque condimentum, quam leo malesuada purus, eu vulputate odio velit quis lectus. Pellentesque turpis augue, dictum non ante nec, ultricies faucibus est. Etiam condimentum ullamcorper dolor, fermentum euismod velit consequat sed. Nullam pellentesque interdum tellus id laoreet. Nullam molestie vel risus quis euismod. Mauris metus diam, fermentum et lacus at, iaculis convallis nulla. Proin pharetra eleifend libero, ullamcorper scelerisque metus imperdiet eget.
							</p>
            </blockquote>
						<p class="text-right">
              <button class="video-readMore btn btn-outline-secondary btn-sm">Read More (不需要請註解)</button>
            </p>
						<hr>
          </li>
					<!-- XXX: Federated Learning Guide -->
          <li>
            <h4> 聯邦式學習 </h4>
						<div class="collapse.show" id="federated-learning">
							<img class="border-0 img-thumbnail" src="{{ asset('images/demo/images.005.jpeg') }}" alt="">
							<img class="border-0 img-thumbnail" src="{{ asset('images/demo/images.006.jpeg') }}" alt="">
						</div>
						<p class="text-right">
							<button class="btn btn-outline-secondary btn-sm" data-toggle="collapse" data-target="#federated-learning">
								<i class="fas fa-chalkboard"></i> 縮放圖片
							</button>
						</p>
						<blockquote>
              <p>
                我們可以從上圖中瞭解到聯邦學習的機制，從原先的資料上傳變成更新數值(梯度)上傳。此外，原先是透過雲端給出預測結果，現在則由使用者的裝置直接給出預測結果。透過聯邦學習的方式，我們可以達到兩個目的，一為資料的隱蔽性，由於資料是在本身的裝置上做處理，所以並無外洩出去；二為資料的大小問題，透過此方式可以有效的避免，資料量過大的問題。
              </p>
            </blockquote>
          </li>
					<!-- XXX: Federated Learning Drawback -->
					<!-- Related work: Deep Models Under the GAN: Information Leakage from Collaborative Deep Learning -->
					<li>
            <h4> 聯邦式學習缺點 </h4>
						<div class="collapse.show" id="fl-related">
							<img class="border-0 img-thumbnail" src="{{ asset('images/demo/images.008.jpeg') }}" alt="">
							<img class="border-0 img-thumbnail" src="{{ asset('images/demo/images.009.jpeg') }}" alt="">
						</div>
						<p class="text-right">
							<a href="https://arxiv.org/abs/1702.07464">
								<button class="btn btn-outline-secondary btn-sm">
									<i class="far fa-file-pdf"></i>
									 相關論文
								</button>
							</a>
							<button class="btn btn-outline-secondary btn-sm" data-toggle="collapse" data-target="#fl-related">
								<i class="fas fa-chalkboard"></i> 縮放圖片
							</button>
						</p>
						<blockquote>
              <p>
                經過我們的論文調查後，我們發現聯邦式學習存在一些問題。舉例來說，若使用梯度的方式更新聯邦式學習的模型，其實可以覆現出他人的資料。如上圖例所示，我們可以將受害者資料 - 1、3，在攻擊者的裝置中還原出來。
              </p>
            </blockquote>
          </li>
					<hr>
					<!-- XXX: Secure Multi-Party Computation Guide -->
					<li>
            <h4> 多方安全計算簡介 </h4>
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
								<!-- 多方安全計算 -->
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
            <h4> SecureML 相關成果覆現及目前進度 </h4>
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
              <p class="text-right">
								<a href="https://ieeexplore.ieee.org/document/7958569" alt="IEEE.7958569">
									<button class="btn btn-outline-secondary btn-sm">
										<i class="far fa-file-pdf"></i>
										 相關論文
									</button>
								</a>
								<button class="btn btn-outline-secondary btn-sm" data-toggle="collapse" data-target="#SecureML">
                  <i class="fas fa-chalkboard"></i> Slide
                </button>
              </p>
            </blockquote>
          </li>
					<li>
						<h4> PDF Demo  </h4>
						<div class="pdf-container">
							<iframe src="{{ asset('files/demo-template/SecureML_A_System_for_Scalable_Privacy-Preserving_Machine_Learning.pdf') }}" class="pdf-context"></iframe>
						</div>
					</li>
        </ul>
      </div>
    </div>
  </div>
@endsection
