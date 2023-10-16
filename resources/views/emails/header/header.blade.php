<table>
    <tr>
        <td>
            <table>
                <tr>
                    <td>
                        <img style="width: 70%;padding-left:20px; padding-top:10px;" src="{{asset("storage/website/emails/image/header-logo.png")}}">
                    </td>
                    <td>
                        <table>
                            <tr>
                                <td style="font-weight: 200; padding-left: 350px; padding-top:10px;">{{ \Carbon\Carbon::now()->isoFormat('MMMM Do YYYY') }}</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <hr style="margin-top: 10px;">
        </td>
    </tr>
    <tr>
        <td>
            <img style="margin-top: 20px; margin-left: 12px;" src="{{asset("storage/website/emails/image/header.png")}}">
        </td>
    </tr>
</table>
