@extends('master')
@section('content')
 
   <section class="section">
       <div class="container">
           <div class="row">
               <div class="col-md-3"></div>
                 <div class="col-md-3">
                    <form class="form control text-centre" method=POST actions='/employees'>
                        
                        {{ csrf_field() }}
                        <div class=" form group">
                            Employee Name<input  name="name" type="text" placeholder="Enter full Name">
                        </div>
                        <div class="form group">
                            <label class="col-md-3" control label>Email:</label>
                          <input class="input control" type="email"  name="email" placeholder="enter email">
                              </div>
                               
                              <div class="form group">
                                    <label class="col-md-3" control label>Password</label>
                                <input class="input control" type="password"  name="password" placeholder="enter password">
                                  </div>

                                  <div class="form group">
                                        <label class="col-md-3" control label>Confirm Passsword</label>
                                   <input class="input control" type="password"  name="password" placeholder="confirm password">
                                   </div>
                              
                                   <div class="form group">
                                        <label class="col-md-3" control label> Date of Birth</label>
                                   <input class=" input control" type="date" name="dob" placeholder="DOB">
                                       </div>
                        <div class="form group">
                           Gender
                            <input type="radio" name="gender" value="male" checked> Male<br>
                            <input type="radio" name="gender" value="female"> Female<br>
                            <input type="radio" name="gender" value="other"> Other  
                         
                               </div>
                        <div class="form group">
                                {{-- Employee MobNo <input type="number" name="mobile" placeholder="Enter Mobile no" > --}}
                                Employee MobNo <input type="tel" id="mobileno" name="mobileno">
                                        </div>
                         
                                Address<div class="form group">
                                        <textarea name="Address"  placeholder="Enter address"></textarea>
                                    </div>
                                   
                                           <div class="form group">
                                            <input  type="submit" value="REGISTER" >
                                               </div>
                 </div>
                 <div class="col-md-3"></div>
                </form>
           </div>
       </div>
   </section>
@endsection