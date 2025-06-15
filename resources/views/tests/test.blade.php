<h2>Test Page</h2>

@foreach ($values as $value)
    {{ $value->id }}
    <br>
    {{ $value->text }}
    <br>
@endforeach
