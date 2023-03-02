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
    {{-- dict links --}}

  <script src="{{url('frontend/urdutextbox.js')}}"></script>
  <script src="{{url('frontend/offcanva.js')}}"></script>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

  <script>

    window.onload = myOnload;

    function myOnload(evt){
      MakeTextBoxUrduEnabled(txtBox3);//enable Urdu in html text box
      MakeTextBoxUrduEnabled(txtBox4);//enable Urdu in html text area
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

@if (session('Success1'))
  <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
     <strong> {{ session('Success1') }} </strong>
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
        
        
        
        
        




   <div class="overflow-hidden mt-3">
       <div class="row  justify-content-center ">
        <div class="col-lg-6 col-md-8 col-sm-9 col-10 ">
            <form method="post" action="{{url('donation_upload')}}">
                @csrf
            <div class="questionbox">
                <h4 class="text-center"> آن لائن ویب سائٹ دارالافتاء تحریک منہاج القرآن کا آن لائن پراجیکٹ ہے، جس کے ذریعے عوام الناس کو دین کے بارے میں بنیادی معلومات اور روزمرہ زندگی میں پیش آمدہ مسائل کا حل قرآن و سنت کی روشنی میں فراہم کیا جاتا ہے۔ لوگ اپنی زندگی کو اسلامی طرزِ حیات کے مطابق ڈھالنے کیلئے یہاں سے رہنمائی حاصل کرتے ہیں، سوالات پوچھتے ہیں اور پہلے سے شائع شدہ سوالات سے اپنے دینی علم میں اضافہ کرتے ہیں</h4>
                <div class="form-group">
                    <label for="" class="">Name </label>
                    <input name="name" type="text" class="form-control validate" >
                </div>
                <div class="form-group">
                    <label for="" class="">Email  </label>
                    <input name="email" type="email" class="form-control validate" >
                </div>
                <div class="form-group">
                    <label class="">Contact </label>
                    <input type="number" name="contact" class="form-control validate" placeholder="">
                </div>
                <div class="form-group">
                    <label class=""> Country </label>
                    <input type="text" name="country" class="form-control validate" placeholder="">
                </div>
                <div class="form-group">
                    <label class=""> City </label>
                    <input  type="text" name="city" class="form-control validate" placeholder="">
                </div>
                <div class="form-group">
                    <label class=""> Amount </label>
                    <input  type="number" name="amount" class="form-control validate" placeholder="">
                </div>

                <div class="d-flex justify-content-end">
                    <button class="submit rtl "> بھیجیں</button>
                </div>
            </div>
        </form>
        </div>
       </div>
   </div>

   @include('darul-iftah.footer')


</body>
</html>
