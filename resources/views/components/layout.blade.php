<!-- resources/views/contract/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Contract</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> -->
    <style>
        /* Change color of the date picker icon */
        input[type="date"]::-webkit-calendar-picker-indicator {
            filter: invert(1); /* Inverts the color to white */
            cursor: pointer; /* Ensures the pointer icon appears when hovering */
        }
        /* For Firefox compatibility (optional, not always needed) */
        input[type="date"]::-moz-calendar-picker-indicator {
            color: white;
        }
        .ta{
            width: 50%;
        }
        #select{
            width: 50%;
            position: relative;
        }
        .roboto {
            font-family: "Roboto", serif !important;
            font-weight: 400 !important;
            font-style: normal !important;
        }
        /* .dates{
            background-color: #2c3b4d;
        } */
        .flex-container {
            display: flex;
            align-items: center;
        }
        .flex-container input {
            flex: 1;
        }
        .flex-container select {
            margin-left: 10px;
            flex-shrink: 0;
        }
        .form{
            width: 100%;
            margin: 0 auto;
            padding: 20px; 
            border: 1px #2c3b4d;
            border-radius: 5px;
            background-color: #2c3b4d;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        .input-field {
            width: 95%;
            padding: 10px;
            margin: 5px 20px 5px 20px; 
            border: 1px solid #2c3b4d;
            border-radius: 4px;
            box-sizing: border-box;
            transition: border-color 0.3s ease; /* Add transition for smooth effect */
        }
        .input-field-c{
            margin: 5px 10px 5px 20px; 
        }
        .input-field:hover {
            border-color:rgb(255, 255, 255, 0.4); /* Change border color on hover */
        }
        .bg-gray-100 {
            background-color: #3c5069;
        }
        .block{
            /* display: block;
            width: 100%; */
            border: none;
            color: white;
            margin: 0px 29px 0px 29px; 
            padding-top: 25px ;
            font-size: 20px;
            cursor: pointer;
            text-align: center;
            border-radius: 5px;
        }
        .text-2xl {
            font-size: 50px;
        }
        .bg-blue-500{
            align: center;
            width: 90% !important;
            margin-top: 50px;
            margin-left: 40px;
            padding: 15px;
            font-size: 20px;
        }
    </style>
</head>
<body class="bg-gray-100">

    {{ $slot }}

</body>
</html>