<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Invitation') }}
        </h2>
    </x-slot>

    <x-slot name="script">
        <script>
            // AJAX DataTable
            var datatable = $('#crudTable').DataTable({
                ajax: {
                    url: '{!! url()->current() !!}',
                },
                columns: [
                    {data: 'SrNo',
                        render: function (data, type, row, meta) {
                                return meta.row + 1;
                        }
                    },
                    // { data: 'id', name: 'id', width: '5%'},
                    { data: 'full_name_groom', name: 'full_name_groom' },
                    { data: 'full_name_bride', name: 'full_name_bride' },
                    { data: 'marriage_date', name: 'marriage_date' },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false,
                        width: '25%'
                    },
                ],
                createdRow: function ( row, data, index ) {
                    if(index%2 == 0)
                    {
                        $('td', row).eq(0).css('background-color', '#EFF5F5','color','#ffffff');
                        $('td', row).eq(1).css('background-color', '#EFF5F5','color','#ffffff');
                        $('td', row).eq(2).css('background-color', '#EFF5F5','color','#ffffff');
                        $('td', row).eq(3).css('background-color', '#EFF5F5','color','#ffffff');
                        $('td', row).eq(4).css('background-color', '#EFF5F5','color','#ffffff');
                    }
                    $('td', row).eq(0).css('text-align', 'center');
                    $('td', row).eq(1).css('text-align', 'center');
                    $('td', row).eq(2).css('text-align', 'center');
                    $('td', row).eq(3).css('text-align', 'center');
                    $('td', row).eq(4).css('text-align', 'center');
                }
            });
        </script>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-10">
                <a href="{{ route('dashboard.invitation.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded shadow-lg">
                    + Create invitation
                </a>
            </div>
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <table id="crudTable">
                        <thead>
                        <tr>
                            <th>NO</th>
                            <th>Groom Name</th>
                            <th>Bride Name</th>
                            <th>Date</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
