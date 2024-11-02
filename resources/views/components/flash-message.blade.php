@if (flash()->message)

    <div class="alert alert-{{ flash()->class }}  d-flex align-items-center" role="alert">

        @if (flash()->class === 'warning' || flash()->class === 'danger')
            <i class="bi bi-exclamation-triangle-fill me-2"></i>
        @endif


        @if (flash()->class === 'info')
            <i class="bi bi-info-circle-fill me-2"></i>
        @endif



        @if (!flash()->class || flash()->class === 'success')
            <i class="bi bi-info-circle-fill me-2"></i>
        @endif

        <div>
            {{ flash()->message }}
        </div>
    </div>
@endif
