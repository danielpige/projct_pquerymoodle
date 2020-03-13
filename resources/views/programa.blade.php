@extends('layouts.app')
@section('title', '| DashBoard')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">General por facultad</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Starter Page</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!--<h5 class="mt-4 mb-2">Info Box With <code>bg-gradient-*</code></h5>-->
    <div class="container">
      <div class="row" id="uno">
        <div class="col-md-3 col-sm-6 col-12">
          <a href="#">
            <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
              <div class="card-header">Header</div>
              <div class="card-body">
                <h5 class="card-title">Primary card title</h5>
                <div class="info-box-content">
                  <span class="info-box-text">Ingresos</span>
                  <span class="info-box-number"></span>

                  <div class="progress">
                    <div class="progress-bar" style="width: 15%" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <span class="progress-description">
                    15% de los cursos están activos
                  </span>
                </div>
              </div>
            </div>
          </a>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">
          <a href="#">
          <div class="info-box card bg-gradient-success" style="max-width: 18rem;">
            <span class="info-box-icon"><i class="far fa-eye"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Ingresos</span>
              <span class="info-box-number"></span>

              <div class="progress">
                <div class="progress-bar" style="width: 15%" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="progress-description">
                15% de los cursos están activos
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          </a>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">
          <a href="#">
          <div class="info-box bg-gradient-warning">
            <span class="info-box-icon"><i class="far fa-eye-slash"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">En linea</span>
              <span class="info-box-number">25</span>

              <div class="progress">
                <div class="progress-bar" style="width: 55%" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="progress-description">
                55% de los cursos están inactivos
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          </a>
          <!-- /.info-box -->
        </div>
        <div class="col-md-3 col-sm-6 col-12">
          <a href="#">
          <div class="info-box bg-gradient-danger">
            <span class="info-box-icon"><i class="far fa-eye-slash"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Porcentaje</span>
              <span class="info-box-number">15</span>

              <div class="progress">
                <div class="progress-bar" style="width: 55%" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="progress-description">
                25% de los cursos están inactivos
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          </a>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <div class="col-md-4">

        </div>
        <div class="col-md-4">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-4">

        </div>

      </div>
    </div>


      <h1 class="m-0 text-dark" id="geneest">General Estudiantes</h1>
      <div class="row" >
        <div class="col-md-3 col-sm-6 col-12">
          <a href="#">
          <div class="info-box bg-gradient-info">
            <span class="info-box-icon"><i class="fas fa-book"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Matriculados</span>
              <span class="info-box-number">15</span>

              <div class="progress">
                <div class="progress-bar" style="width: 100%" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="progress-description">
                70% Increase in 30 Days
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          </a>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">
          <a href="#">
          <div class="info-box bg-gradient-success">
            <span class="info-box-icon"><i class="far fa-eye"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Ingresos</span>
              <span class="info-box-number">99</span>

              <div class="progress">
                <div class="progress-bar" style="width: 99%" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="progress-description">
                99% de los cursos están activos
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          </a>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">
          <a href="#">
          <div class="info-box bg-gradient-warning">
            <span class="info-box-icon"><i class="far fa-eye-slash"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">En linea</span>
              <span class="info-box-number">55</span>

              <div class="progress">
                <div class="progress-bar" style="width: 55%" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="progress-description">
                55% de los cursos están inactivos
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          </a>
          <!-- /.info-box -->
        </div>
        <div class="col-md-3 col-sm-6 col-12">
          <a href="#">
          <div class="info-box bg-gradient-danger">
            <span class="info-box-icon"><i class="far fa-eye-slash"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Porcentaje</span>
              <span class="info-box-number">62</span>

              <div class="progress">
                <div class="progress-bar" style="width: 62%" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="progress-description">
                62% de los cursos están inactivos
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          </a>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <div class="col-md-4">

        </div>
        <div class="col-md-4">

          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>

        </div>
        <div class="col-md-4">

        </div>

      </div>



      <h1 class="m-0 text-dark">Estudiantes Pregrado</h1>
      <div class="row" id="dos">
        <div class="col-md-3 col-sm-6 col-12">
          <a href="#">
          <div class="info-box bg-gradient-info">
            <span class="info-box-icon"><i class="fas fa-book"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Matriculados</span>
              <span class="info-box-number">70</span>

              <div class="progress">
                <div class="progress-bar" style="width: 100%" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="progress-description">
                70% Increase in 30 Days
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          </a>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">
          <a href="#">
          <div class="info-box bg-gradient-success">
            <span class="info-box-icon"><i class="far fa-eye"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Ingresos</span>
              <span class="info-box-number">72</span>

              <div class="progress">
                <div class="progress-bar" style="width: 72%" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="progress-description">
                72% de los cursos están activos
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          </a>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">
          <a href="#">
          <div class="info-box bg-gradient-warning">
            <span class="info-box-icon"><i class="far fa-eye-slash"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">En linea</span>
              <span class="info-box-number">40</span>

              <div class="progress">
                <div class="progress-bar" style="width: 40%" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="progress-description">
                40% de los cursos están inactivos
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          </a>
          <!-- /.info-box -->
        </div>
        <div class="col-md-3 col-sm-6 col-12">
          <a href="#">
          <div class="info-box bg-gradient-danger">
            <span class="info-box-icon"><i class="far fa-eye-slash"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Porcentaje</span>
              <span class="info-box-number">88</span>

              <div class="progress">
                <div class="progress-bar" style="width: 88%" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="progress-description">
                88% de los cursos están inactivos
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          </a>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <div class="col-md-4">

        </div>
        <div class="col-md-4">

          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>

        </div>
        <div class="col-md-4">

        </div>

      </div>
