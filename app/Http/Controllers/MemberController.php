<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function index(Request $request)
    {
        $members = Member::where('is_delete', 0)->orderBy('created_at','asc')->get();
        return view('members.index',[
            'members' => $members,
        ]);
    }

    public function register(Request $request)
    {
        return view('members/register', );
    }

    public function add_register(Request $request)
    {
        $request->validate([
            'name' => 'required|max:10',
            'phone' => 'required|max:12',
            'email' => 'required|max:32',
        ]);
        $name = $request->name;
        $phone = $request->phone;
        $email = $request->email;

        $data = [
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
        ];
        //Memberモデルでmembersテーブルにインサート
        Member::insert($data);
        return redirect('/members');
    }

    public function update($id)
    {
        //一次元配列で取得する為first()
        $data = Member::where('id', $id)->first();
        return view('members/update', compact('data'));
    }

    public function update_member(Request $request)
    {
        // var_dump($request->id) ;
        $request->validate([
            'name' => 'required|max:10',
            'phone' => 'required|max:12',
            'email' => 'required|max:32',
        ]);
        $id = $request->id;
        $name = $request->name;
        $phone = $request->phone;
        $email = $request->email;

        $data = [
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
        ];
        //Memberモデルでmembersテーブルにインサート
        Member::where('id', $id)->update($data);
        return redirect('/members');
    }
    public function delete_member($id)
    {
        Member::where('id',$id)->update([
            'is_delete' => 1,
            'updated_at' => now(),
        ]);
        return redirect('/members');
    }
}
