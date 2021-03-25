@extends('tableros.tableroCategorias')

@section('name_page')
    Mostrar
@endsection


@section('menu_nav')
<li class="active treeview"><a href="/supervisor"><i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i></a></li>
<li class="treeview"><a href="/vcategorias"><i class="fa fa-files-o"></i><span>Categorías</span><span class="label label-primary pull-right"></span></a></li>
@endsection

@section('content')
  <div class="box-header">
    <h3 class="box-title">Mostrar categoría</h3>
  </div>
  <div class="box-body">
    <form action="#" role="form" method="POST">
        <div class="form-group">
            <label>Nombre de la sección</label>
            <input type="text" class="form-control" placeholder="" disabled>
            <label>Descripción de la sección</label>
            <input type="text" class="form-control" placeholder="" disabled>
        </div>
        <a href="/vcategorias" class="btn btn-danger">Regresar</a>
    </form>
  </div>
@endsection