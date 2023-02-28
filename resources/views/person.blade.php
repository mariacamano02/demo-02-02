<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Person</title>
</head>
<body>
    <h1 style="color: {{ $color }}">Person</h1>
    <p>This is the person view.</p>
    <p>This is a sample view.</p>
    <hr>
    
    <p><b>Name:</b>{{ $name }}</p>
    <p><b>Age:</b>{{ $age }}</p>
    <p><b>Address:</b>{{ $address }}</p>

    <hr>
    @if($age <18)
        <p style="color: red"> Cannot vote!</p>
    @else
        <p style=color: green"> Can vote!</p>
        @endif
    
        <hr>
        <h3>Siblings</h3>
        <table class="table table-hover table-bordered">
            <thread>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Can vote or not</th>
                </tr>
                </thread>
                <tbody>
            @foreach($siblings as $sibling)
            <tr>
                class="{{ $sibling ['name'] }}
                {{ $sibling ['age'] }}
                @if($sibling['age'] <18)
                    <p style="color: red">Cannot vote!</p>
                @else
                    <p style=color: green"> Can vote!</p>
            </li>
        @endforeach
        </ol>
</body>
</html>