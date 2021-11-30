<?php

namespace App\Http\Controllers;

use App\DataTables\examenDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateexamenRequest;
use App\Http\Requests\UpdateexamenRequest;
use App\Models\examen;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class examenController extends AppBaseController
{
    /**
     * Display a listing of the examen.
     *
     * @param examenDataTable $examenDataTable
     * @return Response
     */
    public function index(examenDataTable $examenDataTable)
    {
        return $examenDataTable->render('examens.index');
    }

    /**
     * Show the form for creating a new examen.
     *
     * @return Response
     */
    public function create()
    {
        return view('examens.create');
    }

    /**
     * Store a newly created examen in storage.
     *
     * @param CreateexamenRequest $request
     *
     * @return Response
     */
    public function store(CreateexamenRequest $request)
    {
        $input = $request->all();

        /** @var examen $examen */
        $examen = examen::create($input);

        Flash::success('Examen saved successfully.');

        return redirect(route('examens.index'));
    }

    /**
     * Display the specified examen.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var examen $examen */
        $examen = examen::find($id);

        if (empty($examen)) {
            Flash::error('Examen not found');

            return redirect(route('examens.index'));
        }

        return view('examens.show')->with('examen', $examen);
    }

    /**
     * Show the form for editing the specified examen.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var examen $examen */
        $examen = examen::find($id);

        if (empty($examen)) {
            Flash::error('Examen not found');

            return redirect(route('examens.index'));
        }

        return view('examens.edit')->with('examen', $examen);
    }

    /**
     * Update the specified examen in storage.
     *
     * @param  int              $id
     * @param UpdateexamenRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateexamenRequest $request)
    {
        /** @var examen $examen */
        $examen = examen::find($id);

        if (empty($examen)) {
            Flash::error('Examen not found');

            return redirect(route('examens.index'));
        }

        $examen->fill($request->all());
        $examen->save();

        Flash::success('Examen updated successfully.');

        return redirect(route('examens.index'));
    }

    /**
     * Remove the specified examen from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var examen $examen */
        $examen = examen::find($id);

        if (empty($examen)) {
            Flash::error('Examen not found');

            return redirect(route('examens.index'));
        }

        $examen->delete();

        Flash::success('Examen deleted successfully.');

        return redirect(route('examens.index'));
    }
}
