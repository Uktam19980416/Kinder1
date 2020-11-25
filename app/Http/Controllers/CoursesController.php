<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCoursesRequest;
use App\Http\Requests\UpdateCoursesRequest;
use App\Repositories\CoursesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Courses;
use Laracasts\Flash\Flash;
use Response;

class CoursesController extends AppBaseController
{
    /** @var  CoursesRepository */
    private $coursesRepository;

    public function __construct(CoursesRepository $coursesRepo)
    {
        $this->coursesRepository = $coursesRepo;
    }

    /**
     * Display a listing of the Courses.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $courses = $this->coursesRepository->all();

        return view('courses.index')->with('courses', $courses);
    }

    /**
     * Show the form for creating a new Courses.
     *
     * @return Response
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created Courses in storage.
     *
     * @param CreateCoursesRequest $request
     *
     * @return Response
     */
    public function store(CreateCoursesRequest $request)
    {
        $courses = new Courses();

        if($request->file('images') != null){
            $file = $request->file('images');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;

            $file->move('uploads/courses/', $fileName);

            $courses->images = $fileName;
        }

        $courses->course_name = $request->input('course_name');
        $courses->course_time = $request->input('course_time');
        $courses->about_course = $request->input('about_course');

        $courses->save();


        Flash::success('Kurslar muvaffaqiyatli saqlandi.');

        return redirect(route('courses.index'));
    }

    /**
     * Display the specified Courses.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $courses = $this->coursesRepository->find($id);

        if (empty($courses)) {
            Flash::error('Courses not found');

            return redirect(route('courses.index'));
        }

        return view('courses.show')->with('courses', $courses);
    }

    /**
     * Show the form for editing the specified Courses.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $courses = $this->coursesRepository->find($id);

        if (empty($courses)) {
            Flash::error('Kurslar topilmadi.');

            return redirect(route('courses.index'));
        }

        return view('courses.edit')->with('courses', $courses);
    }

    /**
     * Update the specified Courses in storage.
     *
     * @param int $id
     * @param UpdateCoursesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCoursesRequest $request)
    {
        $courses = Courses::find($id);

        if (empty($courses)) {
            Flash::error('Kurslar topilmadi');

            return redirect(route('courses.index'));
        }

        if($request->file('images') != null){
            $file = $request->file('images');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;

            $file->move('uploads/courses/', $fileName);

            $courses->images = $fileName;
        }

        $courses->course_name = $request->input('course_name');
        $courses->course_time = $request->input('course_time');
        $courses->about_course = $request->input('about_course');

        $courses->save();

        // $courses = $this->coursesRepository->update($request->all(), $id);

        Flash::success('Kurslar muvaffaqiyatli saqlandi.');

        return redirect(route('courses.index'));
    }

    /**
     * Remove the specified Courses from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $courses = $this->coursesRepository->find($id);

        if (empty($courses)) {
            Flash::error('Kurslar topilmadi');

            return redirect(route('courses.index'));
        }

        $this->coursesRepository->delete($id);

        Flash::success('Kurslar muvaffaqiyatli olib tashlandi.');

        return redirect(route('courses.index'));
    }
}
