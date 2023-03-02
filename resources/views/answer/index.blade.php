

<x-app-layout>


  @if (session('updated'))
  <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
     <strong> {{ session('updated') }} </strong>
  </div>
@endif

    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">


          <div class="bg-white shadow-md rounded my-6">
            <div class="table-responsive">
            <table id="dtHorizontalExample" style="tbl border: 1px solid black" class="text-left w-full border-collapse">
              <thead >
                <tr>
                  <th>S.No</th>
                 
                  <th>نام مسائل</th>
                  <th>  عبارت</th>
                  <th>قسم</th>
                  <th>فتوی</th>
                  <th>جواب</th>
                  <th>آیت</th>
                  <th>ماخذ</th>
                  <th>فتوی نمبر</th>
                  <th>تاریخ اجراء</th>
                  <th>Link</th>
                  <th>Status</th>
                  <th>Action</th>

                </tr>
              </thead>
              <tbody>
                @can('Question access')
                  @foreach($answer as $key=>$answers)
                  <tr class="hover:bg-grey-lighter">

                    <td class="word-wrap: break-word;min-width: 160px;max-width: 160px;font-size:15px;">{{ $key+1 }}</td>


                    <td class="word-wrap: break-word;min-width: 160px;max-width: 160px;font-size:15px;">{{$answers->question_name}}</td>

                    <td class="word-wrap: break-word;min-width: 160px;max-width: 160px;font-size:15px">
                      
                    
                      <button style="border-radius: 25px 25px;font-size:10px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$answers->answer_id}}">
                        سوال 
                        </button>
                      
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal{{$answers->answer_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" id="ajax-error" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title"  id="exampleModalLabel">سوال</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div  class="modal-body">
                                {{$answers->question_explain}}

                              </div>
  
                              <div class="modal-footer">
                                {{-- <button   type="button" class="btn btn-primary">Copy</button> --}}
                              
  
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  
                              </div>
  
                            </div>
                          </div>
                        </div>
                    
                    
                    
                    </td>

                    <td class="word-wrap: break-word;min-width: 160px;max-width: 160px;font-size:15px">
                      @if ($answers->category_id)
                      {{$answers->category->name}}
                        
                      @endif
                    
                    </td>


                    <td  class="word-wrap: break-word;min-width: 160px;max-width: 160px;font-size:15px;">{{$answers->fatwa}}</td>

                    <td class="word-wrap: break-word;min-width: 160px;max-width: 160px;font-size:15px">

                      <button style="border-radius: 25px 25px;font-size:10px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModals{{$answers->answer_id}}">
                        جواب
                      </button>
                    
                      <!-- Modal -->
                      <div class="modal fade xyz" id="exampleModals{{$answers->answer_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" id="ajax-error" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title"  id="exampleModalLabel">جواب</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div  class="modal-body">
                              
                              {{ $answers->answer }}
                            </div>

                            <div class="modal-footer">
                              {{-- <button   type="button" class="btn btn-primary">Copy</button> --}}
                            

                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                            </div>

                          </div>
                        </div>
                      </div>

                    </td>

                    <td class="word-wrap: break-word;min-width: 160px;max-width: 160px;font-size:15px">

                      <button style="border-radius: 25px 25px;font-size:10px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#example{{$answers->answer_id}}">
                        آیت	
                      </button>
                    
                      <!-- Modal -->
                      <div class="modal fade xyz" id="example{{$answers->answer_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" id="ajax-error" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title"  id="exampleModalLabel">آیت	</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div  class="modal-body">
                              
                              {{ $answers->ayat }}
                            </div>

                            <div class="modal-footer">
                              {{-- <button   type="button" class="btn btn-primary">Copy</button> --}}
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                            </div>

                          </div>
                        </div>
                      </div>
                    </td>
                    <td style="word-wrap: break-word;min-width: 160px;max-width: 160px;font-size:15px;">{{$answers->makhaz}}</td>
                    <td style="word-wrap: break-word;min-width: 160px;max-width: 160px;font-size:15px;">{{$answers->fatwa_no}}</td>
                    <td style="word-wrap: break-word;min-width: 160px;max-width: 160px;font-size:15px;">{{$answers->date}}</td>
                    <td style="word-wrap: break-word;min-width: 160px;max-width: 160px;font-size:15px;"><a href="{{$answers->avidence}}">{{$answers->avidence}}</a></td>



                    <td>
                    @if ($answers->status=='0')
                        <a style="border-radius: 25px 25px;font-size:10px;" class="btn btn-danger" href="{{url('answer-seen',$answers->answer_id)}}">Unseen</a>
                    @else
                    <a style="border-radius: 25px 25px;font-size:10px;" class="btn btn-success"  href="">Done</a>

                    @endif
                    </td>


                    <td>
                      @can('Question edit')
                      <button type="button" value="{{ $answers->answer_id }}" class="editbtn"><i class="fa-solid fa-pen-to-square"></i></button>
                      @endcan

                        @can('Question delete')
                        <a href="{{url('delete-answer',$answers->answer_id)}}" class="ml-2"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        @endcan

                    </td>

                  </tr>
                  @endforeach
                  @endcan
              </tbody>
            </table>
            </div>
            {{ $answer->links() }}
          </div>

        </div>
    </main>
  </div>


                      {{-- edit modal start --}}

                      <div class="modal fade xyz" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header text-center">
                                  <h4 class="modal-title w-100 font-weight-bold">Edit Answers</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <form class="form" method="post" action="{{url('answer_update')}}">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="stud_id" id="stud_id"/>
                                <div class="modal-body mx-3">
                                    <div class="md-form mb-1">
                                        <label data-error="wrong" data-success="right" >Question 	</label>
                                        <textarea style="text-align: right" type="text"  name="question_name" id="txtBox" cols="10" rows="5" class="question_name form-control" placeholder=" نام مسائل " ></textarea>
                                      </div>
                                      <div class="md-form mb-1">
                                        <label data-error="wrong" data-success="right" > Breifly Question	</label>
                                        <textarea style="text-align: right" type="text"   name="question_explain" id="txtBox001" cols="10" rows="5" class="question_explain form-control" placeholder="سوال کی عبارت	" ></textarea>
                                      </div>
                                  <div class="md-form mb-1">
                                    <label  data-error="wrong" data-success="right" for="orangeForm-name">Fatwa</label>
                                    <input  type="text" name="fatwa"  placeholder="فتوی" id="txtBox002" class="fatwa form-control validate">
                                  </div>
                                  <div class="md-form mb-1">
                                    <label data-error="wrong" data-success="right" >Answer</label>
                                    <textarea style="text-align: right" type="text"   name="answer" id="txtBox003" cols="10" rows="5" class="answer form-control" placeholder=" جواب " ></textarea>
                                  </div>

                                  
                          <div class="md-form mb-1">
                            <label data-error="wrong" data-success="right" >Qurani Ayaat</label>
                            <textarea style="text-align: right" type="text"  id="txtBox013"   name="ayat" cols="10" rows="5" class="ayat form-control" placeholder=" 	آیت " ></textarea>
                          </div>
  
                                  {{-- <div class="md-form mb-1">
                                    <label  data-error="wrong" data-success="right" for="orangeForm-name">Category</label>
                                    <select name="category_id">
                                      <option value="">Category Name</option>
                                      @foreach ($categories as $category)
                                          <option value="{{$category->id}}">{{ $category->name }}</option>
                                      @endforeach
                                  </select>
                                  </div> --}}
  
                                  <div class="md-form mb-1 rtl">
                                    <label data-error="wrong"  >Makhaz</label>
                                    <input style="text-align: right" type="text"   name="makhaz" id="txtBox004" class="makhaz form-control" placeholder=" ماخذ " >
                                  </div>
  
                                  <div class="md-form mb-1">
                                    <label data-error="wrong" data-success="right" for="orangeForm-name">Fatwa number</label>
                                    <input type="number" name="fatwa_no" id="fatwa_no"  class="form-control validate" placeholder="فتوی نمبر">
                                  </div>
                                  <div class="md-form mb-1">
                                    <label data-error="wrong" data-success="right" for="orangeForm-email">Date</label>
                                    <input type="date" name="date" id="date"  class="form-control validate" placeholder="تاریخ اجراء">
                                  </div>

                                  <div class="md-form mb-1">
                                    <label data-error="wrong" for="orangeForm-email">Fatwa Link</label>
                                    <input type="text" name="avidence" id="avidence"  class="form-control validate" placeholder=" Link">
                                  </div>
  
  
                                </div>
                                <div class="modal-footer d-flex justify-content-center">
                                  <button class="submit btn btn-primary">Update</button>
                                </div>
                            </form>
  
                              </div>
                        </div>
                      </div>
  
                      {{-- edit modal end --}}




  </x-app-layout>





<script>

  $(document).ready(function (){
    $(document).on('click','.editbtn',function (){
      var stud_id=$(this).val();
      // alert(stud_id);
      $('#editModal').modal('show');

      $.ajax({
        type: "GET",
        url: "/edit-answer/"+stud_id,
        success: function (response) {
          // console.log(response.answer.question_name);
          $('.question_name').val(response.answer.question_name);
          $('.question_explain').val(response.answer.question_explain);
          $('.fatwa').val(response.answer.fatwa);
          $('.answer').val(response.answer.answer);
          $('.ayat').val(response.answer.ayat);
          $('.makhaz').val(response.answer.makhaz);
          $('#fatwa_no').val(response.answer.fatwa_no);
          $('#date').val(response.answer.date);
          $('#avidence').val(response.answer.avidence);
          $('#stud_id').val(stud_id);

        }

      });

    });
  });
  
</script>

<script>
  $(document).ready(function () {
  $('#dtHorizontalExample').DataTable({
    "scrollX": true
  });
  $('.dataTables_length').addClass('bs-select');
});
</script>


<script>
  
  $('#editModal').on('shown.bs.modal', function (e) {
    // var id_of_element=$(e).attr('id');
      // console.log(id_of_element);
      // console.log('textkdn');
      MakeTextBoxUrduEnabled(txtBox);
      MakeTextBoxUrduEnabled(txtBox001);
      MakeTextBoxUrduEnabled(txtBox002);
      MakeTextBoxUrduEnabled(txtBox003);
      MakeTextBoxUrduEnabled(txtBox013);
      MakeTextBoxUrduEnabled(txtBox004);





})
  
    </script>

