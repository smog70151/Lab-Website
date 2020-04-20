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
			<p >
				實驗室成立於 2017 年並坐落在臺灣大學博理館 530。
				實驗室主要的研究方向為機器學習及其相關理論。主要的研究方向有：隱私維護機器學習、機器學習最佳化理論及計算機視覺。
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
							<div class="w-100 justify-content-between">
								<h5 class="text-left"> Compressive Privacy Generative Adversarial Network </h5>
								<hr />
								<div class="collapse" id="cpgan-2020">
									<p class="text-justify"> Tseng, Bo-Wei, and Pei-Yuan Wu. "Compressive Privacy Generative Adversarial Network." IEEE Transactions on Information Forensics and Security 15 (2020): 2499-2513. </p>
									<p class="text-justify"> Machine learning as a service (MLaaS) has brought much convenience to our daily lives recently. However, the fact that the service is provided through cloud raises privacy leakage issues. In this work we propose the compressive privacy generative adversarial network (CPGAN), a data-driven adversarial learning framework for generating compressing representations that retain utility comparable to state-of-the-art, with the additional feature of defending against reconstruction attack. This is achieved by applying adversarial learning scheme to the design of compression network (privatizer), whose utility/privacy performances are evaluated by the utility classifier and the adversary reconstructor, respectively. Experimental results demonstrate that CPGAN achieves better utility/privacy trade-off in comparison with the previous work, and is applicable to real-world large datasets. </p>
								</div>
								<p class="text-right">
									<button class="btn btn-outline-info btn-sm" data-toggle="collapse" data-target="#cpgan-2020">
										<i class="fas fa-info-circle"></i>
										 INFO
									</button>
									<a href="https://ieeexplore.ieee.org/document/8963921">
										<button class="btn btn-outline-secondary btn-sm">
											<i class="far fa-file-pdf"></i>
											 PDF
										</button>
									</a>
									<a href="https://github.com/bwtseng/Compressive-Privacy-Generative-Adversarial-Netowork">
										<button class="btn btn-outline-secondary btn-sm">
											<i class="fab fa-github"></i>
											 CODE
										</button>
									</a>
								</p>
							</div>
						</li>
						<li class="list-group-item">
							<div class="w-100 justify-content-between">
								<h5 class="text-left"> AutoGAN-based dimension reduction for privacy preservation </h5>
								<hr />
								<div class="collapse" id="AutoGAN-2020">
									<p class="text-justify"> Hung Nguyen, Di Zhuang, Pei-Yuan Wu, Morris Chang, “AutoGAN-based dimension reduction for privacy preservation,” Neurocomputing, vol. 384, 94~103, 2020 </p>
									<p class="text-justify"> Protecting sensitive information against data exploiting attacks is an emerging research area in data mining. Over the past, several different methods have been introduced to protect individual privacy from such attacks while maximizing data-utility of the application. However, these existing techniques are not sufficient to effectively protect data owner privacy, especially in the scenarios that utilize visualizable data (e.g. images, videos) or the applications that require heavy computations for implementation. To address these problems, we propose a new dimension reduction-based method for privacy preservation. Our method generates dimension-reduced data for performing machine learning tasks and prevents a strong adversary from reconstructing the original data. We first introduce a theoretical approach to evaluate dimension reduction-based privacy preserving mechanisms, then propose a non-linear dimension reduction framework motivated by state-of-the-art neural network structures for privacy preservation. We conducted experiments over three different face image datasets (AT&T, YaleB, and CelebA), and the results show that when the number of dimensions is reduced to seven, we can achieve the accuracies of 79%, 80%, and 73% respectively and the reconstructed images are not recognizable to naked human eyes. </p>
								</div>
								<p class="text-right">
									<button class="btn btn-outline-info btn-sm" data-toggle="collapse" data-target="#AutoGAN-2020">
										<i class="fas fa-info-circle"></i>
										 INFO
									</button>
									<a href="https://www.sciencedirect.com/science/article/pii/S0925231219316352">
										<button class="btn btn-outline-secondary btn-sm">
											<i class="far fa-file-pdf"></i>
											 PDF
										</button>
									</a>
								</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
@endsection
