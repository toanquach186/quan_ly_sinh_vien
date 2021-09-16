<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    public function UserView()  
    {
        return view('UserView');
    }
    public function AdminView()  
    {
        $news = User::where('id', '>', 00)->paginate(10);
        //$news->appends(['sort' => 'votes']);
        //print_r($news);
        return view('AdminView',compact('news'));
    }
     public function UserController()  
    {
        return view('UserController');
    }
    public function Takee(request $request)
    {
        //dd($request);
        $data = $request->all();
        print_r($data);
        //dd($request);
        if(isset($data["add_student"]))
    {
        User::create($data);
        //AddStudent($data['name'],$data['Mssv'],$data['lop']);
        return view('UserView');
    }else echo "no";
    }
    public function edit($id){
        // Tìm đến đối tượng muốn update
        $user = User::findOrFail($id);
        //print_r($user);

        // điều hướng đến view edit user và truyền sang dữ liệu về user muốn sửa đổi
        return view('Cont', compact('user'));
    }

    public function update(Request $request, $id)
    {
        // Tìm đến đối tượng muốn update
        $user = User::findOrFail($id);
        //print_r($user);
        // gán dữ liệu gửi lên vào biến data
        $data = $request->all();
        print_r($data);
        //dd($data);
        // mã hóa password trước khi đẩy lên DB
        //$data['password'] = Hash::make($request->password);
        $user->update($data);
        // Update user
        //User::update($data);
        echo"success update user";
    }
    public function delete($id){
        // Tìm đến đối tượng muốn xóa
        $user = User::findOrFail($id);

        $user->delete();
        echo"success delete user";

    }
}

?>