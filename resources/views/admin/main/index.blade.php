@extends('admin.layouts.main')

@section('content')


        <h1 class="m-0"></h1>







    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">



          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $data['usersCount'] }}</h3>
                <p>Пользователи</p>
              </div>
              <div class="icon">
{{--                <i class="ion ion-bag"></i>--}}
              </div>
              <a href="{{ route('admin.user.index') }}" class="small-box-footer">Далее <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->




          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $data['postsCount'] }}</h3>
                <p>Посты</p>
              </div>
              <div class="icon">
{{--                <i class="ion ion-stats-bars"></i>--}}
              </div>
              <a href="{{ route('admin.post.index') }}" class="small-box-footer">Далее <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->



          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $data['categoriesCount'] }}</h3>
                <p>Категории</p>
              </div>
              <div class="icon">
{{--                <i class="ion ion-person-add"></i>--}}
              </div>
              <a href="{{ route('admin.category.index') }}" class="small-box-footer">Далее <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>




          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $data['tagsCount'] }}</h3>
                <p>Тэги</p>
              </div>
              <div class="icon">
{{--                <i class="ion ion-pie-graph"></i>--}}
              </div>
              <a href="{{ route('admin.tag.index') }}" class="small-box-footer">Далее <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>





            <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">




          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
