@extends('layout.main')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Add Donation
            </div>
            <div class="card-body">
                <form action="{{ route('index.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="jenis">Jenis Donasi:</label>
                        <input type="text" class="form-control @error('jenis_donasi') is-invalid @enderror" id="jenis_donasi" required name="jenis_donasi" value="{{ old('jenis_donasi') }}">
                        @error('jenis_donasi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
