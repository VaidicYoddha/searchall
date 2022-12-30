  <!-- BEGIN: Header-->
  <nav class="header-navbar navbar-expand-lg navbar navbar-fixed align-items-center navbar-shadow navbar-brand-center"
    data-nav="brand-center">
    <div class="navbar-header d-xl-block d-none">
      <ul class="nav navbar-nav">
        <li class="nav-item"><a class="navbar-brand" href="{{ url('/')}}"><span class="brand-logo">

            </span>
            <h1 class="brand-text mb-0" style="font-family: 'Rozha One', serif;">Searchall</h1>
          </a></li>
      </ul>
    </div>
    <div class="navbar-container d-flex content">
      <div class="bookmark-wrapper d-flex align-items-center">
        <ul class="nav navbar-nav d-xl-none">
          <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon" data-feather="menu"></i></a>
          </li>
        </ul>
      </div>
      <ul class="nav navbar-nav align-items-center ms-auto">

        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon"
              data-feather="moon"></i></a>
        </li>

           <!-- BEGIN: search-->
           <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon"
            data-feather="search"></i></a>
        <div class="search-input">
              <div class="search-input-icon"><i data-feather="search"></i></div>
              <form action="{{ url('/result/search') }}" class="faq-search-input" method="GET">
                  @csrf
                  <input name="search" class="form-control" type="text" placeholder="Search" >
               </form>
              <div class="search-input-close"><i data-feather="x"></i></div>
          <ul class="search-list search-list-main"></ul>
        </div>
      </li>
      </ul>
    </div>
  </nav>



  <!-- END: Header-->
