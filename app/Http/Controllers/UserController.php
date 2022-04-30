<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    //
    public function index(Request $request){
        $users=User::all();
        return view('users.index',['users'=>$users]);
    }
    public function create(){

        return view('users.create');
    }
    public function store(Request $request){
            $request->validate([
                'name'=>'required|min:3|max:255',
                'email'=>'email|unique:users|required',
                //'image'=>'image',//
            ]);
            if(request('password')!==request('password_confirmation'))
            {
                $request->session()->flash('user-password-message',"لم يتطابق حقل كلمة المرور مع هذا الحقل ");
                return back();
            }
            if(request('image')){
                $input=$request->image->getClientOriginalName(). time() ;
                $request->image->move(public_path('storage/images/users'),$input);
            }else{
                $input=null;
            }
            User::create([
                'name'=>$request->name ,
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
                'image'=> $input ,
                //"utype"=>$utype
            ]);
            $request->session()->flash('user-created-message',"تم إضافة مستخدم جديد بنجاح");
            return redirect()->route('users.index');
    }
    
    public function edit(User $user){
       // $this->authorize('view',$post);
        return view('users.edit',['user'=>$user]);
    }
    public function update(User $user,Request $request){
    
        if($request->name ){
            $user->name=$request->name;
          
        }
        if($request->email ){
            $user->email=$request->email;

        }
        if($request->password ){
            $user->password=Hash::make($request->password);

        }
        if($file=$request->image){
            $request->validate(['image'=>'image']);
            $input=time() .$request->image->getClientOriginalName();
            $request->image->move(public_path('storage/images/users'),$input);
            $user->image=$input;

        }
        //dd($request);
        $user->save();
        $request->session()->flash('user-updated-message','تم تعديل المستخدم بنجاح');
        //dd($request);
        return redirect()->route('users.index');
    }
    public function destroy(User $user,Request $request){
        $user->delete();
        $request->session()->flash('user-deleted-message','تم حذف المستخدم بنجاح');
        //$request->session()->flash('key', $value);
        return back();
    }
}
