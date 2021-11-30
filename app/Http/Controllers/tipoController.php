<?php

namespace App\Http\Controllers;

use App\DataTables\tipoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatetipoRequest;
use App\Http\Requests\UpdatetipoRequest;
use App\Models\tipo;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class tipoController extends AppBaseController
{
    /**
     * Display a listing of the tipo.
     *
     * @param tipoDataTable $tipoDataTable
     * @return Response
     */
    public function index(tipoDataTable $tipoDataTable)
    {
        return $tipoDataTable->render('tipos.index');
    }

    /**
     * Show the form for creating a new tipo.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipos.create');
    }

    /**
     * Store a newly created tipo in storage.
     *
     * @param CreatetipoRequest $request
     *
     * @return Response
     */
    public function store(CreatetipoRequest $request)
    {
        $input = $request->all();

        /** @var tipo $tipo */
        $tipo = tipo::create($input);

        Flash::success('Tipo saved successfully.');

        return redirect(route('tipos.index'));
    }

    /**
     * Display the specified tipo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var tipo $tipo */
        $tipo = tipo::find($id);

        if (empty($tipo)) {
            Flash::error('Tipo not found');

            return redirect(route('tipos.index'));
        }

        return view('tipos.show')->with('tipo', $tipo);
    }

    /**
     * Show the form for editing the specified tipo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var tipo $tipo */
        $tipo = tipo::find($id);

        if (empty($tipo)) {
            Flash::error('Tipo not found');

            return redirect(route('tipos.index'));
        }

        return view('tipos.edit')->with('tipo', $tipo);
    }

    /**
     * Update the specified tipo in storage.
     *
     * @param  int              $id
     * @param UpdatetipoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetipoRequest $request)
    {
        /** @var tipo $tipo */
        $tipo = tipo::find($id);

        if (empty($tipo)) {
            Flash::error('Tipo not found');

            return redirect(route('tipos.index'));
        }

        $tipo->fill($request->all());
        $tipo->save();

        Flash::success('Tipo updated successfully.');

        return redirect(route('tipos.index'));
    }

    /**
     * Remove the specified tipo from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var tipo $tipo */
        $tipo = tipo::find($id);

        if (empty($tipo)) {
            Flash::error('Tipo not found');

            return redirect(route('tipos.index'));
        }

        $tipo->delete();

        Flash::success('Tipo deleted successfully.');

        return redirect(route('tipos.index'));
    }
}
