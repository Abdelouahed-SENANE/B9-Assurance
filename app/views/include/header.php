<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/assets/css/main.css">
    <title><?= SITENAME;?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script  src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
    tailwind.config = {
      theme: {
        extend: {
            transitionProperty: {
            'height': 'height',
            'spacing': 'margin, padding',
        },
        colors : {
          primary : '#fbc34a',
          secondary : '#403e44',
          third : '#fffbf0',
          four : '#75cdc8'
        }
        }
      }
    }
  </script>


</head>
<body class="body">
