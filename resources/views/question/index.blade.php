

<x-app-layout>
  @if (session('Success3'))
  <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
     <strong> {{ session('Success3') }} </strong>
  </div>
@endif


    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">

      {{-- <td style="margin-top: 20px"  class="word-wrap: break-word;min-width: 160px;max-width: 160px;font-size:15px"> --}}
        <a  style="margin-top:20px" class="d-lg-block d-none">
            <span style="border-radius: 25px 25px;font-size:12px;" type="button" class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal">
              جواب دہ

                {{-- <span class="fa fa-credit-card ml-1" aria-hidden="true"> </span> --}}
            </span>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                          <h4 class="modal-title w-100 font-weight-bold">جواب</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form class="form" method="post" action="{{url('answer_upload')}}">
                            @csrf
                        <div class="modal-body mx-3">
                            <div class="md-form mb-1">
                                <label data-error="wrong" data-success="right" >Question 	</label>
                                <textarea style="text-align: right" type="text"  id="txtBox"   name="question_name" cols="10" rows="5" class="form-control" placeholder=" نام مسائل " ></textarea>
                              </div>
                              <div class="md-form mb-1">
                                <label data-error="wrong" data-success="right" > Breifly Question	</label>
                                <textarea style="text-align: right" type="text" id="txtBox1"  name="question_explain" cols="10" rows="5" class="form-control" placeholder="سوال کی عبارت	" ></textarea>
                              </div>
                          <div class="md-form mb-1">
                            <label  data-error="wrong" data-success="right" for="orangeForm-name">Fatwa</label>
                            <input  type="text" name="fatwa"  placeholder="فتوی" id="txtBox2" class="form-control validate">
                          </div>
                          <div class="md-form mb-1">
                            <label data-error="wrong" data-success="right" >Answer</label>
                            <textarea style="text-align: right" type="text"  id="txtBox3"  name="answer" cols="10" rows="5" class="form-control" placeholder=" جواب " ></textarea>
                          </div>

                          <div class="md-form mb-1">
                            <label data-error="wrong" data-success="right" >Qurani Ayaat</label>
                            <textarea style="text-align: right" type="text"  id="txtBox03"   name="ayat" cols="10" rows="5" class="form-control" placeholder=" 	آیت " ></textarea>
                          </div>

                          <div class="md-form mb-1 mt-3">
                            <label  data-error="wrong" data-success="right" for="orangeForm-name">Category</label>
                            <select name="category_id">
                              <option value="">Category Name</option>
                              @foreach ($categories as $category)
                                  <option value="{{$category->id}}">{{ $category->name }}</option>
                              @endforeach
                          </select>
                          </div>

                          <div class="md-form mb-1 rtl">
                            <label data-error="wrong"  >Makhaz</label>
                            <input style="text-align: right" type="text" id="txtBox4"   name="makhaz" class="form-control" placeholder=" ماخذ " >
                          </div>

                          <div class="md-form mb-1">
                            <label data-error="wrong" data-success="right" for="orangeForm-name">Fatwa number</label>
                            <input type="number" name="fatwa_no"  class="form-control validate" placeholder="فتوی نمبر">
                          </div>
                          <div class="md-form mb-1">
                            <label data-error="wrong" data-success="right" for="orangeForm-email">Date</label>
                            <input type="date" name="date"  class="form-control validate" placeholder="تاریخ اجراء">
                          </div>

                          <div class="md-form mb-1">
                            <label data-error="wrong" for="orangeForm-email">Fatwa Link</label>
                            <input type="text" name="avidence"  class="form-control validate" placeholder=" Link">
                          </div>


                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                          <button class="submit btn btn-primary">Submit</button>
                        </div>
                    </form>

                      </div>
                </div>
              </div>
            </a>
    {{-- </td> --}}

          <div class="bg-white shadow-md rounded my-6">
            <div class="table-responsive">
            <table style="border: 1px solid black" class="text-left w-full border-collapse">
              <thead>
                <tr>
                  <th>S.No</th>
                  <th>نام مسائل</th>
                  <th>ای میل ایڈریس</th>
                  <th>فون نمبر</th>
                  <th>سوال کی عبارت</th>
                  <th>Status</th>
                  <th>جواب دہ</th>
                  <th>Action</th>

                </tr>
              </thead>
              <tbody>
                @can('Question access')
                  @foreach($question as $key=>$questions)


                  
                  <tr class="hover:bg-grey-lighter">
                    <td class="word-wrap: break-word;min-width: 160px;max-width: 160px;font-size:15px">{{$key+1}}</td>

                    <td class="word-wrap: break-word;min-width: 160px;max-width: 160px;font-size:15px">{{$questions->name}}</td>
                    <td class="word-wrap: break-word;min-width: 160px;max-width: 160px;font-size:15px"><a href="mailto:{{$questions->email}}">{{$questions->email}}</a></td>
                    <td style="word-wrap: break-word;min-width: 160px;max-width: 160px;font-size:15px">{{$questions->phone}}</td>


                    <td style="word-wrap: break-word;min-width: 160px;max-width: 160px;font-size:15px">
                    
                    
                      <button style="border-radius: 25px 25px;font-size:10px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$questions->question_id}}">
                        سوال 
                        </button>
                      
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal{{$questions->question_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">جواب</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                {{$questions->explain}}
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                    
                    
                    </td>


                    <td>
                    @if ($questions->status=='0')
                        <a style="border-radius: 25px 25px;font-size:10px;" class="btn btn-danger" href="{{url('question-seen',$questions->question_id)}}">Unseen</a>
                    @else
                    <a style="border-radius: 25px 25px;font-size:10px;" class="btn btn-success"  href="">Done</a>

                    @endif
                    </td>

                    <td class="word-wrap: break-word;min-width: 160px;max-width: 160px;font-size:15px">
                        <a class="d-lg-block d-none">
                          <span style="border-radius: 25px 25px;font-size:12px;" type="button" class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal">
                            جواب دہ
              
                              {{-- <span class="fa fa-credit-card ml-1" aria-hidden="true"> </span> --}}
                          </span>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                      <div class="modal-header text-center">
                                        <h4 class="modal-title w-100 font-weight-bold">جواب</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <form class="form" method="post" action="{{url('answer_upload')}}">
                                          @csrf
                                      <div class="modal-body mx-3">
                                          <div class="md-form mb-1">
                                              <label data-error="wrong" data-success="right" >Question 	</label>
                                              <textarea style="text-align: right" type="text"     name="question_name" cols="10" rows="5" class="form-control" placeholder=" نام مسائل " ></textarea>
                                            </div>
                                            <div class="md-form mb-1">
                                              <label data-error="wrong" data-success="right" > Breifly Question	</label>
                                              <textarea style="text-align: right" type="text"   name="question_explain" cols="10" rows="5" class="form-control" placeholder="سوال کی عبارت	" ></textarea>
                                            </div>
                                        <div class="md-form mb-1">
                                          <label  data-error="wrong" data-success="right" for="orangeForm-name">Fatwa</label>
                                          <input  type="text" name="fatwa"  placeholder="فتوی"  class="form-control validate">
                                        </div>
                                        <div class="md-form mb-1">
                                          <label data-error="wrong" data-success="right" >Answer</label>
                                          <textarea style="text-align: right" type="text"   name="answer" cols="10" rows="5" class="form-control" placeholder=" جواب " ></textarea>
                                        </div>
              
                                        <div class="md-form mb-1">
                                          <label data-error="wrong" data-success="right" >Qurani Ayaat</label>
                                          <textarea style="text-align: right" type="text"    name="ayat" cols="10" rows="5" class="form-control" placeholder=" 	آیت " ></textarea>
                                        </div>
              
                                        <div class="md-form mb-1 mt-3">
                                          <label  data-error="wrong" data-success="right" for="orangeForm-name">Category</label>
                                          <select name="category_id">
                                            <option value="">Category Name</option>
                                            @foreach ($categories as $category)
                                                <option value="{{$category->id}}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        </div>
              
                                        <div class="md-form mb-1 rtl">
                                          <label data-error="wrong"  >Makhaz</label>
                                          <input style="text-align: right" type="text"    name="makhaz" class="form-control" placeholder=" ماخذ " >
                                        </div>
              
                                        <div class="md-form mb-1">
                                          <label data-error="wrong" data-success="right" for="orangeForm-name">Fatwa number</label>
                                          <input type="number" name="fatwa_no"  class="form-control validate" placeholder="فتوی نمبر">
                                        </div>
                                        <div class="md-form mb-1">
                                          <label data-error="wrong" data-success="right" for="orangeForm-email">Date</label>
                                          <input type="date" name="date"  class="form-control validate" placeholder="تاریخ اجراء">
                                        </div>
              
                                        <div class="md-form mb-1">
                                          <label data-error="wrong" for="orangeForm-email">Fatwa Link</label>
                                          <input type="text" name="avidence"  class="form-control validate" placeholder=" Link">
                                        </div>
              
              
                                      </div>
                                      <div class="modal-footer d-flex justify-content-center">
                                        <button class="submit btn btn-primary">Submit</button>
                                      </div>
                                  </form>
              
                                    </div>
                              </div>
                            </div>
                            </a>
                    </td>




                    <td>
                      {{-- @can('Question edit')
                      <button href="" class=""><i class="fa-solid fa-pen-to-square"></i></button>
                        
                      @endcan --}}

                        @can('Question delete')
                        <a href="{{url('delete-question',$questions->question_id)}}" class="ml-2"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        @endcan

                    </td>

                  </tr>
                  @endforeach
                  @endcan
              </tbody>
            </table>
            </div>

            {{$question->links()}}

            {{-- @can('Post access')
            <div class="text-right p-4 py-10">
              {{ $posts->links() }}
            </div>
            @endcan --}}
          </div>

        </div>
    </main>
  </div>
  </x-app-layout>


  <script>

    // window.onload = myOnload;
  
    // function myOnload(evt){
  
      // MakeTextBoxUrduEnabled(txtBox);
    //   // MakeTextBoxUrduEnabled(txtBox06);
    // }

    $('#exampleModal').on('shown.bs.modal', function (e) {
    // var id_of_element=$(e).attr('id');
      // console.log(id_of_element);
      // console.log('textkdn');
      MakeTextBoxUrduEnabled(txtBox);
      MakeTextBoxUrduEnabled(txtBox1);
      MakeTextBoxUrduEnabled(txtBox2);
      MakeTextBoxUrduEnabled(txtBox3);
      MakeTextBoxUrduEnabled(txtBox03);
      MakeTextBoxUrduEnabled(txtBox4);




})
  
    </script>



