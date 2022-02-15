@extends('layouts.admin_layout')

@section('title', 'Добавить статью')

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Добавить статью</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
            </div>
        @endif
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="card card-primary">
                <!-- form start -->
                <form action="{{route('article.store')}}" method="POST">
                    @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Название</label>
                      <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Введите название статьи" required>
                    </div>
                    <div class="form-group">
                      <div class="form-group">
                          <label>Выберите категорию</label>
                          <select name="category_id" class="form-control" required>
                              @foreach ($categories as $category)
                              <option value="{{$category['id']}}">{{$category['title']}}</option>
                              @endforeach
                          </select>
                        </div>
                    </div>
  
                      <div class="form-group">
                        <textarea name="text" class="editor"></textarea>
                      </div>
    
                      <div class="form-group">
                        <label for="feature_image">Изображение статьи</label>
                        <img src="" alt="" class="img-uploaded mb-2" style="display:block; width: 250px">
                        <input type="text" class="form-control" id="feature_image" name="img" value="" readonly>
                        <a href="" class="popup_selector" data-inputid="feature_image">Выбрать изображение</a>
                      </div>
                      
                    </div>
  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Добавить</button>
                  </div>
                </form>
              </div>
        </div>
    </div><!-- /.container-fluid -->
  </section>
@endsection