<?php

namespace App\Http\Controllers;

use App\Models\QuestionModel;
use App\Models\Category;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
                    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('role_or_permission:Question access|Question create|Question edit|Question delete', ['only' => ['question_show']]);
        $this->middleware('role_or_permission:Question create', ['only' => ['create','store']]);
        $this->middleware('role_or_permission:Question edit', ['only' => ['edit','update']]);
        $this->middleware('role_or_permission:Question delete', ['only' => ['destroy']]);
    }


    public function question_show()
    {
 
        $question=QuestionModel::where('status',0)->orderBy('question_id', 'DESC')->paginate(10);
        $categories=Category::whereNotNull('category_id')->get();

        // dd($data);
        return view('question.index',compact('question','categories'));
    }

    public function question_upload(Request $request)
    {
        $question=new QuestionModel;
        $question->name=$request->name;
        $question->email=$request->email;
        $question->phone=$request->phone;
        $question->explain=$request->explain;
        $question->save();
        return redirect()->back()->with('Success1','Successfully added');
    }



    public function question_delete($id)
    {
        $question=QuestionModel::find($id);
        if(!is_null($question)){
            $question->delete();
        }
        return redirect()->back();
    }

    public function seen($id)
    {
        $question=QuestionModel::find($id);
        $question->status='Done';
        $question->save();
        // if($data->status=="Done"){
        //  $data->orderBy('id','DESC')->get();
        // return redirect()->back();

        // }
        return redirect()->back();
    }
}
