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


    <form name="f1" onSubmit="return validation()" method="POST">
        @csrf
        <div class="mb-3">      
            <label for="email" class="form-label">Username</label>
            <input class="form-control" type="text" id="username" name="username"  placeholder="Username"          
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
    function validation() {
        // ... logika validasi form (jika diperlukan) ...

        // Kirim permintaan login ke server
        fetch("{{ route('login') }}", {
            method: "POST",
            body: new FormData(document.querySelector("form[name='f1']")),
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}",
            },
        })
        .then(response => response.json())
        .then(data => {
            // Periksa apakah login berhasil
            if (data && data.token) {
                // Periksa peran pengguna
                if (data.data && data.data.role) {
                    const role = data.data.role.toLowerCase(); // Pastikan peran disimpan dalam huruf kecil
                    // Alihkan halaman berdasarkan peran pengguna
                    switch (role) {
                        case "admin":
                            window.location.href = "/admin"; // Ganti dengan URL halaman admin
                            break;
                        case "kasir":
                            window.location.href = "/kasir"; // Ganti dengan URL halaman kasir
                            break;
                        case "mo":
                            window.location.href = "/mo"; // Ganti dengan URL halaman mo
                            break;
                        default:
                            // Jika tidak ada peran yang cocok, alihkan ke halaman lain atau tampilkan pesan kesalahan
                            // Contoh:
                            window.location.href = "/loginpage"; // Ganti dengan URL halaman default untuk pengguna tanpa peran khusus
                            // Atau, tampilkan pesan kesalahan:
                            // alert("Anda tidak memiliki izin akses ke halaman apa pun.");
                    }
                }
            } else {
                // Tampilkan pesan kesalahan jika login gagal
                alert("Username atau password salah");
            }
        })
        .catch(error => {
            // Tampilkan pesan kesalahan jika terjadi error
            console.error("Terjadi kesalahan:", error);
        });

        // Mencegah form submit langsung
        return false;
    }
</script>