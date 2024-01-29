@extends('emails.layout.layout-email')
@section('content')
    <table style="margin-top: 10px;padding: 0 30px">
        <tr>
            <td style="font-weight: bold;color: #403F3F;font-size: 20px;">
                <p>Dear {{ $user->first_name }},</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    Congratulations and welcome to the Diaco Center platform! Your registration process has successfully completed.
                    To get started, simply log in to your account on our website using the credentials you provided during registration. Your membership dashboard awaits you with all the details you need to make the most of your membership.
                    If you have any questions or need assistance, don't hesitate to reach out to our support team at
                    [Support Email/Phone]. We're here to help!
                </p>
               <p>
                   Thank you for joining us for your technological development and we look forward to providing you with a fantastic membership experience.
               </p>
            </td>
        </tr>
    </table>
@endsection
