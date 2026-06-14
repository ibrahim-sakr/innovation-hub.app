<x-admin-layout>
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-base font-semibold text-gray-900">Registration Report</h1>
                <p class="mt-2 text-sm text-gray-700">A list of all registered customers.</p>
            </div>
        </div>
        <div class="mt-8 flow-root">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead>
                            <tr>
                                @foreach($report[0] as $key => $value)
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        {{$key}}
                                    </th>
                                @endforeach
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200 bg-white">
                        @foreach($report as $row)
                            <tr>
                                @foreach($row as $key => $value)
                                    <td class="px-3 py-4 text-sm whitespace-nowrap text-gray-500">{{$value}}</td>
                                @endforeach
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
