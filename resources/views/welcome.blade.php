@extends( 'templates.welcome-page' )

@section('page-title', 'Welkom')

@section( 'content' )
    <main>
        <section class="grid-parent" id="section--articles" data-section-background="color-accent--first">

            <div class="articles-standard grid-child">
                <h1>Our recent articles</h1>
                @foreach( $articles as $article )
                    <article>
                        <h4>{{ $article -> title }}</h4>
                        <p>{{ $article -> intro }}</p>
                        <p>Imagine, you are inside a driving schoolbus, and suddenly, the bus stops. </p>
                        <p>What do you do? You cry for help? You scream? Weird.</p>
                        <p>See how you got drawn to thinking something was wrong? Even though a bus stops all the time. That is what they do, they drop people off and they pick people up.</p>
                        <p>But in order to do that, they need to stop.</p>
                    </article>
                @endforeach
                <div class="articles-standard__offer-block object-background-color object-background-color--second-accent">
                    <h4>Would you like to read more articles?</h4>
                    <p>Sure! No problem! However, to keep us healthy, we do need to ask for a small fee. We hope you can understand that.</p>
                    <ul>
                        <li>
                            <h5>16 articles / week</h5>
                            <p>€ 1,00- / month</p>
                        </li>
                        <li>
                            <h5>Pay per view</h5>
                            <p>€ 0,05- / article ( factured once every month )</p>
                        </li>
                    </ul>
                </div>
            </div>

        </section>
        <section class="divider divider--first-accent-to-white"></section>
        <section class="grid-parent" id="section--welcome">

            <div class="projects-standard grid-child grid-child--d-7">

                <h2>New projects</h2>

                <article>
                    <img src="/images/project-1.jpg" alt="Afbeelding voor project 1">
                    <p>Lorem ipsum dolar sit amet</p>
                    <h6><a href="">View project</a></h6>
                </article>
                <article>
                    <img src="/images/project-2.jpg" alt="Afbeelding voor project 1">
                    <p>Lorem ipsum dolar sit amet</p>
                    <h6><a href="">View project</a></h6>
                </article>
                <article>
                    <img src="/images/project-3.jpg" alt="Afbeelding voor project 1">
                    <p>Lorem ipsum dolar sit amet</p>
                    <h6><a href="">View project</a></h6>
                </article>

            </div>
            <div class="projects-standard projects-standard--completed grid-child grid-child--d-5">

                <h2>Completed projects</h2>

                <article>
                    <img src="/images/project-2.jpg" alt="Afbeelding voor project 1">
                    <p>Lorem ipsum dolar sit amet</p>
                    <h6><a href="">View project</a></h6>
                </article>
                <article>
                    <img src="/images/project-1.jpg" alt="Afbeelding voor project 1">
                    <p>Lorem ipsum dolar sit amet</p>
                    <h6><a href="">View project</a></h6>
                </article>

            </div>

        </section>
        <section class="divider divider--white-to-first-accent"></section>
    </main>
@endsection
