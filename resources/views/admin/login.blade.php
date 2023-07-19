@extends('admin.layouts.layout')
@section('content')

    <div class="container">
        <h2>Admin Login</h2>
        <form method="POST" action="">
            @csrf
            <div class="form-group">
                <label for="email">user name</label>
                <input type="text" id="username" name="username" required autofocus>
            </div>
            <div class="form-group">
                <label for="password">Passwor</label>
                <input type="password" id="password" name="password" required>
            </div>
            @if ($errors->has('login'))
                <div class="form-group">
                    <span class="error">{{ $errors->first('login') }}</span>
                </div>
            @endif
            <div class="form-group">
                <button type="submit" class="btn">Login</button>
            </div>
        </form>
    </div>

@endsection

