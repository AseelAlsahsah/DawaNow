<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>SIGN UP</title>

    <!-- Icons font CSS-->
    <link href="vendor1/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor1/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor1/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor1/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css1/main.css" rel="stylesheet" media="all">
<style>
.card-1 .card-heading {
  background: none
}
</style>
    
</head>


<body>
   <div>
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-body">
                    <h2 class="title">Order Info</h2>
                    <form id="form" method="POST">
                        
                            
                                <div class="input-group">
                                    <input class="input--style-99" type="text" placeholder="medicine name" name="mname[]">
                                    
                                </div>
                            
							<div class="row row-space">
                            <div class="col-2">
                            <div class="input-group">
                                <input class="input--style-99" type="text" placeholder="doze" name="doze">
                                </div>
                                </div>
								<div class="col-2">
                            <div class="input-group">
                                <input class="input--style-99" type="number" min="1" max="5" placeholder="amount" name="mamount">
								
                                </div>
                                </div>
                        </div>
                       
                           
							
							<div class="row row-space">
							<div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="PHONE NUMBER" name="pnum">
                                    
                                </div>
                            </div>
							</div>
							<div class="input-group">
                            <input class="input--style-1" type="text" placeholder=" Email" name="fname">
							</div> 
							
								<div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Address" name="pnum">
								</div>
							 <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="city">
                                            <option disabled="disabled" selected="selected" >city</option>
                                            <option>AMMAN</option>
                                            <option>IRBID</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                            <div class="input-group">
                                <input class="input--style-99" type="text" placeholder="building number" name="Bnum">
                                </div>
                                </div>
                        </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor1/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor1/select2/select2.min.js"></script>
    <script src="vendor1/datepicker/moment.min.js"></script>
    <script src="vendor1/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js1/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
