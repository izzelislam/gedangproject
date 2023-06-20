{{-- <a href="{{ $route.$id }}" class="btn btn-primary text-white">
  <i class="fa fa-eye me-2"></i>
  Detail
</a> --}}

<a 
  href="{{ $route.Crypt::encrypt($id) }}"
  type="button" 
  class="btn btn-icon btn-success"
  data-bs-toggle="tooltip"
  data-bs-offset="0,01"
  data-bs-placement="left"
  data-bs-html="true"
  title="<span>Detail Data</span>"
>
  <span class="ti ti-eye"></span>
</a>
