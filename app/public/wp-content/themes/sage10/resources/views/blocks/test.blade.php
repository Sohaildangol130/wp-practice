{{--
script[leadspace.js]script
style[banner.scss]style
Title: Test
Description: This is new test module
Category: outside
Icon: admin-tools
Keywords: leadspace
Mode: auto
Align: center
PostTypes: post page
SupportsMode: false
SupportsMultiple: true
SupportsAlign: left right
SupportsAlignContent: center
EnqueueStyle:
EnqueueScript:
EnqueueAssets: assetsEnqueue
EnqueueAssetsCSS: styles/test.css
EnqueueAssetsJS:
--}}


@if ( ! empty( $is_preview  ) )
    @php
        /* Render screenshot for example */
        $imgUrl = \Roots\asset('images/preview/test.png')->uri();
    @endphp
    <img loading="lazy" src="{!! $imgUrl !!}" style="width:100%;height:auto;">
@else
    @php
        $blockId = $block['id'];
        $content = get_field('banner');
        $title = $content['title'] ?? false;
    @endphp

    @if($title)
        <h1> {{ $title }} </h1>
    @endif
@endif
