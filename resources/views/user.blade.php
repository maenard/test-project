<form action="/user" method="POST">
    @csrf
    <input name="name" placeholder="name" value="{{ old('name') }}">
    <br>
    @error('name')
        <small style="color: red;">{{ $message }}</small>
    @enderror
    <br>

    <input name="email" placeholder="email" value="{{ old('email') }}">
    <br>
    @error('email')
        <small style="color: red;">{{ $message }}</small>
    @enderror
    <br>
    <input type="submit">

</form>


