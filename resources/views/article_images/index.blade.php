@extends('../layouts.app')

@section ('content')

<div id="mySidenav" class="sidenav">
<a href="{{route('home')}}" id="welcome">Main</a>
<a href="{{route('article.index')}}" id="article">Articles</a>
  <a href="{{route('article.create')}}" id="create_article">Add article</a>
  <a href="{{route('article_category.index')}}" id="article_category">Article categories</a>
  <a href="{{route('article_category.create')}}" id="create_article_category">Add article categories</a>
  <a href="{{route('article_image.index')}}" id="article_image">Article images</a>
  <a href="{{route('article_image.create')}}" id="create_article_image">Add article image</a>
</div>


    <div class="container">
    <p><h1 style="text-align:center; font-size:50px; color:gold">Present students in all groups and schools</h1><p>


@if (count($students) == 0)
    <p>There is no students in the database yet</p>
@endif

<table class="table table-striped">
<tr>
    <th>Id</th>
    <th>Name</th>
    <th>Surname</th>
    <!--<th>Group ID</th>-->
    <th>Group Name</th>
    <th>School Name</th>
    <th>Image address (url)</th>
</tr>


@foreach ($students as $student)
    <tr>
        <td>{{$student->id}}</td>
        <td>{{$student->name}}</td>
        <td>{{$student->surname}}</td>
        <!--<td>{{$student->group_id}}</td>-->
        <td>{{$student->studentAttendanceGroup->name}}</td>
        <td>{{$student->studentAttendanceGroup->attendanceGroupSchool->name}}</td>
        <td>{{$student->image_url}}</td>
        <td>
            <a class="btn btn-primary" style="width:100px" href="{{route('student.edit', [$student])}}">Edit</a><p>
            <p><a class="btn btn-secondary" style="width:100px" href="{{route('student.show', [$student])}}">Show</a>
<p>
            <form method="post" action='{{route('student.destroy', [$student])}}'>
                @csrf
                <button class="btn btn-danger" style="width:100px" type="submit">Delete</button>
            </form>
        </td>
    </tr>
@endforeach
</table>


{{-- create forma - mums reikia nuorodos ar mygtuko --}}
<a class="btn btn-primary" href="{{route('student.create')}}">Include new student's data into database</a>
<p>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

@endsection

