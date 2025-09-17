<?php


session_start();

if (!isset($_SESSION['role']) == 'admin') {
  header("Location: ../index.php");
  exit;
}

include "../includes/config.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Title -->
  <title>Home</title>

  <!-- Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png" />

  <!-- STYLESHEETS -->
  <link rel="stylesheet" href="vendor/jqvmap/css/jqvmap.min.css" />
  <link rel="stylesheet" href="vendor/chartist/css/chartist.min.css" />
  <link
    rel="stylesheet"
    href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" />

  <link
    href="vendor/datatables/css/jquery.dataTables.min.css"
    rel="stylesheet" />
  <link class="main-css" rel="stylesheet" href="css/style.css" />
</head>

<body>
  <!--*******************
        Preloader start
    ********************-->
  <div id="preloader">
    <div class="sk-three-bounce">
      <div class="sk-child sk-bounce1"></div>
      <div class="sk-child sk-bounce2"></div>
      <div class="sk-child sk-bounce3"></div>
    </div>
  </div>
  <!--*******************
        Preloader end
    ********************-->

  <!--**********************************
        Main wrapper start
    ***********************************-->
  <div id="main-wrapper">
    <!--**********************************
            Header start
        ***********************************-->
    <!--**********************************
            Nav header start
        ***********************************-->
    <div class="nav-header">
      <a href="index.html" class="brand-logo">
        <svg
          class="logo-abbr"
          xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink"
          width="84"
          height="67"
          viewbox="0 0 84 67"
          fill="none">
          <mask
            id="mask0_135_5"
            style="mask-type: alpha"
            maskunits="userSpaceOnUse"
            x="4"
            y="0"
            width="76"
            height="66">
            <rect x="4" width="76" height="66" fill="url(#pattern0)"></rect>
          </mask>
          <g mask="url(#mask0_135_5)">
            <rect x="-3" y="-1" width="90" height="68" fill="none"></rect>
          </g>
          <defs>
            <pattern
              id="pattern0"
              patterncontentunits="objectBoundingBox"
              width="1"
              height="1">
              <use
                xlink:href="#image0_135_5"
                transform="matrix(0.0125 0 0 0.0143939 0 -0.00378788)"></use>
            </pattern>
            <image
              id="image0_135_5"
              width="80"
              height="70"
              xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAABGCAMAAABsQOMZAAAAllBMVEUAAAD/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxZ2RtyAAAAAMXRSTlMA61rOUwajmEgztPfHuqiLdj0gGhXw38SukX5pVi0lC4VhQjgD2b+fck4pD/nm0uIIbztwLQAAAiBJREFUWMPt19uSojAUheEoKigKqIACKqh4PnSv93+5YUprU0wwEMjFdFX/936SWIYd9tuPba5bG4XcTL8DGKwVcZvTHa+WewXcUAfyrF1b7oR/Wu7acEuUNJk25KYjfGhhNOB2xJWSK0nuwnEc2ZXgjCNqpK3qPt0YNTtsa3ArDRL5UQW31SDZ4Zx+5qInGuQ7canW3x7QsI7j8lzko0Ve6BY554GWeXZOxuEXFOQF89dhHHagKNO+MraC0hw2cw7quEeyZlndpxrOj/rsXW+sAuwV/sJHVSB1aUFOdGR1BcegVFqPrQnkXiPSjS9/d4xAjrQkF2u8ftUc5MlBfW6UcRzIN7RqcjvGxCB1FT8lDTqVYD/OBy4xZw3ZuzQWgZo1o6HL/sydiLsFB1e05C8guNJT2mYpp69pDk08IBWBWvEDrs2dlXd9Q1+YmAA6/SqwMKzekgJpBjPibGRVgvym3xwiTXtOO6wD9UBqOSXy/Hi92YhbDwAJkB9Wv88PM3S5sVYWpL9WVkzcfgDIg9TxTRK3BErALbKiKpCOJ2o6AUrB4SBrXwUS+V6LQRwHUmIwJ7fZNhHXBqQWxLUFqf8E9CDftwgMTWlPT5koN/Gl1hvQYabiJuCfYwX3PGrRk7nYBlWbeZK95M5DX7B19pXJl0bjcu7pxKxhxqjlVZlvE9wLnLVnbZs7dIvxkitTURotkPU835iyjEl2yv72U/sDJjPTtw93ZiUAAAAASUVORK5CYII="></image>
          </defs>
        </svg>
        <svg
          class="brand-title"
          xmlns="http://www.w3.org/2000/svg"
          width="122"
          height="19"
          viewbox="0 0 122 19"
          fill="none">
          <path
            d="M5.3 4.3V7.175H10.925V10.9H5.3V14.075H11.675V18H0.4V0.374999H11.675V4.3H5.3ZM25.8564 0.374999C27.7064 0.374999 29.3231 0.749999 30.7064 1.5C32.1064 2.23333 33.1814 3.26667 33.9314 4.6C34.6814 5.93333 35.0564 7.45833 35.0564 9.175C35.0564 10.875 34.6731 12.3917 33.9064 13.725C33.1564 15.0583 32.0814 16.1083 30.6814 16.875C29.2981 17.625 27.6898 18 25.8564 18H18.8814V0.374999H25.8564ZM25.4814 13.675C26.9148 13.675 28.0398 13.2833 28.8564 12.5C29.6731 11.7167 30.0814 10.6083 30.0814 9.175C30.0814 7.725 29.6731 6.60833 28.8564 5.825C28.0398 5.025 26.9148 4.625 25.4814 4.625H23.7814V13.675H25.4814ZM46.8504 0.374999V10.6C46.8504 11.55 47.0671 12.2833 47.5004 12.8C47.9504 13.3167 48.6254 13.575 49.5254 13.575C50.4254 13.575 51.1004 13.3167 51.5504 12.8C52.0171 12.2667 52.2504 11.5333 52.2504 10.6V0.374999H57.1504V10.6C57.1504 12.2167 56.8087 13.6 56.1254 14.75C55.4421 15.8833 54.5087 16.7417 53.3254 17.325C52.1587 17.8917 50.8587 18.175 49.4254 18.175C47.9921 18.175 46.7087 17.8917 45.5754 17.325C44.4587 16.7417 43.5754 15.8833 42.9254 14.75C42.2921 13.6167 41.9754 12.2333 41.9754 10.6V0.374999H46.8504ZM85.2084 0.374999V18H80.3084V8.275L76.9834 18H72.8834L69.5334 8.2V18H64.6334V0.374999H70.5584L74.9834 11.825L79.3084 0.374999H85.2084ZM97.6828 0.374999V18H92.7828V0.374999H97.6828ZM121.583 18H116.683L110.158 8.15V18H105.258V0.374999H110.158L116.683 10.35V0.374999H121.583V18Z"
            fill="black"></path>
        </svg>
      </a>

      <div class="nav-control">
        <div class="hamburger">
          <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
      </div>
    </div>
    <!--**********************************
            Nav header end
        ***********************************-->

    <div class="header">
      <div class="header-content">
        <nav class="navbar navbar-expand">
          <div class="collapse navbar-collapse justify-content-between">
            <div class="header-left"></div>

            <ul class="navbar-nav header-right">
              <li class="nav-item dropdown notification_dropdown">
                <a
                  class="nav-link bell dlab-theme-mode p-0"
                  href="javascript:void(0);">
                  <i id="icon-light" class="fas fa-sun"></i>
                  <i id="icon-dark" class="fas fa-moon"></i>
                </a>
              </li>

              <li class="nav-item dropdown header-profile">
                <a
                  class="nav-link"
                  href="javascript:void(0);"
                  role="button"
                  data-bs-toggle="dropdown">
                  <img
                    src="images/profile/education/pic1.jpg"
                    width="20"
                    alt="" />
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a href="javascript:void(0);" class="dropdown-item ai-icon">
                    <svg
                      id="icon-user1"
                      xmlns="http://www.w3.org/2000/svg"
                      width="18"
                      height="18"
                      viewbox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="feather feather-user">
                      <path
                        d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                      <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    <span class="ms-2">Admin </span>
                  </a>

                  <a href="../controllers/logout.php" class="dropdown-item ai-icon">
                    <svg
                      id="icon-logout"
                      xmlns="http://www.w3.org/2000/svg"
                      width="18"
                      height="18"
                      viewbox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="feather feather-log-out">
                      <path
                        d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                      <polyline points="16 17 21 12 16 7"></polyline>
                      <line x1="21" y1="12" x2="9" y2="12"></line>
                    </svg>
                    <span class="ms-2">Logout </span>
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

    <!--**********************************
            Sidebar start
        ***********************************-->
    <div class="dlabnav">
      <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
          <li class="nav-label first">Main Menu</li>
          <li>
            <a href="index.php" aria-expanded="false">
              <i class="la la-desktop"></i>
              <span class="nav-text">Dashboard</span>
            </a>
          </li>
          <li>
            <a
              class="has-arrow"
              href="javascript:void()"
              aria-expanded="false">
              <i class="la la-book"></i>
              <span class="nav-text">Blogs</span>
            </a>
            <ul aria-expanded="false">
              <li><a href="active-blogs.php">Active Blogs</a></li>
              <li><a href="inactive-blogs.php">Inactive Blogs</a></li>
            </ul>
          </li>

        </ul>
      </div>
    </div>
    <!--**********************************
            Sidebar end
        ***********************************-->

    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">
      <!-- row -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-3 col-xxl-3 col-sm-6">
            <div class="widget-stat card bg-primary">
              <div class="card-body">
                <div class="media">
                  <span class="me-3">
                    <i class="la la-users"></i>
                  </span>
                  <div class="media-body text-white">
                    <p class="mb-1">Total Students</p>
                    <h3 class="text-white">3280</h3>
                    <div class="progress mb-2 bg-white">
                      <div
                        class="progress-bar progress-animated bg-white"
                        style="width: 80%"></div>
                    </div>
                    <small>80% Increase in 20 Days</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-xxl-3 col-sm-6">
            <div class="widget-stat card bg-warning">
              <div class="card-body">
                <div class="media">
                  <span class="me-3">
                    <i class="la la-user"></i>
                  </span>
                  <div class="media-body text-white">
                    <p class="mb-1">Total Teachers</p>
                    <h3 class="text-white">245</h3>
                    <div class="progress mb-2 bg-white">
                      <div
                        class="progress-bar progress-animated bg-white"
                        style="width: 50%"></div>
                    </div>
                    <small>50% Increase in 25 Days</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-xxl-3 col-sm-6">
            <div class="widget-stat card bg-secondary">
              <div class="card-body">
                <div class="media">
                  <span class="me-3">
                    <i class="la la-graduation-cap"></i>
                  </span>
                  <div class="media-body text-white">
                    <p class="mb-1">Total Course</p>
                    <h3 class="text-white">28</h3>
                    <div class="progress mb-2 bg-white">
                      <div
                        class="progress-bar progress-animated bg-white"
                        style="width: 76%"></div>
                    </div>
                    <small>76% Increase in 20 Days</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-xxl-3 col-sm-6">
            <div class="widget-stat card bg-danger">
              <div class="card-body">
                <div class="media">
                  <span class="me-3">
                    <i class="la la-dollar"></i>
                  </span>
                  <div class="media-body text-white">
                    <p class="mb-1">Fees Collection</p>
                    <h3 class="text-white">25160$</h3>
                    <div class="progress mb-2 bg-white">
                      <div
                        class="progress-bar progress-animated bg-white"
                        style="width: 30%"></div>
                    </div>
                    <small>30% Increase in 30 Days</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="row tab-content">
              <div id="list-view" class="tab-pane fade active show col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Latest Contacts</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table
                        id="example3"
                        class="display text-nowrap"
                        style="min-width: 845px">
                        <thead>
                          <tr>
                            <th>Profile</th>
                            <th>Roll No.</th>
                            <th>Name</th>
                            <th>Education</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Admission Date</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <img
                                class="rounded-circle"
                                width="35"
                                src="images/profile/small/pic1.jpg"
                                alt="" />
                            </td>
                            <td><strong>01</strong></td>
                            <td>Tiger Nixon</td>
                            <td>M.COM., P.H.D.</td>
                            <td>
                              <a href="javascript:void(0);"><strong>123 456 7890</strong></a>
                            </td>
                            <td>
                              <a href="javascript:void(0);"><strong>info@example.com</strong></a>
                            </td>
                            <td>2011/04/25</td>
                            <td>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-primary"><i class="fa fa-pencil"></i></a>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img
                                class="rounded-circle"
                                width="35"
                                src="images/profile/small/pic2.jpg"
                                alt="" />
                            </td>
                            <td><strong>02</strong></td>
                            <td>Garrett Winters</td>
                            <td>M.COM., P.H.D.</td>
                            <td>
                              <a href="javascript:void(0);"><strong>987 654 3210</strong></a>
                            </td>
                            <td>
                              <a href="javascript:void(0);"><strong>info@example.com</strong></a>
                            </td>
                            <td>2011/07/25</td>
                            <td>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-primary"><i class="fa fa-pencil"></i></a>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img
                                class="rounded-circle"
                                width="35"
                                src="images/profile/small/pic3.jpg"
                                alt="" />
                            </td>
                            <td><strong>03</strong></td>
                            <td>Ashton Cox</td>
                            <td>B.COM., M.COM.</td>
                            <td>
                              <a href="javascript:void(0);"><strong>(123) 4567 890</strong></a>
                            </td>
                            <td>
                              <a href="javascript:void(0);"><strong>info@example.com</strong></a>
                            </td>
                            <td>2009/01/12</td>
                            <td>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-primary"><i class="fa fa-pencil"></i></a>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img
                                class="rounded-circle"
                                width="35"
                                src="images/profile/small/pic4.jpg"
                                alt="" />
                            </td>
                            <td><strong>04</strong></td>
                            <td>Cedric Kelly</td>
                            <td>B.COM., M.COM.</td>
                            <td>
                              <a href="javascript:void(0);"><strong>123 456 7890</strong></a>
                            </td>
                            <td>
                              <a href="javascript:void(0);"><strong>info@example.com</strong></a>
                            </td>
                            <td>2012/03/29</td>
                            <td>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-primary"><i class="fa fa-pencil"></i></a>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img
                                class="rounded-circle"
                                width="35"
                                src="images/profile/small/pic5.jpg"
                                alt="" />
                            </td>
                            <td><strong>05</strong></td>
                            <td>Airi Satou</td>
                            <td>B.A, B.C.A</td>
                            <td>
                              <a href="javascript:void(0);"><strong>987 654 3210</strong></a>
                            </td>
                            <td>
                              <a href="javascript:void(0);"><strong>info@example.com</strong></a>
                            </td>
                            <td>2008/11/28</td>
                            <td>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-primary"><i class="fa fa-pencil"></i></a>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img
                                class="rounded-circle"
                                width="35"
                                src="images/profile/small/pic6.jpg"
                                alt="" />
                            </td>
                            <td><strong>06</strong></td>
                            <td>Brielle Williamson</td>
                            <td>B.COM., M.COM.</td>
                            <td>
                              <a href="javascript:void(0);"><strong>123 456 7890</strong></a>
                            </td>
                            <td>
                              <a href="javascript:void(0);"><strong>info@example.com</strong></a>
                            </td>
                            <td>2012/12/02</td>
                            <td>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-primary"><i class="fa fa-pencil"></i></a>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img
                                class="rounded-circle"
                                width="35"
                                src="images/profile/small/pic7.jpg"
                                alt="" />
                            </td>
                            <td><strong>07</strong></td>
                            <td>Herrod Chandler</td>
                            <td>B.A, B.C.A</td>
                            <td>
                              <a href="javascript:void(0);"><strong>987 654 3210</strong></a>
                            </td>
                            <td>
                              <a href="javascript:void(0);"><strong>info@example.com</strong></a>
                            </td>
                            <td>2012/08/06</td>
                            <td>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-primary"><i class="fa fa-pencil"></i></a>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img
                                class="rounded-circle"
                                width="35"
                                src="images/profile/small/pic8.jpg"
                                alt="" />
                            </td>
                            <td><strong>08</strong></td>
                            <td>Rhona Davidson</td>
                            <td>B.TACH, M.TACH</td>
                            <td>
                              <a href="javascript:void(0);"><strong>(123) 4567 890</strong></a>
                            </td>
                            <td>
                              <a href="javascript:void(0);"><strong>info@example.com</strong></a>
                            </td>
                            <td>2010/10/14</td>
                            <td>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-primary"><i class="fa fa-pencil"></i></a>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img
                                class="rounded-circle"
                                width="35"
                                src="images/profile/small/pic9.jpg"
                                alt="" />
                            </td>
                            <td><strong>09</strong></td>
                            <td>Colleen Hurst</td>
                            <td>B.A, B.C.A</td>
                            <td>
                              <a href="javascript:void(0);"><strong>(123) 4567 890</strong></a>
                            </td>
                            <td>
                              <a href="javascript:void(0);"><strong>info@example.com</strong></a>
                            </td>
                            <td>2009/09/15</td>
                            <td>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-primary"><i class="fa fa-pencil"></i></a>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img
                                class="rounded-circle"
                                width="35"
                                src="images/profile/small/pic10.jpg"
                                alt="" />
                            </td>
                            <td><strong>10</strong></td>
                            <td>Sonya Frost</td>
                            <td>B.COM., M.COM.</td>
                            <td>
                              <a href="javascript:void(0);"><strong>123 456 7890</strong></a>
                            </td>
                            <td>
                              <a href="javascript:void(0);"><strong>info@example.com</strong></a>
                            </td>
                            <td>2008/12/13</td>
                            <td>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-primary"><i class="fa fa-pencil"></i></a>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img
                                class="rounded-circle"
                                width="35"
                                src="images/profile/small/pic1.jpg"
                                alt="" />
                            </td>
                            <td><strong>11</strong></td>
                            <td>Jena Gaines</td>
                            <td>B.TACH, M.TACH</td>
                            <td>
                              <a href="javascript:void(0);"><strong>987 654 3210</strong></a>
                            </td>
                            <td>
                              <a href="javascript:void(0);"><strong>info@example.com</strong></a>
                            </td>
                            <td>2008/12/19</td>
                            <td>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-primary"><i class="fa fa-pencil"></i></a>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img
                                class="rounded-circle"
                                width="35"
                                src="images/profile/small/pic2.jpg"
                                alt="" />
                            </td>
                            <td><strong>12</strong></td>
                            <td>Quinn Flynn</td>
                            <td>B.TACH, M.TACH</td>
                            <td>
                              <a href="javascript:void(0);"><strong>(123) 4567 890</strong></a>
                            </td>
                            <td>
                              <a href="javascript:void(0);"><strong>info@example.com</strong></a>
                            </td>
                            <td>2013/03/03</td>
                            <td>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-primary"><i class="fa fa-pencil"></i></a>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img
                                class="rounded-circle"
                                width="35"
                                src="images/profile/small/pic3.jpg"
                                alt="" />
                            </td>
                            <td><strong>13</strong></td>
                            <td>Charde Marshall</td>
                            <td>B.A, B.C.A</td>
                            <td>
                              <a href="javascript:void(0);"><strong>123 456 7890</strong></a>
                            </td>
                            <td>
                              <a href="javascript:void(0);"><strong>info@example.com</strong></a>
                            </td>
                            <td>2008/10/16</td>
                            <td>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-primary"><i class="fa fa-pencil"></i></a>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img
                                class="rounded-circle"
                                width="35"
                                src="images/profile/small/pic4.jpg"
                                alt="" />
                            </td>
                            <td><strong>14</strong></td>
                            <td>Haley Kennedy</td>
                            <td>B.COM., M.COM.</td>
                            <td>
                              <a href="javascript:void(0);"><strong>987 654 3210</strong></a>
                            </td>
                            <td>
                              <a href="javascript:void(0);"><strong>info@example.com</strong></a>
                            </td>
                            <td>2012/12/18</td>
                            <td>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-primary"><i class="fa fa-pencil"></i></a>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img
                                class="rounded-circle"
                                width="35"
                                src="images/profile/small/pic5.jpg"
                                alt="" />
                            </td>
                            <td><strong>15</strong></td>
                            <td>Tatyana Fitzpatrick</td>
                            <td>B.TACH, M.TACH</td>
                            <td>
                              <a href="javascript:void(0);"><strong>(123) 4567 890</strong></a>
                            </td>
                            <td>
                              <a href="javascript:void(0);"><strong>info@example.com</strong></a>
                            </td>
                            <td>2010/03/17</td>
                            <td>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-primary"><i class="fa fa-pencil"></i></a>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img
                                class="rounded-circle"
                                width="35"
                                src="images/profile/small/pic6.jpg"
                                alt="" />
                            </td>
                            <td><strong>16</strong></td>
                            <td>Michael Silva</td>
                            <td>B.A, B.C.A</td>
                            <td>
                              <a href="javascript:void(0);"><strong>123 456 7890</strong></a>
                            </td>
                            <td>
                              <a href="javascript:void(0);"><strong>info@example.com</strong></a>
                            </td>
                            <td>2012/11/27</td>
                            <td>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-primary"><i class="fa fa-pencil"></i></a>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img
                                class="rounded-circle"
                                width="35"
                                src="images/profile/small/pic7.jpg"
                                alt="" />
                            </td>
                            <td><strong>17</strong></td>
                            <td>Paul Byrd</td>
                            <td>B.TACH, M.TACH</td>
                            <td>
                              <a href="javascript:void(0);"><strong>987 654 3210</strong></a>
                            </td>
                            <td>
                              <a href="javascript:void(0);"><strong>info@example.com</strong></a>
                            </td>
                            <td>2010/06/09</td>
                            <td>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-primary"><i class="fa fa-pencil"></i></a>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img
                                class="rounded-circle"
                                width="35"
                                src="images/profile/small/pic8.jpg"
                                alt="" />
                            </td>
                            <td><strong>18</strong></td>
                            <td>Gloria Little</td>
                            <td>B.A, B.C.A</td>
                            <td>
                              <a href="javascript:void(0);"><strong>(123) 4567 890</strong></a>
                            </td>
                            <td>
                              <a href="javascript:void(0);"><strong>info@example.com</strong></a>
                            </td>
                            <td>2009/04/10</td>
                            <td>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-primary"><i class="fa fa-pencil"></i></a>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img
                                class="rounded-circle"
                                width="35"
                                src="images/profile/small/pic9.jpg"
                                alt="" />
                            </td>
                            <td><strong>19</strong></td>
                            <td>Bradley Greer</td>
                            <td>B.COM., M.COM.</td>
                            <td>
                              <a href="javascript:void(0);"><strong>(123) 4567 890</strong></a>
                            </td>
                            <td>
                              <a href="javascript:void(0);"><strong>info@example.com</strong></a>
                            </td>
                            <td>2012/10/13</td>
                            <td>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-primary"><i class="fa fa-pencil"></i></a>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img
                                class="rounded-circle"
                                width="35"
                                src="images/profile/small/pic10.jpg"
                                alt="" />
                            </td>
                            <td><strong>20</strong></td>
                            <td>Dai Rios</td>
                            <td>B.TACH, M.TACH</td>
                            <td>
                              <a href="javascript:void(0);"><strong>123 456 7890</strong></a>
                            </td>
                            <td>
                              <a href="javascript:void(0);"><strong>info@example.com</strong></a>
                            </td>
                            <td>2012/09/26</td>
                            <td>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-primary"><i class="fa fa-pencil"></i></a>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img
                                class="rounded-circle"
                                width="35"
                                src="images/profile/small/pic1.jpg"
                                alt="" />
                            </td>
                            <td><strong>21</strong></td>
                            <td>Jenette Caldwell</td>
                            <td>B.A, B.C.A</td>
                            <td>
                              <a href="javascript:void(0);"><strong>987 654 3210</strong></a>
                            </td>
                            <td>
                              <a href="javascript:void(0);"><strong>info@example.com</strong></a>
                            </td>
                            <td>2011/09/03</td>
                            <td>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-primary"><i class="fa fa-pencil"></i></a>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img
                                class="rounded-circle"
                                width="35"
                                src="images/profile/small/pic2.jpg"
                                alt="" />
                            </td>
                            <td><strong>22</strong></td>
                            <td>Yuri Berry</td>
                            <td>B.TACH, M.TACH</td>
                            <td>
                              <a href="javascript:void(0);"><strong>(123) 4567 890</strong></a>
                            </td>
                            <td>
                              <a href="javascript:void(0);"><strong>info@example.com</strong></a>
                            </td>
                            <td>2009/06/25</td>
                            <td>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-primary"><i class="fa fa-pencil"></i></a>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img
                                class="rounded-circle"
                                width="35"
                                src="images/profile/small/pic3.jpg"
                                alt="" />
                            </td>
                            <td><strong>23</strong></td>
                            <td>Caesar Vance</td>
                            <td>B.TACH, M.TACH</td>
                            <td>
                              <a href="javascript:void(0);"><strong>(123) 4567 890</strong></a>
                            </td>
                            <td>
                              <a href="javascript:void(0);"><strong>info@example.com</strong></a>
                            </td>
                            <td>2011/12/12</td>
                            <td>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-primary"><i class="fa fa-pencil"></i></a>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img
                                class="rounded-circle"
                                width="35"
                                src="images/profile/small/pic4.jpg"
                                alt="" />
                            </td>
                            <td><strong>24</strong></td>
                            <td>Doris Wilder</td>
                            <td>B.A, B.C.A</td>
                            <td>
                              <a href="javascript:void(0);"><strong>123 456 7890</strong></a>
                            </td>
                            <td>
                              <a href="javascript:void(0);"><strong>info@example.com</strong></a>
                            </td>
                            <td>2010/09/20</td>
                            <td>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-primary"><i class="fa fa-pencil"></i></a>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img
                                class="rounded-circle"
                                width="35"
                                src="images/profile/small/pic5.jpg"
                                alt="" />
                            </td>
                            <td><strong>25</strong></td>
                            <td>Angelica Ramos</td>
                            <td>B.COM., M.COM.</td>
                            <td>
                              <a href="javascript:void(0);"><strong>987 654 3210</strong></a>
                            </td>
                            <td>
                              <a href="javascript:void(0);"><strong>info@example.com</strong></a>
                            </td>
                            <td>2009/10/09</td>
                            <td>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-primary"><i class="fa fa-pencil"></i></a>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img
                                class="rounded-circle"
                                width="35"
                                src="images/profile/small/pic6.jpg"
                                alt="" />
                            </td>
                            <td><strong>26</strong></td>
                            <td>Gavin Joyce</td>
                            <td>B.TACH, M.TACH</td>
                            <td>
                              <a href="javascript:void(0);"><strong>(123) 4567 890</strong></a>
                            </td>
                            <td>
                              <a href="javascript:void(0);"><strong>info@example.com</strong></a>
                            </td>
                            <td>2010/12/22</td>
                            <td>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-primary"><i class="fa fa-pencil"></i></a>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img
                                class="rounded-circle"
                                width="35"
                                src="images/profile/small/pic7.jpg"
                                alt="" />
                            </td>
                            <td><strong>27</strong></td>
                            <td>Jennifer Chang</td>
                            <td>B.A, B.C.A</td>
                            <td>
                              <a href="javascript:void(0);"><strong>(123) 4567 890</strong></a>
                            </td>
                            <td>
                              <a href="javascript:void(0);"><strong>info@example.com</strong></a>
                            </td>
                            <td>2010/11/14</td>
                            <td>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-primary"><i class="fa fa-pencil"></i></a>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img
                                class="rounded-circle"
                                width="35"
                                src="images/profile/small/pic8.jpg"
                                alt="" />
                            </td>
                            <td><strong>28</strong></td>
                            <td>Brenden Wagner</td>
                            <td>B.TACH, M.TACH</td>
                            <td>
                              <a href="javascript:void(0);"><strong>123 456 7890</strong></a>
                            </td>
                            <td>
                              <a href="javascript:void(0);"><strong>info@example.com</strong></a>
                            </td>
                            <td>2011/06/07</td>
                            <td>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-primary"><i class="fa fa-pencil"></i></a>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img
                                class="rounded-circle"
                                width="35"
                                src="images/profile/small/pic9.jpg"
                                alt="" />
                            </td>
                            <td><strong>29</strong></td>
                            <td>Fiona Green</td>
                            <td>B.A, B.C.A</td>
                            <td>
                              <a href="javascript:void(0);"><strong>987 654 3210</strong></a>
                            </td>
                            <td>
                              <a href="javascript:void(0);"><strong>info@example.com</strong></a>
                            </td>
                            <td>2010/03/11</td>
                            <td>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-primary"><i class="fa fa-pencil"></i></a>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img
                                class="rounded-circle"
                                width="35"
                                src="images/profile/small/pic10.jpg"
                                alt="" />
                            </td>
                            <td><strong>30</strong></td>
                            <td>Shou Itou</td>
                            <td>B.COM., M.COM.</td>
                            <td>
                              <a href="javascript:void(0);"><strong>(123) 4567 890</strong></a>
                            </td>
                            <td>
                              <a href="javascript:void(0);"><strong>info@example.com</strong></a>
                            </td>
                            <td>2011/08/14</td>
                            <td>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-primary"><i class="fa fa-pencil"></i></a>
                              <a
                                href="javascript:void(0);"
                                class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--**********************************
            Content body end
        ***********************************-->

    <!--**********************************
            Footer start
        ***********************************-->
    <div class="footer">
      <div class="copyright">
        <p>
          Copyright © Designed &amp; Developed by
          <a href="#" target="_blank">SarkarInfoTech</a>2024
        </p>
      </div>
    </div>

    <!--**********************************
            Footer end
        ***********************************-->
  </div>
  <!--**********************************
        Main wrapper end
    ***********************************-->

  <!--**********************************
        Scripts
    ***********************************-->
  <!-- Required vendors -->
  <script src="vendor/global/global.min.js"></script>
  <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
  <script src="vendor/ckeditor/ckeditor.js"></script>

  <!-- Chart sparkline plugin files -->
  <script src="vendor/jquery-sparkline/jquery.sparkline.min.js"></script>
  <script src="js/plugins-init/sparkline-init.js"></script>

  <!-- Datatable -->
  <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
  <script src="js/plugins-init/datatables.init.js"></script>

  <!-- Chart Morris plugin files -->
  <script src="vendor/raphael/raphael.min.js"></script>
  <script src="vendor/morris/morris.min.js"></script>

  <!-- Init file -->
  <script src="js/plugins-init/widgets-script-init.js"></script>

  <!-- Svganimation scripts -->
  <script src="vendor/svganimation/vivus.min.js"></script>
  <script src="vendor/svganimation/svg.animation.js"></script>

  <!-- Demo scripts -->
  <script src="js/dashboard/dashboard.js"></script>

  <script src="js/custom.min.js"></script>
  <script src="js/dlabnav-init.js"></script>
  <script src="js/demo.js"></script>
</body>

</html>