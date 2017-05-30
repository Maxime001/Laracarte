@extends('layout.default')

@section('content')
    <div class="container">
        <h2> What is Laracarte</h2>
        <p> Laracarte is a clone app of <a href="https://laramap.com" target="_blank">Laramap.com</a> .</p>

        <div class="row">
            <div class="col-md-6">
                <p class="alert alert-warning">
                    <strong>
                        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                        This app has been built by <a href="https://twitter.com/etsmo">@etsmo</a> for learning purposes.
                    </strong>
                </p>
            </div>
        </div>
        <p> Feel free to help to improve the <a href="#">source code</a>.</p>

        <hr>

        <h2>What is laramap</h2>
        <p>Laramap is the website by which Laracart was inspired</p>
        <p>More info <a href="https://laramap.com/p/about">Here</a> </p>

        <hr>

        <h2>Which tools and services are user in Laracarte ? </h2>
        <p>Basically it's built on laravel &amp; Bootstrap. But there's a bunch of services used for email and other sections.</p>

        <ul>
            <li>Laravel</li>
            <li>Bootstrap</li>
            <li>Amazon S3</li>
            <li>Mandrill</li>
            <li>Google MAPS</li>
            <li>Gravatar</li>
            <li>Anthony Martin's Geolocation Package</li>
            <li>Michel Fortin's Markdown Parser Package</li>
            <li>Heroku</li>
        </ul>
    </div>
@stop