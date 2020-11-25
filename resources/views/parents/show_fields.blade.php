<!-- Images Field -->
<div class="form-group">
    {!! Form::label('images', 'Rasmi:') !!}
    <p>{{ $parents->images }}</p>
</div>

<!-- About Kinder Field -->
<div class="form-group">
    {!! Form::label('about_kinder', 'Bog\'cha haqida:') !!}
    <p>{{ $parents->about_kinder }}</p>
</div>

<!-- Full Name Field -->
<div class="form-group">
    {!! Form::label('full_name', 'Ism-familiyasi:') !!}
    <p>{{ $parents->full_name }}</p>
</div>

<!-- Parent Field -->
<div class="form-group">
    {!! Form::label('parent', 'Ota yoki ona:') !!}
    <p>{{ $parents->parent }}</p>
</div>

