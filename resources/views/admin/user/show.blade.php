@extends('admin.layout.app')

@section('content')
    <div class="container">
        <!-- User Information -->
        <h1>{{ $user->name }}</h1>
        <p><strong>Email:</strong> {{ $user->email }}</p>

        <!-- Display roles if they exist -->
        @if($user->role)
            <p><strong>Role:</strong> {{ $user->role->name }}</p>
        @else
            <p><strong>Role:</strong> No role assigned</p>
        @endif

        <!-- Back to Users List -->
        <a href="{{ route('admin.user.index') }}" class="btn btn-secondary">Back to Users</a>
    </div>
@endsection
