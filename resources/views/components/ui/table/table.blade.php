<div class="card">
    @empty(!$title)
        <div class="card-header">
            <h3 class="card-title">
                {{ $title }}
            </h3>
            <div class="card-actions">
                {{ $actions ?? null }}
            </div>
        </div>
    @endempty

    <div class="table-responsive">
        <table class="table card-table table-vcenter">
            {{ $slot }}
        </table>
    </div>
</div>


