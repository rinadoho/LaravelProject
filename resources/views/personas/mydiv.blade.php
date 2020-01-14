<div id="myDIV" style="display:none; margin-bottom:30px; margin-top:10px;">
<span class="border border-dark rounded" style="margin:30px;"> ⓘ Description </span>
<span class="border border-dark rounded" style="margin:30px;"> 💡 Example </span>
@foreach ($personas as $persona)
<button type="button" class="border border-dark rounded" style="margin:30px;" data-toggle="popover" title="Trouble finding your words?" data-content="<a href='https://blog.pitcherific.com/en/maintaining-knowledge-effective-communication'>Read our article about how to pitch to people with {{$persona->description}} tech knowledge</a>"> 📜Inspiration &nbsp</button>
@endforeach
<script>
  $('[data-toggle="popover"]').popover({
    html: true
  })
</script>
</div>