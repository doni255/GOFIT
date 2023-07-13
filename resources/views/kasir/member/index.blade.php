@extends('kasir.member.dashboard')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Departemen</h1>
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
                        <a href="{{ asset('/') }}">
                            <button class="btn btn-block btn-outline-success btn-lg" type="button">+</button>    
                        </a>                
                    </ol>
                </div>
                {{-- Col --}}
            </div>
            {{-- row --}}
        </div>
        {{-- Container Fluid --}}
    </div>
    {{-- Container header --}}
    {{-- Main content --}}
    <div class="content">
        <div class="text-center ml-3 mr-3   ">
            @if (Session::has('delete_notification'))
            <div class="alert alert-success">
                {{ Session::get('delete_notification') }}
                <button type="button" class="close" data-dismiss="alert"  aria-label="close">
                    <span aria-hidden="true">
                        <i class="fa-solid fa-xmark"></i>
                    </span>
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
                                            <th class="text-center">ID</th>
                                            <th class="text-center">Nama Member</th>
                                            <th class="text-center">Tanggal Lahir</th>
                                            <th class="text-center">Email</th>                   
                                            <th class="text-center">Nomor Telepon</th>
                                            <th class="text-center">Gender</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Masa Berlaku</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>                
                                   <tbody>
                                    @forelse ($member as $item)

                                    <tr>
                                        <td class="text-center">{{ $item->id }}</td>
                                        <td class="text-center">{{ $item->nama_member }}</td>
                                        <td class="text-center">{{ $item->tanggal_lahir }}</td>
                                        <td class="text-center">{{ $item->email }}</td>
                                        <td class="text-center">{{ $item->nomor_telepon }}</td>
                                        <td class="text-center">{{ $item->gender }}</td>
                                        <td class="text-center">{{ $item->status }}</td>
                                      
                                        <td class="text-center">
                                            <button class="btn btn-primary">
                                                <i>Edit</i>
                                            </button>
                                            <form action="{{ url('/member'. '/' .$item->id)}}" class="d-inline" method="POST">                                         
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger">
                                                    <i class="">Delete</i>    
                                                </button>    
                                            </form>                           
                                        </td>
                                        <td></td>
                                    </tr>                                  
                                    @empty
                                        <div class="alert alert-danger">
                                            Data Member Belum Tersedia
                                        </div>
                                    @endforelse
                                   </tbody>                                
                                </table>
                                <div class="text-center">
                                    {{ $member->links() }}
                                </div>
            
                                   {{-- Pagination --}}
                                   <div class="mb-4 mt-4" style="text-align: center; ">
                                   {{-- {{ $presensigym->links() }} --}}
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