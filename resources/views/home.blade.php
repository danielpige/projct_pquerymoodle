@extends('layouts.app')
@section('title', '| DashBoard')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
          <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0 text-dark">Facultad</h1>
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

      <div class="row" id="uno">
        <div class="col-md-2">

        </div>
        <div class="col-md-2 col-sm-6 col-12">
          <a href="#">
          <div class="info-box bg-gradient-info">
            <span class="info-box-icon"><i class="fas fa-book"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Matriculados</span>
              <span class="info-box-number">{{ $cursos }}</span>

              <div class="progress">
                <div class="progress-bar" style="width: 10%" aria-valuemin="0" aria-valuemax="100"></div>
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
        <div class="col-md-2 col-sm-6 col-12">
          <a href="#">
          <div class="info-box bg-gradient-info">
            <span class="info-box-icon"><i class="fas fa-book"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Matriculados</span>
              <span class="info-box-number">{{ $cursos }}</span>

              <div class="progress">
                <div class="progress-bar" style="width: 10%" aria-valuemin="0" aria-valuemax="100"></div>
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
        <div class="col-md-2 col-sm-6 col-12">
          <a href="#">
          <div class="info-box bg-gradient-info">
            <span class="info-box-icon"><i class="fas fa-book"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Matriculados</span>
              <span class="info-box-number">{{ $cursos }}</span>

              <div class="progress">
                <div class="progress-bar" style="width: 10%" aria-valuemin="0" aria-valuemax="100"></div>
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
        <div class="col-md-2 col-sm-6 col-12">
          <a href="#">
          <div class="info-box bg-gradient-info">
            <span class="info-box-icon"><i class="fas fa-book"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Matriculados</span>
              <span class="info-box-number">{{ $cursos }}</span>

              <div class="progress">
                <div class="progress-bar" style="width: 10%" aria-valuemin="0" aria-valuemax="100"></div>
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
        <div class="col-md-2">

        </div>
        <!-- /.col -->
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
          {!! $chart->container() !!}
        </div>
        <div class="col-md-4">
        </div>
      </div>

      <h1 class="m-0 text-dark">General Estudiantes</h1>
      <div class="row" id="geneest">
        <div class="col-md-2">

        </div>
        <div class="col-md-2 col-sm-6 col-12">
          <a href="#">
          <div class="info-box bg-gradient-info">
            <span class="info-box-icon"><i class="fas fa-book"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Matriculados</span>
              <span class="info-box-number">{{ $cursos }}</span>

              <div class="progress">
                <div class="progress-bar" style="width: 10%" aria-valuemin="0" aria-valuemax="100"></div>
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
        <div class="col-md-2 col-sm-6 col-12">
          <a href="#">
          <div class="info-box bg-gradient-info">
            <span class="info-box-icon"><i class="fas fa-book"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Matriculados</span>
              <span class="info-box-number">{{ $cursos }}</span>

              <div class="progress">
                <div class="progress-bar" style="width: 10%" aria-valuemin="0" aria-valuemax="100"></div>
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
        <div class="col-md-2 col-sm-6 col-12">
          <a href="#">
          <div class="info-box bg-gradient-info">
            <span class="info-box-icon"><i class="fas fa-book"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Matriculados</span>
              <span class="info-box-number">{{ $cursos }}</span>

              <div class="progress">
                <div class="progress-bar" style="width: 10%" aria-valuemin="0" aria-valuemax="100"></div>
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
        <div class="col-md-2 col-sm-6 col-12">
          <a href="#">
          <div class="info-box bg-gradient-info">
            <span class="info-box-icon"><i class="fas fa-book"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Matriculados</span>
              <span class="info-box-number">{{ $cursos }}</span>

              <div class="progress">
                <div class="progress-bar" style="width: 10%" aria-valuemin="0" aria-valuemax="100"></div>
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
        <div class="col-md-2">

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
        <div class="col-md-2">

        </div>
        <div class="col-md-2 col-sm-6 col-12">
          <a href="#">
          <div class="info-box bg-gradient-info">
            <span class="info-box-icon"><i class="fas fa-book"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Matriculados</span>
              <span class="info-box-number">{{ $cursos }}</span>

              <div class="progress">
                <div class="progress-bar" style="width: 10%" aria-valuemin="0" aria-valuemax="100"></div>
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
        <div class="col-md-2 col-sm-6 col-12">
          <a href="#">
          <div class="info-box bg-gradient-info">
            <span class="info-box-icon"><i class="fas fa-book"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Matriculados</span>
              <span class="info-box-number">{{ $cursos }}</span>

              <div class="progress">
                <div class="progress-bar" style="width: 10%" aria-valuemin="0" aria-valuemax="100"></div>
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
        <div class="col-md-2 col-sm-6 col-12">
          <a href="#">
          <div class="info-box bg-gradient-info">
            <span class="info-box-icon"><i class="fas fa-book"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Matriculados</span>
              <span class="info-box-number">{{ $cursos }}</span>

              <div class="progress">
                <div class="progress-bar" style="width: 10%" aria-valuemin="0" aria-valuemax="100"></div>
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
        <div class="col-md-2 col-sm-6 col-12">
          <a href="#">
          <div class="info-box bg-gradient-info">
            <span class="info-box-icon"><i class="fas fa-book"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Matriculados</span>
              <span class="info-box-number">{{ $cursos }}</span>

              <div class="progress">
                <div class="progress-bar" style="width: 10%" aria-valuemin="0" aria-valuemax="100"></div>
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
        <div class="col-md-2">

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
        <span class="info-box-number">{{ $cursos }}</span>

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
        <span class="info-box-number">{{ $cursosact }}</span>

        <div class="progress">
          <div class="progress-bar" style="width: {{ $porcursosact }}%" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <span class="progress-description">
          {{ $porcursosact }}% de los cursos están activos
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
        <span class="info-box-number">{{ $cursosinact }}</span>

        <div class="progress">
          <div class="progress-bar" style="width: {{ $porcursosinact }}%" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <span class="progress-description">
          {{ $porcursosinact }}% de los cursos están inactivos
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
        <span class="info-box-number">{{ $cursosinact }}</span>

        <div class="progress">
          <div class="progress-bar" style="width: {{ $porcursosinact }}%" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <span class="progress-description">
          {{ $porcursosinact }}% de los cursos están inactivos
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
        <span class="info-box-number">{{ $cursos }}</span>

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
        <span class="info-box-number">{{ $cursosact }}</span>

        <div class="progress">
          <div class="progress-bar" style="width: {{ $porcursosact }}%" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <span class="progress-description">
          {{ $porcursosact }}% de los cursos están activos
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
        <span class="info-box-number">{{ $cursosinact }}</span>

        <div class="progress">
          <div class="progress-bar" style="width: {{ $porcursosinact }}%" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <span class="progress-description">
          {{ $porcursosinact }}% de los cursos están inactivos
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
        <span class="info-box-number">{{ $cursosinact }}</span>

        <div class="progress">
          <div class="progress-bar" style="width: {{ $porcursosinact }}%" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <span class="progress-description">
          {{ $porcursosinact }}% de los cursos están inactivos
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

