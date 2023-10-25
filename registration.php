<!DOCTYPE html>
<html>
    <head>
        <title> Registration | PHP </title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    </head>
    <body>
    
<div>
    <form action="DB.php" method="POST">
            <div class="container">
                <div class="row">
                 <div class="col-sm-3">
                <h1>Registration</h1>
                <nbsp><p>Before feeding the data check the policy and agreement below<p></nbsp> 
                <hr class="mb-5">
                <label for="fullname"><b>Full Name</b></label>
                <input class="form-control" type="text" name="fullname">
                <label for="phonenumber"><b>Phone Number</b></label>
                <input class="form-control" type="number" name="phonenumber">
                <label for="Email"><b>Email address</b></label>
                <input class="form-control" type="Email" name="Email">
                <label for="Country"><b>Country</b></label>
                <input class="form-control" type="text" name="Country">
                
                 <hr class="mb-5">
                <input class= " btn btn-primary" type="Submit" name="Create" value="Submit">
                <br>Check privacy policy<a href="policy.php"> here</a>
                <br>Check terms and conditions agreement<a href="Terms and conditions.php"> here</a>  
                     </div>
                </div>
            </div>
        </form>
    </div>
    </body>

</html>