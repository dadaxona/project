@extends('welcome2')
@section('connect')
<div class="card">
    <div class="row p-2">
        <div class="col-3">
            <div id="kelgan">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-body">
                        <form id="perexod">
                            @csrf
                            <input type="hidden" name="id" id="id_per" class="form-control">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Йокилги литра</label>
                                <select name="benzin_id" id="benzin_idper" class="form-control">
        
                                </select>
                                <span class="text-danger error-text benzin_id_error"></span>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Йокилги литра</label>
                                <input type="text" name="plus" id="plusform" class="form-control">
                                <span class="text-danger error-text plus_error"></span>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Сумма литра</label>
                                <input type="text" name="summa" id="summaplus" class="form-control">
                                <span class="text-danger error-text summa_error"></span>
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
            <table class="tab">
                <thead>
                    <tr>
                        <td>Йокилги</td>
                        <td>Литр</td>
                        <td>Сумма</td>
                        <td>Итог</td>
                        <td>Контрол</td>
                    </tr>
                </thead>
                <tbody id="tbody2">

                </tbody>
            </table>
        </div>
    </div>
 </div>
@endsection