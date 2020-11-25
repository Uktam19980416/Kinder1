@foreach($teachers as $teacher)
    <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="staff">
            <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url(uploads/teachers/{{ $teacher->images }});"></div>
            </div>
            <div class="text pt-3 text-center">
                <h3>{{ $teacher->full_name }}</h3>
                <span class="position mb-2">{{ $teacher->job }}</span>
                <div class="faded">
                    <p><?=substr($teacher->slogan, 0, 100)?></p>
                </div>
            </div>
        </div>
    </div>
@endforeach
