@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Parents
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <form method="post" action="{{ route('parents.update', $parents->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="Image">Rasmi</label>
                                <input type="file" style="width: 500px;" class="form-control" id="images" name="images" value="{{ $parents->images }}">
                            </div>
                            <div class="form-group">
                                <label for="about_kinder">Bog'cha haqida</label>
                                <input type="text" style="width: 500px;" class="form-control" id="about_kinder" name="about_kinder" value="{{ $parents->about_kinder }}">
                            </div>
                            <div class="form-group">
                                <label for="full_name">Kasbi</label>
                                <input type="text" style="width: 500px;" class="form-control" id="full_name" name="full_name" value="{{ $parents->full_name }}">
                            </div>
                            <div class="form-group">
                                <label for="parent">Ota-onalar (Ota yoki ona)</label>
                                <input type="text" style="width: 500px;" class="form-control" id="parent" name="parent" value="{{ $parents->parent }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Saqlash</button>    
                            <a href="{{ route('parents.index') }}" class="btn btn-default">Orqaga</a>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <img src="/uploads/parents/{{ $parents->images }}" style="width: 300px; height: 300px;" alt="">
                    </div>
                </div>
                
                 
            </div>



                   {{-- {!! Form::model($parents, ['route' => ['parents.update', $parents->id], 'method' => 'patch']) !!}

                        @include('parents.fields')

                   {!! Form::close() !!} --}}
               
           </div>
       </div>
   </div>
@endsection