<?php

include("../../connection.php");

// $query = "SELECT * FROM users2 ORDER BY id DESC";
// $stmt = $connection->prepare($query);
// $stmt->execute();
// $results = $stmt->get_result();
echo "connected here";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags-->
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="Colorlib Templates" />
    <meta name="author" content="Colorlib" />
    <meta name="keywords" content="Colorlib Templates" />

    <!-- Title Page-->
    <title>Add Account</title>

    <!-- Icons font CSS-->
    <link
      href="vendor/mdi-font/css/material-design-iconic-font.min.css"
      rel="stylesheet"
      media="all"
    />
    <link
      href="vendor/font-awesome-4.7/css/font-awesome.min.css"
      rel="stylesheet"
      media="all"
    />

    <!-- Font special for pages-->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
      rel="stylesheet"
    />

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all" />
    <link
      href="vendor/datepicker/daterangepicker.css"
      rel="stylesheet"
      media="all"
    />

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all" />
  </head>

  <body>
    <form action="accnt.php" method="POST">
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
      <div class="wrapper wrapper--w790">
        <div class="card card-5">
          <div class="card-heading">
            <h2 class="title">Add Account</h2>
          </div>
          <div class="card-body"><!-- 
            <form method="POST"> -->
              <div class="form-row m-b-55">
                <div class="name">Name</div>
                <div class="value">
                  <div class="row row-space">
                    <div class="col-2">

                      <div class="input-group-desc">
                        <input
                          class="input--style-5"
                          type="text"
                          name="first_name"
                        />
                        <label class="label--desc">first name</label>
                      </div>
                    </div>


                    <div class="col-2">
                      <div class="input-group-desc">
                        <input
                          class="input--style-5"
                          type="text"
                          name="last_name"
                        />
                        <label class="label--desc">last name</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="name">Email</div>
                <div class="value">
                  <div class="input-group">
                    <input class="input--style-5" type="email" name="email" />
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="name">Date Of Birth</div>
                <div class="value">
                  <div class="input-group">
                    <input
                      class="input--style-5"
                      type="date"
                      name="birth_date"
                    />
                  </div>
                </div>
              </div>
              <div class="form-row m-b-55">
                <div class="name">Phone</div>
                <div class="value">
                  <div class="row row-refine">
                    <div class="col-3">
                      <div class="input-group-desc">
                        <input
                          class="input--style-5"
                          type="text"
                          name="area_code"
                        />
                        <label class="label--desc">Area Code</label>
                      </div>
                    </div>
                    <div class="col-9">
                      <div class="input-group-desc">
                        <input
                          class="input--style-5"
                          type="text"
                          name="phone"
                        />
                        <label class="label--desc">Phone Number</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-row">
                <div class="name">Username</div>
                <div class="value">
                  <div class="input-group">
                    <input class="input--style-5" type="text" name="username" />
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="name">Password</div>
                <div class="value">
                  <div class="input-group">
                    <input
                      class="input--style-5"
                      type="password"
                      name="password"
                      id="password"
                    />
                  </div>
                </div>
                <input type="checkbox" onclick="myFunction()" />
                Show Password
              </div>
              <div class="form-row">
                <div class="name">Position</div>
                <div class="value">
                  <div class="input-group">
                    <input class="input--style-5" type="text" name="position" />
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="name">Salary</div>
                <div class="value">
                  <div class="input-group">
                    <input class="input--style-5" type="number" name="salary" />
                  </div>
                </div>
              </div>
              <div>
                <button class="btn btn--radius-2 btn--red" type="submit">
                  Add Acount
                </button>

              </div>
               

          </div>
        </div>
      </div>
    </div>

    </form>
   



    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
  </body>
  <!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<!-- end document-->
