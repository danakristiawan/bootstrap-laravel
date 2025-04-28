@extends('layouts.app') @section('content')

<div class="row mt-3">
    <div class="col">
        <div class="toast-container position-fixed top-0 end-0 p-3">
            <div
                id="liveToast"
                class="toast"
                role="alert"
                aria-live="assertive"
                aria-atomic="true"
            >
                <div class="toast-header text-bg-primary">
                    <strong class="me-auto">Success</strong>
                    <small>just now</small>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="toast"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="toast-body">{{ session("success") }}</div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="col">
        <h1 class="text-center">Contoh Halaman Data Flight Tabel</h1>
    </div>
</div>

<div class="row mt-3">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    {{ $dataTable->table() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection @push('scripts')
{{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
