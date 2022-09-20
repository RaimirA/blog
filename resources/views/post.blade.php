<!doctype>

<title>My Blog</title>
<link rel="stylesheet" href="/app.css">

<body>
    <h1>{{ $post->title }}</h1>
    <article>
        {!! $post->body !!}
    </article>
    <a href="/">Go Back</a>
</body>
