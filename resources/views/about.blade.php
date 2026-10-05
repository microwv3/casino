@extends('layouts.app')

@section('title', 'About Us')

@section('content')

    <h1>About the Project</h1>

    <p>
        This project is a multi-page Laravel web application created
        as part of a Web Development laboratory activity. It demonstrates
        how a multi-page website can be organized and managed using
        Laravel Blade templates.
    </p>

    <p>
        The project uses a reusable master layout containing the common
        navigation, styling, and footer. Individual pages extend this
        layout and provide their own content through Blade's
        <strong>&#64;extends</strong> and <strong>&#64;section</strong>
        directives.
    </p>

    <p>
        The project also demonstrates the use of Laravel's Blade layout
        inheritance, routing, view organization, and asset management
        in building a simple multi-page web application.
    </p>


    <div class="about-section">

        <h2>About the Developer</h2>

        <h3>Maleck Achilles Andrei Casiño</h3>

        <p class="developer-info">
            <strong>Course & Year:</strong> BSIT 3rd Year
        </p>

        <p>
            I am a third-year BSIT student who is still exploring and learning
            more about programming and web development. I enjoy working on
            projects where I can actually apply what I learn instead of just
            studying the concepts. I sometimes find programming challenging,
            but I like figuring things out and learning from the mistakes I
            make along the way. Through different school projects and
            activities, I am slowly improving my skills and becoming more
            comfortable with developing applications and solving problems.
        </p>

    </div>


    <div class="about-section">

        <h2>Contribution to the Project</h2>

        <p>
            As the sole developer of this project, I was responsible
            for planning and developing the multi-page website,
            organizing the Blade views, creating the master layout,
            configuring the application routes, and managing the CSS
            assets.
        </p>

        <p>
            I also tested the navigation and page structure to ensure
            that the different pages worked correctly within the
            Laravel application.
        </p>

    </div>

@endsection