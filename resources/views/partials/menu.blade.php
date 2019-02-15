
<!-- As a heading -->
<nav class="navbar navbar-light bg-secondary">
  <span class="navbar-brand mb-0 h1">Boutique La Maison</span>
</nav>

<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
@if(Route::is('admin.*') == false)
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}">ACCUEIL <span class="sr-only">(current)</span></a>
      </li>
     <li class="nav-item ">
        <a class="nav-link" href="{{url('product/solde')}}">SOLDES</a>
    </li>
  
  @foreach ($categories as $id => $title)
      <li class="nav-item"><a class="nav-link text-muted active"  href="{{url('categorie', $id)}}">{{strtoupper($title)}}</a></li>
 @endforeach

 @if(Auth::check())
 <li class="nav-item"><a class="nav-link" href="{{url('admin')}}">Admin</a></li>
 @else
  <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Login</a></li>
 @endif
  @else

  <li class="nav-item">
        <a class="nav-link" href="{{url('/')}}">Retour à l'accueil <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
      <a class="nav-link" href="{{route('admin.index')}}">Dashboard</a></li>

      <li class="nav-item">
      <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
      </form></li>
   
     
        

 @endif
 

      
        
 
    </ul>
</li>
 
  </div>
</div>
</nav>