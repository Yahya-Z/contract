<!-- resources/views/contract/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Contract</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <style>
        body{
            font-family: 'DejaVu Sans', sans-serif;
        }
        /* Change color of the date picker icon */
        input[type="date"]::-webkit-calendar-picker-indicator {
            /* filter: invert(1); Inverts the color to white */
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
            width: 900px !important;
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
        /* Page Title */
        .page-title {
            text-align: center;
            font-size: 28px;
            font-weight: bold;
            color: #f1faee;
            margin-top: 20px;
        }

        /* New Contract Button */
        .new-contract-btn {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #457b9d; /* Blue button color */
            color: #f1faee;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .new-contract-btn:hover {
            background-color: #1d3557; /* Darker blue on hover */
        }

        /* Contract Grid */
        .contract-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 10px; /* Adjust gap for card spacing */
            padding: 0; /* Remove extra padding */
            margin: 0 auto; /* Center the grid */
        }

        /* Contract Card */
        .contract-card {
            background-color: #2b3945; /* Dark card background */
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            padding: 20px;
            color: #f1faee;
            margin: 0; /* Remove extra margin */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .contract-name {
            font-size: 20px;
            font-weight: bold;
            color: #e9ecef; /* Light gray for the title */
            margin-bottom: 10px;
        }

        .contract-detail {
            font-size: 14px;
            margin: 5px 0;
        }

        .contract-detail strong {
            color: #a8dadc; /* Light teal for labels */
        }

        /* View Details Link */
        .view-details-link {
            margin-top: 10px;
            text-decoration: none;
            color: #457b9d; /* Blue link color */
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .view-details-link:hover {
            color: #1d3557; /* Darker blue on hover */
        }
        
        /* General Container */
        .contract-details-container {
        max-width: 900px;
        margin: 40px auto;
        background-color: #2e3b4e;
        color: #f8f9fa;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        font-family: Arial, sans-serif;
        }

        /* Header Section */
        .contract-header {
        text-align: left;
        margin-bottom: 20px;
        }

        .contract-title {
        font-size: 28px;
        color: #f8f9fa;
        margin-bottom: 15px;
        }

        .contract-meta p {
        margin: 5px 0;
        font-size: 14px;
        }

        /* Parties Section */
        .contract-parties {
        display: flex;
        justify-content: space-between;
        margin-bottom: 30px;
        margin-top: 10px;
        gap: 20px;
        }

        .party {
        flex: 1;
        background-color:rgb(60, 77, 99);
        padding: 20px;
        border-radius: 8px;
        }

        .party h2 {
        font-size: 25px;
        margin-bottom: 15px;
        color:rgb(231, 231, 231);
        }

        .party p {
        font-size: 14px;
        margin: 5px 0;
        }

        /* Details Section */
        .contract-details {
        margin-bottom: 30px;
        }

        .contract-details h3 {
        font-size: 18px;
        margin-bottom: 10px;
        color: #a8dadc;
        }

        .contract-details p {
        font-size: 14px;
        }

        /* Financial Section */
        .contract-financial {
        margin-bottom: 30px;
        }

        .financial-row {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
        }

        .contract-financial p {
        font-size: 14px;
        }

        /* Back Button */
        .contract-footer {
        text-align: center;
        }

        .back-button {
        text-decoration: none;
        font-size: 14px;
        font-weight: bold;
        color: #457b9d;
        padding: 10px 20px;
        background-color: #1d3557;
        border-radius: 6px;
        transition: background-color 0.3s ease, color 0.3s ease;
        }

        .back-button:hover {
        background-color: #457b9d;
        color: #f8f9fa;
        }

        .tt{
            color: white !important;
            margin-top: 10%;
        }
        .p{
            color:rgb(182, 182, 182) !important;
            margin: 0px 0px 0px 0px;
        }
        .top-p{
            margin-top: 17px;
        }
        .btn-primary {
            display: inline-block;
            padding: 10px 20px;
            font-size: 14px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            text-align: center;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body class="bg-gray-100">

    {{ $slot }}

    <script src="{{ mix('js/app.js') }}"></script>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>