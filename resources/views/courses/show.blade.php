@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Kurslar
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('courses.show_fields')
                    <a href="{{ route('courses.index') }}" class="btn btn-default">Orqaga</a>
                </div>
            </div>
        </div>
    </div>
@endsection