
    <!-- Brand Logo -->
    <a href="?page=Dashboard" class="brand-link">
      <img src="imgUser/<?= $dataUser['foto'] ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><?= $dataUser['nrn_user'] ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/img/hotel.jpg" class="w-100 rounded" alt="User Image">
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Dadus Input
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?page=nasaun" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dadus Nasaun</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?page=munisipiu" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dadus Munisipiu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?page=postu" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dadus Postu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?page=suku" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dadus Suku</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?page=aldeia" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dadus Aldeia</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?page=kuartu" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dadus Kuartu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?page=user" class="nav-link">
                  <i class="far fa-user"></i>
                  <p>Dadus Users</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Dadus Proses
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?page=kliente" class="nav-link">
                  <i class="far fa-user"></i>
                  <p>Dadus Kliente</p>
                </a>
              </li>
            </ul>
          </li>
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Dadus Output
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?page=relatorio" class="nav-link">
                  <i class="far fa-book"></i>
                  <p>Dadus Relatorio</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
                <a href="logs/logout.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->