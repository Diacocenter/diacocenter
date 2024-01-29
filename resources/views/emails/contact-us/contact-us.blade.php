@extends('emails.layout.layout-email')

@section('content')
    <table style="margin-top: 10px;padding: 0 30px">
        <tr>
            <td style="font-weight: bold;color: #403F3F;font-size: 20px;margin-top: 1rem">
                <p>Contact us:</p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="text-align: justify">
                    Dear {{$user}},
                    Thank you so much for taking time to share your invaluable suggestions with us! We really appreciate your input and want you to know that we will prioritize your comments and requests.
                    You can rest assured that we will follow up on them as soon as possible. Your contribution with Diaco Center is incredibly valuable to us and will definitely help us improve our services.
            </td>
        </tr>
    </table>
@endsection
