@extends('emails.layout.layout-email')

@section('content')
    <table style="margin-top: 10px;padding: 0 30px">
        <tr>
            <td style="font-weight: bold;color: #403F3F;font-size: 20px;">
                <p>
                    Email verification:
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Dear <strong>{{ $name }}</strong>,</p>
                <p>
                    Thank you for signing up at Diaco Center. To ensure the security of your account and complete the registration process, we kindly ask you to verify your email address.
                </p>
                <p>The code below is for you to complete your verification process.
                    Do not share this code with anyone and enter it on the Diaco Center site:
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="text-align: center; margin-bottom: 10px;">
                    {{$verification_code}}
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="margin-bottom: 10px;">
                    Once your email address is verified, you will gain full access to your account and all its features. Ignore this email if you don’t create an account!

                    Thank you for choosing the Diaco Center platform. We look forward to serving you.

                </p>
            </td>
        </tr>
{{--        <tr>--}}
{{--            <td>--}}
{{--                <p>--}}
{{--                    Once your email address is verified, you will gain full access to your account and all its features. Ignore this email if you don’t create an account!--}}
{{--                </p>--}}
{{--                <p style="margin: 0px">--}}
{{--                    Thank you for choosing the Landa Trip platform. We look forward to serving you.--}}
{{--                </p>--}}
{{--            </td>--}}
{{--        </tr>--}}
    </table>
@endsection

