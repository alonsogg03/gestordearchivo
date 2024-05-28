<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="tailwind.css" />
  <script src="/assets/js/main.js"></script>
  <title>Buscar Historia Clinica</title>
</head>

<body>
  <section id="section-global" class="bg-[url('img/Hospital-obra-Canete.jpg')] bg-cover min-h-screen">
    <header class="fixed inset-x-0 top-0 z-50">
      <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
          <a href="#" class="-m-1.5 p-1.4">
            <span class="sr-only">Your Company</span>
            <img class="h-20 w-auto max-md:h-16" src="img/logo.rezola.png" alt="Logo de Rezola" />
          </a>
        </div>
        <div class="flex lg:hidden">
          <button id="menu-open" type="button"
            class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-white ">
            <span class="sr-only">Open main menu</span>
            <svg class="h-6 w-6 max-md:h-8" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
              aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
          </button>
        </div>

        <div class="hidden lg:flex lg:gap-x-12 ">
          <aside class="relative flex justify-center items-center">
            <div
              class="relative group font-bold text-white rounded focus:outline-none transition hover:text-gray-800 hover:bg-white ">
              <button class="flex items-center px-7 py-2 gap-2 rounded focus:outline-none">
                Historia Clínica
              </button>
            </div>
          </aside>

          <aside class="relative flex justify-center items-center rounded hover:bg-white">
            <div class="relative group font-bold text-white rounded focus:outline-none transition hover:text-gray-800">
              <button class="flex items-center px-7 py-2 gap-2 rounded focus:outline-none">
                Areas
                <svg class="-mr-1 h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd"
                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                    clip-rule="evenodd" />
                </svg>
              </button>
              <div
                class="absolute hidden group-hover:block group-focus-within:block top-full min-w-full text-gray-800 rounded shadow-lg transition">
                <ul>
                  <li class="h-1 bg-transparent">
                  </li>
                  <li class="hover:bg-gray-300 py-2 px-4 bg-white rounded-t">
                    <a href="epidemiologia.html">Epidemiología</a>
                  </li>
                  <li class="hover:bg-gray-300 py-2 px-4 bg-white">
                    <a href="estadistica.html">Estadística</a>
                  </li>
                  <li class="hover:bg-gray-300 py-2 px-4 bg-white rounded-b">
                    <a href="">Docencia</a>
                  </li>
                </ul>
              </div>
            </div>
          </aside>

          <aside class="relative flex justify-center items-center">
            <div
              class="relative group font-bold text-white rounded focus:outline-none transition hover:text-gray-800 hover:bg-white">
              <button class="flex items-center px-7 py-2 gap-2 rounded focus:outline-none">
                Funcionarios
              </button>
            </div>
          </aside>

          <aside class="relative flex justify-center items-center">
            <div
              class="relative group font-bold text-white rounded focus:outline-none transition hover:text-gray-800 hover:bg-white">
              <button class="flex items-center px-7 py-2 gap-2 rounded focus:outline-none">
                Mesa de partes
              </button>
            </div>
          </aside>
        </div>

        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
          <a href="login.html"
            class="text-md font-semibold leading-6 text-white rounded-md gap-8 hover:shadow-black">Iniciar sesión <span
              aria-hidden="true">&rarr;</span></a>
        </div>
      </nav>

      <!-- Menú móvil, se muestra/oculta basado en el estado del menú -->
      <div id="mobile-menu" class="hidden lg:hidden" role="dialog" aria-modal="true">
        <!-- Fondo de superposición, se muestra/oculta basado en el estado del menú -->
        <div id="modal-bg" class="fixed inset-0 z-50"></div>
        <div
          class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
          <div class="flex items-center justify-between">
            <a href="#" class="-m-1.5 p-1.5">
              <span class="sr-only">Your Company</span>
              <img class="h-12 w-auto" src="img/logo.rezola.png" alt="Logo de Rezola" />
            </a>
            <button id="menu-close" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
              <span class="sr-only">Close menu</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
          <div class="mt-6 flow-root">
            <div class="-my-6 divide-y divide-gray-500">
              <div class="space-y-2 py-6">
                <aside>
                  <button href="#"
                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-800 hover:bg-gray-200">
                    Historia Clínica
                  </button>
                </aside>
                <a href="#"
                  class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-800 hover:bg-gray-200">Reportes</a>
                <a href="#"
                  class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-800 hover:bg-gray-200">Cítas
                  disponibles</a>
                <a href="#"
                  class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-800 hover:bg-gray-200">Horario
                  de Atención</a>
              </div>
              <div class="py-6">
                <a href="login.html"
                  class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-800 hover:bg-gray-200">Iniciar
                  sesión</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section class="relative isolatelg:px-8 max-md:pt-28">
      <div class="mx-auto max-w-2xl pt-48 md:py-48 2xl:py-96 max-h-screen">
        <div class="text-center px-8">
          <div>
          <input type="text" placeholder="Type here" class="input input-bordered input-error w-full max-w-xs" />
          </div>
        </div>
      </div>
    </section>
  </section>
</body>

</html>