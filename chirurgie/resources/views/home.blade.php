<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Mon histoire interactive</title>
  @vite('resources/js/app.js')
</head>
<body>
  <div id="app"></div>
</body>
</html> 

