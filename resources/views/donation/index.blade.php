<x-app-layout>
    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
        {{-- <div class="container mx-auto px-6 py-2">
            <div class="text-right">
              @can('Post create')
                <a href="{{route('admin.posts.create')}}" class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors ">New post</a>
              @endcan
            </div> --}}

            <div>
                <h1 style="font-size:30px;font-weight:bold">Total amount</h1><span style="font-weight:bold">{{$data1}}</span>
            </div>

          <div class="bg-white shadow-md rounded my-6">
            <div class="table-responsive">
            <table class="text-left w-full border-collapse">
              <thead>
                <tr>
                  <th>S.No</th>


                  <th>Name</th>
                  <th>Email</th>
                  <th>Contact</th>
                  <th>Country</th>
                  <th>City</th>
                  <th>Donate Amount</th>
                  <th>Status</th>
                  <th>Action</th>


                </tr>
              </thead>


              <tbody>
                @can('Donation access')
                  @foreach($data as $key=>$datas)

                  <tr class="hover:bg-grey-lighter">

                    <td>{{$key+1}}</td>

                    <td>{{$datas->name}}</td>
                    <td><a href="mailto:{{$datas->email}}">{{$datas->email}}</a></td>
                    <td>{{$datas->contact}}</td>
                    <td>{{$datas->country}}</td>
                    <td>{{$datas->city}}</td>
                    <td>{{$datas->amount}}</td>
                    <td>
                    @if ($datas->status=='0')
                        <a style="border-radius: 25px 25px;font-size:10px;"  class="btn btn-danger" href="{{url('donation-seen',$datas->id)}}">Unseen</a>
                    @else
                    <a  style="border-radius: 25px 25px;font-size:10px;" class="btn btn-success"  href="">Done</a>
                    @endif

                    {{-- {!! $datas->status== 'Done'? "<span class='bg-success' style='width:10px;'>Yes</span>" : "<span class='bg-danger'>No</span>" !!} --}}
                    </td>

                    <td>
                        @can('Donation delete')
                        <a href="{{url('delete-donation',$datas->id)}}" class="ml-2"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        @endcan
                    </td>


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
