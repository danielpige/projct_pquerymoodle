<div class="row" id="uno">
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
    {!! $chart->container() !!}
  </div>
  <div class="col-md-4">

  </div>

</div>
