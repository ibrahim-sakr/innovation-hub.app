{{--<x-layout>--}}
{{--<h1>Mental Math</h1>--}}
{{--</x-layout>--}}
<x-layout>
    <script>
        // Modern Laravel (v8+)
        const formQuestions = {{ Js::from($questions) }};
    </script>
    <div id="ask-form"></div>

</x-layout>
