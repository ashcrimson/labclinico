


    <div class="col-12">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">Datos Personales</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
                <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="form-row">
                    @include('pacientes.fields')
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>

    <div class=" col-sm-12">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">Datos de REMA</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
                <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="form-row">


{{--                    <!-- Numero Unidad Field -->--}}
{{--                    <div class="form-group col-sm-6">--}}
{{--                        {!! Form::label('numero_unidad', 'Numero Unidad:') !!}--}}
{{--                        {!! Form::text('numero_unidad', null, ['class' => 'form-control','maxlength' => 255]) !!}--}}
{{--                    </div>--}}

{{--                    <!-- Nombres Conductor Field -->--}}
{{--                    <div class="form-group col-sm-6">--}}
{{--                        {!! Form::label('nombres_conductor', 'Nombres Conductor:') !!}--}}
{{--                        {!! Form::text('nombres_conductor', null, ['class' => 'form-control','maxlength' => 255]) !!}--}}
{{--                    </div>--}}

{{--                    <!-- Apellidos Conductor Field -->--}}
{{--                    <div class="form-group col-sm-6">--}}
{{--                        {!! Form::label('apellidos_conductor', 'Apellidos Conductor:') !!}--}}
{{--                        {!! Form::text('apellidos_conductor', null, ['class' => 'form-control','maxlength' => 255]) !!}--}}
{{--                    </div>--}}

                    <!-- Hora De Llamada Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('hora_de_llamada', 'Hora De Llamada:') !!}
                        {!! Form::time('hora_de_llamada', getHoraDateTime($rema->hora_de_llamada), ['class' => 'form-control']) !!}
                    </div>

                    <!-- Hora De Salida Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('hora_de_salida', 'Hora De Salida:') !!}
                        {!! Form::time('hora_de_salida', getHoraDateTime($rema->hora_de_salida), ['class' => 'form-control']) !!}
                    </div>

                    <!-- Hora De Llegada Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('hora_de_llegada', 'Hora De Llegada:') !!}
                        {!! Form::time('hora_de_llegada', getHoraDateTime($rema->hora_de_llegada), ['class' => 'form-control']) !!}
                    </div>

                    <!-- User Id Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('user_id', 'Responsable:') !!}
                        {!! Form::text('user', auth()->user()->name, ['class' => 'form-control','readonly']) !!}
                    </div>

                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>


    <div class="form-group col-sm-12 col-lg-12">
        @include('remas.panel_signos_vitales')
    </div>


    <div class="col-sm-12 mb-3">
        <div class="card card-outline card-info ">
            <div class="card-header">
                <h3 class="card-title">Datos Atención</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
                <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="form-row">

                    <!-- Clasificacion Triaje Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('clasificacion_triaje','Clasificacion Triage:') !!}
                        {!!
                            Form::select(
                                'clasificacion_triaje',
                                ['' => 'Seleccione una..','SC' => 'Sin Clasificacion','S1'=> 'S1','S2'=>'S2','S3'=>'S3','S4'=>'S4','S5'=>'S5']
                                , null
                                , ['id'=>'clasificacion_triaje','class' => 'form-control','style'=>'width: 100%']
                            )
                        !!}
                    </div>

                    <div class="form-group col-sm-12" style="padding: 0px; margin: 0px"></div>

                    <!-- Motivo Consulta Field -->
                    <div class="form-group col-sm-12 col-lg-6">
                        {!! Form::label('motivo_consulta', 'Motivo Consulta:') !!}
                        {!! Form::textarea('motivo_consulta', null, ['class' => 'form-control','rows' => 2]) !!}
                    </div>



                    <!-- Atencion Enfermeria Field -->
                    <div class="form-group col-sm-12 col-lg-6">
                        {!! Form::label('atencion_enfermeria', 'Atención Enfermería:') !!}
                        {!! Form::textarea('atencion_enfermeria', null, ['class' => 'form-control','rows' => 2]) !!}
                    </div>

