<!DOCTYPE html>
<html dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $contract->contract_name }}</title>
    <style>

        /* Contract Paper and fonts */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
            min-height: 100vh; /* Ensures the body is at least the height of the viewport */
            position: relative;
            padding-right: 25px;
            padding-left: 25px;
        }

        /* Page size */
        @page {
            margin: 120px 0px 150px 0px; /* Top, Right, Bottom, Left */
        }

        /* Header */
        header {
            position: absolute;
            top: -100px;
            left: 0;
            right: 0;
            height: 100px;
            background-color: #e7e7e3;
            border-bottom: 2px solid #ccc;
            padding: 10px 20px;
        }

        header table {
            width: 100%;
        }

        header .logo img {
            height: 70px;
            width: 70px;
        }

        header .details {
            text-align: right;
            font-size: 15px;
        }

        header .details p {
            margin: 0;
        }

        header h2 {
            color: #c00000;
            margin: 0;
            font-size: 18px;
        }

        /* Footer */
        footer {
            position: fixed;
            bottom: -100;
            left: 0;
            right: 0;
            height: 100px;
            background-color: #f8f8f8;
            border-top: 2px solid #ccc;
            text-align: center;
            font-size: 12px;
            color: #333;
            /* padding: 20px; */
            box-sizing: border-box;
        }

        /* Contract Body */
        .container {
            min-height: calc(100vh - 150px); /* Adjust for header/footer height */
            width: 100%;
            margin: 0 auto;
            box-sizing: border-box;
            padding: 20px;
        }

        /* Title & Header date and number style */
        .highlight {
            font-weight: bold;
        }

        /* Contract Intro Style */
        .content p {
            margin: 5px 50px 0px 0px;
            font-size: 14px;
        }

        /* Parties Layout */
        .party-details table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        .party-details td {
            vertical-align: top;
            width: 50%;
            padding: 10px;
        }

        /* Parties Titels */
        .party-details h3 {
            font-size: 20px;
            color: #c00000;
            margin-bottom: 10px;
        }

        /* Parties Details */
        .party-details p {
            margin: 5px 0;
            font-size: 14px;
        }

        /* Contract Detalis */
        .detailed-needs {
            margin-top: 20px;
        }

        /* Contract Details Paragraph */
        .detailed-needs p {
            font-size: 14px;
            text-align: justify;
            margin: 0;
        }
        
        /* Signature Section Layout */
        .signature-section {
            padding-top: 300px;
            vertical-align: bottom;
        }

        .signature-section table {
            width: 95%;
            border-collapse: collapse;
        }

        /* .page-break {
            page-break-before: always;
        } */
        
        .QR{
            width: 100px;
            height: 100px;
        }
        .logo{
            width: 100px;
            height: 100px;
            align: center;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <table>
            <tr>
                <td>
                    <h2>Wahat Al-Tamayuz Contracting Co.</h2>
                    <p style="margin: 15px 0px 0px 0px; font-size: 14px;">Commercial Registration Number: 1010753602</p>
                    <p style="margin: 0px 0px 0px 0px; font-size: 14px;">Tax Number: 311078552200003</p>
                </td>
                <td class="logo" style="text-align: ;">
                    <img src="C:\Users\Yahya\contractApp\logo.png" alt="Logo" class="logo" style="item-align: center;">
                </td>
                <td class="details">
                    <p>Date: <span class="highlight">{{ $contract->contract_date }}</span></p>
                    <p>No.: <span class="highlight">{{ $contract->contract_number }}</span></p>
                </td>
            </tr>
        </table>
    </header>

    <!-- Footer -->
    <!-- <footer>
        <p>Wahat Al-Tamayuz Contracting Co. | Page: <span class="pagenum"></span></p>
        <img src="C:\Users\Yahya\contractApp\Footer.png" alt="" style="">
    </footer> -->

    <!-- Main Content -->
    <div class="container">
        <!-- Contract Title -->
        <h1 class="highlight" style="text-align: center; margin: 30px 0px 30px; text-decoration: underline; text-underline-offset: 10px;">{{ $contract->contract_name }}</h1>

        <!-- Contract Intro -->
        <div class="content">
            <p style="text-align: justify;">
                With the grace of God, on the date of <b>{{ $contract->contract_date }}</b>, corresponding to 
                <b>{{ $contract->contract_hijri_date }}</b>, in the city of 
                <b>{{ $contract->contract_location }}</b>, an agreement was reached between:-
            </p>
        </div>

        <!-- Parties Information -->
        <div class="party-details">
            <table>
                <tr>
                    <td>
                        <h3>First Party</h3>
                        <p><strong>Party Name:</strong> {{ $contract->contract_party_a }}</p>
                        <p style="font-size: 14px;"><strong>Commercial Registration Number:</strong> {{ $contract->contract_party_a_crn }}</p>
                        <p><strong>Address:</strong> {{ $contract->contract_party_a_location }}</p>
                    </td>
                    <td>
                        <h3>Second Party</h3>
                        <p><strong>Party Name:</strong> {{ $contract->contract_party_b }}</p>
                        <p style="font-size: 14px;"><strong>Commercial Registration Number:</strong> {{ $contract->contract_party_b_crn }}</p>
                        <p><strong>Address:</strong> {{ $contract->contract_party_b_location }}</p>
                    </td>
                </tr>
            </table>

            <div class="detailed-needs">
                <h3>Contract Details</h3>
                <p style="text-align: justify;">{{ $contract->contract_party_b_detailed_needs }}</p>
            </div>
        </div>

        <!-- Signatures -->
        <div class="signature-section">
            <table>
                <tr>
                    <td style="text-align: center;">
                        <p><strong>First Party Signature</strong></p>
                        <p style="margin-top: 50px;">____________________</p>
                    </td>
                    <td style="text-align: center;">
                        <p><strong>Second Party Signature</strong></p>
                        <p style="margin-top: 50px;">____________________</p>
                    </td>
                </tr>
            </table>
        </div>

        

        <footer id="footer" style="text-align: center;">
            <table style="margin: 0 auto; gap: 80px;">
                <tr>
                    <td style="width:20%; height: 50px;">
                        <img src="C:\Users\Yahya\contractApp\images\QR.png" class="QR">
                    </td>
                    <td style="width:20%; height: 50px; font-size: 12px;">
                        <img src="whatsapp-icon.png" alt="WhatsApp" style="padding: 0px 10px">
                        <p style=" margin: 0; padding: 21px 5px 0px 7.5px;">0502681885</p>
                        <p style=" margin: 0; padding: 0px 5px 0px 7.5px;">0550551338</p>
                    </td>
                    <td style="width:20%; height: 50px; font-size: 12px; vertical-align: top;">
                        <img src="web-icon.png" alt="Website" style="padding: 20px 50px 10px;">
                        <p style="margin: 0; padding: 0px 8.7px 0px 8.7px;">wahat-altamayuz.com</p>
                        <p style="position: absolute; margin: 0; padding: 5px 8.7px 0px 8.7px;">Bank Al-Riyadh Account No.: (2510621449940)</p>
                        <p style="position: absolute; margin: 0; padding: 18px 8.7px 0px 8.7px;">IBAN No.: (SA0720000002510621449940)</p>
                    </td>
                    <td style="width:20%; height: 50px; font-size: 12px;">
                        <img src="Email-icon.png" alt="Email" style="padding: 10px 50px 0px;">
                        <p style="margin: 0; padding: 10px 8.7px 33px 8.7px;">info@wahat-altamayuz.com</p>
                    </td>
                    <td style="width:20%; height: 50px; font-size: 12px;">
                        <img src="Address-icon.png" alt="Address" style="padding: 0px 50px 0px;"> 
                        <p style="margin: 0; padding: 10px 8.7px 0px 8.7px;">Kingdom of Saudi Arabia, Riyadh,<br>The Western Ring Road, Exit 28.</p>
                    </td>
                </tr>
            </table>
        </footer>

        <!-- Page Break -->
        <div class="page-break"></div>
    </div>
</body>
</html>
