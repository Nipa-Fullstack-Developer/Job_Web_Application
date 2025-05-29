 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Job Applier Details</title>

     <style>
         .img-logo {
             width: 250px;
             height: 250px;
             border-radius: 100%;
             float: left;
             padding-top: 20px;
         }

         .pdf h4 {
             text-align: center;
             font-size: 20px;
             color: darkred;
         }

         .pdf hr {
             width: 100%;

         }
         .details
         {
            padding-top: 30px;
            padding-left: 40px;
         }

         .details label {
             font-size: 18px;
             padding-left: 50px;
             font-family: 'Poppins', sans-serif;
         }
         .details .details1{
            padding-bottom: 10px;
            

         }
     </style>
 </head>

 <body>
     <div class="pdf">
         <h4 class="p-2 text-danger">Job Applier Details</h4>
         <hr>
     </div>
     <div class="pdf container">
         <div class="row">
             <div class="col-lg-6">
                 <img class="img-logo" src="uploads/newjobapplier/{{ $jobapplier->newapplier_img }}">
             </div>
             <div class="details col-lg-6 pt-6">
                 <div class="details1 pt-2">
                     <label for="name">Applier Name : {{ $jobapplier->name }}</label>
                 </div>
                 <div class="details1 pt-2">
                     <label for="company_name">Company Name : {{ $jobapplier->company_name }}</label>
                 </div>
                 <div class="details1 pt-2">
                     <label for="job_title">Job Title : {{ $jobapplier->job_title }}</label>
                 </div>
                 <div class="details1 pt-2">
                     <label for="application_date">Application Date : {{ $jobapplier->application_date }}</label>
                 </div>
                 <div class="details1 pt-2">
                     <label for="application_status">Application Status : {{ $jobapplier->application_status }}</label>
                 </div>
                 <div class="details1 pt-2">
                     <label for="job_board">Job Board : {{ $jobapplier->job_board }}</label>
                 </div>
                 <div class="details1 pt-2">
                     <label for="notes">Notes : {{ $jobapplier->notes }}</label>
                 </div>
             </div>
         </div>
     </div>
 </body>

 </html>