{{--                    <!-- Antecedentes Morbidos Field -->--}}
{{--                    <div class="form-group col-sm-12 col-lg-6">--}}
{{--                        {!! Form::label('antecedentes_morbidos', 'Antecedentes Mórbidos:') !!}--}}
{{--                        {!! Form::textarea('antecedentes_morbidos', null, ['class' => 'form-control','rows' => 2]) !!}--}}
{{--                    </div>--}}

{{--                    <!-- Alergias Field -->--}}
{{--                    <div class="form-group col-sm-12 col-lg-6">--}}
{{--                        {!! Form::label('alergias', 'Alergias:') !!}--}}
{{--                        {!! Form::textarea('alergias', null, ['class' => 'form-control','rows' => 2]) !!}--}}
{{--                    </div>--}}

                    <!-- Medicamentos Habituales Field -->
{{--                    <div class="form-group col-sm-12 col-lg-6">--}}
{{--                        {!! Form::label('medicamentos_habituales', 'Medicamentos Habituales:') !!}--}}
{{--                        {!! Form::textarea('medicamentos_habituales', null, ['class' => 'form-control','rows' => 2]) !!}--}}
{{--                    </div>--}}


                    <div class="form-group col-sm-6">
                        {!! Form::label('evaluacion_primaria', 'Evaluación Primaria:') !!}

                        <!-- Evaluacion Primaria A Field -->
                        <div class="form-group col-sm-12 col-lg-12">
                            {!! Form::label('evaluacion_primaria_a', 'A:') !!}
                            {!! Form::textarea('evaluacion_primaria_a', null, ['class' => 'form-control','rows' => 2]) !!}
                        </div>

                        <!-- B Field -->
                        <div class="form-group col-sm-12 col-lg-12">
                            {!! Form::label('evaluacion_primaria_b', 'B:') !!}
                            {!! Form::textarea('evaluacion_primaria_b', null, ['class' => 'form-control','rows' => 2]) !!}
                        </div>

                        <!-- C Field -->
                        <div class="form-group col-sm-12 col-lg-12">
                            {!! Form::label('evaluacion_primaria_c', 'C:') !!}
                            {!! Form::textarea('evaluacion_primaria_c', null, ['class' => 'form-control','rows' => 2]) !!}
                        </div>

                        <!-- D Field -->
                        <div class="form-group col-sm-12 col-lg-12">
                            {!! Form::label('evaluacion_primaria_d', 'D:') !!}
                            {!! Form::textarea('evaluacion_primaria_d', null, ['class' => 'form-control','rows' => 2]) !!}
                        </div>

                        <!-- E Field -->
                        <div class="form-group col-sm-12 col-lg-12">
                            {!! Form::label('evaluacion_primaria_e', 'E:') !!}
                            {!! Form::textarea('evaluacion_primaria_e', null, ['class' => 'form-control','rows' => 2]) !!}
                        </div>
                    </div>

                    <div class="form-group col-sm-6">
                        {!! Form::label('evaluacion_primaria', 'Evaluación Secundaria:') !!}

                        <!-- Evaluacion Secundaria S Field -->
                            <div class="form-group col-sm-12 col-lg-12">
                                {!! Form::label('evaluacion_secundaria_s', 'S:') !!}
                                {!! Form::textarea('evaluacion_secundaria_s', null, ['class' => 'form-control','rows' => 2]) !!}
                            </div>

                            <!-- A Field -->
                            <div class="form-group col-sm-12 col-lg-12">
                                {!! Form::label('evaluacion_secundaria_a', 'A:') !!}
                                {!! Form::textarea('evaluacion_secundaria_a', null, ['class' => 'form-control','rows' => 2]) !!}
                            </div>

                            <!-- M Field -->
                            <div class="form-group col-sm-12 col-lg-12">
                                {!! Form::label('evaluacion_secundaria_m', 'M:') !!}
                                {!! Form::textarea('evaluacion_secundaria_m', null, ['class' => 'form-control','rows' => 2]) !!}
                            </div>

                            <!-- P Field -->
                            <div class="form-group col-sm-12 col-lg-12">
                                {!! Form::label('evaluacion_secundaria_p', 'P:') !!}
                                {!! Form::textarea('evaluacion_secundaria_p', null, ['class' => 'form-control','rows' => 2]) !!}
                            </div>

                            <!-- L Field -->
                            <div class="form-group col-sm-12 col-lg-12">
                                {!! Form::label('evaluacion_secundaria_l', 'L:') !!}
                                {!! Form::textarea('evaluacion_secundaria_l', null, ['class' => 'form-control','rows' => 2]) !!}
                            </div>

                            <!-- E Field -->
                            <div class="form-group col-sm-12 col-lg-12">
                                {!! Form::label('evaluacion_secundaria_e', 'E:') !!}
                                {!! Form::textarea('evaluacion_secundaria_e', null, ['class' => 'form-control','rows' => 2]) !!}
                            </div>
                    </div>



                    <!-- Via Aerea Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('via_aerea', 'Via Aerea:') !!}
                        {!!
                            Form::select(
                                'via_aerea',
                                [
                                    '' => 'Seleccione uno...',
                                    'C MAYO' => 'C MAYO',
                                    'TET'=>'TET',
                                    'TDSG' => 'TDSG'
                                ]
                                , null
                                , ['id'=>'via_aerea','class' => 'form-control','style'=>'width: 100%']
                            )
                        !!}
                    </div>


                    <!-- Aspiracion Secreciones Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('aspiracion_secreciones', 'Aspiracion Secreciones:') !!}
                        {!! Form::text('aspiracion_secreciones', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                    </div>

                    <!-- Oxigenoterapia Fio2 Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('oxigenoterapia_fio2', 'Oxigenoterapia Fio2:') !!}
                        {!! Form::text('oxigenoterapia_fio2', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
                    </div>

                    <!-- Asistencia Ventilatoria Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('asistencia_ventilatoria', 'Asistencia Ventilatoria:') !!}
                        {!! Form::text('asistencia_ventilatoria', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
                    </div>

                    <!-- Acceso Vascular Numero Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('acceso_vascular_numero', 'Acceso Vascular Numero:') !!}
                        {!! Form::text('acceso_vascular_numero', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
                    </div>

                    <!-- Acceso Vascular Ubicacion Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('acceso_vascular_ubicacion', 'Acceso Vascular Ubicacion:') !!}
                        {!! Form::text('acceso_vascular_ubicacion', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
                    </div>

                    <!-- Administracion Parenteral Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('administracion_parenteral', 'Administracion Parenteral:') !!}
                        {!! Form::text('administracion_parenteral', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
                    </div>

                    <!-- Sondeo Gastrico Numero Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('sondeo_gastrico_numero', 'Sondeo Gastrico Numero:') !!}
                        {!! Form::text('sondeo_gastrico_numero', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
                    </div>

                    <!-- Sondeo Gastrico Debito Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('sondeo_gastrico_debito', 'Sondeo Gastrico Debito:') !!}
                        {!! Form::text('sondeo_gastrico_debito', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
                    </div>

                    <!-- Monitoreo Ekg Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('monitoreo_ekg', 'Monitoreo Ekg:') !!}
                        {!!
                           Form::select(
                               'monitoreo_ekg',
                               [
                                   '' => 'Seleccione uno...',
                                   'SI' => 'SÍ',
                                   'NO'=>'NO'
                               ]
                               , null
                               , ['id'=>'monitoreo_ekg','class' => 'form-control','style'=>'width: 100%']
                           )
                       !!}
                    </div>

                    <!-- Desfibrilacion Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('desfibrilacion', 'Desfibrilacion:') !!}
                        {!! Form::text('desfibrilacion', null, ['class' => 'form-control','rows' => 4]) !!}
{{--                        {!!--}}
{{--                          Form::select(--}}
{{--                              'desfibrilacion',--}}
{{--                              [--}}
{{--                                  '' => 'Seleccione uno...',--}}
{{--                                  'J1' => 'J1°',--}}
{{--                                  'J2' => 'J2°',--}}
{{--                                  'J3' => 'J3°',--}}
{{--                                  'J4' => 'J4°',--}}
{{--                                  'J5' => 'J5°',--}}

{{--                              ]--}}
{{--                              , null--}}
{{--                              , ['id'=>'desfibrilacion','class' => 'form-control','style'=>'width: 100%']--}}
{{--                          )--}}
{{--                      !!}--}}
                    </div>

                    <!-- Cardioversion Farm Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('cardioversion_farm', 'Cardioversion Farm:') !!}
                        {!! Form::text('cardioversion_farm', null, ['class' => 'form-control']) !!}
{{--                        {!!--}}
{{--                            Form::select(--}}
{{--                                'cardioversion_farm',--}}
{{--                                [--}}
{{--                                    '' => 'Seleccione uno...',--}}
{{--                                    'J1' => 'J1°',--}}
{{--                                    'J2' => 'J2°',--}}
{{--                                    'J3' => 'J3°',--}}
{{--                                    'J4' => 'J4°',--}}
{{--                                ]--}}
{{--                                , null--}}
{{--                                , ['id'=>'cardioversion_farm','class' => 'form-control','style'=>'width: 100%']--}}
{{--                            )--}}
{{--                        !!}--}}
                    </div>

                    <!-- Marcapaso Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('marcapaso', 'Marcapaso:') !!}
                        {!!
                           Form::select(
                               'marcapaso',
                               [
                                   '' => 'Seleccione uno...',
                                   'SI' => 'SÍ',
                                   'NO'=>'NO'
                               ]
                               , null
                               , ['id'=>'marcapaso','class' => 'form-control','style'=>'width: 100%']
                           )
                       !!}
                    </div>

                    <!-- Frecuencia Cardiaca Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('frecuencia_cardiaca', 'Frecuencia Cardiaca:') !!}
                        {!! Form::text('frecuencia_cardiaca', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
                    </div>

                    <!-- Inmovilizacion Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('inmovilizacion', 'Inmovilizacion:') !!}
                        {!! Form::text('inmovilizacion', null, ['class' => 'form-control']) !!}
{{--                        {!!--}}
{{--                           Form::select(--}}
{{--                               'inmovilizacion',--}}
{{--                               [--}}
{{--                                   '' => 'Seleccione uno...',--}}
{{--                                   'Férula' => 'Férula',--}}
{{--                                   'Tabla' => 'Tabla',--}}
{{--                                   'Collar' => 'Collar',--}}
{{--                                   'Chaleco EX' => 'Chaleco EX',--}}

{{--                               ]--}}
{{--                               , null--}}
{{--                               , ['id'=>'inmovilizacion','class' => 'form-control','style'=>'width: 100%']--}}
{{--                           )--}}
{{--                       !!}--}}
                    </div>

                    <!-- Extricacion Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('extricacion', 'Extricacion:') !!}
                        {!!
                           Form::select(
                               'extricacion',
                               [
                                   '' => 'Seleccione uno...',
                                   'SI' => 'SÍ',
                                   'NO'=>'NO'
                               ]
                               , null
                               , ['id'=>'extricacion','class' => 'form-control','style'=>'width: 100%']
                           )
                       !!}
                    </div>

                    <!-- Rcr Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('rcr', 'RCP:') !!}
                        {!! Form::text('rcr', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
                    </div>

                    <!-- Sondeo Vesical Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('sondeo_vesical', 'Sondeo Vesical:') !!}
                        {!! Form::text('sondeo_vesical', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
                    </div>

                    <!-- Otros Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('otros', 'Otros:') !!}
                        {!! Form::text('otros', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
                    </div>



                <!-- Fallecimiento Hora Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('fallecimiento_hora', 'Fallecimiento Hora:') !!}
                        {!! Form::time('fallecimiento_hora', getHoraDateTime($rema->fallecimiento_hora), ['class' => 'form-control','id'=>'fallecimiento_hora']) !!}
                    </div>


                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>

    <div class="form-group col-sm-12 col-lg-12">



        @include('remas.panel_ventilaciones_mecanicas')
    </div>

