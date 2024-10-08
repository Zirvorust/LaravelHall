<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body>
    <a href="/">Home</a>
    <a href="/about">About Me</a>
    <h1>Welcome in my Home Page</h1>

    
    <div x-data="{ open: false }">
        <button @click="open = ! open">Expand</button>
     
        <span x-show="open">
            Content...
        </span>
    </div>

   
</body>
</html>