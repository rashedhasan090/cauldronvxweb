<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>
</head>
<body>

<ul>
    <li><a class="navbar-brand" href="/lsapp/public">{{config('app.name', 'Cauldron VX')}}</a></li> 
 

  <li><a class="active" href="/lsapp/public/about">About</a></li>
  <li><a href="/lsapp/public/developers">Developers</a></li>
  
  <li><a href="/lsapp/public/feedback">Feedback</a></li>
  <li><a href="/lsapp/public/posts">Discussions</a></li>
<li> </li> 
<li> </li> 
  <li><a href="/lsapp/public/register">Register</a></li>
  <li><a href="/lsapp/public/login">Login</a></li>
  
</ul>
<ul class = "nav navbar-nav navbar-right"> 

</ul> 
</body>
</html>
