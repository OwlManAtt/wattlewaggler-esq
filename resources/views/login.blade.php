@extends('common.layout')

@section('content')
<h2>Staff Login</h2>

<p>Wattlewaggler &amp; Associates staff can log in here to view our confidential files.</p>

<form>
    {{ csrf_field() }}

    <div class="row">
        <div class="col-6 mx-auto">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon" id="addon-lock"><i class="fa fa-lock fa-2x" aria-hidden="true"></i></span>
                    <input type="text" id="code" name="code" class="form-control form-control-lg" value="{{ old('code') }}" placeholder="Enter PIN..." aria-describedby="addon-lock">
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-6 mx-auto">
            <input type="submit" value="Login" class="btn btn-primary btn-lg btn-block">
        </div>
    </div>
</form>

@endsection
