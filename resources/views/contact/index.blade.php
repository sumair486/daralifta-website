<x-app-layout>
    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
        {{-- <div class="container mx-auto px-6 py-2">
            <div class="text-right">
              @can('Post create')
                <a href="{{route('admin.posts.create')}}" class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors ">New post</a>
              @endcan
            </div> --}}

          <div class="bg-white shadow-md rounded my-6">
            <div class="table-responsive">
            <table class="text-left w-full border-collapse">
              <thead>
                <tr>
                  <th>S.No</th>

                  {{-- <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">آپ کا نام</th>
                  <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light w-2/12">Email</th>
                  <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light text-right w-2/12">Actions</th> --}}
                  <th>آپ کا نام</th>
                  <th>Email</th>
                  <th>یغام کی عبارت</th>
                  <th>Status</th>
                  <th>Action</th>

                </tr>
              </thead>
              <tbody>
                @can('Contact access')
                  @foreach($data as $key=>$datas)
                  <tr class="hover:bg-grey-lighter">
                    <td>{{$key+1}}</td>

                    <td>{{$datas->name}}</td>
                    <td><a href="mailto:{{$datas->email}}">{{$datas->email}}</a></td>
                    <td style="word-wrap: break-word;min-width: 160px;max-width: 160px;font-size:15px">{{$datas->explain}}</td>
                    <td>
                    @if ($datas->status=='0')
                        <a style="border-radius: 25px 25px;font-size:10px;" class="btn btn-danger" href="{{url('contact-seen',$datas->id)}}">Unseen</a>
                    @else
                    <a style="border-radius: 25px 25px;font-size:10px;" class="btn btn-success"  href="">Done</a>

                    @endif
                    </td>


                    <td>
                        {{-- <a href="" class=""><i class="fa-solid fa-pen-to-square"></i></a> --}}

                        @can('Contact delete')
                        <a href="{{url('delete-contact',$datas->id)}}" class="ml-2"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        @endcan

                    </td>

                    {{-- <td class="py-4 px-6 border-b border-grey-light text-right">

                      @can('Post edit')
                      <a href="{{route('admin.posts.edit',$post->id)}}" class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-green hover:bg-green-dark text-blue-400">Edit</a>
                      @endcan

                      @can('Post delete')
                      <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" class="inline">
                          @csrf
                          @method('delete')
                          <button class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-blue hover:bg-blue-dark text-red-400">Delete</button>
                      </form>
                      @endcan
                    </td> --}}
                  </tr>
                  @endforeach
                  @endcan
              </tbody>
            </table>
            </div>
            {{$data->links()}}

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
