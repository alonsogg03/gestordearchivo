
<?php
require_once 'admin/conn.php';

// Obtener la lista de archivos de la base de datos
$query = "SELECT * FROM `storage` WHERE `cod_id` = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, 'i', $cod_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

// Mostrar la tabla de archivos
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <script src="main.js"></script>
  <title>Unidad de Epidemiología</title>
</head>

<body>
  <section id="section-global" class="bg-[url('img/epidemio.jpg')] bg-cover min-h-screen">
  <?php include 'src/partials/header.php' ?>
    <section class="relative isolate lg:px-8 max-md:pt-28">
      <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
        aria-hidden="true">
        <div
          class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
          style="
              clip-path: polygon(
                74.1% 44.1%,
                100% 61.6%,
                97.5% 26.9%,
                85.5% 0.1%,
                80.7% 2%,
                72.5% 32.5%,
                60.2% 62.4%,
                52.4% 68.1%,
                47.5% 58.3%,
                45.2% 34.5%,
                27.5% 76.7%,
                0.1% 64.9%,
                17.9% 100%,
                27.6% 76.8%,
                76.1% 97.7%,
                74.1% 44.1%
              );
            "></div>
      </div>
      <div class="mx-auto max-w-2xl md:py-48 2xl:py-96 max-h-screen">
        <div class="text-center px-8">
          <h1 class="text-8xl font-bold tracking-tight text-white md:text-10xl">
            <span>Unidad de Epidemiología</span>
          </h1>
          <p class="mt-6 text-xl md:text-lg leading-8 text-white text-shadow-md text-center">
            Nos hemos mudado a la página oficial del gobierno del Perú.
          </p>
          <div class="mt-10 flex items-center justify-center gap-x-6">
            <button type="button"
              class="inline-block rounded bg-red-600 text-neutral-50 shadow-[0_4px_9px_-4px_rgba(51,45,45,0.7)] hover:bg-red-700 hover:shadow-red-950 focus:bg-red-800 focus:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] active:bg-red-700 active:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal transition duration-150 ease-in-out focus:outline-none focus:ring-0">
              Reportes
            </button>
          </div>
        </div>
      </div>
    </section>
  </section>

  <section>
    <!-- Container -->
    <div class="mx-auto w-full max-w-7xl px-5 py-16 md:px-10 md:py-24 lg:py-32">
      <!-- Component -->
      <div class="flex flex-col items-center">
        <!-- Heading Div -->
        <div class="mb-8 max-w-[800px] text-center md:mb-12 lg:mb-16">
          <h2 class="text-3xl font-semibold capitalize md:text-5xl">
            REPORTES
          </h2>
          <p class="mx-auto mt-4 max-w-[528px] text-[#636262]">
            Lorem ipsum dolor sit amet elit ut aliquam
          </p>
        </div>
        <!-- Blog Div -->
        <div
          class="mb-6 grid grid-cols-1 justify-items-center gap-8 sm:justify-items-stretch md:mb-10 md:grid-cols-4 md:gap-4 lg:mb-12">
          <!-- Blog Item -->
          <a href="#"
            class="flex flex-col gap-4 rounded-2xl border border-solid border-[#b1b1b1] bg-[#f5f8ff] p-6 font-bold text-black transition hover:[box-shadow:rgb(0,_0,_0)_7px_7px]">
            <img src="img/AtencionMedica.jpg" alt="" class="inline-block h-60 w-full object-cover" />
            <div class="w-full pt-4">
              <p class="mb-4 text-xs font-semibold uppercase text-[#636262]"></p>
              <p class="mb-4 text-xl font-semibold">INDIVIDUAL</p>
              <p class="mb-5 font-normal text-[#636262] lg:mb-8">
                Lorem ipsum dolor sit amet, &nbsp;elit ut aliquam, purus sit
                amet luctus venenatis elit ut aliquam, purus sit amet luctus
                venenatis
              </p>
              <div class="mx-auto flex max-w-[480px] flex-row items-center text-left">
                <img src="img/logo.rezola.png" alt="" class="mr-4 inline-block h-16 w-16 rounded-full object-cover" />
                <div class="flex flex-col items-start">
                  <h6 class="text-base font-semibold">
                    Unidad de Epidemiología
                  </h6>
                  <div class="flex items-start max-[991px]:flex-col lg:items-center">
                    <p class="text-sm text-[#636262]">Mayo, 2024</p>
                  </div>
                </div>
              </div>
            </div>
          </a>
          <!-- Blog Item -->
          <a href="#"
            class="flex flex-col gap-4 rounded-2xl border border-solid border-[#b1b1b1] bg-[#f5f8ff] p-6 font-bold text-black transition hover:[box-shadow:rgb(0,_0,_0)_7px_7px]">
            <img src="img/EDA.jpg" alt="" class="inline-block h-60 w-full object-cover" />
            <div class="w-full pt-4">
              <p class="mb-4 text-xs font-semibold uppercase text-[#636262]">
                Enfermedad Diarreica Aguda
              </p>
              <p class="mb-4 text-xl font-semibold">EDA</p>
              <p class="mb-5 font-normal text-[#636262] lg:mb-8">
                Lorem ipsum dolor sit amet, &nbsp;elit ut aliquam, purus sit
                amet luctus venenatis elit ut aliquam, purus sit amet luctus
                venenatis
              </p>
              <div class="mx-auto flex max-w-[480px] flex-row items-center text-left">
                <img src="img/logo.rezola.png" alt="" class="mr-4 inline-block h-16 w-16 rounded-full object-cover" />
                <div class="flex flex-col items-start">
                  <h6 class="text-base font-semibold">
                    Unidad de Epidemiología
                  </h6>
                  <div class="flex items-start max-[991px]:flex-col lg:items-center">
                    <p class="text-sm text-[#636262]">Mayo, 2024</p>
                  </div>
                </div>
              </div>
            </div>
          </a>
          <!-- Blog Item -->
          <a href="#"
            class="flex flex-col gap-4 rounded-2xl border border-solid border-[#b1b1b1] bg-[#f5f8ff] p-6 font-bold text-black transition hover:[box-shadow:rgb(0,_0,_0)_7px_7px]">
            <img src="img/febriles.jpg" alt="" class="inline-block h-60 w-full object-cover" />
            <div class="w-full pt-4">
              <p class="mb-4 text-xs font-semibold uppercase text-[#636262]"></p>
              <p class="mb-4 text-xl font-semibold">FEBRILES</p>
              <p class="mb-5 font-normal text-[#636262] lg:mb-8">
                Lorem ipsum dolor sit amet, &nbsp;elit ut aliquam, purus sit
                amet luctus venenatis elit ut aliquam, purus sit amet luctus
                venenatis
              </p>
              <div class="mx-auto flex max-w-[480px] flex-row items-center text-left">
                <img src="img/logo.rezola.png" alt="" class="mr-4 inline-block h-16 w-16 rounded-full object-cover" />
                <div class="flex flex-col items-start">
                  <h6 class="text-base font-semibold">
                    Unidad de Epidemiología
                  </h6>
                  <div class="flex items-start max-[991px]:flex-col lg:items-center">
                    <p class="text-sm text-[#636262]">Mayo, 2024</p>
                  </div>
                </div>
              </div>
            </div>
          </a>
          <!-- Blog Item -->
          <a href="#"
            class="flex flex-col gap-4 rounded-2xl border border-solid border-[#b1b1b1] bg-[#f5f8ff] p-6 font-bold text-black transition hover:[box-shadow:rgb(0,_0,_0)_7px_7px]">
            <img src="img/ira.jpg" alt="" class="inline-block h-60 w-full object-cover" />
            <div class="w-full pt-4">
              <p class="mb-4 text-xs font-semibold uppercase text-[#636262]">
                Infeccion Respiratoria Aguda
              </p>
              <p class="mb-4 text-xl font-semibold">IRA</p>
              <p class="mb-5 font-normal text-[#636262] lg:mb-8">
                Lorem ipsum dolor sit amet, &nbsp;elit ut aliquam, purus sit
                amet luctus venenatis elit ut aliquam, purus sit amet luctus
                venenatis
              </p>
              <div class="mx-auto flex max-w-[480px] flex-row items-center text-left">
                <img src="img/logo.rezola.png" alt="" class="mr-4 inline-block h-16 w-16 rounded-full object-cover" />
                <div class="flex flex-col items-start">
                  <h6 class="text-base font-semibold">
                    Unidad de Epidemiología
                  </h6>
                  <div class="flex items-start max-[991px]:flex-col lg:items-center">
                    <p class="text-sm text-[#636262]">Mayo, 2024</p>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <a href="#"
          class="inline-block rounded-xl bg-black px-8 py-4 text-center font-semibold text-white [box-shadow:rgb(19,_83,_254)_6px_6px]">View
          More Articles</a>
      </div>
    </div>
  </section>
  <div class="container mx-auto">
    <!-- Filtros de Búsqueda -->

    <form>
      <div class="flex">
        <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your
          Email</label>
        <button id="dropdown-button" data-dropdown-toggle="dropdown"
          class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-e-0 border-gray-300 dark:border-gray-700 dark:text-white rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800"
          type="button">
          All categories
          <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="m1 1 4 4 4-4" />
          </svg>
        </button>
        <div id="dropdown"
          class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
          <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
            <li>
              <a href="#"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">2024</a>
            </li>
            <li>
              <a href="#"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">2023</a>
            </li>
            <li>
              <a href="#"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">2022</a>
            </li>
            <li>
              <a href="#"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">2021</a>
            </li>
          </ul>
        </div>
        <div class="relative w-full">
          <input type="search" id="search-dropdown"
            class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg rounded-s-gray-100 rounded-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
            placeholder="Search" required />
          <button type="submit"
            class="absolute top-0 end-0 p-2.5 h-full text-sm font-medium text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
            </svg>
          </button>
        </div>
      </div>
    </form>
    <br />
    <!-- Power BI -->
    <iframe title="INDIVIDUAL" width="1540" height="1060"
      src="https://app.powerbi.com/view?r=eyJrIjoiNGEzNzQ3MjYtNjhlMS00NjFjLWE0NzUtZTFkZGRlZjcxNzBmIiwidCI6IjNkYzUzMjI0LTdlNjEtNDk2Ny04ZmE0LTQ5ZmNkY2IxNTliYiIsImMiOjR9"
      frameborder="0" allowfullscreen="true"></iframe>
    <!-- FIN -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre de Archivo</th>
                <th>Tipo de Archivo</th>
                <th>Fecha de Subida</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo htmlspecialchars($row['id']); ?></td>
                <td><?php echo htmlspecialchars($row['filename']); ?></td>
                <td><?php echo htmlspecialchars($row['file_type']); ?></td>
                <td><?php echo htmlspecialchars($row['date_uploaded']); ?></td>
                <td><a href="download.php?file=<?php echo urlencode($row['filename']); ?>&cod_id=<?php echo urlencode($row['cod_id']); ?>">Descargar</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
 
</body>

</html>

