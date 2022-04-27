<html><head>
<link rel="shortcut icon" type="image/png" href="assets/img/P.png.png">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
<link rel="stylesheet" href="assets/w3css/w3.css">
<link rel="stylesheet" type="text/css" href="assets/css/customerlogin.css">
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="assets/css/clientpage.css">
<link rel="stylesheet" type="text/css" media="screen" href="assets/css/bookingconfirm.css">
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" data-new-gr-c-s-check-loaded="14.1057.0" data-gr-ext-installed="">
<!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="color: black">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                    </button>
                <a class="navbar-brand page-scroll" href="index.php">
                   Car Rentals </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->

                        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="welcome">Home</a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-user"></span> Welcome lucas</a>
                    </li>
                    <ul class="nav navbar-nav">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Garagge <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="returncar">Return Now</a></li>
              <li> <a href="mybookings"> My Bookings</a></li>
            </ul>
            </li>
          </ul>
                    <li>
                        <a href="log"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                    </li>
                </ul>
            </div>

                        <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>



    <div class="container">
        <div class="jumbotron">
            <h1 class="text-center" style="color: green;"><span class="glyphicon glyphicon-ok-circle"></span> Car Returned</h1>
        </div>
    </div>
    <br>

    <h2 class="text-center"> Thank you for visiting Car Rentals! We wish you have a safe ride. </h2>

    <h3 class="text-center"> <strong>Your Order Number:</strong> <span style="color: blue;">{{$data["id"]}}</span> </h3>


    <div class="container">
        <h5 class="text-center">Please read the following information about your order.</h5>
        <div class="box">
            <div class="col-md-10" style="float: none; margin: 0 auto; text-align: center;">
                <h3 style="color: orange;">Your booking has been received and placed into out order processing system.</h3>
                <br>
                <h4>Please make a note of your <strong>order number</strong> now and keep in the event you need to communicate with us about your order.</h4>
                <br>
                <h3 style="color: orange;">Invoice</h3>
                <br>
            </div>
            <div class="col-md-10" style="float: none; margin: 0 auto; ">
                <h4> <strong>Vehicle Name: </strong>{{$data1->car_name}}</h4>
                <br>
                <h4> <strong>Vehicle Number:</strong>{{$data1->car_nameplate}}    </h4>
                <br>
                <h4> <strong>Fare:&nbsp;</strong>  Rs. {{$data["fare"]}}/day</h4>
                <br>
                <h4> <strong>Booking Date: </strong>{{$data["booking_date"]}} </h4>
                <br>
                <h4> <strong>Start Date: </strong> {{$data["start_date"]}}</h4>
                <br>
                <h4> <strong>Rent End Date: </strong> {{$data["end_date"]}}</h4>
                <br>
                <h4> <strong>Car Return Date: </strong> {{$data["car_return_date"]}}</h4>
                <br>
                                    <h4> <strong>Number of days:</strong> {{$data["no_of_days"]}}day(s)</h4>
                                <br>
                                <h4> <strong>Total Amount: </strong> Rs. {{$data["total_amount"]}}/-     </h4>
                <br>
            </div>
        </div>
        <div class="col-md-12" style="float: none; margin: 0 auto; text-align: center;">
            <h6>Warning! <strong>Do not reload this page</strong> or the above display will be lost. If you want a hardcopy of this page, please print it now.</h6>
        </div>
    </div>


<footer class="site-footer">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <h5>© 2022 Car Rentals</h5>
                </div>
            </div>
        </div>
    </footer>
</body><grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration></html>