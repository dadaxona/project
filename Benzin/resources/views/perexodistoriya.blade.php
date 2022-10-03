@extends('welcome2')
@section('connect')
<div class="card">
    <div class="row p-2">
        <div class="col-12 mt-3">
            <div class="col-4 d-flex">
                <input type="date" id="sana1fil" class="form-control">
                <input type="date" id="sana2fil" class="form-control mx-2">
            </div>
            <table class="tab">
                <thead>
                    <tr>
                        <td>Ёкилги</td>
                        <td>Литр</td>
                        <td>Сумма</td>
                        <td>Итог</td>
                        <td>Сана</td>
                    </tr>
                </thead>
                <tbody id="tbperex">

                </tbody>
            </table>
        </div>
    </div>
 </div>

@endsection