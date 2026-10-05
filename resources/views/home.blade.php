@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

    <h1>Welcome to My Homepage</h1>

    <p>
        This is a multi-page Laravel application demonstrating
        Blade layout inheritance, routing, and asset management.
    </p>

    <h2>Laravel Features Demonstration</h2>

    <div class="feature">
        <h3>1. Blade Layout Inheritance</h3>
        <p>
            This page uses <strong>&#64;extends</strong> to inherit the
            master layout from <strong>layouts/app.blade.php</strong>.
        </p>
    </div>

    <div class="feature">
        <h3>2. Reusable Layout</h3>
        <p>
            The navigation bar, CSS, and footer are stored in the
            master layout and reused across all pages.
        </p>
    </div>

    <div class="feature">
        <h3>3. Multiple Routes</h3>
        <p>
            The application contains separate routes for the
            Home, About Us, and Contact pages.
        </p>
    </div>

    <div class="feature">
        <h3>4. Asset Management</h3>
        <p>
            The stylesheet is stored inside the public folder and
            loaded using Laravel's asset helper.
        </p>
    </div>

@endsection