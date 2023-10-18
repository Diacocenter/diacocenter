@extends('emails.layout.layout-email')
@section('content')
    <table style="margin-top: 10px;padding: 0 30px">
        <tr>
            <td style="font-weight: bold;color: #403F3F;font-size: 20px;">
                <p>
                    Newsletter Email: {{ $newsletter->newsletter_email }}
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    Thank you so much for signing in to our newsletter platform.
                    We truly appreciate your trust and are excited to have you on board as one of our valuable members.
                    Now, you have the opportunity to stay well-informed and up-to-date with all the latest news, updates, and exclusive content. Please rest assured that we will make it our priority to send you a carefully chosen selection of interesting articles, helpful tips, and exciting announcements directly to your inbox.
                    Your membership is what enables us to keep providing valuable information and engaging content.
                </p>
            </td>
        </tr>
    </table>
@endsection
