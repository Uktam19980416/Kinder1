@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ota-onalar
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">

                    <div class="container">
                        <form method="post" action="{{ route('parents.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="Image">Rasmi</label>
                                <input type="file" style="width: 500px;" class="form-control" id="images" name="images" value="{{ old('images') }}">
                            </div>
                            <div class="form-group">
                                <label for="about_kinder">Bog'cha haqida</label>
                                <input type="text" style="width: 500px;" class="form-control" id="about_kinder" name="about_kinder" value="{{ old('about_kinder') }}">
                            </div>
                            <div class="form-group">
                                <label for="full_name">Ism-familiyasi</label>
                                <input type="text" style="width: 500px;" class="form-control" id="full_name" name="full_name" value="{{ old('full_name') }}">
                            </div>
                            <div class="form-group">
                                <label for="parent">Ota-ona (Ota yoki ona)</label>
                                <input type="text" style="width: 500px;" class="form-control" id="parent" name="parent" value="{{ old('parent') }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Saqlash</button>    
                            <a href="{{ route('parents.index') }}" class="btn btn-default">Orqaga</a>
                        </form>    
                    </div>

                    {{-- {!! Form::open(['route' => 'parents.store']) !!}

                        @include('parents.fields')

                    {!! Form::close() !!} --}}
                </div>
            </div>
        </div>
    </div>
@endsection
