<div>
    <div class="container mx-auto px-4">
        <h1>LLG List</h1>
        @foreach ($llgs as $llg)
            <div class="llg-item">
                <h2>{{ $llg->name }}</h2>
                <p>Code: {{ $llg->code }}</p>
                <p>Created At: {{ $llg->created_at }}</p>
                <p>Updated At: {{ $llg->updated_at }}</p>
            </div>
        @endforeach
    </div>
</div>
