<div class="app-content content container-fluid">
  <div class="sidebar-right sidebar-sticky">
    <div class="sidebar">
      <div class="pt-2 pr-2">
        <div class="sidebar-content p-1" data-spy="affix" data-offset-top="-77">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title">Consulting & Business Training</h6>
                </div>
                <div class="card-body collapse in" aria-expanded="true">
                    <div class="card-block">
                        <nav id="sidebar-page-navigation">
                            <ul id="page-navigation-list" class="nav">
                                <li class="nav-item"><a class="nav-link" href="#v10">V 1.0</a></li>
                            </ul>
                        </nav>
                    </div>
                    <h6 class="border-top-grey border-top-lighten-2 p-1 mt-1 mb-0">
                        <a class="nav-link display-block text-muted" href="#top">Back to top
                            <i class="float-xs-right icon-circle-up font-medium-3"></i>
                        </a>
                    </h6>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="content-left">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-xs-12 mb-1">
          <h2 class="content-header-title">Bienvenido {{ auth()->user()->id_tipoUsuario == 1 ? 'Administrador' : auth()->user()->name }}</h2>
        </div>
        <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
          <div class="breadcrumb-wrapper col-xs-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a>
              </li>
              <li class="breadcrumb-item active">#
              </li>
            </ol>
          </div>
        </div>
      </div>
      <div class="content-body">
        <!-- Change Log -->
        <div class="card">
            <div class="card-header">
                <h4 id="v10" class="card-title">Listado de Examenes</h4>
                <div class="heading-elements">
                    
                </div>
            </div>
            <div class="card-body collapse in" aria-expanded="true">
                <div class="card-block">
                    <table class="table">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">Nombre</th>
                          <th scope="col">Descripción</th>
                          <th scope="col">&nbsp&nbsp&nbsp</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse($examenes as $examen)
                        <tr>
                          <td>{{ $examen->nombre }}</td>
                          <td>{{ $examen->descripcion }}</td>
                          <td><a href="/informacion/{{$examen->id}}" class="btn btn-success">Responder</a></td>
                        </tr>
                        @empty
                        <h2>Aún no hay registros</h2>
                        @endforelse
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    <!--/ Change Log -->
      </div>
    </div>
  </div>
</div>