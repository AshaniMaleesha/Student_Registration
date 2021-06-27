<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Student;

use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    function login(){
        return view('auth.login');
    }

    function register(){
        return view('auth.register');
    }

    
    function save(Request $request){
       
        //validate requests
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:admins',
            'password'=>'required|min:5|max:12'

        ]);

        //insert data into database
        $admin = new Admin;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $save = $admin->save();

        if($save){
            return back()->with('success','New user has been successfuly added to the database');
        }

        else{
            return back()->with('fail','Something went wrong,Try again later ');
        }
    }


    function check(Request $request ){

        //validate requests
        
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);

        $userInfo = Admin::where('email','=', $request->email)->first();
        
        if(!$userInfo){
            return back()->with ('fail','We do not recognize your email address');
        }
        else{
            //chech password

            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('admin/dashboard');

            }else{
                return back()->with('fail','Incorrect Password');
            }
        }
    }

    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/auth/login');
        }
    }

    function dashboard(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        return view('admin.dashboard', $data);
    }

   public function addStudent(){
        
        return view('addStudent');
     } 

    public function storeStudent (Request $request){
        $name= $request->name;
        $age=$request->age;
        $hometown=$request->hometown;
        $gender=$request->gender;
        
        $image=$request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName); 

        $student = new Student();
        $student->name = $name;
        $student->age = $age;
        $student->hometown = $hometown;
        $student->gender = $gender;
        $student->profileimage = $imageName ;
         /*if($request->hasfile('profileimage')){

            $file = $request->$file('profileimage');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images', $filename);
            $student->profileimage = $filename;
         } */
       
       

        $student->save();
        return back()->with('student_added','Student record has been inserted');
    }

    public function students(){
        $students = Student::all();
        return view('all-students', compact('students')); 
    }

    public function editStudent($id){
        $student = Student::find($id);
        return view('edit-student', compact('student'));
    }

    public function updateStudent(Request $request){
        $name= $request->name;
        $age=$request->age;
        $hometown=$request->hometown;
        $gender=$request->gender;
        $image=$request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName); 

        $student = Student::find($request->id);
        $student->name = $name;
        $student->age = $age;
        $student->hometown = $hometown;
        $student->gender = $gender;
        $student->profileimage = $imageName ;

        $student->save();
        return redirect('/all-students')->with('student_updated','Student updated successfuly');
    }

    public function deleteStudent($id){
        $student = Student::find($id);
        unlink(public_path('images').'/'.$student->profileimage);
        $student->delete();
        return back()->with('student_deleted','Student deleted successfuly');
    }

}



                //add
                            /*<div class="col-auto my-1">
                                <label for="name">GENDER  :</label>
                                
                                <select name="gender">
                                  <option value="">...Choose...</option>
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                  <option value="Other">Other</option>
                                </select>
                              </div>
                              <br>

                //edit
                <div class="col-auto my-1">
                                <label for="name" >GENDER  :</label>
                                
                                <select name="gender" value="{{ $student->gender}}" >
                                  <option value="">...Choose...</option>
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                  <option value="Other">Other</option>
                                </select> 
                              </div>


                              <div class="container" >
        <div class="row" style="margin-top:60px" >
            <div class="col-md-4 col-md-offset-4">
                <h4>Login | Custom Auth</h4><hr>
                <form action="{{ route('auth.check') }}" method="post">
                
                @if (Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                @endif



                 @csrf
                    <div class="form-group">
                        <label>Email </label> <br>
                        <input type="text" class="form-controll" name="email" placeholder="Enter email address" value="{{ old('email') }}"><br>
                    <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                        
                    </div>

                    <div class="form-group">
                        <label>Password</label> <br>
                        <input type="password" class="form-controll" name="password" placeholder="Enter your password"><br>
                        <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                    </div><br>
                    <button type="submit" class="btn btn-primary">Sign In</button>
                    <br>
                    <a href="{{ route('auth.register') }}">I don't have an account, create new</a>
                </form>
            </div>
        </div>

    </div>


                              */