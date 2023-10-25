<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
</head>
<body>
    <h2>Contact Form Submission</h2>

    <p><strong>Name:</strong> {{ $formData['name'] }}</p>
    <p><strong>Email:</strong> {{ $formData['email'] }}</p>
    <p><strong>Contact No:</strong> {{ $formData['contact'] }}</p>
    <p><strong>Subject:</strong> {{ $formData['subject'] }}</p>

    <p><strong>Message:</strong></p>
    <p>{{ $formData['message'] }}</p>

    <p>Thank you for your submission.</p>
</body>
</html>
