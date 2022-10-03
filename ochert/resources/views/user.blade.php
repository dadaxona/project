@extends('welcome')
@section('connect')

<div class="card">
  <h3 class="text-center">Mijozlar</h3>
    <div class="card-header">
        <div class="col-3 d-flex">
            <input type="date" id="data1" class="form-control">
            <input type="date" id="data2" class="form-control mx-2">
        </div>
        <div class="row">
            <table class="tab">
                <thead>
                    <tr class="pol">
                        <th>Mijoz</th>
                        <th>Familiya</th>
                        <th>Sana</th>
                        <th>Tel...</th>
                        <th>Yashash joyi</th>
                        <th>Masul Shifokor</th>
                        <th>Texnalog</th>
                        <th>Tolov summa</th>
                        <th>Sana</th>
                    </tr>
                </thead>
                <tbody id="live_uze">

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection