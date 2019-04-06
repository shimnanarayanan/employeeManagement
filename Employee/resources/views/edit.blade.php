@extends('master')
@section('content')
  
   <section class="section-test mt-8">
        <header class="section-header">
            <h2> EMPLOYEE REGISTRATION FORM</h2>
            <hr>
            {{-- <img src="/storage/public/profiles/{{$employee->photo}}"  height="100px" width="100px"> --}}
            </header>
         
       <div class="container">
            
            <form name="employee_form" class="form control text-centre"  method=POST enctype="multipart/form-data" action='/update'>
              
                {{ csrf_field() }}

                <div class="row">

                    <div class="col-md-2"></div>

                    <div class="form-group col-10 col-md-4 {{ $errors->has('fname') ? 'has-error' : '' }}">
                      
				
                        <label class="label-test">First Name</label>

                         <input class="form-control" type="text" name="fname" placeholder="First Name" id="first_name" value="{{$employee->name}}"  required="">
                        
                         @if ($errors->has('fname'))

                <span class="text-danger">{{ $errors->first('fname') }}</span>

            @endif
                    </div>
    
                    <div class="form-group col-10 col-md-4">
                            <label class="label-test">Last Name</label>
                        <input class="form-control" type="text" name="lname" placeholder="Last Name" id="last_name"  value="{{ $employee->name}}"  required="">
                        <span class="span-test text-danger">{{ $errors->first('lname') }}</span>
                      </div>

                    <div class="col-md-2"></div>


                </div>
                              <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="form-group col-12 col-md-4">
                                            <label class="label-test">Email</label>
                                      <input class="form-control" type="text" name="email" placeholder="Email" id="email" value="{{$employee->email }}"  required="">
                                    
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                    </div>
                    
                                    <div class="form-group col-12 col-md-4">
                                            <label class="label-test">Mobile No</label>
                                      <input class="form-control" type="text" name="mobile" placeholder="mobileno" id="mobile" value="{{ $employee->mobile }}"  required="">
                                      <span class="text-danger">{{ $errors->first('mobile') }}</span>
                                    </div>
                                 
                                  <div class="col-md-2"></div>
                                </div>
              
                          
                                  <div class="row">
                                        <div class="col-md-2"></div>
                                        <div class="form-group col-12 col-md-4">
                                                <label class="label-test">Password</label>
                                         
                                               <input class="form-control" type="password" name="password" placeholder="Enter password" id="password" value="{{ $pass}}" required="">
                                               <button onclick="show()"><img src="https://i.stack.imgur.com/Oyk1g.png" id="EYE"></button>
                                               <span class="text-danger">{{ $errors->first('password') }}</span>
                                        </div>
                        
                                        <div class="form-group col-12 col-md-4">
                                                <label class="label-test">Confirm Password</label>
                                          <input class="form-control" type="password" name="password" placeholder="Confirm password" id="confirm pass" required="">
                                          {{-- <button onclick="show()"><img src="https://i.stack.imgur.com/Oyk1g.png" id="EYE"></button> --}}
                                         
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
                                              <input type="radio" class="custom-control-input" name="gender" value="{{$employee->gender}}" >
                                              <label class="custom-control-label"><label class="label-test">Male</label>
                                            </div>
                                    </div>
                                            <div class="custom-control custom-radio">
                                              <input type="radio" class="custom-control-input" name="gender" value="{{$employee->gender}}" checked>
                                              <label class="custom-control-label"><label class="label-test">Female</label>
                                            </div>
                                   
                           
                           
                        </div>
                            </div>

                            <div class="form-group col-12 col-md-4">
                                    <label class="label-test">Date of Birth</label>
                              <input class="form-control" type="date" name="dob" placeholder="dob" id="dob" value="{{$employee->dob}}" required="">
                              <span class="text-danger">{{ $errors->first('dob') }}</span>
                            </div>
                            <div class="col-md-2"></div>
                        </div> 

                           
            

                            <div class="row">
                                    <div class="col-md-2"></div>
                                    
                                   

                                   <div class="form-group col-12 col-md-8">
                                    <label class="label-test">Upload photo </label>
                                   
                                   
                                    <input type="file" class="form-control" name="photo" placeholder="Upload Photo" id="photo" value="{{$employee->photo}}"  required="">
                                   {{-- <img src="/storage/pubilc/profiles" alt="photo"> --}}
                                    <span class="text-danger">{{ $errors->first('photo') }}</span>
                                  </div>

                                  <div class="col-md-2"></div>
                            </div>
                  
           
                   
                <div class="row">
                        <div class="col-md-2"></div>
                         <div class="form-group col-8">
                                <label class="label-test">Address</label>
                            <textarea class="form-control" name="address" placeholder="Enter address"  id="address" value="{{$employee->address}}"  required=""></textarea>
                            <span class="text-danger">{{ $errors->first('address') }}</span>
                          </div>
                          
                                <div class="col-md-2"></div>
                             </div>

                          
                    <div class="row">
                        <div class="col-md-2"></div>
                   
                          <div class="form-group col-8">
                              <button class="btn btn-lg btn-block btn-primary" type="submit" onclick="return validateForm()"  >Submit</button>
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
function show() {
var a=document.getElementById("password");
var b=document.getElementById("EYE");
if (a.type=="password")  {
a.type="text";
b.src="https://i.stack.imgur.com/waw4z.png";
}
else {
a.type="password";
b.src="https://i.stack.imgur.com/Oyk1g.png";
}
}
</script>
 
  
 
@endsection                
    
        
               
               
               



                                       
                                                                                             
          
                
                           
                             
                           
                       
                            
                                        
                           
                            
                            