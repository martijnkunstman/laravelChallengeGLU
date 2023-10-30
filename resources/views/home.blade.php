<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaravelChallenge</title>
</head>
<body>
<h1>LaravelChallenge</h1>
<iframe width="400" height="230" src="https://www.youtube.com/embed/lJIrF4YjHfQ" title="Embed videos and playlists" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
<form action="/" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <textarea name="comment" placeholder="Comment" required></textarea>
    <input type="submit" value="Submit">
</form>
@foreach($comments as $comment)
    <h3>{{$comment->name}}</h3>
    <p>{{$comment->comment}}</p>
@endforeach
</body>
</html>