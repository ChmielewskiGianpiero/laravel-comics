<header>
    <div class="container">
        <nav class="row align-items-baseline py-3">
            <div class="col">
                <img src="{{ Vite::asset('resources/images/dc-logo.png')}}" alt="">
            </div>
            <div class="col">
               <ul class="d-flex gap-4">
                    <li><a href="#">CHARACTERS</a></li>
                    <li><a href="{{ route('comics') }}">COMICS</a></li>
                    <li><a href="#">MOVIES</a></li>
                    <li><a href="#">TV</a></li>
                    <li><a href="#">GAMES</a></li>
                    <li><a href="#">COLLECTIBLES</a></li>
                    <li><a href="#">VIDEOS</a></li>
                    <li><a href="#">FANS</a></li>
                    <li><a href="#">NEWS</a></li>
                    <li><a href="#">SHOP</a></li>
               </ul>
            </div>
            <div class="col">
                <input type="text" placeholder="Search">
            </div>
        </nav>
    </div>
    <img class="bg-hero" src="{{ Vite::asset('resources/images/jumbotron.jpg')}}" alt="">
</header>