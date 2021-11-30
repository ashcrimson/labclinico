<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateRemaSignoVitalAPIRequest;
use App\Http\Requests\API\UpdateRemaSignoVitalAPIRequest;
use App\Models\RemaSignoVital;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\RemaSignoVitalResource;
use Response;

/**
 * Class RemaSignoVitalController
 * @package App\Http\Controllers\API
 */

class RemaSignoVitalAPIController extends AppBaseController
{
    /**
     * Display a listing of the RemaSignoVital.
     * GET|HEAD /remaSignoVitals
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $query = RemaSignoVital::query();

        if ($request->get('skip')) {
            $query->skip($request->get('skip'));
        }
        if ($request->get('limit')) {
            $query->limit($request->get('limit'));
        }

        if ($request->rema_id){
            $query->where('rema_id',$request->rema_id);
        }

        $remaSignoVitals = $query->get();

        return $this->sendResponse($remaSignoVitals, 'Rema Signo Vitals retrieved successfully');
    }

    /**
     * Store a newly created RemaSignoVital in storage.
     * POST /remaSignoVitals
     *
     * @param CreateRemaSignoVitalAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateRemaSignoVitalAPIRequest $request)
    {
        $input = $request->all();

        /** @var RemaSignoVital $remaSignoVital */
        $remaSignoVital = RemaSignoVital::create($input);

        return $this->sendResponse($remaSignoVital, 'Rema Signo Vital saved successfully');
    }

    /**
     * Display the specified RemaSignoVital.
     * GET|HEAD /remaSignoVitals/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var RemaSignoVital $remaSignoVital */
        $remaSignoVital = RemaSignoVital::find($id);

        if (empty($remaSignoVital)) {
            return $this->sendError('Rema Signo Vital not found');
        }

        return $this->sendResponse($remaSignoVital, 'Rema Signo Vital retrieved successfully');
    }

    /**
     * Update the specified RemaSignoVital in storage.
     * PUT/PATCH /remaSignoVitals/{id}
     *
     * @param int $id
     * @param UpdateRemaSignoVitalAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRemaSignoVitalAPIRequest $request)
    {
        /** @var RemaSignoVital $remaSignoVital */
        $remaSignoVital = RemaSignoVital::find($id);

        if (empty($remaSignoVital)) {
            return $this->sendError('Rema Signo Vital not found');
        }

        $remaSignoVital->fill($request->all());
        $remaSignoVital->save();

        return $this->sendResponse($remaSignoVital, 'RemaSignoVital updated successfully');
    }

    /**
     * Remove the specified RemaSignoVital from storage.
     * DELETE /remaSignoVitals/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var RemaSignoVital $remaSignoVital */
        $remaSignoVital = RemaSignoVital::find($id);

        if (empty($remaSignoVital)) {
            return $this->sendError('Rema Signo Vital not found');
        }

        $remaSignoVital->delete();

        return $this->sendSuccess('Rema Signo Vital deleted successfully');
    }
}
