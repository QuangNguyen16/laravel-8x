<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mobile Admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('assets/public/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/public/css/bootstrap-responsive.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/public/css/uniform.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/public/css/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/public/css/matrix-style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/public/css/matrix-media.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link href="{{ asset('assets/public/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker-standalone.min.css"
        integrity="sha256-SMGbWcp5wJOVXYlZJyAXqoVWaE/vgFA5xfrH3i/jVw0=" crossorigin="anonymous" />
    <style type="text/css">
        ul.pagination {
            list-style: none;
            float: right;
        }

        ul.pagination li.active {
            font-weight: bold
        }

        ul.pagination li {
            float: left;
            display: inline-block;
            padding: 10px
        }

        .pl-4,
        .px-4 {
            padding-left: 1.5rem !important;
        }

        .pb-2,
        .py-2 {
            padding-top: .5rem !important;
        }

        .pt-2,
        .py-2 {
            padding-top: .5rem !important;
        }

        .border {
            border: 1px solid #dee2e6 !important;
        }

        .bg-white {
            background-color: #fff !important;
        }

        nav svg {
            height: 20px;
        }

        svg {
            vertical-align: middle;
            overflow: hidden;
        }

        .wrap-pagination-info {
            margin-top: 46px;
            border-top: 1px solid #e6e6e6;
            padding-top: 10px;
        }

        .wrap-pagination-info .hidden {
            display: block !important;
        }

        .wrap-pagination-info .rounded-l-md {
            margin-right: 5px;
        }

        .wrap-pagination-info .rounded-r-md {
            margin-left: 5px;
        }

    </style>
    @livewireStyles
</head>

<body>

    <!--Header-part-->
    <div id="header">
        <h1><a href="dashboard.html">Dashboard</a></h1>
    </div>
    <!--close-Header-part-->

    <!--top-Header-menu-->
    <div id="user-nav" class="navbar navbar-inverse">
        <ul class="nav">
            <li class="dropdown" id="profile-messages"><a title="" href="#" data-toggle="dropdown"
                    data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i> <span
                        class="text">Welcome Super Admin</span><b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
                    <li class="divider"></li>
                    <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
                </ul>
            </li>
            <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown"
                    data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span
                        class="text">Messages</span> <span class="label label-important">5</span> <b
                        class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
                    <li class="divider"></li>
                    <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
                    <li class="divider"></li>
                    <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
                    <li class="divider"></li>
                    <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
                </ul>
            </li>
            <li class=""><a title="" href=" #"><i class="icon icon-cog"></i> <span
                    class="text">Settings</span></a></li>
            <li class=""><a title="" href=" login.html"><i class="icon icon-share-alt"></i> <span
                    class="text">Logout</span></a></li>
        </ul>
    </div>

    <!--start-top-serch-->
    <div id="search">
        <form action="/result" method="get">
            <input type="text" placeholder="Search here..." name="key" />
            <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
        </form>
    </div>
    <!--close-top-serch-->

    <!--sidebar-menu-->

    <div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-th"></i>Tables</a>
        <ul>
            <li><a href="{{ route('admin.products') }}"><i class="icon icon-home"></i> <span>Dashboard</span></a>
            </li>

            <li> <a href="{{ route('admin.addproducts') }}"><i class="icon icon-th-list"></i> <span>Add New
                        Product</span></a></li>

            <li> <a href="{{ route('admin.categories') }}"><i class="icon icon-th-list"></i>
                    <span>Category</span></a></li>

            <li> <a href="{{ route('admin.addcategory') }}"><i class="icon icon-th-list"></i> <span>Add new
                        Category</span></a></li>

            <li> <a href="{{ route('admin.sale') }}"><i class="icon icon-th-list"></i> <span>Sale Setting </span></a>
            </li>

            <li> <a href="{{ route('admin.coupons') }}"><i class="icon icon-th-list"></i> <span>All Coupons
                    </span></a></li>

            <li> <a href="{{ route('admin.addcoupon') }}"><i class="icon icon-th-list"></i> <span>Add New Coupon
                    </span></a></li>

            <li> <a href="{{ route('admin.orders') }}"><i class="icon icon-th-list"></i> <span>All Orders
                    </span></a></li>


        </ul>
    </div>
    <!-- BEGIN CONTENT -->
    {{ $slot }}
    <!-- END CONTENT -->
    <!--Footer-part-->
    <div class="row-fluid">
        <div id="footer" class="span12"> 2017 &copy; TDC - Lập trình web 1</div>
    </div>
    <!--end-Footer-part-->
    <script src="{{ asset('assets/public/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/public/js/jquery.ui.custom.js') }}"></script>
    <script src="{{ asset('assets/public/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/public/js/jquery.uniform.js') }}"></script>
    <script src="{{ asset('assets/public/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/public/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/public/js/matrix.js') }}"></script>
    <script src="{{ asset('assets/public/js/matrix.tables.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"
        integrity="sha256-5YmaxAwMjIpMrVlK84Y/+NjCpKnFYa8bWWBbUHSBGfU=" crossorigin="anonymous"></script>
    @livewireScripts
    @stack('scripts')
</body>

</html>