<h1 class="m-0 text-dark">Docentes Pregrado</h1>
<div class="row" id="docpre">
  <div class="col-md-3 col-sm-6 col-12">
    <a href="#">
    <div class="info-box bg-gradient-info">
      <span class="info-box-icon"><i class="fas fa-book"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Matriculados</span>
        <span class="info-box-number">{{ $cursos }}</span>

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
        <span class="info-box-number">{{ $cursosact }}</span>

        <div class="progress">
          <div class="progress-bar" style="width: {{ $porcursosact }}%" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <span class="progress-description">
          {{ $porcursosact }}% de los cursos están activos
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
        <span class="info-box-number">{{ $cursosinact }}</span>

        <div class="progress">
          <div class="progress-bar" style="width: {{ $porcursosinact }}%" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <span class="progress-description">
          {{ $porcursosinact }}% de los cursos están inactivos
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
        <span class="info-box-number">{{ $cursosinact }}</span>

        <div class="progress">
          <div class="progress-bar" style="width: {{ $porcursosinact }}%" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <span class="progress-description">
          {{ $porcursosinact }}% de los cursos están inactivos
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
<div class="row" id="docpos">
  <div class="col-md-3 col-sm-6 col-12">
    <a href="#">
    <div class="info-box bg-gradient-info">
      <span class="info-box-icon"><i class="fas fa-book"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Matriculados</span>
        <span class="info-box-number">{{ $cursos }}</span>

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
        <span class="info-box-number">{{ $cursosact }}</span>

        <div class="progress">
          <div class="progress-bar" style="width: {{ $porcursosact }}%" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <span class="progress-description">
          {{ $porcursosact }}% de los cursos están activos
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
        <span class="info-box-number">{{ $cursosinact }}</span>

        <div class="progress">
          <div class="progress-bar" style="width: {{ $porcursosinact }}%" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <span class="progress-description">
          {{ $porcursosinact }}% de los cursos están inactivos
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
        <span class="info-box-number">{{ $cursosinact }}</span>

        <div class="progress">
          <div class="progress-bar" style="width: {{ $porcursosinact }}%" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <span class="progress-description">
          {{ $porcursosinact }}% de los cursos están inactivos
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

{!! $chart->script() !!}
@endsection
