<x-auth-layout>
 <div id="login-page" class="row">
    <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">
         <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
      <form class="login-form" action="{{ route('login') }}" method="POST">
        @csrf
        <div class="row">
          <div class="input-field col s12">
            <h5 class="ml-4">Sign in</h5>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="material-icons prefix pt-2">person_outline</i>
            <input id="email" type="email" name="email" value="{{ old('email') }}">
            <label for="email" class="center-align">Email</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="material-icons prefix pt-2">lock_outline</i>
            <input id="password" type="password" name="password">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">
          <div class="col s12 m12 l12 ml-2 mt-1">
            <p>
              <label>
                <input type="checkbox"  name="remember"/>
                <span>Remember Me</span>
              </label>
            </p>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <button type="submit"
              class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Login</button>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href="{{ route('register') }}">Register Now!</a></p>
          </div>
          <div class="input-field col s6 m6 l6">
            <p class="margin right-align medium-small"><a href="user-forgot-password.html">Forgot password ?</a>
            </p>
          </div>
        </div>
      </form>
    </div>
  </div>
</x-auth-layout>
