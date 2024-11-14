<?php
include 'connexion.php';
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <title>Dashboard | By Code Info</title>
      <link rel="stylesheet" href="styles.css" />
      <link rel="stylesheet" href="styles1.css">
      <link rel="shortcut icon" type="x-icon" href="logo_esb.svg">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    </head>
    <body>
      <div class="container">
        <nav>
          <ul>
            <li><a href="#" class="logo">
              <img src="logo_esb.svg" alt="logo">
              <span class="nav-item">Admin</span>
            </a></li>
            <li><a href="admin.php">
              <i class="fas fa-home"></i>
              <span class="nav-item">Home</span>
            </a></li>
            <li><a href="">
              <i class="fas fa-user"></i>
              <span class="nav-item">Profile</span>
            </a></li>
            <li><a href="">
              <i class="fas fa-tasks"></i>
              <span class="nav-item">Tasks</span>
            </a></li>
            <li><a href="insert.html">
              <i class="fas fa-sign-out-alt"></i>
              <span class="nav-item">Add student</span>
            </a></li>
            <li><a href="insertp.html">
              <i class="fas fa-sign-out-alt"></i>
              <span class="nav-item">Add Prof</span>
            </a></li>
            <li><a href="">
              <i class="fas fa-cog"></i>
              <span class="nav-item">Settings</span>
            </a></li>
            <li><a href="admin.html" class="logout">
              <i class="fas fa-sign-out-alt"></i>
              <span class="nav-item">Log out</span>
            </a></li>
          </ul>
        </nav>
    
        <div id="content">
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Dashboard</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li><i class='bx bx-chevron-right' ></i></li>
                </ul>
            </div>
        </div>

        <ul class="box-info">
            <li>
                <i class='bx bxs-calendar-check' ></i>
                <span class="text">
                    <h3>50</h3>
                    <p>Numbre of professors</p>
                </span>
            </li>
            <li>
                <i class='bx bxs-group' ></i>
                <span class="text">
                    <h3>2834</h3>
                    <p>Number of students</p>
                </span>
            </li>
        </ul>
    </main>
</div>
    </body>
    </html>