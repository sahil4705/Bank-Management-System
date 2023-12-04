<?php
session_start();
if(!isset($_SESSION['suser'])){
  header("Location:../index.php");
}?>

 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Staff Dashboard</title>
    

    

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
     
    </style>


    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">ABCBANK</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <h1 class="form-control form-control-dark w-100 rounded-0 border-0" >Welcome Admin</h1>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="userlogout.php">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active"  aria-current="page" href="staffactionhome.php">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="account_list.php">
              <span data-feather="file" class="align-text-bottom"></span>
              All Account Holder's List
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="deposit.php">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              Deposit Money Into Customer Account
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="withdraw.php">
              <span data-feather="users" class="align-text-bottom"></span>
              Withdraw Money From Customer Account
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="updateinfo.php">
              <span data-feather="bar-chart-2" class="align-text-bottom"></span>
              Update an Account Information
            </a>
    </li>
	       <li class="nav-item">
            <a class="nav-link" href="account_approve.php">
              <span data-feather="layers" class="align-text-bottom"></span>
              Approve Pending Account
            </a>
          </li>
	  <li class="nav-item">
            <a class="nav-link" href="staff_add.php">
              <span data-feather="layers" class="align-text-bottom"></span>
              Add New Staff Member
            </a>
          </li>
	  <li class="nav-item">
            <a class="nav-link" href="useradd.php">
              <span data-feather="layers" class="align-text-bottom"></span>
              Add New Use
            </a>
          </li>
	  <li class="nav-item">
            <a class="nav-link" href="staffpassword_change.php">
              <span data-feather="layers" class="align-text-bottom"></span>
              Change Password
            </a>
          </li>
	  <li class="nav-item">
            <a class="nav-link" href="userrequests.php">
              <span data-feather="layers" class="align-text-bottom"></span>
              User Requests 
            </a>
            <li class="nav-item">
            <a class="nav-link" href="account_close.php>
              <span data-feather="layers" class="align-text-bottom"></span>
              Close an Account
            </a>
          </li>
          </li>
        </ul>

        
      </div>
    </nav>
    </div>
    </div>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
</body>
</html>