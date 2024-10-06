<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Length Conversion</title>
</head>
<body>
    <h1>Length Conversion</h1>
    <form action="/length" method="POST">
        @csrf
        <input type="number" name="value" placeholder="Value" required>
        <select name="from_unit">
            <option value="meter">Meter</option>
            <option value="kilometer">Kilometer</option>
            <option value="centimeter">Centimeter</option>
            <option value="millimeter">Millimeter</option>
            <option value="inch">Inch</option>
            <option value="foot">Foot</option>
            <option value="yard">Yard</option>
            <option value="mile">Mile</option>
        </select>
        to
        <select name="to_unit">
            <option value="meter">Meter</option>
            <option value="kilometer">Kilometer</option>
            <option value="centimeter">Centimeter</option>
            <option value="millimeter">Millimeter</option>
            <option value="inch">Inch</option>
            <option value="foot">Foot</option>
            <option value="yard">Yard</option>
            <option value="mile">Mile</option>
        </select>
        <button type="submit">Convert</button>
    </form>

    @if (isset($result))
        <h2>Result: {{ $value }} {{ $fromUnit }} = {{ $result }} {{ $toUnit }}</h2>
    @endif
</body>
</html>