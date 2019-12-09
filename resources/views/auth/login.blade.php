@extends('template.login.app')
@section('titulo','Login Logistica')
@section('conteudo')
        <div id="loader">
          <div class="spinner"></div>
        </div>
        <script type="c82a517a336783c5c7eaa0cf-text/javascript">window.addEventListener('load', () => {
        const loader = document.getElementById('loader');
        setTimeout(() => {
          loader.classList.add('fadeOut');
        }, 300);
      });</script>
    <div class="peers ai-s fxw-nw h-100vh">
      <div class="d-n@sm- peer peer-greed h-100 pos-r bgr-n bgpX-c bgpY-c bgsz-cv" style="background-image:url(assets/static/images/bg.jpg)">
      </div>
      <div class="col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r" style="min-width:320px">
        <h4 class="fw-300 c-grey-900 mB-40"> <i class="c-brown ti-lock"></i> Área da Logistica / Imugi </h4>
        <form  method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}
        <div class="form-group">
            <label for="email" class="col-form-label">{{ __('E-Mail') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="password" class="col-form-label">{{ __('Senha') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <div class="peers ai-c jc-sb fxw-nw">
            <div class="peer">
              <div class="checkbox checkbox-circle checkbox-info peers ai-c">
              <input class="form-check-input peer" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="inputCall1" class="peers peer-greed js-sb ai-c">
                  <span class="peer peer-greed">
                  {{ __('Lembrar na próxima vez') }}
                  </span>
                </label>
              </div>
            </div>
            <div class="peer">
              <button class="btn btn-dark">Login</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  @endsection
