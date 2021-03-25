<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Exo:wght@200;400;800&display=swap');

    body {
        font-family: 'Exo', sans-serif;
    }
</style>

<body>
    <h3>Sender Name : {{ $fromName }}</h3>
    <h3>Sender Email : {{ $fromEmail }}</h3>
    <h3>Message :</h3>
    <p>{{ $comment }}</p>
</body>

</html>