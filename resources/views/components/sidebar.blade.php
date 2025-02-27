@php
   use App\Models\IdentitiySchool;
    $IdentitySchool = IdentitiySchool::first();
@endphp

<div>
    <aside class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header d-flex">
            <div class="m-auto pt-2">
                <img src="{{ asset($IdentitySchool && $IdentitySchool->logo ? 'storage/' . $IdentitySchool->logo : 'backend/assets/images/NoImage.png') }}" class="logo-icon" alt="logo icon" height="80px">
            </div>
        </div>
        <ul class="metismenu" id="menu">

            {{-- APLIKASI --}}
            @if (collect(config('sidebar'))->where('category', 'Aplication')->count() > 0)
                @if (collect(config('sidebar'))->where('category', 'Aplication')->pluck('permission')->flatten()->contains(auth()->user()->role))
                    <li class="menu-label">Aplikasi</li>
                @endif
                @foreach (config('sidebar') as $item)
                    @if ($item['category'] == 'Aplication' && in_array(auth()->user()->role, $item['permission']))
                        <x-partials.navigation-sidebar :$item />
                    @endif
                @endforeach
            @endif

            {{-- KELOLA DATA --}}
            @if (collect(config('sidebar'))->where('category', 'Manage')->count() > 0)
                @if (collect(config('sidebar'))->where('category', 'Manage')->pluck('permission')->flatten()->contains(auth()->user()->role))
                    <li class="menu-label">Kelola Data</li>
                @endif
                @foreach (config('sidebar') as $item)
                    @if ($item['category'] == 'Manage' && in_array(auth()->user()->role, $item['permission']))
                        <x-partials.navigation-sidebar :$item />
                    @endif
                @endforeach
            @endif

            {{-- HALAMAN DEPAN --}}
            @if (collect(config('sidebar'))->where('category', 'Landing Page')->count() > 0)
                @if (collect(config('sidebar'))->where('category', 'Landing Page')->pluck('permission')->flatten()->contains(auth()->user()->role))
                    <li class="menu-label">Halaman Depan</li>
                @endif
                @foreach (config('sidebar') as $item)
                    @if ($item['category'] == 'Landing Page' && in_array(auth()->user()->role, $item['permission']))
                        <x-partials.navigation-sidebar :$item />
                    @endif
                @endforeach
            @endif

            {{-- SETTING --}}
            @if (collect(config('sidebar'))->where('category', 'Account')->count() > 0)
                @if (collect(config('sidebar'))->where('category', 'Account')->pluck('permission')->flatten()->contains(auth()->user()->role))
                    <li class="menu-label">Setting</li>
                @endif
                @foreach (config('sidebar') as $item)
                    @if ($item['category'] == 'Account' && in_array(auth()->user()->role, $item['permission']))
                        <x-partials.navigation-sidebar :$item />
                    @endif
                @endforeach
            @endif
        </ul>
    </aside>
</div>
