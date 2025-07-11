<div>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-6">Ward Table</h1>
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Code</th>
                    <th class="py-2 px-4 border-b">Name</th>
                    <th class="py-2 px-4 border-b">LLG</th>
                </tr>
            </thead>
            <tbody>
                @foreach($wards as $ward)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $ward->code }}</td>
                        <td class="py-2 px-4 border-b">{{ $ward->name }}</td>
                        <td class="py-2 px-4 border-b">
                            @if($ward->llg)
                                {{ $ward->llg->name }}
                            @else
                                N/A
                            @endif
                        </td>
                        <td class="py-2 px-4 border-b">
                            <!-- Add action buttons here -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
