<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Оформление заказа</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <h1>Оформите заказ</h1>

    <form method="POST" action="#">
        @csrf
        <label>Ввдите имя пользователя</label><br>
        <input type="text" name="client"><br>
        <label>Ввдите номер телефона пользователя</label><br>
        <input type="tel" name="phone"><br>

        <input type="submit" name="оформить заказ" value="Оформить заказ">
    </form>

    <script src="{{ asset('js/app.js')}}"></script>
</body>
</html>
