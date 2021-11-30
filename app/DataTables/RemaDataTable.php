<?php

namespace App\DataTables;

use App\Models\Rema;
use App\Models\RemaEstado;
use Carbon\Carbon;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class RemaDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        return $dataTable->addColumn('action', function(Rema $rema){
            $id = $rema->id;
            return view('remas.datatables_actions',compact('rema','id'));
        })->editColumn('nombre',function (Rema $rema){
            return $rema->paciente->nombre_completo;
        })->editColumn('fecha_ingreso',function (Rema $rema){
            return $rema->created_at->format('d/m/Y');
        })->editColumn('paciente.fecha_nac',function (Rema $rema){
            return Carbon::parse($rema->paciente->fecha_nac)->format('d/m/Y');
        })->editColumn('hora_de_llamada',function (Rema $rema){
            if(!$rema->hora_de_llamada){
                return null;
            } else {
            return Carbon::parse($rema->hora_de_llamada)->format('g:i A');
            }
        })->editColumn('hora_de_salida',function (Rema $rema){
            if(!$rema->hora_de_salida){
                return null;
            } else {
            return Carbon::parse($rema->hora_de_salida)->format('g:i A');
            }
        })->editColumn('hora_de_llegada',function (Rema $rema){
            if(!$rema->hora_de_llegada){
                return null;
            } else {
            return Carbon::parse($rema->hora_de_llegada)->format('g:i A');
            }
        });

    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Rema $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Rema $model)
    {
        return $model->newQuery()->where('estado_id','!=',RemaEstado::TEMPORAL)->with(['paciente','user','estado']);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '120px', 'printable' => false])
            ->ajax([
                'data' => "function(data) { formatDataDataTables($('#form-filter').serializeArray(), data);   }"
            ])
            ->parameters([
                'dom'     => 'Bfltrip',
                'order'   => [[0, 'desc']],
                'language' => ['url' => asset('js/SpanishDataTables.json')],
                //'scrollX' => false,
                'responsive' => true,
                'buttons' => [
                    ['extend' => 'create',  'text' => '<a class="btn btn-outline-success"><i class="fa fa-plus"></i> <span class=" d-sm-inline">Nuevo Ingreso</span></a>
'],

                    ['excel'],
                ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'id',
            'rut' => ['name' => 'paciente.run','data' => 'paciente.run'],
            'nombre' => ['data' => 'nombre', 'name' => 'nombre', 'searchable' => 'false', 'orderable' => false],

            'primer_nombre' => ['data' => 'paciente.primer_nombre', "name" => "paciente.primer_nombre",'visible' => false,'printable' => false, 'exportable' => false],
            'segundo_nombre' => ['data' => 'paciente.segundo_nombre', "name" => "paciente.segundo_nombre",'visible' => false,'printable' => false, 'exportable' => false],
            'apellido_paterno' => ['data' => 'paciente.apellido_paterno', "name" => "paciente.apellido_paterno",'visible' => false,'printable' => false, 'exportable' => false],
            'apellido_materno' => ['data' => 'paciente.apellido_materno', "name" => "paciente.apellido_materno",'visible' => false,'printable' => false, 'exportable' => false],
            'paciente.fecha_nac',
            'paciente.sexo',
            'hora_de_llamada',
            'hora_de_salida',
            'hora_de_llegada',
            'motivo_consulta',
            'clasificacion_triaje' ,

            'estado' => ['name' => 'estado.nombre','data' => 'estado.nombre'],
            'user'=> ['name' => 'user.name','data' => 'user.name'],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'remasdatatable_' . time();
    }
}
