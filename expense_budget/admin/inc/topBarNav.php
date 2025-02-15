<style>
/* General Reset */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Navbar Styling */
.main-header {
  background: linear-gradient(135deg,rgb(230, 116, 87),rgb(244, 88, 61)); /* Orange to Peach */
  color: #fff;
  border-bottom: 2px solid #ff6f61; /* Coral Border */
  padding: 0.5rem 1rem;
  box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.25);
  transition: all 0.3s ease-in-out;
}

.main-header .nav-link {
  color: #ffe3e3; /* Soft Pink */
  font-size: 1rem;
  font-weight: bold;
  text-transform: uppercase;
  transition: color 0.3s ease-in-out, transform 0.2s ease-in-out;
}

.main-header .nav-link:hover {
  color: #ffd700; /* Vibrant Gold */
  transform: scale(1.1);
}

/* Navbar Brand */
.main-header .navbar-nav .nav-item .nav-link {
  font-size: 1.1rem;
  font-weight: bold;
  letter-spacing: 0.5px;
  color: #ffdd57; /* Neon Yellow Text */
}

/* Buttons */
.btn-rounded {
  border-radius: 25px;
  padding: 0.5rem 1.2rem;
  font-size: 0.95rem;
  font-weight: bold;
  background: linear-gradient(135deg, #fc466b, #3f5efb); /* Pink to Purple */
  color: #fff;
  border: none;
  transition: background 0.3s ease-in-out, transform 0.2s ease-in-out;
  box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
}

.btn-rounded:hover {
  background: linear-gradient(135deg, #f79d00, #64f38c); /* Orange to Green */
  transform: scale(1.1);
}

/* User Dropdown */
.user-img {
  position: absolute;
  height: 40px;
  width: 40px;
  object-fit: cover;
  border-radius: 50%;
  border: 2px solid #ffdd57; /* Neon Yellow Border */
  left: -10%;
  top: -15%;
}

.dropdown-menu {
  background: linear-gradient(135deg, #ff6f61, #ff7e5f); /* Coral to Orange */
  border: none;
  border-radius: 12px;
  box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.3);
}

.dropdown-menu a {
  color: #ffe3e3; /* Soft Pink */
  padding: 0.6rem 1.2rem;
  font-size: 1rem;
  font-weight: bold;
  transition: background 0.3s ease-in-out, color 0.3s ease-in-out;
}

.dropdown-menu a:hover {
  background: linear-gradient(135deg, #ff7e5f, #feb47b); /* Orange to Peach */
  color: #fff;
}

/* Icons */
.fa-bars,
.fa-user,
.fa-sign-out-alt {
  color: #ffe3e3; /* Soft Pink */
  transition: color 0.3s ease-in-out;
}

.fa-bars:hover,
.fa-user:hover,
.fa-sign-out-alt:hover {
  color: #ffd700; /* Vibrant Gold */
}

/* Hover Effects */
.main-header .nav-item:hover {
  background: rgba(255, 255, 255, 0.15);
  border-radius: 8px;
}

/* Responsive Design */
@media (max-width: 768px) {
  .main-header {
    padding: 0.5rem;
  }

  .main-header .navbar-nav .nav-item .nav-link {
    font-size: 0.9rem;
  }

  .btn-rounded {
    font-size: 0.85rem;
  }

  .user-img {
    height: 30px;
    width: 30px;
  }
}
</style>

<!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-dark bg-navy shadow border border-light border-top-0  border-left-0 border-right-0 text-sm">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="<?php echo base_url ?>" class="nav-link"><?php echo (!isMobileDevice()) ? $_settings->info('name'):$_settings->info('short_name'); ?> - DK</a>
          </li>
        </ul>
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <!-- Navbar Search -->
          <!-- <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
              <form class="form-inline">
                <div class="input-group input-group-sm">
                  <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                    </button>
                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </li> -->
          <!-- Messages Dropdown Menu -->
          <li class="nav-item">
            <div class="btn-group nav-link">
                  <button type="button" class="btn btn-rounded badge badge-light dropdown-toggle dropdown-icon" data-toggle="dropdown">
                    <span><img src="<?php echo validate_image($_settings->userdata('avatar')) ?>" class="img-circle elevation-2 user-img" alt="User Image"></span>
                    <span class="ml-3"><?php echo ucwords($_settings->userdata('firstname').' '.$_settings->userdata('lastname')) ?></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu" role="menu">
                    <a class="dropdown-item" href="<?php echo base_url.'admin/?page=user' ?>"><span class="fa fa-user"></span> My Account</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo base_url.'/classes/Login.php?f=logout' ?>"><span class="fas fa-sign-out-alt"></span> Logout</a>
                  </div>
              </div>
          </li>
          <li class="nav-item">
            
          </li>
         <!--  <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- /.navbar -->