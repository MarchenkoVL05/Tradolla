<!DOCTYPE html>
<html class="h-full">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link type="image/png" sizes="32x32" rel="icon" href="/images/favicon.png">
    {{-- Trix Editor --}}
    <link
    rel="stylesheet"
    type="text/css"
    href="https://unpkg.com/trix@2.0.0/dist/trix.css"
    />
    <script
        type="text/javascript"
        src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"
    >
    </script>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @inertiaHead
  </head>
  <body class="h-full bg-gray-100">
    @inertia
  </body>
</html>