{{-- @include('darul-iftah.script')
 --}}
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
    {{-- dict links --}}

  <script src="{{url('frontend/urdutextbox.js')}}"></script>
  <script src="{{url('frontend/offcanva.js')}}"></script>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

  <script>

    window.onload = myOnload;

    function myOnload(evt){

      MakeTextBoxUrduEnabled(txtBox5);//enable Urdu in html text box
      MakeTextBoxUrduEnabled(txtBox6);//enable Urdu in html text area
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

    

        <div  style="position: fixed;left:3%;top:90%;z-index:1" class="whatsapp">
            <a href="https://wa.me/+923354060065?text=Hi %20Hello%20 How %20are%20u%20" target="_blank">
        
                <img src="/images/download.png" alt="whats-app-logo" width="60px" height="60px">
            </a>
        
        </div>


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




    @include('darul-iftah.header')

    {{-- @include('darul-iftah.search') --}}

    <form class="form" action="" >

        <div class="section-1 py-2 mt-1 overflow-hidden">
            <div class="row justify-content-center align-content-around  ">
        
                {{-- <div class="col-10 col-md-7 col-lg-6 p-1">
                    <div class="search-box  d-flex justify-content-between align-items-center">
                        
                        <button class="btn btn-primary"><span class="fa fa-search"></span></button>
                        <input type="search" id="txtBox01"  name="search" placeholder="تلاش کے الفاظ۔۔۔"   class="w-100 h-100">
                    </div>
                </div> --}}
        
                <div class="col-12 d-flex justify-content-center mt-1">
                    <h6 class="rtl">{{ $count }} مستند فتاوی میں تلاش کی سہولت</h6>
                </div>
        
            </div>
        </div>
        </form>
        


 <div class="showanswer overflow-hidden">
    <div class="row justify-content-center ">
        <div class="col-md-10 col-lg-9 col-xl-8 col-sm-11 col-12">
            <div class="content">
                <div class="heading">
                         <h4 class="rtl text-center p-2"></h4>
                    {{-- <h4 class="rtl text-center">کسی کے بارے میں جانے بغیر اس کے اوپر کفر کا فتوی لگانے کا حکم</h4> --}}
                    <h4 class="rtl text-center">{{$answer->question_name}}</h4>

                </div>
                <div class="question ">
                    <h6 class="rtl text-right">سوال</h6>
                    {{-- <p class=" rtl">
                        کسی کے بارے میں جانے بغیر اس کے اوپر کفر کا فتوی لگانا یا یہ کہنا کہ یہ مشرک ہے اور صرف اپنی عقل کی بنا پر مشرک سمجھتے ہوئے نماز جنازہ نہ پڑھنا اور میت میں شرکت نہ کرنا جائز ہے؟ جیسا کہ اگر کوئی شخص نیاز وغیرہ کرتاہے، تو بھائی اس کو یہ کہے کہ تم مشرک ہو اور جنازے میں شرکت نہ کرے اور تقریباً سب ہی لوگوں کو ایسا کہے تو یہ عمل کیسا ہے؟ کیا سگے بہن بھائیوں کو ایسا کہنا جائز ہے جب کہ حقیقت میں دلوں کا حال اللہ جانتاہے کہ کیا پتا کس کی کس نیکی پہ بخشش ہوجائے۔ براہ کرم، جواب دیں۔ نبی کریم صلی اللہ علیہ وسلم نے کس کافر کی نماز جنازہ نہیں پڑھی تھی؟
                    </p> --}}
                    <p class="rtl text-right">{{$answer->question_explain}}</p>
                </div>
                <div class="answer">
                    <h6 class="rtl">جواب</h6>
                    <h6 class="rtl">بسم الله الرحمن الرحيم</h6>
                    {{-- <p class="rtl"><span>Fatwa :</span><span>974-827/D=10/1440</span></p> --}}
                    <p class="rtl"><span>Fatwa :</span><span>{{$answer->fatwa}}</span></p>


                    {{-- <p class=" rtl" id="content">
                        کافر اور مشرک کی نماز جنازہ پڑھنا جائز نہیں بشرطیکہ اس کا کفر اور شرک قطعی طور پر ثابت ہونبی کریم صلی اللہ علیہ وسلم نے کسی کافر کی نماز جنازہ نہیں پڑھی کسی مسلمان کی نماز جنازہ محض شک شبہ کی بنیاد پر پڑھنا ترک کرنا برا اور گناہ ہے۔ ابوداوٴد کی روایت کا ایک جز یہ ہے کہ والصلاة واجبة علی کل مسلم براً کان او فاجراً وان عمل الکبائر (ص: ۳۴۳/۱، ابوداوٴ) یعنی چاہے گناہ گار شخص کیوں نہ ہو اس کی نماز جنازہ پڑھی جائے گی۔
اگر کوئی شخص دوسرے مسلمان بھائی کو کافر کہہ دے تو حدیث میں اس پر سخت وعید آئی ہے اور فرمایا گیا ہے کہ جس کو کہا جا رہا ہے اگر وہ ایسا ہوا تو اس کے لئے باعث وبال ہے اور اگر کافر نہ ہوا تو خود کہنے والے کے لئے جملہ باعث وبال بنے گا۔
                    </p> --}}

                    <p class="rtl" id="content">{{$answer->answer}}</p>
                    <div class="d-flex justify-content-center ">
                        <hr style="width: 80%; background-color: #25316D ;" >
                    </div>
                    <p style="font-size: 20px" class="rtl">  آیت<br></p>

                    <p  style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif" class="rtl" id="content">{{$answer->ayat}}</p>


                    <p class="rtl">واللہ تعالیٰ اعلم<br>دارالافتاء،<br></p>

                </div>

                <div class="d-flex justify-content-center ">
                    <hr style="width: 80%; background-color: #25316D ;" >
                </div>

                <div class="confooter">
                    <p class="rtl">ماخذ : <span>{{$answer->makhaz}}</span></p>
                    <p class="rtl">فتوی نمبر : <span>{{$answer->fatwa_no}}</span></p>
                    <p class="rtl">تاریخ اجراء : <span>{{$answer->date}}</span></p>


                </div>
                <div class="buttoncon d-flex justify-content-center ">
                    {{-- <button>فتوی پرنٹ <span class=" fa fa-print"></span></button> --}}
                    <a href="{{$answer->avidence}}"> <button>View <span class=" fa fa-print"></span></button></a> 

                </div>





            </div>
        </div>
    </div>
 </div>

 @include('darul-iftah.footer')


</body>
</html>
