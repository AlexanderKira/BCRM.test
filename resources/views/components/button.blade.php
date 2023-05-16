@props(['color' => 'primary'])

<button {{$attributes->class([
    'btn btn-{$color}',
])->merge([
    'type' => 'button',
])}} class="btn btn-primary">
    {{$slot}}
</button>