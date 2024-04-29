<?php
   
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\User;
   
class HomeController extends Controller
{
    private $user,$search;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $this->userCount = User::count();
        return view('admin.index',['userCount'=>$this->userCount]);
    }
    public function adminManage()
    {
        $this->user = User::all();
        return view('admin.manage',['users'=>$this->user]);
    }
   
    public function  adminAdd()
    {
        return view('admin.add');
    }
    public function  adminCreate(Request $request)
    {
        $user = new user();
        $user->name= $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->is_admin = $request->is_admin;
        $user->save();
        return redirect('/admin/manage')->with('status','User add successfully');
    }

    public function adminSearch(Request $request)
    {   
       // $this->user = User::all();

        $search = $_GET['query'];
        $this->user = User::where('is_admin', 'like', "%$search%")
        ->orWhere('name', 'like', "%$search%")
        ->orWhere('email', 'like', "%$search%")
        ->get();
        return view('admin.manage',['users'=>$this->user]);
   }
    
}