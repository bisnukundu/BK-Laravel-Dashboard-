@props(['label','icon','route','target','active'=>false])
<li class="relative px-6 py-3">
    <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
        aria-hidden="true"></span>
    <a class="inline-flex items-center w-full text-sm font-semibold  transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{$active == true ? 'dark:text-gray-100 text-gray-800' :'' }}"
    target="{{$target ?? '_self'}}"
        href="{{$route}}">
        <x-icon name="{{$icon}}" class="w-5 h-5"/>
        <span class="ml-4">{{$label}}</span>
    </a>
</li>
