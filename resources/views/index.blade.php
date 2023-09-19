<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Church Management System') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1>Members List</h1>

                    <table style="border-collapse: collapse; width: 100%; text-align: center;">
                        <thead>
                            <tr style="border: 1px solid #ddd;">
                                <th style="border: 1px solid #ddd;">ID</th>
                                <th style="border: 1px solid #ddd;">Name</th>
                                <th style="border: 1px solid #ddd;">Gender</th>
                                <th style="border: 1px solid #ddd;">Registration Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($members as $member)
                                <tr style="border: 1px solid #ddd;">
                                    <td style="border: 1px solid #ddd;">{{ $member->id }}</td>
                                    <td style="border: 1px solid #ddd;">{{ $member->name }}</td>
                                    <td style="border: 1px solid #ddd;">{{ $member->gender }}</td>
                                    <td style="border: 1px solid #ddd;">{{ $member->reg_date }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $members->links() }} {{-- Display pagination links --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
