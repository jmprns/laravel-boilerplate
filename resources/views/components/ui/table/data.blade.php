@php($rand = Str::random())

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
        <table id="datatable_{{ $rand }}" class="table card-table table-vcenter datatable">
            {{ $slot }}
        </table>
    </div>
</div>


@once
    @push('styles')
        <link rel="stylesheet" href="/libs/datatable/style.css">
    @endpush

    @push('js-lib')
        <script src="/libs/datatable/simple-datatables.js"></script>
    @endpush
@endonce




@push('js-custom')
<script>
    const table_{{ $rand }} = new simpleDatatables.DataTable("#datatable_{{ $rand }}")

    // document.addEventListener("DOMContentLoaded", () => {
    //     Livewire.hook('element.updated', (el, component) => {
    //         const LWtable = new simpleDatatables.DataTable("#datatable_{{ $rand }}")
    //     })
    // });

</script>
@endpush
