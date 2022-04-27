<!DOCTYPE html>
<html>


<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/png" href="assets/img/P.png.png">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/bookingconfirm.css" />
</head>

<body>
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
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-user"></span> Welcome {{Session::get('customer')}}</a>
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


    @if(session()->get('number') && session()->get('cname') && session()->get('cnameplate') && session()->get('bdate')
    && session()->get('sdate') && session()->get('rdate') && session()->get('dname')&&
    session()->get('dgender') && session()->get('dlnumber') && session()->get('dphone') && session()->get('ename') )
    <div class="container">
        <div class="jumbotron">
            <h1 class="text-center" style="color: green;"><span class="glyphicon glyphicon-ok-circle"></span> Booking Confirmed.</h1>
        </div>
    </div>
    <br>

    <h2 class="text-center"> Thank you for using Car Rental System! We wish you have a safe ride. </h2>



    <h3 class="text-center"> <strong>Your Order Number:</strong> <span style="color: blue;">{{ session()->get('number') }}</span> </h3>


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
                <h4> <strong>Vehicle Name: </strong> {{ session()->get('cname') }}</h4>
                <br>
                <h4> <strong>Vehicle Number:</strong> {{ session()->get('cnameplate') }}</h4>
                <br>



                <br>
                <h4> <strong>Booking Date: </strong>{{ session()->get('bdate') }}</h4>
                <br>
                <h4> <strong>Start Date: </strong>{{ session()->get('sdate') }}</h4>
                <br>
                <h4> <strong>Return Date: </strong>{{ session()->get('rdate') }}</h4>
                <br>
                <h4> <strong>Driver Name: </strong>{{ session()->get('dname') }}</h4>
                <br>
                <h4> <strong>Driver Gender: </strong>{{ session()->get('dgender') }} </h4>
                <br>
                <h4> <strong>Driver License number: </strong>{{ session()->get('dlnumber') }} </h4>
                <br>
                <h4> <strong>Driver Contact:</strong>{{ session()->get('dphone') }} </h4>
                <br>
                <h4> <strong>Employee Name:</strong> {{ session()->get('ename') }}</h4>
                <br>


            </div>
        </div>
        <div class="col-md-12" style="float: none; margin: 0 auto; text-align: center;">
            <h6>Warning! <strong>Do not reload this page</strong> or the above display will be lost. If you want a hardcopy of this page, please print it now.</h6>
        </div>
    </div>
</body>


    @else
    <h1 style="text-align:center;margin:250px">Please Submit The Form</h1>
    @endif

    <footer class="site-footer">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <h5>© <?php echo date("Y"); ?> Car Rentals</h5>
                </div>
            </div>
        </div>
    </footer>

</html>