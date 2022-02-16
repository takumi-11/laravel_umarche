<x-tests.app>
    <x-slot name='header'>
        header1
    </x-slot>

    コンポーネント1

    <x-tests.cart title="タイトル" content='本文' :message='$message' />
    <x-tests.cart title="タイトル2" />
    <x-tests.cart title="css変更したい" class='font-bold' />

</x-tests.app>