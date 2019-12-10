@extends('layouts.frontLayouts.master')
@section('content')
@push('styles')
    <link href="{{ asset('css/frontend_css/') }}" rel="stylesheet">
<div class="container">
    <div class="row">
        <div class="card text-center" style="width: 18rem;">
            <img class="card-img-top" src="" alt="avatar">
            <div class="card-body">
                <p class="card-title">ads.</p>
                <p class="card-text">Thời gianphút.</p>
            </div>
        </div>
        <div class="card text-center" style="width: 50rem">
            <div class="card-header">
                <label>Số ghế: <input id="seat" type="text" name="seat" class="num" size="6" value="0" readonly="readonly" /></label><br>
                <label>Thành tiền: <input id="total" type="text" name="total" class="num" size="6" value="0" readonly="readonly" /></label>
            </div>
            <div class="card-body">
            <form>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                </div>
                <fieldset class="form-group">
                    <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                        <label class="form-check-label" for="gridRadios1">
                            First radio
                        </label>
                        </div>
                        
                    </div>
                    </div>
                </fieldset>
                <div class="form-group row">
                    <div class="col-sm-2">Checkbox</div>
                    <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                        <label class="form-check-label" for="gridCheck1">
                        Example checkbox
                        </label>
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Xác nhận</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

@endsection()
