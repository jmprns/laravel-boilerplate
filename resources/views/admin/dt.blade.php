<x-ui.table.data title="Admin Lists">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Username</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($admins as $admin)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ name($admin->name) }}</td>
                <td>{{ $admin->account->username ?? null }}</td>
                <td>
                    <button onclick="deleteViaUrl('{{ route('admin.destroy', $admin) }}')" class="btn btn-danger btn-sm">
                        <x-ui.icon icon="trash" /> Delete
                    </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</x-ui.table.data>

@once
    @push('js-lib')
        <script src="{{ asset('libs/axios/axios.min.js') }}"></script>
        {{-- <script src="{{ asset('libs/sweetalert2/sweetalert2.all.min.js') }}"></script> --}}
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="{{ asset('js/delete.js') }}"></script>
    @endpush
@endonce
