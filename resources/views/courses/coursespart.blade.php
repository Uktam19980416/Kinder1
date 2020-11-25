@foreach($courses as $course)
    <div class="col-md-6 course d-lg-flex ftco-animate">
        <div class="img" style="background-image: url(uploads/courses/{{ $course->images }});"></div>
        <div class="text bg-light p-4">
            <h3>{{ $course->course_name }}</h3>
            <p class="subheading"><span>Kurs davomiyligi:</span> {{ $course->course_time }}</p>
            <p><?=substr($course->about_course, 0, 40)?></p>
        </div>
    </div>
@endforeach

