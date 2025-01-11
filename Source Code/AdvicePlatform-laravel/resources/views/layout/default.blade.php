<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
@include('includes.head')
<body>
    <div class="flex flex-col items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900 relative">
     
        @include('includes.header')

        @yield('content')
</div>
</body>
</html>
