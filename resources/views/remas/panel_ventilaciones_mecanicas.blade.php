<div class="card card-outline card-success" id="panel_ventilaciones_mecanicas">
    <div class="card-header">
        <h3 class="card-title">Ventilaciones mecánicas</h3>

        <div class="card-tools">

            <button type="button" class="btn btn-tool" @click="!dialog" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
        </div>
        <!-- /.card-tools -->
    </div>

    <div class="row p-4">


        <!-- Ventilacion Mecanica Hora Recepcion Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('ventilacion_hora_recepcion', 'Ventilacion Mecanica Hora Recepcion:') !!}
            {!! Form::time('ventilacion_hora_recepcion', null, ['class' => 'form-control','id'=>'ventilacion_hora_recepcion']) !!}
        </div>

        <div class="col-sm-12">

            <button type="button" class="btn btn-success btn-sm" @click="dialog=!dialog">
                <i class="fa fa-plus"></i> Agregar Registro
            </button>
        </div>
    </div>

    <div class="table-responsive mb-0">
        <table class="table table-bordered table-sm table-striped mb-0">
            <thead>
            <tr>
                <th>HORA</th>
                <th>VOL</th>
                <th>PEEP</th>
                <th>TIE</th>
                <th>FR</th>
                <th>PF</th>
            </tr>
            </thead>
            <tbody>
                <tr v-if="ventilaciones.length == 0">
                        <td colspan="10" class="text-center">Ningún Registro agregado</td>
                </tr>
                <tr v-for="det in ventilaciones">
                    <td v-text="det.hora_format"></td>
                    <td v-text="det.vol"></td>
                    <td v-text="det.peep"></td>
                    <td v-text="det.tie"></td>
                    <td v-text="det.fr"></td>
                    <td v-text="det.pf"></td>
                </tr>
            </tbody>
        </table>
    </div>


    <!-- Modal form create models -->
    <div class="modal fade" id="modalFormVentilaciones">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="" method="post" role="form" id="form-modal-models">

                    <div class="modal-header">
                        <h5 class="modal-title">
                            Nuevo Registro
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-row">

                            <div class="form-group col-sm-6">
                                <label for="vol">Hora:</label>
                                <input class="form-control" type="time" v-model="editedItem.hora">
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="vol">VOL:</label>
                                <input class="form-control" type="text" v-model="editedItem.vol">
                            </div>


                            <div class="form-group col-sm-6">
                                <label for="peep">PEEP:</label>
                                <input class="form-control" type="text" v-model="editedItem.peep">
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="tie">TIE:</label>
                                <input class="form-control" type="text" v-model="editedItem.tie">
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="fr">FR:</label>
                                <input class="form-control" type="text" v-model="editedItem.fr">
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="pf">PF:</label>
                                <input class="form-control" type="text" v-model="editedItem.pf">
                            </div>




                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="button" id="btnSubmitFormModels"
                                data-loading-text="Guardando..."
                                class="btn btn-primary"
                                autocomplete="off"
                                @click.prevent="save()"
                        >
                            Guardar
                        </button>
                    </div>

                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <!-- /. Modal form create models -->
</div>




@push('scripts')
<script>



    var vmSignoVital = new Vue({
        el: '#panel_ventilaciones_mecanicas',
        name: "panel_ventilaciones_mecanicas",
            created () {
                this.getDatos();
            },
            data: {
                dialog: false,
                loading: false,
                ventilaciones: [],
                editedItem: {
                    rema_id: @json($rema->id ?? 0),
                    id : 0,
                },
                defaultItem: {
                    rema_id: @json($rema->id ?? 0),
                    id : 0,
                },
            },

            methods: {
                async getDatos () {

                    try{

                        var url = "{{route('api.rema_ventilacion_mecanicas.index')}}?rema_id="+this.editedItem.rema_id;

                        const res = await axios.get(url);

                        this.ventilaciones = res.data.data;

                    }catch (error) {

                        console.log(error)
                    }


                },

                editItem (item) {

                    this.editedItem = Object.assign({}, item);
                    this.dialog = true

                },

                async deleteItem (item) {

                    this.editedItem = Object.assign({}, item);

                    const res = confirm('Esta seguro de registro ?');

                    //si da click en aceptar
                    if (res){
                        try {

                            const res = await axios.delete(this.urlDestroy);

                            this.getDatos();


                            alertSucces('Listo!',res.message);


                        }catch (e) {
                            console.log(e.response)
                        }
                    }

                    this.close();

                },

                close () {
                    this.dialog = false;
                    this.loading = false;
                    $("#modalFormVentilaciones").modal('hide');
                    setTimeout(() => {
                        this.editedItem = Object.assign({}, this.defaultItem);
                    }, 300)
                },

                async save () {

                    this.loading = true;

                    try {

                        const data = this.editedItem;

                        if(this.editedItem.id === 0){

                            var res = await axios.post(this.urlStore,data);

                        }else {

                            var res = await axios.patch(this.urlUpdate,data);

                        }

                        alertSucces('Listo!',res.message);

                        this.getDatos();
                        this.close();

                    }catch (e) {
                        console.log(e.response);

                        var errors = e.response.data.errors;

                        if(typeof errors !== 'undefined'){

                            alertWarning(errors2List(errors));
                        }

                        this.loading = false;
                    }

                }
            },
            computed: {
                formTitle () {
                    return this.editedItem.id === 0 ? 'Nuevo Registro' : 'Editar Registro'
                },
                editando(){
                    return this.editedItem.id !== 0;
                },
                urlStore(){
                    return  '{{route('api.rema_ventilacion_mecanicas.store')}}';
                },
                urlUpdate(){
                    var url = '{{route('api.rema_ventilacion_mecanicas.update',0)}}';

                    return url.replace('/0','/'+this.editedItem.id);
                },
                urlDestroy(){
                    var url = '{{route('api.rema_ventilacion_mecanicas.destroy',0)}}';

                    return url.replace('/0','/'+this.editedItem.id);

                },
            },

            watch: {
                dialog (val) {
                    if (val===true){
                        $("#modalFormVentilaciones").modal('show');
                    }else {
                        this.close()
                    }
                },
            },



        });
</script>
@endpush
