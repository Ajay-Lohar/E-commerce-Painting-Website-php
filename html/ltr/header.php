<!DOCTYPE html>
<html dir="ltr" lang="en">
  
<!-- Mirrored from demos.wrappixel.com/premium-admin-templates/bootstrap/xtreme-bootstrap/package/html/mini-sidebar/table-sizing.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Oct 2023 12:58:24 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, xtreme admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, material design, material dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="Xtreme is powerful and clean admin dashboard template, inpired from Google's Material Design"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Rammya Reddy Admin</title>

    <link rel="canonical" href="https://www.wrappixel.com/templates/xtremeadmin/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/rainbow.png" />
    <!-- Custom CSS -->
    <link href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/xtreme-bootstrap/package/dist/css/style.min.css" rel="stylesheet" />
    <!-- This Page CSS -->
    <link rel="stylesheet" href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/xtreme-bootstrap/package/dist/libs/prismjs/themes/prism-okaidia.min.css">
    <!--table page css-->
    <link rel="stylesheet" href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/xtreme-bootstrap/package/dist/libs/bootstrap-table/dist/bootstrap-table.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!-- [if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif] -->
   
    <!-- Fa Icon font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
     
    </style>
  </head>

  <body>
    <!-- -------------------------------------------------------------- -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- -------------------------------------------------------------- -->
    <div class="preloader">
      <svg
        class="tea lds-ripple"
        width="37"
        height="48"
        viewbox="0 0 37 48"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M27.0819 17H3.02508C1.91076 17 1.01376 17.9059 1.0485 19.0197C1.15761 22.5177 1.49703 29.7374 2.5 34C4.07125 40.6778 7.18553 44.8868 8.44856 46.3845C8.79051 46.79 9.29799 47 9.82843 47H20.0218C20.639 47 21.2193 46.7159 21.5659 46.2052C22.6765 44.5687 25.2312 40.4282 27.5 34C28.9757 29.8188 29.084 22.4043 29.0441 18.9156C29.0319 17.8436 28.1539 17 27.0819 17Z"
          stroke="#2962FF"
          stroke-width="2"
        ></path>
        <path
          d="M29 23.5C29 23.5 34.5 20.5 35.5 25.4999C36.0986 28.4926 34.2033 31.5383 32 32.8713C29.4555 34.4108 28 34 28 34"
          stroke="#2962FF"
          stroke-width="2"
        ></path>
        <path
          id="teabag"
          fill="#2962FF"
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M16 25V17H14V25H12C10.3431 25 9 26.3431 9 28V34C9 35.6569 10.3431 37 12 37H18C19.6569 37 21 35.6569 21 34V28C21 26.3431 19.6569 25 18 25H16ZM11 28C11 27.4477 11.4477 27 12 27H18C18.5523 27 19 27.4477 19 28V34C19 34.5523 18.5523 35 18 35H12C11.4477 35 11 34.5523 11 34V28Z"
        ></path>
        <path
          id="steamL"
          d="M17 1C17 1 17 4.5 14 6.5C11 8.5 11 12 11 12"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke="#2962FF"
        ></path>
        <path
          id="steamR"
          d="M21 6C21 6 21 8.22727 19 9.5C17 10.7727 17 13 17 13"
          stroke="#2962FF"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
        ></path>
      </svg>
    </div>
    <!-- -------------------------------------------------------------- -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- -------------------------------------------------------------- -->
    <div id="main-wrapper">
      <!-- -------------------------------------------------------------- -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- -------------------------------------------------------------- -->
      <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a
              class="nav-toggler waves-effect waves-light d-block d-md-none"
              href="javascript:void(0)"
            >
              <i class="ri-close-line fs-6 ri-menu-2-line"></i>
            </a>
            <!-- -------------------------------------------------------------- -->
            <!-- Logo -->
            <!-- -------------------------------------------------------------- -->
            <a class="navbar-brand" href="#">
              <!-- Logo icon -->
              <b class="logo-icon">
                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                <!-- Dark Logo icon -->
                <img src="assets/imageslogo1.png" alt="homepage" class="dark-logo" />
                <!-- Light Logo icon -->
                <img
                  src="assets/images/rainbow.png"
                  alt="homepage"
                  class="light-logo"
                />
              </b>
              <!--End Logo icon -->
              <!-- Logo text -->
              <span class="logo-text">
                <!-- dark Logo text -->
                <img src="assets/imageslogo1.png" alt="homepage" class="dark-logo" />
                <!-- Light Logo text -->
                <img
                  src="assets/images/logo1.png"
                  class="light-logo"
                  alt="homepage"
                />
              </span>
            </a>
            <!-- -------------------------------------------------------------- -->
            <!-- End Logo -->
            <!-- -------------------------------------------------------------- -->
            <!-- -------------------------------------------------------------- -->
            <!-- Toggle which is visible on mobile only -->
            <!-- -------------------------------------------------------------- -->
            <a
              class="topbartoggler d-block d-md-none waves-effect waves-light"
              href="javascript:void(0)"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
              ><i class="ri-more-line fs-6"></i
            ></a>
          </div>
          <!-- -------------------------------------------------------------- -->
          <!-- End Logo -->
          <!-- -------------------------------------------------------------- -->
          <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <!-- -------------------------------------------------------------- -->
            <!-- toggle and nav items -->
            <!-- -------------------------------------------------------------- -->
            <ul class="navbar-nav me-auto">
              <li class="nav-item d-none d-md-block">
                <a
                  class="nav-link sidebartoggler waves-effect waves-light"
                  href="javascript:void(0)"
                  data-sidebartype="mini-sidebar"
                  ><i data-feather="menu" class="feather-sm"></i
                ></a>
              </li>
              <!-- -------------------------------------------------------------- -->
             
              <!-- -------------------------------------------------------------- -->
              
              
            </ul>
            <ul class="navbar-nav me-auto">
              Welcome &nbsp; &nbsp;<Span style="color: red; "> &nbsp;Rammya</Span> &nbsp; To Admin Panel
              
            </ul>
            <!-- -------------------------------------------------------------- -->
            <!-- Right side toggle and nav items -->
            <!-- -------------------------------------------------------------- -->
            
          </div>
        </nav>
      </header>
      <!-- -------------------------------------------------------------- -->
      <!-- End Topbar header -->
      <!-- -------------------------------------------------------------- -->
      <!-- -------------------------------------------------------------- -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- -------------------------------------------------------------- -->
      <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav">
              <!-- User Profile-->
              <li>
                <!-- User Profile-->
                <div class="user-profile d-flex no-block dropdown mt-3">
                  <div class="user-pic">
                    <img
                      src="assets/images/1.jpg"
                      alt="users"
                      class="rounded-circle"
                      width="40"
                    />
                  </div>
                  <div class="user-content hide-menu ms-2">
                    <a
                      href="#"
                      class=""
                      id="Userdd"
                      role="button"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <h5 class="mb-0 user-name font-medium">
                        Rammya Reddy <i data-feather="chevron-down" class="feather-sm"></i>
                      </h5>
                      <span class="op-5 user-email">admin@rammyareddy.com</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Userdd">
                      <a class="dropdown-item" href="#"
                        ><i data-feather="user" class="feather-sm text-info me-1"></i> My Profile</a
                      >
                      
                      
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#"
                        ><i data-feather="settings" class="feather-sm text-warning me-1"></i>
                        Account Setting</a
                      >
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#"
                        ><i data-feather="log-out" class="feather-sm text-danger me-1"></i>
                        Logout</a
                      >
                    </div>
                  </div>
                </div>
                <!-- End User Profile-->
              </li>
              
              <!-- User Profile-->
              
              <li class="sidebar-item">
                <a class="sidebar-link  waves-effect waves-dark" href="Dashboard.php" aria-expanded="false" >
                  <i data-feather="home" class="feather-icon"></i> <span class="hide-menu">Dashboard </span></a>
              </li>

              <li class="sidebar-item">
                <a  class="sidebar-link has-arrow waves-effect waves-dark" href="#" aria-expanded="false" >
                  <i data-feather="sidebar" class="feather-icon"></i  ><span class="hide-menu">Rammya Reddy Setting </span></a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="CompanyList.php" class="sidebar-link"><i class="mdi mdi-view-quilt"></i>
                    <span class="hide-menu"> Company Master</span></a>
                  </li>
                  <li class="sidebar-item">
                    <a href="EmployeeList.php" class="sidebar-link"><i class="mdi mdi-view-parallel"></i>
                    <span class="hide-menu"> Employee Master</span></a>
                  </li>
                  <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="mdi mdi-view-day"></i>
                  <span class="hide-menu"> System User Master</span></a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ResetPasswordList.php" class="sidebar-link"><i class="mdi mdi-view-array"></i>
                    <span class="hide-menu">System User Reset Password </span></a>
                  </li>
                </ul>
              </li>

              <li class="sidebar-item">
                <a  class="sidebar-link has-arrow waves-effect waves-dark" href="#" aria-expanded="false" >
                  <i data-feather="sidebar" class="feather-icon"></i  ><span class="hide-menu">Customer Master</span></a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="CustomerList.php" class="sidebar-link"><i class="mdi mdi-view-quilt"></i>
                    <span class="hide-menu"> Customer List</span></a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ContactList.php" class="sidebar-link"><i class="mdi mdi-view-parallel"></i>
                    <span class="hide-menu"> Contact List</span></a>
                  </li>
                  <li class="sidebar-item"><a href="EnqireList.php" class="sidebar-link"><i class="mdi mdi-view-day"></i>
                  <span class="hide-menu">Enquire List</span></a>
                  </li>
                 
                </ul>
              </li>
              
              <li class="sidebar-item">
                <a  class="sidebar-link has-arrow waves-effect waves-dark" href="#"  aria-expanded="false" ><i data-feather="clipboard" class="feather-icon"></i>
                <span class="hide-menu">Painting Categories Master </span></a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="PaintingCatagoriesList.php" class="sidebar-link" ><i class="mdi mdi-format-align-left"></i>
                    <span class="hide-menu">Painting Categories List </span></a>                  
                  </li>
                </ul>
              </li>

              <li class="sidebar-item">
                <a class="sidebar-link has-arrow waves-effect waves-dark" href="#" aria-expanded="false" ><i data-feather="clipboard" class="feather-icon"></i ><span class="hide-menu">Painting  Master </span></a>                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="PaintingList.php" class="sidebar-link" ><i class="mdi mdi-format-align-left"></i ><span class="hide-menu">Painting  List </span></a>    
                  </li>
                </ul>
              </li>
              
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow waves-effect waves-dark" href="#" aria-expanded="false" ><i data-feather="clipboard" class="feather-icon"></i ><span class="hide-menu">Order  Master </span></a>  
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="OrderList.php" class="sidebar-link" ><i class="mdi mdi-format-align-left"></i ><span class="hide-menu">Order  List </span></a>
                  </li>
                </ul>
              </li>
              
              
              <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false" ><i data-feather="log-out" class="feather-icon"></i ><span class="hide-menu">Log Out</span></a>
              </li>
            </ul>
              
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>