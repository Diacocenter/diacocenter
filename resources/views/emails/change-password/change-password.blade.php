@extends('emails.layout.layout-email')

@section('content')
    <table style="margin-top: 10px;padding: 0 30px">
        <tr>
            <td style="font-weight: bold;color: #403F3F;font-size: 20px;">
                <p>
                    Change Password Email:
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Dear <strong>{{ $user->name }}</strong>,</p>
                <p>
{{--                    Your password has just been changed.--}}
{{--                    Ignore this email if it is you. But if you did not initiate this password change, or you believe that your account may have been compromised, please contact our support team immediately at <a href="mailto:info@landatrip.com">Info@landatrip.com</a> or <a href="tel:+98 31 3131 1914">+98 31 3131 1914</a>.--}}
{{--                    Our team will assist you in securing your account and investigating any suspicious activity.--}}
                    Your password has been changed.
                    Ignore this email if it is you. But if you did not initiate this password change, or you believe that your account may have been compromised, please contact our support team immediately at <a href="mailto:iman.nasr.esfahan@gmail.com">iman.nasr.esfahan@gmail.com</a> or <a href="tel:+98 31 3131 1914">+98 31 3131 1914</a>.
                    Our team will assist you in securing your account and investigating any suspicious activity.
                </p>
            </td>
        </tr>
    </table>
@endsection
