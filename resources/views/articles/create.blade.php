@extends('layouts.app')

@section ('content')

<div id="mySidenav" class="sidenav">
<a href="{{route('welcome')}}" id="welcome">Main</a>
<a href="{{route('article.index')}}" id="article">Articles</a>
  <a href="{{route('article.create')}}" id="create_article">Add article</a>
  <a href="{{route('article_category.index')}}" id="article_category">Article categories</a>
  <a href="{{route('article_category.create')}}" id="create_article_category">Add article categories</a>
  
</div>

    <div class="container">
        <p><h1 style="text-align:center; font-size:50px; color:gold">Add student</h1><p>

        <form method='POST' action='{{route('student.store')}}'>
            <p>
            <input class="form-control" type='text' name="student_name" placeholder="Student Name"/>
            <p>
            <input  class="form-control" type='text' name="student_surname" placeholder="Student Surname"/>
            <p>
            <select class="form-control" name="student_group_id" value=''>
                    @foreach ($attendance_groups as $value)
                      <option value="{{$value->id}}">{{$value->attendanceGroupSchool->name}}: {{$value->name}}</option>
                    @endforeach   
                     
        </select>
            <p>
            <input  class="form-control" type='text' name="student_image_url" placeholder="Image address (url)"/>
            @csrf
            <p>
            <button class="btn btn-primary" style="width:100px" type='submit'>Add</button>
        
            <a class="btn btn-secondary" style="width:100px" href="{{route('student.index')}}">Back</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
           
</body>
</html>

@endsection