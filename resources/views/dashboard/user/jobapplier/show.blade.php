 @extends('dashboard.user.master_user')
 @section('content')


 <h4 class="p-2 text-danger">Job Applier Details</h4>
 <div class="container">
     <button class="btn btn-danger btn-sm"><a class="text-white" href="{{ route('user.dashboard') }}"><i class="fa-solid fa-circle-arrow-left"></i> Back</a></button>
 </div>

 <div class="container">
     <div class="row">
         <div class="col-lg-6">
             <img src="{{ asset('/uploads/newjobapplier/' . $jobapplier->newapplier_img ) }}" width="675px" height="500px">
         </div>
         <div class="applier-details col-lg-6">
             <div>
                 <label for="name">Applier Name : {{ $jobapplier->name }}</label>
             </div>
             <div class="pt-2">
                 <label for="company_name">Company Name : {{ $jobapplier->company_name }}</label>
             </div>
             <div class="pt-2">
                 <label for="job_title">Job Title : {{ $jobapplier->job_title }}</label>
             </div>
             <div class="pt-2">
                 <label for="application_date">Application Date : {{ $jobapplier->application_date }}</label>
             </div>
             <div class="pt-2">
                 <label for="application_status">Application Status : {{ $jobapplier->application_status }}</label>
             </div>
             <div class="pt-2">
                 <label for="job_board">Job Board : {{ $jobapplier->job_board }}</label>
             </div>
             <div class="pt-2">
                 <label for="notes">Notes : {{ $jobapplier->notes }}</label>
             </div>

             <div class="pt-5">
                 <button class="btn btn-danger"><a class="text-white" href="{{ route('user.jobapplier.print_pdf', $jobapplier->id) }}">Download PDF</a></button>
             </div>
         </div>
     </div>


 </div>

 @endsection