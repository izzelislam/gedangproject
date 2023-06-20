{{-- <a href="{{ $route.$id.$routefor }}" class="btn btn-warning text-white">
  <i class="fa fa-edit me-2"></i>
  Edit
</a> --}}


<a 
  href="{{ $route.Crypt::encrypt($id).$routefor }}"
  type="button" 
  class="btn btn-icon btn-warning"
  data-bs-toggle="tooltip"
  data-bs-offset="0,01"
  data-bs-placement="left"
  data-bs-html="true"
  title="<span>Edit Data</span>"
>
  <span class="ti ti-pencil"></span>
</a>
