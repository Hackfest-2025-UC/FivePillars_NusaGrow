<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{ route('suplier.dashboard.index') }}"
                    class="flex items-center p-2 rounded-lg group
                {{ request()->routeIs('suplier.dashboard.index') ? 'text-white dark:text-green-600 bg-green-500 dark:bg-gray-700' : 'text-gray-900 dark:text-white hover:bg-green-200 dark:hover:bg-gray-700' }}">
                    <i class="ri-dashboard-line text-2xl"></i>
                    <span class="ms-3">Beranda</span>
                </a>
            </li>
            <li>
                <a href="{{ route('products.index') }}"
                    class="flex items-center p-2 rounded-lg group
                {{ request()->routeIs('products.index') ? 'text-white dark:text-green-600 bg-green-500 dark:bg-gray-700' : 'text-gray-900 dark:text-white hover:bg-green-200 dark:hover:bg-gray-700' }}">
                    <i class="ri-archive-line text-2xl"></i>
                    <span class="flex-1 ms-3 whitespace-nowrap">Produk</span>
                </a>
            </li>
            <li>
                <a href="{{ route('suplier.request.index') }}"
                class="flex items-center p-2 rounded-lg group
                {{ request()->routeIs('suplier.request.index') ? 'text-white dark:text-green-600 bg-green-500 dark:bg-gray-700' : 'text-gray-900 dark:text-white hover:bg-green-200 dark:hover:bg-gray-700' }}">
                    <i class="ri-question-answer-line text-2xl"></i>
                    <span class="flex-1 ms-3 whitespace-nowrap">Permintaan Produsen</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
