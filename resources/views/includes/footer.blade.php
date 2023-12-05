<!-- <footer class="bg-black p-4 text-white text-center">
  <p>&copy; 2023 Junior Tennis Team. Все права защищены.</p>
  <div class="mt-2 flex justify-center">
    <a href="#" class="footer-link text-white hover:text-green-500 mx-2">О нас</a>
    <a href="#" class="footer-link text-white hover:text-green-500 mx-2">Наши тренера</a>
    <a href="#" class="footer-link text-white hover:text-green-500 mx-2">Тренировки</a>
    <a href="#" class="footer-link text-white hover:text-green-500 mx-2">Галерея</a>
  </div>
  <div class="mt-4">
    <a href="#" class="footer-link text-white hover:text-green-500 mx-2">Политика конфиденциальности</a>
    <span class="text-gray-500">|</span>
    <a href="#" class="footer-link text-white hover:text-green-500 mx-2">Условия использования</a>
  </div>
  <div class="mt-4">
    <a href="https://www.instagram.com/jtt_junior_tennis_team" target="_blank" class="text-white hover:text-green-500 mx-2">
      <img src="{{ asset('img/instagram-icon2.png') }}" alt="Instagram" class="h-6 w-6">
    </a>
  </div>
</footer> -->
<!-- <footer class="bg-black rounded-lg shadow dark:bg-gray-900 m-4">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('img/logo2.png') }}" class="h-8" alt="Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Junior Tennis Team</span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-white sm:mb-0">
                <li>
                    <a href="#" class="hover:text-green-500 me-4 md:me-6">About</a>
                </li>
                <li>
                    <a href="#" class="hover:text-green-500 me-4 md:me-6">Privacy Policy</a>
                </li>
                <li>
                    <a href="#" class="hover:text-green-500 me-4 md:me-6">Licensing</a>
                </li>
                <li>
                    <a href="#" class="hover:text-green-500">Contact</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-white sm:text-center">© 2023 <a href="{{route ('main') }}" class="hover:text-green-500">JTT™</a>. All Rights Reserved.</span>
    </div>
</footer> -->
<footer class="bg-black">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="{{route ('main') }}" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('img/logo2.png') }}" class="h-8" alt="Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Junior Tennis Team</span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-white sm:mb-0">
                <li>
                    <a href="{{ route('about') }}" class="hover:text-green-500 me-4 md:me-6">О нас</a>
                </li>
                <li>
                    <a href="{{ route('coaches') }}" class="hover:text-green-500 me-4 md:me-6">Тренеры</a>
                </li>
                <li>
                    <a href="{{ route('practices') }}" class="hover:text-green-500 me-4 md:me-6">Тренировки</a>
                </li>
                <li>
                    <a href="{{ route('players') }}" class="hover:text-green-500 me-4 md:me-6">Наши игроки</a>
                </li>
                <li>
                    <a href="{{ route('posts') }}" class="hover:text-green-500 me-4 md:me-6">Наш блог</a>
                </li>
                <!-- <li>
                    <a href="#" class="hover:text-green-500 me-4 md:me-6">Privacy Policy</a>
                </li>
                <li>
                    <a href="#" class="hover:text-green-500 me-4 md:me-6">Licensing</a>
                </li> -->
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-white sm:text-center">© 2023 <a href="{{route ('main') }}" class="hover:text-green-500">JTT™</a>. Adel Malgonussova</span>
    </div>
</footer>