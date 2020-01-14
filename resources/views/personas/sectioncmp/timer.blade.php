<div class="dropdown btn">
    <label id="TemplateSelectorLabel">
    <span>Set timer</span>
    </label>
    <br />
    <a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle btn btn-secondary" href="#">
      <span id="selected2">0:30</span><span class="caret"></span>
    </a>
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