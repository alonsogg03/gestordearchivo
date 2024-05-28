<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="indexstyle.css">
  <script src="/admin/js/main.js"></script>
  <title>Hospital Regional de Cañete Rezola</title>
  <!-- <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
    
  </script>
  <style type="text/tailwindcss">
    @layer utilities {
      .content-auto {
        content-visibility: auto;
      }
    }
  </style> -->
</head>
<body>
  <section id="section-global" class="bg-[url('img/Hospital-obra-Canete.jpg')] bg-cover min-h-screen">
    <?php include 'src/partials/header.php' ?>
    <section class="relative isolatelg:px-8 max-md:pt-28">
      <div class="mx-auto max-w-2xl pt-48 md:py-48 2xl:py-96 max-h-screen">
        <div class="text-center px-8">
          <h1 class="text-4xl font-bold tracking-tight text-white md:text-7xl">
            Hospital Regional de Cañete
            <strong class="text-red-600 text-shadow-red">Rezola</strong>
          </h1>
          <p class="mt-6 text-xl md:text-lg leading-8 text-white text-shadow-md text-center">
            Nos hemos mudado a la página oficial del gobierno del Perú.
          </p>
          <div class="mt-10 flex items-center justify-center gap-x-6">
            <a href="https://www.gob.pe/hospital-rezola-canete-hrc" type="button"
              class="inline-block rounded bg-red-600 text-neutral-50 shadow-[0_4px_9px_-4px_rgba(51,45,45,0.7)] hover:bg-red-700 hover:shadow-inherit focus:bg-red-800 focus:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] active:bg-red-700 active:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal transition duration-150 ease-in-out focus:outline-none focus:ring-0">Ir
              a gob.pe</a>
            <a href="#" class="text-sm font-semibold leading-6 text-gray-100">
              Buscar Historia Clínica <span aria-hidden="true">→</span></a>
          </div>
        </div>
      </div>
    </section>
  </section>
</body>
</html>