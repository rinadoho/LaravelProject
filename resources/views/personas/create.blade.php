@extends('layout')

@section('title', 'Persona')

@section('front-title')
Create Personas
@endsection

@section('content')


        <h1>Create persona</h1>
        <form action="/personas" method="POST" enctype="multipart/form-data">

        {{ csrf_field() }}
        <div>
            <label for="name">Name</label>
            <input type="text" name="persona_name" value="{{old('persona_name')}}" required >
        </div>
        <div>
            <label for="age">Age</label>
            <input type="text" name="age" value="{{old('age')}}" required>
        </div>
        <div>
            <label for="gender">Gender</label>
            <input type="text" name="gender" value="{{old('gender')}}" required>
        </div>
        <div>
            <label for="role">Role</label>
            <input type="text" name="role" value="{{old('role')}}" required>
        </div>
        <!-- <div>
        <label for="profile_image" class="col-md-4 col-form-label text-md-right">Profile Image</label>
        <input id="profile_image" type="file" class="form-control" name="profile_image">
        </div> -->
        <div class="form-group">
        <label>Select File for Upload</label>
       <input type="file" name="select_file" />
        <div>
            <label for="description">Description</label>
            <textarea name="description" placeholder="body" required>{{old('description')}}</textarea>
        </div>
        <div>
            <button class="c-button" type="submit" class="btn btn-primary">Submit</button>    
        </div>
</form>
<!-- <img src="/images/{{ Session::get('path') }}" width="300" /> -->
        
@endsection