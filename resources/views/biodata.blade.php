<?php
<!-- biodata.blade.php -->

@extends('template')

@section('content')
    <h1>Biodata Saya</h1>
    <ul>
        @foreach ($biodata as $key => $value)
            <li><strong>{{ $key }}:</strong> {{ $value }}</li>
        @endforeach
    </ul>
@endsection


// <!DOCTYPE html>
// <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <title>My Biodata</title>
//     <!-- <link rel="stylesheet" href="../css/style.css"> -->
//     <style>
//         body {
//             font-family: Arial, sans-serif;
//             background-color: #f2f2f2;
//             margin: 0;
//             padding: 0;
//         }

//         .container {
//             max-width: 600px;
//             margin: 0 auto;
//             background-color: #300964;
//             padding: 20px;
//             border-radius: 5px;
//             box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
//             margin-top: 20px;
//         }

//         h1 {
//             font-size: 24px;
//             color: #ffffff;
//             text-align: center;
//         }

//         p {
//             color: #f3f5d0;
//         }

//         .biodata {
//             margin-top: 20px;
//         }

//         .biodata p {
//             font-size: 18px;
//             margin: 5px 0;
//         }

//         .biodata strong {
//             font-weight: bold;
//             color: #c3df49;
//         }
//     </style>
// </head>
// <body>
//     <div class="container">
//         <h1>Biodata Saya</h1>
//         <div class="biodata">
//             <p><strong>Nama:</strong> Kevin Zefanya Sarotona Mendrofa</p>
//             <p><strong>NPM:</strong> 2110631170073</p>
//             <p><strong>Alamat:</strong> Tambun Selatan</p>
//         </div>
//     </div>
// </body>
// </html>