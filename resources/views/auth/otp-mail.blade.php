<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Email Verification</title>
    </head>

    <body>
        <h2>PT. Teknologi Karya Anak Bangsa</h2>

        <p>Hello {{ $employees->full_name }},</p>
        <p>Thank you for registering.</p>

        <p>Your verification code is:</p>
        <h1>{{ $employees->otp_code }}</h1>

        <p>This code will expire in 5 minutes.</p>
        <p>Please do not share this code with anyone.</p>

        <hr>
        <p>Regards,<br>PT. Teknologi Karya Anak Bangsa</p>
    </body>

</html>
