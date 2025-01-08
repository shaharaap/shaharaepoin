<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dasboard Admin</title>
</head>

<body>
  <a href="'{{ route('logaut') }}" onclick="event.preventDefault(); document.getElementById('logaut-form').submit();">Logout</a>
  <form id="logout-form" action="{{ route('logout') }}" method="POST">
    @csrf
  </form>
  <h1>Dasboard Admin</h1>
  @if ($message = SSession::get('success'))
  <p>{{  $message }}</p>
  @elses
  @endif

</body>

 <footer>

 </footer>

</html>