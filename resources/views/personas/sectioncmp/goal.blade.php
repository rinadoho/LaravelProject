<div class="dropdown btn">
    <label id="TemplateSelectorLabel">
      <span>The goal</span>
    </label>
    <br />
    <a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="btn btn-secondary dropdown-toggle" href="#">
      <span id="selected4">To get what?</span><span class="caret"></span>
    </a>
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