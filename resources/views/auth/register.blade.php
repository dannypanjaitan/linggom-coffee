<!doctype html>
<html lang="en">
<head>
    <title>Linggom Coffee - Daftar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('auth/css/style.css')}}">
</head>

<body style="background-color: #D79A24">
	<section class="ftco-section">
		<div class="container">

			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h1 class="heading-section">Linggom Coffee - Daftar</h1>
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-6">
					<div class="login-wrap py-5">
		      	        <div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/5.png);"></div>
		      	        <h3 class="text-center mb-0">H o r a s !</h3>
		      	        <p class="text-center">Daftar untuk melanjutkan</p>

                          <!-- FORM PENDAFTARAN -->
                          <form method="POST" action="{{ route('register') }}" class="login-form">
                            @csrf 
		      		        <div class="form-group">
		      			        <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
		      			            <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan nama Anda" required name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
		      		        </div>
                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-envelope"></span></div>
                                    <input id="email" type="email" placeholder="Email : example@exp.xyz"class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
		      		        </div>
	                        <div class="form-group">
	            	            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
                                <input id="password" placeholder="Kata Sandi" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
	                        </div>
                            <div class="form-group">
	            	            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
                                <input id="password-confirm" type="password"  placeholder="Konfirmasi kata sandi" class="form-control" name="password_confirmation" required autocomplete="new-password">
	                        </div>

                            <div class="form-group d-md-flex">
                                <div class="w-100 text-md-left">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn form-control btn-primary rounded submit px-3">Daftar</button>
                            </div>
                        </form>
                        <!-- AKHIR FORM PENDAFTARAN -->

                        <div class="w-100 text-center mt-4 text">
                            <p class="mb-0">Sudah memiliki akun?</p>
                            <a href="#">Masuk</a>
                        </div>
	                </div>
				</div>
			</div>
		</div>
	</section>

    <script src="{{asset('auth/js/jquery.min.js')}}"></script>
    <script src="{{asset('auth/js/popper.js')}}"></script>
    <script src="{{asset('auth/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('auth/js/main.js')}}"></script>

</body>
</html>




<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
