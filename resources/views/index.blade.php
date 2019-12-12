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

    <div class="bigDiv">
      <div class="smolDiv">    
            <input type="text" class="input ptitle" placeholder="✎ My awesome pitch" maxlength="36" name="pitchTitle">  
      </div>

      

      <div class="options"> 
              
        <div class="dropdown btn">
                <label>
                  <span>Template</span>
                </label>
                <br />
              <a aria-expanded="false" aria-haspopup="true" role="button" 
              data-toggle="dropdown" class="dropdown-toggle btn btn-secondary" href="" max-width="100">
                <span id="selected1">Pick Template</span><span class="caret"></span></a>
              <ul class="dropdown-menu m1">
                  <li class="dropdown-item"><a>Elevator Pitch</a></li>
                  <li class="dropdown-item"><a>One Sentence pitch</a></li>
              </ul>
              <script>
              $('.m1 a').click(function(){
              $('#selected1').text($(this).text());
              });
              </script>
          </div>

        <div class="dropdown btn">
              <label id="TemplateSelectorLabel">
              <span>Set timer</span>
              </label>
              <br />
              <a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle btn btn-secondary" href="#">
                <span id="selected2">0:30</span><span class="caret"></span></a>
              <ul class="dropdown-menu m2">
                  <li class="dropdown-item"><a>1:00</a></li>
                  <li class="dropdown-item"><a>0:30</a></li>
              </ul>
              <script>
              $('.m2 a').click(function(){
              $('#selected2').text($(this).text());
              });
              </script>
          </div>

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
                                <form method="POST" action="/personas/{{$persona->id}}" style="display:inline;">
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
      
        <div class="dropdown btn">
              <label id="TemplateSelectorLabel">
              <span>The goal</span>
              </label>
              <br />
              <a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="btn btn-secondary dropdown-toggle" href="#">
                <span id="selected4">To get what?</span><span class="caret"></span></a>
              <ul class="dropdown-menu m4">
                  <li class="dropdown-item"><a>a meeting</a></li>
                  <li class="dropdown-item"><a>a deal</a></li>
              </ul>
              <script>
              $('.m4 a').click(function(){
              $('#selected4').text($(this).text());
              });
              </script>
        </div>

      </div>

      <div class="sections flex-center">

        <ul class="list-unstyled" style="display: block;">   
            <li>
              <div class="row">

                <div class="col-md-7">     
                  <input type="text" placeholder="Click to change title" value="My company...">
                </div>

                <div class="col-sm-5 col-md-5">
                  <div>
                    <small>
                    <span class="calculation__current-characters safe">0 of recommended 67 chars 0 seconds of recommended 5 seconds</span>    
                    </small>
                  </div>
                </div>
              </div>

              <div>
                  <textarea class="col-md-12" 
                    placeholder="✎ the company's name" 
                    style="overflow: hidden; overflow-wrap: break-word; height: 130px;"></textarea>
              </div>
            </li> 

            <li>
              <div class="row">

                <div class="col-md-7">     
                  <input type="text" placeholder="Click to change title" value="...develops/sells...">
                </div>
                
                <div class="col-sm-5 col-md-5">
                  <div>
                    <small>
                    <span class="calculation__current-characters safe">0 of recommended 67 chars 0 seconds of recommended 5 seconds</span>    
                    </small>
                  </div>
                </div>
              </div>

              <div>
                  <textarea class="col-md-12" 
                    placeholder="✎ a defined product" 
                    style="overflow: hidden; overflow-wrap: break-word; height: 130px;"></textarea>
              </div>
            </li>

            <li>
              <div class="row">

                <div class="col-md-7">     
                  <input type="text" placeholder="Click to change title" value="...which helps...">
                </div>
                
                <div class="col-sm-5 col-md-5">
                  <div>
                    <small>
                    <span class="calculation__current-characters safe">0 of recommended 67 chars 0 seconds of recommended 5 seconds</span>    
                    </small>
                  </div>
                </div>
              </div>

              <div>
                  <textarea class="col-md-12" 
                    placeholder="✎ a defined audience" 
                    style="overflow: hidden; overflow-wrap: break-word; height: 130px;"></textarea>
              </div>
            </li> 

            <li>
              <div class="row">

                <div class="col-md-7">     
                  <input type="text" placeholder="Click to change title" value="...with...">
                </div>
                
                <div class="col-sm-5 col-md-5">
                  <div>
                    <small>
                    <span class="calculation__current-characters safe">0 of recommended 67 chars 0 seconds of recommended 5 seconds</span>    
                    </small>
                  </div>
                </div>
              </div>

              <div>
                  <textarea class="col-md-12" 
                    placeholder="✎ solving a problem" 
                    style="overflow: hidden; overflow-wrap: break-word; height: 130px;"></textarea>
              </div>
            </li>

            <li>
              <div class="row">

                <div class="col-md-7">     
                  <input type="text" placeholder="Click to change title" value="...through...">
                </div>
                
                <div class="col-sm-5 col-md-5">
                  <div>
                    <small>
                    <span class="calculation__current-characters safe">0 of recommended 67 chars 0 seconds of recommended 5 seconds</span>    
                    </small>
                  </div>
                </div>
              </div>

              <div>
                  <textarea class="col-md-12" 
                    placeholder="✎ a unique solution" 
                    style="overflow: hidden; overflow-wrap: break-word; height: 130px;"></textarea>
              </div>
            </li>
        </ul>
      </div>

    </div>

    <div class="spacer"><p></p></div>

    <div class="bottom">
      <div class="timer">
        <span>00:00/</span><span style="color:gray;">00:15</span>
      </div>

      <div class="pull-right">
        <button class="btn btn-warning"> <strong> Save </strong> </button>
        <button class="btn btn-success"> <strong> Practice </strong> </button>
      </div>
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
        
@endsection