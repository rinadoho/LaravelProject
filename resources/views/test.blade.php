<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/app.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <title>Test</title>
</head>

<body>
  <!-- <div id="id01">

      <div class="range">
          <input type="range" min="1" max="5" steps="1" value="1" id="myInput">
      </div>

      <ul class="range-labels">
          <li class="active selected">Limited skills</li>
          <li class="hide">Lorem Ipsum</li>
          <li class="hide">Some other lorem ipsum</li>
          <li class="hide">more lorem ipsum</li>
          <li class="hide">Experienced/Master</li>
      </ul>

      <script>
        var sheet = document.createElement('style'),  
        $rangeInput = $('.range input'),
        prefs = ['webkit-slider-runnable-track', 'moz-range-track', 'ms-track'];
        
        document.body.appendChild(sheet);

        var inval = document.getElementsByTagName("INPUT")[0].value;

        console.log('value is: ' + inval);
        
        var getTrackStyle = function (el) {  
          var curVal = el.value,
          style = '';
          
          // Set active label
          
          $('.range-labels li').removeClass('active selected').addClass('hide');
          var curLabel = $('.range-labels').find('li:nth-child(' + curVal + ')');
          
          curLabel.addClass('active selected').removeClass('hide');
          curLabel.prevAll().addClass('hide').removeClass('active selected');
        
          return style;
        }
        
        $rangeInput.on('input', function () {
          sheet.textContent = getTrackStyle(this);
        });
        
    </script>
  </div> -->

  <!-- <div id="id01">
  
      <p>The switch statement will execute a block of code based on your input.</p>

      <input id="myInput" type="range" min="1" max="5">

      <div>Value: <span id="demo" style="color:black;"></span></div>


      <script>
        var text;
        var slider = document.getElementById("myInput");
        var result = document.getElementById("demo");

      myInput.oninput = function() {
        switch(slider = this.value) {
          case (slider = "1"):
            text = "Banana is good!";
          break;
          case (slider = "2"):
          text = "I am not a fan of orange.";
          break;
          case (slider = "3"):
          text = "How you like them apples?";
          break;
          case (slider = "4"):
          text = "How you like them?";
          break;
          case (slider = "5"):
          text = "hello1";
          break;
        }
        result.innerHTML = text;
      }
      </script>
  </div> -->

  <div id="first">
@include('slider')
    </div>

    <div id="second">
@include('slider2')
    </div>

  <br />
  <br />
  <br />
  <br />

  <!-- <div id="id02">
  
      <p>The switch statement will execute a block of code based on your input.</p>

      <input id="myInput2" type="range" min="1" max="5">

      <div>Value: <span id="demo2" style="color:black;"></span></div>


      <script>
        var text2;
        var slider2 = document.getElementById("myInput2");
        var result2 = document.getElementById("demo2");

      myInput.oninput = function() {
        switch(slider2 = this.value) {
          case (slider2 = "1"):
            text2 = "Banana is good!";
          break;
          case (slider2 = "2"):
          text2 = "I am not a fan of orange.";
          break;
          case (slider2 = "3"):
          text2 = "How you like them apples?";
          break;
          case (slider2 = "4"):
          text2 = "How you like them?";
          break;
          case (slider2 = "5"):
          text2 = "hello1";
          break;
        }
        result2.innerHTML = text2;
      }
      </script>
  </div> -->

  <!-- <div class="range">
        <input type="range" min="1" max="5" steps="1" value="1">
        <div class="ulid"><p> </p></div>
    </div>

    <ul class="" style="margin: 18px 0 0; padding: 0; list-style: none;">
        
    </ul>-->
    

</body>


</html>