<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weight Conversion</title>
</head>
<body>

    @include('layouts.nav')
    
    <h1>Weight Conversion</h1>
    <form action="/weight" method="POST">
        @csrf
        <input type="number" name="value" placeholder="Value" required>
        <select name="from_unit">
            <option value="gram">Gram</option>
            <option value="kilogram">Kilogram</option>
            <option value="milligram">Milligram</option>
            <option value="ounce">Ounce</option>
            <option value="pound">Pound</option>
        </select>
        to
        <select name="to_unit">
            <option value="gram">Gram</option>
            <option value="kilogram">Kilogram</option>
            <option value="milligram">Milligram</option>
            <option value="ounce">Ounce</option>
            <option value="pound">Pound</option>
        </select>
        <button type="submit">Convert</button>
    </form>

    @if (isset($result))
    <h2>Result: {{ $value }} {{ $from_unit }} = {{ $result }} {{ $to_unit }}</h2>
    @endif
</body>
</html>