

@if ($persona->attributes->count())

@foreach ($persona->attributes as $attribute)

<div>
<table  style="text-align:center; width:100%;">
    <tr style="text-align:center; display:inline;"><td>
<div>{{ $attribute->description}}</div></td>
<td><form method="POST" action="/attributes/{{$attribute->id}}" style="display:inline;">
{{ csrf_field() }}

{{method_field('DELETE')}}
<button class="btn btn-danger btn-sm" style="border-radius:100%; height:25px; line-height:1;" type="submit">x</button>   
</form></td>
</tr>
</table>

    
    <input style="margin-left:38%; margin-right:50%;" id="sInput{{$persona->id}}{{ $attribute->id}}" class="sInput{{$persona->id}}{{$attribute->id}}" type="range" min="1" max="5">

    <div style="text-align:center;"><span id="ttext{{$persona->id}}{{$attribute->id}}" style="color:black;" class="ttext{{$persona->id}}{{ $attribute->id}}"></span></div>
    <br />


    <script>

    var textt{{$persona->id}}{{$attribute->id}};
    var sslider{{$persona->id}}{{$attribute->id}} = document.getElementById('sInput{{$persona->id}}{{$attribute->id}}');
    var rresult{{$persona->id}}{{$attribute->id}} = document.getElementById("ttext{{$persona->id}}{{ $attribute->id}}");

    sInput{{$persona->id}}{{$attribute->id}}.oninput = function() {
    switch(sslider{{$persona->id}}{{$attribute->id}} = this.value) {
        case (sslider{{$persona->id}}{{$attribute->id}} = "1"):
        textt{{$persona->id}}{{$attribute->id}} = "{{ $persona->persona_name }} has no {{ $attribute->description}}";
        break;
        case (sslider{{$persona->id}}{{$attribute->id}} = "2"):
        textt{{$persona->id}}{{$attribute->id}} = "{{ $persona->persona_name }} has little {{ $attribute->description}}";
        break;
        case (sslider{{$persona->id}}{{$attribute->id}} = "3"):
        textt{{$persona->id}}{{$attribute->id}} = "{{ $persona->persona_name }} has some {{ $attribute->description}}";
        break;
        case (sslider{{$persona->id}}{{$attribute->id}} = "4"):
        textt{{$persona->id}}{{$attribute->id}} = "{{ $persona->persona_name }} has moderate {{ $attribute->description}}";
        break;
        case (sslider{{$persona->id}}{{$attribute->id}} = "5"):
        textt{{$persona->id}}{{$attribute->id}} = "{{ $persona->persona_name }} has a lot of {{ $attribute->description}}";
        break;
    }
    rresult{{$persona->id}}{{$attribute->id}}.innerHTML = textt{{$persona->id}}{{$attribute->id}};
    }
    </script>        

</label>
</div>
@endforeach

@endif

<h1 class="flex-center">Add new attribute</h1>
        <form action="/personas/{{$persona->id}}/attributes" method="POST">

        {{ csrf_field() }}
        <div>
            <label class="flex-center" for="description">Description</label>
            <textarea style="position: relative; margin: 0 auto; display: flex;" name="description" placeholder="body">{{old('description')}}</textarea>
        </div>
        <div class="flex-center">
            <button class="btn btn-success btn-sm" style="margin-top:10px;" 
            type="submit">+ Add attribute</button>    
        </div>

</form>