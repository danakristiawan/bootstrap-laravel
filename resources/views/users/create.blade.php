@extends('layouts.app') @section('content')
<form action="{{ route('users.store') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control @error('name')
        is-invalid @enderror" id="name" value="{{ old("name") }}" />
        @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input
            type="email"
            name="email"
            class="form-control @error('email') is-invalid @enderror"
            id="email"
            value="{{ old('email') }}"
        />
        @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control
        @error('password') is-invalid @enderror" id="password" value="{{
            old("password")
        }}" /> @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <button type="submit" class="btn btn-sm btn-outline-primary">Simpan</button>
    <a href="{{ route('users.index') }}" class="btn btn-sm btn-outline-primary"
        >Kembali</a
    >
</form>
@endsection
