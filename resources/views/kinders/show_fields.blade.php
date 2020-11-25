<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Ism-familiya:') !!}
    <p>{{ $kinder->name }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $kinder->email }}</p>
</div>

<!-- Phone number Field -->
<div class="form-group">
    {!! Form::label('phone', 'Telefon nomer:') !!}
    <p>{{ $kinder->phone }}</p>
</div>

<!-- Subject Field -->
<div class="form-group">
    {!! Form::label('subject', 'Mavzu:') !!}
    <p>{{ $kinder->subject }}</p>
</div>

<!-- Message Field -->
<div class="form-group">
    {!! Form::label('message', 'Xabar:') !!}
    <p>{{ $kinder->message }}</p>
</div>

