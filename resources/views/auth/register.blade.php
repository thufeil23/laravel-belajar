@extends('layout.app')

@section('contents')
    <form class="card card-md" method="POST" action="{{ route('register') }}">
        <div class="card-body">
            <h2 class="card-title text-center mb-4">{{ __('Create new account') }}</h2>
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">{{ __('Name') }}</label>
                <input id="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                    value="{{ old('name') }}" required autocomplete="name" placeholder="{{ __('Enter full name') }}" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">{{ __('Phone Number') }}</label>
                <input id="phone" type="text" name="phone"
                    class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" required
                    autocomplete="phone" placeholder="{{ __('+62 812-2345-6789') }}" autofocus>

                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>
            <div class="mb-3">
                <label for="email" class="form-label">{{ __('Email') }}</label>
                <input id="email" type="email" name="email"
                    class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required
                    autocomplete="email" placeholder="{{ __('email@email.com') }}" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>
            <div class="mb-3">
                <label for="password" class="form-label">{{ __('Password') }}</label>
                <input id="password" type="password" name="password"
                    class="form-control @error('password') is-invalid @enderror" required
                    autocomplete="new-password" placeholder="{{ __('Password') }}" autofocus>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" class="form-control"
                    name="password_confirmation" required autocomplete="new-password">
            </div>
            <div class="mb-3">
                <label class="form-check">
                    <input type="checkbox" class="form-check-input" />
                    <span class="form-check-label">{{ __('Agree the ') }}<a href="./terms-of-service.html" tabindex="-1">{{ __('terms and
                            policy' )}}</a>.</span>
                </label>
            </div>
            <div class="form-footer">
                <button type="submit" class="btn btn-primary w-100">{{ __('Create new account') }}</button>
            </div>
        </div>
        <div class="hr-text">{{ __('or') }}</div>
        <div class="card-body">
            <div class="row">
                <div class="col"><a href="#" class="btn btn-white w-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-google" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M17.788 5.108a9 9 0 1 0 3.212 6.892h-8"></path>
                        </svg>
                        {{ __('Create with Google') }}
                    </a></div>
                <div class="col"><a href="#" class="btn btn-white w-100">
                        <!-- Download SVG icon from http://tabler-icons.io/i/brand-twitter -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-twitter" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c-.002 -.249 1.51 -2.772 1.818 -4.013z" />
                        </svg>
                        {{ __('Create with Twitter') }}
                    </a></div>
            </div>
        </div>
    </form>
    <div class="text-center text-muted mt-3">
        {{ __('Already have account? ') }}<a href="{{ route('login') }}" tabindex="-1">{{ __('Sign in') }}</a>
    </div>
@endsection
