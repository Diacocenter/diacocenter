<table>
    <p style="margin-top: 25px;font-size: 24px;font-weight:700;text-align: center;">Check Out Latest Projects </p>
    <tr>
        @forelse($projects as $item)
            <td>
                <table>
                    <tr>
                        <td style="padding: 10px;">
                            <table
                                style="background-color: white;padding: 10px;box-shadow: 2px 2px 15px 2px rgba(0, 0, 0, 0.15);">
                                <tr>
                                    <td>
                                       @if($item->headerImage)
                                            <img style="top: -20px;right: -20px;width: 250px"
                                                 src="{{asset("storage/projects/thumbnails/". $item->headerImage->url )}}">
                                        @else
                                            <img style="top: -20px;right: -20px;width: 250px"
                                                 src="{{asset("storage/projects/thumbnails/default.png")}}">
                                       @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p style="font-weight: bold;text-align: justify;font-size: 22px;margin:0px;">{{ $item->title }}</p>
                                        <p style="text-align: justify;margin:0px;">
                                            {{ $item->short_summary }}
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                </table>
            </td>
        @empty
        @endforelse
    </tr>
</table>
