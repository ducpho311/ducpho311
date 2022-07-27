<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Room;

class UserController extends Controller
{
     public function index()
    {
        // $users = User::all();
        // dd($users);

        $users = User::select('id', 'name', 'birthday', 'username', 'email', 'phone', 'avatar', 'password')
        // ->get();
        ->where('id', '>' , 3) //(tên trường, toán tử điều kiện, giá trị) 
        // ->where('id', '<=' , 7)
        ->Paginate(5);
        // ->cursorPaginate(5); // truy vấn where id > 5 limit > 5

        
        return view('admin.user.list',['user_list' => $users]);
    }
    public function delete($id)
    {
        // Cách 1
        if ($id) {
            $user = User::find($id);
            if ($user->delete()) {
                return redirect()->route('users.list');
            }    
        }

        // Cách 2
        // if($id){
        //     if (User::destroy($id)) {
        //         return redirect()->back();
        //     }
        // }

        
        
    }
    // public function delete(User $user)
    //     {
    //         if ($user->delete()) {
    //             return redirect()->back();
    //         }
    //     }


    public function create()
    {
        $rooms = Room::select('id','name')->get();

        return view('admin.user.create',
        ['room' => $rooms]
        );
    }
    public function store(Request $request)
    {
        //  
        // Nếu không đáp ứng được những điều kiện trên thì quay lại form kèm thêm lỗi 
        // Nếu đáp ứng được điều kiện thid sẽ chạy tiếp xuống code bên dưới

        // 1.Khởi tạo đối tượng user mới
        $user = new User(); 
        // 2.Cập nhật giá trị cho các thuộc tính của $user
        $user->fill($request->all()); // Đặt name ở form cùng giá trị với thuộc tính
        // 3. Xử lý file avatar gửi lên
        if ($request->hasFile('avatar')) {

            // Nếu trường avatar có file thì sẽ trả về true
            $avatar = $request->avatar;
            $avatarName = $avatar->hashName();
            $avatarName = $request->username. '_' . $avatarName;
            // $avatar->storeAs('images/user',$avatarName);
            $user->avatar = $avatar->storeAs('images/users', $avatarName);
        }else{
            $user->avatar= '';
        }
        // dd($user,$request->all());
        //4.Lưu
        $user->save();
        return redirect()->route('users.list');

    }
    public function edit($id)
    {
        return view('admin.user.update', [

            'room' => Room::all(),
            'user'=> User::find($id),
        ]);
    }
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->fill($request->all());
        if($request->hasFile('avatar')){
             $avatar = $request->avatar;
             $avatarName = $avatar->hashName();
             $avatarName = $request->username. '_' . $avatarName;
             $user->avatar = $avatar->storeAs('images/users', $avatarName);
        }else{
 
         $user->avatar = $user->avatar;
 
        }
        $user->save();
 
        return redirect()->route('users.list');
    }



}
