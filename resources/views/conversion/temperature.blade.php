<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Conversion</title>
</head>
<body>


    @include('layouts.nav')

    <h1>Temperature Conversion</h1>
    <form action="/temperature" method="POST">
        @csrf
        <input type="number" name="value" placeholder="Value" required>
        <select name="from_unit">
            <option value="celsius">Celsius</option>
            <option value="fahrenheit">Fahrenheit</option>
            <option value="kelvin">Kelvin</option>
        </select>
        to
        <select name="to_unit">
            <option value="celsius">Celsius</option>
            <option value="fahrenheit">Fahrenheit</option>
            <option value="kelvin">Kelvin</option>
        </select>
        <button type="submit">Convert</button>
    </form>

    @if (isset($result))
    <h2>Result: {{ $value }} {{ $from_unit }} = {{ $result }} {{ $to_unit }}</h2>
    @endif
</body>
</html>