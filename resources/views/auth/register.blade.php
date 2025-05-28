@extends('auth.master_auth')
@section('content')

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="{{ asset('auth/assets/images/images11.jpg') }}" width="750px" height="700px">
            </div>
            <div class="col-lg-6">
                <div class="register-form">
                    <h2>Registration</h2>
                     <p class="mb-3">Didn't you account yet ? <a href="{{ route('login') }}">Login Here</a></p>
                    <!-- Form -->


                    <form method="post" action="{{ route('register.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control form-control-sm px-3 py-2" name="name" id="exampleFormControlInput1" placeholder="Name">
                            <div class="pt-1 text-danger">
                                @error('name')
                                <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
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
                        <div class="form-group">
                            <input type="password" class="form-control form-control-sm px-3 py-2" name="confirm_password" id="exampleFormControlInput1" placeholder="Confirm Password">
                            <div class="pt-1 text-danger">
                                @error('confirm_password')
                                <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group">
                            <input type="file" name="users_img" accept="image/jpeg, image/png, image/jpg" onchange="previewImage(event)">
                            <div class="pt-3">
                                <img id="imagePreview" width="200px" height="120px">
                            </div>
                            <div class="pt-1 text-danger">
                                @error('users_img')
                                <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <button class="btn btn-sm btn-primary text-white" type="submit">Register</button>
                    </form>
                    <!--/ End Form -->
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function previewImage(event) {
        var input = event.target;
        var reader = new FileReader();
        reader.onload = function() {
            var img = document.getElementById('imagePreview');
            img.src = reader.result;
            img.style.display = 'block';
        };
        reader.readAsDataURL(input.files[0]);
    }
</script>
@endsection