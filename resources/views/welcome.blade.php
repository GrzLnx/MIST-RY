@extends( 'templates.welcome-page' )

@section('page-title', 'Welkom')

@section( 'content' )
    <main>
        <section class="grid-parent" id="section--articles" data-section-background="color-accent--first">

            <div class="articles-standard grid-child">
                <h1>Our recent articles</h1>
                <!-- TODO:: add before with line -->
            </div>

        </section>
        <section class="grid-parent" id="section--welcome">

            <div class="projects-standard grid-child grid-child--d-7">
                <h2>New projects</h2>
            </div>
            <div class="projects-standard grid-child grid-child--d-5">
                <h2>Completed projects</h2>
            </div>

        </section>
    </main>
@endsection
