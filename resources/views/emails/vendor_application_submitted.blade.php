<!DOCTYPE html>
<html>
<head>
    <title>New Vendor Application Submitted</title>
</head>
<body>
    <h1>New Vendor Application</h1>
    <p>A new vendor application has been submitted with the following details:</p>
    <ul>
        <li><strong>Full Name:</strong> {{ $application->full_name }}</li>
        <li><strong>Facebook Username:</strong> {{ $application->facebook_username ?? 'N/A' }}</li>
        <li><strong>Business Name:</strong> {{ $application->business_name }}</li>
        <li><strong>Email:</strong> {{ $application->email }}</li>
        <li><strong>Event Dates:</strong> {{ $application->event_dates }}</li>
        <li><strong>Booth Size:</strong> {{ $application->booth }}</li>
        <li><strong>Business Base:</strong> {{ $application->base }}</li>
        <li><strong>Categories:</strong> {{ $application->categories }}</li>
    </ul>
</body>
</html>
