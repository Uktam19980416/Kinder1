<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Ism-familiya:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6 col-lg-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone number Field -->
<div class="form-group col-sm-6 col-lg-6">
    {!! Form::label('phone', 'Telefon raqam:') !!}
    {!! Form::number('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Subject Field -->
<div class="form-group col-sm-6 col-lg-6">
    {!! Form::label('subject', 'Mavzu:') !!}
    {!! Form::text('subject', null, ['class' => 'form-control']) !!}
</div>

<!-- Message Field -->
<div class="form-group col-sm-6 col-lg-6">
    {!! Form::label('message', 'Xabar:') !!}
    {!! Form::text('message', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-6" style="margin-top: 25px;">
    {!! Form::submit('Saqlash', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('kinders.index') }}" class="btn btn-default" style="margin-left: 10px;">Orqaga</a>
</div>
