@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            O'qituvchilar
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <form method="post" action="{{ route('teachers.update', $teachers->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="Image">Rasmi</label>
                                <input type="file" style="width: 500px;" class="form-control" id="images" name="images" value="{{ $teachers->images }}">
                            </div>
                            <div class="form-group">
                                <label for="full_name">To'liq ism-familiyasi</label>
                                <input type="text" style="width: 500px;" class="form-control" id="full_name" name="full_name" value="{{ $teachers->full_name }}">
                            </div>
                            <div class="form-group">
                                <label for="job">Kasbi</label>
                                <input type="text" style="width: 500px;" class="form-control" id="job" name="job" value="{{ $teachers->job }}">
                            </div>
                            <div class="form-group">
                                <label for="slogan">Vazifasi</label>
                                <input type="text" style="width: 500px;" class="form-control" id="slogan" name="slogan" value="{{ $teachers->slogan }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Saqlash</button>    
                            <a href="{{ route('teachers.index') }}" class="btn btn-default">Orqaga</a>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <img src="/uploads/teachers/{{ $teachers->images }}" style="width: 300px; height: 300px;" alt="">
                    </div>
                </div>
                
                 
            </div>
                {{-- {!! Form::model($teachers, ['route' => ['teachers.update', $teachers->id], 'method' => 'patch']) !!}

                        @include('teachers.fields')

                   {!! Form::close() !!} --}}
               
           </div>
       </div>
   </div>
@endsection