@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Kontaktlar
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('kinders.show_fields')
                    <a href="{{ route('kinders.index') }}" class="btn btn-default">Orqaga</a>
                </div>
            </div>
        </div>
    </div>
@endsection
