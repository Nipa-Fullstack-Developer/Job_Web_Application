@extends('home.master_index')
@section('content')
<div class="container">
    <div class="row pt-4">
        <div class="col-lg-6">
            <img src="{{ asset('home/assets/images/images11.jpg') }}" width="750px" height="700px">
        </div>
        <div class="col-lg-6">
            <div class="applier-form">
                <h2 class="mb-4">Apply New Job</h2>

                <form method="post" action="{{ route('user.jobapplier.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1 mb-3">Company Name</label>
                        <input type="text" class="form-control form-control-sm px-2 py-2" name="company_name" id="exampleFormControlInput1" placeholder="Company Name">
                        <div class="pt-1 text-danger">
                            @error('name')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1 mb-3">Job Title</label>
                        <input type="text" class="form-control form-control-sm px-2 py-2" name="job_title" id="exampleFormControlInput1" placeholder="Job Title">
                        <div class="pt-1 text-danger">
                            @error('job_title')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1 mb-3">Application Date</label>
                        <input type="date" class="form-control form-control-sm px-2 py-2" name="application_date" id="exampleFormControlInput1" placeholder="Application Date">
                        <div class="pt-1 text-danger">
                            @error('application_date')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1 mb-3">Application Status</label>
                        <div>
                            <select class="nice-select" aria-label="Default select example" name="application_status">
                                <option selected>Application Status</option>
                                <option value="Applied">Applied</option>
                                <option value="Interview Scheduled">Interview Scheduled</option>
                                <option value="Offer Received">Offer Received</option>
                                <option value="Offer Rejected">Offer Rejected</option>
                            </select>
                        </div>
                        <div class="pt-1 text-danger">
                            @error('application_status')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>


                    <div>
                        <label for="exampleFormControlInput1 mb-3">Applier Image</label>
                        <div>
                            <input type="file" name="newapplier_img" accept="image/jpeg, image/png, image/jpg" onchange="previewImage(event)">
                        </div>
                        <div class="pt-3">
                            <img id="imagePreview" width="200px" height="120px">
                        </div>
                        <div class="pt-1 text-danger">
                            @error('newapplier_img')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-sm btn-primary text-white" type="submit">Apply Now</button>
                    </div>
                    <div class="pt-4">
                        <hr>
                    </div>
                </form>

                <!--/ End Form -->
            </div>
        </div>
    </div>
</div>
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