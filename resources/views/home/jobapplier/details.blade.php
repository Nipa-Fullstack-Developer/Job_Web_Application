@extends('home.master_index')
@section('content')

<div class="container-fluid bg-dark">
    <div class="row">
        <div class="col p-5">
            <h4 class="text-white text-center">Job Applier Details</h4>
        </div>
    </div>
</div>
<div class="container pt-5">
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Serial No.</th>
                        <th scope="col">Applier Image</th>
                        <th scope="col">Your Name</th>
                        <th scope="col">Company Name</th>
                        <th scope="col">Job Title</th>
                        <th scope="col">Application Date</th>
                        <th scope="col">Application Status</th>
                        <th scope="col">Job Board</th>
                        <th scope="col">Notes</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $count = 0; ?>
                    @foreach($jobapplier as $jobappliers)
                    <?php $count++; ?>
                    <tr>
                        <td>{{ $count }}</td>
                        <td>
                            <img src="{{ asset('/uploads/newjobapplier/' . $jobappliers->newapplier_img ) }}" width="250px" height="150px">
                        </td>
                        <td>{{ $jobappliers->name }}</td>
                        <td>{{ $jobappliers->company_name }}</td>
                        <td>{{ $jobappliers->job_title }}</td>
                        <td>{{ $jobappliers->application_date }}</td>
                        <td>{{ $jobappliers->application_status }}</td>
                        <td>{{ $jobappliers->job_board }}</td>
                        <td>{{ $jobappliers->notes }}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="container-fluid bg-danger mt-5">
    <div class="row">
        <div class="col p-2 text-center" style="font-size: 18px;">
             <a class="text-white" href="{{ route('jobapplier.details.show', $jobappliers->id) }}">Download PDF</a>
        </div>
    </div>
</div>
@endsection