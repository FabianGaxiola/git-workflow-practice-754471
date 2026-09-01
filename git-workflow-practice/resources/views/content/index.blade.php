<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contenido</title>
</head>
<body>
    <h1>Contenido</h1>

    @foreach ($contents as $content)
        <article>
            <span>{{ $content['label'] }}</span>
            <h2>{{ $content['title'] }}</h2>
            <p>{{ $content['description'] }}</p>
        </article>
    @endforeach
</body>
</html>