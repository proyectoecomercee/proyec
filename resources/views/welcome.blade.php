<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Nunito:400,600,700');

body{
  font-family: 'Nunito', sans-serif;
}

.a{color: #E7484F}
.b{color: #F68B1D}
.c{color: #FCED00}
.d{color: #009E4F}
.e{color: #00AAC3}
.f{color:  #732982}


.container{
  margin-top: 150px;
}

.text-center {
  text-align: center;
}

.rainbow{
  background-color: #343A40;
  border-radius: 4px;  
  color: #fff;
  cursor: pointer;
  padding: 8px 16px;
  
}

.rainbow-3:hover{
  background-image: linear-gradient(to right, red, orange, yellow, green, blue, indigo, red);
  animation:slidebg 2s linear infinite;
}

@keyframes slidebg {
  to {
    background-position:20vw;
  }
}

.follow{
  margin-top: 40px;
}

.follow a{
  color: black;
  padding: 8px 16px;
  text-decoration: none;
}

    </style>
</head>
<body>
     {{-- <div class="container text-center">
        <h1 class=""> Animated buttons with 
          <span class="a">r</span><span class="b">a</span><span class="c">i</span><span class="d">n</span><span class="e">b</span><span class="f">o</span><span class="a">w</span> hover </h1>
        <a href="/login" class="rainbow rainbow-3">Click Me!</a>
         <div class="follow">
         </div> --}}
</body>
</html>