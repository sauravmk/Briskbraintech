<!DOCTYPE html>
<html>
<head>
    <style>
        /* Reset some default styles */
        body, h1, h2, p {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff; /* White background */
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Slightly raised container */
        }

        h1 {
            color: #333;
            font-size: 16px; /* Larger heading */
            margin-bottom: 10px; /* Add some space below the heading */
        }

        p {
            color: #555;
            font-size: 16px; /* Slightly larger font size */
            margin-bottom: 15px; /* Add some space below paragraphs */
        }

        .signature {
            margin-top: 20px;
            font-weight: bold; /* Make the signature bold */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Dear {{ $name }},</h1>
        <p>Thank you for your interest in our services. We have received your quote request, and we are excited to work with you.</p>
        <p>We will review your request carefully and provide you with a customized quotation within [1] business day. In the meantime, please feel free to contact us if you have any questions or need any additional information.</p>
        <p>We look forward to hearing from you soon.</p>
        <p class="signature">Sincerely,<br>BriskBrainTech Team</p>
    </div>
</body>
</html>
