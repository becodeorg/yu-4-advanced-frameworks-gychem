<nav class="bg-white sm:p-6 dark:bg-gray-900">
    <div class="w-4/5 mx-auto sm:flex sm:items-center sm:justify-between">

        <div class="mb-6 md:mb-0">
            <a href="/" class="flex items-center">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Your CMS</span>
            </a>
        </div>

        <div class="flex space-x-6 sm:justify-center sm:mt-0">
            <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                    <li>
                        <a href="{{route('home')}}" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{route('news')}}" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                            News
                        </a>
                    </li>
                    @foreach ($pages as $page)
                        <li>
                            <a href="/{{ $page->slug }}" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                                {{ $page->name }}
                            </a>
                        </li>
                    @endforeach
                    <li>
                        <a href="{{route('contact')}}" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                            Contact
                        </a>
                    </li>
                    @auth
                    <li>
                        <a href="/admin" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                            Admin
                        </a>
                    </li>
                    <li>
                        <button type="button" class="flex gap-2 capitalize block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" aria-controls="dropdown-header-user" data-collapse-toggle="dropdown-header-user">
            
                            <img class="rounded-full" src="{{ $profile->image }}" width="25px" style="height:25px">
                            
                            {{ $profile->username }}
                        </button>
                        <ul id="dropdown-header-user" class="hidden py-2 absolute bg-slate-100  dark:bg-slate-800 rounded mt-2 z-20 border-solid border-2 border-slate-300 border-opacity-10">
                            <li>
                                <a href="/profile/{{ $profile->slug }}" class="flex items-center p-2 w-full text-base font-normal text-gray-900 transition duration-75 group hover:bg-gray-200 dark:text-white dark:hover:bg-gray-700">Profile</a>
                            </li>
                            <li>
                                <a href="/inbox" class="flex items-center p-2 w-full text-base font-normal text-gray-900 transition duration-75 group hover:bg-gray-200 dark:text-white dark:hover:bg-gray-700">Inbox</a>
                            </li>
                            <li>
                                <a href="{{route('admin/pages')}}" class="flex items-center p-2 w-full text-base font-normal text-gray-900 transition duration-75 group hover:bg-gray-200 dark:text-white dark:hover:bg-gray-700">Settings</a>
                            </li>
                            <li>
                                <a href="/logout" class="flex items-center p-2 w-full text-base font-normal text-gray-900 transition duration-75 group hover:bg-gray-200 dark:hover:bg-gray-700 text-red-800">Logout</a>
                            </li>
                        </ul>
                    </li>
                    @else
                    <li>
                        <a href="{{route('login')}}" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Log In</a>
                    </li>
                    <li>
                        <a href="{{route('register')}}" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Register</a>
                    </li>
                    @endauth
                    <li>
                        <button id="theme-toggle" type="button" class="text-gray-500 focus:outline-none rounded-lg text-sm">
                            <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                            <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                        </button>               
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>