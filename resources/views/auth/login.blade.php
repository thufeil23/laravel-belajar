@extends('layout.app')

@section('contents')
    <form class="card card-md" action="{{ route('login') }}" method="POST" autocomplete="off">
        <div class="card-body">
            <h2 class="card-title text-center mb-4">{{ __('Login to your account') }}</h2>
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">{{ __('Email Address or Phone Numbers') }}</label>
                <input id="email" type="text" name="email"
                    class="form-control  @error('email') is-invalid @enderror" placeholder="email@gmail.com" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-2">
                <label for="password" class="form-label">
                    {{ __('Password') }}
                    <span class="form-label-description">
                        <a href="{{ route('password.request') }}">{{ __('I forgot password') }}</a>
                    </span>
                </label>
                <div class="input-group input-group-flat">
                    <input id="password" type="password" name="password"
                        class="form-control @error('password') is-invalid @enderror" placeholder="Password" required
                        autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="mb-2">
                <label class="form-check" for="remember">
                    <input type="checkbox" class="form-check-input" name="remember" id="remember"{{ old('remember') ? 'checked' : '' }}/>
                    <span class="form-check-label">{{ __('Remember me on this device') }}</span>
                </label>
            </div>
            <div class="form-footer">
                <button type="submit" class="btn btn-primary w-100">{{ __('Sign in') }}</button>
            </div>
        </div>
        <div class="hr-text">or</div>
        <div class="card-body">
            <div class="row">
                <div class="col"><a href="#" class="btn btn-white w-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-google" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M17.788 5.108a9 9 0 1 0 3.212 6.892h-8"></path>
                        </svg>
                        Login with Google
                    </a></div>
                <div class="col"><a href="#" class="btn btn-white w-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-twitter" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c-.002 -.249 1.51 -2.772 1.818 -4.013z" />
                        </svg>
                        Login with Twitter
                    </a></div>
            </div>
        </div>
    </form>
    <div class="text-center text-muted mt-3">
        Don't have account yet? <a href="{{ route('register') }}" tabindex="-1">Sign up</a>
    </div>
@endsection
