<div class="mb-3">
    <label class="form-label">{{ $label }}</label>
    <select id="choices_{{ $rand }}" type="text" class="form-select {{ $class }}" {{ $attributes }}>
        <option value="">{{ $placeholder ?? 'Select from the list' }}</option>
        {{ $slot }}
    </select>
</div>

@once
    @push('styles')
        {{-- <link href="{{ asset('libs/tom-select/css/tom-select.bootstrap5.min.css') }}" rel="stylesheet" /> --}}
    @endpush
    @push('js-lib')
        <script src="{{ asset('libs/tom-select/dist/js/tom-select.base.min.js') }}"></script>
    @endpush
@endonce


@push('js-custom')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var el;
            window.TomSelect && (new TomSelect(el = document.getElementById('choices_{{ $rand }}'), {
                copyClassesToDropdown: false,
                dropdownClass: 'dropdown-menu ts-dropdown',
                optionClass:'dropdown-item',
                render:{
                    item: function(data,escape) {
                        if( data.customProperties ){
                            return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
                        }
                        return '<div>' + escape(data.text) + '</div>';
                    },
                    option: function(data,escape){
                        if( data.customProperties ){
                            return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
                        }
                        return '<div>' + escape(data.text) + '</div>';
                    },
                },

            }));
        });
    </script>
@endpush
