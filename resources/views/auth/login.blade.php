<x-guest-layout>
    <x-auth-card>
        <!--<x-slot name="logo">
          <a href="/">
               <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
           </a>
        </x-slot>-->

        <div class="login-logo">
            <a href="<?= url('/') ?>">SydneyAutomation</a>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="input-group mb-3">
                        <x-input id="email" class="form-control" type="email" name="email" :value="old('email')"
                            required />
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="input-group mb-3">
                        <x-input id="password" class="form-control" type="password" name="password" required
                            autocomplete="current-password" />
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="col-4">
                        <x-button class="btn btn-primary btn-block">
                            {{ __('Log in') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </x-auth-card>
</x-guest-layout>
