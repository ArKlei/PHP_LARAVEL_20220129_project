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

<div class="row justify-content-center">

  <div class="col-md-8">

    <div class="card">

      <div class="container-fluid">

        <div class="card-header" style="margin-top:20px">
        
          <p><h4 style="text-align:center; color:gold">Edit data of </h4><h4 style="text-align:center; color:black">{{$article->title}}</h4><p>

          </div>

        <div class="card-body">

          <div class="row mb-3">  

          <form method='POST' action='{{route('article.update', [$article])}}' >
          
          <div class="row mb-3">
                      
            <label for="email" class="col-md-4 col-form-label text-md-end">Title</label>
                              
              <div class="col-md-6">

                <input class="form-control" type='text' name="article_title" value='{{$article->title}}'/>
               
              </div>
            
          </div>
        
          <div class="row mb-3">
                      
            <label for="email" class="col-md-4 col-form-label text-md-end">Excerpt</label>
                                        
              <div class="col-md-6">    

                <input class="form-control" type='text' name="article_excerpt" value='{{$article->excerpt}}'/>
             
              </div>
            
          </div>
          
          <div class="row mb-3">
                      
            <label for="email" class="col-md-4 col-form-label text-md-end">Description</label>
                                                  
              <div class="col-md-6">  

                <input class="form-control" type='text' name="article_description" value='{{$article->description}}'/>
           
              </div>
            
          </div>
          
          <div class="row mb-3">
                      
            <label for="email" class="col-md-4 col-form-label text-md-end">Author</label>
                                                            
              <div class="col-md-6">  

                <input class="form-control" type='text' name="article_author" value='{{$article->author}}'/>
         
              </div>
            
          </div>

          <div class="row mb-3">
                      
            <label for="email" class="col-md-4 col-form-label text-md-end">Article category ID</label>
                                                                      
              <div class="col-md-6">    
        
                <select class="form-control" name="article_category_id" value=''>
                  
                  @foreach ($article_categories as $value)
                    
                    @if ($value->id == $article->article_category_id)
                      
                      <option value="{{$value->id}}" selected>{{$value->title}}</option>
                    
                      @else
                    
                        <option value="{{$value->id}}">{{$value->title}}</option>
                    
                      @endif
                  
                   @endforeach   
                     
                </select>
        
                @csrf
                <p><p>
                <button class="btn btn-primary" style="width:100px" type='submit'>Update</button>
                <a class="btn btn-secondary" style="width:100px"  href="{{route('article.index')}}">Back</a>

              </div>
            
          </div>
    
          </form> 
        
        </div>
      
      </div>
   
    </div>
   
  </div>
   
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>

@endsection

