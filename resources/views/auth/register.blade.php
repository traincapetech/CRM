@extends('layouts.app', ['class' => 'register-page', 'page' => __('Register Page'), 'contentClass' => 'register-page'])

@section('content')
    <div class="row">
        <div class="col-md-5 ml-auto">
            <div class="info-area info-horizontal mt-5">
                <div class="icon icon-warning">
                    <i class="tim-icons icon-chart-pie-36"></i>
                </div>
                <div class="description">
                    <h3 class="info-title">{{ __('CRM Management') }}</h3>
                    <p class="description">
                        {{ __('Manage your customer relationships efficiently with our comprehensive CRM solution.') }}
                    </p>
                </div>
            </div>
            <div class="info-area info-horizontal">
                <div class="icon icon-primary">
                    <i class="tim-icons icon-single-02"></i>
                </div>
                <div class="description">
                    <h3 class="info-title">{{ __('Customer Tracking') }}</h3>
                    <p class="description">
                        {{ __('Track customer interactions, manage leads, and improve your sales process.') }}
                    </p>
                </div>
            </div>
            <div class="info-area info-horizontal">
                <div class="icon icon-info">
                    <i class="tim-icons icon-trophy"></i>
                </div>
                <div class="description">
                    <h3 class="info-title">{{ __('Analytics & Reports') }}</h3>
                    <p class="description">
                        {{ __('Get powerful insights with custom reports and analytics dashboards.') }}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-7 mr-auto">
            <div class="card card-register card-white">
                <div class="card-header">
                    <!-- <img class="card-img" src="{{ asset('black') }}/img/card-primary.png" alt="Card image"> -->
                    <h4 class="card-title">{{ __('CRM Registration') }}</h4>
                </div>
                <form class="form" method="post" action="{{ route('register') }}">
                    @csrf

                    <div class="card-body">
                        <!-- Name -->
                        <div class="input-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-single-02"></i>
                                </div>
                            </div>
                            <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name') }}" required>
                            @include('alerts.feedback', ['field' => 'name'])
                        </div>
                        <br/>
                        
                        <!-- Email -->
                        <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-email-85"></i>
                                </div>
                            </div>
                            <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ old('email') }}" required>
                            @include('alerts.feedback', ['field' => 'email'])
                        </div>
                        <br/>
                        
                        <!-- Role -->
                        <div class="input-group{{ $errors->has('role') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-settings"></i>
                                </div>
                            </div>
                            <select name="role" class="form-control{{ $errors->has('role') ? ' is-invalid' : '' }}" required>
                                <option value="" disabled selected>{{ __('Select Role') }}</option>
                                <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>{{ __('Administrator') }}</option>
                                <option value="manager" {{ old('role') == 'manager' ? 'selected' : '' }}>{{ __('Manager') }}</option>
                                <option value="sales" {{ old('role') == 'sales' ? 'selected' : '' }}>{{ __('Sales Representative') }}</option>
                                <option value="support" {{ old('role') == 'support' ? 'selected' : '' }}>{{ __('Customer Support') }}</option>
                                <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>{{ __('Standard User') }}</option>
                            </select>
                            @include('alerts.feedback', ['field' => 'role'])
                        </div>
                        <br/>
                        
                        <!-- Password -->
                        <div class="input-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-lock-circle"></i>
                                </div>
                            </div>
                            <input type="password" name="password" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}" required>
                            <div class="input-group-append">
                                <div class="input-group-text" onclick="togglePassword('password', 'togglePasswordIcon')">
                                    <i class="tim-icons icon-eye" id="togglePasswordIcon"></i>
                                </div>
                            </div>
                            @include('alerts.feedback', ['field' => 'password'])
                        </div>
                        <br/>
                        
                        <!-- Confirm Password -->
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-lock-circle"></i>
                                </div>
                            </div>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="{{ __('Confirm Password') }}" required>
                            <div class="input-group-append">
                                <div class="input-group-text" onclick="togglePassword('password_confirmation', 'toggleConfirmPasswordIcon')">
                                    <i class="tim-icons icon-eye" id="toggleConfirmPasswordIcon"></i>
                                </div>
                            </div>
                        </div>
                        <br/>
                        
                        <!-- Terms and Conditions -->
                        <div class="form-check text-left">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="terms" required>
                                <span class="form-check-sign"></span>
                                {{ __('I agree to the') }}
                                <a href="#">{{ __('terms and conditions') }}</a>.
                                @if ($errors->has('terms'))
                                    <span class="text-danger">{{ $errors->first('terms') }}</span>
                                @endif
                            </label>
                        </div>
                    </div>
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-round btn-lg">{{ __('Register CRM Account') }}</button>
                        <div class="text-center mt-3">
                            <p>{{ __('Already have an account?') }} <a href="{{ route('login') }}">{{ __('Sign in') }}</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
    function togglePassword(inputId, iconId) {
        const passwordInput = document.getElementById(inputId);
        const toggleIcon = document.getElementById(iconId);
        
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            toggleIcon.classList.remove('icon-eye');
            toggleIcon.classList.add('icon-eye-off');
        } else {
            passwordInput.type = 'password';
            toggleIcon.classList.remove('icon-eye-off');
            toggleIcon.classList.add('icon-eye');
        }
    }
    </script>
@endsection
