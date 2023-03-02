

<x-app-layout>

    @if (session('success2'))
    <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
       <strong> {{ session('success2') }} </strong>
    </div>
  @endif

  @if (session('delete'))
  <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
     <strong> {{ session('delete') }} </strong>
  </div>
@endif

    <main style="margin-top: 20px" class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
      <div class="table-responsive">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">S.No</th>
                <th scope="col">Category Name</th>
                <th scope="col">Parent Category Name</th>

                <th scope="col">Create Date</th>
                <th scope="col">Action</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($categories as $key=>$category)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        @if ($category->category_id)
                        {{ $category->parent->name }}
                        @else
                        Empty
                        @endif
                    </td>

                    <td>{{ $category->created_at }}</td>

                    <td>
                      @can('Category edit')
                      <a href="{{ route('category.edit',$category->id ) }}" class=""><i class="fa-solid fa-pen-to-square"></i></a>
                        
                      @endcan

                      @can('Category delete')
                      <a href="{{ route('category.delete',$category->id) }}" class="ml-2"><i class="fa fa-trash" aria-hidden="true"></i></a>
                      @endcan

                  </td>
                  </tr>  
                @endforeach


            </tbody>
          </table>
      </div>

        </div>
    </main>
  </div>


  </x-app-layout>
