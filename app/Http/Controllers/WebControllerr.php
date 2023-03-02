<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Answer;
use App\Models\Category;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Psy\Command\WhereamiCommand;

class WebControllerr extends Controller
{

            /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('role_or_permission:Contact access|Contact create|Contact edit|Contact delete', ['only' => ['contact_show']]);

        $this->middleware('role_or_permission:Contact delete', ['only' => ['contact_delete']]);
    }


    public function main(Request $request)
    {

        $search=$request['search'] ?? "";
        if($search !=""){
            $answer=Answer::where('question_name' , 'LIKE' , "%$search%")->paginate();
        }else{
            $answer=Answer::latest()->paginate(10);
            

        }

        $old_answer=Answer::orderBy('answer_id', 'ASC')->paginate(10);


        



    $category=Category::whereNull('category_id')->get();

    $total=Answer::all();

    $count=count($total);



    return view('darul-iftah.index',compact('answer','category','search','old_answer','count'));
    }



    public function main_contact(Request $request)
    {

        $data=new Contact();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->explain=$request->explain;
        $data->save();
        return redirect()->back()->with('Success','Successfully added');
    }

    public function contact_show()
    {
        $data=Contact::where('status',0)->orderBy('id', 'DESC')->paginate(10);

        return view('contact.index',compact('data'));
    }

    public function contact_delete($id)
    {
        $data=Contact::find($id);
        if(!is_null($data)){
            $data->delete();
        }
        return redirect()->back();
    }

    public function seen($id)
    {
        $data=Contact::find($id);
        $data->status='Done';
        $data->save();
        return redirect()->back();

    }

    public function question()
    {
        // $search=$request['search'] ?? "";
        // if($search !=""){
        //     $answer=Answer::where('question_name' , 'LIKE' , "%$search%")->get();
        // }else{
        //     $answer=Answer::latest()->paginate(5);

        // }

        $total=Answer::all();

        $count=count($total);



        
        return view('darul-iftah.question',compact('count'));
    }

        public function previous($id)
    {
        $total=Answer::all();

        $count=count($total);

        $answer=Answer::find($id);
        return view('darul-iftah.previousqustionanswer',compact('answer','count'));
    }
}
