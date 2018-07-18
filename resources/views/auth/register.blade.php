@extends('layouts.auth')

@section('content')
    <div class="col-4 form-auth">
        <h4 class="text-dark mb-2">Silahkan Daftar dan Mulai Belajar!</h4>
        {!! Form::open(['url' => 'signup', 'method' => 'post']) !!}
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
                <label for="customCheck1" class="m-0"><input type="checkbox" id="customCheck1" /> Saya telah menyetujui <a href="" class="text-primary">Aturan Penggunaan</a> dan <a href="" class="text-primary">Kebijakan Privasi</a>.</label>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg form-control" value="Daftar">
            </div>
        </form>
        <div class="d-flex flex-column justify-content-between align-items-center">
            <span>Sudah punya akun? <a href="{{ url('login') }}" class="text-primary" style="font-weight: 500">Login</a></span>
        </div>
    </div>
@endsection