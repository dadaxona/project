@extends('welcome2')
@section('connect')
<div class="card">
    <div class="row p-2">
        <div class="col-3">
            <div id="exam">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <form id="form">
                            @csrf
                            <input type="hidden" name="id" id="id" class="form-control">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Йокилги</label>
                                <input type="text" name="name" id="name" class="form-control">
                                <span class="text-danger error-text name_error"></span>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Сумма</label>
                                <input type="text" name="summa" id="summa" class="form-control">
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
                         <td>Сумма</td>
                         <td>Контрол</td>
                     </tr>
                 </thead>
                 <tbody id="tbody">

                 </tbody>
             </table>
         </div>
    </div>
 </div>
@endsection