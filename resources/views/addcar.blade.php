<!DOCTYPE html>
<html>


<head>
    <link rel="shortcut icon" type="image/png" href="assets/img/P.png.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/customerlogin.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/clientpage.css" />
    <style>
    .alert-danger {
        color: #842029;
        background-color: #f8d7da;
        border-color: #f5c2c7;
    }
</style>
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
                        <a href="#"><span class="glyphicon glyphicon-user"></span>Welcome {{Session::get('user')}} </a>
                    </li>
                    <li>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Control Panel <span class="caret"></span> </a>
                                <ul class="dropdown-menu">
                                    <li> <a href="addcar">Add Car</a></li>
                                    <li> <a href="enterdriver"> Add Driver</a></li>
                                    <li> <a href="clientview">View</a></li>

                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                    </li>
                </ul>
            </div>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container" style="margin-top: 65px;">
        <div class="col-md-7" style="float: none; margin: 0 auto;">
            <div class="form-area">
                <form action="entercardetail" enctype="multipart/form-data" method="POST">
                    @csrf
                    <br style="clear: both">
                    <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Please Provide Your Car Details. </h3>

                    <div class="form-group">
                        <input type="text" class="form-control" id="car_name" name="car_name" placeholder="Car Name " autofocus="">
                        <div class="alert-danger">{{$errors->first("car_name")}}</div>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="car_nameplate" name="car_nameplate" placeholder="Vehicle Number Plate">
                        <div class="alert-danger">{{$errors->first("car_nameplate")}}</div>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="ac_price" name="ac_price" placeholder="AC Fare per KM (Rs)">
                        <div class="alert-danger">{{$errors->first("ac_price")}}</div>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="non_ac_price" name="non_ac_price" placeholder="Non-AC Fare per KM (Rs)">
                        <div class="alert-danger">{{$errors->first("non_ac_price")}}</div>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="ac_price_per_day" name="ac_price_per_day" placeholder="AC Fare per day (Rs)">
                        <div class="alert-danger">{{$errors->first("ac_price_per_day")}}</div>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="non_ac_price_per_day" name="non_ac_price_per_day" placeholder="Non-AC Fare per day (Rs)">
                        <div class="alert-danger">{{$errors->first("non_ac_price_per_day")}}</div>
                    </div>

                    <div class="form-group">
                        <input name="car_img" type="file">
                        <div class="alert-danger">{{$errors->first("car_img")}}</div>
                    </div>
                    <button type="submit" id="submit" name="submit" class="btn btn-success pull-right"> Submit for Rental</button>
                </form>
            </div>
        </div>


        <div class="col-md-12" style="float: none; margin: 0 auto;">
            <div class="form-area" style="padding: 0px 100px 100px 100px;">
                <form action="" method="POST">
                    <br style="clear: both">
                    <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> My Cars </h3>
                    <div style="overflow-x:auto;">
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th></th>
                                    <th width="24%"> Name</th>
                                    <th width="15%"> Nameplate </th>
                                    <th width="13%"> AC Fare (/km) </th>
                                    <th width="17%"> Non-AC Fare (/km)</th>
                                    <th width="13%"> AC Fare (/day)</th>
                                    <th width="17%"> Non-AC Fare (/day)</th>
                                    <th width="1%"> Availability </th>
                                </tr>
                            </thead>


                            <tbody>
                                @foreach($data as $print)
                                <tr>
                                    <td> <span class="glyphicon glyphicon-menu-right"></span> </td>
                                    <td>{{$print["car_name"]}}</td>
                                    <td>{{$print["car_nameplate"]}}</td>
                                    <td>{{$print["ac_price"]}}</td>
                                    <td>{{$print["non_ac_price"]}}</td>
                                    <td>{{$print["ac_price_per_day"]}}</td>
                                    <td>{{$print["non_ac_price_per_day"]}}</td>
                                    <td>{{$print["car_availability"]}}</td>


                                </tr>
                            </tbody>
                            @endforeach

                        </table>
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>
</body>

</html>