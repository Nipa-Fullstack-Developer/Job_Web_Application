 @extends('dashboard.user.master_user')
 @section('content')

 <h4 class="p-2 text-danger">User Dashboard</h4>
 <div class="container">
     <button class="btn btn-danger btn-sm"><a class="text-white" href="{{ route('user.dashboard') }}"><i class="fa-solid fa-circle-arrow-left"></i> Back</a></button>
 </div>
 <div class="container">
     <div class="row">
         <div class="col">
             <div class="applier-form">
                 <h5 class="mb-4">Edit Applier Image</h5>

                 <form method="post" action="{{ route('user.jobapplier.image.update', $jobapplier->id) }}" enctype="multipart/form-data">
                     @csrf
                     @method('PUT')
                     <div class="row d-flex">
                         <div class="col-lg-6">
                             <label for="exampleFormControlInput1 mb-3">Previous Applier Image</label>
                             <div class="pt-3">
                                 <img src="{{ asset('/uploads/newjobapplier/' . $jobapplier->newapplier_img ) }}" width="250px" height="250px">
                             </div>
                         </div>
                         <div class="col-lg-6">
                             <div>
                                 <label for="exampleFormControlInput1 mb-3">New Applier Image</label>
                                 <div>
                                     <input class="mt-2" type="file" name="newapplier_img" accept="image/jpeg, image/png, image/jpg" onchange="previewImage(event)">
                                 </div>
                                 <div class="pt-3">
                                     <img id="imagePreview" width="150px" height="150px">
                                 </div>
                                 <div class="pt-1 text-danger">
                                     @error('newapplier_img')
                                     <div class="error">{{ $message }}</div>
                                     @enderror
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="mb-3 mt-4">
                         <button class="btn btn-sm btn-danger text-white" type="submit">Update</button>
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