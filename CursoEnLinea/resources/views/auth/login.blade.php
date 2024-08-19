<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
        <link rel="stylesheet" href="{{ asset('assets/styles.css') }}" />
    </head>

    <body>
        <!-- Section: Design Block -->
        <section class="background-radial-gradient overflow-hidden">
            <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
                <div class="row gx-lg-5 align-items-center mb-5">
                    <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                            Tecnologias <br />
                            <span style="color: hsl(218, 81%, 75%)">emergentes</span>
                        </h1>
                        <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                            Esta es una pagina de cursos en linea, donde podras aprender tecnologias emergentes
                            interactuar con docentes y compañeros de clase.
                        </p>
                    </div>

                    <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                        <div class="card bg-glass">
                            <div class="card-body px-4 py-5 px-md-5">
                                <x-validation-errors class="mb-4" />

                                @if (session('status'))
                                    <div class="mb-4 font-medium text-sm text-green-600">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <h1 class="d-flex justify-content-center ">Iniciar sesión</h1>

                                    <!-- Email input -->
                                    <div class="form-outline mb-4">
                                        <x-label for="email" class="form-label" value="{{ __('Direccion de Correo') }}" />
                                        <x-input id="email" class="form-control" type="email" name="email" required autofocus
                                            autocomplete="username" placeholder="tu correo electronico" />
                                    </div>

                                    <!-- Password input -->
                                    <div class="form-outline mb-4">
                                        <x-label for="password" class="form-label" value="{{ __('contraseña') }}" />
                                        <x-input id="password" class="form-control" type="password" name="password" required
                                            autocomplete="current-password" />
                                    </div>

                                    <div class="block mt-4">
                                        <label for="remember_me" class="flex items-center">
                                            <x-checkbox id="remember_me" name="remember" />
                                            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                        </label>
                                    </div>

                                    <!-- Submit button -->
                                    <div class="d-flex justify-content-center">
                                        <x-button class="btn btn-primary btn-block mb-4">
                                            {{ __('Ingresar') }}
                                        </x-button>
                                    </div>

                                    <!-- Register buttons -->
                                    <div class="d-flex align-items-center justify-content-center pb-4">
                                        <p class="mr-3">No tienes cuenta?</p>
                                        <a href="{{ route('register') }}" class="btn btn-primary btn-block mb-4"
                                            style="margin-left: 20px;">
                                            Registrarse
                                        </a>
                                    </div>

                                    <div class="flex items-center justify-end mt-4">
                                        @if (Route::has('password.request'))
                                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                                href="{{ route('password.request') }}">
                                                {{ __('Forgot your password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section: Design Block -->
        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
</html>
