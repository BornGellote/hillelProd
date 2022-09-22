<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <!-- {{--active--}} -->
        @foreach($links as $link)
        <li class="nav-item">
            <a href="{{ $link['link'] }}">{{ $link['name'] }}</a>
        </li>
        @endforeach
    </ul>
  </div>
</nav>
