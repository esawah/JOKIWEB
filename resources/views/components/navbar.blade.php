 <!-- resources/views/components/navbar.blade.php -->
 <nav class="bg-gray-800">
     <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
         <div class="relative flex h-16 items-center justify-between">
             <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                 <!-- Mobile menu button-->
                 <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                     <span class="absolute -inset-0.5"></span>
                     <span class="sr-only">Open main menu</span>
                     <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                         <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                     </svg>
                     <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                         <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                     </svg>
                 </button>
             </div>
             <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                 <div class="flex flex-shrink-0 items-center">
                     <h2 class="text-xl font-semibold text-white cursor-pointer">
                         Laravote
                     </h2>
                 </div>
                 <div class="hidden sm:ml-6 sm:block">
                     <div class="flex space-x-4">
                         <a href="{{ route('paslon') }}" class="menu-item rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white {{ request()->routeIs('paslon') ? 'bg-gray-900 text-white' : '' }}" aria-current="{{ request()->routeIs('paslon') ? 'page' : '' }}">Paslon</a>
                         <a href="{{ route('kategori') }}" class="menu-item rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white {{ request()->routeIs('kategori') ? 'bg-gray-900 text-white' : '' }}" aria-current="{{ request()->routeIs('kategori') ? 'page' : '' }}">Kategori</a>
                         <a href="{{ route('peserta.index') }}" class="menu-item rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white {{ request()->routeIs('peserta.index') ? 'bg-gray-900 text-white' : '' }}" aria-current="{{ request()->routeIs('peserta.index') ? 'page' : '' }}">Peserta</a>
                         <a href="{{ route('riwayat') }}" class="menu-item rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white {{ request()->routeIs('riwayat') ? 'bg-gray-900 text-white' : '' }}" aria-current="{{ request()->routeIs('riwayat') ? 'page' : '' }}">Riwayat</a>
                     </div>
                 </div>
             </div>
             <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                 <div class="relative ml-3">
                     <div>
                         <button type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                             <span class="absolute -inset-1.5"></span>
                             <span class="sr-only">Open user menu</span>
                             <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                         </button>
                     </div>
                     <div id="profile-dropdown" class="hidden absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                         <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                         <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                         <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="sm:hidden" id="mobile-menu">
         <div class="space-y-1 px-2 pb-3 pt-2">
             <a href="{{ route('paslon') }}" class="menu-item block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white {{ request()->routeIs('paslon') ? 'bg-gray-900 text-white' : '' }}" aria-current="{{ request()->routeIs('paslon') ? 'page' : '' }}">Paslon</a>
             <a href="{{ route('kategori') }}" class="menu-item block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white {{ request()->routeIs('kategori') ? 'bg-gray-900 text-white' : '' }}" aria-current="{{ request()->routeIs('kategori') ? 'page' : '' }}">Kategori</a>
             <a href="{{ route('peserta.index') }}" class="menu-item block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white {{ request()->routeIs('peserta.index') ? 'bg-gray-900 text-white' : '' }}" aria-current="{{ request()->routeIs('peserta.index') ? 'page' : '' }}">Peserta</a>
             <a href="{{ route('riwayat') }}" class="menu-item block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white {{ request()->routeIs('riwayat') ? 'bg-gray-900 text-white' : '' }}" aria-current="{{ request()->routeIs('riwayat') ? 'page' : '' }}">Riwayat</a>
         </div>
     </div>
 </nav>



 <script>
     document.addEventListener('DOMContentLoaded', function() {
         var menuItems = document.querySelectorAll('.menu-item');

         menuItems.forEach(function(item) {
             item.addEventListener('click', function() {
                 menuItems.forEach(function(el) {
                     el.classList.remove('active');
                     el.setAttribute('aria-current', 'false');
                 });
                 this.classList.add('active');
                 this.setAttribute('aria-current', 'page');
             });
         });

         var userMenuButton = document.getElementById('user-menu-button');
         var profileDropdown = document.getElementById('profile-dropdown');

         userMenuButton.addEventListener('click', function() {
             profileDropdown.classList.toggle('hidden');
         });

         document.addEventListener('click', function(event) {
             if (!userMenuButton.contains(event.target) && !profileDropdown.contains(event.target)) {
                 profileDropdown.classList.add('hidden');
             }
         });
     });
 </script>