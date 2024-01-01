<form action="POST">
    <h2>{{ $name }}</h2>
    {{ $slot }}
    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
</form>