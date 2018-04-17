@extends('master')
<head>
    <link href="{{ asset('css/whatsnew.css') }}" rel="stylesheet">
</head>
@section('main-body')
    <h2>What's New</h2>
    <section class="section-features" id="features">

        <div class="wrapper">
            <div class="one">
                <h3>Article Title</h3>
                <br />
                <img src="{{ asset('images/gallery/gallery-3_opt.jpg') }} " class="image">
            </div>
            <br />

            <div class="two">
                <hr class="hrtag">
                <br />
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries,
                    but also the leap into electronic typesetting, remaining essentially unchanged.
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <br />
                <button>Read more</button>

            </div>
        </div>
        <br />
        <br />
        <hr />
        <br />
        <br />
        <div class="wrapper">
            <div class="one">
                <h3>Article Title</h3>
                <br />
                <img src="{{ asset('images/gallery/gallery-3_opt.jpg') }}" class="image">
            </div>
            <br />

            <div class="two">
                <hr class="hrtag">
                <br />
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries,
                    but also the leap into electronic typesetting, remaining essentially unchanged.
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <br />
                <button>Read more</button>

            </div>
        </div>
        <br />
        <br />
        <hr />
        <br />
        <br />


    </section>

    <section class="section-features calendar" id="calendar">
        <div>I AM THE CALENDAR!</div>
    </section>

    <section class="section-features calendar" id="events">
        <div>I AM THE EVENTS!</div>
    </section>
@endsection
