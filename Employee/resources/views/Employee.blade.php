@extends('master')
@section('content')



 
  
   <section class="section-test mt-8">
        <header class="section-header">
            <h2> EMPLOYEE REGISTRATION FORM</h2>
            <hr>
            </header>
       <div class="container">
            
            <form name="employee_form" class="form control text-centre"  method=POST enctype="multipart/form-data" action='/employees'>
            
                {{ csrf_field() }}

                <div class="row">

                    <div class="col-md-2"></div>

                    <div class="form-group col-10 col-md-4">
                      
				
                        <label class="label-test">First Name</label>

                         <input class="form-control" type="text" name="fname" placeholder="First Name" id="first_name" value="{{ old('fname') }}"  required="">
                        
                         @if ($errors->has('fname'))

                <span class="text-danger">{{ $errors->first('fname') }}</span>
                <span class="text-area-danger"> {{ $errors->has('fname') ? 'is-danger' : '' }}</span>
            @endif
                    </div>
    
                    <div class="form-group col-10 col-md-4">
                            <label class="label-test">Last Name</label>
                        <input class="form-control" type="text" name="lname" placeholder="Last Name" id="last_name"  value="{{ old('lname') }}"  required="">
                        <span class="span-test text-danger">{{ $errors->first('lname') }}</span>
                      </div>

                    <div class="col-md-2"></div>


                </div>
                              <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="form-group col-12 col-md-4">
                                            <label class="label-test">Email</label>
                                      <input class="form-control" type="text" name="email" placeholder="Email" id="email" value="{{ old('email') }}"  required="">
                                    
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                    </div>
                    
                                    <div class="form-group col-12 col-md-4">
                                            <label class="label-test">Mobile No</label>
                                      <input class="form-control" type="text" name="mobile" placeholder="mobileno" id="mobile" value="{{ old('mobile') }}"  required="">
                                      <span class="text-danger">{{ $errors->first('mobile') }}</span>
                                    </div>
                                 
                                  <div class="col-md-2"></div>
                                </div>
              
                          
                                  <div class="row">
                                        <div class="col-md-2"></div>
                                        <div class="form-group col-12 col-md-4">
                                                <label class="label-test">Password</label>
                                          <input class="form-control" type="password" name="password" placeholder="Enter password" id="password" value="{{ old('password') }}" required="">
                                          <span class="text-danger">{{ $errors->first('password') }}</span>
                                        </div>
                        
                                        <div class="form-group col-12 col-md-4">
                                                <label class="label-test">Confirm Password</label>
                                          <input class="form-control" type="password" name="password" placeholder="Confirm password" id="confirm pass" value="{{ old('password') }}"  required="">
                                          
                                         
                                        </div>
                                        <div class="col-md-2"></div>
                                    </div>
                                    
                                    
                 <div class="row">
                        <div class="col-md-2"></div>
                             
                    <div class="col-md-2">
                       <label class="label-test">Gender</label>
                    </div>
                                                        
                        <div class="col-md-2">

                            <div class="row"> 
                                    <div class="custom-controls-stacked">
                                            <div class="custom-control custom-radio">
                                              <input type="radio" class="custom-control-input" name="gender" value="male" >
                                              <label class="custom-control-label"><label class="label-test">Male</label>
                                            </div>
                                    </div>
                                            <div class="custom-control custom-radio">
                                              <input type="radio" class="custom-control-input" name="gender" value="female" checked>
                                              <label class="custom-control-label"><label class="label-test">Female</label>
                                            </div>
                                   
                           
                           
                        </div>
                            </div>

                            <div class="form-group col-12 col-md-4">
                                    <label class="label-test">Date of Birth</label>
                              <input class="form-control" type="date" name="dob" placeholder="dob" id="dob" value="{{ old('dob') }}" required="">
                              <span class="text-danger">{{ $errors->first('dob') }}</span>
                            </div>
                            <div class="col-md-2"></div>
                        </div> 

                           
            

                            <div class="row">
                                    <div class="col-md-2"></div>
                                    
                                   

                                   <div class="form-group col-12 col-md-8">
                                    <label class="label-test">Upload photo </label>
                                   
                                   <input type="file" class="form-control" name="photo" placeholder="Upload Photo" id="photo" value="{{ old('photo') }}"  required="">
                                   <span class="text-danger">{{ $errors->first('photo') }}</span>
                                  </div>

                                  <div class="col-md-2"></div>
                            </div>
                  
           
                   
                <div class="row">
                        <div class="col-md-2"></div>
                         <div class="form-group col-8">
                                <label class="label-test">Address</label>
                            <textarea class="form-control" name="address" placeholder="Enter address" rows="3" id="address" value="{{old('address')}}"  required=""></textarea>
                            <span class="text-danger">{{ $errors->first('address') }}</span>
                          </div>
                          
                                <div class="col-md-2"></div>
                             </div>

                          
                    <div class="row">
                        <div class="col-md-2"></div>
                   
                          <div class="form-group col-8">
                              <button class="btn btn-lg btn-block btn-primary" type="submit" onclick="return validateForm()">Submit</button>
                          </div>
                          
                        <div class="col-md-2"></div>
                    </div>
           
            
        </form>  
       </div>
</section>



<script>
  function validateForm() {
    var x = document.getElementById('first_name').value;
    if (x == "") {
      alert("FirstName must be filled out");
      return false;
    }

    var x1 = document.getElementById('last_name').value;
    if (x1 == "") {
      alert("LastName must be filled out");
      return false;
    }
    var x2 = document.getElementById('email').value;
    if (x2 == "") {
      alert("email must be filled out");
      return false;
    }
    var x3 = document.getElementById('mobile').value;
    if (x3 == "") {
      alert("mobileno must be filled out");
      return false;
    }
    var x4 = document.getElementById('password').value;
    if (x4 == "") {
      alert("password must be filled out");
      return false;
    }
    var x5 = document.getElementById('confirm pass').value;
    if (x5 == "") {
      alert("confirm password must be filled out");
      return false;
    }

   
    var x6 = document.getElementById('dob').value;
    if (x6 == "") {
      alert("dob must be filled out");
      return false;
    }
    var x7 = document.getElementById('photo').value;
    if (x7 == "") {
      alert("Upload photo");
      return false;
    }
    var x8 = document.getElementById('address').value;
    if (x8 == "") {
      alert("Address must be filled out");
      return false;
    }
 
 

}
</script>
 
  
 
@endsection                
    
        
               
               
               



                                       
                                                                                             
          
                
                           
                             
                           
                       
                            
                                        
                           
                            
                            