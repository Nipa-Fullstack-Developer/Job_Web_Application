 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Job Applier Details</title>
 </head>

 <body>
     <h4 class="p-2 text-danger">Job Applier Details</h4>
     <div class="container">
         <div class="row d-flex">
             <div class="col-lg-6">
                 <img src="uploads/newjobapplier/{{ $jobapplier->newapplier_img }}" width="675px" height="500px">
             </div>
             <div class="applier-details col-lg-6 pt-6">
                 <div class="pt-2">
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
             </div>
         </div>
     </div>
 </body>

 </html>