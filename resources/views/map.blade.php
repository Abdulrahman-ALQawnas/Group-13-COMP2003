@extends('layout.default')
@section('content')
      <div
        class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300 mt-16"
      >
     <div class="flex items-center gap-4">
    <p class="text-[20px] font-medium text-[#728990]"><a href="{{route('index')}}"> Home </a></p> <strong class="text-[20px]"> > </strong> <p class="text-[#2B819F] text-[22px] font-bold">  Map </p>
     </div>


      </div>

      <div class="flex overflow-hidden flex-col items-center pt-6 bg-white" role="region" aria-label="Map Navigation">
        
      
      
        <div class="self-stretch mt-8 w-full max-md:max-w-full max-w-[1500px]">
          <div class="flex gap-5 max-md:flex-col">
            <nav class="flex flex-col w-[18%] max-md:ml-0 max-md:w-full" aria-label="Location Navigation">
              <div class="flex flex-col grow px-11 pt-11 pb-28 w-full text-2xl font-medium leading-none whitespace-nowrap bg-zinc-50 text-black text-opacity-60 max-md:px-5 max-md:pb-24">
                <div class="flex flex-col w-full">
                 
                
                  <button class="flex-1 shrink self-stretch mt-10 w-full rounded-lg hover:text-cyan-700 focus:outline-none focus:ring-2 focus:ring-cyan-700" aria-label="Navigate to SHC">Robbin</button>
                  <button class="flex-1 shrink self-stretch mt-10 w-full rounded-lg hover:text-cyan-700 focus:outline-none focus:ring-2 focus:ring-cyan-700" aria-label="Navigate to SHC">SHC</button>
                  <button class="flex-1 shrink self-stretch mt-10 w-full rounded-lg hover:text-cyan-700 focus:outline-none focus:ring-2 focus:ring-cyan-700" aria-label="Navigate to Rolle">Rolle</button>
                  <button class="flex-1 shrink self-stretch mt-10 w-full rounded-lg hover:text-cyan-700 focus:outline-none focus:ring-2 focus:ring-cyan-700" aria-label="Navigate to BGB">BGB</button>
                  <button class="flex-1 shrink self-stretch mt-10 w-full rounded-lg hover:text-cyan-700 focus:outline-none focus:ring-2 focus:ring-cyan-700" aria-label="Navigate to SCB">SCB</button>
                  <button class="flex-1 shrink self-stretch mt-10 w-full rounded-lg hover:text-cyan-700 focus:outline-none focus:ring-2 focus:ring-cyan-700" aria-label="Navigate to DYB">DYB</button>
                  <button class="flex-1 shrink self-stretch mt-10 w-full rounded-lg hover:text-cyan-700 focus:outline-none focus:ring-2 focus:ring-cyan-700" aria-label="Navigate to BRL">BRL</button>
                  <button class="flex-1 shrink self-stretch mt-10 w-full rounded-lg hover:text-cyan-700 focus:outline-none focus:ring-2 focus:ring-cyan-700" aria-label="Navigate to MB">MB</button>
                  <button class="flex-1 shrink self-stretch mt-10 w-full rounded-lg hover:text-cyan-700 focus:outline-none focus:ring-2 focus:ring-cyan-700" aria-label="Navigate to RLB">RLB</button>
                  <button class="flex-1 shrink self-stretch mt-10 w-full rounded-lg hover:text-cyan-700 focus:outline-none focus:ring-2 focus:ring-cyan-700" aria-label="Navigate to CKY">CKY</button>
                </div>
              </div>
            </nav>
            <div class="flex flex-col ml-5 w-[82%] max-md:ml-0 max-md:w-full">
            <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=1000&amp;height=700&amp;hl=en&amp;q=University of plymouth&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://sprunkin.com">Sprunki Mods</a></div><style>.mapouter{position:relative;text-align:right;width:1000px;height:700px;}.gmap_canvas {overflow:hidden;background:none!important;width:1000px;height:700px;}.gmap_iframe {width:1000px!important;height:700px!important;}</style></div>            </div>
          </div>
        </div>
      @endsection