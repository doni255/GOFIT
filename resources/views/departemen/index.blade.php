@extends('dashboard')

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
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr class="table-success">
                                            <th class="text-center">Nama Instruktur</th>
                                            <th class="text-center">Alamat Instruktur</th>
                                            <th class="text-center">Tanggal Lahir Instruktur</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($departemens as $item)
                                            <tr>                                            
                                                <td class="text-center">{{ $item->nama_departemen }}</td>
                                                <td class="text-center">{{ $item->nama_manager }}</td>
                                                <td class="text-center">{{ $item->jumlah_pegawai }}</td>  
                                                <td>
                                                    <form action="/departemen/{{ $item->id }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <input type="submit" value="Delete" class="btn btn-danger">    
                                                    </form> 
                                                </td>                                         
                                            </tr>
                                        @empty
                                            <div class="alert alert-danger">
                                                Data Instruktur belum tersedia    
                                            </div>                                            
                                        @endforelse
                                    </tbody>
                                </table>
                                   {{-- Pagination --}}
                                   <div class="mb-4 mt-4" style="text-align: center; ">
                                   {{ $departemens->links() }}
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