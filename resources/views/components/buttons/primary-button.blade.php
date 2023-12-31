<button
    {{ $attributes->class([
            'inline-flex',
            'justify-center',
            'rounded-md',
            'bg-cyan-600',
            'p-4',
            'border',
            'border-transparent',
            'text-xs',
            'uppercase',
            'text-white',
            'font-semibold',
            'tracking-widest',
            'transition',
            'ease-in-out',
            'duration-150',
            'active:bg-cyan-900',
            'hover:bg-cyan-800',
            'focus:bg-cyan-800',
            'focus:outline-none',
            'focus:ring-2',
            'focus:ring-offset-2',
            'focus:ring-indigo-500',
            'dark:focus:ring-offset-gray-800',
            'dark:active:bg-gray-300',
            'dark:focus:bg-white',
            'dark:hover:bg-white',
            'dark:text-gray-800',
            'dark:bg-gray-200',
        ])->merge(['type' => 'submit']) }}>
    {{ $slot }}
</button>
