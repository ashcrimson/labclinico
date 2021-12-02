<?php

namespace App\Http\Controllers;

use App\DataTables\solicitudDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatesolicitudRequest;
use App\Http\Requests\UpdatesolicitudRequest;
use App\Models\solicitud;
use App\Models\examen;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class solicitudController extends AppBaseController
{
    /**
     * Display a listing of the solicitud.
     *
     * @param solicitudDataTable $solicitudDataTable
     * @return Response
     */
    public function index(solicitudDataTable $solicitudDataTable)
    {
        return $solicitudDataTable->render('solicituds.index');
    }

    /**
     * Show the form for creating a new solicitud.
     *
     * @return Response
     */
    public function create()
    {
        $quimica = examen::where('grupo_id','=', '1')->get();
        $microbiologia = examen::where('grupo_id','=', '2')->get();
        $autoinmunidad = examen::where('grupo_id','=', '3')->get();
        $coagulacion = examen::where('grupo_id','=', '4')->get();
        $varios = examen::where('grupo_id','=', '5')->get();
        $hematologia = examen::where('grupo_id','=', '6')->get();
        $molecular = examen::where('grupo_id','=', '7')->get();
        return view('solicituds.create', compact('quimica','microbiologia','autoinmunidad','coagulacion','varios','hematologia','molecular'));
    }

    /**
     * Store a newly created solicitud in storage.
     *
     * @param CreatesolicitudRequest $request
     *
     * @return Response
     */
    public function store(CreatesolicitudRequest $request)
    {
        $input = $request->all();

        /** @var solicitud $solicitud */
        $solicitud = solicitud::create($input);

        Flash::success('Solicitud saved successfully.');

        return redirect(route('solicituds.index'));
    }

    /**
     * Display the specified solicitud.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var solicitud $solicitud */
        $solicitud = solicitud::find($id);

        if (empty($solicitud)) {
            Flash::error('Solicitud not found');

            return redirect(route('solicituds.index'));
        }

        return view('solicituds.show')->with('solicitud', $solicitud);
    }

    /**
     * Show the form for editing the specified solicitud.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var solicitud $solicitud */
        $solicitud = solicitud::find($id);

        if (empty($solicitud)) {
            Flash::error('Solicitud not found');

            return redirect(route('solicituds.index'));
        }

        return view('solicituds.edit')->with('solicitud', $solicitud);
    }

    /**
     * Update the specified solicitud in storage.
     *
     * @param  int              $id
     * @param UpdatesolicitudRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatesolicitudRequest $request)
    {
        /** @var solicitud $solicitud */
        $solicitud = solicitud::find($id);

        if (empty($solicitud)) {
            Flash::error('Solicitud not found');

            return redirect(route('solicituds.index'));
        }

        $solicitud->fill($request->all());
        $solicitud->save();

        Flash::success('Solicitud updated successfully.');

        return redirect(route('solicituds.index'));
    }

    /**
     * Remove the specified solicitud from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var solicitud $solicitud */
        $solicitud = solicitud::find($id);

        if (empty($solicitud)) {
            Flash::error('Solicitud not found');

            return redirect(route('solicituds.index'));
        }

        $solicitud->delete();

        Flash::success('Solicitud deleted successfully.');

        return redirect(route('solicituds.index'));
    }
}
