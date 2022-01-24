@extends('app')

@section('content')

<div style="padding: 50px; margin-top: 3em">
    <h1>Hello World!</h1>

    <form id="Log-in" action="Log-in.php" method="post">
        <button type="submit" class="btn btn-default">Log in</button>
    </form>

    <form id="Create-account" action="Create-account.php" method="post">
        <button type="submit" class="btn btn-default">Create Account</button>
    </form>

</div>
@endsection