@extends('layouts.auth')

@section('content')
    <div class="col-4 form-auth">
        <div class="d-flex justify-content-left align-items-center mb-2">
            <h4 class="text-dark">Silahkan Daftar dan Mulai Belajar!</h4>
        </div>
        <form action="">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Nama lengkap">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1" style="font-size: 13px">Saya telah menyetujui <a href="" class="text-info">Aturan Penggunaan</a> dan <a href="" class="text-info">Kebijakan Privasi</a>.</label>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-info btn-lg form-control" value="Daftar">
            </div>
        </form>
        <div class="d-flex flex-column justify-content-between align-items-center">
            <span>Sudah punya akun? <a href="{{ url('login') }}" class="text-info" style="font-weight: 500">Login</a></span>
        </div>
    </div>
@endsection