<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Chef;
use App\Models\Occassion;
use App\Models\Party;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /***
    * Handle Admin Dashboard protection
    * @return Response
    */
   
    public function __construct()
    {
        $this->middleware('admin')->except('logout');
    }
   

   
    /***
      * Handle Admin Dashboard
      * @return Response
      */

      public function index(){
          
          // Find products && orders && users
          $product = new Product;
          $category = new Category;
          $party = new Party;
          $occassion = new Occassion;
          $chef = new Chef;
          return view('admin.dashboard',compact('product','category','party','occassion','chef'));
        }
        
       

       /***
        * Handle Admin Logom
        * @return Response
        */
        public function login(){

            return view('admin.login');
        }
        

        /***
         * Handle Admin Store into db
         * @param Request $request
         * @return Response
         */
        public function store(Request $request){
                
                
                // Validate user
                $this->validate($request,[
                    
                    'email' => 'required|email',
                    'password' => 'required|max:65', 
                    ]);
                    
                    // Check for log in
                    $credentials = $request->only('email','password');
                    if(!Auth::guard('admin')->attempt($credentials)){
                        // Redirect with errors
                        return back()->withErrors([
                            'message' => 'Wrong email or password please try again',
                            ]);
                        }
                        
                        //session message
                        session()->flash('msg','You have been log in');
                        
                        //redirect to dashboard
                        return redirect()->route('admin.dashboard');
                    } 
                


         
    /**
     *  Handle admin profile
     */

     public function profile(){
         $users = User::all();
         return view('front.profile.index',compact('users'));
     }

     

       /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function register(){
    //     $users = User::all();
    //     return view('admin.register',compact('users'));
    // }


    /**
     * Show the user edit page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function  edit($id){
        $user = User::findOrFail($id);

        return view('front.profile.edit',compact('user'));
    }

     /**
     * Update User Credentials
     *
     * @return Response
     */
    public function  update(Request $request, $id){
        // Find user 
        $user = User::find($id);

        // Validate user
        $this->validate($request,[
            'name' => ['required', 'string', 'max:35'],
            'phone' => ['required', 'string', 'max:14'],
            'email' => ['required', 'string', 'email', 'max:65'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        //update user
        $user->name = $request->input('name');
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');
        $user->password =bcrypt($request->input('password'));
        $user->usertype = $request->input('usertype');

        $user->update();

        //Redirect to use profile
        return redirect('user/profile');
    }


     /**
     * Delete User Credentials
     *
     * @return Response
     */
    public function destroy($id){
        # Find user
        $user = User::findOrFail($id);

        # Delete user
       $user->delete();

        # Redirect to user profile
         return redirect('user/profile');
    }
    
    /***
    * Handle Admin logout
    * @return Response
    */
    // public function logout(){
    //     // log user out
    //     auth()->user()->logout();

    //     // session message
    //     session()->flash('msg','You have been loggout');

    //     // Redirect to admin login

    //     return redirect('admin/login');

    // }

       /***
            * Handle Admin logout
            * @return Response
            */
            public function logout(){
                // log user out
                auth()->guard('admin')->logout();

                // session message
                session()->flash('msg','You have been loggout');

                // Redirect to admin login

                return redirect('admin/login');

            }
}
