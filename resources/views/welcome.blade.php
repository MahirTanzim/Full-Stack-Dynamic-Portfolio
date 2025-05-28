<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        nav {
            
        }
        .disp-flex{

        }
        .flex-justify-space{
            justify-content: space-between
        }
        #sectioon{

        }
    </style>
</head>
<body>
    <nav>
        <div>
            <h1>Mahir Tanzim</h1>
        </div>
        <div>
            <a href="#">Abput</a>
            <a href="#">Research & Project</a>
            <a href="#">Blog</a>
            <a href="#">Contact</a>
            <a href="#">Linked In</a>
        </div>
    </nav>
    <section>
        <div>
            <div class="disp-flex">
                <img src="{{ asset('assets/image/img.png') }}">
            </div>
            <div class="disp-flex">
                <h2>About Me</h2>

            </div>
        </div>
        <div>
            <div class="disp-flex">
                <h2>More About Me</h2>

            </div>
            <div class="disp-flex">
                <h2>My Projects</h2>
            </div>
        </div>
    </section>
    <h1>Hello from Laravel</h1>
</body>
</html>
