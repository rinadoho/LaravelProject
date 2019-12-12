@extends('layout')

@section('front-title')
Home
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
                    <li class="dropdown-item"><a>an investor</a></li>
                    <li class="dropdown-item"><a>dfgdg</a></li>
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
                  <input type="text" placeholder="Click to change title" value="Hook">
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
                    placeholder="✎ Click to write. Make a catchy start to get your audience's interest and prepare for the important pitch about your cause." 
                    style="overflow: hidden; overflow-wrap: break-word; height: 130px;"></textarea>
              </div>
            </li> 

            <li>
              <div class="row">

                <div class="col-md-7">     
                  <input type="text" placeholder="Click to change title" value="Hook">
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
                    placeholder="✎ Click to write. Make a catchy start to get your audience's interest and prepare for the important pitch about your cause." 
                    style="overflow: hidden; overflow-wrap: break-word; height: 130px;"></textarea>
              </div>
            </li>

            <li>
              <div class="row">

                <div class="col-md-7">     
                  <input type="text" placeholder="Click to change title" value="Hook">
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
                    placeholder="✎ Click to write. Make a catchy start to get your audience's interest and prepare for the important pitch about your cause." 
                    style="overflow: hidden; overflow-wrap: break-word; height: 130px;"></textarea>
              </div>
            </li> 

            <li>
              <div class="row">

                <div class="col-md-7">     
                  <input type="text" placeholder="Click to change title" value="Hook">
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
                    placeholder="✎ Click to write. Make a catchy start to get your audience's interest and prepare for the important pitch about your cause." 
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
  



@endsection