@extends('welcome2')
@section('connect')
<div class="card">
    <div class="row p-2">
        <div class="col-3">
            <div id="kelgan">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-body">
                        <form id="rasdelform">
                            @csrf
                            <input type="hidden" name="id" id="id_mr" class="form-control">                          
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Кайерга</label>
                                <input type="text" name="qayer" id="qayer" class="form-control">
                                <span class="text-danger error-text qayer_error"></span>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Сумма</label>
                                <input type="text" name="sum" id="sumplu" class="form-control">
                                <span class="text-danger error-text sum_error"></span>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Сабап</label>
                                <input type="text" name="sabap" id="sabap" class="form-control">
                                <span class="text-danger error-text sabap_error"></span>
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
        <div class="col-9 mt-3">
            <div class="col-4 d-flex">
                <input type="date" id="sanafiltr" class="form-control">
                <input type="date" id="sanafiltr2" class="form-control mx-2">
            </div>
            <table class="tab">
                <thead>
                    <tr>
                        <td>Кайерга</td>
                        <td>Сумма</td>
                        <td>Сабап</td>
                        <td>Сана</td>
                        <td>Контрол</td>
                    </tr>
                </thead>
                <tbody id="tb">

                </tbody>
            </table>
        </div>
    </div>
 </div>
@endsection