<div>
    @if (request()->routeIs('login'))
        <picture class="h-24 sm:h-16" {{ $attributes }}>
            <source srcset="{{url('storage/logos/logo-apiaero.png')}}" />
            <source srcset="{{url('storage/logos/logo-apiaero.webp')}}"/>
            <img class="h-24 sm:h-16" src="{{ url('storage/logos/logo-apiaero.png') }}"
            alt="api-aero">
        </picture>
    @else
        <picture class="h-24 sm:h-16" {{ $attributes }}>
            <source srcset="{{url('storage/logos/logo-apiaero.png')}}" />
            <source srcset="{{url('storage/logos/logo-apiaero.webp')}}"/>
            <img class="h-12 sm:h-12" src="{{ url('storage/logos/logo-apiaero.png') }}"
            alt="api-aero">
        </picture>
    @endif
</div>
