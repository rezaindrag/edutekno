@extends('layouts.auth')

@section('content')
    <div class="col-4 form-auth">
        <h4 class="text-dark mb-2">Selamat Datang, Silahkan Login!</h4>
        {!! Form::open(['url' => 'authenticate', 'method' => 'post']) !!}
            <div class="form-group">
                <input type="text" class="form-control bg-white" placeholder="Email" name="email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control bg-white" placeholder="Password" name="password">
            </div>
            <div class="form-group">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <input type="checkbox" id="customCheck1">
                        <label for="customCheck1" class="m-0">Ingat saya</label>
                    </div>
                    <a href="" class="text-dark">Lupa password?</a>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-block btn-lg" value="Masuk">
            </div>
        </form>

        <div class="d-flex flex-column justify-content-between align-items-center">
            <span class="text-dark">Belum punya akun? <a href="{{ url('register') }}" class="text-primary" style="font-weight: 500">Daftar</a></span>
        </div>
    </div>
@endsection