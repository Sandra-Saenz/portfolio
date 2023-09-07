@if (isset($error))
  <div class="alert alert-danger">
      @foreach ($error->all() as $error)
        <li class="m-0">
          {{$error}}
        </li>
      @endforeach
  </div>
@endif
