@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Post') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('blogs.edit') '$blog->title'}}">
                        @csrf

                        <div class="row mb-3">
                            <label for="title">{{ __('Title') }}</label>

                            <input id="title" type="text" class="form-control @error('text') is-invalid @enderror" name="title"  required autocomplete="title" autofocus>

                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                        </div>

                        <div class="row mb-3">
                            <label for="description">{{ __('Description') }}</label>

                            <textarea id="description" rows="6" type="text" class="form-control @error('text') is-invalid @enderror" name="description"  required autocomplete="description" autofocus></textarea>

                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                        </div>
                        <div class="row mb-3">
                            <input hidden value="no-image" name="image"/>
                        </div>

                        <div class="row mb-0">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}
                                </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection