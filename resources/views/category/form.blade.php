@extends('includes.app')

@section('content')
<div class="card">
  <div class="card-body">
    <div class="d-flex justify-content-between mb-3">
      <h5 class="card-title fw-semibold mb-4">{{ !empty($model) ? 'Edit' : 'Buat' }} Category</h5>
      <a href="{{ url()->previous() }}" class="btn btn-primary"> <i class="ti ti-arrow-left"></i> Kembali</a>
    </div>
    <div>
      <form action="{{ $url }}" method="POST">
        @csrf
        @isset($model)
          @method('PUT')
        @endisset

        <x-input.input-text
          label="Nama"
          name="name"
          placeholder="name"
          value="{{ $model->name ?? '' }}"
        />
        <button class="btn btn-primary">Simpan Data</button>
      </form>
    </div>
  </div>
</div>
@endsection