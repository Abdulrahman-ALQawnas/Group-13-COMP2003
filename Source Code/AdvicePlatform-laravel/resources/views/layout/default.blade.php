<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
@include('includes.head')
<body>
    <div class="flex flex-col items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900 relative">
     
        @include('includes.header')

        @yield('content')
</div>
<script>
      document.getElementById("notificationBtn").addEventListener("click", function () {
        let dropdown = document.getElementById("notificationDropdown");
        dropdown.classList.toggle("hidden");
      });

      // Close dropdown when clicking outside
      document.addEventListener("click", function (event) {
        let dropdown = document.getElementById("notificationDropdown");
        let button = document.getElementById("notificationBtn");

        if (!button.contains(event.target) && !dropdown.contains(event.target)) {
          dropdown.classList.add("hidden");
        }
      });
    </script>
@yield('scripts')
</body>
</html>
