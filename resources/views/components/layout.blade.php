<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pixel Positions</title>
        @vite(['resources/js/app.js'])
    </head>
    <body class="bg-black text-white font-sans">
        <div>
            <nav class="flex justify-between items-center py-4 border-b border-white/10">
                <div>
                    <a href="/">
                        <img src="{{Vite::asset('resources/images/logo.svg')}}" alt="">
                    </a>
                </div>

                <div>
                    <a href="#">Jobs</a>
                    <a href="#">Careers</a>
                    <a href="#">Salaries</a>
                    <a href="#">Companies</a>
                </div>

                <div>
                    <a href="#">Post a Job</a>
                </div>
            </nav>

            <main>
                {{ $slot }} 
            </main>
            
            <footer></footer>
        </div>
    </body>
</html>