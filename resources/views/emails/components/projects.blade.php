<table style="width: 100%">
    <tr>
        <td>
            <p style="font-size: 24px;font-weight:700;text-align: center;margin: 25px auto;">Check Out Latest
                Projects </p>
        </td>
    </tr>
</table>
<table>
    <tr>
        @forelse($projects as $item)
            <td>
                <table style="background-color: white;box-shadow: 2px 2px 15px 2px rgba(0, 0, 0, 0.15);">
                    <tr>
                        <td>
                            @if($item->headerImage)
                                <img style="width: 300px"
                                     src="{{asset("storage/projects/thumbnails/". $item->headerImage->url )}}">
                            @else
                                <img style="width: 300px"
                                     src="{{asset("storage/projects/thumbnails/default.png")}}">
                            @endif
                        </td>
                    </tr>
                    <tr style="height: 100px">
                        <td style="padding: 0 1rem">
                            <p style="text-align: justify;font-size: 16px;">{{ $item->title }}</p>
                            <p style="text-align: justify;margin:0px;">
                                {{ $item->short_summary }}
                            </p>
                        </td>
                    </tr>
                    {{--                    <tr>--}}
                    {{--                        <td>--}}
                    {{--                            <table--}}
                    {{--                                style="background-color: white;padding: 10px;box-shadow: 2px 2px 15px 2px rgba(0, 0, 0, 0.15);">--}}
                    {{--                                <tr>--}}
                    {{--                                    <td>--}}
                    {{--                                       @if($item->headerImage)--}}
                    {{--                                            <img style="top: -20px;right: -20px;width: 250px"--}}
                    {{--                                                 src="{{asset("storage/projects/thumbnails/". $item->headerImage->url )}}">--}}
                    {{--                                        @else--}}
                    {{--                                            <img style="top: -20px;right: -20px;width: 250px"--}}
                    {{--                                                 src="{{asset("storage/projects/thumbnails/default.png")}}">--}}
                    {{--                                       @endif--}}
                    {{--                                    </td>--}}
                    {{--                                </tr>--}}
                    {{--                                <tr>--}}
                    {{--                                    <td>--}}
                    {{--                                        <p style="font-weight: semiBold;text-align: justify;font-size: 16px;margin:0px;">{{ $item->title }}</p>--}}
                    {{--                                        <p style="text-align: justify;margin:0px;">--}}
                    {{--                                            {{ $item->short_summary }}--}}
                    {{--                                        </p>--}}
                    {{--                                    </td>--}}
                    {{--                                </tr>--}}
                    {{--                            </table>--}}
                    {{--                        </td>--}}
                    {{--                    </tr>--}}
                </table>
            </td>
        @empty
        @endforelse
    </tr>
</table>
