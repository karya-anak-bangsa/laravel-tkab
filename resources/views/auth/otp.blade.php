<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Email Verification</title>
    </head>

    <body>

        <h2>PT. Teknologi Karya Anak Bangsa</h2>

        <p>Hello {{ $employees->full_name }},</p>

        <p>Your verification code is:</p>

        <h1>{{ $employees->otp_code }}</h1>

        <p>
            This code will expire in 5 minutes.
        </p>

        <p>
            Please do not share this code with anyone.
        </p>

        <br>

        <p>
            Regards,<br>
            PT. Teknologi Karya Anak Bangsa
        </p>

    </body>

</html>
