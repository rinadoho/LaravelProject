<button type="button" class="btn btn-secondary" data-toggle="popover" data-html='true'
        data-popover-content="#yourContentHere">Pick Audience</button>

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