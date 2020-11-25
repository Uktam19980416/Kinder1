@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            So'nggi yangiliklar
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">

                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <form method="post" action="{{ route('kinderNews.update', $kinderNews->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="title">Sarlavha</label>
                                    <input type="text" style="width: 500px;" class="form-control" id="title" name="title" value="{{ $kinderNews->title }}">
                                </div>
                                <div class="form-group">
                                    <label for="Description">Ma'lumot</label>
                                    <textarea style="width: 500px; height:200px;" class="form-control" id="description" name="description" value="">{{ $kinderNews->desrciption }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="Image">Rasm</label>
                                    <input type="file" style="width: 500px;" class="form-control" id="images" name="images" value="{{ $kinderNews->images }}">
                                </div>
                                <button type="submit" class="btn btn-primary">Saqlash</button>
                                <a href="{{ route('kinderNews.index') }}" class="btn btn-default">Orqaga</a>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <img src="/uploads/news/{{ $kinderNews->images }}" style="width: 300px; height: 300px;" alt="">
                        </div>
                    </div>
                </div>
               </div>
           </div>
       </div>
   </div>
@endsection
