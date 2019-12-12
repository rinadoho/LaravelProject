@extends('layout')

@section('title', 'Persona')

@section('front-title')
Show Persona
@endsection

@section('content')

<div class="dropdown btn">
                <label id="TemplateSelectorLabel">
                <span>The audience</span>
                </label>
                <br />
                <a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="btn btn-secondary dropdown-toggle" href="#">
                  <span id="selected3">Choose Persona</span><span class="caret"></span></a>
                <ul class="dropdown-menu m3">
                
                        <div>

                        <div class="dropdown btn">
                
                                <li class="dropdown-item"> <a href="#">an investor</a> </li>
                                &nbsp
                                @foreach ($personas as $persona)
                                <li class="dropdown-item"><a href="#">{{ $persona->persona_name}}</a> 
                                <a href="/personas/{{$persona->id}}/edit" data-toggle="modal" data-target="#mod1">✎</a>
                                <form method="POST" action="/personas/{{$persona->id}}">
                        {{ csrf_field() }}

                        {{method_field('DELETE')}}
                        <button class="btn-danger" type="submit">x</button>   
                        </form></li>
                        &nbsp
                        @endforeach
                        <li class="dropdown-item"><button class="btn btn-info" data-toggle="modal" data-target="#mod">Add new persona</button></li>
                        </div>
                </ul>

                <script>
                        $('.m3 a').click(function(){
                        $('#selected3').text($(this).text());
                        });
                </script>
          </div>


<div class="modal right fade" id="mod" role="dialog" tabindex="-1"> 
                <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <form action="/personas" method="POST">
                        {{ csrf_field() }}
                                <h1>
                                <input type="text" name="persona_name" value="{{old('persona_name')}}" placeholder="Name" required >
                                </h1>                                     
                                        <div>
                                        <label for="age">Age</label>
                                        <input class="input" style="max-width:50px; margin-left:23px;" type="text" name="age" value="{{old('age')}}" required>
                                        </div>

                                        <div style="float:right; position:relative; margin-top:-35px; margin-right:90px;">
                                        <label for="description" style="position:absolute;top:0px; left:-80px;">Description</label>
                                        <textarea name="description" placeholder="body" style="max-width:150px; height:100px;" required>{{old('description')}}</textarea>
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
                                        <input type="text" style="max-width:70px; margin-left:20px;" name="role" value="{{old('role')}}" required>
                                        </div>

                                        <div id="first" style="text-align:center; max-width:100%;">
                                        <br />
                                        @include('slider')
                                        </div>

                                        <div class="flex-center">
                                        <button class="btn btn-primary" type="submit">Add my persona</button>   
                                        </div>
                                </form>  
                        </div>
                </div>
        </div>

                <div class="modal right fade" id="mod1" role="dialog" tabindex="-1"> 
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                <form method="POST" action="/personas/{{$persona->id}}"> 
                {{ csrf_field() }}

                {{method_field('PATCH')}}
                <h1><input type="text" name="persona_name" value="{{ $persona->persona_name }}"></h1>
                
                
                        <div>
                        <label for="age">Age</label>
                        <input type="text" style="max-width:50px; margin-left:23px;" name="age" value="{{ $persona->age }}" required>
                        </div>
                        <div style="float:right; position:relative; margin-top:-35px; margin-right:90px;">
                        <label for="description" style="position:absolute;top:0px; left:-80px;">Description</label>
                        <textarea name="description" placeholder="body" style="max-width:150px; height:100px;" required>{{ $persona->description }}</textarea>
                        </div>
                        <div>
                        <label for="gender" value="{{ $persona->gender }}">Gender</label>
                        <select name="gender" required>
                                <option value="{{ $persona->gender }}" selected disabled> {{ $persona->gender }}</option>
                                <option value="female">Female</option>
                                <option value="male">Male</option>
                                <option value="other">Other</option>
                        </select>
                        </div>
                        <div>
                        <label for="role">Role</label>
                        <input type="text" style="max-width:70px; margin-left:20px;" name="role" value="{{ $persona->role }}" required>
                        </div>

                        <!-- <div id="second" style="text-align:center; max-width:100%;">
                        @include('slider2')
                        </div> -->

                        <div></div>

                        <div class="flex-center">
                        <button class="btn btn-primary" type="submit">Save modfications</button>   
                        </div>
                      
                </form> 
                </div>
                </div>
                </div>

                <input id="settings-btn" type="checkbox" class="settings-btn">
    <label for="settings-btn" class="settings-box-element"><img src="/images/theme-edit.png" width="30" height="35"></label>
    <!-- the white box that contains the buttons -->
    <div class="buttons-wrapper settings-box-element"></div>

    <!-- background styles -->

    <!-- light background (#eaeaea) -->
    <input id="default" class="default" type="radio" name="layout" checked>
    <label for="default" class="layout-buttons settings-box-element">Default</label>
    <!-- dark background (#494949) -->
    <input id="dark-layout" class="dark-layout" type="radio" name="layout">
    <label for="dark-layout" class="layout-buttons settings-box-element">Dark</label>
    <!-- image background (you can use any image of your choice) -->
    <input id="coffee1-layout" class="coffee1-layout" type="radio" name="layout">
    <label for="coffee1-layout" class="layout-buttons settings-box-element">Coffee1</label>
    <!-- pattern background (you can use any pattern of your choice) -->
    <input id="coffee2-layout" class="coffee2-layout" type="radio" name="layout">
    <label for="coffee2-layout" class="layout-buttons settings-box-element">Coffee2</label>
                @endsection