<form action="{{ route('submit-login') }}" method="post">
    @csrf
    username:
    <input type="email" name="email">
    password:
    <input type="password" name="password">
    <button type="submit">Submit</button>
</form>
