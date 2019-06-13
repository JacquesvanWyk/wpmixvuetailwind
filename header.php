<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>title</title>
    <?php wp_head();?>

</head>
<body <?php body_class();?>>
<header>
    <nav>
        <div class="container mx-auto px-4 max-w-4xl">
            <div class="bg-white shadow-lg p-8 rounded-lg md:flex justify-between">
                <div class="logo">
                    <h1>LOGO</h1>
                </div>
                <div class="navlinks">
                    <ul class="flex">
                        <li class="px-2"><a href="#">Home</a></li>
                        <li class="px-2"><a href="#">About</a></li>
                        <li class="px-2"><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
