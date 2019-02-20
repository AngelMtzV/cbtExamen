<div class="app-content content container-fluid">
  <div class="content-left">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-xs-12 mb-1">
          <h2 class="content-header-title">Bienvenido {{ auth()->user()->id_tipoUsuario == 1 ? 'Administrador' : 'Standard' }}</h2>
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
                <h4 id="v10" class="card-title">Listado de usuarios</h4>
                <div class="heading-elements">
                  <button type="button" class="btn btn-info"><a href="" style="color: #000;">Agregar  <i class="fas fa-user-plus"></i></a></button>
                    <ul class="list-inline mb-0">
                        <li></li>
                    </ul>
                </div>
            </div>
            <div class="card-body collapse in" aria-expanded="true">
                <div class="card-block table-responsive">
                    <table class="table">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Usuario</th>
                          <th scope="col">Clave</th>
                          <th scope="col">E-mail</th>
                          <th scope="col">Acciones </th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse($usuarios as $usuario)
                        @if($usuario->id_tipoUsuario != 1)
                        <tr>
                          <th scope="row">{{ $usuario->id }}</th>
                          <td>{{ $usuario->name }}</</td>
                          <td>{{ $usuario->password }}</</td>
                          <td>{{ $usuario->email }}</</td>
                          <td >
                              <div class="row">
                                <div class="col-sm-1" style=" margin-right: 11%;">
                                  <a class="btn btn-warning" href=""><i class="fas fa-edit"></i></a>
                                </div>
                                <div class="col-sm-1" style="margin-left: 11%;">
                                  <form action="" method="POST">
                                    {{ csrf_field() }}
                                      @method('DELETE')
                                    <button class="btn btn-danger" type="submit" onclick="return confirm('¿Quiere borrar el examen?')">
                                      <i class="fas fa-trash-alt"></i>
                                    </button>
                                  </form>
                                </div>
                              </div>
                          </td>
                        </tr>
                        @endif
                        @empty
                        <h2>Aún no hat ningún registro</h2>
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