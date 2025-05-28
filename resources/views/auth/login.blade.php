
 @extends('auth.master_auth')
 @section('content')
 
 <section class="login section">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{ asset('auth/assets/images/images11.jpg') }}" width="750px" height="700px">
                    </div>
                    <div class="col-lg-6">
                        <div class="login-form">
                            <h2>Login Here</h2>
                            <p class="mb-3">Didn't you account yet ? <a href="{{ route('register') }}">Register Here</a></p>
                            <!-- Form -->
                            <form method="post" action="{{ route('login.store') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-sm px-3 py-2" name="email" id="exampleFormControlInput1" placeholder="Email">
                                    <div class="pt-1 text-danger">
                                        @error('email')
                                        <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-sm px-3 py-2" name="password" id="exampleFormControlInput1" placeholder="Password">
                                    <div class="pt-1 text-danger">
                                        @error('password')
                                        <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <button class="btn btn-sm btn-primary text-white" type="submit">Login</button>
                            </form>
                            <!--/ End Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection