{{-- @include('darul-iftah.script') --}}

<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> دار الافتاء</title>

    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> --}}

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

    <link rel="icon" type="image/x-icon"href="/images/nav-bar-logo.png" width="30px">
    <link rel="stylesheet" href="{{url('frontend/bootstrap-4.6.0-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/fontawesome/fontawesome-free-5.15.4-web/css/all.css')}}">
    <link rel="stylesheet" href="{{url('frontend/fontawesome/fontawesome-free-5.15.4-web/css/solid.css')}}">
    <link rel="stylesheet" href="{{url('frontend/fontawesome/fontawesome-free-5.15.4-web/css/brands.css')}}">
    <link rel="stylesheet" href="{{url('frontend/style.css')}}">

    <link rel="stylesheet" href="https://tawk.to/chat/6352ae19daff0e1306d33ab5/1gg0i8122">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet"> -->
    {{-- dict links --}}

  <script src="{{url('frontend/urdutextbox.js')}}"></script>
  <script src="{{url('frontend/offcanva.js')}}"></script>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script>

    window.onload = myOnload;

    function myOnload(evt){
      MakeTextBoxUrduEnabled(txtBox5);//enable Urdu in html text box
      MakeTextBoxUrduEnabled(txtBox6);//
      MakeTextBoxUrduEnabled(txtBox01);//enable Urdu in html text area




    }

    </script>



<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/635501d0daff0e1306d37acc/1gg20u701';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->



</head>
<body>






@if (session('Success'))
  <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
     <strong> {{ session('Success') }} </strong>
  </div>
@endif


@if (session('Success2'))
  <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
     <strong> {{ session('Success2') }} </strong>
  </div>
@endif


@if (session('status'))
<div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
   <strong> {{ session('status') }} </strong>
</div>
@endif


@include('darul-iftah.header')





{{-- @include('darul-iftah.search') --}}

<form class="form" action="" >

    <div class="section-1 py-2 mt-1 overflow-hidden">
        <div class="row justify-content-center align-content-around  ">
    
            <div class="col-10 col-md-7 col-lg-6 p-1">
                <div class="search-box  d-flex justify-content-between align-items-center">
                    
                    <button class="btn btn-primary"><span class="fa fa-search"></span></button>
                    <input type="search" id="txtBox01"  name="search" placeholder="تلاش کے الفاظ۔۔۔"   class="w-100 h-100">
                </div>
            </div>
    
            <div class="col-12 d-flex justify-content-center mt-1">
                <h6 class="rtl">{{ $count }} مستند فتاوی میں تلاش کی سہولت</h6>
            </div>
    
        </div>
    </div>
    </form>








    <div class="section-2 overflow-hidden">

            <div class="row  justify-content-center">
                <div class="col-lg-4 col-md-6 col-11 order-lg-3  order-md-2 d-flex justify-content-center align-items-center  py-2 px-4">
                    <div class="col-one w-100 h-100 px-2">
                        <h5 style="box-shadow: 0 0 4px 2px #26347b;border-radius: 10px;padding: 10px ;    margin: 5px 0;" class="rtl">قسم/Categories </h5>
                        <ul>
                            @foreach ($category as $categories)

                            <li class="rtl"><a href="{{ route('category.related',$categories->id) }}"> <span class="fa fa-regular fa-place-of-worship"></span> {{ $categories->name }} </a></li>
                                
                            @endforeach
                            
                        </ul>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6  col-11 order-lg-2 order-md-1 d-flex justify-content-center align-items-center  py-2 px-4">
                    <div class="col-two w-100 h-100 px-2">

                        <ul>
                            <li><h5 class="rtl">تازہ ترین فتاوی</h5></li>
                        @foreach ($answer as $answers)

                            <li class="rtl">
                                {{-- <h6 class=""><a href="">شادی سے پہلے خیر و برکت کے لیے دعائے خیر پروگرام رکھنا</a></h6> --}}
                                <h6 class=""><a href="{{url('previousquestion',$answers->answer_id)}}">{{$answers->question_name}} </a></h6>

                                <!-- <p class="rtl" ><a href=""></a></p> -->
                                <button class="rtl"> <span class="fa fa-regular fa-place-of-worship"></span> دار الافتاء جامعۃ العلوم الاسلامیۃ بنوری ٹاؤن</button>
                            </li>
                        @endforeach


