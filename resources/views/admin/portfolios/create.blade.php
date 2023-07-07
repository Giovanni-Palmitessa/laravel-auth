@extends('admin.layouts.base')

@section('contents')
    <h1>Add new Post</h1>
    
    <form method="POST" action="{{ route('admin.portfolios.store') }}">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input
                type="text"
                class="form-control @error('name') is-invalid @enderror"
                id="name"
                name="name"
                value="{{ old('name') }}"
            >
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }} 
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="client_name" class="form-label">Client Name</label>
            <input
                type="text"
                class="form-control @error('client_name') is-invalid @enderror"
                id="client_name"
                name="client_name"
                value="{{ old('client_name') }}"
            >
            @error('client_name')
                <div class="invalid-feedback">
                    {{ $message }} 
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="url_image" class="form-label">Image</label>
            <input
                type="text"
                class="form-control @error('url_image') is-invalid @enderror"
                id="url_image"
                name="url_image"
                value="{{ old('url_image') }}"
            >
            @error('url_image')
                <div class="invalid-feedback">
                    {{ $message }} 
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="pickup_date" class="form-label">Pickup Date</label>
            <input
                type="date"
                class="form-control @error('pickup_date') is-invalid @enderror"
                id="pickup_date"
                name="pickup_date"
                value="{{ old('pickup_date') }}"
            >
            @error('pickup_date')
                <div class="invalid-feedback">
                    {{ $message }} 
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="deploy_date" class="form-label">Deploy Date</label>
            <input
                type="date"
                class="form-control @error('deploy_date') is-invalid @enderror"
                id="deploy_date"
                name="deploy_date"
                value="{{ old('deploy_date') }}"
            >
            @error('deploy_date')
                <div class="invalid-feedback">
                    {{ $message }} 
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea
                class="form-control @error('content') is-invalid @enderror"
                id="content"
                rows="3"
                name="content">{{ old('content') }}</textarea>
            @error('content')
                <div class="invalid-feedback">
                    {{ $message }} 
                </div>
            @enderror
        </div>

        <button class="btn btn-primary">Save</button>
    </form>
@endsection