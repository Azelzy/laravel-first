@props(['active' => false])

<a {{ $attributes }} 
   class="{{ $active 
      ? 'bg-[#FF9013] text-[#F5F1DC] border-2 border-black shadow-[3px_3px_0px_0px_rgba(0,0,0,0.25)]' 
      : 'bg-white text-gray-900 border-2 border-black hover:bg-[#73C8D2] hover:text-[#F5F1DC] shadow-[2px_2px_0px_0px_rgba(0,0,0,0.25)] hover:shadow-[3px_3px_0px_0px_rgba(0,0,0,0.25)]' }} 
   px-4 py-2 text-sm font-bold uppercase transition-all hover:translate-x-0.5 hover:translate-y-0.5"
   aria-current="{{ $active ? 'page' : false }}">
    {{ $slot }}
</a>