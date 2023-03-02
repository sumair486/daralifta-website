

<x-app-layout>

    @if (session('success2'))
    <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
       <strong> {{ session('success2') }} </strong>
    </div>
  @endif

  @if (session('success3'))
  <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
     <strong> {{ session('success3') }} </strong>
  </div>
@endif

    <main style="margin-top: 20px" class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">

        <form class="form" action="{{ route('category.update',$category->id) }}" method="POST">
            @csrf
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Category Name</label>
              <div class="col-sm-4">
                <input type="text" style="text-align:right;" id="txtBox002" value="{{ $category->name }}" name="name" class="form-control"  placeholder="Add Category Name">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Sub Category</label>
              <div class="col-sm-10">
                <select name="category_id">
                    <option value="" @if ($category->category_id==null) 
                        selected
                        
                    @endif>
                    No SubCategory
                </option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}" @if($category->category_id!=null && $category->category_id==$category->id) selected @endif>{{ $category->name }}</option>
                    @endforeach
                </select>
              </div>
            </div>

            <div  class="form-group row">
              <div class="col-sm-4">
                <input type="submit" class="btn btn-primary" value="Submit Category">

              </div>
            </div>
          </form>

        </div>
    </main>
  </div>


  </x-app-layout>


    <script src="{{url('frontend/urdutextbox.js')}}"></script>


  


<script>

  window.onload = myOnload;

  function myOnload(evt){

    MakeTextBoxUrduEnabled(txtBox002);
    // MakeTextBoxUrduEnabled(txtBox06);
  }

  </script>