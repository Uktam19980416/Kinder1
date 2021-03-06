<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTeachersRequest;
use App\Http\Requests\UpdateTeachersRequest;
use App\Repositories\TeachersRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Teachers;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Response;

class TeachersController extends AppBaseController
{
    /** @var  TeachersRepository */
    private $teachersRepository;

    public function __construct(TeachersRepository $teachersRepo)
    {
        $this->teachersRepository = $teachersRepo;
    }

    /**
     * Display a listing of the Teachers.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $teachers = $this->teachersRepository->all();

        return view('teachers.index')
            ->with('teachers', $teachers);
    }

    /**
     * Show the form for creating a new Teachers.
     *
     * @return Response
     */
    public function create()
    {
        return view('teachers.create');
    }

    /**
     * Store a newly created Teachers in storage.
     *
     * @param CreateTeachersRequest $request
     *
     * @return Response
     */
    public function store(CreateTeachersRequest $request)
    {
        // $input = $request->all();

        // $teachers = $this->teachersRepository->create($input);
        $teachers = new Teachers();
        if($request->file('images') != null){
            $file = $request->file('images');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('uploads/teachers/', $fileName);
            $teachers->images = $fileName;
        }
        $teachers->full_name = $request->input('full_name');
        $teachers->job = $request->input('job');
        $teachers->slogan = $request->input('slogan');
        $teachers->save();
        Flash::success('O\'qituvchilar muvaffaqiyatli saqlandi.');

        return redirect(route('teachers.index'));
    }

    /**
     * Display the specified Teachers.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $teachers = $this->teachersRepository->find($id);

        if (empty($teachers)) {
            Flash::error('O\'qituvchilar topilmadi.');

            return redirect(route('teachers.index'));
        }

        return view('teachers.show')->with('teachers', $teachers);
    }

    /**
     * Show the form for editing the specified Teachers.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $teachers = $this->teachersRepository->find($id);

        if (empty($teachers)) {
            Flash::error('O\'qituvchilar topilmadi.');

            return redirect(route('teachers.index'));
        }

        return view('teachers.edit')->with('teachers', $teachers);
    }

    /**
     * Update the specified Teachers in storage.
     *
     * @param int $id
     * @param UpdateTeachersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTeachersRequest $request)
    {
        // $teachers = $this->teachersRepository->find($id);
        $teachers = Teachers::find($id);

        if (empty($teachers)) {
            Flash::error('O\'qituvchilar topilamdi');

            return redirect(route('teachers.index'));
        }

        if($request->file('images') != null){
            $file = $request->file('images');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('uploads/teachers/', $fileName);
            $teachers->images = $fileName;
        }
        $teachers->full_name = $request->input('full_name');
        $teachers->job = $request->input('job');
        $teachers->slogan = $request->input('slogan');
        $teachers->save();
        // $teachers = $this->teachersRepository->update($request->all(), $id);

        Flash::success('O\'qituvchilar muvaffaqiyatli o\'zgartirildi.');

        return redirect(route('teachers.index'));
    }

    /**
     * Remove the specified Teachers from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $teachers = $this->teachersRepository->find($id);

        if (empty($teachers)) {
            Flash::error('O\'qituvchilar topilmadi.');

            return redirect(route('teachers.index'));
        }

        $this->teachersRepository->delete($id);

        Flash::success('O\'qituvchilar muvaffaqiyatli olib tashlandi.');

        return redirect(route('teachers.index'));
    }
}
