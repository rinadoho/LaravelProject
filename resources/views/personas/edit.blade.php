

<h1>Edit persona</h1>
<form method="POST" action="/personas/{{$persona->id}}" id="form{{$persona->id}}">
{{ csrf_field() }}

{{method_field('PATCH')}}
        <div>
            <h1>
            <input type="text" name="persona_name" placeholder="persona name" value="{{ $persona->persona_name }}">
        </h1>
        </div>
        <div>
            <label for="age">Age</label>
            <input type="text" name="age" value="{{$persona->age}}" required>
        </div>
        <div>
            <label for="gender">Gender</label>
            <input type="text" name="gender" value="{{$persona->gender}}" required>
        </div>
        <div>
            <label for="role">Role</label>
            <input type="text" name="role" value="{{$persona->role}}" required>
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" placeholder="body"> {{ $persona->description }} </textarea>
        </div>
        </form>

        <div>
            <button type="submit" form="form{{$persona->id}}">Submit</button>   
        </div>

        <form method="POST" action="/personas/{{$persona->id}}">
{{ csrf_field() }}

{{method_field('DELETE')}}
            <button style="background-color:red;" type="submit">Delete</button>   
            </form>

          
<ul>

