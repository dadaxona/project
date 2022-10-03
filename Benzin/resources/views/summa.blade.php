@extends('welcome2')
@section('connect')
<div class="card">
    <div class="row p-2">
        <div class="col-3">
            <div class="" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <h4 id="s"></h4>
                <div class="modal-dialog">
                  <div class="modal-content">                
                    <div class="modal-body">
                        <form id="summos">
                            @csrf
                            <input type="hidden" name="id" id="id_summa" class="form-control">                    
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Бугунги савдо</label>
                                <input type="text" id="naqtsumma2" class="form-control" disabled>
                                <input type="hidden" name="naqtsumma3" id="naqtsumma3" class="form-control">
                                <input type="hidden" name="naqtsumma" id="naqtsumma" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Uz Card</label>
                                <input type="text" name="uzqardsumma" id="uzqardsumma" class="form-control">
                                <span class="text-danger error-text uzqardsumma_error"></span>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Humo</label>
                                <input type="text" name="humosumma" id="humosumma" class="form-control">
                                <span class="text-danger error-text humosumma_error"></span>
                            </div>
                        </div>
                        <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
              <hr>
              <div class="" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <h4>Карзларни киритинг</h4>
                    <div class="modal-content">                
                    <div class="modal-body">
                        <form id="klentqarz">
                            @csrf
                            <input type="hidden" name="id" id="id_klen" class="form-control">                    
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Клент имя</label>
                                <input type="text" name="name" id="klent_name" class="form-control">
                                <span class="text-danger error-text name_error"></span>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Клент долг</label>
                                <input type="text" name="qarz" id="qarz_suma" class="form-control">
                                <span class="text-danger error-text qarz_error"></span>
                            </div>
                        </div>
                        <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-9">
            <div class="col-4 d-flex">
                <input type="date" id="sanafilsum" class="form-control">
                <input type="date" id="sanafilsum2" class="form-control mx-2">
            </div>
            <div class="divasdas">
                <table class="tab">
                    <thead>
                        <tr>
                            <td>Бугунги савдо</td>
                            <td>Накт</td>
                            <td>Uz Card</td>
                            <td>Humo</td>
                            <td>Сана</td>
                            <td>Контрол</td>
                        </tr>
                    </thead>
                    <tbody id="sotuv2">
               
                    </tbody>
                </table>
            </div>
            <br>
            <hr>
            <div class="divasdas3">
                <table class="tab">
                    <thead>
                        <tr>
                            <td>Клент имя</td>
                            <td>Клент долг</td>
                            <td>Сана</td>
                            <td>Контрол</td>
                        </tr>
                    </thead>
                    <tbody id="ql">
               
                    </tbody>
                </table>                
            </div>
        </div>
        
    </div>
 </div>

 <div class="modal fade" id="delster" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">Удалить</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
            <form id="delster22">
                @csrf
                <input type="hidden" name="id" id="id_klent">
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-danger">Удалить</button>
            </div>
        </form>
      </div>
    </div>
  </div>

@endsection