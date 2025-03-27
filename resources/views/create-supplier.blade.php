<form action="/supplier" method="POST">
    @csrf
    <input name="name" placeholder="name">
    @error('name')
        <p style="color: red">{{ $message }}</p>
    @enderror
    <input name="address" placeholder="address">
    @error('address')
        <p style="color: red">{{ $message }}</p>
    @enderror
    <input name="contact_num" placeholder="contact_num">
    @error('contact_num')
        <p style="color: red">{{ $message }}</p>
    @enderror
    <input name="email" placeholder="email">
    @error('email')
        <p style="color: red">{{ $message }}</p>
    @enderror
    <input type="submit">
</form>
