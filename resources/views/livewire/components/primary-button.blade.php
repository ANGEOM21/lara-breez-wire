<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn bg-lime-300 hover:bg-lime-400']) }}>
    {{ $slot }}
</button>
