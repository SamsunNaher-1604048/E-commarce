<div aria-label="breadcrumb">
    <ol class="breadcrumb" style="margin-left: 300px">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        @if($parent)
        <li class="breadcrumb-item"><a href="#">{{ $parent }}</a></li>
        @endif
        @if($child)
        <li class="breadcrumb-item active" aria-current="page">{{ $child }}</li>
        @endif
    </ol>
</div>