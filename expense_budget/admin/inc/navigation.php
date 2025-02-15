<style>
  /* General Reset */
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    font-family: 'Poppins', sans-serif;
    background-color: #f5f5f5;
    color: #2d2d2d;
    margin: 0;
    padding: 0;
  }

  /* Sidebar Styling */
  .main-sidebar {
    background: linear-gradient(135deg, #6a0572, #9a067a); /* Purple Gradient */
    color: #fff;
  }

  .main-sidebar a {
    color: #f9f9f9 !important;
    transition: all 0.3s ease-in-out;
  }

  .main-sidebar a:hover {
    color: #ffdd57 !important; /* Neon Yellow */
    text-decoration: none;
    transform: scale(1.05);
  }

  .brand-link {
    background: linear-gradient(90deg, #9a067a, #ff6f61); /* Pink to Coral */
    color: #fff !important;
    text-transform: uppercase;
    font-weight: bold;
    font-size: 1rem;
  }

  .brand-link:hover {
    background: linear-gradient(90deg, #ff6f61, #f72585); /* Coral to Deep Pink */
  }

  .brand-link .brand-image {
    border: 2px solid #ffdd57; /* Neon Yellow Border */
  }

  /* Nav Menu */
  .nav-sidebar .nav-link {
    border-radius: 25px;
    margin: 5px 0;
    background: rgba(255, 255, 255, 0.1);
    transition: background 0.3s, transform 0.2s;
  }

  .nav-sidebar .nav-link:hover {
    background: rgba(255, 255, 255, 0.2);
    transform: translateX(5px);
  }

  .nav-sidebar .nav-icon {
    color: #ffdd57; /* Neon Yellow Icons */
  }

  .nav-sidebar .nav-header {
    color: #f5f5f5;
    text-transform: uppercase;
    font-size: 0.9rem;
    margin: 15px 0;
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    padding-bottom: 5px;
  }

  .nav-sidebar .nav-link.active {
    background: linear-gradient(135deg, #ff6f61, #f72585); /* Coral to Deep Pink */
    color: #fff !important;
    font-weight: bold;
    transform: scale(1.05);
  }

  .nav-sidebar .nav-link.active .nav-icon {
    color: #ffdd57; /* Highlight Icons in Neon Yellow */
  }

  /* Scrollbar Customization */
  .os-scrollbar {
    background: #2d2d2d;
  }

  .os-scrollbar .os-scrollbar-handle {
    background: #ff6f61; /* Coral Scrollbar */
    border-radius: 5px;
  }

  /* Sidebar Menu Hover */
  .sidebar .os-padding:hover {
    background: linear-gradient(135deg, #6a0572, #9a067a);
  }

  /* Content Area (Optional for Integration) */
  .content-wrapper {
    background-color: #ffffff; /* Clean White Background */
    color: #333;
    padding: 20px;
  }

  .content-wrapper h1, .content-wrapper h2, .content-wrapper h3 {
    color: #6a0572; /* Purple Highlights */
  }

  /* Buttons */
  button {
    padding: 10px 15px;
    border: none;
    border-radius: 25px;
    font-size: 0.9rem;
    font-weight: bold;
    cursor: pointer;
    background: linear-gradient(135deg, #9a067a, #ff6f61); /* Purple to Coral */
    color: #fff;
    transition: background 0.3s, transform 0.2s ease-in-out;
  }

  button:hover {
    background: linear-gradient(135deg, #ff6f61, #f72585); /* Coral to Pink */
    transform: scale(1.1);
  }

  /* Responsive Design */
  @media (max-width: 768px) {
    .main-sidebar {
      font-size: 0.9rem;
    }

    .brand-link {
      font-size: 0.85rem;
    }

    .nav-sidebar .nav-link {
      font-size: 0.85rem;
    }
  }
</style>

<!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-navy-primary bg-navy elevation-4 sidebar-no-expand">
        <!-- Brand Logo -->
        <a href="<?php echo base_url ?>admin" class="brand-link bg-primary text-sm">
        <img src="<?php echo validate_image($_settings->info('logo'))?>" alt="Store Logo" class="brand-image img-circle elevation-3 border-1" style="opacity: .8;width: 2.5rem;height: 2.5rem;max-height: unset">
        <span class="brand-text font-weight-light"><?php echo $_settings->info('short_name') ?></span>
        </a>
        <!-- Sidebar -->
        <div class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-transition os-host-scrollbar-horizontal-hidden">
          <div class="os-resize-observer-host observed">
            <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
          </div>
          <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
            <div class="os-resize-observer"></div>
          </div>
          <div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 646px;"></div>
          <div class="os-padding">
            <div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;">
              <div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
                <!-- Sidebar user panel (optional) -->
                <div class="clearfix"></div>
                <!-- Sidebar Menu -->
                <nav class="mt-4">
                   <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-compact nav-flat nav-child-indent nav-collapse-hide-child" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item dropdown">
                      <a href="./" class="nav-link nav-home">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                          Dashboard
                        </p>
                      </a>
                    </li> 
                    <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>admin/?page=budget" class="nav-link nav-budget">
                        <i class="nav-icon fas fa-wallet"></i>
                        <p>
                          Budget Management
                        </p>
                      </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>admin/?page=expense" class="nav-link nav-expense">
                        <i class="nav-icon fas fa-money-bill-wave"></i>
                        <p>
                          Expense Management
                        </p>
                      </a>
                    </li>
                    <li class="nav-header">Reports</li>
                    <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>admin/?page=reports/budget" class="nav-link nav-reports-budget">
                        <i class="nav-icon fas fa-file"></i>
                        <p>
                          Budget Report
                        </p>
                      </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>admin/?page=reports/expense" class="nav-link nav-reports-expense">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>
                          Expense Report
                        </p>
                      </a>
                    </li>
                    <li class="nav-header">Maintenance</li>
                    <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>admin/?page=maintenance/category" class="nav-link nav-maintenance/category">
                        <i class="nav-icon fas fa-th-list"></i>
                        <p>
                          Category List
                        </p>
                      </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>admin/?page=system_info" class="nav-link nav-system_info">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                          Settings
                        </p>
                      </a>
                    </li>
                  </ul>
                </nav>
                <!-- /.sidebar-menu -->
              </div>
            </div>
          </div>
          <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
            <div class="os-scrollbar-track">
              <div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div>
            </div>
          </div>
          <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden">
            <div class="os-scrollbar-track">
              <div class="os-scrollbar-handle" style="height: 55.017%; transform: translate(0px, 0px);"></div>
            </div>
          </div>
          <div class="os-scrollbar-corner"></div>
        </div>
        <!-- /.sidebar -->
      </aside>
      <script>
    $(document).ready(function(){
      var page = '<?php echo isset($_GET['page']) ? $_GET['page'] : 'home' ?>';
      var s = '<?php echo isset($_GET['s']) ? $_GET['s'] : '' ?>';
      page = page.split('/');
      page = page[0];
      if(s!='')
        page = page+'_'+s;

      if($('.nav-link.nav-'+page).length > 0){
             $('.nav-link.nav-'+page).addClass('active')
        if($('.nav-link.nav-'+page).hasClass('tree-item') == true){
            $('.nav-link.nav-'+page).closest('.nav-treeview').siblings('a').addClass('active')
          $('.nav-link.nav-'+page).closest('.nav-treeview').parent().addClass('menu-open')
        }
        if($('.nav-link.nav-'+page).hasClass('nav-is-tree') == true){
          $('.nav-link.nav-'+page).parent().addClass('menu-open')
        }

      }
     
    })
  </script>