<?php

namespace App\Http\Controllers;

use App\DataTables\grupoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreategrupoRequest;
use App\Http\Requests\UpdategrupoRequest;
use App\Models\grupo;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class grupoController extends AppBaseController
{
    /**
     * Display a listing of the grupo.
     *
     * @param grupoDataTable $grupoDataTable
     * @return Response
     */
    public function index(grupoDataTable $grupoDataTable)
    {
        return $grupoDataTable->render('grupos.index');
    }

    /**
     * Show the form for creating a new grupo.
     *
     * @return Response
     */
    public function create()
    {
        return view('grupos.create');
    }

    /**
     * Store a newly created grupo in storage.
     *
     * @param CreategrupoRequest $request
     *
     * @return Response
     */
    public function store(CreategrupoRequest $request)
    {
        $input = $request->all();

        /** @var grupo $grupo */
        $grupo = grupo::create($input);

        Flash::success('Grupo saved successfully.');

        return redirect(route('grupos.index'));
    }

    /**
     * Display the specified grupo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var grupo $grupo */
        $grupo = grupo::find($id);

        if (empty($grupo)) {
            Flash::error('Grupo not found');

            return redirect(route('grupos.index'));
        }

        return view('grupos.show')->with('grupo', $grupo);
    }

    /**
     * Show the form for editing the specified grupo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var grupo $grupo */
        $grupo = grupo::find($id);

        if (empty($grupo)) {
            Flash::error('Grupo not found');

            return redirect(route('grupos.index'));
        }

        return view('grupos.edit')->with('grupo', $grupo);
    }

    /**
     * Update the specified grupo in storage.
     *
     * @param  int              $id
     * @param UpdategrupoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdategrupoRequest $request)
    {
        /** @var grupo $grupo */
        $grupo = grupo::find($id);

        if (empty($grupo)) {
            Flash::error('Grupo not found');

            return redirect(route('grupos.index'));
        }

        $grupo->fill($request->all());
        $grupo->save();

        Flash::success('Grupo updated successfully.');

        return redirect(route('grupos.index'));
    }

    /**
     * Remove the specified grupo from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var grupo $grupo */
        $grupo = grupo::find($id);

        if (empty($grupo)) {
            Flash::error('Grupo not found');

            return redirect(route('grupos.index'));
        }

        $grupo->delete();

        Flash::success('Grupo deleted successfully.');

        return redirect(route('grupos.index'));
    }
}
