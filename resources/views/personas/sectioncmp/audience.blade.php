<div class="dropdown btn">
    <label id="TemplateSelectorLabel">
      <span>The audience</span>
    </label>
    <br />
    <a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="btn btn-secondary dropdown-toggle" href="#">
      <span id="selected3" data-toggle="popover" data-html='true'
        data-popover-content="#yourContentHere">Choose Persona</span><span class="caret"></span>
    </a>
    <ul class="dropdown-menu m3">
      <div>
        <li class="dropdown-item"> <a href="#">an investor</a> </li>
          &nbsp
          @foreach ($personas as $persona)
            <li class="dropdown-item"><a href="#">{{ $persona->persona_name}}</a> 
              <a href="/personas/{{$persona->id}}" data-toggle="modal" data-target="#mod{{$persona->id}}">✎</a>
              <form method="POST" action="/personas/{{$persona->id}}" style="display:inline;">
              {{ csrf_field() }}

              {{method_field('DELETE')}}
              <button class="btn-danger" type="submit">x</button>   
              </form>
            </li>
            &nbsp
          @endforeach
        <li class="dropdown-item"><button class="btn btn-info" data-toggle="modal" data-target="#mod">Add new persona</button></li>
      </div>
    </ul>

    <div id="yourContentHere" style="display:none;">
    <div class="popover-body">
        <h3>Tell us more about your audience!</h3>

        <form action="/personas" method="POST" id="pform3">
        {{ csrf_field() }}

            What's their name?<br>
            <input type="text" name="persona_name" id="name" value="{{old('persona_name')}}" placeholder="Name" ><br>
            Age?<br>
            <input class="input" style="max-width:50px;" id="age" type="text" name="age" value="{{old('age')}}" ><br>
            Gender? <br>
            <select name="gender">
                <option value="" selected disabled id="gender"> Pick gender </option>
                <option value="female">Female</option>
                <option value="male">Male</option>
                <option value="other">Other</option>
            </select> <br>
            What role do they have in the company?<br>
            <input type="text" style="max-width:150px;" id="role" name="role" value="{{old('role')}}" ><br>
            What's their technical knowledge?<br>
            <textarea name="description" id="description" placeholder="Write your description here..." style="height:100px;" >{{old('description')}}</textarea><br>

            <button class="btn btn-primary" id="pform3" form="pform3" type="submit">Add my persona</button> 
        </form>
    </div>
</div>

    <script>
      $('[data-toggle="popover"]').popover({
    html: true,
    content: function () {
        var content = $(this).attr("data-popover-content");
        return $(content).find(".popover-body").clone();
    }
}).on('click', function(){
      // had to put it within the on click action so it grabs the correct info on submit
      $('#pform3').click(function(){
        $.post('/personas',  {
            name: $('#name').val(),
            age: $('#age').val(),
            gender: $('#gender').val(),
            role: $('#role').val(),
            description: $('#description').val()
        })
      })
    })
    </script>

    <script>
        $('.m3 a').click(function(){
        $('#selected3').text($(this).text());
        });
    </script>
</div>

