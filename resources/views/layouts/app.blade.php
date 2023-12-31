<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

<header class="p-5 border-b bg-white shadow flex justify-between items-center">
    <h1 class="text-3xl font-black">
        Devstagram
    </h1>

    @auth()
        <nav class="flex gap-5 items-center">
            <a class="font-bold uppercase text-gray-600" href="#">
                Hola, <span class="font-bold" > {{ auth()->user()->username }} </span>
            </a>

            <form action=" {{ route('logout') }} " method="post">
                @csrf
                <button type="submit" class="font-bold uppercase text-red-600 hover:bg-gray-200" >
                    Cerrar sesión
                </button>
            </form>

        </nav>
    @endauth

    @guest()
        <nav class="flex gap-2 items-center">
            <a class="font-bold uppercase text-gray-600" href="{{ route('login') }}">Login</a>
            <a class="font-bold uppercase text-gray-600" href="{{route('register')}}">
                Crear cuenta
            </a>
        </nav>
    @endguest

</header>

<main class="container mx-auto mt-10">

    <h2 class="font-black text-center text-3xl mb-10">
        @yield('titulo')
    </h2>
    @yield('contenido')
</main>
<footer class="text-center p-5 text-gray-500 font-bold uppercase">
    Devstagram - Todos los derechos reservados {{ date('Y') }}
</footer>
</body>
</html>
