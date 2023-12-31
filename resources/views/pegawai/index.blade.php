@extends('pegawai.dashboard')

@section('content')


    <div class="content-header">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-6">
                    <h1 class="m-0" style="font-weight:500; font-size:20px;">Pegawai</h1>
                </div>
              

                {{-- Col --}}
                {{-- <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{  url('departemen') }}">Instruktur</a>
                        </li>
                        <li class="breadcrumb-item-active">Index</li>
                    </ol>
                </div> --}}
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a href="{{ url('/add') }}">
                            <button class="btn btn-block btn-outline-success btn-lg" type="button">+</button>    
                        </a>                
                    </ol>
                </div>
                {{-- Col --}}
            </div>
          
            {{-- <div class="text-center">
                @if (session('edit_success'))
                    <div class="alert alert-success">
                        {{ session('edit_success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="close"></button>
                        <span aria-hidden="true">&times;</span>
                    </div>
                @endif
                
            </div> --}}
            
        </div>
        {{-- Container Fluid --}}
    </div>
    
    {{-- Container header --}}
    {{-- Main content --}}
    <div class="content">
        <div class="text-center">
            @if (session('delete'))
                <div class="alert alert-success">
                    {{ session('delete') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif 

            @if (session('edit_cancel'))
            <div class="content">
                <div class="text-center">
                    <div class="alert alert-danger" style="font-size: 150%;">
                        {{ session('edit_cancel') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
            @endif

            @if (session('edit_success'))
            <div class="alert alert-success">
                {{ session('edit_success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="false">&times;</span>
                </button>
           
            </div>
        @endif
        

            @if (session('add_success'))
            <div class="alert alert-success">
                {{ session('add_success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="false">&times;</span>
                </button>
            </div>
                
            @endif

            
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr class="table-success">
                                            <th class="text-center">Nama Pegawai</th>
                                            <th class="text-center">Tanggal Lahir Pegawai</th>
                                            <th class="text-center">No Telpon</th>
                                            <th class="text-center">Role</th>
                                            <th class="text-center">Email</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($pegawai as $item)
                                            <tr>                                         
                                                <td class="text-center">{{ $item->nama_pegawai }}</td>
                                                <td class="text-center">{{ $item->tanggal_lahir }}</td>        
                                                <td class="text-center">{{ $item->nomor_telepon }}</td>                         
                                                <td class="text-center">{{ $item->role }}</td>   
                                                <td class="text-center">{{ $item->email }}</td>  
                                                <td></td>                                               
                                                <td>
                                                 
                                                        <a href="{{ url('edit', $item->id) }}">
                                                            <i class="fa-solid fa-pen-to-square fa-lg"></i>
                                                        </a>                                               
                                                    
                                                                                                
                                                     
                                                        
                                                    
                                                </td>
                                                <td>
                                                    <form action="{{ route('items.destroy', $item->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="">
                                                            <button type="submit" class=" fa-sharp fa-solid fa-trash-can fa-lg" style="background-color:transparent; border:none; color:red;" onclick="return confirm('Are you sure?')"></button>    
                                                        </a>                                                                  
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <div class="alert alert-danger">
                                                Data Pegawai belum tersedia    
                                            </div>                                            
                                        @endforelse
                                    </tbody>
                                </table>
                                   {{-- Pagination --}}
                                   <div class="mb-4 mt-4" style="text-align: center; ">
                                   {{ $pegawai->links() }}
                                </div>                                       
                                
                            </div>
                        </div>
                        {{-- card-body --}}
                    </div>
                    {{-- card --}}
                </div>
                {{-- /.col-md-6 --}}
            </div>
            {{-- /.row --}}
        </div>
        {{-- /.container-fluid --}}
    </div>

    
@endsection


<style>
 
</style>