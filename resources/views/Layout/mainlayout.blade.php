<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>UC Showroom</title>
</head>
<body>
    {{-- @include('layout.navbar') --}}
    {{-- pt = padding top --}}
    <div class="container pt-5">   
    

        @yield('main_content')
        <div style="cursor:sw-resize"></div>

    </div>

    <div class="pt-5">
        <footer class="text-center text-white" style="background-color: #caced1;">
            <!-- Grid container -->
            
            <!-- Grid container -->
          
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
              © 2023 Copyright:
              <a class="text-white" href="#">ucshowroom.com</a>
            </div>
            <!-- Copyright -->
          </footer>
    </div>
    
</body>
</html>