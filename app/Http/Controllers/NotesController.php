<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use Image;

class NotesController extends Controller
{
    public function create(){
        return view('notes/create');
    }


    public function data(){
        $data = DB::table('user_notes')->where('id', Auth::id())
            ->orderBy('notes_add_date', 'DESC')
            ->SimplePaginate(10);
        return view('notes/data')->with('data', $data);
    }


    public function details($notes_id){
        $data = DB::table('user_notes')
            ->join('users', 'users.id', '=', 'user_notes.id')
            ->where(array(['user_notes.notes_id' , $notes_id, 'users.id' => Auth::id()]))
            ->first();
        return view('notes/details')->with('data', $data);
    }


    public function edit(){
        return view('notes/edit');
    }


    public function save(Request $request){
        //validating user inputs
       $this->validate(request(), [
           'title' => 'required',
           'category'=> 'required',
           'access' => 'required',
           'notes_body' => 'required'
       ]);
       if ($request->hasFile('photo')){
           $notes_image = $request->file('photo');
           $filename = time().'.'.$notes_image->getClientOriginalExtension();
//           $image_path = Image::make($notes_image)->save( public_path('/uploads/notes_images/' . $filename ));

           $data = array(
               'notes_title' => $request->input('title'),
               'notes_category' => $request->input('category'),
               'notes_accessibility' => $request->input('access'),
               'notes_image' => $filename,
               'notes_body' => $request->input('notes_body'),
               'notes_add_date' => date('Y-m-d H:i:s'),
               'id' => Auth::getUser()->id
           );
           DB::table('user_notes')->insert($data);
           return redirect()->to('notes/data');
       }else{
           $data = array(
               'notes_title' => $request->input('title'),
               'notes_category' => $request->input('category'),
               'notes_accessibility' => $request->input('access'),
               'notes_body' => $request->input('notes_body'),
               'notes_add_date' => date('Y-m-d H:i:s'),
               'id' => Auth::getUser()->id
           );
           DB::table('user_notes')->insert($data);
           return redirect()->to('notes/data');
       }

    }

    public function deleteNotes(){
        if(isset($_POST['delete'])){
            $notes_id = $_GET['notes'];
            DB::table('user_notes')->where('notes_id', $notes_id)->delete();
            return redirect()->to('notes/data');
        }
        return false;
    }
    public function sendMailToCustomer(){

    }
}
