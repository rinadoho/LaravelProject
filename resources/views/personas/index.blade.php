@extends('layout')

@section('title', 'Persona')

@section('front-title')
Personas
@endsection

@section('content')

        <div class="top">
                <img class="icon" src="/images/icon.png" alt="icon" width="32" height="32" />
                <img class="cog" src="/images/40031.png" alt="cog" width="15" height="15"/>
        </div>

        <div class="bg-warning" style="max-width:250px; position:fixed; padding:15px; margin-left:35px">
          <p>Disclaimer: This is a prototype for testing the audience builder.The page here was built to recreate the look of Pitcherific's tool,but it holds none of the original functionality.</p>
        </div>


    <div class="bigDiv">

      @include('personas.topoptions')

      @include('personas.pitchinput')

    </div>

    <div class="spacer"><p></p></div>

    @include('personas.fixbottom')

<div class="modal right fade" id="mod" role="dialog" tabindex="-1"> 
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="/personas" method="POST" id="pform">
      {{ csrf_field() }}
        <h1>
        <input type="text" name="persona_name" value="{{old('persona_name')}}" placeholder="Name" required >
        </h1>                
        <div>
        <label for="age">Age</label>
        <input class="input" style="max-width:50px; margin-left:23px;" type="text" name="age" value="{{old('age')}}" required>
        </div>

        <div style="float:right; position:relative; margin-top:-35px; margin-right:90px;">
        <label for="description" style="position:absolute;top:0px; left:-88px;">Description</label>
        <textarea name="description" placeholder="Write your description here..." style="max-width:150px; height:100px;" required>{{old('description')}}</textarea>
        </div>

        <div>
        <label for="gender">Gender</label>
        <select name="gender" required>
                <option value="" selected disabled> Pick gender </option>
                <option value="female">Female</option>
                <option value="male">Male</option>
                <option value="other">Other</option>
        </select>
        </div>

        <div>
        <label for="role">Role</label>
        <input type="text" style="max-width:150px; margin-left:20px;" name="role" value="{{old('role')}}" required>
        </div>

        <div id="first" style="text-align:center; max-width:100%;">
        <br />
        @include('slider')
        </div>
      </form>

      <div class="flex-center">
        <button class="btn btn-primary" form="pform" type="submit">Add my persona</button>   
      </div>
    </div>
  </div>
</div>

        @foreach ($personas as $persona)
        <div class="modal right fade" id="mod{{$persona->id}}" role="dialog" tabindex="-1"> 
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                <form method="POST" action="/personas/{{$persona->id}}" id="form{{$persona->id}}"> 
                {{ csrf_field() }}

                {{method_field('PATCH')}}
                <h1><input type="text" name="persona_name" value="{{ $persona->persona_name }}"></h1>
                
                    <div>
                    <label for="age">Age</label>
                    <input type="text" style="max-width:50px; margin-left:23px;" name="age" value="{{ $persona->age }}" required>
                    </div>
                    <div style="float:right; position:relative; margin-top:-35px; margin-right:90px;">
                    <label for="description" style="position:absolute;top:0px; left:-80px;">Description</label>
                    <textarea name="description" placeholder="body" style="max-width:150px; height:100px;" 
                    required>{{ $persona->description }}</textarea>
                    </div>
                    <div>
                    <label for="gender" value="{{ $persona->gender }}">Gender</label>
                    <select name="gender" value="{{ $persona->gender }}" required>
                      <option value="{{ $persona->gender }}" selected disabled> {{ $persona->gender }}</option>
                      <option value="female">Female</option>
                      <option value="male">Male</option>
                      <option value="other">Other</option>
                    </select>
                    </div>
                    <div>
                    <label for="role">Role</label>
                    <input type="text" style="max-width:150px; margin-left:20px;" name="role" value="{{ $persona->role }}" required>
                    </div>

                    <div id="second" style="text-align:center; max-width:100%;">
                    <br />
                    @include('slider2')
                    </div>  
                </form> 
                <div>
                  @include('personas.show')
                </div>
                <div>
                    <button class="btn btn-primary" style="position: relative; margin: 0 auto; display: flex; margin-top:20px;" type="submit" form="form{{$persona->id}}">Save changes</button>   
                </div>
                </div>
                </div>
                </div>
          @endforeach
        
@endsection