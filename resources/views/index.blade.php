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


                    <!-- Search Form -->
                    <!-- <form action="{{ route('members.search') }}" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="submit">Search</button>
                            </span>
                        </div>
                    </form> -->

                    <h1>Members List</h1>

                    <table style="border-collapse: collapse; width: 100%; text-align: left;">
                        <thead>
                            <tr style="border: 1px solid #ddd;">
                                <th style="border: 1px solid #ddd;">Member No.</th>
                                <th style="border: 1px solid #ddd;">Name</th>
                                <th style="border: 1px solid #ddd;">Gender</th>
                                <th style="border: 1px solid #ddd;">Registration Date</th>
                                <th style="border: 1px solid #ddd;">Method</th>
                                <th style="border: 1px solid #ddd;">Phone Number</th>
                                <th style="border: 1px solid #ddd;">Email</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($members as $member)
                                <tr style="border: 1px solid #ddd;">
                                    <td style="border: 1px solid #ddd;">{{ $member->member_number }}</td>
                                    <td>{{ $member->first_name . ' ' . $member->last_name }}</td>
                                    <td style="border: 1px solid #ddd;">{{ $member->gender }}</td>
                                    <td style="border: 1px solid #ddd;">{{ $member->registration_date }}</td>
                                    <td style="border: 1px solid #ddd; color:green;"><b>{{ $member->method }}</b></td>
                                    <td style="border: 1px solid #ddd;">{{ $member->phone_number }}</td>
                                    <td style="border: 1px solid #ddd;">{{ $member->email }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pagination-links">
                        {{ $members->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