<!-- /.content-wrapper -->
<h1 class="m-0 text-dark"> Estudiantes Posgrado</h1>
<div class="row" id="tres">
  <div class="col-md-3 col-sm-6 col-12">
    <a href="#">
    <div class="info-box bg-gradient-info">
      <span class="info-box-icon"><i class="fas fa-book"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Matriculados</span>
        <span class="info-box-number">55</span>

        <div class="progress">
          <div class="progress-bar" style="width: 100%" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <span class="progress-description">
          70% Increase in 30 Days
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    </a>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-md-3 col-sm-6 col-12">
    <a href="#">
    <div class="info-box bg-gradient-success">
      <span class="info-box-icon"><i class="far fa-eye"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Ingresos</span>
        <span class="info-box-number">55</span>

        <div class="progress">
          <div class="progress-bar" style="width: 55%" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <span class="progress-description">
          55% de los cursos están activos
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    </a>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-md-3 col-sm-6 col-12">
    <a href="#">
    <div class="info-box bg-gradient-warning">
      <span class="info-box-icon"><i class="far fa-eye-slash"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">En linea</span>
        <span class="info-box-number">40</span>

        <div class="progress">
          <div class="progress-bar" style="width: 40%" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <span class="progress-description">
          40% de los cursos están inactivos
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    </a>
    <!-- /.info-box -->
  </div>
  <div class="col-md-3 col-sm-6 col-12">
    <a href="#">
    <div class="info-box bg-gradient-danger">
      <span class="info-box-icon"><i class="far fa-eye-slash"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Porcentaje</span>
        <span class="info-box-number">55</span>

        <div class="progress">
          <div class="progress-bar" style="width: 55%" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <span class="progress-description">
          55% de los cursos están inactivos
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    </a>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->

  <div class="col-md-4">

  </div>
  <div class="col-md-4">

    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>

  </div>
  <div class="col-md-4">

  </div>

</div>

<h1 class="m-0 text-dark">Docentes General</h1>
<div class="row" id="genedoc">
  <div class="col-md-3 col-sm-6 col-12">
    <a href="#">
    <div class="info-box bg-gradient-info">
      <span class="info-box-icon"><i class="fas fa-book"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Matriculados</span>
        <span class="info-box-number">55</span>

        <div class="progress">
          <div class="progress-bar" style="width: 100%" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <span class="progress-description">
          70% Increase in 30 Days
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    </a>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-md-3 col-sm-6 col-12">
    <a href="#">
    <div class="info-box bg-gradient-success">
      <span class="info-box-icon"><i class="far fa-eye"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Ingresos</span>
        <span class="info-box-number">37</span>

        <div class="progress">
          <div class="progress-bar" style="width: 37%" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <span class="progress-description">
          37% de los cursos están activos
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    </a>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-md-3 col-sm-6 col-12">
    <a href="#">
    <div class="info-box bg-gradient-warning">
      <span class="info-box-icon"><i class="far fa-eye-slash"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">En linea</span>
        <span class="info-box-number">84</span>

        <div class="progress">
          <div class="progress-bar" style="width: 84%" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <span class="progress-description">
          8416% de los cursos están inactivos
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    </a>
    <!-- /.info-box -->
  </div>
  <div class="col-md-3 col-sm-6 col-12">
    <a href="#">
    <div class="info-box bg-gradient-danger">
      <span class="info-box-icon"><i class="far fa-eye-slash"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Porcentaje</span>
        <span class="info-box-number">16</span>

        <div class="progress">
          <div class="progress-bar" style="width: 16%" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <span class="progress-description">
          16% de los cursos están inactivos
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    </a>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->

  <div class="col-md-4">

  </div>
  <div class="col-md-4">

    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>

  </div>
  <div class="col-md-4">

  </div>

