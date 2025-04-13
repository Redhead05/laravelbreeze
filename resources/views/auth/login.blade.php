<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BAN PDM JATIM</title>
        <!-- Styles -->
        @include('partials.styles')
    </head>
    <body class="boxed-size bg-white">
        @include('partials.preloader')

        <div class="container">
            <div class="main-content d-flex flex-column p-0">
                <div class="m-auto m-1230">
                    <div class="row align-items-center">
                        <div class="col-lg-6 d-none d-lg-block">
                            <img src="{{asset ('assets/images/login.jpg')}}" class="rounded-3" alt="login">
                        </div>
                        <div class="col-lg-6">
                            <div class="mw-480 ms-lg-auto">
                                <a href="index" class="d-inline-block mb-4">
                                    <img src="{{asset ('assets/images/banpdmlogo.svg')}}" class="rounded-3 for-light-logo" alt="login">
                                    <img src="{{asset ('assets/images/white-logo.svg')}}" class="rounded-3 for-dark-logo" alt="login">
                                </a>
                                <h3 class="fs-28 mb-2">Aplikasi Management BAN PDM</h3>
{{--                                <p class="fw-medium fs-16 mb-4">Silahkan untuk login</p>--}}
{{--                                <div class="row justify-content-center">--}}
{{--                                    <div class="col-lg-4 col-sm-4">--}}
{{--                                        <a href="https://www.google.com/" target="_blank" class="btn btn-outline-secondary bg-transparent w-100 py-2 hover-bg mb-4" style="border-color: #D6DAE1;">--}}
{{--                                            <img src="{{asset ('assets/images/google.svg')}}" alt="google">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-sm-4">--}}
{{--                                        <a href="https://www.facebook.com/" target="_blank" class="btn btn-outline-secondary bg-transparent w-100 py-2 hover-bg mb-4" style="border-color: #D6DAE1;">--}}
{{--                                            <img src="{{asset ('assets/images/facebook2.svg')}}" alt="facebook2">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-sm-4">--}}
{{--                                        <a href="https://www.apple.com/" target="_blank" class="btn btn-outline-secondary bg-transparent w-100 py-2 hover-bg mb-4" style="border-color: #D6DAE1;">--}}
{{--                                            <img src="{{asset ('assets/images/apple.svg')}}" alt="apple">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <!-- Session Status -->
                                <x-auth-session-status class="mb-4" :status="session('status')" />

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <!-- Login Field (Email or NIA) -->
                                    <div class="form-group mb-4">
                                        <label class="label text-secondary">{{ __('Email or NIA') }}</label>
                                        <input type="text" name="email" class="form-control h-55" placeholder="Email or NIA" value="{{ old('email') }}" required autofocus autocomplete="username">
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>

                                    <!-- Password -->
                                    <div class="form-group mb-4">
                                        <label class="label text-secondary">{{ __('Password') }}</label>
                                        <input type="password" name="password" class="form-control h-55" placeholder="Type password" required autocomplete="current-password">
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>

                                    <!-- Remember Me -->
                                    <div class="form-group mb-4">
                                        <label for="remember_me" class="inline-flex items-center">
                                            <input id="remember_me" type="checkbox" name="remember" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800">
                                            <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                                        </label>
                                    </div>

                                    <div class="form-group mb-4">
                                        <button type="submit" class="btn btn-primary fw-medium py-2 px-3 w-100">
                                            <div class="d-flex align-items-center justify-content-center py-1">
                                                <i class="material-symbols-outlined text-white fs-20 me-2">login</i>
                                                <span>Login</span>
                                            </div>
                                        </button>
                                    </div>

                                    <div class="form-group">
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" class="fw-medium text-primary text-decoration-none">{{ __('Forgot your password?') }}</a>
                                        @endif
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        @include('partials.theme_settings')
        @include('partials.scripts')
    </body>
</html>
