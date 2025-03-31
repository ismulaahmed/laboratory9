@extends('layouts.app')

@section('title', 'Register')

@section('styles')
<style>
    .container {
        width: 100%;
        max-width: 400px;
        padding: 20px;
    }

    .register-card {
        position: relative;
        background-color: white;
        border-radius: 24px;
        padding: 50px 20px 30px;
        box-shadow: 
            0 10px 20px rgba(0, 0, 0, 0.1),
            0 6px 6px rgba(0, 0, 0, 0.1),
            0 0 0 10px rgba(255, 255, 255, 0.2);
        transform: perspective(1000px) rotateX(5deg);
    }

    .user-icon-container {
        position: absolute;
        top: -30px;
        left: 50%;
        transform: translateX(-50%);
    }

    .user-icon {
        width: 60px;
        height: 60px;
        background-color: #26a0b9;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        font-size: 24px;
        box-shadow: 
            0 4px 8px rgba(0, 0, 0, 0.2),
            0 0 0 5px rgba(255, 255, 255, 0.5);
    }

    h2 {
        text-align: center;
        color: #26a0b9;
        margin-bottom: 20px;
        font-size: 24px;
    }

    .error-list {
        background-color: rgba(255, 0, 0, 0.1);
        border-radius: 10px;
        padding: 10px 20px;
        margin-bottom: 20px;
        list-style-position: inside;
    }

    .error-list li {
        color: #d32f2f;
        margin: 5px 0;
        font-size: 14px;
    }

    .input-group {
        background-color: #26a0b9;
        border-radius: 10px;
        padding: 12px 15px;
        display: flex;
        align-items: center;
        margin-bottom: 15px;
        box-shadow: 
            0 4px 6px rgba(0, 0, 0, 0.1),
            inset 0 1px 0 rgba(255, 255, 255, 0.2);
    }

    .input-group i {
        color: white;
        margin-right: 10px;
        font-size: 18px;
    }

    .input-group input {
        background: transparent;
        border: none;
        outline: none;
        color: white;
        font-size: 16px;
        width: 100%;
    }

    .input-group input::placeholder {
        color: rgba(255, 255, 255, 0.8);
    }

    .register-btn {
        background-color: white;
        color: #26a0b9;
        border: none;
        padding: 12px 25px;
        border-radius: 8px;
        font-weight: bold;
        font-size: 16px;
        cursor: pointer;
        box-shadow: 
            0 4px 6px rgba(0, 0, 0, 0.1),
            0 1px 3px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s, box-shadow 0.2s;
        display: block;
        margin: 20px auto 0;
        width: 100%;
    }

    .register-btn:hover {
        transform: translateY(-2px);
        box-shadow: 
            0 6px 8px rgba(0, 0, 0, 0.15),
            0 3px 5px rgba(0, 0, 0, 0.1);
    }

    .register-btn:active {
        transform: translateY(0);
        box-shadow: 
            0 2px 4px rgba(0, 0, 0, 0.1),
            0 1px 2px rgba(0, 0, 0, 0.1);
    }

    label {
        display: none;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="register-card">
        <div class="user-icon-container">
            <div class="user-icon">
                <i class="fas fa-user-plus"></i>
            </div>
        </div>
        
        <h2>Register</h2>
        
        @if ($errors->any())
            <ul class="error-list">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form action="{{ route('register.submit') }}" method="POST">
            @csrf
            
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="name" value="{{ old('name') }}" placeholder="Name" required>
            </div>

            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" required>
            </div>

            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password" required>
            </div>

            <button type="submit" class="register-btn">REGISTER</button>
        </form>
    </div>
</div>
@endsection