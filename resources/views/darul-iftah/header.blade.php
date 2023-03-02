<div class="offcn" id="offc">
  <header><img src="{{url('frontend/images/nav-bar-logo.png')}}" alt=""></header>
  <a href="{{ url("donation_page") }}" class="d-flex justify-content-center ">
      <span>عطیہ</span>
      <span class="fas fa-hand-holding-usd ml-1"></span>
  </a>
  <a href="{{url('question')}}" class="d-flex justify-content-center  align-items-center ">
      <span> سوال پوچھیں</span>
      <span class="fa fa-question-circle ml-1"></span>
  </a>
  <a href="{{ route('admin.login') }}" class=" d-flex justify-content-center d-none">
      <span>اکاؤنٹ</span>
      <span class=" fa fa-user-plus ml-1">

      </span>
  </a>
  <a onclick="closeNav()" class=" d-flex justify-content-center align-items-center d-none">
      <span>بند کریں</span>
      <span class=" fas fa-times ml-1">

      </span>
  </a>




</div>

<div class="header overflow-hidden">
  <div class="container">
      <div class="row justify-content-between align-items-center">
          <div class="col-lg-5 col-2">
              <div class="d-flex justify-content-around">
                  <a href="{{ url("donation_page") }}" class="d-lg-flex align-items-center d-none ">
                      <span>عطیہ</span>
                      <span class="fas fa-hand-holding-usd ml-1"></span>
                  </a>

                  <a href="{{ route('admin.login') }}" class=" d-lg-block d-none">
                      <span>اکاؤنٹ</span>
                      <span class=" fa fa-user-plus ml-1">

                      </span>
                  </a>
                  <!-- <a href="" class="d-flex justify-content-center">
                      <span class="fa fa-search"></span>
                  </a> -->

                  <a href="{{url('question')}}" class="d-lg-flex align-items-center d-none ">
                      <span> سوال پوچھیں</span>
                      <span class="fa fa-question-circle ml-1"></span>
                  </a>




              </div>
          </div>
          <div class="col-5 d-flex justify-content-lg-end justify-content-center">

              <a href="{{url('/')}}"><img src="{{url('frontend/images/nav-bar-logo.png')}}" height="80px" width="200px" class="img-fluid"
                      alt=""></a>
          </div>
          <div class="col-2  d-lg-none d-flex justify-content-end">
              <a><span id="bar" onclick="openNav()" class="fa fa-solid fa-bars "></span>
                  <span id="bar1" onclick="closeNav()" class="fa fa-solid fa-times mybar"></span></a>
          </div>
      </div>
  </div>
</div>