<?php
require_once 'admin/conn.php';

// Definir el ID del estudiante directamente en el código
$stud_no = 123456789; // Reemplaza 123456789 con el ID del estudiante que deseas usar

// Obtener la lista de archivos de la base de datos
$query = "SELECT * FROM `storage` WHERE `stud_no` = ?";
$stmt = mysqli_prepare($conn, $query);

if ($stmt === false) {
    die('Error en la preparación de la consulta: ' . htmlspecialchars(mysqli_error($conn)));
}

mysqli_stmt_bind_param($stmt, 'i', $stud_no);

if (!mysqli_stmt_execute($stmt)) {
    die('Error en la ejecución de la consulta: ' . htmlspecialchars(mysqli_stmt_error($stmt)));
}

$result = mysqli_stmt_get_result($stmt);

if ($result === false) {
    die('Error al obtener el resultado: ' . htmlspecialchars(mysqli_stmt_error($stmt)));
}
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
      <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
             style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%);"></div>
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
            <button type="button" class="inline-block rounded bg-red-600 text-neutral-50 shadow-[0_4px_9px_-4px_rgba(51,45,45,0.7)] hover:bg-red-700 hover:shadow-red-950 focus:bg-red-800 focus:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] active:bg-red-700 active:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal transition duration-150 ease-in-out focus:outline-none focus:ring-0">
              Reportes
            </button>
          </div>
        </div>
      </div>
    </section>
  </section>

  <section>
    <div class="mx-auto w-full max-w-7xl px-5 py-16 md:px-10 md:py-24 lg:py-32">
      <div class="flex flex-col items-center">
        <div class="mb-8 max-w-[800px] text-center md:mb-12 lg:mb-16">
          <h2 class="text-3xl font-semibold capitalize md:text-5xl">
            REPORTES
          </h2>
          <p class="mx-auto mt-4 max-w-[528px] text-[#636262]">
            Lorem ipsum dolor sit amet elit ut aliquam
          </p>
        </div>
        <div class="mb-6 grid grid-cols-1 justify-items-center gap-8 sm:justify-items-stretch md:mb-10 md:grid-cols-4 md:gap-4 lg:mb-12">
          <a href="#" class="flex flex-col gap-4 rounded-2xl border border-solid border-[#b1b1b1] bg-[#f5f8ff] p-6 font-bold text-black transition hover:[box-shadow:rgb(0,_0,_0)_7px_7px]">
            <img src="img/AtencionMedica.jpg" alt="" class="inline-block h-60 w-full object-cover" />
            <div class="w-full pt-4">
              <p class="mb-4 text-xs font-semibold uppercase text-[#636262]"></p>
              <p class="mb-4 text-xl font-semibold">INDIVIDUAL</p>
              <p class="mb-5 font-normal text-[#636262] lg:mb-8">
                Lorem ipsum dolor sit amet, &nbsp;elit ut aliquam, purus sit amet luctus venenatis elit ut aliquam, purus sit amet luctus venenatis
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
          <!-- Add more blog items as needed -->
        </div>
        <a href="#" class="inline-block rounded-xl bg-black px-8 py-4 text-center font-semibold text-white [box-shadow:rgb(19,_83,_254)_6px_6px]">View More Articles</a>
      </div>
    </div>
  </section>
  <div class="container mx-auto">
    <h2 class="text-2xl font-semibold my-4">Archivos</h2>
    <table class="min-w-full bg-white">
      <thead>
        <tr>
          <th class="px-4 py-2 border-b-2 border-gray-300">ID del Archivo</th>
          <th class="px-4 py-2 border-b-2 border-gray-300">Nombre del Archivo</th>
          <th class="px-4 py-2 border-b-2 border-gray-300">Tipo de Archivo</th>
          <th class="px-4 py-2 border-b-2 border-gray-300">Fecha de Subida</th>
          <th class="px-4 py-2 border-b-2 border-gray-300">Acción</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($fetch = mysqli_fetch_array($result)) { ?>
          <tr>
            <td class="px-4 py-2 border-b border-gray-300"><?php echo htmlspecialchars($fetch['store_id']); ?></td>
            <td class="px-4 py-2 border-b border-gray-300"><?php echo htmlspecialchars($fetch['filename']); ?></td>
            <td class="px-4 py-2 border-b border-gray-300"><?php echo htmlspecialchars($fetch['file_type']); ?></td>
            <td class="px-4 py-2 border-b border-gray-300"><?php echo htmlspecialchars($fetch['date_uploaded']); ?></td>
            <td class="px-4 py-2 border-b border-gray-300">
              <a href="download.php?store_id=<?php echo $fetch['store_id']; ?>" class="inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700">Descargar</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</body>
</html>
