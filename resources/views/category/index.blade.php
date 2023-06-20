@extends('includes.app')

@section('content')
<div class="card">
  <div class="card-body">
    <div class="d-flex justify-content-between mb-3">
      <h5 class="card-title fw-semibold mb-4">List Category</h5>
      <a href="{{ $url }}" class="btn btn-primary"> <i class="ti ti-plus"></i> Tambah Data</a>
    </div>
    <div>
      <livewire:table.category-table/>
    </div>
  </div>
</div>
@endsection