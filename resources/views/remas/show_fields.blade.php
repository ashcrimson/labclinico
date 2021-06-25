


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
                @include('pacientes.show_fields',['paciente' => $rema->paciente])
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


            <!-- Hora De Llamada Field -->
            {!! Form::label('hora_de_llamada', 'Hora De Llamada:') !!}
            {!! $rema->hora_de_llamada !!}<br>


            <!-- Hora De Salida Field -->
            {!! Form::label('hora_de_salida', 'Hora De Salida:') !!}
            {!! $rema->hora_de_salida !!}<br>


            <!-- Hora De Llegada Field -->
            {!! Form::label('hora_de_llegada', 'Hora De Llegada:') !!}
            {!! $rema->hora_de_llegada !!}<br>


            <!-- User Id Field -->
            {!! Form::label('user_id', 'Responsable:') !!}
            {!! $rema->user->name !!}<br>


            <!-- User Id Field -->
            {!! Form::label('user_id', 'Estado:') !!}
            {!! $rema->estado->nombre !!}<br>

        </div>
        <!-- /.card-body -->
    </div>
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

        </div>
        <!-- /.card-body -->
    </div>
</div>

