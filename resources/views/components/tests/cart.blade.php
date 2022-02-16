@props([
    'title',
    'content' => 'contentinitial',
    'message' => ''
])

<div {{ $attributes->merge([
    'class' => 'boder-2 shadow-md w-1/4 p-2'
    ]) }} >
    <div>{{ $title }}</div>
    <div>画像</div>
    <div>{{ $content }}</div>
    <div>{{ $message }}</div>
</div>