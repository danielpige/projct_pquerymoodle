<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="adminlte/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">PQueryMoodle</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="adminlte/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->firstname }}</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Starter Page
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Active Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inactive Page</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa fa-area-chart"></i>
              <p>
                Plataforma
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="fas fa-book"></i>
                  <p>
                    Facultad
                    <i class="right fas fa-angle-left"></i>
                    <span class="badge badge-info right"></span>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#uno" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>General</p>
                    </a>
                  </li>
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Estudiante
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="#geneest" class="nav-link">
                          <i class="far fa-dot-circle nav-icon"></i>
                          <p>General</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#dos" class="nav-link">
                          <i class="far fa-dot-circle nav-icon"></i>
                          <p>Pregrado</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#tres" class="nav-link">
                          <i class="far fa-dot-circle nav-icon"></i>
                          <p>Postgrado</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        docente
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="#genedoc" class="nav-link">
                          <i class="far fa-dot-circle nav-icon"></i>
                          <p>General</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#docpre" class="nav-link">
                          <i class="far fa-dot-circle nav-icon"></i>
                          <p>Pregrado</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#docpos" class="nav-link">
                          <i class="far fa-dot-circle nav-icon"></i>
                          <p>Postgrado</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="fas fa-book"></i>
                  <p>
                    Programa
                    <i class="right fas fa-angle-left"></i>
                    <span class="badge badge-info right"></span>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="/programa#uno" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>General</p>
                    </a>
                  </li>
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Estudiante
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="#geneest" class="nav-link">
                          <i class="far fa-dot-circle nav-icon"></i>
                          <p>General</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#dos" class="nav-link">
                          <i class="far fa-dot-circle nav-icon"></i>
                          <p>Pregrado</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#tres" class="nav-link">
                          <i class="far fa-dot-circle nav-icon"></i>
                          <p>Postgrado</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        docente
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="#genedoc" class="nav-link">
                          <i class="far fa-dot-circle nav-icon"></i>
                          <p>General</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="far fa-dot-circle nav-icon"></i>
                          <p>Pregrado</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="far fa-dot-circle nav-icon"></i>
                          <p>Postgrado</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="fas fa-book"></i>
                  <p>
                    Docente
                    <i class="right fas fa-angle-left"></i>
                    <span class="badge badge-info right"></span>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Estados</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Estructuras</p>
                    </a>
                  </li>
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Level 2
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="far fa-dot-circle nav-icon"></i>
                          <p>Level 3</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="far fa-dot-circle nav-icon"></i>
                          <p>Level 3</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="far fa-dot-circle nav-icon"></i>
                          <p>Level 3</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
