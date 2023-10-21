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
                                <td style="font-weight: 600; padding-left: 340px; padding-top:10px;">{{ \Carbon\Carbon::now()->isoFormat('MMMM Do YYYY') }}</td>
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
            <img style="margin-top: 20px;width:100%" src="{{asset("storage/website/emails/image/header.png")}}">
        </td>
    </tr>
</table>
