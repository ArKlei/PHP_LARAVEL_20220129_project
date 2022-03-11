@extends('layouts.app')

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
        
          <p><h4 style="text-align:center; color:gold">Add article image</h4><p>

        </div>

          <div class="card-body">

            <div class="row mb-3">

            <form method='POST' ectype="multipart/form-data" action='{{route('article_image.store')}}'>
             @csrf
            
            <div class="row mb-3">
                    
              <label for="text" class="col-md-4 col-form-label text-md-end">Image name</label>
                      
              <div class="col-md-6">
            
                <input id="image_alt" class="form-control" type='text' name="image_alt" placeholder="" required autofocus />
                
              </div>
                
            </div>

            <div class="row mb-3">
                    
              <label for="file" class="col-md-4 col-form-label text-md-end">Choose image</label>
                    
                <div class="col-md-6">
              
                  <input id="image_src" class="form-control" type='file' name="image_src" placeholder="" required autofocus />
                
                </div>
                
            </div>

            <div class="row mb-3">
                    
              <label for="number" class="col-md-4 col-form-label text-md-end">Image width</label>
                    
                <div class="col-md-6">
            
                  <input id="image_width" class="form-control" type='number' min="0" max="200" name="image_width" placeholder="" required autofocus />
                
                </div>
                
            </div>

            <div class="row mb-3">
                    
              <label for="number" class="col-md-4 col-form-label text-md-end">Image height</label>
                    
                <div class="col-md-6">
            
                  <input id="image_height" class="form-control" type='number' min="0" max="200" name="image_height" placeholder="" required autofocus />
                
                </div>
                
            </div>

            <div class="row mb-3">
                    
              <label for="text" class="col-md-4 col-form-label text-md-end">Image class</label>
                    
                <div class="col-md-6">
            
                  <input id="image_class" class="form-control" type='text' name="image_class" placeholder="" required autofocus />
                
                </div>
                
            </div>

            <div class="row mb-3">
                    
              <label for="number" class="col-md-4 col-form-label text-md-end">Article ID</label>
                    
                <div class="col-md-6">
                  
                    <select class="form-control" name="article_id" value=''>
                            @foreach ($articles as $value)
                              <option value="{{$value->id}}">Article ID: {{$value->id}}</option>
                            @endforeach   
                    </select>
                    <p><p>

                    <button class="btn btn-primary" style="width:100px" type='submit'>Add</button>
        
                    <a class="btn btn-secondary" style="width:100px" href="{{route('article_image.index')}}">Back</a>
   
                </div>
                
            </div>
    
          </form>
          
          </div>

        </div>

      </div>

    </div>

  </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
           
</body>
</html>

@endsection