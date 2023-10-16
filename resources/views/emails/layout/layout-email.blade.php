<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"
    xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="utf-8"> <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name="x-apple-disable-message-reformatting">  <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <title>Landa Trip Newsletter Subscription</title>
                           <!-- The title tag shows in email notifications, like Android 4.4. -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>


<body style="margin: 0; padding: 0 !important; background-color: #FFFFFF;">
<table border="0" align="center" cellpadding="0" cellspacing="0" width=600
    style="width: 600px;max-width:600px;font-family: 'Roboto', sans-serif;">
    <tr>
        <td>
            @includeIf("emails.header.header")
        </td>
    </tr>
    <tr>
        <td>
            @yield('content')
        </td>
    </tr>
    @if($projects)
        <tr>
            <td>
                @includeIf("emails.components.projects")
            </td>
        </tr>
    @endif
    <tr>
        <td>
            @includeIf("emails.footer.footer")
        </td>
    </tr>
</table>
</body>
</html>
