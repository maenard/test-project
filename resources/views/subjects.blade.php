
<form action="{{ route('subject.store') }}" method="POST">
    @csrf

    <input name="name" value="{{ old('name') }}" placeholder="name">
    <input name="code" value="{{ old('code') }}" placeholder="code">
    <input name="instructor" value="{{ old('instructor') }}" placeholder="instructor">

    <input type="submit">
</form>

@forelse ($data as $sbj)
    <p>{{ $sbj->name }}</p>
    <form action="{{ route('subject.destroy', $sbj->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="delete">
    </form>
    <br>
@empty
    <p>No data found.</p>
@endforelse
