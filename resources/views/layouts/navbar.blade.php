<!-- Navigation -->
<div class="bg-img">
  <nav class="navbar navbar-expand-lg fixed-top py-3">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="/">{{ __('機器學習與估計理論實驗室') }}</a>
      <button class="navbar-toggler navbar-dark" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" type="button" name="button">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="/members">{{ __('研究成員') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="/research">{{ __('研究方向') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="/courses">{{ __('課程資訊') }}</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container fill">
    @yield('navbar-content')
  </div>
</div>
