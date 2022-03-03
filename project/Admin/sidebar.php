<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="javascript:void(0)" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" id="sideMenu">
          <li class="nav-item">
            <a href="./index.php" class="nav-link <?= (basename($_SERVER['PHP_SELF']) === 'index.php')? 'active':null; ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item <?= (basename($_SERVER['PHP_SELF']) === 'allProduct.php' || basename($_SERVER['PHP_SELF']) === 'addProduct.php' || basename($_SERVER['PHP_SELF']) === 'addCat.php' || basename($_SERVER['PHP_SELF']) === 'allCat.php')? 'menu-open':null; ?>">
            <a href="" class="nav-link <?= (basename($_SERVER['PHP_SELF']) === 'allProduct.php' || basename($_SERVER['PHP_SELF']) === 'addProduct.php' || basename($_SERVER['PHP_SELF']) === 'addCat.php' || basename($_SERVER['PHP_SELF']) === 'allCat.php')? 'active':null; ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Products
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./addProduct.php" class="nav-link <?= (basename($_SERVER['PHP_SELF']) === 'addProduct.php')? 'active':null; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./allProduct.php" class="nav-link <?= (basename($_SERVER['PHP_SELF']) === 'allProduct.php')? 'active':null; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./addCat.php" class="nav-link <?= (basename($_SERVER['PHP_SELF']) === 'addCat.php')? 'active':null; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./allCat.php" class="nav-link <?= (basename($_SERVER['PHP_SELF']) === 'allCat.php')? 'active':null; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Category</p>
                </a>
              </li>
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>