
@extends('base')

@section('content')

<style>
    body, html {
  height: 100%;
}

* {
  box-sizing: border-box;
}
    


/* Position text in the middle of the page/image */
.bg-text {
  color: whitesmoke;
  font-weight: bold;
  position: absolute;
  top: 50%;
  left: 30%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 40%;
  padding: 20px;
  text-align: center;
    border-top-left-radius: 50px;
    border-top-right-radius: 50px;
    border-bottom-left-radius: 50px;
    border-bottom-right-radius: 50px;
}
</style>
    <div class="card">
  </div>
<div class="bg-text" style="background-image: url(pink.jpg)">
    <h1>Hi! Welcome to OnLine.</h1>
    <p>Click here to <a class="text-primary" href="/register">register!</a></p>
  </div>
                </div>