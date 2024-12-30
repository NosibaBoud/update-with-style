
<head>
  <!--styles-->
  <link href="/css/index.css" rel="stylesheet">
</head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<title>Create New Investigation</title>
<!------ Include the above in your HEAD tag ---------->
<head>
    <!--styles-->
    <link href="/css/main.css" rel="stylesheet">
  </head>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<body class="home">
  
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a hef="home.html"><img src="http://jskrishna.com/work/merkury/images/logo.png" alt="merkery_logo" class="hidden-xs hidden-sm">
                        <img src="http://jskrishna.com/work/merkury/images/circle-logo.png" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                        <li><a href="/investigations"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">investigations</span></a></li>
                        <li><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Upload Result</span></a></li>
                        <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Calender</span></a></li>
                        <li><a href="/appointments"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">appointments</span></a></li>
                        <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Logout</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                <div class="row">
                    <header>
                        <div class="col-md-7">
                            <nav class="navbar-default pull-left">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                            </nav>
                            <h1>Create New Investigation</h1>
<br>
<body>
  <div class="container">
    <form method="POST" action="/investigations/store">
      @csrf 
      <div class="row">
      <div class="form-group">
      
          <label>Investigation Name</label>
          <input type="text" class="form-control is-invalid" id="name" name="name" placeholder="insert name" required>
        </div>
        
        <div class="form-group">
          <label>investigation instructions</label>
          <input type="text" class="form-control is-invalid" id="instructions" name="instructions" placeholder="insertinstructions" required>
      </div>
      <div class="form-group">
        <label>Price</label>
          <input type="text" class="form-control is-invalid" id="price" name="price" placeholder="insert price" required>
        </div>
    </div>
    <div class="row">
      <div class="form-group">
        <label>Investigation Details</label>
        <textarea type="text" class="form-control is-invalid" name="details" id="details"  placeholder="insert details" rows="4" required></textarea>
      </div>
      <div class="form-group">
        <label>expected time for investigation</label>
        <input type="text" class="form-control is-invalid" id="expected_time_for_test" name="expected_time_for_test" placeholder="insert expected time" required>
      </div>
      <div class="form-group">
        <label>status</label>
        <input type="text" class="form-control is-invalid" id="status" name="status" placeholder="insert status" required>
      </div>
  </div>
  <div class="form-group">
    <label>choose if can teken form home:</label>
  <div class="form-check">
  <input class="form-check-input" value="1" type="radio" name="can_taken" id="can_taken1">
  <label class="form-check-label" for="can_taken1">
    Yes
  </label>
  </div>
  <div class="form-check">
  <input class="form-check-input" value="0" type="radio" name="can_taken" id="can_taken2" checked>
  <label class="form-check-label" for="can_taken2">
    No
  </label>
  </div>
  </div>
  <button type="submit" class="save-btn">Save</button>
  </form>
  </div>
  </body>            
   </div>
   </header>
   </div>
   </div>
   </div>    
    </div>
  </body>