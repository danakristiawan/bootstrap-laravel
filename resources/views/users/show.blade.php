@extends('layouts.app') @section('content')

<div class="row mt-3">
    <div class="col">
        <h1 class="text-center">Contoh Halaman Data Tabel</h1>
    </div>
</div>
<div class="row mt-3">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h3>{{ $user->name }}</h3>
                <h3>{{ $user->email }}</h3>
                <h3>{{ $user->birth_date }}</h3>
                <a
                    href="{{ route('users.index') }}"
                    type="button"
                    class="btn btn-sm btn-outline-primary"
                    >Kembali</a
                >
            </div>
        </div>
    </div>
</div>
@endsection
