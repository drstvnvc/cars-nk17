<html>

<head></head>

<body>
    <h1>Cars</h1>
    <ul>
        @foreach($cars as $car)
        <li>{{$car->producer}}: {{$car->title}}</li>
        @endforeach
    </ul>
</body>

</html>