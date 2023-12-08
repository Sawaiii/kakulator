<html>
<head>
    <title>Калькулятор</title>
</head>
<body>
<form action="/result.php">
    <input type="text" name="x1">
    <select name="operation">
        <option value="+">Сложение</option>
        <option value="-">Вычитание</option>
        <option value="*">Умножение</option>
        <option value="/">Деление</option>
        <option value="**">Возведение в степень</option>
    </select>
    <input type="text" name="x2">
    <input type="submit" value="Отправить">
</form>
</body>
</html>