{{ $answer->links() }}
                        </ul>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6  col-11  order-lg-1 order-md-3 py-2 px-4 d-flex justify-content-center align-items-center  ">
                    <div class="col-three w-100 h-100 px-2 " >
                        <div class="box rtl">
                            <h5>پُرانے  فتاوی</h5>

                        </div>
                        @foreach ($old_answer as $old_answers)

                        <div class="box ">
                                
                           {{-- <div class="rtl"><h6><a href="">تیس شعبان کو روزہ رکھنے کا حکم</a></h6></div> --}}
                           <div class="rtl"><h6><a href="{{url('previousquestion',$old_answers->answer_id)}}"> {{ $old_answers->question_name }}</a></h6></div>


                           <div class="d-flex justify-content-between rtl">

                           <span class="d-flex justify-content-between flex-wrap">
                            <button class="">  <span class="fa fa-regular fa-place-of-worship "></span>  دار الافتاء جامعۃ العلوم الاسلامیۃ بنوری ٹاؤن</button>
                            <button class="mt-md-0 mt-2">روزہ - حقیقت و مصالح</button>
                           </span>


                           </div>


                        </div>
                        @endforeach

                        {{ $old_answer->links() }}

                        

                        
                        {{-- <div class="box ">
                            <div class="rtl"><h6><a href="">تیس شعبان کو روزہ رکھنے کا حکم</a></h6></div>
                            <div class="d-flex justify-content-between rtl">

                            <span class="d-flex justify-content-between flex-wrap">
                             <button class="">  <span class="fa fa-regular fa-place-of-worship "></span>  دار الافتاء جامعۃ العلوم الاسلامیۃ بنوری ٹاؤن</button>
                             <button class="mt-md-0 mt-2">روزہ - حقیقت و مصالح</button>
                            </span>


                            </div>

                         </div> --}}
                         {{-- <div class="box ">
                            <div class="rtl"><h6><a href="">تیس شعبان کو روزہ رکھنے کا حکم</a></h6></div>
                            <div class="d-flex justify-content-between rtl">

                            <span class="d-flex justify-content-between flex-wrap">
                                <button class="">  <span class="fa fa-regular fa-place-of-worship "></span>  دار الافتاء جامعۃ العلوم الاسلامیۃ بنوری ٹاؤن</button>
                             <button class="mt-md-0 mt-2">روزہ - حقیقت و مصالح</button>
                            </span>


                            </div>

                         </div> --}}
                         {{-- <div class="box ">
                            <div class="rtl"><h6><a href="">تیس شعبان کو روزہ رکھنے کا حکم</a></h6></div>
                            <div class="d-flex justify-content-between rtl">

                            <span class="d-flex justify-content-between flex-wrap">
                                <button class="">  <span class="fa fa-regular fa-place-of-worship "></span>  دار الافتاء جامعۃ العلوم الاسلامیۃ بنوری ٹاؤن</button>
                             <button class="mt-md-0 mt-2">روزہ - حقیقت و مصالح</button>
                            </span>


                            </div>

                         </div> --}}
                         {{-- <div class="box ">
                            <div class="rtl"><h6><a href="">تیس شعبان کو روزہ رکھنے کا حکم</a></h6></div>
                            <div class="d-flex justify-content-between rtl">

                            <span class="d-flex justify-content-between flex-wrap">
                                <button class="">  <span class="fa fa-regular fa-place-of-worship "></span>  دار الافتاء جامعۃ العلوم الاسلامیۃ بنوری ٹاؤن</button>
                             <button class="mt-md-0 mt-2">روزہ - حقیقت و مصالح</button>
                            </span>


                            </div>

                         </div> --}}
                         {{-- <div class="box ">
                            <div class="rtl"><h6><a href="">تیس شعبان کو روزہ رکھنے کا حکم</a></h6></div>
                            <div class="d-flex justify-content-between rtl">

                            <span class="d-flex justify-content-between flex-wrap">
                                <button class="">  <span class="fa fa-regular fa-place-of-worship "></span>  دار الافتاء جامعۃ العلوم الاسلامیۃ بنوری ٹاؤن</button>
                             <button class="mt-md-0 mt-2">روزہ - حقیقت و مصالح</button>
                            </span>


                            </div>

                         </div> --}}
                         
                    </div>


                </div>

                

                <div class="col-lg-12 col-md-6  col-11  my-2 order-last d-flex justify-content-center py-2 px-lg-0 px-4">
                    <div class="col-four w-100 d-flex justify-content-center p-4">
                        <div class="rtl">

                            <div  style="position: fixed;left:3%;top:88%;z-index:1" class="whatsapp">
                                <a href="https://wa.me/+923354060065?text=Hi %20Hello%20 How %20are%20u%20" target="_blank">
                            
                                    <img src="/images/download.png" alt="whats-app-logo" width="60px" height="60px">
                                </a>
                            
                            </div>
                            
                            <h5 class="rtl">دار الافتاء ڈاٹ انفو ایپلیکیشن</h5>
                            <h6 class="rtl">فتاوی سرچ انجن، اوزان شرعیہ، ودیگر مفید فقہی خدمات سے آراستہ مفید ایپلیکیشن</h6>
                            <button class="rtl">ایپلیکیشن انسٹال کریں (برائے اینڈرائیڈ)</button>
                        </div>
                        
                    </div>

                </div>

                

            </div>

    </div>



@include('darul-iftah.footer')





</body>
</html>

