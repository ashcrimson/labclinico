<!-- Modal form create models -->
<div class="modal fade" id="modal-form-models">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" method="post" role="form" id="form-modal-models">

                <div class="modal-header">
                    <h5 class="modal-title">
                        Nuevo Model
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        @include('models.fields')
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" id="btnSubmitFormModels" data-loading-text="Guardando..." class="btn btn-primary" autocomplete="off">
                        Guardar
                    </button>
                </div>

            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- /. Modal form create models -->

@push('scripts')
<!--    Scripts modal form create models
------------------------------------------------->
<script>
    var vmModel = new Vue({
            el: '#models',
            created: function() {
                this.getModels();
            },
            data: {
                models: [],
                newModel: {
                    'nombre': ''
                },
                modelEdit: {},
                modelElimina: {},
                loading: false
            },
            methods: {
                getModels: function() {
                    var url = "{{route('api.models.index')}}";
                    axios.get(url).then(response => {
                        this.models = response.data.data
                    });
                },
                createModel: function() {
                    this.loading= true;
                    var url = "{{route('api.models.store')}}";

                    axios.post(url, this.newModel ).then(response => {
                        this.getModels();

                        this.newModel.nombre = '';
                        $('#modalCreateModel').modal('hide');
                        toastr.success(response.data.message); //mensaje
                        this.loading= false;
                    }).catch(error => {
                        toastr.error(error.response.data.message);
                        this.loading= false;
                    });
                },
                editModel: function(model) {
                    this.modelEdit = model
                    $('#modalEditModel').modal('show');
                },
                updateModel: function(id) {
                    this.loading= true;

                    var url = "{{url('api/models')}}" + "/" + id;

                    axios.put(url, this.model).then(response => {
                        this.getModels();
                        $('#modalEditModel').modal('hide');
                        toastr.success(response.data.message);
                        this.loading= false;
                    }).catch(error => {
                        toastr.error(error.response.data.message);
                        this.loading= false;
                    });
                },
                confirmDelete: function(model) {
                    this.modelElimina = model;
                    $('#modalDeleteModel').modal('show');
                },
                deleteModel: function(model) {
                    var url = "{{url('api/models')}}" + "/" + model.id;

                    axios.delete(url).then(response => {
                        this.getModels();
                        $('#modalDeleteModel').modal('hide');
                        toastr.success(response.data.message);
                    }).catch(error => {
                        toastr.error(error.response.data.message);
                        this.loading= false;
                    });
                }
            }
        });
</script>
@endpush
