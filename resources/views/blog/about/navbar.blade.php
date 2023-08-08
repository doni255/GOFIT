<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

    <title>{{ $title }}</title>

    {{-- Boostrap Feather Icons --}}
    <script src="https://unpkg.com/feather-icons"></script>
    
    <script>
      function confirmLogout()
      {
        if(confirm("Are you sure want to logout?"))
        {
          document.getElementById('logout-form').submit();
        }
      }
      $('.alert .close').on('click', function () {
    // Perform additional actions here
    // ...
    
    // Hide the notification
    $(this).closest('.alert').hide();
});
    </script>

  </head>
  <body>
    
    <nav class="navbar">
      <a href="#">
        <img src="{{ asset('css/gym.png') }}" class="icon" />
      </a>

      <div class="navbar-nav">
        <a class="text1" href="{{ url('/blogpage') }}">
          <h6>HOME</h6>
        </a>
        <a href="{{ url('/about') }}" class="text1">
          <h6>ABOUT US</h6>
        </a>
        <!-- <a href="#" class="text1">
          <h6>CLASSES</h6>
        </a> -->
        <a href="#" class="text1">
          <h6>SERVICES</h6>
        </a>
        <!-- <a href="#" class="text1">
          <h6>OUR TEAM</h6>
        </a>
        <a href="#" class="text1">
          <h6>PAGES</h6>
        </a> -->
        <a href="#" class="text1">
          <h6>CONTACT</h6>
        </a>
      </div>

      <div class="navbar-extra">
        <!-- Feather Icon -->
        <a href="#" id="search">
          <i data-feather="search"></i
          ><span
            style="
              color: rgba(245, 245, 245, 0.489);
              font-size: 20px;
              margin-left: 5px;
              position: fixed;
            "
            >|</span
          >
        </a>

        <a href="https://www.facebook.com/">
          <i data-feather="facebook"></i>
        </a>
        <a href="#twitter">
          <i data-feather="twitter"></i>
        </a>
        <a href="https://www.youtube.com/?hl=en&gl=ID">
          <i data-feather="youtube"></i>
        </a>
        <a href="https://www.instagram.com/donii_wijaya9/">
          <i data-feather="instagram"></i>
        </a>

        {{-- lOGOUT NAVBAR --}}

        <a class="nav-link" href="{{ route('logout') }}" style="margin-left:40px;" onclick="event.preventDefault(); confirmLogout();" >
          <i data-feather="log-out"></i>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
            @csrf
          </form>
        </a>

      </div>
    </nav>
    <div class="content">
      <div class="body">
        
        {{-- <h3 style="color: white">SHAPE YOUR BODY</h3>
  
        <div class="home_body_text">
          <span style="color: white">BE</span>
          <span style="color: rgb(255, 119, 0)">STRONG</span>
          <br />
          <span style="color: white; margin-top: 50px">TRAINING HARD</span>
        </div>
        <!-- <button type="submit" class="button-get-info">GET INFO</button> -->
        <a href="loginPage.php" class="button-get-info"
          ><p style="text-align: center; margin-top: 14px">GET INFO</p></a
        > --}}
        <p style="color:whitesmoke;">sdadsa</p>

      </div>
    </div>
    

   


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"
  ></script>
    <script>
      feather.replace();
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<style>
  
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-decoration: none;
  }

  html,body {
    margin: 0;
    height: 100%;

    font-family: "Poppins", sans-serif;

    background-image: url("./css/gym.jpg");

    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
  }

    .button-get-info{
      color: white;
    font-size: large;
    font-weight: bolder;
    background-color: rgb(255, 119, 0);

    margin-top: 20px;

    width: 130px;
    height: 50px; 
    }

    .navbar-extra,
  a {
    display: inline-block;
    margin: 5px;
    color: rgba(245, 245, 245, 0.767);
  }

  .navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1.2rem 7%;

    top: 0;
    left: 0;
    right: 0;
  }

  .home_body_text,
  span {
    font-weight: bolder;
    font-size: 40px;
  }

  .content {
    max-width: 500px;
    border: 50px;
     margin: auto;
  }

  .body{
    
    padding: 25px;
    background-color: rgb(74, 72, 72);
    opacity: 0.6;
    border: 50px;
  }

  h6 {
    font-size: small;
    font-weight: bold;
    text-indent: 10px;
    display: inline-block;
  }

  .icon {
    height: 120px;
    width: 120px;
  }

  .text1 {
    color: whitesmoke;
    /* margin: auto; */
    /* text-decoration: none; */
    /* display: inline-block; */
    font-size: 1.4rem;
    margin: 0 1rem;
  }

  a:hover {
    color: #ffcc00;
  }


</style>
