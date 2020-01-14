<p>Technical knowledge</p>

      <span>Little</span>
      <input id="myInput" type="range" min="1" max="5">
      <span>A lot</span>
      <div class="modal-body" style="max-width:480px;"> <span id="demo"></span></div>


      <script>
        var text;
        var slider = document.getElementById("myInput");
        var result = document.getElementById("demo");

      myInput.oninput = function() {
        switch(slider = this.value) {
          case (slider = "1"):
            text = "The investor has no technical background nor has he/she been working with similar products or businesses. Use common language and refrain from using technical terms. Use words that everybody would understand - both your own family members and friends";
          break;
          case (slider = "2"):
          text = "Little tech knowledge. Use of tech jargon should be kept simple and to a minimum";
          break;
          case (slider = "3"):
          text = "The investor has some technical understanding of your product or business. Don’t use too technical words but you can use some specific terms if it helps the investor understand your product or business idea better";
          break;
          case (slider = "4"):
          text = "A fair amount of tech knowledge. Technical terms can be used without getting into details and specifics";
          break;
          case (slider = "5"):
          text = "The investor has a technical background in the field of your product or business. You can use the technical terms where you see fit if it serves a purpose. If it does not help your message get across easily, you should rather just keep your language simple.";
          break;
        }
        result.innerHTML = text;
      }
      </script>

<p>Area of expertise</p>

  <span>Little</span>
  <input id="myInput1" type="range" min="1" max="5">
  <span>A lot</span>

      <div  class="modal-body" style="max-width:480px;"> <span id="demo1"></span></div>

      <script>
        var text1;
        var slider1 = document.getElementById("myInput1");
        var result1 = document.getElementById("demo1");

      myInput1.oninput = function() {
        switch(slider1 = this.value) {
          case (slider1 = "1"):
            text1 = "The investor has very little knowledge about your area of business. Consider how you can convince the investor why there is a match between you and the investor";
          break;
          case (slider1 = "2"):
          text1 = "Has a bit of knowledge. Use the little they know already to explain";
          break;
          case (slider1 = "3"):
          text1 = "The investor has some knowledge about your area of business. Maybe they are a potential customer or one of their relatives is or the investor has worked with businesses that share some similarities with your’s. Why are you a good match?";
          break;
          case (slider1 = "4"):
          text1 = "Moderate familiarity with your market, perhaps they're customer. They know broadly the area of your expertise, so try to find things to surprise them with";
          break;
          case (slider1 = "5"):
          text1 = "The investor is an expert on your market, and knows almost as much as you do about. You need to convince the investor why your solution will fix the problem that they know very well";
          break;
        }
        result1.innerHTML = text1;
      }
      </script>
