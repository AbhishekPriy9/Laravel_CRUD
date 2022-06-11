<?php
 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Crud_model;
use Hash;

 
class Crud extends Controller
{

    public function show()
    {
        return view('dashboard', [
            'user' => Crud_model::paginate(7)
        ]);
    }
    
     public function login1()
    {
        return view('login');
    }
    
     public function login(Request $req)
  {
    $email = $req->input('email');
    $password = $req->input('password');
    $users = Crud_model::select('*')
    ->where('email', '=', $email)
    ->get();
    
    
    
    
    foreach($users as $user){
     if(Hash::check($password, $user->password)){
        return redirect('/');
    }else{
     return redirect('/login');
 }
}

}
    
    public function delete($id){

       Crud_model::find($id)->delete();
       return redirect('/');
    }
    
     public function edit($id){
        $data = Crud_model::find($id);
    return view('edit', compact('data'));
    }
    
    public function update(Request $request, $id){
        $update = Crud_model::find($id);
        $file = $request->file('image');
        if($file){
      $destinationPath = public_path('assets');
      $file->move($destinationPath,$file->getClientOriginalName());
      $filenm = $file->getClientOriginalName();
        }else{
            $filenm = $request->input('h-file');
        }
        $update->name = $request->input('name');
        $update->email = $request->input('email');
        $update->phone = $request->input('phone');
        $update->password = Hash::make($request->input('password'));
        $update->image = $filenm;
        $update->update();
        return redirect('/');
    }
    
    public function create(Request $request){
        
        
        
        $crud = new Crud_model;
        $file = $request->file('image');

      $destinationPath = public_path('assets');
      $file->move($destinationPath,$file->getClientOriginalName());
        $crud->name = $request->input('name');
        $crud->email = $request->input('email');
        $crud->phone = $request->input('phone');
        $crud->password = Hash::make($request->input('password'));
        $crud->image = $file->getClientOriginalName();
        $crud->save();
        return redirect('/');
        
    }
    
     public function validateform(Request $request) {
      print_r($request->all());
      $validated = $request->validate([
         'username'=>'required|max:8',
         'password'=>'required'
      ]);
   }
}