</div>

<h1 class="m-0 text-dark" id='docpre'>Docentes Pregrado</h1>
<div class="row" >
  <div class="col-md-3 col-sm-6 col-12">
    <a href="#">
    <div class="info-box bg-gradient-info">
      <span class="info-box-icon"><i class="fas fa-book"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Matriculados</span>
        <span class="info-box-number">5</span>

        <div class="progress">
          <div class="progress-bar" style="width: 100%" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <span class="progress-description">
          70% Increase in 30 Days
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    </a>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-md-3 col-sm-6 col-12">
    <a href="#">
    <div class="info-box bg-gradient-success">
      <span class="info-box-icon"><i class="far fa-eye"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Ingresos</span>
        <span class="info-box-number">55</span>

        <div class="progress">
          <div class="progress-bar" style="width: 55%" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <span class="progress-description">
          55% de los cursos están activos
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    </a>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-md-3 col-sm-6 col-12">
    <a href="#">
    <div class="info-box bg-gradient-warning">
      <span class="info-box-icon"><i class="far fa-eye-slash"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">En linea</span>
        <span class="info-box-number">81</span>

        <div class="progress">
          <div class="progress-bar" style="width: 81%" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <span class="progress-description">
          81% de los cursos están inactivos
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    </a>
    <!-- /.info-box -->
  </div>
  <div class="col-md-3 col-sm-6 col-12">
    <a href="#">
    <div class="info-box bg-gradient-danger">
      <span class="info-box-icon"><i class="far fa-eye-slash"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Porcentaje</span>
        <span class="info-box-number">68</span>

        <div class="progress">
          <div class="progress-bar" style="width: 68%" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <span class="progress-description">
          68% de los cursos están inactivos
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    </a>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->

  <div class="col-md-4">

  </div>
  <div class="col-md-4">

    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>

  </div>
  <div class="col-md-4">

  </div>

</div>

<h1 class="m-0 text-dark">Docentes Posgrado</h1>
<div class="row" id="dos">
  <div class="col-md-3 col-sm-6 col-12">
    <a href="#">
    <div class="info-box bg-gradient-info">
      <span class="info-box-icon"><i class="fas fa-book"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Matriculados</span>
        <span class="info-box-number">78</span>

        <div class="progress">
          <div class="progress-bar" style="width: 100%" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <span class="progress-description">
          70% Increase in 30 Days
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    </a>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-md-3 col-sm-6 col-12">
    <a href="#">
    <div class="info-box bg-gradient-success">
      <span class="info-box-icon"><i class="far fa-eye"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Ingresos</span>
        <span class="info-box-number">33</span>

        <div class="progress">
          <div class="progress-bar" style="width: 33%" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <span class="progress-description">
          33% de los cursos están activos
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    </a>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-md-3 col-sm-6 col-12">
    <a href="#">
    <div class="info-box bg-gradient-warning">
      <span class="info-box-icon"><i class="far fa-eye-slash"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">En linea</span>
        <span class="info-box-number">39</span>

        <div class="progress">
          <div class="progress-bar" style="width: 39%" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <span class="progress-description">
          39% de los cursos están inactivos
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    </a>
    <!-- /.info-box -->
  </div>
  <div class="col-md-3 col-sm-6 col-12">
    <a href="#">
    <div class="info-box bg-gradient-danger">
      <span class="info-box-icon"><i class="far fa-eye-slash"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Porcentaje</span>
        <span class="info-box-number">46</span>

        <div class="progress">
          <div class="progress-bar" style="width: 46%" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <span class="progress-description">
          46% de los cursos están inactivos
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    </a>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->

  <div class="col-md-4">

  </div>
  <div class="col-md-4">

    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>

  </div>
  <div class="col-md-4">

  </div>

</div>



<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
  <div class="p-3">
    <h5>Title</h5>
    <p>Sidebar content</p>
  </div>
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<footer class="main-footer">
  <!-- To the right -->
  <div class="float-right d-none d-sm-inline">
    Anything you want
  </div>
  <!-- Default to the left -->
  <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
</footer>
</div>

@endsection
