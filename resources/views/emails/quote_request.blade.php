<!DOCTYPE html>
<html>
<head>
    <title>Company Quote Request</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }
        h1 {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        p {
            background-color: #fff;
            padding: 10px;
            margin: 10px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <h1>Company Quote Request</h1>
    <p>Thank you for considering our services. We have received a quote request from the following company:</p>
    <p>Company Name: {{ $name }}</p>
    <p>Contact Email: {{ $email }}</p>
    <p>Company Website: {{ $website }}</p>
    <p>Request Description: {{ $description }}</p>
    
    <p>Please review the company's details provided and respond promptly with a customized quotation tailored to their requirements.</p>
</body>
</html>
