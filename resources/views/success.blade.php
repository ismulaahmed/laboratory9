@extends('layouts.app')

@section('title', 'Registration Successful')

@section('styles')
<style>
    .container {
        width: 100%;
        max-width: 400px;
        padding: 20px;
    }

    .success-card {
        position: relative;
        background-color: white;
        border-radius: 24px;
        padding: 50px 25px 30px;
        box-shadow: 
            0 10px 20px rgba(0, 0, 0, 0.1),
            0 6px 6px rgba(0, 0, 0, 0.1),
            0 0 0 10px rgba(255, 255, 255, 0.2);
        transform: perspective(1000px) rotateX(5deg);
        text-align: center;
    }

    .success-icon-container {
        position: absolute;
        top: -30px;
        left: 50%;
        transform: translateX(-50%);
    }

    .success-icon {
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
        color: #26a0b9;
        margin-bottom: 25px;
        font-size: 24px;
    }

    .user-info {
        background-color: rgba(38, 160, 185, 0.1);
        border-radius: 12px;
        padding: 20px;
        margin-bottom: 25px;
        text-align: left;
    }

    .user-info p {
        margin: 10px 0;
        color: #333;
        font-size: 16px;
        display: flex;
        align-items: center;
    }

    .user-info p i {
        color: #26a0b9;
        margin-right: 10px;
        width: 20px;
        text-align: center;
    }

    .back-btn {
        display: inline-block;
        background-color: #26a0b9;
        color: white;
        text-decoration: none;
        padding: 12px 25px;
        border-radius: 8px;
        font-weight: bold;
        font-size: 16px;
        cursor: pointer;
        box-shadow: 
            0 4px 6px rgba(0, 0, 0, 0.1),
            0 1px 3px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .back-btn:hover {
        transform: translateY(-2px);
        box-shadow: 
            0 6px 8px rgba(0, 0, 0, 0.15),
            0 3px 5px rgba(0, 0, 0, 0.1);
    }

    .back-btn:active {
        transform: translateY(0);
        box-shadow: 
            0 2px 4px rgba(0, 0, 0, 0.1),
            0 1px 2px rgba(0, 0, 0, 0.1);
    }

    .back-btn i {
        margin-right: 8px;
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