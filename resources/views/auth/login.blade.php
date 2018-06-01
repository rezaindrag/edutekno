@extends('layouts.auth')

@section('content')
    <div class="col-4 form-auth">
        <div class="d-flex justify-content-left align-items-center mb-2">
            <h4 class="text-dark">Selamat Datang, Silahkan Login!</h4>
        </div>

        {!! Form::open(['url' => 'authenticate', 'method' => 'post']) !!}
            <div class="form-group">
                <input type="text" class="form-control bg-white" placeholder="Email" name="email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control bg-white" placeholder="Password" name="password">
            </div>
            <div class="form-group">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">Ingat saya</label>
                    </div>
                    <a href="" class="text-dark">Lupa password?</a>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-info btn-block btn-lg" value="Masuk">
            </div>
        </form>

        <div class="d-flex flex-column justify-content-between align-items-center">
            <span class="text-dark">Belum punya akun? <a href="{{ url('register') }}" class="text-info" style="font-weight: 500">Daftar</a></span>
        </div>
    </div>
@endsection