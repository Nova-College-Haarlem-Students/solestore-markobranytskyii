<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Merkenoverzicht | Solestore</title>
</head>

<body>
    <header>
        <h1>Merkenoverzicht</h1>
        <nav>
            <a href="/over">Over ons</a>
            <a href="/contact">Contact</a>
        </nav>
    </header>

    <main>
        @if ($brands->isEmpty())
            <p>Geen merken gevonden.</p>
        @else
            <div class="brands-list">
                @foreach ($brands as $brand)
                    <div class="brand-item">
                        <h2>
                            <a href="/brands/{{ $brand->id }}">{{ $brand->name }}</a>
                        </h2>
                        <p>{{ $brand->description }}</p>
                    </div>
                @endforeach
        @endif
    </main>
</body>

</html>