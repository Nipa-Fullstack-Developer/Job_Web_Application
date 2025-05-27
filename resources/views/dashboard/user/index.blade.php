@extends('dashboard.user.master_user')
@section('content')

<h4 class="p-2 text-danger">User Dashboard</h4>
<div class="container">
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Serial No.</th>
                        <th scope="col">Applier Image</th>
                        <th scope="col">Company Name</th>
                        <th scope="col">Job Title</th>
                        <th scope="col">Application Date</th>
                        <th scope="col">Application Status</th>
                        <th scope="col">Job Board</th>
                        <th scope="col">Notes</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count = 0; ?>
                    @foreach($jobapplier as $jobappliers)
                    <?php $count++; ?>
                    <tr>
                        <td>{{ $count }}</td>
                        <td>
                            <img src="{{ asset('/uploads/newjobapplier/' . $jobappliers->newapplier_img ) }}" width="50px" height="50px">
                        </td>
                        <td>{{ $jobappliers->company_name }}</td>
                        <td>{{ $jobappliers->job_title }}</td>
                        <td>{{ $jobappliers->application_date }}</td>
                        <td>{{ $jobappliers->application_status }}</td>
                        <td>{{ $jobappliers->job_board }}</td>
                        <td>{{ $jobappliers->notes }}</td>
                        <td class="d-flex">
                            <div class="p-2 bg-danger">
                                <a class="text-white" href="{{ route('user.jobapplier.image.edit', $jobappliers->id) }}"><i class="fa-solid fa-file-pen" style="font-size: 16px;"></i></a>
                            </div>
                            <div class="p-2" style="background-color: rgb(3, 3, 206);">
                                <a class="text-white" href="{{ route('user.jobapplier.edit', $jobappliers->id) }}"><i class="fa-solid fa-pen-to-square" style="font-size: 16px;"></i></a>
                            </div>
                            <div class="p-2 bg-danger">
                                <a class="text-white" href="{{ route('user.jobapplier.destroy', $jobappliers->id) }}"><i class="fa-solid fa-trash" style="font-size: 16px;"></i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection