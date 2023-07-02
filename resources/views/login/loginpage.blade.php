@extends('login.navbar')

@section('form_login')

<!-- resources/views/dashboard.blade.php -->
{{-- @if (Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif --}}

    <!-- resources/views/dashboard.blade.php -->
    @if (Session::has('logout-notification'))
        <div class="alert alert-success">
                {{ Session::get('logout-notification') }}
        </div>
    @endif


    <form name="f1" action="" onSubmit="return validation()" method="POST">
        @csrf
        <div class="mb-3">      
            <label for="email" class="form-label">Email</label>
            <input class="form-control" type="email" id="email" name="email" aria-describedby="emailHelp" placeholder="Email"          
            >
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
    
        <div class="d-grid gap-2 mt-3">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    
        <p class="mt-3">Don`t have account yet?<a href="{{ url('/register') }}"> Click here!</a></p>
              
    </form>



@endsection

<script>
    // function validation(){
    //     var id = document.f1.email.value;
    //     var ps = document.f1.password.value;
    //     if(id.length == "" && ps.length == "") {
    //         alert("Username & Password fields are empty");
    //         return false;
    //     }
    //     else
    //     {
    //         if(id.length == ""){
    //             alert("Email is empty");
    //             return false;
    //         }
    //         if(ps.length == ""){
    //             alert("Password is empty");
    //         return false;
    //         }      
    //     }
    // }
</script>
