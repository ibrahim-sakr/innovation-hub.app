<x-naked-layout>
    <div class="login-register-page-wrapper edu-section-gap bg-color-white">
        <div class="container checkout-page-style">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="login-form-box">
                        <h3 class="mb-30">Login</h3>
                        <form class="login-form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="input-box mb--30">
                                <input type="text" name="email" value="{{ old('email') }}" required placeholder="Username or Email" />
                            </div>
                            <div class="input-box mb--30">
                                <input type="password" name="password" required placeholder="Password" />
                            </div>
                            @if(count($errors))
                                <p class="color-red">email or password is incorrect</p>
                            @endif
                            <div class="comment-form-consent input-box mb--30">
                                <input id="checkbox-1" type="checkbox" name="remember" />
                                <label for="checkbox-1">Remember Me</label>
                            </div>
                            <button class="rn-btn edu-btn w-100 mb--30" type="submit">
                                <span>Login to admin</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-naked-layout>
