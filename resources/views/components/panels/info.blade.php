<div class="panel panel-info">
    @if (isset($title))
        <div class="panel-heading">
            {{ $title }}
        </div>
    @endif
    <div class="panel-body">
        {{ $slot }}
    </div>
</div>
