 @extends('dashboard.user.master_user')
 @section('content')

 <h4 class="p-2 text-danger">User Dashboard</h4>
 <div class="container">
     <button class="btn btn-danger btn-sm"><a class="text-white" href="{{ route('user.dashboard') }}"><i class="fa-solid fa-circle-arrow-left"></i> Back</a></button>
 </div>

 <div class="container">
     <div class="applier-form">
         <h5 class="mb-4">Edit Applier Job</h5>
         <form method="post" action="{{ route('user.jobapplier.update', $jobapplier->id) }}">
             @csrf
             @method('PUT')
              <div class="form-group mb-3">
                 <label for="exampleFormControlInput1 mb-3">Your Name</label>
                 <input type="text" class="form-control form-control-sm px-3 py-2 mt-2" name="name" id="exampleFormControlInput1" placeholder="Your Name" value="{{ $jobapplier->name }}">
                 <div class="pt-1 text-danger">
                     @error('name')
                     <div class="error">{{ $message }}</div>
                     @enderror
                 </div>
             </div>
             <div class="form-group mb-3">
                 <label for="exampleFormControlInput1 mb-3">Company Name</label>
                 <input type="text" class="form-control form-control-sm px-3 py-2 mt-2" name="company_name" id="exampleFormControlInput1" placeholder="Company Name" value="{{ $jobapplier->company_name }}">
                 <div class="pt-1 text-danger">
                     @error('company_name')
                     <div class="error">{{ $message }}</div>
                     @enderror
                 </div>
             </div>
             <div class="form-group mb-3">
                 <label for="exampleFormControlInput1 mb-3">Job Title</label>
                 <input type="text" class="form-control form-control-sm px-3 py-2 mt-2" name="job_title" id="exampleFormControlInput1" placeholder="Job Title" value="{{ $jobapplier->job_title }}">
                 <div class="pt-1 text-danger">
                     @error('job_title')
                     <div class="error">{{ $message }}</div>
                     @enderror
                 </div>
             </div>
             <div class="form-group mb-3">
                 <label for="exampleFormControlInput1 mb-3">Application Date</label>
                 <input type="date" class="form-control form-control-sm px-3 py-2 mt-2" name="application_date" id="exampleFormControlInput1" placeholder="Application Date" value="{{ $jobapplier->application_date }}">
                 <div class="pt-1 text-danger">
                     @error('application_date')
                     <div class="error">{{ $message }}</div>
                     @enderror
                 </div>
             </div>
             <div class="form-group mb-3">
                 <label for="exampleFormControlInput1 mb-3">Application Status</label>
                 <div>
                     <select class="nice-select mt-2 px-3" aria-label="Default select example" name="application_status">
                         <option selected>Application Status</option>
                         <option value="Applied" {{ $jobapplier->application_status == 'Applied' ? 'selected' : '' }}>Applied</option>
                         <option value="Interview Scheduled" {{ $jobapplier->application_status == 'Interview Scheduled' ? 'selected' : '' }}>Interview Scheduled</option>
                         <option value="Offer Received" {{ $jobapplier->application_status == 'Offer Received' ? 'selected' : '' }}>Offer Received</option>
                         <option value="Offer Rejected" {{ $jobapplier->application_status == 'Offer Rejected' ? 'selected' : '' }}>Offer Rejected</option>
                     </select>
                 </div>
                 <div class="pt-1 text-danger">
                     @error('application_status')
                     <div class="error">{{ $message }}</div>
                     @enderror
                 </div>
             </div>
             <div class="form-group mb-3">
                 <label for="exampleFormControlInput1 mb-3">Job Board</label>
                 <input type="text" class="form-control form-control-sm px-3 py-2 mt-2" name="job_board" id="exampleFormControlInput1" placeholder="Job Board" value="{{ $jobapplier->job_board }}">
                 <div class="pt-1 text-danger">
                     @error('job_board')
                     <div class="error">{{ $message }}</div>
                     @enderror
                 </div>
             </div>
             <div class="form-group mb-3">
                 <label for="exampleFormControlInput1 mb-3">Notes</label>
                 <input type="text" class="form-control form-control-sm px-3 py-2 mt-2" name="notes" id="exampleFormControlInput1" placeholder="Notes" value="{{ $jobapplier->notes }}">
                 <div class="pt-1 text-danger">
                     @error('notes')
                     <div class="error">{{ $message }}</div>
                     @enderror
                 </div>
             </div>
             <button class="btn btn-sm btn-danger text-white" type="submit">Update</button>
             <div class="pt-4">
                 <hr>
             </div>
         </form>

         <!--/ End Form -->
     </div>
 </div>

 @endsection