<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio Email</title>
</head>

<body>
    <div style='font-family: Arial, sans-serif; background-color: #f9f9f9; padding: 30px;'>
        <div style='max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); overflow: hidden;'>
            <div style='background-color: #5e249f; color: #ffffff; padding: 20px; text-align: center;'>
                <h1 style='margin: 0; font-size: 28px;'>Mail From Portfolio</h1>
            </div>
            <div style='padding: 20px;'>
                <table style='width: 100%; border-collapse: collapse; font-size: 16px;'>
                    <tr style='background-color: #f2f2f2;'>
                        <td style='padding: 10px; font-weight: bold; color: #5e249f;'>Name</td>
                        <td style='padding: 10px;'>
                            {{ $data['name'] }}
                        </td>
                    </tr>
                    <tr>
                        <td style='padding: 10px; font-weight: bold; color: #5e249f;'>Email</td>
                        <td style='padding: 10px;'>
                            {{ $data['email'] }}
                        </td>
                    </tr>
                    <tr style='background-color: #f2f2f2;'>
                        <td style='padding: 10px; font-weight: bold; color: #5e249f;'>Message</td>
                        <td style='padding: 10px;'>
                            {{ $data['message'] }}
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
