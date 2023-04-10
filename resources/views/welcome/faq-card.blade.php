<details class="open:border-sky-600 border-2 rounded-2xl p-6" @if($open) open @endif>
    <summary class="mb-4 text-lg font-semibold leading-normal cursor-pointer">
        {{ __('faqs.' . $question) }}
    </summary>
    <p class="text-gray-800">
        {!!  __('faqs.' . $answer) !!}
    </p>
</details>
