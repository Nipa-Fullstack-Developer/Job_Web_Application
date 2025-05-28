@extends('home.master_index')
@section('content')

<div class="container-fluid bg-dark p-5">
     <h5 class="text-white text-center">Job Applier Detais</h5>
</div>

<div class="container mt-5 mb-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($jobapplier_detail as $jobapplier_details)
        <div class="col pt-4">
            <div class="applier-card">
                <img class="card-img-top" src="{{ asset('/uploads/newjobapplier/' . $jobapplier_details->newapplier_img ) }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $jobapplier_details->name }}</h5>
                    <button class="btn btn-danger"><a href="{{ route('jobapplier.details.show', $jobapplier_details->id) }}">View Details</a></button>
                </div>
            </div>
        </div> 
        @endforeach
    </div>
</div>

@endsection