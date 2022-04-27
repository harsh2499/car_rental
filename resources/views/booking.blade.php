
<!DOCTYPE html>
<html>
 
<title>Book Car </title>
<head>
    <script type="text/javascript" src="/booking/assets/ajs/angular.min.js"> </script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="shortcut icon" type="image/png" href="/booking/assets/img/P.png.png">
    <link rel="stylesheet" href="/booking/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/booking/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="/booking/assets/w3css/w3.css">
  <script type="text/javascript" src="/booking/assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="/booking/assets/js/bootstrap.min.js"></script>  
  <script type="text/javascript" src="/booking/assets/js/custom.js"></script> 
 <link rel="stylesheet" type="text/css" media="screen" href="/booking/assets/css/clientpage.css" />
</head>
<body ng-app=""> 


      <!-- Navigation -->
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
                        <a href="#"><span class="glyphicon glyphicon-user"></span> Welcome  {{Session::get('customer')}} </a>
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
    
<div class="container" style="margin-top: 65px;" >
    <div class="col-md-7" style="float: none; margin: 0 auto;">
      <div class="form-area">
        <form role="form" action="/confirm" method="POST">
            @csrf
        <br style="clear: both">
          <br>

        
          <!-- <div class="form-group"> -->
              <h5> Selected Car:&nbsp;  <b>{{$data["car_name"]}}</b></h5>
         <!-- </div> -->
         
          <!-- <div class="form-group"> -->
            <h5> Number Plate:&nbsp;<b> {{$data["car_nameplate"]}}</b></h5>
          <!-- </div>      -->
        <!-- <div class="form-group"> -->
                  <label><h5>Start Date:</h5></label>
            <input type="date" name="rent_start_date" min="2022-04-25"  required="required" >
            
            &nbsp; 
          <label><h5>End Date:</h5></label>
          <input type="date" name="rent_end_date" min="2022-04-25" required="required"  >
        <!-- </div>      -->
        
        <h5> Choose your car type:  &nbsp;
            <input onclick="reveal()" type="radio" name="radio" value="ac" ng-model="myVar"  required="required" > <b>With AC </b>&nbsp;
            <input onclick="reveal()" type="radio" name="radio" value="non_ac" ng-model="myVar"><b>With-Out AC </b>
                
        
        <div ng-switch="myVar"> 
        <div ng-switch-default>
                    <!-- <div class="form-group"> -->
                <h5>Fare: <h5>    
                <!-- </div>    -->
                     </div>
                    <div ng-switch-when="ac">
                    <!-- <div class="form-group"> -->
                <h5 name="ok">Fare: <b>Rs. {{$data["ac_price"]}}/km and Rs. {{$data["ac_price_per_day"]}}/day</b><h5>    
                <!-- </div>    -->
                     </div>
                     <div ng-switch-when="non_ac">
                     <!-- <div class="form-group"> -->
                <h5>Fare: <b>Rs. {{$data["non_ac_price"]}}/km and Rs. {{$data["non_ac_price_per_day"]}}/day</b><h5>    
                <!-- </div>   -->
                     </div>
        </div>

         <h5> Charge type:  &nbsp;
            <input onclick="reveal()" type="radio" name="radio1" value="km"  required="required" ><b> per KM</b> &nbsp;
            <input onclick="reveal()" type="radio" name="radio1" value="days"><b> per day</b>

            <br><br>
                <!-- <form class="form-group"> -->
                Select a driver: &nbsp;
                <select name="driver_id_from_dropdown"  required="required" >
                <option disabled selected>Select Driver Name</option>
                    @foreach($print as $prints)

                        <option value={{$prints->driver_id}}>{{$prints->driver_name}}</option>

                    @endforeach
                    
                                    </select>
                <!-- </form> -->
                
                <input type="hidden" name="carid" value="{{$data["car_id"]}}">
                
         
           <input type="submit"name="submit" value="Rent Now" class="btn btn-warning pull-right">     
        </form>
        
      </div>
      <div class="col-md-12" style="float: none; margin: 0 auto; text-align: center;">
            <h6><strong>Note:</strong> You will be charged with extra <span class="text-danger">Rs. 500</span> for each day after the due date ends.</h6>
        </div>
    </div>

</body>

</html>