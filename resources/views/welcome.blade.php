@extends('layouts.app')

@section ('content')

<div id="mySidenav" class="sidenav">
<a href="{{route('home')}}" id="welcome">Main</a>
<a href="{{route('article.index')}}" id="article">Articles</a>
  <a href="{{route('article.create')}}" id="create_article">Add article</a>
  <a href="{{route('article_category.index')}}" id="article_category">Article categories</a>
  <a href="{{route('article_category.create')}}" id="create_article_category">Add article categories</a>
  
</div>

    <div class="container">

        <p><div class="text-center"><img src="https://bit.lt/wp-content/themes/bit/assets/img/_bit-intro.jpg" class="rounded" style="width:500px; height:auto"></div>
        <p>
          <div class="text-center text-dark" style="font-size:100px">BIT Student project "Articles"</div>
        <p>
        <div class="text-center text-dark" style="font-size:50px">Made by BIT alumni</div>
        </div>
    </body>
</html>

@endsection
