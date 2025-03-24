<form action="/user" method="POST">
    @csrf
    <input name="name" type="text" placeholder="name" value="{{ old('name') }}">
    <br>
    @error('name')
        <p style="color:red;">{{ $message }}</p>
    @enderror

    <input name="email" type="text" placeholder="email" value="{{ old('email') }}">
    <br>
    @error('email')
        <p style="color:red;">{{ $message }}</p>
    @enderror
    <input type="submit">
</form>
