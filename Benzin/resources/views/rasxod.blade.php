@extends('welcome2')
@section('connect')
<div class="card">
    <div class="row p-2">
        <div class="col-3 bard">
            <div class="" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">                
                    <div class="modal-body">
                        <form id="rasxod">
                            @csrf
                            <input type="hidden" name="id" id="id_ras" class="form-control">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Йокилги</label>
                                <select name="benzin_id" id="benzin_idras" class="form-control">
        
                                </select>
                                <span class="text-danger error-text benzin_id_error"></span>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Бугунги холат</label>
                                <input type="text" name="holat" id="holat" class="form-control">
                                <span class="text-danger error-text holat_error"></span>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Кечаги холат</label>
                                <input type="text" name="holat2" id="holat2" class="form-control">
                                <span class="text-danger error-text holat2_error"></span>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Сумма</label>
                                <input type="text" id="diseb" class="form-control" disabled>
                                <input type="hidden" name="summa" id="diseba" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Сотилган литр</label>
                                <input type="text" id="litr" class="form-control" disabled>
                                <input type="hidden" name="litr" id="litra" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Жами Сумма</label>
                                <input type="text" id="diseb2" class="form-control" disabled>
                                <input type="hidden" name="jami" id="diseb2a" class="form-control">
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
            <div class="divasdas4">
                <div class="col-4 d-flex">
                    <input type="date" id="sanafilras" class="form-control">
                    <input type="date" id="sanafilras2" class="form-control mx-2">
                </div>
                <table class="tab">
                    <thead>
                        <tr>
                            <td>Йокилги</td>
                            <td>Бугунги холат</td>
                            <td>Кечаги холат</td>
                            <td>Сотилган литр</td>
                            <td>Сумма</td>
                            <td>Жами Сумма</td>
                            <td>Сана</td>
                            <td>Контрол</td>
                        </tr>
                    </thead>
                    <tbody id="tbody3">
    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 </div>
@endsection