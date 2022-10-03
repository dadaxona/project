    @extends('welcome2')
    @section('connect')
    <div class="card">
        <div class="d-flex pt-3" style="width: 500px">
            <input type="date" id="san" class="form-control">
            <input type="date" id="san2" class="form-control mx-2">
        </div>
        <div class="row p-3">
            <div class="col-3 card pt-5">
                <div class="alert alert-info text-center pt-5 pb-5">
                    <h3 class="modal-title">Преходь</h3>
                    <h4 id="an1" class="pt-3"></h4>
                </div>
            </div>
            <div class="col-3 card pt-5">
                <div class="alert alert-primary text-center pt-5 pb-5">
                    <h3 class="modal-title">Тoрговля</h3>
                    <h4 id="an2" class="pt-3"></h4>
                </div>
            </div>
            <div class="col-3 card pt-5">
                <div class="alert alert-danger text-center pt-5 pb-5">
                    <h3 class="modal-title">Долгь</h3>
                    <h4 id="an3" class="pt-3"></h4>
                </div>
            </div>
            <div class="col-3 card pt-5">
                <div class="alert alert-danger text-center pt-5 pb-5">
                    <h3 class="modal-title">Расходь</h3>
                    <h4 id="an4" class="pt-3"></h4>
                </div>
            </div>
            <div class="col-12 card pt-5" id="an5">
            
            </div>
        </div>
    </div>
    @endsection
