@extends('tableros.tableroCategorias')

@section('name_page')
    Categorias
@endsection


@section('menu_nav')
<li class="active treeview"><a href="/supervisor"><i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i></a></li>
<li class="treeview"><a href="/vcategorias"><i class="fa fa-files-o"></i><span>Categorías</span><span class="label label-primary pull-right"></span></a></li>
@endsection


@section('content')
<div class="box-header">
    <h3 class="box-title">Categorias</h3>
    <a href="vcategorias/create" class="btn btn-block btn-info btn-flat">Crear categoría</a>
  </div>
  <div class="box-body">
    <table id="example2" class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Productos</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Electrónica</td>
          <td>5</td>
          <td>
            <a href="vcategorias/{product}/edit" class="btn btn-success">Editar</a>
            <a href="vcategorias/{product}" class="btn btn-warning">Mostrar</a>
            <a href="#" class="btn btn-danger">Eliminar</a>
          </td>
        </tr>
        <tr>
          <td>Electrodomésticos</td>
          <td>4</td>
          <td>
            <a href="vcategorias/{product}/edit"  class="btn btn-success">Editar</a>
            <a href="vcategorias/{product}"  class="btn btn-warning">Mostrar</a>
            <a href="#" class="btn btn-danger">Eliminar</a>
          </td>
        </tr>
        <tr>
          <td>Ropa</td>
          <td>6</td>
          <td>
            <a href="vcategorias/{product}/edit"  class="btn btn-success">Editar</a>
            <a href="vcategorias/{product}"  class="btn btn-warning">Mostrar</a>
            <a href="#" class="btn btn-danger">Eliminar</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
    
@endsection