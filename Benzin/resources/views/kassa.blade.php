    @extends('welcome2')
    @section('connect')

    <div class="card">
        <div class="d-flex pt-3" style="width: 500px">
            <input type="date" id="sana1" class="form-control">
            <input type="date" id="sana2" class="form-control mx-2">
        </div>
        <div class="row p-3">
            <div class="col-3 card pt-5">
                <div class="alert alert-info text-center pt-5 pb-5">
                    <h3 class="modal-title">Преходь</h3>
                    <h4 id="an1a" class="pt-3"></h4>
                </div>
            </div>
            <div class="col-3 card pt-5">
                <div class="alert alert-primary text-center pt-5 pb-5">
                    <h3 class="modal-title">Тoрговля</h3>
                    <h4 id="an2a" class="pt-3"></h4>
                </div>
            </div>
            <div class="col-3 card pt-5">
                <div class="alert alert-danger text-center pt-5 pb-5">
                    <h3 class="modal-title">Долгь</h3>
                    <h4 id="an3a" class="pt-3"></h4>
                </div>
            </div>
            <div class="col-3 card pt-5">
                <div class="alert alert-danger text-center pt-5 pb-5">
                    <h3 class="modal-title">Расходь</h3>
                    <h4 id="an4a" class="pt-3"></h4>
                </div>
            </div>
            <div class="col-3 card pt-5">
                <div class="alert alert-primary text-center pt-5 pb-5">
                    <h3 class="modal-title">Uz Card</h3>
                    <h4 id="an6a" class="pt-3"></h4>
                </div>
            </div>
            <div class="col-3 card pt-5">
                <div class="alert alert-primary text-center pt-5 pb-5">
                    <h3 class="modal-title">Humo</h3>
                    <h4 id="an7a" class="pt-3"></h4>
                </div>
            </div>
            <div class="col-6 card pt-5" id="an5a">
            
            </div>
        </div>
    </div>

    @endsection
