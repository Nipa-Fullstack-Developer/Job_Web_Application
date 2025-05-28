<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobapplier Details View</title>
</head>

<body>
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
                                <img src="uploads/newjobapplier/{{ $jobappliers->newapplier_img}}" width="250px" height="150px">
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
</body>

</html>