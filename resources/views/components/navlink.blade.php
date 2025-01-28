@props(['active' => false])
    <a class="{{ $active ? 'text-white-100':''}}"{{ $attributes }}>
       {{ $slot }}
    </a>