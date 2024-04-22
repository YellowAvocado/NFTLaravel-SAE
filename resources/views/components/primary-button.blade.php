<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 dark:text-gray-800 tracking-widest focus:bg-gray-700 active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
