<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <meta name="csrf-token" content="{{ csrf_token() }}" />
       <title>Medium Clone</title>
       <!-- Fonts -->
       <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
       {{--  Style  --}}
       <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
       <style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
   </head>
   <body>
         <div id="app">
         </div>
         <script src="{{mix('js/app.js')}}"></script>
   </body>
</html>
