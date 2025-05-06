@extends('layouts.app')

@section('title', 'Registration Successful')

@section('styles')
<style>
    .container {
        width: 100%;
        max-width: 400px;
        padding: 20px;
        margin: 0 auto;
    }

    .success-card {
        background-color: #ffffff;
        border-radius: 0px;
        padding: 40px 30px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        text-align: center;
    }

    .success-icon-container {
        margin-bottom: 20px;
    }

    .success-icon {
        width: 60px;
        height: 60px;
        background-color: #43a047;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        font-size: 24px;
        margin: 0 auto;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    h2 {
        color: #000000;
        margin-bottom: 25px;
        font-size: 22px;
    }

    .user-info {
        background-color: #f1f8e9;
        border-radius: 10px;
        padding: 16px 20px;
        margin-bottom: 25px;
        text-align: left;
        font-size: 15px;
    }

    .user-info p {
        margin: 8px 0;
        color: #333;
        display: flex;
        align-items: center;
    }

    .user-info p i {
        color: #689f38;
        margin-right: 8px;
        width: 20px;
        text-align: center;
    }

    .back-btn {
        display: inline-block;
        background-color: #1e88e5;
        color: white;
        text-decoration: none;
        padding: 10px 22px;
        border-radius: 8px;
        font-weight: 600;
        font-size: 15px;
        transition: background-color 0.3s ease;
    }

    .back-btn:hover {
        background-color: #1565c0;
    }

    .back-btn i {
        margin-right: 6px;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="success-card">
        <div class="success-icon-container">
            <div class="success-icon">
                <i class="fas fa-check"></i>
            </div>
        </div>
        
        <h2>Registration Successful</h2>
        
        <div class="user-info">
            <p><i class="fas fa-user"></i> <strong>Name:</strong> {{ $data['name'] }}</p>
            <p><i class="fas fa-envelope"></i> <strong>Email:</strong> {{ $data['email'] }}</p>
        </div>
        
        <a href="{{ route('register.form') }}" class="back-btn">
            <i class="fas fa-arrow-left"></i> Go Back
        </a>
    </div>
</div>
@endsection