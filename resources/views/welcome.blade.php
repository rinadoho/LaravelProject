@extends('layout')

@section('front-title')
Home
@endsection

@section('content')

<div>
  <p>&nbsp</p>
</div>

<div>
    @guest
    <div class="pull-right">
      <a class="btn btn-info" href="{{ route('login') }}">{{ __('Login') }}</a>
      @if (Route::has('register'))
      <a class="btn btn-info" href="{{ route('register') }}">{{ __('Register') }}</a>
    </div>
      @endif
      @else
      <div class="nav-item dropdown pull-right">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }} <span class="caret"></span>
          </a> <a class="nav-link" href="/personas">Prototype tool</a>

          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
      
          </div>
        </div>   
      @endguest
      </div>

      <br />
      <br /><br />
      &nbsp

    <div class="text-center clearfix">
    <h1 class="container">Welcome</h1>
    <p>Web Development bachelor project</p>
    <p>Business Academy Aarhus</p>
    <p>This bachelor project includes a prototype for the company in question</p>
    <p>Click on either "Login" or "Register is order to proceed to the tool"</p>
    <p>
    <a href=""></a>
    <a href=""></a>
    </p>
    &nbsp
    </div>


@endsection