@foreach ($data as $supplier)
    {{ $supplier->name }}
    <form action="/supplier/{{ $supplier->id }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="delete">
    </form>
    <br>
@endforeach
