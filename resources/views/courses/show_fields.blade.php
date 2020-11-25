<!-- Images Field -->
<div class="form-group">
    {!! Form::label('images', 'Rasmlar:') !!}
    <p>{{ $courses->images }}</p>
</div>

<!-- Course Name Field -->
<div class="form-group">
    {!! Form::label('course_name', 'Kurs nomi:') !!}
    <p>{{ $courses->course_name }}</p>
</div>

<!-- Course Time Field -->
<div class="form-group">
    {!! Form::label('course_time', 'Kurs vaqti:') !!}
    <p>{{ $courses->course_time }}</p>
</div>

<!-- About Course Field -->
<div class="form-group">
    {!! Form::label('about_course', 'Kurs haqida:') !!}
    <p>{{ $courses->about_course }}</p>
</div>

