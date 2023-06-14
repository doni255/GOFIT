@extends('register.navbar')

@section('registration')
<form name="f1" action="./process/registrationProcess.php" onSubmit="return validation()" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input class="form-control" id="name" name="name" >
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input class="form-control" id="email" name="email" aria-describedby="emailHelp" >
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" >
                    </div>

                    <div class="d-grid gap-2 mb-2">
                        <input type="submit" class="btn btn-primary" value="Register" name="submit">
                    </div>
                </form>                     
                    <p>You have an account already?<a href="{{ url('/loginpage') }}"> Click here!</a></p>
@endsection


<script>
    function validation(){
        var id = document.f1.email.value;
        var ps = document.f1.password.value;
        var nm = document.f1.name.value;
        if(id.length == "" && ps.length == "" && nm.length == "") {
            alert("Please fill the empty fields :)");
            return false;
        }
        else
        {
            if(nm.length == ""){
                alert("Name is empty");
                return false;
            }
            if(id.length == ""){
                alert("Email is empty");
                return false;
            }
            if(ps.length == ""){
                alert("Password is empty");
            return false;
            }      
        }
    }
</script>
