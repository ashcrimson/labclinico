<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateRemaVentilacionMecanicaAPIRequest;
use App\Http\Requests\API\UpdateRemaVentilacionMecanicaAPIRequest;
use App\Models\RemaVentilacionMecanica;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\RemaVentilacionMecanicaResource;
use Response;

/**
 * Class RemaVentilacionMecanicaController
 * @package App\Http\Controllers\API
 */

class RemaVentilacionMecanicaAPIController extends AppBaseController
{
    /**
     * Display a listing of the RemaVentilacionMecanica.
     * GET|HEAD /remaVentilacionMecanicas
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $query = RemaVentilacionMecanica::query();

        if ($request->get('skip')) {
            $query->skip($request->get('skip'));
        }
        if ($request->get('limit')) {
            $query->limit($request->get('limit'));
        }

        $remaVentilacionMecanicas = $query->get();

        return $this->sendResponse(RemaVentilacionMecanicaResource::collection($remaVentilacionMecanicas), 'Rema Ventilacion Mecanicas retrieved successfully');
    }

    /**
     * Store a newly created RemaVentilacionMecanica in storage.
     * POST /remaVentilacionMecanicas
     *
     * @param CreateRemaVentilacionMecanicaAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateRemaVentilacionMecanicaAPIRequest $request)
    {
        $input = $request->all();

        /** @var RemaVentilacionMecanica $remaVentilacionMecanica */
        $remaVentilacionMecanica = RemaVentilacionMecanica::create($input);

        return $this->sendResponse(new RemaVentilacionMecanicaResource($remaVentilacionMecanica), 'Rema Ventilacion Mecanica saved successfully');
    }

    /**
     * Display the specified RemaVentilacionMecanica.
     * GET|HEAD /remaVentilacionMecanicas/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var RemaVentilacionMecanica $remaVentilacionMecanica */
        $remaVentilacionMecanica = RemaVentilacionMecanica::find($id);

        if (empty($remaVentilacionMecanica)) {
            return $this->sendError('Rema Ventilacion Mecanica not found');
        }

        return $this->sendResponse(new RemaVentilacionMecanicaResource($remaVentilacionMecanica), 'Rema Ventilacion Mecanica retrieved successfully');
    }

    /**
     * Update the specified RemaVentilacionMecanica in storage.
     * PUT/PATCH /remaVentilacionMecanicas/{id}
     *
     * @param int $id
     * @param UpdateRemaVentilacionMecanicaAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRemaVentilacionMecanicaAPIRequest $request)
    {
        /** @var RemaVentilacionMecanica $remaVentilacionMecanica */
        $remaVentilacionMecanica = RemaVentilacionMecanica::find($id);

        if (empty($remaVentilacionMecanica)) {
            return $this->sendError('Rema Ventilacion Mecanica not found');
        }

        $remaVentilacionMecanica->fill($request->all());
        $remaVentilacionMecanica->save();

        return $this->sendResponse(new RemaVentilacionMecanicaResource($remaVentilacionMecanica), 'RemaVentilacionMecanica updated successfully');
    }

    /**
     * Remove the specified RemaVentilacionMecanica from storage.
     * DELETE /remaVentilacionMecanicas/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var RemaVentilacionMecanica $remaVentilacionMecanica */
        $remaVentilacionMecanica = RemaVentilacionMecanica::find($id);

        if (empty($remaVentilacionMecanica)) {
            return $this->sendError('Rema Ventilacion Mecanica not found');
        }

        $remaVentilacionMecanica->delete();

        return $this->sendSuccess('Rema Ventilacion Mecanica deleted successfully');
    }
}
