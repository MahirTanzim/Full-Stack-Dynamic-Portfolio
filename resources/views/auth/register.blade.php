<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('register')}}" method="post">
        @csrf
        <input type="text" placeholder="Enter Your Name" name="name">
        <br>
        <input type="email" placeholder="Enter Email" name="email">
        <br>
        <input type="password" placeholder="Enter password" name="password">
        <br>
        <button type="submit">Register</button>
    </form>

</body>
</html>