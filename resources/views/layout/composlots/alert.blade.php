<div class="alert alert-{{ $class }} alert-dismissible fade show">
    <h1 class="alert-heading"><u>{{ $title }}</u></h1>
    {{ $slot }}
    <button type="button" class="close" data-dismiss="alert">
        <span aria-hidden="true">&times;</span>
    </button>
</div>