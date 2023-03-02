<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Category;

use App\Models\QuestionModel;


use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function answer_show(Request $request)
    {

        $search=$request['search'] ?? "";
        if($search !=""){
            $answer=Answer::where('question_name' , 'LIKE' , "%$search%")->paginate();
            // $answer->appends($request->all());
        }else{
            $answer=Answer::orderBy('answer_id', 'DESC')->paginate(10);


        }


        return view('answer.index',compact('answer','search'));
        
    }




    public function answer_upload(Request $request)
    {


        $answer=new Answer();
        $answer->question_name=$request->question_name;
        $answer->question_explain=$request->question_explain;
        $answer->fatwa=$request->fatwa;
        $answer->answer=$request->answer;
        $answer->ayat=$request->ayat;
        $answer->category_id=$request->category_id;
        $answer->makhaz=$request->makhaz;
        $answer->fatwa_no=$request->fatwa_no;
        $answer->date=$request->date;
        $answer->avidence=$request->avidence;

        // dd($answer);

        $answer->save();
        return redirect()->back()->with('Success3','Answer Successfully added');
    }



    public function answer_delete($id)
    {
        $answer=Answer::find($id);
        if(!is_null($answer)){
            $answer->delete();
        }
        return redirect()->back();
    }

    public function seen($id)
    {
        $answer=Answer::find($id);
        $answer->status='Done';
        $answer->save();
        return redirect()->back();
    }

    public function edit($id)
    {
        $answer=Answer::find($id);
        return response()->json([
            'status'=>200,
            'answer'=>$answer,
        ]);
    }

    public function update(Request $request){
        $stud_id=$request->input('stud_id');
        $answer=Answer::find($stud_id);
        $answer->question_name=$request->question_name;
        $answer->question_explain=$request->question_explain;
        $answer->fatwa=$request->fatwa;
        $answer->answer=$request->answer;
        $answer->ayat=$request->ayat;
        // $answer->category_id=$request->category_id;
        $answer->makhaz=$request->makhaz;
        $answer->fatwa_no=$request->fatwa_no;
        $answer->date=$request->date;
        $answer->avidence=$request->avidence;

        // dd($answer);


        $answer->save();
        return redirect()->back()->with('updated','Answer Successfullu updated');

    }

public function cat_related_questions($id)
{

    // $search=$request['search'] ?? "";
    // if($search !=""){
    //     $answer=Answer::where('question_name' , 'LIKE' , "%$search%")->paginate();
        
    // }
    
    $total=Answer::all();

    $count=count($total);


    $categories=Category::whereNull('category_id')->get();

    if(Category::where('category_id',$id)->exists())
    {

        $category=Category::where('category_id',$id)->first();
        $answer=Answer::where('category_id',$category->id)->paginate(10);
        return view('darul-iftah.cat_related_questions',compact('category','answer','categories','count'));

    }
    else{
        return redirect()->back()->with('status','Category empty');
    }

    

}

}
