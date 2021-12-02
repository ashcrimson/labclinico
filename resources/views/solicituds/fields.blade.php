<style>
.card-title {
    font-size: 1.0rem;
}
.table td, .table th {
    padding: 0.1rem;
}
 .table tr th,td{
 	font-size: 12px;
 }
</style>
      <div class="container-fluid">
        <div class="content-header">
         
            <div class="container-fluid">

                  <div class="container" style="margin-top: 20px;">
                    <div class="row">
                      <div class="col-4">
                        <div class="card">
                          <h3 class="card-title titulocarta" style="text-align: center;">ÁREA QUÍMICA Y HORMONAS</h3>
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Código</th>
                                <th scope="col"></th>
                                <th scope="col">Examen</th>
                              </tr>
                            </thead>
                            <tbody>
                            	@foreach ($quimica as $quimica)
								  
                              <tr>
                                <td>{{ $quimica->codigo }}</td>
                                <td>
                                  <div >
                                      <input type="checkbox"  id="customCheck1" >
                                      <label for="customCheck1"></label>
                                  </div>
                                </td>
                                <td>{{ $quimica->nombre }}</td>
                              </tr>
                              @endforeach

                            </tbody>
                          </table>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="card">
                          <h3 class="card-title titulocarta" style="text-align: center;">ÁREA MICROBIOLOGÍA</h3>
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Código</th>
                                <th scope="col"></th>
                                <th scope="col">Examen</th>
                              </tr>
                            </thead>
                            <tbody>
                            	@foreach ($microbiologia as $microbiologia)
								  
                              <tr>
                                <td>{{ $microbiologia->codigo }}</td>
                                <td>
                                  <div >
                                      <input type="checkbox"  id="customCheck2" >
                                      <label  for="customCheck2"></label>
                                  </div>
                                </td>
                                <td>{{ $microbiologia->nombre }}</td>
                              </tr>
                              @endforeach

                            </tbody>
                          </table>
                        </div>
                        <div class="card">
                          <h3 class="card-title titulocarta" style="text-align: center;">ÁREA AUTOINMUNIDAD</h3>
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Código</th>
                                <th scope="col"></th>
                                <th scope="col">Examen</th>
                              </tr>
                            </thead>
                            <tbody>
                            	@foreach ($autoinmunidad as $autoinmunidad)
								  
                              <tr>
                                <td>{{ $autoinmunidad->codigo }}</td>
                                <td>
                                  <div >
                                      <input type="checkbox"  id="customCheck3" >
                                      <label  for="customCheck3"></label>
                                  </div>
                                </td>
                                <td>{{ $autoinmunidad->nombre }}</td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                        <div class="card">
                          <h3 class="card-title titulocarta" style="text-align: center;">ÁREA COAGULACIÓN</h3>
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Código</th>
                                <th scope="col"></th>
                                <th scope="col">Examen</th>
                              </tr>
                            </thead>
                            <tbody>
                            	@foreach ($coagulacion as $coagulacion)
								  
                              <tr>
                                <td>{{ $coagulacion->codigo }}</td>
                                <td>
                                  <div >
                                      <input type="checkbox"  id="customCheck4" >
                                      <label  for="customCheck4"></label>
                                  </div>
                                </td>
                                <td>{{ $coagulacion->nombre }}</td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="card">
                          <h3 class="card-title titulocarta" style="text-align: center;">VARIOS</h3>
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Código</th>
                                <th scope="col"></th>
                                <th scope="col">Examen</th>
                              </tr>
                            </thead>
                            <tbody>
                            	@foreach ($varios as $varios)
								  
                              <tr>
                                <td>{{ $varios->codigo }}</td>
                                <td>
                                  <div >
                                      <input type="checkbox"  id="customCheck5" >
                                      <label  for="customCheck5"></label>
                                  </div>
                                </td>
                                <td>{{ $varios->nombre }}</td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                        <div class="card">
                          <h3 class="card-title titulocarta" style="text-align: center;">ÁREA HEMATOLOGIA</h3>
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Código</th>
                                <th scope="col"></th>
                                <th scope="col">Examen</th>
                              </tr>
                            </thead>
                            <tbody>
                            	@foreach ($hematologia as $hematologia)
								  
                              <tr>
                                <td>{{ $hematologia->codigo }}</td>
                                <td>
                                  <div >
                                      <input type="checkbox"  id="customCheck6" >
                                      <label  for="customCheck6"></label>
                                  </div>
                                </td>
                                <td>{{ $hematologia->nombre }}</td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                        <div class="card">
                          <h3 class="card-title titulocarta" style="text-align: left;">BIOLOGIA MOLECULAR</h3>
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Código</th>
                                <th scope="col"></th>
                                <th scope="col">Examen</th>
                              </tr>
                            </thead>
                            <tbody>
                            	@foreach ($molecular as $molecular)
								  
                              <tr>
                                <td>{{ $molecular->codigo }}</td>
                                <td>
                                  <div >
                                      <input type="checkbox"  id="customCheck7" >
                                      <label  for="customCheck7"></label>
                                  </div>
                                </td>
                                <td>{{ $molecular->nombre }}</td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                        
                      </div>

                  
                        
                 

                    </div>
                    <div class="form-group col-sm-12">
					    {!! Form::label('name', 'Diagnostico:') !!}
					    <a class="success" data-toggle="modal" href="#modal-form-roles" tabindex="1000">nuevo</a>
					    {!!
					        Form::select(
					            'diagnosticos[]',
					            select(\App\Models\diagnostico::class,'nombre','id',null)
					            , null
					            , ['id'=>'diagnosticos','class' => 'form-control listbox']
					        )
					    !!}
					</div>
					<!-- Notas Field -->
					<div class="form-group col-sm-12">
					    {!! Form::label('notas', 'Notas:') !!}
					    {!! Form::text('notas', null, ['class' => 'form-control']) !!}
					</div>
					
					<!-- Programacion Field -->
                    <div class="form-group col-sm-6">
                        <label for="hora_de_llamada">Programación:</label>
                        <input class="form-control" name="hora_de_llamada" type="datetime-local" id="hora_de_llamada">
                    </div>
                </div>

                
              
            </div><!-- /.container-fluid -->

       
      </div>   





