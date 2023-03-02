<div class="footer overflow-hidden">
    <div class="first row justify-content-around  p-3 no-gutters  ">
        <div class="col-10 order-lg-4 order-sm-2 col-sm-5 col-lg-3  first-colum  p-3">


                    <h5  class="heading">دار الافتاء ڈاٹ انفو۔۔ مختصر تعارف </h5>
                    <ul>
                        <li>-مختلف دار الافتاؤں کے فتاوی سے استفادہ کرنے کے لئے ایک منفرد سرچ انجن</li>
                        <li>- دنیا بھر کے دار الافتاؤں کی ویب سائٹس پر موجود فتاوی یکجا</li>
                        <li>- یونیکوڈ، پی ڈی ایف فارمیٹ میں دستیاب۔</li>
                        <li>- مستند با حوالہ فتاوی</li>
                    </ul>


        </div>
        <div class="col-10 order-lg-3 order-sm-1 col-sm-5 second-colum col-lg-3  p-3 ">
            <h5 class="heading">مفید ذیلی خدمات</h5>
            <ul>
                <li ><span class="fas fa-arrow-circle-left text-info "></span>  <a href="">دار الافتاء اینڈرائیڈ ایپلیکیشن</a></li>
                <li><span class="fas fa-arrow-circle-left  text-info "></span><a href=""> اوزان شرعیہ ایپ </a></li>
                <li ><span class="fas fa-arrow-circle-left  text-info  "></span><a href="">مختلف شرعی اوزان ومقادیر</a></li>
                <li ><span class="fas fa-arrow-circle-left  text-info  "></span><a href=""> زکوۃ کے حساب کا فارم </a></li>
                <li ><span class="fas fa-arrow-circle-left  text-info  "></span><a href="">تلاش فتوی ٹیلی گرام بوٹ </a></li>
                <li ><span class="fas fa-arrow-circle-left   text-info "></span><a href="">قرآن لائبریری</a></li>
                <li ><span class="fas fa-arrow-circle-left  text-info "></span><a href="" >حساب عدت وفات</a></li>
            </ul>
        </div>
        <div class="col-10 order-lg-2 order-sm-4 col-sm-5 col-lg-3 third-colum p-3">
            <h5 class="heading">رابطہ وتجاویز</h5>
            <p class="rtl">یہ فارم صرف آراء وتجاویز ارسال کرنے کے لئے ہے ۔۔ مسائل پوچھنے اور فتوی حاصل کرنے کے لئے ( یہاں کلک کریں)</p>
            <form class="form" method="post" action="{{url('home')}}">
                @csrf
            <div class="form-group">
                <input type="text" id="txtBox5"  name="name" class="form-control rtl" placeholder="آپ کا نام" >
            </div>
            <div class="form-group">
                <input type="email" name="email"  id="" class="form-control " placeholder="Enter email" >
            </div>
            <div class="form-group">
                <textarea type="text" id="txtBox6"   name="explain" placeholder="پیغام کی عبارت" cols="2" rows="2" class="form-control rtl"></textarea>

            </div>
            <div  class="d-flex justify-content-end"><button class="submit btn border rtl">بھیجیں</button></div>
        </div>
    </form>

        <div class="col-10 order-lg-1 order-sm-3 col-sm-5 col-lg-3 p-3 four-colum p-3 ">
            <h5 class="heading">سوشل میڈیا</h5>
            <div class="d-flex  justify-content-end">

                <span class="fab  fa-facebook icon text-primary"></span>
                <span class="fab fa-youtube icon text-danger"></span>
            </div>
        </div>

    </div>
    <div class="last d-flex justify-content-center align-items-center pt-2">
        <p>Powered by <b> Darul-iftah Jamia Haqania </b></p>
    </div>
</div>
