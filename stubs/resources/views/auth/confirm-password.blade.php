@extends('layouts.app')

@section('content')
    <section class="uk-section">
        <div class="uk-container">
            <div class="uk-flex-center" uk-grid>
                <div class="uk-width-large">
                    <x-validation-errors />

                    <div class="uk-card uk-box-shadow-small">
                        <div class="uk-card-header">
                            <h2 class="uk-text-center">{{ __('Login') }}</h2>

                            <p>{{ __('For your security, please confirm your password to continue.') }}</p>
                        </div>

                        <div class="uk-card-body uk-padding-remove-top">
                            <form method="POST" action="{{ route('password.confirm') }}">
                                @csrf

                                <div class="uk-margin">
                                    <label>{{ __('Password') }}</label>
                                    <input type="password" name="password" required autocomplete="current-password" />
                                </div>

                                <div class="uk-margin">
                                    <button class="uk-button uk-button-primary uk-width-1-1" type="submit">
                                        {{ __('Confirm Password') }}
                                    </button>
                                </div>

                                @if (Route::has('password.request'))
                                    <div class="uk-text-center">
                                        <a href="{{ route('password.request') }}">
                                            <small>{{ __('Forgot Your Password?') }}</small>
                                        </a>
                                    </div>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
