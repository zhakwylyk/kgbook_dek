@extends('admin.layouts.main')

@section('content')

<div class="col-5"> 
        <a href="{{route('admin.category.create') }}" type="button" class="btn btn-block btn-primary">Добавить</a>
     </div>

<br>
     <div class="card">
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                  <tr>
                      <th>ID</th>
                      <th>title</th>
                      <th>Действия</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($categories as $category)                  
                  <tr>
                      <td>{{$category->id}}</td>
                      <td>{{$category->title}}</td>
                      <td><a href="{{ route('admin.category.show', $category->id) }}">Category</a></td>
                      <td><a href="{{ route('admin.category.edit', $category->id) }}">Edit</a></td>
                      <td>
                     <form action="{{ route('admin.category.delete', $category->id) }}"
                      method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="border-0 bg-transparent" ><i class="fas fa-trash text-danger" role="button"></i></form>
                  </button>
                </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>


     @endsection