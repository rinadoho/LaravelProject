<p>Technical knowledge</p>

      <input id="myInput2" type="range" min="1" max="5">

      <div  class="modal-body" style="max-width:480px;"> <span id="demo2"></span></div>


      <script>
        var text2;
        var slider2 = document.getElementById("myInput2");
        var result2 = document.getElementById("demo2");

      myInput2.oninput = function() {
        switch(slider2 = this.value) {
          case (slider2 = "1"):
            text2 = "The investor has no technical background nor has he/she been working with similar products or businesses. Use common language and refrain from using technical terms. Use words that everybody would understand - both your own family members and friends";
          break;
          case (slider2 = "2"):
          text2 = "Little tech knowledge. Use of tech jargon should be kept simple and to a minimum";
          break;
          case (slider2 = "3"):
          text2 = "The investor has some technical understanding of your product or business. Don’t use too technical words but you can use some specific terms if it helps the investor understand your product or business idea better";
          break;
          case (slider2 = "4"):
          text2 = "A fair amount of tech knowledge. Technical terms can be used without getting into details and specifics";
          break;
          case (slider2 = "5"):
          text2 = "The investor has a technical background in the field of your product or business. You can use the technical terms where you see fit if it serves a purpose. If it does not help your message get across easily, you should rather just keep your language simple.";
          break;
        }
        result2.innerHTML = text2;
      }
      </script>

<p>Area of expertise</p>
<input id="myInput3" type="range" min="1" max="5">

      <div class="modal-body" style="max-width:480px;"><span id="demo3"></span></div>


      <script>
        var text3;
        var slider3 = document.getElementById("myInput3");
        var result3 = document.getElementById("demo3");

      myInput3.oninput = function() {
        switch(slider3 = this.value) {
          case (slider3 = "1"):
            text3 = "The investor has very little knowledge about your area of business. Consider how you can convince the investor why there is a match between you and the investor";
          break;
          case (slider3 = "2"):
          text3 = "Has a bit of knowledge. Use the little they know already to explain";
          break;
          case (slider3 = "3"):
          text3 = "The investor has some knowledge about your area of business. Maybe they are a potential customer or one of their relatives is or the investor has worked with businesses that share some similarities with your’s. Why are you a good match?";
          break;
          case (slider3 = "4"):
          text3 = "Moderate familiarity with your market, perhaps they're customer. They know broadly the area of your expertise, so try to find things to surprise them with";
          break;
          case (slider3 = "5"):
          text3 = "The investor is an expert on your market, and knows almost as much as you do about. You need to convince the investor why your solution will fix the problem that they know very well";
          break;
        }
        result3.innerHTML = text3;
      }
      </script>
