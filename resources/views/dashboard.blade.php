@extends('base')

@section('content')

<style>
</style>

  <div class="container">
  <h1 class="title text-white" >My Latest Posts</h1>
  </div>

  <style>
.container{
  align-items: center;
}
    @import url(https://fonts.googleapis.com/css?family=Roboto:400,700,300,100);
body,
html {
  font-family: 'Roboto', sans-serif;
  height: 100%;
  margin: 0;
  padding: 0;
  background-color: black;
}

.header {
  z-index: 100;
  display: flex;
  /*  flex:1;*/
  align-items: center;
  justify-content: center;
  width: 100%;
  background-color: #3b5280;
  border-bottom: 1px solid #425b8d;
  transition: width .2s ease;
  padding: 5px 0;
}

.search-container {
  display: flex;
  flex: 1;
  align-items: center;
  justify-content: center;
  height: 100%;
  transition: width .2s ease;
}

.search-container .searchbar {
  font-weight: 300;
  font-size: 12px;
  height: 98%;
  width: 50%;
  border: 0;
  outline: 0;
  background-color: #364b75;
  font-size: 24px;
  color: #FFF;
  transition: width .2s ease;
  padding: 5px;
  border-radius: 5px;
  border: 1px solid rgba(255, 255, 255, .2);
}

.search-container .searchbar:focus,
.searchbar:active {
  color: #000;
  background-color: #FFF;
  outline: 0;
}

.main-area {
  display: flex;
  flex: 1;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  padding-bottom: 20px;
}

.main-area .post {
  margin-top: 10px;
  height: auto;
  width: 50%;
  background-color: #FFF;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
  transition: width .2s ease;
  border-radius: 8px;
}

.post-head {
  padding: 5px;
}

.post .blog-name {
  font-weight: 800;
  margin-left: 10px;
}

.post .title {
  display: flex;
  align-items: center;
  padding-left: 10px;
  height: auto;
  font-size: 40px;
  font-weight: 700;
  border-bottom: 1px solid #E0E0E0
}

.post .post-content {
  display: inline-block;
  height: auto;
  padding-left: 10px;
  padding-right: 10px;
}

.post .post-controls {
  border-top: 1px solid #E0E0E0;
  height: 20px;
  padding-left: 10px;
  padding: 8px;
}

@media (max-width: 600px) {
  .header,
  .main-area .post,
  .search-container,
  .search-container .searchbar {
    width: 90%;
    margin: 0 auto;
    transition: width .2s ease;
  }
  .main-area .post {
    margin-top: 10px;
  }
}
  </style>
    <br>
    <br>
    <div class="container">
    
    <div class="header">
    <div class="search-container">
      <input type="text" class="searchbar" placeholder="Search...">
    </div>
  </div>

  <div class="main-area">
    <div class="post">
      <div class="blog-name">staff</div>
      <div class="title">Post #5</div>
      <div class="post-content">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto numquam ducimus cupiditate tempore quam animi facilis, asperiores repellat, adipisci modi dolore necessitatibus iste voluptatem sit provident dolorem ab repellendus est?</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam repudiandae quod assumenda! Eum possimus omnis quia. Hic amet rerum libero! Corporis repudiandae velit totam vero quasi expedita nostrum, sint necessitatibus.</p>
      </div>
      <div class="post-controls">
        <a href="">Reblog</a> |
        <a href="">Like</a>
      </div>
    </div>
    <div class="post">
      <div class="blog-name">staff</div>
      <div class="title">Post #4</div>
      <div class="post-content">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto numquam ducimus cupiditate tempore quam animi facilis, asperiores repellat, adipisci modi dolore necessitatibus iste voluptatem sit provident dolorem ab repellendus est?</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam repudiandae quod assumenda! Eum possimus omnis quia. Hic amet rerum libero! Corporis repudiandae velit totam vero quasi expedita nostrum, sint necessitatibus.</p>
      </div>
      <div class="post-controls">
        <a href="">Reblog</a> |
        <a href="">Like</a>
      </div>
    </div>
    <div class="post">
      <div class="blog-name">staff</div>
      <div class="title">Post #3</div>
      <div class="post-content">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto numquam ducimus cupiditate tempore quam animi facilis, asperiores repellat, adipisci modi dolore necessitatibus iste voluptatem sit provident dolorem ab repellendus est?</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam repudiandae quod assumenda! Eum possimus omnis quia. Hic amet rerum libero! Corporis repudiandae velit totam vero quasi expedita nostrum, sint necessitatibus.</p>
      </div>
      <div class="post-controls">
        <a href="">Reblog</a> |
        <a href="">Like</a>
      </div>
    </div>
    <div class="post">
      <div class="blog-name">staff</div>
      <div class="title">Post #2</div>
      <div class="post-content">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto numquam ducimus cupiditate tempore quam animi facilis, asperiores repellat, adipisci modi dolore necessitatibus iste voluptatem sit provident dolorem ab repellendus est?</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam repudiandae quod assumenda! Eum possimus omnis quia. Hic amet rerum libero! Corporis repudiandae velit totam vero quasi expedita nostrum, sint necessitatibus.</p>
      </div>
      <div class="post-controls">
        <a href="">Reblog</a> |
        <a href="">Like</a>
      </div>
    </div>
    <div class="post">
      <div class="blog-name">staff</div>
      <div class="title">Post #1</div>
      <div class="post-content">
        <p>Hello, World</p>
      </div>
      <div class="post-controls">
        <a href="">Reblog</a> |
        <a href="">Like</a>
      </div>
    </div>
  </div>
    </div>
@endsection

