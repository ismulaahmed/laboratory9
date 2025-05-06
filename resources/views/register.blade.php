@extends('layouts.app')

@section('title', 'Register')

@section('styles')
<style>
    .container {
        width: 100%;
        max-width: 400px;
        padding: 20px;
        margin: 0 auto;
    }

    .register-card {
        background-color: #ffffff;
        border-radius: 0px;
        padding: 40px 30px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }

    .user-icon-container {
        text-align: center;
        margin-bottom: 20px;
    }

    .user-icon {
        width: 60px;
        height: 60px;
        background-color: #1e88e5;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        font-size: 24px;
        margin: 0 auto;
    }

    h2 {
        text-align: center;
        color: #000000;
        font-size: 22px;
        margin-bottom: 25px;
    }

    .error-list {
        background-color: #ffebee;
        border-left: 4px solid #d32f2f;
        padding: 12px 16px;
        margin-bottom: 20px;
        font-size: 14px;
        color: #c62828;
        border-radius: 6px;
    }

    .input-group {
        margin-bottom: 16px;
    }

    .input-group label {
        font-size: 14px;
        font-weight: 500;
        display: block;
        margin-bottom: 6px;
        color: #333;
    }

    .input-group input {
        width: 100%;
        padding: 10px 14px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 15px;
        transition: border-color 0.2s;
    }

    .input-group input:focus {
        border-color: #1e88e5;
        outline: none;
    }

    .register-btn {
        width: 100%;
        background-color: #1e88e5;
        color: white;
        border: none;
        padding: 12px 0;
        border-radius: 8px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .register-btn:hover {
        background-color: #1565c0;
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
                <label for="name">Name</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" placeholder="Your name" required>
            </div>

            <div class="input-group">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="you@example.com" required>
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input id="password" type="password" name="password" placeholder="Create a password" required>
            </div>

            <button type="submit" class="register-btn">Register</button>
        </form>
    </div>
</div>
@endsection
