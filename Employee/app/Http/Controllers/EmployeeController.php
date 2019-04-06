<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Crypt;
use Session;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('employee');
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // session()->forget('login');
        Session::flush();
        return Redirect::to('/login'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $name=($request->fname).' '.($request->lname);
      $email=$request->email;
      $mobile=$request->mobile;
      $password=$request->password;

      $pass = Crypt::encrypt($password);

      $gender=$request->gender;
      $dob=$request->dob;
    //   $photo=$request->photo;
      $address=$request->address;


      
      $fileNameWithExt = $request->file('photo')->getClientOriginalName();
      $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
      $this->validate($request,[
         
        'photo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:102400']);
     
      $extension = $request->file('photo')->getClientOriginalExtension();
      $fileNameToStore = $filename.'_'.time().'.'.$extension;
      $path = $request->file('photo')->storeAs('public/profiles', $fileNameToStore);


    
      
         employee::insert(['name'=>$name,'email'=>$email,'mobile'=>$mobile,'password'=>$pass,'gender'=>$gender,'dob'=>$dob,'photo'=>$fileNameToStore,'address'=>$address]);
    //   }
        //  public function formValidationPost(Request $request)
        //  {
             $this->validate($request,[
                     'name' => 'required|min:5|max:35',
                    //   'name' => 'required|min:2',
                     'email' => 'required|email',
                    //  |unique:employees
                     'mobile' => 'required|numeric',
                     'password' => 'required|min:3|max:20',
                     'confirm password' => 'required|min:3|max:20|same:password',
                     'dob'=>'required',
                     'address'=>'required'
                 ],[
                     'name.required' => ' The first name field is required.',
                     'name.min' => ' The first name must be at least 5 characters.',
                     'name.max' => ' The first name may not be greater than 35 characters.',
                     'name.required' => ' The last name field is required.',
                    //  'lastname.min' => ' The last name must be at least 5 characters.',
                    //  'lastname.max' => ' The last name may not be greater than 35 characters.',
                 ]);
     
     
             dd('You are successfully added all fields.');
         }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
       
     
       return view('login');
   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($employeeid)
    {
       
        $employee=Employee::find($employeeid);
        $dbpass = $employee->password;
        $pass = Crypt::decrypt($dbpass);
        
    //      $employeepic=$employee->photo;
    //   return $employeepic;
        return view('edit',compact('employee','pass'));
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $request->all();
        return $request;
    //     $employeeid=$request->employeeid;
    //     $name=($request->fname).' '.($request->lname);
    //     $email=$request->email;
    //     $mobile=$request->mobile;
    //     $password=$request->password;
    //     $gender=$request->gender;
    //     $dob=$request->dob;
    //     $address=$request->address;


      
    //   $fileNameWithExt = $request->file('photo')->getClientOriginalName();
    //   $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
    //   $this->validate($request,[
         
    //     'photo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:102400']);
     
    //   $extension = $request->file('photo')->getClientOriginalExtension();
    //   $fileNameToStore = $filename.'_'.time().'.'.$extension;
    //   $path = $request->file('photo')->storeAs('public/profiles', $fileNameToStore);

    //  employee::where('id',$employeeid)->update(['name'=>$name,'email'=>$email,'mobile'=>$mobile,'password'=>$password,'gender'=>$gender,'dob'=>$dob,'photo'=>$fileNameToStore,'address'=>$address]);
    
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }
    public function login(Request $request)
    { 
        $email= $request->email;
        $password = $request->password;

        
        $this->validate($request,[
                'email'=> 'required|email  ', 
                'password' => 'required',
        ]);
                
        
         $employee = Employee::where(['email' => $email])->get();
 
         if(count($employee)!=0){
              
            //return $employee[0]["name"];
            
                  $db_pass=$employee[0]["password"];
                //   return $db_pass;
               
                //$db_pass = $employee->password;
                
                $pass = Crypt::decrypt($db_pass);
               
               
                 $employeename=$employee[0]["name"];
                 $employeeid=$employee[0]["id"];
                


                if($pass==$password)
                {
                    Session::put('login', '1');
                    
                    return view('dashboard', compact('employeename','employeeid','pass'));

                    // return view('dashboard');
                }
                else{
                    return view('login');
                }
            }
           
       
        }
    }