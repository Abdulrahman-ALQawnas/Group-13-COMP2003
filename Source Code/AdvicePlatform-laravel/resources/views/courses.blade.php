@extends('layout.default')
@section('content')

<div
        class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300 mt-16"
      >
     <div class="flex items-center gap-4">
    <p class="text-[20px] font-medium text-[#728990]"><a href="{{route('index')}}"> Home </a></p> <strong class="text-[20px]"> > </strong> <p class="text-[#2B819F] text-[22px] font-bold">  Courses </p>
     </div>


      </div>

      <div class="grid grid-cols-3 gap-4">
        <div class="...">
          <div class="flex flex-col pb-9 bg-sky-700 rounded-xl border border-solid border-cyan-700 border-opacity-40">
            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/a454e3e7241da8cea4069bbd00adfa95c991e85948965c99af7749edf357aa47?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2" alt="Engineering and Mathematics illustration" class="object-contain self-end max-w-full aspect-[1.54] w-[248px]" />
            <div class="flex flex-col pr-8 pl-4 mt-5 max-md:pr-5">
              <h2 class="text-2xl font-semibold text-white"><a href="{{route('single_course')}}">Engineering & Mathematics</a></h2>
              <div class="self-start mt-2 text-base font-medium text-emerald-50" role="status" aria-label="Course Reviews">(10 Reviews)</div>
            </div>
          </div>

        </div>
        <div class="...">
          <div class="flex flex-col items-start pb-10 pl-4 bg-teal-400 rounded-xl">
            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/151a85e43365f24bd6330e3ccd8b89f89eae1deb4aaa1499f30d36ccee20de25?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2" alt="Computer Science illustration" class="object-contain grow shrink-0 aspect-[1.33] basis-0 w-[250px]" />
            <h2 class="-mt-2.5 text-2xl font-semibold text-white"><a href="{{route('single_course')}}"> Computer Science</a></h2>
            <div class="mt-2 text-base font-medium text-white" role="status" aria-label="Course Reviews">(10 Reviews)</div>
          </div>
        </div>

        <div class="..."><div class="flex flex-col items-start pb-10 pl-4 bg-orange-300 rounded-xl">
          <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/6bd5c56632176362c141b1b4b8a79a3e0f78e56ec411fde80bc306179d827a89?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2" alt="Business Studies illustration" class="object-contain z-10 self-end max-w-full aspect-[1.7] w-[322px]" />
          <h2 class="-mt-2.5 text-2xl font-semibold text-white"><a href="{{route('single_course')}}">Business</a></h2>
          <div class="mt-2 text-base font-medium text-white" role="status" aria-label="Course Reviews">(10 Reviews)</div>
        </div></div>

        <div class="..."><div class="flex flex-col px-4 pt-2.5 pb-9 bg-blue-400 rounded-xl">
          <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/a260dd3fb42ca6d3f7bd3e0e3f49c1d4200cb4aaeed0aeaf5e54199f658a3edd?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2" alt="Medical School illustration" class="object-contain self-end max-w-full aspect-[1.48] w-[223px]" />
          <div class="flex flex-col self-start mt-5">
            <h2 class="text-2xl font-semibold text-white"><a href="{{route('single_course')}}">Medical School</a></h2>
            <div class="self-start mt-2 text-base font-medium text-white" role="status" aria-label="Course Reviews">(10 Reviews)</div>
          </div>
        </div></div>

        <div class="flex flex-col pb-9 pl-4 w-full bg-blue-400 rounded-xl">
          <div class="flex gap-2.5 text-2xl font-semibold whitespace-nowrap">
            <h2 class="grow shrink self-end mt-44 w-[110px] max-md:mt-10 text-white"><a href="{{route('single_course')}}">Psychology</a></h2>
            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/530c08f0f5559ecb2993c6ad7ba56ded1eeaddb8196c8081c98fb3df2bce33dc?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2" alt="Psychology Studies illustration" class="object-contain aspect-[1.14] w-[230px]" />
          </div>
          <div class="self-start mt-2 text-base font-medium text-white" role="status" aria-label="Course Reviews">(10 Reviews)</div>
        </div>

        <div class="flex flex-col pb-8 bg-cyan-400 rounded-xl">
          <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/18e8032e6825854ae7291cc651e10ccf62903952b87e30c20776efbf6154f891?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2" alt="Art and Design illustration" class="object-contain self-end max-w-full aspect-[1.11] w-[197px] max-md:mr-1.5" />
          <div class="flex flex-col pr-8 pl-4 mt-2.5 max-md:pr-5">
            <h2 class="text-2xl font-semibold text-white"><a href="{{route('single_course')}}">Art, Design and Architecture</a></h2>
            <div class="self-start mt-2 text-base font-medium text-white" role="status" aria-label="Course Reviews">(10 Reviews)</div>
          </div>
        </div>

        <div class="flex flex-col px-4 pt-2.5 pb-9 rounded-xl bg-zinc-500 max-md:pr-5">
          <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/34bf7d38421aac0c79840b4fbf54b825b677454fe6321bfa9fbc6e836c0942c8?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2" alt="Nursing and Midwifery illustration" class="object-contain self-end w-44 max-w-full aspect-[1.04]" />
          <div class="flex flex-col self-start">
            <h2 class="text-2xl font-semibold text-white"><a href="{{route('single_course')}}">Nursing and Midwifery</a></h2>
            <div class="self-start mt-2 text-base font-medium text-white" role="status" aria-label="Course Reviews">(10 Reviews)</div>
          </div>
        </div>

        <div class="flex flex-col px-4 py-8 bg-red-400 rounded-xl">
          <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/bcbf2a41a36dfaf1f771c122c7562b4cf1b7a0fd62a37b9cac7453d7c98f8fbc?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2" alt="Society and Culture illustration" class="object-contain self-end max-w-full aspect-[1.54] w-[214px]" />
          <div class="flex flex-col self-start mt-3">
            <h2 class="text-2xl font-semibold text-white"><a href="{{route('single_course')}}">Society and culture</a></h2>
            <div class="self-start mt-2 text-base font-medium text-white" role="status" aria-label="Course Reviews">(10 Reviews)</div>
          </div>
        </div>

        <div class="flex flex-col pt-2 pr-2 pb-9 pl-4 bg-indigo-400 rounded-xl">
          <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/6d227000230bfa56722c9c4937c936d6cee67525ad20877a4d28600c6d04861f?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2" alt="Biomedical Sciences illustration" class="object-contain self-end max-w-full aspect-[1.43] w-[235px]" />
          <div class="flex flex-col self-start mt-2.5">
            <h2 class="text-2xl font-semibold text-white"><a href="{{route('single_course')}}">Biomedical Sciences</a></h2>
            <div class="self-start mt-2 text-base font-medium text-white" role="status" aria-label="Course Reviews">(10 Reviews)</div>
          </div>
        </div>

        <div class="flex flex-col px-4 py-5 bg-teal-700 rounded-xl">
          <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/deb492aaf2f96f0da3292cab7ac046052bd4d0a9daec8227c3f8f09b386b6722?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2" alt="Biological and Marine Sciences illustration" class="object-contain self-end max-w-full aspect-[1.54] w-[219px]" />
          <div class="flex flex-col mt-2 w-64 max-w-full">
            <h2 class="text-2xl font-semibold leading-8 text-white"><a href="{{route('single_course')}}">Biological and Marine Sciences</a></h2>
            <div class="self-start mt-1 text-base font-medium text-white" role="status" aria-label="Course Reviews">(10 Reviews)</div>
          </div>
        </div>

        <div class="flex flex-col pb-12 bg-rose-400 rounded-xl">
          <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/62651da8d408ea2ded3b98dadbad76638e3d1a4f21a138c9ac81b5402f630a5b?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2" alt="Institute of Health Sciences illustration" class="object-contain z-10 self-end max-w-full aspect-[1.28] w-[238px]" />
          <div class="flex flex-col px-4 mt-0 max-md:pr-5">
            <h2 class="text-2xl font-semibold leading-none text-white"><a href="{{route('single_course')}}">Institute of Health Sciences</a></h2>
            <div class="self-start mt-2 text-base font-medium text-white" role="status" aria-label="Course Reviews">(10 Reviews)</div>
          </div>
        </div>

        <div class="flex flex-col pb-12 pl-4 bg-cyan-500 rounded-xl">
          <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/e4a0b951f89f51b6d4191e74e5a0bf20c0f742219e436d9d7638d45ab2e3ed4b?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2" alt="Dentistry illustration" class="object-contain self-end max-w-full aspect-[1.51] w-[253px]" />
          <div class="flex flex-col self-start">
            <h2 class="text-2xl font-semibold leading-none text-white"><a href="{{route('single_course')}}">Dentistry</a></h2>
            <div class="self-start mt-2 text-base font-medium text-white" role="status" aria-label="Course Reviews">(10 Reviews)</div>
          </div>
        </div>

        
      @endsection