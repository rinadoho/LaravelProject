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