<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Innovation hub feedback</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('activities/img/main-logo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
          href="{{ asset('activities/img/main-logo.png') }}">
    <link rel="icon" type="image/png" sizes="32x32"
          href="{{ asset('activities/img/main-logo.png') }}">
    <link rel="icon" type="image/png" sizes="48x48"
          href="{{ asset('activities/img/main-logo.png') }}">
    <meta name="theme-color" content="#fff">
    <meta name="application-name" content="Tailwind Webpack Boilerplate">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('activities/img/main-logo.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('activities/img/main-logo.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('activities/img/main-logo.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('activities/img/main-logo.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('activities/img/main-logo.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('activities/img/main-logo.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('activities/img/main-logo.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('activities/img/main-logo.png') }}">
    <link rel="apple-touch-icon" sizes="167x167" href="{{ asset('activities/img/main-logo.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('activities/img/main-logo.png') }}">
    <link rel="apple-touch-icon" sizes="1024x1024" href="{{ asset('activities/img/main-logo.png') }}">
    <style>@import url(https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap);
        /*! tailwindcss v2.2.11 | MIT License | https://tailwindcss.com *//*! modern-normalize v1.1.0 | MIT License | https://github.com/sindresorhus/modern-normalize */
        html {
            -moz-tab-size: 4;
            -o-tab-size: 4;
            tab-size: 4;
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0;
            font-family: system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji
        }

        hr {
            height: 0;
            color: inherit
        }

        abbr[title] {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        b, strong {
            font-weight: bolder
        }

        code, kbd, pre, samp {
            font-family: ui-monospace, SFMono-Regular, Consolas, Liberation Mono, Menlo, monospace;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub, sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit
        }

        button, input, optgroup, select, textarea {
            font-family: inherit;
            font-size: 100%;
            line-height: 1.15;
            margin: 0
        }

        button, select {
            text-transform: none
        }

        [type=button], [type=reset], [type=submit], button {
            -webkit-appearance: button
        }

        ::-moz-focus-inner {
            border-style: none;
            padding: 0
        }

        :-moz-focusring {
            outline: 1px dotted ButtonText
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        legend {
            padding: 0
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button, ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote, dd, dl, figure, h1, h2, h3, h4, h5, h6, hr, p, pre {
            margin: 0
        }

        button {
            background-color: transparent;
            background-image: none
        }

        fieldset, ol, ul {
            margin: 0;
            padding: 0
        }

        ol, ul {
            list-style: none
        }

        html {
            font-family: Roboto, sans-serif;
            line-height: 1.5
        }

        body {
            font-family: inherit;
            line-height: inherit
        }

        *, :after, :before {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            border: 0 solid
        }

        hr {
            border-top-width: 1px
        }

        img {
            border-style: solid
        }

        textarea {
            resize: vertical
        }

        input::-webkit-input-placeholder, textarea::-webkit-input-placeholder {
            color: #9ca3af
        }

        input::-moz-placeholder, textarea::-moz-placeholder {
            color: #9ca3af
        }

        input:-ms-input-placeholder, textarea:-ms-input-placeholder {
            color: #9ca3af
        }

        input::-ms-input-placeholder, textarea::-ms-input-placeholder {
            color: #9ca3af
        }

        input::placeholder, textarea::placeholder {
            color: #9ca3af
        }

        [role=button], button {
            cursor: pointer
        }

        :-moz-focusring {
            outline: auto
        }

        table {
            border-collapse: collapse
        }

        h1, h2, h3, h4, h5, h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        button, input, optgroup, select, textarea {
            padding: 0;
            line-height: inherit;
            color: inherit
        }

        code, kbd, pre, samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace
        }

        audio, canvas, embed, iframe, img, object, svg, video {
            display: block;
            vertical-align: middle
        }

        img, video {
            max-width: 100%;
            height: auto
        }

        [hidden] {
            display: none
        }

        *, :after, :before {
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
            --tw-border-opacity: 1;
            border-color: rgba(229, 231, 235, var(--tw-border-opacity));
            --tw-ring-inset: var(--tw-empty, /*!*/ /*!*/);
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgba(59, 130, 246, 0.5);
            --tw-ring-offset-shadow: 0 0 transparent;
            --tw-ring-shadow: 0 0 transparent;
            --tw-shadow: 0 0 transparent;
            --tw-blur: var(--tw-empty, /*!*/ /*!*/);
            --tw-brightness: var(--tw-empty, /*!*/ /*!*/);
            --tw-contrast: var(--tw-empty, /*!*/ /*!*/);
            --tw-grayscale: var(--tw-empty, /*!*/ /*!*/);
            --tw-hue-rotate: var(--tw-empty, /*!*/ /*!*/);
            --tw-invert: var(--tw-empty, /*!*/ /*!*/);
            --tw-saturate: var(--tw-empty, /*!*/ /*!*/);
            --tw-sepia: var(--tw-empty, /*!*/ /*!*/);
            --tw-drop-shadow: var(--tw-empty, /*!*/ /*!*/);
            --tw-filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
        }

        [multiple], [type=date], [type=datetime-local], [type=email], [type=month], [type=number], [type=password], [type=search], [type=tel], [type=text], [type=time], [type=url], [type=week], select, textarea {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-color: #fff;
            border-color: #6b7280;
            border-width: 1px;
            border-radius: 0;
            padding: .5rem .75rem;
            font-size: 1rem;
            line-height: 1.5rem
        }

        [multiple]:focus, [type=date]:focus, [type=datetime-local]:focus, [type=email]:focus, [type=month]:focus, [type=number]:focus, [type=password]:focus, [type=search]:focus, [type=tel]:focus, [type=text]:focus, [type=time]:focus, [type=url]:focus, [type=week]:focus, select:focus, textarea:focus {
            outline: 2px solid transparent;
            outline-offset: 2px;
            --tw-ring-inset: var(--tw-empty, /*!*/ /*!*/);
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: #2563eb;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            -webkit-box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 transparent);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 transparent);
            border-color: #2563eb
        }

        input::-webkit-input-placeholder, textarea::-webkit-input-placeholder {
            color: #6b7280;
            opacity: 1
        }

        input::-moz-placeholder, textarea::-moz-placeholder {
            color: #6b7280;
            opacity: 1
        }

        input:-ms-input-placeholder, textarea:-ms-input-placeholder {
            color: #6b7280;
            opacity: 1
        }

        input::-ms-input-placeholder, textarea::-ms-input-placeholder {
            color: #6b7280;
            opacity: 1
        }

        input::placeholder, textarea::placeholder {
            color: #6b7280;
            opacity: 1
        }

        ::-webkit-datetime-edit-fields-wrapper {
            padding: 0
        }

        ::-webkit-date-and-time-value {
            min-height: 1.5em
        }

        select {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3E%3Cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3E%3C/svg%3E");
            background-position: right .5rem center;
            background-repeat: no-repeat;
            background-size: 1.5em 1.5em;
            padding-right: 2.5rem;
            -webkit-print-color-adjust: exact;
            color-adjust: exact
        }

        [multiple] {
            background-image: none;
            background-position: 0 0;
            background-repeat: unset;
            background-size: initial;
            padding-right: .75rem;
            -webkit-print-color-adjust: unset;
            color-adjust: unset
        }

        [type=checkbox], [type=radio] {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            padding: 0;
            -webkit-print-color-adjust: exact;
            color-adjust: exact;
            display: inline-block;
            vertical-align: middle;
            background-origin: border-box;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            height: 1rem;
            width: 1rem;
            color: #2563eb;
            background-color: #fff;
            border-color: #6b7280;
            border-width: 1px
        }

        [type=checkbox] {
            border-radius: 0
        }

        [type=radio] {
            border-radius: 100%
        }

        [type=checkbox]:focus, [type=radio]:focus {
            outline: 2px solid transparent;
            outline-offset: 2px;
            --tw-ring-inset: var(--tw-empty, /*!*/ /*!*/);
            --tw-ring-offset-width: 2px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: #2563eb;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            -webkit-box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 transparent);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 transparent)
        }

        [type=checkbox]:checked, [type=radio]:checked {
            border-color: transparent;
            background-color: currentColor;
            background-size: 100% 100%;
            background-position: 50%;
            background-repeat: no-repeat
        }

        [type=checkbox]:checked {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg viewBox='0 0 16 16' fill='%23fff' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M12.207 4.793a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L6.5 9.086l4.293-4.293a1 1 0 011.414 0z'/%3E%3C/svg%3E")
        }

        [type=radio]:checked {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg viewBox='0 0 16 16' fill='%23fff' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle cx='8' cy='8' r='3'/%3E%3C/svg%3E")
        }

        [type=checkbox]:checked:focus, [type=checkbox]:checked:hover, [type=radio]:checked:focus, [type=radio]:checked:hover {
            border-color: transparent;
            background-color: currentColor
        }

        [type=checkbox]:indeterminate {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 16 16'%3E%3Cpath stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 8h8'/%3E%3C/svg%3E");
            border-color: transparent;
            background-color: currentColor;
            background-size: 100% 100%;
            background-position: 50%;
            background-repeat: no-repeat
        }

        [type=checkbox]:indeterminate:focus, [type=checkbox]:indeterminate:hover {
            border-color: transparent;
            background-color: currentColor
        }

        [type=file] {
            background: unset;
            border-color: inherit;
            border-width: 0;
            border-radius: 0;
            padding: 0;
            font-size: unset;
            line-height: inherit
        }

        [type=file]:focus {
            outline: 1px auto -webkit-focus-ring-color
        }

        .a {
            width: 100%
        }

        @media (min-width: 640px) {
            .a {
                max-width: 640px
            }
        }

        @media (min-width: 768px) {
            .a {
                max-width: 768px
            }
        }

        @media (min-width: 1024px) {
            .a {
                max-width: 1024px
            }
        }

        @media (min-width: 1280px) {
            .a {
                max-width: 1280px
            }
        }

        @media (min-width: 1536px) {
            .a {
                max-width: 1536px
            }
        }

        .b, .c, .d, .e, .f, .g, .h, .i, .j, .k, .l, .m, .n, .o, .p, .q {
            position: relative;
            padding-bottom: calc(var(--tw-aspect-h) / var(--tw-aspect-w) * 100%)
        }

        .b > *, .c > *, .d > *, .e > *, .f > *, .g > *, .h > *, .i > *, .j > *, .k > *, .l > *, .m > *, .n > *, .o > *, .p > *, .q > * {
            position: absolute;
            height: 100%;
            width: 100%;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0
        }

        .b {
            --tw-aspect-w: 1
        }

        .d {
            --tw-aspect-w: 3
        }

        .m {
            --tw-aspect-w: 12
        }

        .q {
            --tw-aspect-w: 16
        }

        .r {
            --tw-aspect-h: 1
        }

        .s {
            --tw-aspect-h: 2
        }

        .t {
            --tw-aspect-h: 4
        }

        .u {
            --tw-aspect-h: 9
        }

        .v {
            --tw-aspect-h: 10
        }

        .w {
            color: #18083a;
            max-width: 65ch
        }

        .w [class~=lead] {
            color: #4b5563;
            font-size: 1.25em;
            line-height: 1.6;
            margin-top: 1.2em;
            margin-bottom: 1.2em
        }

        .w a {
            color: #49479f;
            text-decoration: underline;
            font-weight: 500
        }

        .w a:hover {
            color: #7c7ac4
        }

        .w strong {
            color: #160041;
            font-weight: 600
        }

        .w ol[type=A] {
            --list-counter-style: upper-alpha
        }

        .w ol[type=a] {
            --list-counter-style: lower-alpha
        }

        .w ol[type=I] {
            --list-counter-style: upper-roman
        }

        .w ol[type=i] {
            --list-counter-style: lower-roman
        }

        .w ol[type="1"] {
            --list-counter-style: decimal
        }

        .w ol > li {
            position: relative;
            padding-left: 1.75em
        }

        .w ol > li:before {
            content: counter(list-item, var(--list-counter-style, decimal)) ".";
            position: absolute;
            font-weight: 400;
            color: #18083a;
            left: 0
        }

        .w ul > li {
            position: relative;
            padding-left: 1.75em
        }

        .w ul > li:before {
            content: "";
            position: absolute;
            background-color: #18083a;
            border-radius: 50%;
            width: .375em;
            height: .375em;
            top: .6875em;
            left: .25em
        }

        .w hr {
            border-color: #f0ebfe;
            border-top-width: 1px;
            margin-top: 3em;
            margin-bottom: 3em
        }

        .w blockquote {
            font-weight: 500;
            font-style: italic;
            color: #2c1854;
            border-left-width: .25rem;
            border-left-color: #49479f;
            quotes: "\201C" "\201D" "\2018" "\2019";
            margin-top: 1.6em;
            margin-bottom: 1.6em;
            padding-left: 1em
        }

        .w blockquote p:first-of-type:before {
            content: open-quote
        }

        .w blockquote p:last-of-type:after {
            content: close-quote
        }

        .w h1 {
            color: #160041;
            font-weight: 800;
            font-size: 2.25em;
            margin-top: 0;
            margin-bottom: .8888889em;
            line-height: 1.1111111
        }

        .w h2 {
            color: #160041;
            font-weight: 700;
            font-size: 1.5em;
            margin-top: 2em;
            margin-bottom: 1em;
            line-height: 1.3333333
        }

        .w h3 {
            font-size: 1.25em;
            margin-top: 1.6em;
            margin-bottom: .6em;
            line-height: 1.6
        }

        .w h3, .w h4 {
            color: #160041;
            font-weight: 600
        }

        .w h4 {
            margin-top: 1.5em;
            margin-bottom: .5em;
            line-height: 1.5
        }

        .w figure figcaption {
            color: #18083a;
            font-size: .875em;
            line-height: 1.4285714;
            margin-top: .8571429em
        }

        .w code {
            color: #160041;
            font-weight: 600;
            font-size: .875em
        }

        .w code:after, .w code:before {
            content: "`"
        }

        .w a code {
            color: #2c1854
        }

        .w pre {
            color: #f4f0fc;
            background-color: #160041;
            overflow-x: auto;
            font-size: .875em;
            line-height: 1.7142857;
            margin-top: 1.7142857em;
            margin-bottom: 1.7142857em;
            border-radius: .375rem;
            padding: .8571429em 1.1428571em
        }

        .w pre code {
            background-color: transparent;
            border-width: 0;
            border-radius: 0;
            padding: 0;
            font-weight: 400;
            color: inherit;
            font-size: inherit;
            font-family: inherit;
            line-height: inherit
        }

        .w pre code:after, .w pre code:before {
            content: none
        }

        .w table {
            width: 100%;
            table-layout: auto;
            text-align: left;
            margin-top: 2em;
            margin-bottom: 2em;
            font-size: .875em;
            line-height: 1.7142857
        }

        .w thead {
            color: #160041;
            font-weight: 600;
            border-bottom-width: 1px;
            border-bottom-color: #e0d7fc
        }

        .w thead th {
            vertical-align: bottom;
            padding-right: .5714286em;
            padding-bottom: .5714286em;
            padding-left: .5714286em
        }

        .w tbody tr {
            border-bottom-width: 1px;
            border-bottom-color: #e0d7fc
        }

        .w tbody tr:last-child {
            border-bottom-width: 0
        }

        .w tbody td {
            vertical-align: top;
            padding: .5714286em
        }

        .w {
            font-size: 1rem;
            line-height: 1.75
        }

        .w p {
            margin-top: 1.25em;
            margin-bottom: 1.25em
        }

        .w figure, .w img, .w video {
            margin-top: 2em;
            margin-bottom: 2em
        }

        .w figure > * {
            margin-top: 0;
            margin-bottom: 0
        }

        .w h2 code {
            font-size: .875em
        }

        .w h3 code {
            font-size: .9em
        }

        .w ol, .w ul {
            margin-top: 1.25em;
            margin-bottom: 1.25em
        }

        .w li {
            margin-top: .5em;
            margin-bottom: .5em
        }

        .w > ul > li p {
            margin-top: .75em;
            margin-bottom: .75em
        }

        .w > ul > li > :first-child {
            margin-top: 1.25em
        }

        .w > ul > li > :last-child {
            margin-bottom: 1.25em
        }

        .w > ol > li > :first-child {
            margin-top: 1.25em
        }

        .w > ol > li > :last-child {
            margin-bottom: 1.25em
        }

        .w ol ol, .w ol ul, .w ul ol, .w ul ul {
            margin-top: .75em;
            margin-bottom: .75em
        }

        .w h2 + *, .w h3 + *, .w h4 + *, .w hr + * {
            margin-top: 0
        }

        .w thead th:first-child {
            padding-left: 0
        }

        .w thead th:last-child {
            padding-right: 0
        }

        .w tbody td:first-child {
            padding-left: 0
        }

        .w tbody td:last-child {
            padding-right: 0
        }

        .w > :first-child {
            margin-top: 0
        }

        .w > :last-child {
            margin-bottom: 0
        }

        .w p.x {
            color: #160041
        }

        .y {
            font-size: 1.125rem;
            line-height: 1.7777778
        }

        .y p {
            margin-top: 1.3333333em;
            margin-bottom: 1.3333333em
        }

        .y [class~=lead] {
            font-size: 1.2222222em;
            line-height: 1.4545455;
            margin-top: 1.0909091em;
            margin-bottom: 1.0909091em
        }

        .y blockquote {
            margin-top: 1.6666667em;
            margin-bottom: 1.6666667em;
            padding-left: 1em
        }

        .y h1 {
            font-size: 2.7rem;
            margin-top: 0;
            margin-bottom: .8333333em;
            line-height: 1
        }

        .y h2 {
            font-size: 2.25rem;
            margin-top: 1.8666667em;
            margin-bottom: 1.0666667em;
            line-height: 1.3333333
        }

        .y h3 {
            font-size: 2rem;
            margin-top: 1.6666667em;
            margin-bottom: .6666667em;
            line-height: 1.5
        }

        .y h4 {
            margin-top: 1.7777778em;
            margin-bottom: .4444444em;
            line-height: 1.5555556
        }

        .y figure, .y img, .y video {
            margin-top: 1.7777778em;
            margin-bottom: 1.7777778em
        }

        .y figure > * {
            margin-top: 0;
            margin-bottom: 0
        }

        .y figure figcaption {
            font-size: .8888889em;
            line-height: 1.5;
            margin-top: 1em
        }

        .y code {
            font-size: .8888889em
        }

        .y h2 code {
            font-size: .8666667em
        }

        .y h3 code {
            font-size: .875em
        }

        .y pre {
            font-size: .8888889em;
            line-height: 1.75;
            margin-top: 2em;
            margin-bottom: 2em;
            border-radius: .375rem;
            padding: 1em 1.5em
        }

        .y ol, .y ul {
            margin-top: 1.3333333em;
            margin-bottom: 1.3333333em
        }

        .y li {
            margin-top: .6666667em;
            margin-bottom: .6666667em
        }

        .y ol > li {
            padding-left: 1.6666667em
        }

        .y ol > li:before {
            left: 0
        }

        .y ul > li {
            padding-left: 1.6666667em
        }

        .y ul > li:before {
            width: .3333333em;
            height: .3333333em;
            top: .72222em;
            left: .2222222em
        }

        .y > ul > li p {
            margin-top: .8888889em;
            margin-bottom: .8888889em
        }

        .y > ul > li > :first-child {
            margin-top: 1.3333333em
        }

        .y > ul > li > :last-child {
            margin-bottom: 1.3333333em
        }

        .y > ol > li > :first-child {
            margin-top: 1.3333333em
        }

        .y > ol > li > :last-child {
            margin-bottom: 1.3333333em
        }

        .y ol ol, .y ol ul, .y ul ol, .y ul ul {
            margin-top: .8888889em;
            margin-bottom: .8888889em
        }

        .y hr {
            margin-top: 3.1111111em;
            margin-bottom: 3.1111111em
        }

        .y h2 + *, .y h3 + *, .y h4 + *, .y hr + * {
            margin-top: 0
        }

        .y table {
            font-size: .8888889em;
            line-height: 1.5
        }

        .y thead th {
            padding-right: .75em;
            padding-bottom: .75em;
            padding-left: .75em
        }

        .y thead th:first-child {
            padding-left: 0
        }

        .y thead th:last-child {
            padding-right: 0
        }

        .y tbody td {
            padding: .75em
        }

        .y tbody td:first-child {
            padding-left: 0
        }

        .y tbody td:last-child {
            padding-right: 0
        }

        .y > :first-child {
            margin-top: 0
        }

        .y > :last-child {
            margin-bottom: 0
        }

        .z {
            color: #f4f0fc
        }

        .z a, .z strong {
            color: #fff
        }

        .z a:hover {
            color: #e0d7fc
        }

        .z ol > li:before {
            color: #f4f0fc
        }

        .z ul > li:before {
            background-color: #e0d7fc
        }

        .z hr {
            border-color: #f0ebfe
        }

        .z blockquote {
            color: #fff;
            border-left-color: #e0d7fc
        }

        .z h1, .z h2, .z h3, .z h4 {
            color: #fff
        }

        .z figure figcaption {
            color: #f0ebfe
        }

        .z code {
            color: #fff
        }

        .z a code {
            color: #7c7ac4
        }

        .z pre {
            color: #fff;
            background-color: #18083a
        }

        .z thead {
            color: #fff;
            border-bottom-color: #e0d7fc
        }

        .z tbody tr {
            border-bottom-color: #f0ebfe
        }

        .ab {
            pointer-events: none
        }

        .bb {
            position: fixed
        }

        .cb {
            position: absolute
        }

        .db {
            position: relative
        }

        .eb {
            right: 0;
            left: 0
        }

        .eb, .fb {
            top: 0;
            bottom: 0
        }

        .gb {
            left: 0;
            right: 0
        }

        .hb {
            top: 0
        }

        .ib {
            left: 50%
        }

        .jb {
            top: -5rem
        }

        .kb {
            left: -5rem
        }

        .lb {
            right: -5rem
        }

        .mb {
            left: 1.5rem
        }

        .nb {
            top: -1.75rem
        }

        .ob {
            right: -4rem
        }

        .pb {
            top: -3rem
        }

        .qb {
            top: -4rem
        }

        .rb {
            top: 50%
        }

        .sb {
            left: -15rem
        }

        .tb {
            top: 2.5rem
        }

        .ub {
            right: -15rem
        }

        .vb {
            bottom: 2.5rem
        }

        .wb {
            left: 0
        }

        .xb {
            bottom: -.25rem
        }

        .yb {
            bottom: 0
        }

        .zb {
            right: 0
        }

        .ac {
            left: -.25rem
        }

        .bc {
            right: -.25rem
        }

        .cc {
            top: .5rem
        }

        .dc {
            top: 1rem
        }

        .ec {
            left: -3.5rem
        }

        .fc {
            right: .375rem
        }

        .gc {
            top: .375rem
        }

        .hc {
            right: .25rem
        }

        .ic {
            top: .25rem
        }

        .jc {
            top: 3rem
        }

        .kc {
            left: -9rem
        }

        .lc {
            bottom: 9rem
        }

        .mc {
            top: -.75rem
        }

        .nc {
            right: 5rem
        }

        .oc {
            right: .5rem
        }

        .pc {
            top: auto
        }

        .qc {
            z-index: 10
        }

        .rc {
            z-index: 20
        }

        .sc {
            z-index: 50
        }

        .tc {
            z-index: 40
        }

        .uc {
            z-index: 0
        }

        .vc {
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2
        }

        .wc {
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1
        }

        .xc {
            grid-column: span 2/span 2
        }

        .yc {
            grid-column: span 4/span 4
        }

        .zc {
            grid-column: span 8/span 8
        }

        .bd {
            margin-left: auto;
            margin-right: auto
        }

        .cd {
            margin-left: .25rem;
            margin-right: .25rem
        }

        .dd {
            margin-top: -.5rem;
            margin-bottom: -.5rem
        }

        .ed {
            margin-top: .5rem;
            margin-bottom: .5rem
        }

        .fd {
            margin-left: -.75rem;
            margin-right: -.75rem
        }

        .gd {
            margin-left: .75rem;
            margin-right: .75rem
        }

        .hd {
            margin-top: .25rem;
            margin-bottom: .25rem
        }

        .id {
            margin-top: 2rem;
            margin-bottom: 2rem
        }

        .jd {
            margin-top: 5rem
        }

        .kd {
            margin-top: .875rem
        }

        .ld {
            margin-top: .75rem
        }

        .md {
            margin-top: 1rem
        }

        .nd {
            margin-top: 3.5rem
        }

        .od {
            margin-top: 4rem
        }

        .pd {
            margin-top: .5rem
        }

        .qd {
            margin-top: 1.25rem
        }

        .rd {
            margin-right: .75rem
        }

        .sd {
            margin-top: 2.5rem
        }

        .td {
            margin-left: .75rem
        }

        .ud {
            margin-left: 2rem
        }

        .vd {
            margin-top: 0
        }

        .wd {
            margin-top: .125rem
        }

        .xd {
            margin-top: 2rem
        }

        .yd {
            margin-left: .125rem
        }

        .zd {
            margin-left: 0
        }

        .ae {
            margin-top: 1.5rem
        }

        .be {
            margin-bottom: -13rem
        }

        .ce {
            margin-top: 3rem
        }

        .de {
            margin-left: 1.5rem
        }

        .ee {
            margin-top: .375rem
        }

        .fe {
            margin-top: .25rem
        }

        .ge {
            margin-bottom: 2.5rem
        }

        .he {
            margin-bottom: -12rem
        }

        .ie {
            margin-right: .5rem
        }

        .je {
            margin-left: .5rem
        }

        .ke {
            margin-top: .625rem
        }

        .le {
            margin-left: .375rem
        }

        .me {
            margin-left: .25rem
        }

        .ne {
            margin-left: auto
        }

        .oe {
            margin-top: -2rem
        }

        .pe {
            display: block
        }

        .qe {
            display: inline-block
        }

        .re {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex
        }

        .se {
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex
        }

        .te {
            display: grid
        }

        .ue {
            display: none
        }

        .ve {
            height: 8rem
        }

        .we {
            height: 10rem
        }

        .xe {
            height: 100%
        }

        .ye {
            height: 30vw
        }

        .ze {
            height: 3.5rem
        }

        .af {
            height: 2rem
        }

        .bf {
            height: 1.75rem
        }

        .cf {
            height: 1.5rem
        }

        .df {
            height: 1.25rem
        }

        .ef {
            height: auto
        }

        .ff {
            height: 2.75rem
        }

        .gf {
            height: 12rem
        }

        .hf {
            height: 2.5rem
        }

        .if {
            height: .25rem
        }

        .jf {
            height: 14rem
        }

        .kf {
            height: 6rem
        }

        .lf {
            height: 3rem
        }

        .mf {
            height: 5rem
        }

        .nf {
            height: 100vh
        }

        .of {
            height: .375rem
        }

        .pf {
            height: 1rem
        }

        .qf {
            height: 16rem
        }

        .rf {
            max-height: 0
        }

        .sf {
            max-height: 100%
        }

        .tf {
            min-height: 100vh
        }

        .uf {
            width: 100%
        }

        .vf {
            width: 10rem
        }

        .wf {
            width: 3.5rem
        }

        .xf {
            width: 2rem
        }

        .yf {
            width: 1.75rem
        }

        .zf {
            width: 1.5rem
        }

        .ag {
            width: 1.25rem
        }

        .bg {
            width: 15rem
        }

        .cg {
            width: 2.75rem
        }

        .dg {
            width: 20rem
        }

        .eg {
            width: 5rem
        }

        .fg {
            width: 18rem
        }

        .gg {
            width: 7rem
        }

        .hg {
            width: 2.5rem
        }

        .ig {
            width: 3rem
        }

        .jg {
            width: 6rem
        }

        .kg {
            width: 50%
        }

        .lg {
            width: 100vw
        }

        .mg {
            width: auto
        }

        .ng {
            width: 12rem
        }

        .og {
            width: 1rem
        }

        .pg {
            width: 9rem
        }

        .qg {
            width: 123px
        }

        .rg {
            max-width: 1280px
        }

        .sg {
            max-width: 36rem
        }

        .tg {
            max-width: 48rem
        }

        .ug {
            max-width: 42rem
        }

        .vg {
            max-width: 56rem
        }

        .wg {
            max-width: 20rem
        }

        .xg {
            max-width: 28rem
        }

        .yg {
            max-width: 32rem
        }

        .zg {
            max-width: 72rem
        }

        .ah {
            max-width: 100%
        }

        .bh {
            -webkit-box-flex: 1;
            -ms-flex: 1 1 0%;
            flex: 1 1 0%
        }

        .ch {
            -ms-flex-negative: 0;
            flex-shrink: 0
        }

        .dh {
            -ms-flex-negative: 1;
            flex-shrink: 1
        }

        .eh {
            -webkit-box-flex: 0;
            -ms-flex-positive: 0;
            flex-grow: 0
        }

        .fh {
            -webkit-transform-origin: top;
            transform-origin: top
        }

        .gh {
            -webkit-transform-origin: bottom;
            transform-origin: bottom
        }

        .hh {
            --tw-translate-y: 2.25rem
        }

        .ih, .hh {
            -webkit-transform: var(--tw-transform);
            transform: var(--tw-transform)
        }

        .ih {
            --tw-translate-x: -50%
        }

        .jh {
            --tw-translate-y: -2rem
        }

        .jh, .kh {
            -webkit-transform: var(--tw-transform);
            transform: var(--tw-transform)
        }

        .kh {
            --tw-translate-y: -13rem
        }

        .lh {
            --tw-translate-y: -14rem
        }

        .lh, .mh {
            -webkit-transform: var(--tw-transform);
            transform: var(--tw-transform)
        }

        .mh {
            --tw-translate-y: 3rem
        }

        .nh {
            --tw-translate-y: -50%
        }

        .nh, .oh {
            -webkit-transform: var(--tw-transform);
            transform: var(--tw-transform)
        }

        .oh {
            --tw-translate-y: 90%
        }

        .ph {
            --tw-translate-y: -8rem
        }

        .qh, .ph {
            -webkit-transform: var(--tw-transform);
            transform: var(--tw-transform)
        }

        .qh {
            --tw-rotate: -1deg
        }

        .rh {
            --tw-rotate: 90deg
        }

        .sh, .rh {
            -webkit-transform: var(--tw-transform);
            transform: var(--tw-transform)
        }

        .sh {
            --tw-rotate: 3deg
        }

        .th {
            --tw-rotate: -3deg
        }

        .th, .uh {
            -webkit-transform: var(--tw-transform);
            transform: var(--tw-transform)
        }

        .uh {
            --tw-rotate: 180deg
        }

        .vh {
            --tw-rotate: 0deg
        }

        .vh, .wh {
            -webkit-transform: var(--tw-transform);
            transform: var(--tw-transform)
        }

        .wh {
            --tw-rotate: 12deg
        }

        .xh {
            --tw-scale-x: 0.80;
            --tw-scale-y: 0.80
        }

        .xh, .yh {
            -webkit-transform: var(--tw-transform);
            transform: var(--tw-transform)
        }

        .yh {
            --tw-scale-x: 0
        }

        .zh {
            -webkit-transform: var(--tw-transform);
            transform: var(--tw-transform)
        }

        @-webkit-keyframes ping {
            75%, to {
                -webkit-transform: scale(2);
                transform: scale(2);
                opacity: 0
            }
        }

        @keyframes ping {
            75%, to {
                -webkit-transform: scale(2);
                transform: scale(2);
                opacity: 0
            }
        }

        .ai {
            -webkit-animation: ping 2.5s cubic-bezier(0, 0, .3, 1) infinite;
            animation: ping 2.5s cubic-bezier(0, 0, .3, 1) infinite
        }

        .bi {
            cursor: pointer
        }

        .ci {
            grid-auto-flow: row dense
        }

        .di {
            grid-auto-rows: minmax(0, 1fr)
        }

        .ei {
            grid-template-columns:repeat(2, minmax(0, 1fr))
        }

        .fi {
            grid-template-columns:repeat(1, minmax(0, 1fr))
        }

        .gi {
            grid-template-columns:repeat(12, minmax(0, 1fr))
        }

        .hi {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .ii {
            -ms-flex-wrap: wrap;
            flex-wrap: wrap
        }

        .ji {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center
        }

        .ki {
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start
        }

        .li {
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end
        }

        .mi {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center
        }

        .ni {
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between
        }

        .oi {
            -webkit-box-pack: space-evenly;
            -ms-flex-pack: space-evenly;
            justify-content: space-evenly
        }

        .pi {
            justify-items: center
        }

        .qi {
            gap: 3.5rem
        }

        .ri {
            gap: .5rem
        }

        .si {
            gap: 4rem
        }

        .ti {
            gap: 2.5rem
        }

        .ui {
            gap: 1rem
        }

        .vi {
            gap: 3rem
        }

        .wi {
            gap: 1.5rem
        }

        .xi {
            gap: .75rem
        }

        .yi {
            gap: 2rem
        }

        .zi {
            row-gap: 2rem
        }

        .aj {
            row-gap: 4rem
        }

        .bj > :not([hidden]) ~ :not([hidden]) {
            --tw-space-y-reverse: 0;
            margin-top: calc(1.25rem * (1 - var(--tw-space-y-reverse)));
            margin-bottom: calc(1.25rem * var(--tw-space-y-reverse))
        }

        .cj > :not([hidden]) ~ :not([hidden]) {
            --tw-space-y-reverse: 0;
            margin-top: calc(1.5rem * (1 - var(--tw-space-y-reverse)));
            margin-bottom: calc(1.5rem * var(--tw-space-y-reverse))
        }

        .dj > :not([hidden]) ~ :not([hidden]) {
            --tw-space-y-reverse: 0;
            margin-top: calc(2rem * (1 - var(--tw-space-y-reverse)));
            margin-bottom: calc(2rem * var(--tw-space-y-reverse))
        }

        .ej > :not([hidden]) ~ :not([hidden]) {
            --tw-space-x-reverse: 0;
            margin-right: calc(1rem * var(--tw-space-x-reverse));
            margin-left: calc(1rem * (1 - var(--tw-space-x-reverse)))
        }

        .fj > :not([hidden]) ~ :not([hidden]) {
            --tw-space-x-reverse: 0;
            margin-right: calc(0.5rem * var(--tw-space-x-reverse));
            margin-left: calc(0.5rem * (1 - var(--tw-space-x-reverse)))
        }

        .gj > :not([hidden]) ~ :not([hidden]) {
            --tw-space-x-reverse: 0;
            margin-right: calc(0.125rem * var(--tw-space-x-reverse));
            margin-left: calc(0.125rem * (1 - var(--tw-space-x-reverse)))
        }

        .hj > :not([hidden]) ~ :not([hidden]) {
            --tw-space-x-reverse: 0;
            margin-right: calc(0px * var(--tw-space-x-reverse));
            margin-left: calc(0px * (1 - var(--tw-space-x-reverse)))
        }

        .ij > :not([hidden]) ~ :not([hidden]) {
            --tw-space-y-reverse: 0;
            margin-top: calc(0.5rem * (1 - var(--tw-space-y-reverse)));
            margin-bottom: calc(0.5rem * var(--tw-space-y-reverse))
        }

        .jj > :not([hidden]) ~ :not([hidden]) {
            --tw-space-x-reverse: 0;
            margin-right: calc(0.375rem * var(--tw-space-x-reverse));
            margin-left: calc(0.375rem * (1 - var(--tw-space-x-reverse)))
        }

        .kj > :not([hidden]) ~ :not([hidden]) {
            --tw-space-x-reverse: 0;
            margin-right: calc(0.25rem * var(--tw-space-x-reverse));
            margin-left: calc(0.25rem * (1 - var(--tw-space-x-reverse)))
        }

        .lj > :not([hidden]) ~ :not([hidden]) {
            --tw-divide-y-reverse: 0;
            border-top-width: calc(1px * (1 - var(--tw-divide-y-reverse)));
            border-bottom-width: calc(1px * var(--tw-divide-y-reverse))
        }

        .mj > :not([hidden]) ~ :not([hidden]) {
            border-color: rgba(124, 122, 196, .2)
        }

        .nj {
            overflow: auto
        }

        .oj {
            overflow: hidden
        }

        .pj {
            overflow-y: scroll
        }

        .qj {
            border-radius: 9999px
        }

        .rj {
            border-radius: 1.5rem
        }

        .sj {
            border-radius: 1rem
        }

        .tj {
            border-radius: .75rem
        }

        .uj {
            border-radius: .5rem
        }

        .vj {
            border-radius: .375rem
        }

        .wj {
            border-top-left-radius: 1rem;
            border-top-right-radius: 1rem
        }

        .xj {
            border-top-left-radius: 5rem;
            border-bottom-left-radius: 5rem
        }

        .yj {
            border-width: 2px
        }

        .zj {
            border-width: 1px
        }

        .ak {
            border-width: 0
        }

        .bk {
            border-bottom-width: 1px
        }

        .ck {
            border-bottom-width: 2px
        }

        .dk {
            border-style: solid
        }

        .ek {
            --tw-border-opacity: 1;
            border-color: rgba(98, 96, 181, var(--tw-border-opacity))
        }

        .fk {
            border-color: rgba(210, 198, 250, .3)
        }

        .gk {
            --tw-border-opacity: 1;
            border-color: rgba(240, 235, 254, var(--tw-border-opacity))
        }

        .hk {
            --tw-border-opacity: 1;
            border-color: rgba(249, 250, 251, var(--tw-border-opacity))
        }

        .ik {
            --tw-border-opacity: 1;
            border-color: rgba(210, 198, 250, var(--tw-border-opacity))
        }

        .jk {
            border-color: transparent
        }

        .kk {
            --tw-border-opacity: 1;
            border-color: rgba(73, 71, 159, var(--tw-border-opacity))
        }

        .lk {
            --tw-border-opacity: 1;
            border-color: rgba(253, 235, 194, var(--tw-border-opacity))
        }

        .mk {
            --tw-border-opacity: 0.3
        }

        .nk {
            --tw-bg-opacity: 1;
            background-color: rgba(244, 240, 252, var(--tw-bg-opacity))
        }

        .ok {
            --tw-bg-opacity: 1;
            background-color: rgba(73, 71, 159, var(--tw-bg-opacity))
        }

        .pk {
            --tw-bg-opacity: 1;
            background-color: rgba(255, 255, 255, var(--tw-bg-opacity))
        }

        .qk {
            --tw-bg-opacity: 1;
            background-color: rgba(210, 198, 250, var(--tw-bg-opacity))
        }

        .rk {
            --tw-bg-opacity: 1;
            background-color: rgba(254, 247, 231, var(--tw-bg-opacity))
        }

        .sk {
            --tw-bg-opacity: 1;
            background-color: rgba(251, 222, 155, var(--tw-bg-opacity))
        }

        .tk {
            --tw-bg-opacity: 1;
            background-color: rgba(254, 205, 211, var(--tw-bg-opacity))
        }

        .uk {
            --tw-bg-opacity: 1;
            background-color: rgba(248, 208, 117, var(--tw-bg-opacity))
        }

        .vk {
            --tw-bg-opacity: 1;
            background-color: rgba(254, 243, 218, var(--tw-bg-opacity))
        }

        .wk {
            --tw-bg-opacity: 1;
            background-color: rgba(240, 235, 254, var(--tw-bg-opacity))
        }

        .xk {
            --tw-bg-opacity: 1;
            background-color: rgba(255, 241, 242, var(--tw-bg-opacity))
        }

        .yk {
            --tw-bg-opacity: 1;
            background-color: rgba(240, 253, 250, var(--tw-bg-opacity))
        }

        .zk {
            --tw-bg-opacity: 1;
            background-color: rgba(98, 96, 181, var(--tw-bg-opacity))
        }

        .al {
            --tw-bg-opacity: 1;
            background-color: rgba(17, 24, 39, var(--tw-bg-opacity))
        }

        .bl {
            --tw-bg-opacity: 1;
            background-color: rgba(124, 122, 196, var(--tw-bg-opacity))
        }

        .cl {
            --tw-bg-opacity: 1;
            background-color: rgba(0, 0, 0, var(--tw-bg-opacity))
        }

        .dl {
            --tw-bg-opacity: 1;
            background-color: rgba(22, 0, 65, var(--tw-bg-opacity))
        }

        .el {
            --tw-bg-opacity: 1;
            background-color: rgba(224, 215, 252, var(--tw-bg-opacity))
        }

        .fl {
            --tw-bg-opacity: 1;
            background-color: rgba(239, 246, 255, var(--tw-bg-opacity))
        }

        .gl {
            --tw-bg-opacity: 1;
            background-color: rgba(191, 219, 254, var(--tw-bg-opacity))
        }

        .hl {
            background-color: transparent
        }

        .il {
            background-image: -webkit-gradient(linear, left top, left bottom, from(var(--tw-gradient-stops)));
            background-image: linear-gradient(180deg, var(--tw-gradient-stops))
        }

        .jl {
            background-image: -webkit-gradient(linear, left top, right bottom, from(var(--tw-gradient-stops)));
            background-image: linear-gradient(to bottom right, var(--tw-gradient-stops))
        }

        .kl {
            background-image: -webkit-gradient(linear, left top, right top, from(var(--tw-gradient-stops)));
            background-image: linear-gradient(90deg, var(--tw-gradient-stops))
        }

        .ll {
            background-image: -webkit-gradient(linear, left bottom, right top, from(var(--tw-gradient-stops)));
            background-image: linear-gradient(to top right, var(--tw-gradient-stops))
        }

        .ml {
            --tw-gradient-from: #f4f0fc;
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, rgba(244, 240, 252, 0))
        }

        .nl {
            --tw-gradient-from: #f0ebfe;
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, rgba(240, 235, 254, 0))
        }

        .ol {
            --tw-gradient-from: #fff;
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, hsla(0, 0%, 100%, 0))
        }

        .pl {
            --tw-gradient-from: #49479f;
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, rgba(73, 71, 159, 0))
        }

        .ql {
            --tw-gradient-from: #fbde9b;
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, rgba(251, 222, 155, 0))
        }

        .rl {
            --tw-gradient-from: #d2c6fa;
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, rgba(210, 198, 250, 0))
        }

        .sl {
            --tw-gradient-from: #ffe4e6;
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, rgba(255, 228, 230, 0))
        }

        .tl {
            --tw-gradient-from: #dbeafe;
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, rgba(219, 234, 254, 0))
        }

        .ul {
            --tw-gradient-stops: var(--tw-gradient-from), #f4f0fc, var(--tw-gradient-to, rgba(244, 240, 252, 0))
        }

        .vl {
            --tw-gradient-to: #fff
        }

        .wl {
            --tw-gradient-to: #f0ebfe
        }

        .xl {
            --tw-gradient-to: #fef7e7
        }

        .yl {
            --tw-gradient-to: #49479f
        }

        .zl {
            --tw-gradient-to: #f8d075
        }

        .am {
            --tw-gradient-to: #b5a1f5
        }

        .bm {
            --tw-gradient-to: #fda4af
        }

        .cm {
            --tw-gradient-to: #93c5fd
        }

        .dm {
            fill: currentColor
        }

        .em {
            -o-object-fit: cover;
            object-fit: cover
        }

        .fm {
            -o-object-position: center;
            object-position: center
        }

        .gm {
            padding: 1rem
        }

        .hm {
            padding: .125rem
        }

        .im {
            padding: 0
        }

        .jm {
            padding: 1.5rem
        }

        .km {
            padding: 2rem
        }

        .lm {
            padding-left: 1rem;
            padding-right: 1rem
        }

        .mm {
            padding-top: .5rem;
            padding-bottom: .5rem
        }

        .nm {
            padding-top: 4rem;
            padding-bottom: 4rem
        }

        .om {
            padding-top: 2.5rem;
            padding-bottom: 2.5rem
        }

        .pm {
            padding-top: 1.25rem;
            padding-bottom: 1.25rem
        }

        .qm {
            padding-top: 2rem;
            padding-bottom: 2rem
        }

        .rm {
            padding-top: 6rem;
            padding-bottom: 6rem
        }

        .sm {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .tm {
            padding-left: .875rem;
            padding-right: .875rem
        }

        .um {
            padding-top: .125rem;
            padding-bottom: .125rem
        }

        .vm {
            padding-left: .75rem;
            padding-right: .75rem
        }

        .wm {
            padding-top: 0;
            padding-bottom: 0
        }

        .xm {
            padding-top: 5rem;
            padding-bottom: 5rem
        }

        .ym {
            padding-left: 1.25rem;
            padding-right: 1.25rem
        }

        .zm {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem
        }

        .an {
            padding-top: .375rem;
            padding-bottom: .375rem
        }

        .bn {
            padding-top: .25rem;
            padding-bottom: .25rem
        }

        .cn {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .dn {
            padding-left: 2rem;
            padding-right: 2rem
        }

        .en {
            padding-top: .875rem;
            padding-bottom: .875rem
        }

        .fn {
            padding-top: .75rem;
            padding-bottom: .75rem
        }

        .gn {
            padding-left: 0;
            padding-right: 0
        }

        .hn {
            padding-bottom: 7rem
        }

        .in {
            padding-top: 4rem
        }

        .jn {
            padding-left: .5rem
        }

        .kn {
            padding-bottom: 3rem
        }

        .ln {
            padding-top: 14rem
        }

        .mn {
            padding-bottom: .5rem
        }

        .nn {
            padding-top: .5rem
        }

        .on {
            padding-top: 5rem
        }

        .pn {
            padding-bottom: 1.25rem
        }

        .qn {
            padding-top: 1.25rem
        }

        .rn {
            padding-bottom: 4rem
        }

        .sn {
            padding-left: .75rem
        }

        .tn {
            padding-left: 3rem
        }

        .un {
            padding-right: 6rem
        }

        .vn {
            padding-right: 2.5rem
        }

        .wn {
            padding-bottom: 6rem
        }

        .xn {
            text-align: left
        }

        .yn {
            text-align: center
        }

        .zn {
            vertical-align: top
        }

        .ao {
            font-family: Gochi Hand, cursive
        }

        .bo {
            font-size: 1.125rem
        }

        .bo, .co {
            line-height: 1.75rem
        }

        .co {
            font-size: 1.25rem
        }

        .do {
            font-size: 1rem;
            line-height: 1.5rem
        }

        .eo {
            font-size: .875rem;
            line-height: 1.25rem
        }

        .fo {
            font-size: 1.75rem
        }

        .go {
            font-size: .75rem;
            line-height: 1rem
        }

        .ho {
            font-size: 5rem
        }

        .io {
            font-weight: 500
        }

        .jo {
            font-weight: 700
        }

        .ko {
            font-weight: 600
        }

        .lo {
            text-transform: uppercase
        }

        .mo {
            line-height: 1.625
        }

        .no {
            line-height: 1.5rem
        }

        .oo {
            line-height: 1.875
        }

        .po {
            line-height: 1.5
        }

        .qo {
            line-height: 1.25rem
        }

        .ro {
            line-height: 1
        }

        .so {
            letter-spacing: .025em
        }

        .to {
            letter-spacing: .05em
        }

        .uo {
            letter-spacing: 0
        }

        .vo {
            --tw-text-opacity: 1;
            color: rgba(22, 0, 65, var(--tw-text-opacity))
        }

        .wo {
            --tw-text-opacity: 1;
            color: rgba(44, 24, 84, var(--tw-text-opacity))
        }

        .xo {
            --tw-text-opacity: 1;
            color: rgba(24, 8, 58, var(--tw-text-opacity))
        }

        .yo {
            --tw-text-opacity: 1;
            color: rgba(240, 235, 254, var(--tw-text-opacity))
        }

        .zo {
            --tw-text-opacity: 1;
            color: rgba(16, 185, 129, var(--tw-text-opacity))
        }

        .ap {
            --tw-text-opacity: 1;
            color: rgba(255, 255, 255, var(--tw-text-opacity))
        }

        .bp {
            --tw-text-opacity: 1;
            color: rgba(73, 71, 159, var(--tw-text-opacity))
        }

        .cp {
            color: rgba(24, 8, 58, .9)
        }

        .dp {
            --tw-text-opacity: 1;
            color: rgba(244, 240, 252, var(--tw-text-opacity))
        }

        .ep {
            --tw-text-opacity: 1;
            color: rgba(248, 208, 117, var(--tw-text-opacity))
        }

        .fp {
            --tw-text-opacity: 1;
            color: rgba(210, 198, 250, var(--tw-text-opacity))
        }

        .gp {
            --tw-text-opacity: 1;
            color: rgba(98, 96, 181, var(--tw-text-opacity))
        }

        .hp {
            --tw-text-opacity: 0.9
        }

        .ip {
            text-decoration: none
        }

        .jp::-webkit-input-placeholder {
            --tw-placeholder-opacity: 1;
            color: rgba(44, 24, 84, var(--tw-placeholder-opacity))
        }

        .jp::-moz-placeholder {
            --tw-placeholder-opacity: 1;
            color: rgba(44, 24, 84, var(--tw-placeholder-opacity))
        }

        .jp:-ms-input-placeholder {
            --tw-placeholder-opacity: 1;
            color: rgba(44, 24, 84, var(--tw-placeholder-opacity))
        }

        .jp::-ms-input-placeholder {
            --tw-placeholder-opacity: 1;
            color: rgba(44, 24, 84, var(--tw-placeholder-opacity))
        }

        .jp::placeholder {
            --tw-placeholder-opacity: 1;
            color: rgba(44, 24, 84, var(--tw-placeholder-opacity))
        }

        .kp::-webkit-input-placeholder {
            --tw-placeholder-opacity: 0.7
        }

        .kp::-moz-placeholder {
            --tw-placeholder-opacity: 0.7
        }

        .kp:-ms-input-placeholder {
            --tw-placeholder-opacity: 0.7
        }

        .kp::-ms-input-placeholder {
            --tw-placeholder-opacity: 0.7
        }

        .kp::placeholder {
            --tw-placeholder-opacity: 0.7
        }

        .lp {
            opacity: .6
        }

        .mp {
            opacity: .75
        }

        .np {
            opacity: 0
        }

        .op {
            opacity: .8
        }

        .pp {
            opacity: .9
        }

        .qp {
            opacity: .95
        }

        .rp {
            opacity: .5
        }

        .sp {
            opacity: 1
        }

        .tp {
            opacity: .25
        }

        .up {
            opacity: .4
        }

        .vp {
            --tw-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)
        }

        .wp, .vp {
            -webkit-box-shadow: var(--tw-ring-offset-shadow, 0 0 transparent), var(--tw-ring-shadow, 0 0 transparent), var(--tw-shadow);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 transparent), var(--tw-ring-shadow, 0 0 transparent), var(--tw-shadow)
        }

        .wp {
            --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)
        }

        .xp {
            --tw-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)
        }

        .yp, .xp {
            -webkit-box-shadow: var(--tw-ring-offset-shadow, 0 0 transparent), var(--tw-ring-shadow, 0 0 transparent), var(--tw-shadow);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 transparent), var(--tw-ring-shadow, 0 0 transparent), var(--tw-shadow)
        }

        .yp {
            --tw-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05)
        }

        .zp {
            --tw-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            -webkit-box-shadow: var(--tw-ring-offset-shadow, 0 0 transparent), var(--tw-ring-shadow, 0 0 transparent), var(--tw-shadow);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 transparent), var(--tw-ring-shadow, 0 0 transparent), var(--tw-shadow)
        }

        .aq {
            outline: 2px solid transparent;
            outline-offset: 2px
        }

        .bq {
            --tw-drop-shadow: drop-shadow(0 25px 25px rgba(0, 0, 0, 0.15))
        }

        .bq, .cq {
            -webkit-filter: var(--tw-filter);
            filter: var(--tw-filter)
        }

        .dq {
            -webkit-transition-property: background-color, border-color, color, fill, stroke, opacity, -webkit-box-shadow, -webkit-transform, -webkit-filter, -webkit-backdrop-filter;
            transition-property: background-color, border-color, color, fill, stroke, opacity, -webkit-box-shadow, -webkit-transform, -webkit-filter, -webkit-backdrop-filter;
            transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
            transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-box-shadow, -webkit-transform, -webkit-filter, -webkit-backdrop-filter;
            -webkit-transition-timing-function: cubic-bezier(.4, 0, .2, 1);
            transition-timing-function: cubic-bezier(.4, 0, .2, 1);
            -webkit-transition-duration: .15s;
            transition-duration: .15s
        }

        .eq {
            -webkit-transition-property: opacity;
            transition-property: opacity;
            -webkit-transition-timing-function: cubic-bezier(.4, 0, .2, 1);
            transition-timing-function: cubic-bezier(.4, 0, .2, 1);
            -webkit-transition-duration: .15s;
            transition-duration: .15s
        }

        .fq {
            -webkit-transition-duration: .3s;
            transition-duration: .3s
        }

        .gq {
            -webkit-transition-duration: .7s;
            transition-duration: .7s
        }

        .hq {
            -webkit-transition-duration: .15s;
            transition-duration: .15s
        }

        .iq {
            -webkit-transition-duration: .2s;
            transition-duration: .2s
        }

        .jq {
            -webkit-transition-duration: .5s;
            transition-duration: .5s
        }

        .kq {
            -webkit-transition-timing-function: cubic-bezier(.4, 0, .2, 1);
            transition-timing-function: cubic-bezier(.4, 0, .2, 1)
        }

        .lq {
            -webkit-transition-timing-function: linear;
            transition-timing-function: linear
        }

        .mq {
            font-size: 2.7rem;
            font-weight: 800;
            line-height: 1.375
        }

        @media (min-width: 640px) {
            .mq {
                font-size: 3.25rem;
                line-height: 1.25
            }
        }

        @media (min-width: 1280px) {
            .mq {
                font-size: 3.75rem;
                line-height: 1.1
            }
        }

        .nq {
            font-size: 2.25rem;
            font-weight: 700;
            line-height: 1.25;
            letter-spacing: -.025em
        }

        @media (min-width: 640px) {
            .nq {
                font-size: 2.7rem;
                line-height: 1.1
            }
        }

        @media (min-width: 1280px) {
            .nq {
                font-size: 3.25rem
            }
        }

        .oq {
            font-size: 2rem;
            font-weight: 700;
            line-height: 1.25;
            letter-spacing: -.025em
        }

        @media (min-width: 640px) {
            .oq {
                font-size: 2.25rem;
                line-height: 1.1
            }
        }

        .pq {
            font-size: 1.75rem;
            font-weight: 700;
            line-height: 1.25;
            letter-spacing: -.025em
        }

        @media (min-width: 640px) {
            .pq {
                font-size: 2rem;
                line-height: 1.1
            }
        }

        .qq, .rq {
            position: relative;
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            border-radius: 9999px;
            padding: .75rem 2rem;
            line-height: 1.5;
            outline: 2px solid transparent;
            outline-offset: 2px;
            -webkit-transition-duration: .3s;
            transition-duration: .3s;
            -webkit-transition-timing-function: cubic-bezier(.4, 0, .2, 1);
            transition-timing-function: cubic-bezier(.4, 0, .2, 1)
        }

        .qq {
            padding: .875rem 2rem
        }

        .rq {
            padding: .625rem 1.25rem
        }

        .js-hamburger-open span:first-child {
            top: .5rem;
            left: 50%;
            width: 0
        }

        .js-hamburger-open span:nth-child(2) {
            --tw-rotate: 45deg;
            -webkit-transform: var(--tw-transform);
            transform: var(--tw-transform)
        }

        .js-hamburger-open span:nth-child(3) {
            --tw-rotate: -45deg;
            -webkit-transform: var(--tw-transform);
            transform: var(--tw-transform)
        }

        .js-hamburger-open span:nth-child(4) {
            top: .5rem;
            left: 50%;
            width: 0
        }

        .js-hamburger-open span {
            --tw-bg-opacity: 1;
            background-color: rgba(240, 235, 254, var(--tw-bg-opacity))
        }

        button.js-hamburger-open:hover span {
            background-color: #fff !important
        }

        .js-rotate-180 {
            --tw-rotate: 180deg;
            -webkit-transform: var(--tw-transform);
            transform: var(--tw-transform)
        }

        .js-dropdown-enter {
            -webkit-transition-property: background-color, border-color, color, fill, stroke, opacity, -webkit-box-shadow, -webkit-transform, -webkit-filter, -webkit-backdrop-filter;
            transition-property: background-color, border-color, color, fill, stroke, opacity, -webkit-box-shadow, -webkit-transform, -webkit-filter, -webkit-backdrop-filter;
            transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
            transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-box-shadow, -webkit-transform, -webkit-filter, -webkit-backdrop-filter;
            -webkit-transition-timing-function: cubic-bezier(.4, 0, .2, 1);
            transition-timing-function: cubic-bezier(.4, 0, .2, 1);
            -webkit-transition-duration: .15s;
            transition-duration: .15s;
            -webkit-transition-duration: .3s;
            transition-duration: .3s;
            -webkit-transition-timing-function: cubic-bezier(0, 0, .2, 1);
            transition-timing-function: cubic-bezier(0, 0, .2, 1)
        }

        .js-dropdown-enter-start {
            --tw-translate-y: -1.25rem;
            opacity: 0
        }

        .js-dropdown-enter-end, .js-dropdown-enter-start {
            -webkit-transform: var(--tw-transform);
            transform: var(--tw-transform)
        }

        .js-dropdown-enter-end {
            --tw-translate-y: 0px;
            opacity: 1
        }

        .js-dropdown-leave {
            -webkit-transition-property: background-color, border-color, color, fill, stroke, opacity, -webkit-box-shadow, -webkit-transform, -webkit-filter, -webkit-backdrop-filter;
            transition-property: background-color, border-color, color, fill, stroke, opacity, -webkit-box-shadow, -webkit-transform, -webkit-filter, -webkit-backdrop-filter;
            transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
            transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-box-shadow, -webkit-transform, -webkit-filter, -webkit-backdrop-filter;
            -webkit-transition-timing-function: cubic-bezier(.4, 0, .2, 1);
            transition-timing-function: cubic-bezier(.4, 0, .2, 1);
            -webkit-transition-duration: .15s;
            transition-duration: .15s;
            -webkit-transition-duration: .2s;
            transition-duration: .2s;
            -webkit-transition-timing-function: cubic-bezier(.4, 0, 1, 1);
            transition-timing-function: cubic-bezier(.4, 0, 1, 1)
        }

        .js-dropdown-leave-start {
            --tw-translate-y: 0px;
            opacity: 1
        }

        .js-dropdown-leave-end, .js-dropdown-leave-start {
            -webkit-transform: var(--tw-transform);
            transform: var(--tw-transform)
        }

        .js-dropdown-leave-end {
            --tw-translate-y: -1.25rem;
            opacity: 0
        }

        .js-mobile-nav-enter {
            -webkit-transition-property: background-color, border-color, color, fill, stroke, opacity, -webkit-box-shadow, -webkit-transform, -webkit-filter, -webkit-backdrop-filter;
            transition-property: background-color, border-color, color, fill, stroke, opacity, -webkit-box-shadow, -webkit-transform, -webkit-filter, -webkit-backdrop-filter;
            transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
            transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-box-shadow, -webkit-transform, -webkit-filter, -webkit-backdrop-filter;
            -webkit-transition-timing-function: cubic-bezier(.4, 0, .2, 1);
            transition-timing-function: cubic-bezier(.4, 0, .2, 1);
            -webkit-transition-duration: .15s;
            transition-duration: .15s;
            -webkit-transition-duration: .3s;
            transition-duration: .3s;
            -webkit-transition-timing-function: cubic-bezier(0, 0, .2, 1);
            transition-timing-function: cubic-bezier(0, 0, .2, 1)
        }

        .js-mobile-nav-enter-start {
            --tw-translate-y: -100%;
            opacity: 0
        }

        .js-mobile-nav-enter-end, .js-mobile-nav-enter-start {
            -webkit-transform: var(--tw-transform);
            transform: var(--tw-transform)
        }

        .js-mobile-nav-enter-end {
            --tw-translate-y: 0px;
            opacity: 1
        }

        .js-mobile-nav-leave {
            -webkit-transition-property: background-color, border-color, color, fill, stroke, opacity, -webkit-box-shadow, -webkit-transform, -webkit-filter, -webkit-backdrop-filter;
            transition-property: background-color, border-color, color, fill, stroke, opacity, -webkit-box-shadow, -webkit-transform, -webkit-filter, -webkit-backdrop-filter;
            transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
            transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-box-shadow, -webkit-transform, -webkit-filter, -webkit-backdrop-filter;
            -webkit-transition-timing-function: cubic-bezier(.4, 0, .2, 1);
            transition-timing-function: cubic-bezier(.4, 0, .2, 1);
            -webkit-transition-duration: .15s;
            transition-duration: .15s;
            -webkit-transition-duration: .2s;
            transition-duration: .2s;
            -webkit-transition-timing-function: cubic-bezier(.4, 0, 1, 1);
            transition-timing-function: cubic-bezier(.4, 0, 1, 1)
        }

        .js-mobile-nav-leave-start {
            --tw-translate-y: 0px;
            opacity: 1
        }

        .js-mobile-nav-leave-end, .js-mobile-nav-leave-start {
            -webkit-transform: var(--tw-transform);
            transform: var(--tw-transform)
        }

        .js-mobile-nav-leave-end {
            --tw-translate-y: -100%;
            opacity: 0
        }

        .js-overlay-enter {
            -webkit-transition-property: background-color, border-color, color, fill, stroke, opacity, -webkit-box-shadow, -webkit-transform, -webkit-filter, -webkit-backdrop-filter;
            transition-property: background-color, border-color, color, fill, stroke, opacity, -webkit-box-shadow, -webkit-transform, -webkit-filter, -webkit-backdrop-filter;
            transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
            transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-box-shadow, -webkit-transform, -webkit-filter, -webkit-backdrop-filter;
            -webkit-transition-timing-function: cubic-bezier(.4, 0, .2, 1);
            transition-timing-function: cubic-bezier(.4, 0, .2, 1);
            -webkit-transition-duration: .15s;
            transition-duration: .15s;
            -webkit-transition-duration: .3s;
            transition-duration: .3s;
            -webkit-transition-timing-function: cubic-bezier(0, 0, .2, 1);
            transition-timing-function: cubic-bezier(0, 0, .2, 1)
        }

        .js-overlay-enter-start {
            opacity: 0
        }

        .js-overlay-enter-end {
            opacity: .5
        }

        .js-overlay-leave {
            -webkit-transition-property: background-color, border-color, color, fill, stroke, opacity, -webkit-box-shadow, -webkit-transform, -webkit-filter, -webkit-backdrop-filter;
            transition-property: background-color, border-color, color, fill, stroke, opacity, -webkit-box-shadow, -webkit-transform, -webkit-filter, -webkit-backdrop-filter;
            transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
            transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-box-shadow, -webkit-transform, -webkit-filter, -webkit-backdrop-filter;
            -webkit-transition-timing-function: cubic-bezier(.4, 0, .2, 1);
            transition-timing-function: cubic-bezier(.4, 0, .2, 1);
            -webkit-transition-duration: .15s;
            transition-duration: .15s;
            -webkit-transition-duration: .2s;
            transition-duration: .2s;
            -webkit-transition-timing-function: cubic-bezier(.4, 0, 1, 1);
            transition-timing-function: cubic-bezier(.4, 0, 1, 1)
        }

        .js-overlay-leave-start {
            opacity: .5
        }

        .js-overlay-leave-end {
            opacity: 0
        }

        .js-modal-enter {
            -webkit-transition-property: background-color, border-color, color, fill, stroke, opacity, -webkit-box-shadow, -webkit-transform, -webkit-filter, -webkit-backdrop-filter;
            transition-property: background-color, border-color, color, fill, stroke, opacity, -webkit-box-shadow, -webkit-transform, -webkit-filter, -webkit-backdrop-filter;
            transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
            transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-box-shadow, -webkit-transform, -webkit-filter, -webkit-backdrop-filter;
            -webkit-transition-timing-function: cubic-bezier(.4, 0, .2, 1);
            transition-timing-function: cubic-bezier(.4, 0, .2, 1);
            -webkit-transition-duration: .15s;
            transition-duration: .15s;
            -webkit-transition-duration: .3s;
            transition-duration: .3s;
            -webkit-transition-timing-function: cubic-bezier(0, 0, .2, 1);
            transition-timing-function: cubic-bezier(0, 0, .2, 1)
        }

        .js-modal-enter-start {
            --tw-translate-y: 6rem;
            --tw-scale-x: .95;
            --tw-scale-y: .95;
            opacity: 0
        }

        .js-modal-enter-end, .js-modal-enter-start {
            -webkit-transform: var(--tw-transform);
            transform: var(--tw-transform)
        }

        .js-modal-enter-end {
            --tw-translate-y: 0px;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            opacity: 1
        }

        .js-modal-leave {
            -webkit-transition-property: background-color, border-color, color, fill, stroke, opacity, -webkit-box-shadow, -webkit-transform, -webkit-filter, -webkit-backdrop-filter;
            transition-property: background-color, border-color, color, fill, stroke, opacity, -webkit-box-shadow, -webkit-transform, -webkit-filter, -webkit-backdrop-filter;
            transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
            transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-box-shadow, -webkit-transform, -webkit-filter, -webkit-backdrop-filter;
            -webkit-transition-timing-function: cubic-bezier(.4, 0, .2, 1);
            transition-timing-function: cubic-bezier(.4, 0, .2, 1);
            -webkit-transition-duration: .15s;
            transition-duration: .15s;
            -webkit-transition-duration: .2s;
            transition-duration: .2s;
            -webkit-transition-timing-function: cubic-bezier(.4, 0, 1, 1);
            transition-timing-function: cubic-bezier(.4, 0, 1, 1)
        }

        .js-modal-leave-start {
            --tw-translate-y: 0px;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            opacity: 1
        }

        .js-modal-leave-end, .js-modal-leave-start {
            -webkit-transform: var(--tw-transform);
            transform: var(--tw-transform)
        }

        .js-modal-leave-end {
            --tw-translate-y: 6rem;
            --tw-scale-x: .95;
            --tw-scale-y: .95;
            opacity: 0
        }

        [x-cloak] {
            display: none !important
        }

        .sq:hover {
            z-index: 50
        }

        .tq:hover {
            --tw-scale-x: 1.05;
            --tw-scale-y: 1.05
        }

        .tq:hover, .uq:hover {
            -webkit-transform: var(--tw-transform);
            transform: var(--tw-transform)
        }

        .uq:hover {
            --tw-scale-x: 1.25;
            --tw-scale-y: 1.25
        }

        .vq:hover {
            border-color: transparent
        }

        .wq:hover {
            --tw-border-opacity: 1;
            border-color: rgba(124, 122, 196, var(--tw-border-opacity))
        }

        .xq:hover {
            --tw-bg-opacity: 1;
            background-color: rgba(98, 96, 181, var(--tw-bg-opacity))
        }

        .yq:hover {
            --tw-bg-opacity: 1;
            background-color: rgba(244, 195, 80, var(--tw-bg-opacity))
        }

        .zq:hover {
            --tw-bg-opacity: 1;
            background-color: rgba(73, 71, 159, var(--tw-bg-opacity))
        }

        .ar:hover {
            --tw-bg-opacity: 1;
            background-color: rgba(224, 215, 252, var(--tw-bg-opacity))
        }

        .br:hover {
            --tw-bg-opacity: 1;
            background-color: rgba(244, 240, 252, var(--tw-bg-opacity))
        }

        .cr:hover {
            --tw-text-opacity: 1;
            color: rgba(73, 71, 159, var(--tw-text-opacity))
        }

        .dr:hover {
            --tw-text-opacity: 1;
            color: rgba(22, 0, 65, var(--tw-text-opacity))
        }

        .er:hover {
            --tw-text-opacity: 1;
            color: rgba(255, 255, 255, var(--tw-text-opacity))
        }

        .fr:hover {
            --tw-text-opacity: 1;
            color: rgba(98, 96, 181, var(--tw-text-opacity))
        }

        .gr:hover {
            text-decoration: underline
        }

        .hr:hover {
            --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            -webkit-box-shadow: var(--tw-ring-offset-shadow, 0 0 transparent), var(--tw-ring-shadow, 0 0 transparent), var(--tw-shadow);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 transparent), var(--tw-ring-shadow, 0 0 transparent), var(--tw-shadow)
        }

        .ir:focus {
            --tw-border-opacity: 1;
            border-color: rgba(210, 198, 250, var(--tw-border-opacity))
        }

        .jr:focus {
            --tw-bg-opacity: 1;
            background-color: rgba(255, 255, 255, var(--tw-bg-opacity))
        }

        .kr:focus {
            outline: 2px solid transparent;
            outline-offset: 2px
        }

        .lr:focus {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            -webkit-box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 transparent);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 transparent)
        }

        .mr:focus {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgba(210, 198, 250, var(--tw-ring-opacity))
        }

        .nr:focus {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgba(98, 96, 181, var(--tw-ring-opacity))
        }

        .or:hover .pr {
            --tw-rotate: 0deg;
            -webkit-transform: var(--tw-transform);
            transform: var(--tw-transform)
        }

        .or:hover .qr {
            --tw-scale-x: 1.1;
            --tw-scale-y: 1.1;
            -webkit-transform: var(--tw-transform);
            transform: var(--tw-transform)
        }

        .or:hover .rr {
            --tw-scale-x: 1;
            -webkit-transform: var(--tw-transform);
            transform: var(--tw-transform)
        }

        @-webkit-keyframes horizontal-bounce {
            50% {
                -webkit-transform: translateX(25%);
                transform: translateX(25%);
                -webkit-animation-timing-function: cubic-bezier(0, 0, .2, 1);
                animation-timing-function: cubic-bezier(0, 0, .2, 1)
            }
            0%, to {
                -webkit-transform: translateX(0);
                transform: translateX(0);
                -webkit-animation-timing-function: cubic-bezier(.8, 0, 1, 1);
                animation-timing-function: cubic-bezier(.8, 0, 1, 1)
            }
        }

        @keyframes horizontal-bounce {
            50% {
                -webkit-transform: translateX(25%);
                transform: translateX(25%);
                -webkit-animation-timing-function: cubic-bezier(0, 0, .2, 1);
                animation-timing-function: cubic-bezier(0, 0, .2, 1)
            }
            0%, to {
                -webkit-transform: translateX(0);
                transform: translateX(0);
                -webkit-animation-timing-function: cubic-bezier(.8, 0, 1, 1);
                animation-timing-function: cubic-bezier(.8, 0, 1, 1)
            }
        }

        .or:hover .sr {
            -webkit-animation: horizontal-bounce 1s infinite;
            animation: horizontal-bounce 1s infinite
        }

        .or:hover .tr {
            --tw-bg-opacity: 1;
            background-color: rgba(73, 71, 159, var(--tw-bg-opacity))
        }

        .or:hover .ur {
            background-color: hsla(0, 0%, 100%, .3)
        }

        .or:hover .vr {
            --tw-text-opacity: 1;
            color: rgba(73, 71, 159, var(--tw-text-opacity))
        }

        .or:hover .wr {
            --tw-text-opacity: 1;
            color: rgba(240, 235, 254, var(--tw-text-opacity))
        }

        .or:hover .xr {
            --tw-text-opacity: 1;
            color: rgba(255, 255, 255, var(--tw-text-opacity))
        }

        .or:hover .yr {
            opacity: .6
        }

        .or:hover .zr {
            opacity: 1
        }

        @media (min-width: 640px) {
            .as, .bs, .cs, .ds, .es, .fs, .gs, .hs, .is, .js, .ks, .ls, .ms, .ns, .os, .ps {
                position: relative;
                padding-bottom: calc(var(--tw-aspect-h) / var(--tw-aspect-w) * 100%)
            }

            .as > *, .bs > *, .cs > *, .ds > *, .es > *, .fs > *, .gs > *, .hs > *, .is > *, .js > *, .ks > *, .ls > *, .ms > *, .ns > *, .os > *, .ps > * {
                position: absolute;
                height: 100%;
                width: 100%;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0
            }

            .cs {
                --tw-aspect-w: 3
            }

            .ps {
                --tw-aspect-w: 16
            }

            .qs {
                --tw-aspect-h: 4
            }

            .rs {
                --tw-aspect-h: 9
            }

            .ss {
                font-size: 1.25rem;
                line-height: 1.8
            }

            .ss p {
                margin-top: 1.2em;
                margin-bottom: 1.2em
            }

            .ss [class~=lead] {
                font-size: 1.2em;
                line-height: 1.5;
                margin-top: 1em;
                margin-bottom: 1em
            }

            .ss blockquote {
                margin-top: 1.6em;
                margin-bottom: 1.6em;
                padding-left: 1.0666667em
            }

            .ss h1 {
                font-size: 3.25rem;
                margin-top: 0;
                margin-bottom: .8571429em;
                line-height: 1
            }

            .ss h2 {
                font-size: 2.7rem;
                margin-top: 1.5555556em;
                margin-bottom: .8888889em;
                line-height: 1.1111111
            }

            .ss h3 {
                font-size: 2rem;
                margin-top: 1.6em;
                margin-bottom: .6666667em;
                line-height: 1.3333333
            }

            .ss h4 {
                margin-top: 1.8em;
                margin-bottom: .6em;
                line-height: 1.6
            }

            .ss figure, .ss img, .ss video {
                margin-top: 2em;
                margin-bottom: 2em
            }

            .ss figure > * {
                margin-top: 0;
                margin-bottom: 0
            }

            .ss figure figcaption {
                font-size: .9em;
                line-height: 1.5555556;
                margin-top: 1em
            }

            .ss code {
                font-size: .9em
            }

            .ss h2 code {
                font-size: .8611111em
            }

            .ss h3 code {
                font-size: .9em
            }

            .ss pre {
                font-size: .9em;
                line-height: 1.7777778;
                margin-top: 2em;
                margin-bottom: 2em;
                border-radius: .5rem;
                padding: 1.1111111em 1.3333333em
            }

            .ss ol, .ss ul {
                margin-top: 1.2em;
                margin-bottom: 1.2em
            }

            .ss li {
                margin-top: .6em;
                margin-bottom: .6em
            }

            .ss ol > li {
                padding-left: 1.8em
            }

            .ss ol > li:before {
                left: 0
            }

            .ss ul > li {
                padding-left: 1.8em
            }

            .ss ul > li:before {
                width: .35em;
                height: .35em;
                top: .725em;
                left: .25em
            }

            .ss > ul > li p {
                margin-top: .8em;
                margin-bottom: .8em
            }

            .ss > ul > li > :first-child {
                margin-top: 1.2em
            }

            .ss > ul > li > :last-child {
                margin-bottom: 1.2em
            }

            .ss > ol > li > :first-child {
                margin-top: 1.2em
            }

            .ss > ol > li > :last-child {
                margin-bottom: 1.2em
            }

            .ss ol ol, .ss ol ul, .ss ul ol, .ss ul ul {
                margin-top: .8em;
                margin-bottom: .8em
            }

            .ss hr {
                margin-top: 2.8em;
                margin-bottom: 2.8em
            }

            .ss h2 + *, .ss h3 + *, .ss h4 + *, .ss hr + * {
                margin-top: 0
            }

            .ss table {
                font-size: .9em;
                line-height: 1.5555556
            }

            .ss thead th {
                padding-right: .6666667em;
                padding-bottom: .8888889em;
                padding-left: .6666667em
            }

            .ss thead th:first-child {
                padding-left: 0
            }

            .ss thead th:last-child {
                padding-right: 0
            }

            .ss tbody td {
                padding: .8888889em .6666667em
            }

            .ss tbody td:first-child {
                padding-left: 0
            }

            .ss tbody td:last-child {
                padding-right: 0
            }

            .ss > :first-child {
                margin-top: 0
            }

            .ss > :last-child {
                margin-bottom: 0
            }

            .ts {
                left: 2.5rem
            }

            .us {
                top: -4rem
            }

            .vs {
                -webkit-box-ordinal-group: 2;
                -ms-flex-order: 1;
                order: 1
            }

            .ws {
                -webkit-box-ordinal-group: 3;
                -ms-flex-order: 2;
                order: 2
            }

            .xs {
                -webkit-box-ordinal-group: 4;
                -ms-flex-order: 3;
                order: 3
            }

            .ys {
                -webkit-box-ordinal-group: 5;
                -ms-flex-order: 4;
                order: 4
            }

            .zs {
                grid-column: span 2/span 2
            }

            .at {
                grid-column: span 4/span 4
            }

            .bt {
                grid-column: span 8/span 8
            }

            .ct {
                grid-column-start: 2
            }

            .dt {
                margin-left: 0;
                margin-right: 0
            }

            .et {
                margin-top: .5rem;
                margin-bottom: .5rem
            }

            .ft {
                margin-top: 2.5rem;
                margin-bottom: 2.5rem
            }

            .gt {
                margin-left: auto;
                margin-right: auto
            }

            .ht {
                margin-top: 6rem
            }

            .it {
                margin-top: 1.25rem
            }

            .jt {
                margin-top: 4rem
            }

            .kt {
                margin-top: 3.5rem
            }

            .lt {
                margin-top: 1rem
            }

            .mt {
                margin-top: .75rem
            }

            .nt {
                margin-left: 0
            }

            .ot {
                margin-left: 1.5rem
            }

            .pt {
                margin-bottom: 3rem
            }

            .qt {
                margin-top: 0
            }

            .rt {
                margin-right: .75rem
            }

            .st {
                margin-left: .75rem
            }

            .tt {
                margin-top: 5rem
            }

            .ut {
                margin-top: 11rem
            }

            .vt {
                margin-top: .375rem
            }

            .wt {
                margin-top: .25rem
            }

            .xt {
                display: block
            }

            .yt {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex
            }

            .zt {
                display: grid
            }

            .au {
                display: none
            }

            .bu {
                height: 10rem
            }

            .cu {
                height: 12rem
            }

            .du {
                height: 100%
            }

            .eu {
                height: 1.5rem
            }

            .fu {
                height: 18rem
            }

            .gu {
                width: 1.5rem
            }

            .hu {
                width: 18rem
            }

            .iu {
                width: 13rem
            }

            .ju {
                max-width: none
            }

            .ku {
                --tw-translate-y: 2.5rem
            }

            .ku, .lu {
                -webkit-transform: var(--tw-transform);
                transform: var(--tw-transform)
            }

            .lu {
                --tw-translate-y: 2.75rem
            }

            .mu {
                --tw-translate-y: 33.333333%
            }

            .nu, .mu {
                -webkit-transform: var(--tw-transform);
                transform: var(--tw-transform)
            }

            .nu {
                --tw-translate-y: -33.333333%
            }

            .ou {
                --tw-scale-x: 1;
                --tw-scale-y: 1;
                -webkit-transform: var(--tw-transform);
                transform: var(--tw-transform)
            }

            .pu {
                grid-template-columns:repeat(3, minmax(0, 1fr))
            }

            .qu {
                grid-template-columns:repeat(2, minmax(0, 1fr))
            }

            .ru {
                grid-template-columns:repeat(4, minmax(0, 1fr))
            }

            .su {
                grid-template-columns:repeat(12, minmax(0, 1fr))
            }

            .tu {
                -webkit-box-orient: horizontal;
                -ms-flex-direction: row;
                flex-direction: row
            }

            .uu, .tu {
                -webkit-box-direction: normal
            }

            .uu {
                -webkit-box-orient: vertical;
                -ms-flex-direction: column;
                flex-direction: column
            }

            .vu {
                justify-items: start
            }

            .wu {
                gap: 4rem
            }

            .xu {
                gap: .75rem
            }

            .yu {
                gap: 2rem
            }

            .zu {
                gap: 1.5rem
            }

            .av {
                gap: 1.25rem
            }

            .bv {
                -webkit-column-gap: 2rem;
                -moz-column-gap: 2rem;
                column-gap: 2rem
            }

            .cv {
                -webkit-column-gap: 1.5rem;
                -moz-column-gap: 1.5rem;
                column-gap: 1.5rem
            }

            .dv {
                row-gap: 3rem
            }

            .ev > :not([hidden]) ~ :not([hidden]) {
                --tw-space-x-reverse: 0;
                margin-right: calc(1rem * var(--tw-space-x-reverse));
                margin-left: calc(1rem * (1 - var(--tw-space-x-reverse)))
            }

            .fv > :not([hidden]) ~ :not([hidden]) {
                --tw-divide-x-reverse: 0;
                border-right-width: calc(1px * var(--tw-divide-x-reverse));
                border-left-width: calc(1px * (1 - var(--tw-divide-x-reverse)))
            }

            .gv > :not([hidden]) ~ :not([hidden]) {
                --tw-divide-y-reverse: 0;
                border-top-width: calc(0px * (1 - var(--tw-divide-y-reverse)));
                border-bottom-width: calc(0px * var(--tw-divide-y-reverse))
            }

            .hv {
                justify-self: end
            }

            .iv {
                border-top-left-radius: 1rem;
                border-bottom-left-radius: 1rem
            }

            .jv {
                border-top-right-radius: 1rem;
                border-bottom-right-radius: 1rem
            }

            .kv {
                border-top-right-radius: 0
            }

            .lv {
                border-top-left-radius: 0
            }

            .mv {
                padding: 4rem
            }

            .nv {
                padding: 2rem
            }

            .ov {
                padding: 1.25rem
            }

            .pv {
                padding: 1.75rem
            }

            .qv {
                padding: 3rem
            }

            .rv {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sv {
                padding-top: 6rem;
                padding-bottom: 6rem
            }

            .tv {
                padding-left: 2.5rem;
                padding-right: 2.5rem
            }

            .uv {
                padding-top: 3rem;
                padding-bottom: 3rem
            }

            .vv {
                padding-top: 2.5rem;
                padding-bottom: 2.5rem
            }

            .wv {
                padding-top: 8rem;
                padding-bottom: 8rem
            }

            .xv {
                padding-left: 2rem;
                padding-right: 2rem
            }

            .yv {
                padding-top: 7rem;
                padding-bottom: 7rem
            }

            .zv {
                padding-left: 3rem;
                padding-right: 3rem
            }

            .aw {
                padding-top: 2rem;
                padding-bottom: 2rem
            }

            .bw {
                padding-top: 0;
                padding-bottom: 0
            }

            .cw {
                padding-top: 5rem;
                padding-bottom: 5rem
            }

            .dw {
                padding-top: 1rem;
                padding-bottom: 1rem
            }

            .ew {
                padding-bottom: 9rem
            }

            .fw {
                padding-left: 0
            }

            .gw {
                padding-top: 16rem
            }

            .hw {
                padding-top: 5rem
            }

            .iw {
                padding-top: 7rem
            }

            .jw {
                padding-bottom: 0
            }

            .kw {
                padding-right: 2.5rem
            }

            .lw {
                padding-top: 0
            }

            .mw {
                padding-left: 2.5rem
            }

            .nw {
                padding-bottom: 6rem
            }

            .ow {
                padding-left: 9rem
            }

            .pw {
                padding-right: 9rem
            }

            .qw {
                padding-bottom: 7rem
            }

            .rw {
                padding-top: 6rem
            }

            .sw {
                text-align: left
            }

            .tw {
                text-align: center
            }

            .uw {
                font-size: 1.25rem;
                line-height: 1.75rem
            }

            .vw {
                font-size: 2rem
            }

            .ww {
                font-size: 1.125rem;
                line-height: 1.75rem
            }

            .xw {
                font-weight: 500
            }

            .yw {
                line-height: 1.625
            }
        }

        @media (min-width: 768px) {
            .zw {
                left: -6rem
            }

            .ax {
                right: -2rem
            }

            .bx {
                -webkit-box-ordinal-group: 2;
                -ms-flex-order: 1;
                order: 1
            }

            .cx {
                grid-column: span 2/span 2
            }

            .dx {
                grid-column: span 3/span 3
            }

            .ex {
                grid-column: span 4/span 4
            }

            .fx {
                grid-column-start: 2
            }

            .gx {
                margin-top: 1.25rem
            }

            .hx {
                margin-bottom: 5rem
            }

            .ix {
                margin-top: 5rem
            }

            .jx {
                margin-right: 0
            }

            .kx {
                margin-left: 1.5rem
            }

            .lx {
                margin-left: -.75rem
            }

            .mx {
                margin-top: 18rem
            }

            .nx {
                margin-top: 0
            }

            .ox {
                margin-top: -12rem
            }

            .px {
                margin-top: 3.5rem
            }

            .qx {
                display: block
            }

            .rx {
                display: grid
            }

            .sx {
                width: 100%
            }

            .tx {
                width: 66.666667%
            }

            .ux {
                width: 5rem
            }

            .vx {
                width: 8rem
            }

            .wx {
                max-width: 48rem
            }

            .xx {
                max-width: 1280px
            }

            .yx {
                --tw-translate-y: -3rem
            }

            .yx, .zx {
                -webkit-transform: var(--tw-transform);
                transform: var(--tw-transform)
            }

            .zx {
                --tw-translate-x: 0.75rem
            }

            .ay {
                --tw-translate-y: 3rem
            }

            .by, .ay {
                -webkit-transform: var(--tw-transform);
                transform: var(--tw-transform)
            }

            .by {
                --tw-translate-y: -1.5rem
            }

            .cy {
                --tw-translate-y: -20rem
            }

            .dy, .cy {
                -webkit-transform: var(--tw-transform);
                transform: var(--tw-transform)
            }

            .dy {
                --tw-rotate: -8deg
            }

            .ey {
                --tw-rotate: 8deg
            }

            .fy, .ey {
                -webkit-transform: var(--tw-transform);
                transform: var(--tw-transform)
            }

            .fy {
                --tw-rotate: 4deg
            }

            .gy {
                --tw-rotate: 12deg;
                -webkit-transform: var(--tw-transform);
                transform: var(--tw-transform)
            }

            .hy {
                grid-template-columns:repeat(2, minmax(0, 1fr))
            }

            .iy {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column
            }

            .jy {
                -webkit-box-pack: end;
                -ms-flex-pack: end;
                justify-content: flex-end
            }

            .ky {
                gap: 1rem
            }

            .ly {
                gap: 2rem
            }

            .my {
                gap: 4rem
            }

            .ny {
                gap: 3rem
            }

            .oy {
                -webkit-column-gap: 3rem;
                -moz-column-gap: 3rem;
                column-gap: 3rem
            }

            .py {
                -webkit-column-gap: 2rem;
                -moz-column-gap: 2rem;
                column-gap: 2rem
            }

            .qy > :not([hidden]) ~ :not([hidden]) {
                --tw-space-x-reverse: 0;
                margin-right: calc(1.5rem * var(--tw-space-x-reverse));
                margin-left: calc(1.5rem * (1 - var(--tw-space-x-reverse)))
            }

            .ry {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sy {
                padding-left: 2rem;
                padding-right: 2rem
            }

            .ty {
                padding-top: 2.5rem;
                padding-bottom: 2.5rem
            }

            .uy {
                padding-right: 1rem
            }

            .vy {
                padding-right: .75rem
            }

            .wy {
                padding-bottom: 0
            }
        }

        @media (min-width: 1024px) {
            .xy {
                left: 3.5rem
            }

            .yy {
                top: -4rem
            }

            .zy {
                -webkit-box-ordinal-group: 2;
                -ms-flex-order: 1;
                order: 1
            }

            .az {
                -webkit-box-ordinal-group: 3;
                -ms-flex-order: 2;
                order: 2
            }

            .bz {
                -webkit-box-ordinal-group: 1;
                -ms-flex-order: 0;
                order: 0
            }

            .cz {
                grid-column: span 6/span 6
            }

            .dz {
                grid-column: span 1/span 1
            }

            .ez {
                grid-column: span 4/span 4
            }

            .fz {
                grid-column: span 2/span 2
            }

            .gz {
                grid-column: span 3/span 3
            }

            .hz {
                grid-column: span 5/span 5
            }

            .iz {
                grid-column: span 7/span 7
            }

            .jz {
                grid-column-start: 3
            }

            .kz {
                grid-column-start: auto
            }

            .lz {
                margin-left: 0;
                margin-right: 0
            }

            .mz {
                margin-left: auto;
                margin-right: auto
            }

            .nz {
                margin-top: 11rem
            }

            .oz {
                margin-right: 0
            }

            .pz {
                margin-left: auto
            }

            .qz {
                margin-top: 6rem
            }

            .rz {
                margin-top: 5rem
            }

            .sz {
                margin-top: 0
            }

            .tz {
                margin-left: 1.5rem
            }

            .uz {
                margin-top: 1rem
            }

            .vz {
                margin-top: .5rem
            }

            .wz {
                margin-top: 1.5rem
            }

            .xz {
                margin-left: -1.5rem
            }

            .yz {
                margin-top: 14rem
            }

            .zz {
                margin-top: 3rem
            }

            .a1 {
                margin-top: 2.5rem
            }

            .b1 {
                margin-top: 4rem
            }

            .c1 {
                display: block
            }

            .d1 {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex
            }

            .e1 {
                display: grid
            }

            .f1 {
                display: none
            }

            .g1 {
                height: 11rem
            }

            .h1 {
                height: 20rem
            }

            .i1 {
                height: 16rem
            }

            .j1 {
                width: 9rem
            }

            .k1 {
                width: 16rem
            }

            .l1 {
                max-width: none
            }

            .m1 {
                max-width: 32rem
            }

            .n1 {
                max-width: 1280px
            }

            .o1 {
                max-width: 1024px
            }

            .p1 {
                max-width: 1536px
            }

            .q1 {
                max-width: 28rem
            }

            .r1 {
                --tw-translate-y: -5rem
            }

            .r1, .s1 {
                -webkit-transform: var(--tw-transform);
                transform: var(--tw-transform)
            }

            .s1 {
                --tw-translate-y: 7rem
            }

            .t1 {
                --tw-scale-x: 1.35;
                --tw-scale-y: 1.35;
                -webkit-transform: var(--tw-transform);
                transform: var(--tw-transform)
            }

            .u1 {
                grid-template-columns:repeat(12, minmax(0, 1fr))
            }

            .v1 {
                grid-template-columns:repeat(2, minmax(0, 1fr))
            }

            .w1 {
                grid-template-columns:repeat(3, minmax(0, 1fr))
            }

            .x1 {
                grid-template-columns:repeat(11, minmax(0, 1fr))
            }

            .y1 {
                grid-template-columns:repeat(4, minmax(0, 1fr))
            }

            .z1 {
                grid-template-columns:repeat(1, minmax(0, 1fr))
            }

            .a2 {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row
            }

            .b2 {
                -webkit-box-align: start;
                -ms-flex-align: start;
                align-items: flex-start
            }

            .c2 {
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center
            }

            .d2 {
                gap: 2rem
            }

            .e2 {
                gap: 1.5rem
            }

            .f2 {
                gap: 3rem
            }

            .g2 {
                gap: 1rem
            }

            .h2 {
                gap: 2.5rem
            }

            .i2 {
                gap: 4rem
            }

            .j2 {
                gap: 1.25rem
            }

            .k2 {
                gap: 0
            }

            .l2 {
                -webkit-column-gap: 3.5rem;
                -moz-column-gap: 3.5rem;
                column-gap: 3.5rem
            }

            .m2 {
                -webkit-column-gap: 3rem;
                -moz-column-gap: 3rem;
                column-gap: 3rem
            }

            .n2 {
                -webkit-column-gap: 2rem;
                -moz-column-gap: 2rem;
                column-gap: 2rem
            }

            .o2 > :not([hidden]) ~ :not([hidden]) {
                --tw-space-x-reverse: 0;
                margin-right: calc(1.5rem * var(--tw-space-x-reverse));
                margin-left: calc(1.5rem * (1 - var(--tw-space-x-reverse)))
            }

            .p2 > :not([hidden]) ~ :not([hidden]) {
                --tw-space-x-reverse: 0;
                margin-right: calc(2.5rem * var(--tw-space-x-reverse));
                margin-left: calc(2.5rem * (1 - var(--tw-space-x-reverse)))
            }

            .q2 {
                padding: 3rem
            }

            .r2 {
                padding-left: 2rem;
                padding-right: 2rem
            }

            .s2 {
                padding-top: 8rem;
                padding-bottom: 8rem
            }

            .t2 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .u2 {
                padding-left: 1rem;
                padding-right: 1rem
            }

            .v2 {
                padding-top: 6rem;
                padding-bottom: 6rem
            }

            .w2 {
                padding-top: 5rem;
                padding-bottom: 5rem
            }

            .x2 {
                padding-top: 0;
                padding-bottom: 0
            }

            .y2 {
                padding-top: 9rem;
                padding-bottom: 9rem
            }

            .z2 {
                padding-left: 1.25rem;
                padding-right: 1.25rem
            }

            .a3 {
                padding-top: 6rem
            }

            .b3 {
                padding-top: 18rem
            }

            .c3 {
                padding-top: 9rem
            }

            .d3 {
                padding-left: 5rem
            }

            .e3 {
                padding-right: 5rem
            }

            .f3 {
                padding-left: 3rem
            }

            .g3 {
                padding-right: 0
            }

            .h3 {
                padding-right: 2.5rem
            }

            .i3 {
                text-align: left
            }

            .j3 {
                text-align: center
            }

            .k3 {
                font-size: 1.75rem
            }

            .l3 {
                font-size: 1.25rem;
                line-height: 1.75rem
            }

            .m3 {
                font-size: 6rem
            }

            .n3 {
                line-height: 1.25
            }

            .o3 {
                opacity: .4
            }
        }

        @media (min-width: 1280px) {
            .p3 {
                top: -5rem
            }

            .q3 {
                left: -5rem
            }

            .r3 {
                right: -5rem
            }

            .s3 {
                grid-column: span 6/span 6
            }

            .t3 {
                grid-column: span 5/span 5
            }

            .u3 {
                margin-left: 1rem
            }

            .v3 {
                margin-top: 3.5rem
            }

            .w3 {
                margin-top: 15rem
            }

            .x3 {
                margin-top: 5rem
            }

            .y3 {
                display: block
            }

            .z3 {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex
            }

            .a4 {
                display: none
            }

            .b4 {
                height: 13rem
            }

            .c4 {
                height: 18rem
            }

            .d4 {
                width: 12rem
            }

            .e4 {
                width: 18rem
            }

            .f4 {
                --tw-translate-y: 3rem
            }

            .f4, .g4 {
                -webkit-transform: var(--tw-transform);
                transform: var(--tw-transform)
            }

            .g4 {
                --tw-translate-y: 3.5rem
            }

            .h4 {
                grid-template-columns:repeat(11, minmax(0, 1fr))
            }

            .i4 {
                grid-template-columns:repeat(4, minmax(0, 1fr))
            }

            .j4 {
                gap: 6rem
            }

            .k4 {
                gap: 2rem
            }

            .l4 {
                gap: 8rem
            }

            .m4 {
                gap: 3rem
            }

            .n4 {
                gap: 4rem
            }

            .o4 {
                -webkit-column-gap: 5rem;
                -moz-column-gap: 5rem;
                column-gap: 5rem
            }

            .p4 > :not([hidden]) ~ :not([hidden]) {
                --tw-space-x-reverse: 0;
                margin-right: calc(4rem * var(--tw-space-x-reverse));
                margin-left: calc(4rem * (1 - var(--tw-space-x-reverse)))
            }

            .q4 {
                padding: 3.5rem
            }

            .r4 {
                padding-left: 2rem;
                padding-right: 2rem
            }

            .s4 {
                padding-left: 2.5rem;
                padding-right: 2.5rem
            }

            .t4 {
                padding-left: 8rem
            }

            .u4 {
                padding-right: 8rem
            }

            .v4 {
                padding-left: 3rem
            }

            .w4 {
                padding-right: 0
            }

            .x4 {
                font-size: 2rem
            }

            .y4 {
                line-height: 1.25
            }
        }

        @media (min-width: 1536px) {
            .z4 {
                right: 0
            }

            .a5 {
                margin-left: auto;
                margin-right: auto
            }

            .b5 {
                margin-top: 16rem
            }

            .c5 {
                margin-top: 6rem
            }

            .d5 {
                display: block
            }

            .e5 {
                height: 20rem
            }

            .f5 {
                width: 20rem
            }

            .g5 {
                max-width: 1280px
            }

            .h5 {
                --tw-translate-x: -4rem;
                -webkit-transform: var(--tw-transform);
                transform: var(--tw-transform)
            }

            .i5 {
                gap: 1.25rem
            }

            .j5 {
                gap: 1rem
            }

            .k5 {
                gap: 3rem
            }

            .l5 {
                -webkit-column-gap: 6rem;
                -moz-column-gap: 6rem;
                column-gap: 6rem
            }

            .m5 {
                border-radius: 2.5rem
            }

            .n5 {
                border-top-left-radius: 5rem;
                border-bottom-left-radius: 5rem
            }

            .o5 {
                padding-left: 4rem;
                padding-right: 4rem
            }

            .p5 {
                padding-left: 2rem;
                padding-right: 2rem
            }

            .q5 {
                padding-right: 0
            }
        }

        .error {
            color: red;
            padding: 10px 0 0 20px;
        }
    </style>
</head>
<body>
<div class="il ml wl">
    <header>
        <div class="ue lm c1 rv">
            <div class="db rg pm bd bk fk">
                <div class="re ji ni">
                    <div class="eh ch bg">
                        <a href="https://innovation-hub.app">
                            <img src="/website/img/apple-touch-icon.png" style="max-height: 55px;">
                        </a>
                    </div>
                    <ul class="re ud o2 p4">
                        <li class="re dh wg">
                            <div>
                                <span class="re ji mi sk sj cg ff">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="zf cf wo" width="44" height="44"
                                         fill="currentColor"
                                         viewBox="0 0 16 16">
                                        <path
                                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                                    </svg>
                                </span>
                            </div>
                            <a class="bh vd td u3" href="https://www.facebook.com/InnovationHub.tech" target="_blank">
                                <h5 class="re ji do ko vo">Facebook</h5>
                                <p class="wd eo xo mo hp">InnovationHub.tech</p>
                            </a>
                        </li>
                        <li class="re ch">
                            <div>
                                <span class="re ji mi qk sj cg ff">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="zf cf wo" width="44" height="44"
                                         viewBox="0 0 24 24" stroke-width="1.5"
                                         stroke="currentColor" fill="none"
                                         stroke-linecap="round" stroke-linejoin="round"><path
                                            stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="3" y="5"
                                                                                                     width="18"
                                                                                                     height="14"
                                                                                                     rx="2"></rect><polyline
                                            points="3 7 12 13 21 7"></polyline>
                                    </svg>
                                </span>
                            </div>
                            <a class="bh td u3" href="mailto:info@innovation-hub.app?subject=IHUB" target="_blank">
                                <h5 class="re ji do ko vo">Email</h5>
                                <p class="wd eo xo mo hp">info@innovation-hub.app</p>
                            </a>
                        </li>
                        <li class="re ch">
                            <div>
                                <span class="re ji mi sj cg ff tk">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="zf cf wo" width="44" height="44"
                                         viewBox="0 0 24 24" stroke-width="1.5"
                                         stroke="currentColor" fill="none"
                                         stroke-linecap="round" stroke-linejoin="round"><path
                                            stroke="none" d="M0 0h24v24H0z" fill="none"></path><path
                                            d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2"></path>
                                    </svg>
                                </span>
                            </div>
                            <a class="bh td u3" href="whatsapp://send?phone=201124338883&text=I'm Interested"
                               target="_blank">
                                <h5 class="re ji do ko vo">Whatsapp</h5>
                                <p class="wd eo xo mo hp">+2-011-2433-8883</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </header>

    <section class="lm in rv r2">
        <div class="rg bd e1 u1 d2">
            <div class="re hi ji mi b2 cz">
                <div>
                    <span class="qe lm mm io wo qk qj vp qh">Welcome to Innovation-hub</span>
                </div>
                <h1 class="sg md yn vo it i3 mq l1">Creative journey to future for your kids.</h1>
                <p class="ug ld co oo yn xo i3">
                    At Innovation-hub, we believe every child deserves a brighter future. and
                    strive to give every student a personalized education that will promote their individual strengths
                    and creativity.
                </p>
                <div class="re hi ji xd oj tu">
                    <a href="#feedback" class="bo ko vo uk qq yq or">
                        Give us feedback
                        <svg xmlns="http://www.w3.org/2000/svg" class="zf cf td sr" width="44" height="44"
                             viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <line x1="15" y1="16" x2="19" y2="12"></line>
                            <line x1="15" y1="8" x2="19" y2="12"></line>
                        </svg>
                    </a>
                    <a class="ae bo io vo qk qt ot qq er zq or" href="https://www.facebook.com/reel/586816566553063"
                       target="_blank">
                        <svg class="zf cf rd bp fq kq wr" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                             viewBox="0 0 494.148 494.148" fill="currentColor">
                            <g>
                                <g>
                                    <path
                                        d="M405.284,201.188L130.804,13.28C118.128,4.596,105.356,0,94.74,0C74.216,0,61.52,16.472,61.52,44.044v406.124    c0,27.54,12.68,43.98,33.156,43.98c10.632,0,23.2-4.6,35.904-13.308l274.608-187.904c17.66-12.104,27.44-28.392,27.44-45.884    C432.632,229.572,422.964,213.288,405.284,201.188z"></path>
                                </g>
                            </g>
                        </svg>
                        Watch video
                    </a>
                </div>
            </div>
            <div class="re hi mi tg bd od sz l1 cz">
                <div class="db">
                    <img class="uf ef" src="/website/img/main-section-2.jpg">
                </div>
            </div>
        </div>
    </section>
</div>
<div class="uf we cu b4 il nl xl"></div>

<section class="lm in wn oj qw wy rw rv r2">
    <div class="sg bd xx">
        <div class="rx hy ny i2">
            <div>
                <h2 class="vg vo nq">Innovation-hub Programs</h2>
            </div>
        </div>
        <div class="od mx rx hy ly i2">
            <div class="db">
                <img
                    src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iMzc1cHQiIGhlaWdodD0iMzc0Ljk5OTk5MXB0IiB2aWV3Qm94PSIwIDAgMzc1IDM3NC45OTk5OTEiIHZlcnNpb249IjEuMiI+CjxkZWZzPgo8Y2xpcFBhdGggaWQ9ImNsaXAxIj4KICA8cGF0aCBkPSJNIDAgMS42NDA2MjUgTCAzNzUgMS42NDA2MjUgTCAzNzUgMzczLjY0MDYyNSBMIDAgMzczLjY0MDYyNSBaIE0gMCAxLjY0MDYyNSAiLz4KPC9jbGlwUGF0aD4KPC9kZWZzPgo8ZyBpZD0ic3VyZmFjZTEiPgo8ZyBjbGlwLXBhdGg9InVybCgjY2xpcDEpIiBjbGlwLXJ1bGU9Im5vbnplcm8iPgo8cGF0aCBzdHlsZT0iIHN0cm9rZTpub25lO2ZpbGwtcnVsZTpub256ZXJvO2ZpbGw6I2UwZDdmYztmaWxsLW9wYWNpdHk6MC45OyIgZD0iTSAxLjE5MTQwNiAzNzMuNjQwNjI1IEMgMC42MTMyODEgMzczLjY0MDYyNSAwLjE0NDUzMSAzNzMuMzIwMzEyIDAuMTQ0NTMxIDM3Mi43NDIxODggQyAwLjE0NDUzMSAzNzIuNzAzMTI1IDAuMTU2MjUgMzY4Ljk5MjE4OCAwLjU0Mjk2OSAzNjIuMzUxNTYyIEMgMC41NzQyMTkgMzYxLjc3MzQzOCAxLjA3ODEyNSAzNjEuMzcxMDk0IDEuNjQ4NDM4IDM2MS40MDIzNDQgQyAyLjIyNjU2MiAzNjEuNDM3NSAyLjY2Nzk2OSAzNjEuOTQ5MjE5IDIuNjM2NzE5IDM2Mi41MzEyNSBDIDIuMjUzOTA2IDM2OS4xMDkzNzUgMi4yNDIxODggMzcyLjY5OTIxOSAyLjI0MjE4OCAzNzIuNzM4MjgxIEMgMi4yNDIxODggMzczLjMxMjUgMS43Njk1MzEgMzczLjY0MDYyNSAxLjE5MTQwNiAzNzMuNjQwNjI1IFogTSAyLjE3OTY4OCAzNTUuMTA5Mzc1IEMgMi4xNTIzNDQgMzU1LjEwOTM3NSAyLjEyNSAzNTUuMTA5Mzc1IDIuMDkzNzUgMzU1LjEwNTQ2OSBDIDEuNTE1NjI1IDM1NS4wNTg1OTQgMS4wODU5MzggMzU0LjU1MDc4MSAxLjEzMjgxMiAzNTMuOTcyNjU2IEMgMS40MDYyNSAzNTAuNjIxMDk0IDEuNzM0Mzc1IDM0Ny4xNTIzNDQgMi4xMDU0NjkgMzQzLjY3MTg3NSBDIDIuMTY0MDYyIDM0My4wOTc2NTYgMi42NzU3ODEgMzQyLjY4MzU5NCAzLjI1NzgxMiAzNDIuNzM4MjgxIEMgMy44MzU5MzggMzQyLjgwMDc4MSA0LjI1IDM0My4zMTY0MDYgNC4xOTE0MDYgMzQzLjg5NDUzMSBDIDMuODIwMzEyIDM0Ny4zNTkzNzUgMy40OTYwOTQgMzUwLjgwODU5NCAzLjIyNjU2MiAzNTQuMTQ0NTMxIEMgMy4xNzk2ODggMzU0LjY5MTQwNiAyLjcxODc1IDM1NS4xMDkzNzUgMi4xNzk2ODggMzU1LjEwOTM3NSBaIE0gNC4xMTcxODggMzM2LjQ2ODc1IEMgNC4wNzQyMTkgMzM2LjQ2ODc1IDQuMDMxMjUgMzM2LjQ2NDg0NCAzLjk4ODI4MSAzMzYuNDU3MDMxIEMgMy40MTAxNTYgMzM2LjM4NjcxOSAzLjAwMzkwNiAzMzUuODYzMjgxIDMuMDc4MTI1IDMzNS4yODkwNjIgQyAzLjUgMzMxLjkxMDE1NiAzLjk2ODc1IDMyOC40Njg3NSA0LjQ3MjY1NiAzMjUuMDU4NTk0IEMgNC41NTg1OTQgMzI0LjQ4MDQ2OSA1LjA5Mzc1IDMyNC4wODU5MzggNS42NjQwNjIgMzI0LjE3MTg3NSBDIDYuMjM4MjgxIDMyNC4yNTc4MTIgNi42MzI4MTIgMzI0Ljc4OTA2MiA2LjU1MDc4MSAzMjUuMzYzMjgxIEMgNi4wNDY4NzUgMzI4Ljc2MTcxOSA1LjU3ODEyNSAzMzIuMTg3NSA1LjE2MDE1NiAzMzUuNTQ2ODc1IEMgNS4wODk4NDQgMzM2LjA3ODEyNSA0LjY0MDYyNSAzMzYuNDY4NzUgNC4xMTcxODggMzM2LjQ2ODc1IFogTSA2LjgxMjUgMzE3Ljk0NTMxMiBDIDYuNzU3ODEyIDMxNy45NDUzMTIgNi42OTkyMTkgMzE3Ljk0MTQwNiA2LjY0MDYyNSAzMTcuOTMzNTk0IEMgNi4wNzAzMTIgMzE3LjgzNTkzOCA1LjY4MzU5NCAzMTcuMjk2ODc1IDUuNzc3MzQ0IDMxNi43MjY1NjIgQyA2LjMzNTkzOCAzMTMuMzU1NDY5IDYuOTQxNDA2IDMwOS45Mzc1IDcuNTcwMzEyIDMwNi41NjY0MDYgQyA3LjY3OTY4OCAzMDUuOTk2MDk0IDguMjI2NTYyIDMwNS42MjEwOTQgOC43OTY4NzUgMzA1LjczMDQ2OSBDIDkuMzYzMjgxIDMwNS44MzU5MzggOS43NDIxODggMzA2LjM4MjgxMiA5LjYzMjgxMiAzMDYuOTU3MDMxIEMgOS4wMDM5MDYgMzEwLjMxMjUgOC40MDYyNSAzMTMuNzE0ODQ0IDcuODQ3NjU2IDMxNy4wNzAzMTIgQyA3Ljc2MTcxOSAzMTcuNTgyMDMxIDcuMzIwMzEyIDMxNy45NDUzMTIgNi44MTI1IDMxNy45NDUzMTIgWiBNIDEwLjIyMjY1NiAyOTkuNTU4NTk0IEMgMTAuMTUyMzQ0IDI5OS41NTg1OTQgMTAuMDgyMDMxIDI5OS41NTA3ODEgMTAuMDExNzE5IDI5OS41MzUxNTYgQyA5LjQ0NTMxMiAyOTkuNDE3OTY5IDkuMDc4MTI1IDI5OC44NjcxODggOS4xOTUzMTIgMjk4LjI5Njg3NSBDIDkuODgyODEyIDI5NC45NDkyMTkgMTAuNjEzMjgxIDI5MS41NTg1OTQgMTEuMzcxMDk0IDI4OC4yMTg3NSBDIDExLjUgMjg3LjY1MjM0NCAxMi4wNjY0MDYgMjg3LjMwMDc4MSAxMi42Mjg5MDYgMjg3LjQyOTY4OCBDIDEzLjE5MTQwNiAyODcuNTU4NTk0IDEzLjU0Njg3NSAyODguMTIxMDk0IDEzLjQxNzk2OSAyODguNjgzNTk0IEMgMTIuNjY0MDYyIDI5Mi4wMDc4MTIgMTEuOTMzNTk0IDI5NS4zODY3MTkgMTEuMjUgMjk4LjcxODc1IEMgMTEuMTQ4NDM4IDI5OS4yMTQ4NDQgMTAuNzEwOTM4IDI5OS41NTg1OTQgMTAuMjIyNjU2IDI5OS41NTg1OTQgWiBNIDE0LjMzMjAzMSAyODEuMzIwMzEyIEMgMTQuMjQ2MDk0IDI4MS4zMjAzMTIgMTQuMTY0MDYyIDI4MS4zMDg1OTQgMTQuMDgyMDMxIDI4MS4yODkwNjIgQyAxMy41MTk1MzEgMjgxLjE1MjM0NCAxMy4xNzU3ODEgMjgwLjU4MjAzMSAxMy4zMTI1IDI4MC4wMTk1MzEgQyAxNC4xMjg5MDYgMjc2LjY5MTQwNiAxNC45OTIxODggMjczLjMzMjAzMSAxNS44Nzg5MDYgMjcwLjAzOTA2MiBDIDE2LjAyNzM0NCAyNjkuNDc2NTYyIDE2LjYwNTQ2OSAyNjkuMTQ4NDM4IDE3LjE2NDA2MiAyNjkuMjk2ODc1IEMgMTcuNzIyNjU2IDI2OS40NDUzMTIgMTguMDU0Njg4IDI3MC4wMjM0MzggMTcuOTAyMzQ0IDI3MC41ODIwMzEgQyAxNy4wMjM0MzggMjczLjg2MzI4MSAxNi4xNjQwNjIgMjc3LjIxMDkzOCAxNS4zNDc2NTYgMjgwLjUyMzQzOCBDIDE1LjIzMDQ2OSAyODEgMTQuODA0Njg4IDI4MS4zMjAzMTIgMTQuMzMyMDMxIDI4MS4zMjAzMTIgWiBNIDE5LjE0NDUzMSAyNjMuMjYxNzE5IEMgMTkuMDQ2ODc1IDI2My4yNjE3MTkgMTguOTQ5MjE5IDI2My4yNDYwOTQgMTguODUxNTYyIDI2My4yMTg3NSBDIDE4LjI5Njg3NSAyNjMuMDU4NTk0IDE3Ljk3NjU2MiAyNjIuNDc2NTYyIDE4LjEzNjcxOSAyNjEuOTIxODc1IEMgMTkuMDg1OTM4IDI1OC42MjEwOTQgMjAuMDgyMDMxIDI1NS4zMDA3ODEgMjEuMDkzNzUgMjUyLjA1MDc4MSBDIDIxLjI2OTUzMSAyNTEuNDk2MDk0IDIxLjg1NTQ2OSAyNTEuMTg3NSAyMi40MDYyNSAyNTEuMzU5Mzc1IEMgMjIuOTYwOTM4IDI1MS41MzEyNSAyMy4yNjk1MzEgMjUyLjEyMTA5NCAyMy4wOTc2NTYgMjUyLjY3NTc4MSBDIDIyLjA4NTkzOCAyNTUuOTEwMTU2IDIxLjA5NzY1NiAyNTkuMjE4NzUgMjAuMTUyMzQ0IDI2Mi41MDM5MDYgQyAyMC4wMTk1MzEgMjYyLjk2MDkzOCAxOS41OTc2NTYgMjYzLjI2MTcxOSAxOS4xNDQ1MzEgMjYzLjI2MTcxOSBaIE0gMjQuNjcxODc1IDI0NS40MTQwNjIgQyAyNC41NjI1IDI0NS40MTQwNjIgMjQuNDUzMTI1IDI0NS4zOTg0MzggMjQuMzM5ODQ0IDI0NS4zNjMyODEgQyAyMy43OTI5NjkgMjQ1LjE3OTY4OCAyMy40OTYwOTQgMjQ0LjU4NTkzOCAyMy42NzU3ODEgMjQ0LjAzNTE1NiBDIDI0Ljc2MTcxOSAyNDAuNzczNDM4IDI1Ljg5NDUzMSAyMzcuNDk2MDk0IDI3LjAzOTA2MiAyMzQuMjk2ODc1IEMgMjcuMjM0Mzc1IDIzMy43NSAyNy44MzU5MzggMjMzLjQ2NDg0NCAyOC4zNzg5MDYgMjMzLjY2NDA2MiBDIDI4LjkyNTc4MSAyMzMuODU5Mzc1IDI5LjIxMDkzOCAyMzQuNDU3MDMxIDI5LjAxNTYyNSAyMzUuMDAzOTA2IEMgMjcuODcxMDk0IDIzOC4xODc1IDI2Ljc0NjA5NCAyNDEuNDUzMTI1IDI1LjY2Nzk2OSAyNDQuNjk5MjE5IEMgMjUuNTE5NTMxIDI0NS4xMzY3MTkgMjUuMTEzMjgxIDI0NS40MTQwNjIgMjQuNjcxODc1IDI0NS40MTQwNjIgWiBNIDMwLjkzMzU5NCAyMjcuODE2NDA2IEMgMzAuODEyNSAyMjcuODE2NDA2IDMwLjY4MzU5NCAyMjcuNzk2ODc1IDMwLjU2MjUgMjI3Ljc1IEMgMzAuMDE5NTMxIDIyNy41NDI5NjkgMjkuNzUgMjI2LjkzNzUgMjkuOTU3MDMxIDIyNi4zOTQ1MzEgQyAzMS4xNzE4NzUgMjIzLjE5MTQwNiAzMi40NDE0MDYgMjE5Ljk2ODc1IDMzLjczMDQ2OSAyMTYuODA4NTk0IEMgMzMuOTQ5MjE5IDIxNi4yNzM0MzggMzQuNTYyNSAyMTYuMDE1NjI1IDM1LjA5NzY1NiAyMTYuMjM0Mzc1IEMgMzUuNjMyODEyIDIxNi40NTMxMjUgMzUuODkwNjI1IDIxNy4wNjY0MDYgMzUuNjcxODc1IDIxNy42MDE1NjIgQyAzNC4zOTA2MjUgMjIwLjc0NjA5NCAzMy4xMjUgMjIzLjk1MzEyNSAzMS45MTQwNjIgMjI3LjE0MDYyNSBDIDMxLjc1NzgxMiAyMjcuNTU4NTk0IDMxLjM1OTM3NSAyMjcuODE2NDA2IDMwLjkzMzU5NCAyMjcuODE2NDA2IFogTSAzNy45NTMxMjUgMjEwLjUxMTcxOSBDIDM3LjgxMjUgMjEwLjUxMTcxOSAzNy42NzE4NzUgMjEwLjQ4NDM3NSAzNy41MzkwNjIgMjEwLjQyNTc4MSBDIDM3LjAwMzkwNiAyMTAuMTk1MzEyIDM2Ljc2MTcxOSAyMDkuNTc4MTI1IDM2Ljk5MjE4OCAyMDkuMDQyOTY5IEMgMzguMzUxNTYyIDIwNS44OTQ1MzEgMzkuNzYxNzE5IDIwMi43MzA0NjkgNDEuMTkxNDA2IDE5OS42MzY3MTkgQyA0MS40MzM1OTQgMTk5LjExMzI4MSA0Mi4wNTg1OTQgMTk4Ljg4MjgxMiA0Mi41ODIwMzEgMTk5LjEyNSBDIDQzLjEwOTM3NSAxOTkuMzY3MTg4IDQzLjMzOTg0NCAxOTkuOTkyMTg4IDQzLjA5NzY1NiAyMDAuNTE1NjI1IEMgNDEuNjc1NzgxIDIwMy41OTM3NSA0MC4yNjk1MzEgMjA2LjczODI4MSAzOC45MTc5NjkgMjA5Ljg3NSBDIDM4Ljc0NjA5NCAyMTAuMjczNDM4IDM4LjM1OTM3NSAyMTAuNTExNzE5IDM3Ljk1MzEyNSAyMTAuNTExNzE5IFogTSA0NS43NDYwOTQgMTkzLjU0Mjk2OSBDIDQ1LjU4OTg0NCAxOTMuNTQyOTY5IDQ1LjQzMzU5NCAxOTMuNTA3ODEyIDQ1LjI4NTE1NiAxOTMuNDM3NSBDIDQ0Ljc2NTYyNSAxOTMuMTgzNTk0IDQ0LjU0Njg3NSAxOTIuNTUwNzgxIDQ0LjgwMDc4MSAxOTIuMDMxMjUgQyA0Ni4zMDQ2ODggMTg4Ljk0OTIxOSA0Ny44NjcxODggMTg1Ljg1NTQ2OSA0OS40NDE0MDYgMTgyLjgzNTkzOCBDIDQ5LjcwNzAzMSAxODIuMzIwMzEyIDUwLjMzOTg0NCAxODIuMTIxMDk0IDUwLjg1NTQ2OSAxODIuMzkwNjI1IEMgNTEuMzY3MTg4IDE4Mi42NTYyNSA1MS41NjY0MDYgMTgzLjI4OTA2MiA1MS4zMDA3ODEgMTgzLjgwNDY4OCBDIDQ5LjczNDM3NSAxODYuODA4NTk0IDQ4LjE4MzU5NCAxODkuODg2NzE5IDQ2LjY4NzUgMTkyLjk1MzEyNSBDIDQ2LjUwMzkwNiAxOTMuMzI4MTI1IDQ2LjEzMjgxMiAxOTMuNTQyOTY5IDQ1Ljc0NjA5NCAxOTMuNTQyOTY5IFogTSA1NC4zMzIwMzEgMTc2Ljk2ODc1IEMgNTQuMTYwMTU2IDE3Ni45Njg3NSA1My45ODQzNzUgMTc2LjkyNTc4MSA1My44MjQyMTkgMTc2LjgzOTg0NCBDIDUzLjMyMDMxMiAxNzYuNTU4NTk0IDUzLjEzMjgxMiAxNzUuOTIxODc1IDUzLjQxNDA2MiAxNzUuNDE0MDYyIEMgNTUuMDYyNSAxNzIuNDEwMTU2IDU2Ljc3MzQzOCAxNjkuMzk0NTMxIDU4LjQ5NjA5NCAxNjYuNDU3MDMxIEMgNTguNzg5MDYyIDE2NS45NTcwMzEgNTkuNDI5Njg4IDE2NS43ODkwNjIgNTkuOTI5Njg4IDE2Ni4wODIwMzEgQyA2MC40Mjk2ODggMTY2LjM3NSA2MC41OTc2NTYgMTY3LjAxOTUzMSA2MC4zMDQ2ODggMTY3LjUxOTUzMSBDIDU4LjU5Mzc1IDE3MC40NDE0MDYgNTYuODkwNjI1IDE3My40Mzc1IDU1LjI1IDE3Ni40MjU3ODEgQyA1NS4wNTg1OTQgMTc2Ljc3MzQzOCA1NC42OTkyMTkgMTc2Ljk2ODc1IDU0LjMzMjAzMSAxNzYuOTY4NzUgWiBNIDYzLjcyNjU2MiAxNjAuODQzNzUgQyA2My41MzkwNjIgMTYwLjg0Mzc1IDYzLjM1MTU2MiAxNjAuNzkyOTY5IDYzLjE3OTY4OCAxNjAuNjg3NSBDIDYyLjY4MzU5NCAxNjAuMzgyODEyIDYyLjUzMTI1IDE1OS43MzQzNzUgNjIuODM1OTM4IDE1OS4yNDIxODggQyA2NC42MzY3MTkgMTU2LjMyODEyNSA2Ni41IDE1My40MTAxNTYgNjguMzc1IDE1MC41NjI1IEMgNjguNjk1MzEyIDE1MC4wNzgxMjUgNjkuMzQzNzUgMTQ5Ljk0MTQwNiA2OS44MjgxMjUgMTUwLjI2MTcxOSBDIDcwLjMxMjUgMTUwLjU4MjAzMSA3MC40NDUzMTIgMTUxLjIzMDQ2OSA3MC4xMjUgMTUxLjcxNDg0NCBDIDY4LjI2MTcxOSAxNTQuNTQ2ODc1IDY2LjQxMDE1NiAxNTcuNDQ5MjE5IDY0LjYyMTA5NCAxNjAuMzQ3NjU2IEMgNjQuNDIxODc1IDE2MC42Njc5NjkgNjQuMDc4MTI1IDE2MC44NDM3NSA2My43MjY1NjIgMTYwLjg0Mzc1IFogTSA3My45NDkyMTkgMTQ1LjIzNDM3NSBDIDczLjc0MjE4OCAxNDUuMjM0Mzc1IDczLjUzNTE1NiAxNDUuMTcxODc1IDczLjM1MTU2MiAxNDUuMDQ2ODc1IEMgNzIuODc1IDE0NC43MTQ4NDQgNzIuNzU3ODEyIDE0NC4wNjI1IDczLjA4OTg0NCAxNDMuNTg1OTM4IEMgNzUuMDQyOTY5IDE0MC43Njk1MzEgNzcuMDYyNSAxMzcuOTUzMTI1IDc5LjA4NTkzOCAxMzUuMjE0ODQ0IEMgNzkuNDI5Njg4IDEzNC43NSA4MC4wODU5MzggMTM0LjY0ODQzOCA4MC41NTA3ODEgMTM0Ljk5NjA5NCBDIDgxLjAxNTYyNSAxMzUuMzM5ODQ0IDgxLjExNzE4OCAxMzUuOTk2MDk0IDgwLjc2OTUzMSAxMzYuNDY0ODQ0IEMgNzguNzYxNzE5IDEzOS4xODM1OTQgNzYuNzUzOTA2IDE0MS45ODA0NjkgNzQuODEyNSAxNDQuNzgxMjUgQyA3NC42MDkzNzUgMTQ1LjA3ODEyNSA3NC4yODEyNSAxNDUuMjM0Mzc1IDczLjk0OTIxOSAxNDUuMjM0Mzc1IFogTSA4NSAxMzAuMjAzMTI1IEMgODQuNzczNDM4IDEzMC4yMDMxMjUgODQuNTQ2ODc1IDEzMC4xMzI4MTIgODQuMzU1NDY5IDEyOS45ODA0NjkgQyA4My44OTg0MzggMTI5LjYyNSA4My44MTY0MDYgMTI4Ljk2NDg0NCA4NC4xNzE4NzUgMTI4LjUwNzgxMiBDIDg2LjI3NzM0NCAxMjUuODA4NTk0IDg4LjQ0OTIxOSAxMjMuMTA5Mzc1IDkwLjYyNSAxMjAuNDg0Mzc1IEMgOTAuOTk2MDk0IDEyMC4wMzkwNjIgOTEuNjU2MjUgMTE5Ljk4MDQ2OSA5Mi4xMDE1NjIgMTIwLjM0NzY1NiBDIDkyLjU0Njg3NSAxMjAuNzE4NzUgOTIuNjA5Mzc1IDEyMS4zODI4MTIgOTIuMjM4MjgxIDEyMS44MjgxMjUgQyA5MC4wNzQyMTkgMTI0LjQzMzU5NCA4Ny45MTc5NjkgMTI3LjExMzI4MSA4NS44MjgxMjUgMTI5Ljc5Njg3NSBDIDg1LjYyMTA5NCAxMzAuMDY2NDA2IDg1LjMxMjUgMTMwLjIwMzEyNSA4NSAxMzAuMjAzMTI1IFogTSA5Ni44NzUgMTE1LjgyNDIxOSBDIDk2LjYzMjgxMiAxMTUuODI0MjE5IDk2LjM4NjcxOSAxMTUuNzM4MjgxIDk2LjE4NzUgMTE1LjU2MjUgQyA5NS43NSAxMTUuMTc5Njg4IDk1LjcwNzAzMSAxMTQuNTE1NjI1IDk2LjA4OTg0NCAxMTQuMDgyMDMxIEMgOTguMzQzNzUgMTExLjUwMzkwNiAxMDAuNjY0MDYyIDEwOC45MzM1OTQgMTAyLjk5MjE4OCAxMDYuNDQ1MzEyIEMgMTAzLjM4NjcxOSAxMDYuMDIzNDM4IDEwNC4wNTA3ODEgMTA2IDEwNC40NzI2NTYgMTA2LjM5NDUzMSBDIDEwNC44OTg0MzggMTA2Ljc5Mjk2OSAxMDQuOTIxODc1IDEwNy40NTcwMzEgMTA0LjUyMzQzOCAxMDcuODc4OTA2IEMgMTAyLjIxNDg0NCAxMTAuMzUxNTYyIDk5LjkwNjI1IDExMi45MDYyNSA5Ny42NjQwNjIgMTE1LjQ2NDg0NCBDIDk3LjQ1NzAzMSAxMTUuNjk5MjE5IDk3LjE2Nzk2OSAxMTUuODI0MjE5IDk2Ljg3NSAxMTUuODI0MjE5IFogTSAxMDkuNTY2NDA2IDEwMi4xNTYyNSBDIDEwOS4zMDA3ODEgMTAyLjE1NjI1IDEwOS4wMzUxNTYgMTAyLjA1NDY4OCAxMDguODI4MTI1IDEwMS44NTU0NjkgQyAxMDguNDE3OTY5IDEwMS40NDkyMTkgMTA4LjQxMDE1NiAxMDAuNzgxMjUgMTA4LjgyMDMxMiAxMDAuMzcxMDk0IEMgMTExLjIxODc1IDk3LjkzMzU5NCAxMTMuNjg3NSA5NS41MDc4MTIgMTE2LjE2MDE1NiA5My4xNTYyNSBDIDExNi41ODIwMzEgOTIuNzU3ODEyIDExNy4yNDYwOTQgOTIuNzc3MzQ0IDExNy42NDQ1MzEgOTMuMTk1MzEyIEMgMTE4LjA0Mjk2OSA5My42MTMyODEgMTE4LjAyNzM0NCA5NC4yODEyNSAxMTcuNjA1NDY5IDk0LjY3OTY4OCBDIDExNS4xNDg0MzggOTcuMDE1NjI1IDExMi42OTUzMTIgOTkuNDI1NzgxIDExMC4zMTI1IDEwMS44NDM3NSBDIDExMC4xMDU0NjkgMTAyLjA1MDc4MSAxMDkuODM1OTM4IDEwMi4xNTYyNSAxMDkuNTY2NDA2IDEwMi4xNTYyNSBaIE0gMTIzLjAzOTA2MiA4OS4yNzM0MzggQyAxMjIuNzUzOTA2IDg5LjI3MzQzOCAxMjIuNDY4NzUgODkuMTU2MjUgMTIyLjI2MTcxOSA4OC45MjU3ODEgQyAxMjEuODcxMDk0IDg4LjQ5MjE4OCAxMjEuOTEwMTU2IDg3LjgzMjAzMSAxMjIuMzM5ODQ0IDg3LjQ0MTQwNiBDIDEyNC44ODI4MTIgODUuMTUyMzQ0IDEyNy40OTYwOTQgODIuODc4OTA2IDEzMC4xMDE1NjIgODAuNjg3NSBDIDEzMC41NDY4NzUgODAuMzEyNSAxMzEuMjA3MDMxIDgwLjM3MTA5NCAxMzEuNTgyMDMxIDgwLjgxNjQwNiBDIDEzMS45NTMxMjUgODEuMjU3ODEyIDEzMS44OTQ1MzEgODEuOTIxODc1IDEzMS40NTMxMjUgODIuMjkyOTY5IEMgMTI4Ljg2MzI4MSA4NC40NzI2NTYgMTI2LjI2OTUzMSA4Ni43MzA0NjkgMTIzLjc0MjE4OCA4OS4wMDM5MDYgQyAxMjMuNTQyOTY5IDg5LjE4MzU5NCAxMjMuMjg5MDYyIDg5LjI3MzQzOCAxMjMuMDM5MDYyIDg5LjI3MzQzOCBaIE0gMTM3LjI2OTUzMSA3Ny4yMzA0NjkgQyAxMzYuOTYwOTM4IDc3LjIzMDQ2OSAxMzYuNjUyMzQ0IDc3LjA5Mzc1IDEzNi40NDUzMTIgNzYuODMyMDMxIEMgMTM2LjA4NTkzOCA3Ni4zNzg5MDYgMTM2LjE2MDE1NiA3NS43MTg3NSAxMzYuNjEzMjgxIDc1LjM1OTM3NSBDIDEzOS4yODkwNjIgNzMuMjMwNDY5IDE0Mi4wMzUxNTYgNzEuMTIxMDk0IDE0NC43NzM0MzggNjkuMDg5ODQ0IEMgMTQ1LjIzODI4MSA2OC43NDIxODggMTQ1Ljg5NDUzMSA2OC44Mzk4NDQgMTQ2LjI0MjE4OCA2OS4zMDQ2ODggQyAxNDYuNTg1OTM4IDY5Ljc3MzQzOCAxNDYuNDg4MjgxIDcwLjQyOTY4OCAxNDYuMDIzNDM4IDcwLjc3MzQzOCBDIDE0My4zMDQ2ODggNzIuNzkyOTY5IDE0MC41NzgxMjUgNzQuODg2NzE5IDEzNy45MTc5NjkgNzcuMDAzOTA2IEMgMTM3LjcyNjU2MiA3Ny4xNTIzNDQgMTM3LjQ5NjA5NCA3Ny4yMzA0NjkgMTM3LjI2OTUzMSA3Ny4yMzA0NjkgWiBNIDE1Mi4xOTkyMTkgNjYuMDc0MjE5IEMgMTUxLjg3MTA5NCA2Ni4wNzQyMTkgMTUxLjU0Mjk2OSA2NS45MTc5NjkgMTUxLjMzOTg0NCA2NS42Mjg5MDYgQyAxNTEuMDA3ODEyIDY1LjE1MjM0NCAxNTEuMTI1IDY0LjUgMTUxLjU5NzY1NiA2NC4xNjc5NjkgQyAxNTQuMzk0NTMxIDYyLjIwNzAzMSAxNTcuMjYxNzE5IDYwLjI2OTUzMSAxNjAuMTIxMDk0IDU4LjQwMjM0NCBDIDE2MC42MDkzNzUgNTguMDg1OTM4IDE2MS4yNTc4MTIgNTguMjI2NTYyIDE2MS41NzQyMTkgNTguNzEwOTM4IEMgMTYxLjg5MDYyNSA1OS4xOTUzMTIgMTYxLjc1MzkwNiA1OS44NDc2NTYgMTYxLjI2NTYyNSA2MC4xNjQwNjIgQyAxNTguNDI1NzgxIDYyLjAxNTYyNSAxNTUuNTc4MTI1IDYzLjk0MTQwNiAxNTIuODAwNzgxIDY1Ljg4NjcxOSBDIDE1Mi42MTcxODggNjYuMDE1NjI1IDE1Mi40MTAxNTYgNjYuMDc0MjE5IDE1Mi4xOTkyMTkgNjYuMDc0MjE5IFogTSAxNjcuNzgxMjUgNTUuODUxNTYyIEMgMTY3LjQyNTc4MSA1NS44NTE1NjIgMTY3LjA4MjAzMSA1NS42NzE4NzUgMTY2Ljg4NjcxOSA1NS4zNTE1NjIgQyAxNjYuNTgyMDMxIDU0Ljg1NTQ2OSAxNjYuNzM4MjgxIDU0LjIxMDkzOCAxNjcuMjMwNDY5IDUzLjkwNjI1IEMgMTcwLjEyODkwNiA1Mi4xMjg5MDYgMTczLjEwNTQ2OSA1MC4zNjcxODggMTc2LjA4NTkzOCA0OC42Njc5NjkgQyAxNzYuNTg5ODQ0IDQ4LjM4MjgxMiAxNzcuMjMwNDY5IDQ4LjU1ODU5NCAxNzcuNTE1NjI1IDQ5LjA2MjUgQyAxNzcuODAwNzgxIDQ5LjU2NjQwNiAxNzcuNjI1IDUwLjIwNzAzMSAxNzcuMTI1IDUwLjQ5MjE4OCBDIDE3NC4xNjQwNjIgNTIuMTc5Njg4IDE3MS4yMDcwMzEgNTMuOTI5Njg4IDE2OC4zMjgxMjUgNTUuNjk1MzEyIEMgMTY4LjE1NjI1IDU1LjgwMDc4MSAxNjcuOTY4NzUgNTUuODUxNTYyIDE2Ny43ODEyNSA1NS44NTE1NjIgWiBNIDE4My45NDUzMTIgNDYuNTgyMDMxIEMgMTgzLjU3MDMxMiA0Ni41ODIwMzEgMTgzLjIwNzAzMSA0Ni4zNzg5MDYgMTgzLjAxOTUzMSA0Ni4wMjM0MzggQyAxODIuNzQ2MDk0IDQ1LjUxNTYyNSAxODIuOTM3NSA0NC44Nzg5MDYgMTgzLjQ0OTIxOSA0NC42MDU0NjkgQyAxODYuNDQ1MzEyIDQzLjAwMzkwNiAxODkuNTIzNDM4IDQxLjQyMTg3NSAxOTIuNTk3NjU2IDM5LjkwMjM0NCBDIDE5My4xMTcxODggMzkuNjQ0NTMxIDE5My43NDYwOTQgMzkuODU5Mzc1IDE5NC4wMDM5MDYgNDAuMzc4OTA2IEMgMTk0LjI1NzgxMiA0MC44OTg0MzggMTk0LjA0Njg3NSA0MS41MjczNDQgMTkzLjUyNzM0NCA0MS43ODEyNSBDIDE5MC40Njg3NSA0My4yOTI5NjkgMTg3LjQxNDA2MiA0NC44NjMyODEgMTg0LjQzNzUgNDYuNDU3MDMxIEMgMTg0LjI4MTI1IDQ2LjUzOTA2MiAxODQuMTA5Mzc1IDQ2LjU4MjAzMSAxODMuOTQ1MzEyIDQ2LjU4MjAzMSBaIE0gMjAwLjYyNSAzOC4yNzczNDQgQyAyMDAuMjI2NTYyIDM4LjI3NzM0NCAxOTkuODQ3NjU2IDM4LjA1MDc4MSAxOTkuNjcxODc1IDM3LjY2Nzk2OSBDIDE5OS40Mjk2ODggMzcuMTQ0NTMxIDE5OS42NTYyNSAzNi41MTk1MzEgMjAwLjE4MzU5NCAzNi4yNzczNDQgQyAyMDMuMjY1NjI1IDM0Ljg1MTU2MiAyMDYuNDI1NzgxIDMzLjQ0OTIxOSAyMDkuNTg1OTM4IDMyLjEwOTM3NSBDIDIxMC4xMjEwOTQgMzEuODc4OTA2IDIxMC43MzQzNzUgMzIuMTI4OTA2IDIxMC45NjA5MzggMzIuNjY0MDYyIEMgMjExLjE4NzUgMzMuMTk1MzEyIDIxMC45Mzc1IDMzLjgxMjUgMjEwLjQwNjI1IDM0LjAzOTA2MiBDIDIwNy4yNjk1MzEgMzUuMzcxMDk0IDIwNC4xMjUgMzYuNzY1NjI1IDIwMS4wNjY0MDYgMzguMTc5Njg4IEMgMjAwLjkyMTg3NSAzOC4yNDYwOTQgMjAwLjc2OTUzMSAzOC4yNzczNDQgMjAwLjYyNSAzOC4yNzczNDQgWiBNIDIxNy43NSAzMC45NDE0MDYgQyAyMTcuMzI4MTI1IDMwLjk0MTQwNiAyMTYuOTM3NSAzMC42ODc1IDIxNi43NzM0MzggMzAuMjc3MzQ0IEMgMjE2LjU2MjUgMjkuNzM4MjgxIDIxNi44MjQyMTkgMjkuMTI4OTA2IDIxNy4zNTkzNzUgMjguOTE0MDYyIEMgMjIwLjUxNTYyNSAyNy42NjQwNjIgMjIzLjc1MzkwNiAyNi40NDE0MDYgMjI2Ljk4MDQ2OSAyNS4yNzM0MzggQyAyMjcuNTIzNDM4IDI1LjA3ODEyNSAyMjguMTI1IDI1LjM1OTM3NSAyMjguMzI0MjE5IDI1LjkwNjI1IEMgMjI4LjUxOTUzMSAyNi40NDkyMTkgMjI4LjIzODI4MSAyNy4wNTA3ODEgMjI3LjY5MTQwNiAyNy4yNSBDIDIyNC40ODQzNzUgMjguNDEwMTU2IDIyMS4yNjk1MzEgMjkuNjI1IDIxOC4xMzI4MTIgMzAuODY3MTg4IEMgMjE4LjAwNzgxMiAzMC45MTc5NjkgMjE3Ljg3ODkwNiAzMC45NDE0MDYgMjE3Ljc1IDMwLjk0MTQwNiBaIE0gMjM1LjI1MzkwNiAyNC41NTQ2ODggQyAyMzQuODEyNSAyNC41NTQ2ODggMjM0LjQwNjI1IDI0LjI3NzM0NCAyMzQuMjU3ODEyIDIzLjgzOTg0NCBDIDIzNC4wNzQyMTkgMjMuMjg5MDYyIDIzNC4zNjcxODggMjIuNjk1MzEyIDIzNC45MjE4NzUgMjIuNTExNzE5IEMgMjM4LjEzNjcxOSAyMS40Mzc1IDI0MS40Mjk2ODggMjAuMzg2NzE5IDI0NC43MTQ4NDQgMTkuMzkwNjI1IEMgMjQ1LjI3MzQzOCAxOS4yMjI2NTYgMjQ1Ljg1NTQ2OSAxOS41MzUxNTYgMjQ2LjAyMzQzOCAyMC4wODk4NDQgQyAyNDYuMTkxNDA2IDIwLjY0NDUzMSAyNDUuODc4OTA2IDIxLjIzMDQ2OSAyNDUuMzI0MjE5IDIxLjM5ODQzOCBDIDI0Mi4wNTg1OTQgMjIuMzg2NzE5IDIzOC43ODEyNSAyMy40MzM1OTQgMjM1LjU4NTkzOCAyNC41MDM5MDYgQyAyMzUuNDc2NTYyIDI0LjUzOTA2MiAyMzUuMzYzMjgxIDI0LjU1NDY4OCAyMzUuMjUzOTA2IDI0LjU1NDY4OCBaIE0gMjUzLjA2NjQwNiAxOS4xMDE1NjIgQyAyNTIuNjA5Mzc1IDE5LjEwMTU2MiAyNTIuMTg3NSAxOC43OTY4NzUgMjUyLjA1ODU5NCAxOC4zMzU5MzggQyAyNTEuOTAyMzQ0IDE3Ljc3NzM0NCAyNTIuMjMwNDY5IDE3LjE5OTIxOSAyNTIuNzg5MDYyIDE3LjA0Mjk2OSBDIDI1Ni4wNTg1OTQgMTYuMTMyODEyIDI1OS40MDIzNDQgMTUuMjUgMjYyLjcyNjU2MiAxNC40MTc5NjkgQyAyNjMuMjkyOTY5IDE0LjI3NzM0NCAyNjMuODU5Mzc1IDE0LjYyMTA5NCAyNjMuOTk2MDk0IDE1LjE4MzU5NCBDIDI2NC4xMzY3MTkgMTUuNzQ2MDk0IDI2My43OTY4NzUgMTYuMzE2NDA2IDI2My4yMzQzNzUgMTYuNDU3MDMxIEMgMjU5LjkyNTc4MSAxNy4yODEyNSAyNTYuNjAxNTYyIDE4LjE2MDE1NiAyNTMuMzQ3NjU2IDE5LjA2MjUgQyAyNTMuMjUzOTA2IDE5LjA4OTg0NCAyNTMuMTYwMTU2IDE5LjEwMTU2MiAyNTMuMDY2NDA2IDE5LjEwMTU2MiBaIE0gMjcxLjEzNjcxOSAxNC41NDY4NzUgQyAyNzAuNjU2MjUgMTQuNTQ2ODc1IDI3MC4yMjI2NTYgMTQuMjE0ODQ0IDI3MC4xMTMyODEgMTMuNzI2NTYyIEMgMjY5Ljk4NDM3NSAxMy4xNjQwNjIgMjcwLjMzOTg0NCAxMi42MDE1NjIgMjcwLjkwNjI1IDEyLjQ3MjY1NiBDIDI3NC4yMjI2NTYgMTEuNzIyNjU2IDI3Ny42MDE1NjIgMTEgMjgwLjk1NzAzMSAxMC4zMzIwMzEgQyAyODEuNTIzNDM4IDEwLjIxODc1IDI4Mi4wNzgxMjUgMTAuNTg1OTM4IDI4Mi4xOTE0MDYgMTEuMTUyMzQ0IEMgMjgyLjMwNDY4OCAxMS43MjI2NTYgMjgxLjkzMzU5NCAxMi4yNzM0MzggMjgxLjM2NzE4OCAxMi4zODY3MTkgQyAyNzguMDI3MzQ0IDEzLjA1NDY4OCAyNzQuNjY0MDYyIDEzLjc3MzQzOCAyNzEuMzY3MTg4IDE0LjUxOTUzMSBDIDI3MS4yODkwNjIgMTQuNTM5MDYyIDI3MS4yMTA5MzggMTQuNTQ2ODc1IDI3MS4xMzY3MTkgMTQuNTQ2ODc1IFogTSAyODkuMzk0NTMxIDEwLjg1MTU2MiBDIDI4OC44OTg0MzggMTAuODUxNTYyIDI4OC40NTcwMzEgMTAuNDkyMTg4IDI4OC4zNjcxODggOS45ODQzNzUgQyAyODguMjYxNzE5IDkuNDE0MDYyIDI4OC42NDQ1MzEgOC44NzEwOTQgMjg5LjIxNDg0NCA4Ljc2NTYyNSBDIDI5Mi41NTQ2ODggOC4xNjc5NjkgMjk1Ljk2ODc1IDcuNjAxNTYyIDI5OS4zNTE1NjIgNy4wODIwMzEgQyAyOTkuOTIxODc1IDYuOTkyMTg4IDMwMC40NjA5MzggNy4zODY3MTkgMzAwLjU1MDc4MSA3Ljk2MDkzOCBDIDMwMC42NDA2MjUgOC41MzEyNSAzMDAuMjQ2MDk0IDkuMDY2NDA2IDI5OS42NzE4NzUgOS4xNTYyNSBDIDI5Ni4zMDA3ODEgOS42NzU3ODEgMjkyLjkxMDE1NiAxMC4yMzgyODEgMjg5LjU4MjAzMSAxMC44MzU5MzggQyAyODkuNTE5NTMxIDEwLjg0Mzc1IDI4OS40NTcwMzEgMTAuODUxNTYyIDI4OS4zOTQ1MzEgMTAuODUxNTYyIFogTSAzMDcuODA4NTk0IDcuOTcyNjU2IEMgMzA3LjI4OTA2MiA3Ljk3MjY1NiAzMDYuODM1OTM4IDcuNTg5ODQ0IDMwNi43NjU2MjUgNy4wNjI1IEMgMzA2LjY4NzUgNi40ODgyODEgMzA3LjA5Mzc1IDUuOTYwOTM4IDMwNy42Njc5NjkgNS44ODI4MTIgQyAzMTEuMDMxMjUgNS40Mjk2ODggMzE0LjQ2NDg0NCA1LjAxMTcxOSAzMTcuODY3MTg4IDQuNjI4OTA2IEMgMzE4LjQ0NTMxMiA0LjU2NjQwNiAzMTguOTYwOTM4IDQuOTgwNDY5IDMxOS4wMjczNDQgNS41NTg1OTQgQyAzMTkuMDg5ODQ0IDYuMTMyODEyIDMxOC42NzU3ODEgNi42NTIzNDQgMzE4LjEwMTU2MiA2LjcxODc1IEMgMzE0LjcxNDg0NCA3LjA5Mzc1IDMxMS4yOTY4NzUgNy41MTE3MTkgMzA3Ljk0OTIxOSA3Ljk2NDg0NCBDIDMwNy45MDIzNDQgNy45Njg3NSAzMDcuODU1NDY5IDcuOTcyNjU2IDMwNy44MDg1OTQgNy45NzI2NTYgWiBNIDMyNi4zMjQyMTkgNS44NzEwOTQgQyAzMjUuNzg5MDYyIDUuODcxMDk0IDMyNS4zMzIwMzEgNS40NjA5MzggMzI1LjI4MTI1IDQuOTE3OTY5IEMgMzI1LjIzMDQ2OSA0LjM0Mzc1IDMyNS42NTIzNDQgMy44MzIwMzEgMzI2LjIzMDQ2OSAzLjc3NzM0NCBDIDMyOS42MDE1NjIgMy40NjQ4NDQgMzMzLjA0Njg3NSAzLjE3OTY4OCAzMzYuNDcyNjU2IDIuOTMzNTk0IEMgMzM3LjA2MjUgMi44OTA2MjUgMzM3LjU1NDY4OCAzLjMyODEyNSAzMzcuNTkzNzUgMy45MDYyNSBDIDMzNy42MzY3MTkgNC40ODA0NjkgMzM3LjE5OTIxOSA0Ljk4NDM3NSAzMzYuNjI1IDUuMDI3MzQ0IEMgMzMzLjIxMDkzOCA1LjI3MzQzOCAzMjkuNzc3MzQ0IDUuNTU0Njg4IDMyNi40MjU3ODEgNS44NjcxODggQyAzMjYuMzkwNjI1IDUuODcxMDk0IDMyNi4zNTU0NjkgNS44NzEwOTQgMzI2LjMyNDIxOSA1Ljg3MTA5NCBaIE0gMzQ0LjkxNDA2MiA0LjUgQyAzNDQuMzYzMjgxIDQuNSAzNDMuODk4NDM4IDQuMDY2NDA2IDM0My44NjcxODggMy41MDc4MTIgQyAzNDMuODM1OTM4IDIuOTI5Njg4IDM0NC4yODEyNSAyLjQzMzU5NCAzNDQuODU5Mzc1IDIuNDAyMzQ0IEMgMzQ4LjI0NjA5NCAyLjIxNDg0NCAzNTEuNjk5MjE5IDIuMDU4NTk0IDM1NS4xMjg5MDYgMS45NDE0MDYgQyAzNTUuNjgzNTk0IDEuOTIxODc1IDM1Ni4xOTUzMTIgMi4zNzUgMzU2LjIxMDkzOCAyLjk1MzEyNSBDIDM1Ni4yMzQzNzUgMy41MzEyNSAzNTUuNzgxMjUgNC4wMTk1MzEgMzU1LjIwMzEyNSA0LjAzOTA2MiBDIDM1MS43ODkwNjIgNC4xNTYyNSAzNDguMzQ3NjU2IDQuMzEyNSAzNDQuOTc2NTYyIDQuNDk2MDk0IEMgMzQ0Ljk1MzEyNSA0LjQ5NjA5NCAzNDQuOTMzNTk0IDQuNSAzNDQuOTE0MDYyIDQuNSBaIE0gMzYzLjU1MDc4MSA0LjE3OTY4OCBDIDM2Mi45ODA0NjkgNC4xNzk2ODggMzYyLjUxMTcxOSAzLjUzOTA2MiAzNjIuNTAzOTA2IDIuOTY0ODQ0IEMgMzYyLjQ5MjE4OCAyLjM4NjcxOSAzNjIuOTUzMTI1IDEuODE2NDA2IDM2My41MzEyNSAxLjgwNDY4OCBDIDM2Ni45MTc5NjkgMS43MzgyODEgMzcwLjM3ODkwNiAxLjY2MDE1NiAzNzMuODEyNSAxLjY1NjI1IEMgMzc0LjM5MDYyNSAxLjY1NjI1IDM3NC44NTkzNzUgMi4xMDU0NjkgMzc0Ljg1OTM3NSAyLjY4MzU5NCBDIDM3NC44NTkzNzUgMy4yNjU2MjUgMzc0LjM5MDYyNSAzLjkwNjI1IDM3My44MTI1IDMuOTA2MjUgQyAzNzAuMzkwNjI1IDMuOTA2MjUgMzY2Ljk0MTQwNiAzLjQzMzU5NCAzNjMuNTcwMzEyIDQuMTc5Njg4IEMgMzYzLjU2MjUgNC4xNzk2ODggMzYzLjU1NDY4OCA0LjE3OTY4OCAzNjMuNTUwNzgxIDQuMTc5Njg4IFogTSAzNjMuNTUwNzgxIDQuMTc5Njg4ICIvPgo8L2c+CjwvZz4KPC9zdmc+Cg=="
                    class="cb hb ue nh qx ib" style="width:calc(50% + 4rem)">
                <div class="db qc uf dn om qv sy ty q2 nk rj">
                    <div class="re hi ni">
                        <div class="bh">
                            <h3 class="vo oq">Programing - CodyBot Robot</h3>
                            <p class="ug ld bo oo xo">
                                Students will learn the concepts of programming through practical projects using CodyBot
                                robot and by the end of the course students will have mastered basic programming and
                                robotics skills.
                            </p>
                            <div class="db xd d s">
                                <img class="em sj" src="/website/img/cody.bot.image.jpg">
                            </div>
                        </div>
                        <div class="xd">
                            <a href="https://innovation-hub.app/" class="io ap ok rq xq or">
                                Learn more
                                <svg xmlns="http://www.w3.org/2000/svg" class="ag df td sr" width="44" height="44"
                                     viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                     stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <line x1="15" y1="16" x2="19" y2="12"></line>
                                    <line x1="15" y1="8" x2="19" y2="12"></line>
                                </svg>
                            </a></div>
                    </div>
                </div>
                <img
                    src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iMzc1cHQiIGhlaWdodD0iMzc0Ljk5OTk5MXB0IiB2aWV3Qm94PSIwIDAgMzc1IDM3NC45OTk5OTEiIHZlcnNpb249IjEuMiI+CjxkZWZzPgo8Y2xpcFBhdGggaWQ9ImNsaXAxIj4KICA8cGF0aCBkPSJNIDAgMi44MTI1IEwgMzc1IDIuODEyNSBMIDM3NSAzNzIuNTYyNSBMIDAgMzcyLjU2MjUgWiBNIDAgMi44MTI1ICIvPgo8L2NsaXBQYXRoPgo8L2RlZnM+CjxnIGlkPSJzdXJmYWNlMSI+CjxnIGNsaXAtcGF0aD0idXJsKCNjbGlwMSkiIGNsaXAtcnVsZT0ibm9uemVybyI+CjxwYXRoIHN0eWxlPSIgc3Ryb2tlOm5vbmU7ZmlsbC1ydWxlOm5vbnplcm87ZmlsbDojZTBkN2ZjO2ZpbGwtb3BhY2l0eTowLjk7IiBkPSJNIDMxNi41MDM5MDYgMzcyLjU2NjQwNiBDIDMxMy4xMDU0NjkgMzcyLjU2NjQwNiAzMDkuNjYwMTU2IDM3Mi40NjA5MzggMzA2LjI2NTYyNSAzNzIuMjU3ODEyIEMgMzA1LjYwNTQ2OSAzNzIuMjE4NzUgMzA1LjEwNTQ2OSAzNzEuNjUyMzQ0IDMwNS4xNDQ1MzEgMzcwLjk5NjA5NCBDIDMwNS4xODM1OTQgMzcwLjMzOTg0NCAzMDUuNzY1NjI1IDM2OS44Mzk4NDQgMzA2LjQwNjI1IDM2OS44Nzg5MDYgQyAzMTAuMjUgMzcwLjEwOTM3NSAzMTQuMTc1NzgxIDM3MC4yMTA5MzggMzE3Ljk3MjY1NiAzNzAuMTc1NzgxIEMgMzE3Ljk3NjU2MiAzNzAuMTc1NzgxIDMxNy45ODQzNzUgMzcwLjE3NTc4MSAzMTcuOTg0Mzc1IDM3MC4xNzU3ODEgQyAzMTguNjM2NzE5IDM3MC4xNzU3ODEgMzE5LjE3MTg3NSAzNzAuNzAzMTI1IDMxOS4xNzU3ODEgMzcxLjM1NTQ2OSBDIDMxOS4xODM1OTQgMzcyLjAxNTYyNSAzMTguNjUyMzQ0IDM3Mi41NTQ2ODggMzE3Ljk5NjA5NCAzNzIuNTYyNSBDIDMxNy41IDM3Mi41NjY0MDYgMzE3LjAwMzkwNiAzNzIuNTY2NDA2IDMxNi41MDM5MDYgMzcyLjU2NjQwNiBaIE0gMzI3LjUwNzgxMiAzNzIuMjAzMTI1IEMgMzI2Ljg4NjcxOSAzNzIuMjAzMTI1IDMyNi4zNTkzNzUgMzcxLjcxODc1IDMyNi4zMjAzMTIgMzcxLjA4OTg0NCBDIDMyNi4yNzczNDQgMzcwLjQzMzU5NCAzMjYuNzczNDM4IDM2OS44NjcxODggMzI3LjQyOTY4OCAzNjkuODIwMzEyIEMgMzMxLjI3NzM0NCAzNjkuNTY2NDA2IDMzNS4xNDg0MzggMzY5LjE3MTg3NSAzMzguOTQxNDA2IDM2OC42NDQ1MzEgQyAzMzkuNjAxNTYyIDM2OC41NjI1IDM0MC4xOTUzMTIgMzY5LjAxMTcxOSAzNDAuMjg1MTU2IDM2OS42NjQwNjIgQyAzNDAuMzc1IDM3MC4zMTY0MDYgMzM5LjkyMTg3NSAzNzAuOTE3OTY5IDMzOS4yNjk1MzEgMzcxLjAxMTcxOSBDIDMzNS40MjE4NzUgMzcxLjU0Mjk2OSAzMzEuNDkyMTg4IDM3MS45NDUzMTIgMzI3LjU4NTkzOCAzNzIuMjAzMTI1IEMgMzI3LjU2MjUgMzcyLjIwMzEyNSAzMjcuNTM1MTU2IDM3Mi4yMDMxMjUgMzI3LjUwNzgxMiAzNzIuMjAzMTI1IFogTSAyOTYuODQzNzUgMzcxLjQyMTg3NSBDIDI5Ni43OTY4NzUgMzcxLjQyMTg3NSAyOTYuNzUgMzcxLjQxNzk2OSAyOTYuNzAzMTI1IDM3MS40MTAxNTYgQyAyOTIuODQ3NjU2IDM3MC45NjA5MzggMjg4Ljk0NTMxMiAzNzAuMzc1IDI4NS4xMDE1NjIgMzY5LjY2MDE1NiBDIDI4NC40NTMxMjUgMzY5LjU0Mjk2OSAyODQuMDI3MzQ0IDM2OC45MTc5NjkgMjg0LjE0NDUzMSAzNjguMjczNDM4IEMgMjg0LjI2MTcxOSAzNjcuNjI1IDI4NC44ODY3MTkgMzY3LjE5OTIxOSAyODUuNTMxMjUgMzY3LjMxNjQwNiBDIDI4OS4zMjQyMTkgMzY4LjAxOTUzMSAyOTMuMTc1NzgxIDM2OC42MDE1NjIgMjk2Ljk4MDQ2OSAzNjkuMDQyOTY5IEMgMjk3LjYzMjgxMiAzNjkuMTIxMDk0IDI5OC4xMDE1NjIgMzY5LjcxMDkzOCAyOTguMDIzNDM4IDM3MC4zNjMyODEgQyAyOTcuOTUzMTI1IDM3MC45NzI2NTYgMjk3LjQ0MTQwNiAzNzEuNDIxODc1IDI5Ni44NDM3NSAzNzEuNDIxODc1IFogTSAzNDguNTAzOTA2IDM2OS40Mjk2ODggQyAzNDcuOTQ1MzEyIDM2OS40Mjk2ODggMzQ3LjQ0OTIxOSAzNjkuMDM5MDYyIDM0Ny4zMzU5MzggMzY4LjQ3MjY1NiBDIDM0Ny4yMDcwMzEgMzY3LjgyNDIxOSAzNDcuNjI1IDM2Ny4xOTUzMTIgMzQ4LjI2OTUzMSAzNjcuMDY2NDA2IEMgMzUyLjEwNTQ2OSAzNjYuMjk2ODc1IDM1NS44ODY3MTkgMzY1LjM4MjgxMiAzNTkuNTExNzE5IDM2NC4zNTE1NjIgQyAzNjAuMTQ4NDM4IDM2NC4xNzE4NzUgMzYwLjgwMDc4MSAzNjQuNTM5MDYyIDM2MC45ODQzNzUgMzY1LjE3MTg3NSBDIDM2MS4xNjQwNjIgMzY1LjgwNDY4OCAzNjAuNzk2ODc1IDM2Ni40NjQ4NDQgMzYwLjE2NDA2MiAzNjYuNjQ0NTMxIEMgMzU2LjQ4MDQ2OSAzNjcuNjk1MzEyIDM1Mi42MzY3MTkgMzY4LjYyNSAzNDguNzM4MjgxIDM2OS40MDYyNSBDIDM0OC42NjAxNTYgMzY5LjQyMTg3NSAzNDguNTc4MTI1IDM2OS40Mjk2ODggMzQ4LjUwMzkwNiAzNjkuNDI5Njg4IFogTSAyNzYgMzY3LjY5NTMxMiBDIDI3NS45MTAxNTYgMzY3LjY5NTMxMiAyNzUuODE2NDA2IDM2Ny42ODM1OTQgMjc1LjcyMjY1NiAzNjcuNjY0MDYyIEMgMjcxLjk0OTIxOSAzNjYuNzUzOTA2IDI2OC4xNDQ1MzEgMzY1LjcwMzEyNSAyNjQuNDE0MDYyIDM2NC41NDI5NjkgQyAyNjMuNzg1MTU2IDM2NC4zNDc2NTYgMjYzLjQzMzU5NCAzNjMuNjc5Njg4IDI2My42Mjg5MDYgMzYzLjA1MDc4MSBDIDI2My44MjQyMTkgMzYyLjQyMTg3NSAyNjQuNDk2MDk0IDM2Mi4wNzAzMTIgMjY1LjExNzE4OCAzNjIuMjY1NjI1IEMgMjY4LjgwNDY4OCAzNjMuNDEwMTU2IDI3Mi41NTg1OTQgMzY0LjQ0NTMxMiAyNzYuMjgxMjUgMzY1LjM0Mzc1IEMgMjc2LjkyMTg3NSAzNjUuNSAyNzcuMzEyNSAzNjYuMTQwNjI1IDI3Ny4xNjAxNTYgMzY2Ljc4NTE1NiBDIDI3Ny4wMjczNDQgMzY3LjMyODEyNSAyNzYuNTM5MDYyIDM2Ny42OTUzMTIgMjc2IDM2Ny42OTUzMTIgWiBNIDM2OC44OTg0MzggMzYzLjczMDQ2OSBDIDM2OC40MTc5NjkgMzYzLjczMDQ2OSAzNjcuOTY0ODQ0IDM2My40Mzc1IDM2Ny43ODUxNTYgMzYyLjk1NzAzMSBDIDM2Ny41NTQ2ODggMzYyLjMzNTkzOCAzNjcuODY3MTg4IDM2MS42NTIzNDQgMzY4LjQ4NDM3NSAzNjEuNDIxODc1IEMgMzcxLjUzMTI1IDM2MC4yODEyNSAzNzMuMTI4OTA2IDM1OS41MTU2MjUgMzczLjE0NDUzMSAzNTkuNTA3ODEyIEwgMzczLjY3MTg3NSAzNjAuNTc4MTI1IEwgMzc0LjgzNTkzOCAzNjAuODMyMDMxIEMgMzc0LjcwMzEyNSAzNjEuNDM3NSAzNzQuNjUyMzQ0IDM2MS42NjAxNTYgMzY5LjMxNjQwNiAzNjMuNjU2MjUgQyAzNjkuMTc5Njg4IDM2My43MDcwMzEgMzY5LjAzOTA2MiAzNjMuNzMwNDY5IDM2OC44OTg0MzggMzYzLjczMDQ2OSBaIE0gMjU1LjczODI4MSAzNjEuNTM5MDYyIEMgMjU1LjYwMTU2MiAzNjEuNTM5MDYyIDI1NS40NjQ4NDQgMzYxLjUxNTYyNSAyNTUuMzI4MTI1IDM2MS40NjQ4NDQgQyAyNTEuNjk1MzEyIDM2MC4xMjg5MDYgMjQ4LjAzNTE1NiAzNTguNjYwMTU2IDI0NC40NDkyMTkgMzU3LjA5Mzc1IEMgMjQzLjg0NzY1NiAzNTYuODI4MTI1IDI0My41NzAzMTIgMzU2LjEyNSAyNDMuODM1OTM4IDM1NS41MjM0MzggQyAyNDQuMDk3NjU2IDM1NC45MTc5NjkgMjQ0LjgwMDc4MSAzNTQuNjQ0NTMxIDI0NS40MDIzNDQgMzU0LjkwNjI1IEMgMjQ4Ljk0NTMxMiAzNTYuNDUzMTI1IDI1Mi41NjI1IDM1Ny45MDYyNSAyNTYuMTUyMzQ0IDM1OS4yMjY1NjIgQyAyNTYuNzY5NTMxIDM1OS40NTMxMjUgMjU3LjA4NTkzOCAzNjAuMTM2NzE5IDI1Ni44NTkzNzUgMzYwLjc1NzgxMiBDIDI1Ni42ODM1OTQgMzYxLjIzODI4MSAyNTYuMjI2NTYyIDM2MS41MzkwNjIgMjU1LjczODI4MSAzNjEuNTM5MDYyIFogTSAyMzYuMjg5MDYyIDM1My4xNjc5NjkgQyAyMzYuMTEzMjgxIDM1My4xNjc5NjkgMjM1LjkyOTY4OCAzNTMuMTI4OTA2IDIzNS43NjE3MTkgMzUzLjA0Njg3NSBDIDIzMi4zMDA3ODEgMzUxLjMzMjAzMSAyMjguODE2NDA2IDM0OS40ODQzNzUgMjI1LjQwNjI1IDM0Ny41NTg1OTQgQyAyMjQuODMyMDMxIDM0Ny4yMzQzNzUgMjI0LjYyODkwNiAzNDYuNTA3ODEyIDIyNC45NTMxMjUgMzQ1LjkzMzU5NCBDIDIyNS4yNzczNDQgMzQ1LjM1OTM3NSAyMjYuMDAzOTA2IDM0NS4xNTYyNSAyMjYuNTc4MTI1IDM0NS40ODA0NjkgQyAyMjkuOTUzMTI1IDM0Ny4zODY3MTkgMjMzLjM5ODQzOCAzNDkuMjE0ODQ0IDIzNi44MjAzMTIgMzUwLjkwNjI1IEMgMjM3LjQwNjI1IDM1MS4xOTkyMTkgMjM3LjY0ODQzOCAzNTEuOTE0MDYyIDIzNy4zNTkzNzUgMzUyLjUwMzkwNiBDIDIzNy4xNDg0MzggMzUyLjkyNTc4MSAyMzYuNzI2NTYyIDM1My4xNjc5NjkgMjM2LjI4OTA2MiAzNTMuMTY3OTY5IFogTSAyMTcuNzk2ODc1IDM0Mi44NDM3NSBDIDIxNy41ODIwMzEgMzQyLjg0Mzc1IDIxNy4zNjcxODggMzQyLjc4NTE1NiAyMTcuMTY3OTY5IDM0Mi42NjQwNjIgQyAyMTMuODk4NDM4IDM0MC42MjUgMjEwLjYwOTM3NSAzMzguNDU3MDMxIDIwNy4zODY3MTkgMzM2LjIxODc1IEMgMjA2Ljg0NzY1NiAzMzUuODQzNzUgMjA2LjcxMDkzOCAzMzUuMDk3NjU2IDIwNy4wODU5MzggMzM0LjU1ODU5NCBDIDIwNy40NjA5MzggMzM0LjAxNTYyNSAyMDguMjA3MDMxIDMzMy44ODI4MTIgMjA4Ljc0NjA5NCAzMzQuMjU3ODEyIEMgMjExLjkzMzU5NCAzMzYuNDc2NTYyIDIxNS4xOTUzMTIgMzM4LjYyMTA5NCAyMTguNDI5Njg4IDM0MC42MzY3MTkgQyAyMTguOTg4MjgxIDM0MC45ODgyODEgMjE5LjE2MDE1NiAzNDEuNzIyNjU2IDIxOC44MTI1IDM0Mi4yODEyNSBDIDIxOC41ODU5MzggMzQyLjY0NDUzMSAyMTguMTk1MzEyIDM0Mi44NDM3NSAyMTcuNzk2ODc1IDM0Mi44NDM3NSBaIE0gMjAwLjM0NzY1NiAzMzAuODM5ODQ0IEMgMjAwLjA5NzY1NiAzMzAuODM5ODQ0IDE5OS44NDc2NTYgMzMwLjc2MTcxOSAxOTkuNjI4OTA2IDMzMC42MDE1NjIgQyAxOTYuNTU4NTk0IDMyOC4yODUxNTYgMTkzLjQ2ODc1IDMyNS44NDM3NSAxOTAuNDQxNDA2IDMyMy4zMzk4NDQgQyAxODkuOTMzNTk0IDMyMi45MjE4NzUgMTg5Ljg1OTM3NSAzMjIuMTcxODc1IDE5MC4yODEyNSAzMjEuNjYwMTU2IEMgMTkwLjY5OTIxOSAzMjEuMTU2MjUgMTkxLjQ0OTIxOSAzMjEuMDgyMDMxIDE5MS45NTcwMzEgMzIxLjUwMzkwNiBDIDE5NC45NTcwMzEgMzIzLjk4MDQ2OSAxOTguMDE5NTMxIDMyNi40MDIzNDQgMjAxLjA2MjUgMzI4LjY5MTQwNiBDIDIwMS41ODk4NDQgMzI5LjA4OTg0NCAyMDEuNjk1MzEyIDMyOS44Mzk4NDQgMjAxLjMwMDc4MSAzMzAuMzYzMjgxIEMgMjAxLjA2MjUgMzMwLjY3NTc4MSAyMDAuNzA3MDMxIDMzMC44Mzk4NDQgMjAwLjM0NzY1NiAzMzAuODM5ODQ0IFogTSAxODMuOTU3MDMxIDMxNy40MTc5NjkgQyAxODMuNjc1NzgxIDMxNy40MTc5NjkgMTgzLjM5NDUzMSAzMTcuMzE2NDA2IDE4My4xNjc5NjkgMzE3LjExNzE4OCBDIDE4MC4yOTI5NjkgMzE0LjU2NjQwNiAxNzcuMzk4NDM4IDMxMS44OTg0MzggMTc0LjU2MjUgMzA5LjE3OTY4OCBDIDE3NC4wODU5MzggMzA4LjcyMjY1NiAxNzQuMDcwMzEyIDMwNy45Njg3NSAxNzQuNTI3MzQ0IDMwNy40OTYwOTQgQyAxNzQuOTg0Mzc1IDMwNy4wMTk1MzEgMTc1LjczODI4MSAzMDcuMDAzOTA2IDE3Ni4yMTA5MzggMzA3LjQ1NzAzMSBDIDE3OS4wMjM0MzggMzEwLjE1MjM0NCAxODEuODk0NTMxIDMxMi44MDQ2ODggMTg0Ljc0NjA5NCAzMTUuMzMyMDMxIEMgMTg1LjIzODI4MSAzMTUuNzY1NjI1IDE4NS4yODUxNTYgMzE2LjUyMzQzOCAxODQuODUxNTYyIDMxNy4wMTU2MjUgQyAxODQuNjEzMjgxIDMxNy4yODEyNSAxODQuMjg5MDYyIDMxNy40MTc5NjkgMTgzLjk1NzAzMSAzMTcuNDE3OTY5IFogTSAxNjguNjEzMjgxIDMwMi44MDg1OTQgQyAxNjguMzA0Njg4IDMwMi44MDg1OTQgMTY3Ljk5NjA5NCAzMDIuNjkxNDA2IDE2Ny43NjE3MTkgMzAyLjQ1MzEyNSBDIDE2Ny4xMTcxODggMzAxLjc5Njg3NSAxNjYuNDcyNjU2IDMwMS4xMzY3MTkgMTY1LjgyODEyNSAzMDAuNDY0ODQ0IEMgMTYzLjc1IDI5OC4zMDg1OTQgMTYxLjcxODc1IDI5Ni4wODIwMzEgMTU5Ljc4NTE1NiAyOTMuODQ3NjU2IEMgMTU5LjM1NTQ2OSAyOTMuMzQ3NjU2IDE1OS40MTAxNTYgMjkyLjU5Mzc1IDE1OS45MDYyNSAyOTIuMTY0MDYyIEMgMTYwLjQwMjM0NCAyOTEuNzM0Mzc1IDE2MS4xNTYyNSAyOTEuNzg5MDYyIDE2MS41ODU5MzggMjkyLjI4NTE1NiBDIDE2My40OTIxODggMjk0LjQ5MjE4OCAxNjUuNDk2MDk0IDI5Ni42ODM1OTQgMTY3LjU0Mjk2OSAyOTguODA4NTk0IEMgMTY4LjE4MzU5NCAyOTkuNDcyNjU2IDE2OC44MjQyMTkgMzAwLjEyODkwNiAxNjkuNDYwOTM4IDMwMC43ODEyNSBDIDE2OS45MjE4NzUgMzAxLjI1IDE2OS45MTc5NjkgMzAyLjAwMzkwNiAxNjkuNDQ5MjE5IDMwMi40Njg3NSBDIDE2OS4yMTQ4NDQgMzAyLjY5NTMxMiAxNjguOTE0MDYyIDMwMi44MDg1OTQgMTY4LjYxMzI4MSAzMDIuODA4NTk0IFogTSAxNTQuNjcxODc1IDI4Ni44NTkzNzUgQyAxNTQuMzE2NDA2IDI4Ni44NTkzNzUgMTUzLjk2MDkzOCAyODYuNjk5MjE5IDE1My43MjY1NjIgMjg2LjM5MDYyNSBDIDE1MS4zNDM3NSAyODMuMjczNDM4IDE0OS4wNjY0MDYgMjgwLjA0Mjk2OSAxNDYuOTUzMTI1IDI3Ni43ODkwNjIgQyAxNDYuNTkzNzUgMjc2LjIzNDM3NSAxNDYuNzUgMjc1LjUgMTQ3LjMwNDY4OCAyNzUuMTQwNjI1IEMgMTQ3Ljg1MTU2MiAyNzQuNzgxMjUgMTQ4LjU5Mzc1IDI3NC45Mzc1IDE0OC45NTMxMjUgMjc1LjQ4ODI4MSBDIDE1MS4wMzEyNSAyNzguNjk1MzEyIDE1My4yNzM0MzggMjgxLjg3NSAxNTUuNjE3MTg4IDI4NC45NDUzMTIgQyAxNTYuMDE5NTMxIDI4NS40Njg3NSAxNTUuOTE3OTY5IDI4Ni4yMTQ4NDQgMTU1LjM5NDUzMSAyODYuNjE3MTg4IEMgMTU1LjE3OTY4OCAyODYuNzgxMjUgMTU0LjkyNTc4MSAyODYuODU5Mzc1IDE1NC42NzE4NzUgMjg2Ljg1OTM3NSBaIE0gMTQzLjAxOTUzMSAyNjkuMTcxODc1IEMgMTQyLjYwMTU2MiAyNjkuMTcxODc1IDE0Mi4xOTUzMTIgMjY4Ljk1MzEyNSAxNDEuOTgwNDY5IDI2OC41NjY0MDYgQyAxNDAuMDYyNSAyNjUuMTUyMzQ0IDEzOC4yNjE3MTkgMjYxLjYyODkwNiAxMzYuNjI4OTA2IDI1OC4wOTc2NTYgQyAxMzYuMzUxNTYyIDI1Ny41IDEzNi42MTMyODEgMjU2Ljc4OTA2MiAxMzcuMjEwOTM4IDI1Ni41MTU2MjUgQyAxMzcuODA0Njg4IDI1Ni4yMzgyODEgMTM4LjUxNTYyNSAyNTYuNSAxMzguNzg5MDYyIDI1Ny4wOTc2NTYgQyAxNDAuMzk4NDM4IDI2MC41NzQyMTkgMTQyLjE2Nzk2OSAyNjQuMDM5MDYyIDE0NC4wNTQ2ODggMjY3LjM5NDUzMSBDIDE0NC4zNzg5MDYgMjY3Ljk2ODc1IDE0NC4xNzU3ODEgMjY4LjY5OTIxOSAxNDMuNjAxNTYyIDI2OS4wMTk1MzEgQyAxNDMuNDE3OTY5IDI2OS4xMjUgMTQzLjIxODc1IDI2OS4xNzE4NzUgMTQzLjAxOTUzMSAyNjkuMTcxODc1IFogTSAxMzMuOTk2MDk0IDI1MC4wMDc4MTIgQyAxMzMuNTE1NjI1IDI1MC4wMDc4MTIgMTMzLjA2NjQwNiAyNDkuNzE4NzUgMTMyLjg4MjgxMiAyNDkuMjQ2MDk0IEMgMTMxLjQ4MDQ2OSAyNDUuNjA1NDY5IDEzMC4yMDcwMzEgMjQxLjg2MzI4MSAxMjkuMDk3NjU2IDIzOC4xMjEwOTQgQyAxMjguOTE0MDYyIDIzNy40ODgyODEgMTI5LjI3MzQzOCAyMzYuODI0MjE5IDEyOS45MDIzNDQgMjM2LjYzNjcxOSBDIDEzMC41MzUxNTYgMjM2LjQ0OTIxOSAxMzEuMTk5MjE5IDIzNi44MTI1IDEzMS4zODI4MTIgMjM3LjQ0MTQwNiBDIDEzMi40NzI2NTYgMjQxLjEyNSAxMzMuNzI2NTYyIDI0NC44MDg1OTQgMTM1LjEwNTQ2OSAyNDguMzg2NzE5IEMgMTM1LjM0Mzc1IDI0OS4wMDM5MDYgMTM1LjAzOTA2MiAyNDkuNjkxNDA2IDEzNC40MjE4NzUgMjQ5LjkyOTY4OCBDIDEzNC4yODEyNSAyNDkuOTgwNDY5IDEzNC4xMzY3MTkgMjUwLjAwNzgxMiAxMzMuOTk2MDk0IDI1MC4wMDc4MTIgWiBNIDIwMy42ODc1IDIzOC4yODUxNTYgQyAyMDAuMTkxNDA2IDIzOC4yODUxNTYgMTk2LjYwMTU2MiAyMzguMTY0MDYyIDE5My4wMjM0MzggMjM3LjkyNTc4MSBDIDE5Mi4zNjcxODggMjM3Ljg4MjgxMiAxOTEuODcxMDk0IDIzNy4zMTY0MDYgMTkxLjkxNDA2MiAyMzYuNjYwMTU2IEMgMTkxLjk1NzAzMSAyMzYgMTkyLjU1NDY4OCAyMzUuNTExNzE5IDE5My4xNzk2ODggMjM1LjU0Njg3NSBDIDE5Ni43MDcwMzEgMjM1Ljc4MTI1IDIwMC4yMzgyODEgMjM1Ljg5ODQzOCAyMDMuNjg3NSAyMzUuODk4NDM4IEwgMjA0Ljc0NjA5NCAyMzUuODk0NTMxIEMgMjA0Ljc0NjA5NCAyMzUuODk0NTMxIDIwNC43NSAyMzUuODk0NTMxIDIwNC43NTM5MDYgMjM1Ljg5NDUzMSBDIDIwNS40MDYyNSAyMzUuODk0NTMxIDIwNS45NDE0MDYgMjM2LjQyMTg3NSAyMDUuOTQ1MzEyIDIzNy4wODIwMzEgQyAyMDUuOTQ5MjE5IDIzNy43MzgyODEgMjA1LjQxNzk2OSAyMzguMjczNDM4IDIwNC43NTc4MTIgMjM4LjI4MTI1IFogTSAyMTQuMjY1NjI1IDIzNy45MTQwNjIgQyAyMTMuNjQ0NTMxIDIzNy45MTQwNjIgMjEzLjEyMTA5NCAyMzcuNDMzNTk0IDIxMy4wNzgxMjUgMjM2LjgwODU5NCBDIDIxMy4wMzEyNSAyMzYuMTQ4NDM4IDIxMy41MjM0MzggMjM1LjU3ODEyNSAyMTQuMTc5Njg4IDIzNS41MzUxNTYgQyAyMTguMDUwNzgxIDIzNS4yNjE3MTkgMjIxLjkxMDE1NiAyMzQuODI4MTI1IDIyNS42NTYyNSAyMzQuMjUgQyAyMjYuMzA0Njg4IDIzNC4xNDg0MzggMjI2LjkxNDA2MiAyMzQuNTkzNzUgMjI3LjAxNTYyNSAyMzUuMjQ2MDk0IEMgMjI3LjExNzE4OCAyMzUuODk4NDM4IDIyNi42Njc5NjkgMjM2LjUwNzgxMiAyMjYuMDE5NTMxIDIzNi42MDU0NjkgQyAyMjIuMjA3MDMxIDIzNy4xOTUzMTIgMjE4LjI4MTI1IDIzNy42MzY3MTkgMjE0LjM0NzY1NiAyMzcuOTE0MDYyIEMgMjE0LjMyMDMxMiAyMzcuOTE0MDYyIDIxNC4yOTI5NjkgMjM3LjkxNDA2MiAyMTQuMjY1NjI1IDIzNy45MTQwNjIgWiBNIDE4My42MTcxODggMjM3LjAzNTE1NiBDIDE4My41NzAzMTIgMjM3LjAzNTE1NiAxODMuNTIzNDM4IDIzNy4wMzEyNSAxODMuNDcyNjU2IDIzNy4wMjczNDQgQyAxNzkuNjY3OTY5IDIzNi41NjI1IDE3NS43NjU2MjUgMjM1Ljk2MDkzOCAxNzEuODgyODEyIDIzNS4yMzQzNzUgQyAxNzEuMjM0Mzc1IDIzNS4xMTMyODEgMTcwLjgwODU5NCAyMzQuNDkyMTg4IDE3MC45Mjk2ODggMjMzLjg0Mzc1IEMgMTcxLjA1MDc4MSAyMzMuMTk1MzEyIDE3MS42NzU3ODEgMjMyLjc3NzM0NCAxNzIuMzIwMzEyIDIzMi44OTA2MjUgQyAxNzYuMTU2MjUgMjMzLjYwNTQ2OSAxODAuMDA3ODEyIDIzNC4xOTkyMTkgMTgzLjc2MTcxOSAyMzQuNjU2MjUgQyAxODQuNDE0MDYyIDIzNC43MzgyODEgMTg0Ljg3ODkwNiAyMzUuMzMyMDMxIDE4NC44MDA3ODEgMjM1Ljk4NDM3NSBDIDE4NC43MjY1NjIgMjM2LjU5Mzc1IDE4NC4yMTQ4NDQgMjM3LjAzNTE1NiAxODMuNjE3MTg4IDIzNy4wMzUxNTYgWiBNIDIzNS4xOTE0MDYgMjM0LjgzNTkzOCBDIDIzNC42NDg0MzggMjM0LjgzNTkzOCAyMzQuMTU2MjUgMjM0LjQ2NDg0NCAyMzQuMDMxMjUgMjMzLjkxMDE1NiBDIDIzMy44ODY3MTkgMjMzLjI2NTYyNSAyMzQuMjg1MTU2IDIzMi42Mjg5MDYgMjM0LjkyOTY4OCAyMzIuNDgwNDY5IEMgMjM4LjY5MTQwNiAyMzEuNjI1IDI0Mi40MzM1OTQgMjMwLjU5Mzc1IDI0Ni4wNTA3ODEgMjI5LjQxNDA2MiBDIDI0Ni42Nzk2ODggMjI5LjIwNzAzMSAyNDcuMzQ3NjU2IDIyOS41NTQ2ODggMjQ3LjU1MDc4MSAyMzAuMTc1NzgxIEMgMjQ3Ljc1NzgxMiAyMzAuODAwNzgxIDI0Ny40MTQwNjIgMjMxLjQ3NjU2MiAyNDYuNzg5MDYyIDIzMS42Nzk2ODggQyAyNDMuMTAxNTYyIDIzMi44ODI4MTIgMjM5LjI4OTA2MiAyMzMuOTMzNTk0IDIzNS40NTcwMzEgMjM0LjgwODU5NCBDIDIzNS4zNjcxODggMjM0LjgyODEyNSAyMzUuMjc3MzQ0IDIzNC44MzU5MzggMjM1LjE5MTQwNiAyMzQuODM1OTM4IFogTSAxNjIuNzgxMjUgMjMzLjI4NTE1NiBDIDE2Mi42ODc1IDIzMy4yODUxNTYgMTYyLjU5NzY1NiAyMzMuMjczNDM4IDE2Mi41MDM5MDYgMjMzLjI1MzkwNiBDIDE1OC43Njk1MzEgMjMyLjM3MTA5NCAxNTQuOTYwOTM4IDIzMS4zNjMyODEgMTUxLjE3NTc4MSAyMzAuMjUgQyAxNTAuNTQ2ODc1IDIzMC4wNjY0MDYgMTUwLjE4MzU5NCAyMjkuNDAyMzQ0IDE1MC4zNzEwOTQgMjI4Ljc3MzQzOCBDIDE1MC41NTQ2ODggMjI4LjE0MDYyNSAxNTEuMjE0ODQ0IDIyNy43NzczNDQgMTUxLjg0NzY1NiAyMjcuOTY0ODQ0IEMgMTU1LjU4OTg0NCAyMjkuMDYyNSAxNTkuMzU5Mzc1IDIzMC4wNjI1IDE2My4wNTA3ODEgMjMwLjkzMzU5NCBDIDE2My42OTE0MDYgMjMxLjA4MjAzMSAxNjQuMDg5ODQ0IDIzMS43MjY1NjIgMTYzLjkzNzUgMjMyLjM2NzE4OCBDIDE2My44MDg1OTQgMjMyLjkxNDA2MiAxNjMuMzIwMzEyIDIzMy4yODUxNTYgMTYyLjc4MTI1IDIzMy4yODUxNTYgWiBNIDEyNy44MzIwMzEgMjI5Ljc1IEMgMTI3LjI4OTA2MiAyMjkuNzUgMTI2Ljc5Njg3NSAyMjkuMzc4OTA2IDEyNi42NzE4NzUgMjI4LjgyNDIxOSBDIDEyNS44MDg1OTQgMjI1LjAyMzQzOCAxMjUuMDg1OTM4IDIyMS4xMzI4MTIgMTI0LjUyMzQzOCAyMTcuMjY1NjI1IEMgMTI0LjQyNTc4MSAyMTYuNjE3MTg4IDEyNC44Nzg5MDYgMjE2LjAxMTcxOSAxMjUuNTMxMjUgMjE1LjkxNDA2MiBDIDEyNi4xODM1OTQgMjE1LjgxMjUgMTI2Ljc4NTE1NiAyMTYuMjczNDM4IDEyNi44Nzg5MDYgMjE2LjkyNTc4MSBDIDEyNy40MzM1OTQgMjIwLjczMDQ2OSAxMjguMTQ4NDM4IDIyNC41NTQ2ODggMTI4Ljk5NjA5NCAyMjguMjk2ODc1IEMgMTI5LjE0MDYyNSAyMjguOTM3NSAxMjguNzM4MjgxIDIyOS41NzgxMjUgMTI4LjA5NzY1NiAyMjkuNzIyNjU2IEMgMTI4LjAwNzgxMiAyMjkuNzQyMTg4IDEyNy45MTc5NjkgMjI5Ljc1IDEyNy44MzIwMzEgMjI5Ljc1IFogTSAyNTUuMzUxNTYyIDIyOC40NDE0MDYgQyAyNTQuODg2NzE5IDIyOC40NDE0MDYgMjU0LjQ0MTQwNiAyMjguMTY0MDYyIDI1NC4yNTM5MDYgMjI3LjcwMzEyNSBDIDI1NCAyMjcuMDk3NjU2IDI1NC4yOTI5NjkgMjI2LjM5ODQzOCAyNTQuODk4NDM4IDIyNi4xNDg0MzggQyAyNTguNDUzMTI1IDIyNC42Nzk2ODggMjYxLjk2NDg0NCAyMjMuMDI3MzQ0IDI2NS4zMzU5MzggMjIxLjIzODI4MSBDIDI2NS45MTc5NjkgMjIwLjkyOTY4OCAyNjYuNjQwNjI1IDIyMS4xNDg0MzggMjY2Ljk0NTMxMiAyMjEuNzMwNDY5IEMgMjY3LjI1MzkwNiAyMjIuMzEyNSAyNjcuMDM1MTU2IDIyMy4wMzUxNTYgMjY2LjQ1MzEyNSAyMjMuMzM5ODQ0IEMgMjYzLjAxMTcxOSAyMjUuMTY3OTY5IDI1OS40Mjk2ODggMjI2Ljg1NTQ2OSAyNTUuODEyNSAyMjguMzUxNTYyIEMgMjU1LjY2MDE1NiAyMjguNDE0MDYyIDI1NS41MDM5MDYgMjI4LjQ0MTQwNiAyNTUuMzUxNTYyIDIyOC40NDE0MDYgWiBNIDE0Mi40MjU3ODEgMjI3LjQyNTc4MSBDIDE0Mi4zMDA3ODEgMjI3LjQyNTc4MSAxNDIuMTcxODc1IDIyNy40MDYyNSAxNDIuMDQyOTY5IDIyNy4zNjMyODEgQyAxMzguNDA2MjUgMjI2LjEzMjgxMiAxMzQuNzAzMTI1IDIyNC43ODEyNSAxMzEuMDQyOTY5IDIyMy4zNTE1NjIgQyAxMzAuNDI5Njg4IDIyMy4xMTMyODEgMTMwLjEyNSAyMjIuNDE3OTY5IDEzMC4zNjMyODEgMjIxLjgwODU5NCBDIDEzMC42MDE1NjIgMjIxLjE5NTMxMiAxMzEuMjkyOTY5IDIyMC44OTA2MjUgMTMxLjkwNjI1IDIyMS4xMjg5MDYgQyAxMzUuNTM1MTU2IDIyMi41NDY4NzUgMTM5LjIwMzEyNSAyMjMuODgyODEyIDE0Mi44MDg1OTQgMjI1LjEwNTQ2OSBDIDE0My40Mjk2ODggMjI1LjMxNjQwNiAxNDMuNzY1NjI1IDIyNS45OTIxODggMTQzLjU1NDY4OCAyMjYuNjE3MTg4IEMgMTQzLjM4NjcxOSAyMjcuMTEzMjgxIDE0Mi45MjE4NzUgMjI3LjQyNTc4MSAxNDIuNDI1NzgxIDIyNy40MjU3ODEgWiBNIDEyMi42NTYyNSAyMTkuODEyNSBDIDEyMi41IDIxOS44MTI1IDEyMi4zMzk4NDQgMjE5Ljc4MTI1IDEyMi4xODc1IDIxOS43MTQ4NDQgQyAxMTguNjY3OTY5IDIxOC4xOTkyMTkgMTE1LjA4NTkzOCAyMTYuNTY2NDA2IDExMS41MzUxNTYgMjE0Ljg2NzE4OCBDIDExMC45NDE0MDYgMjE0LjU4MjAzMSAxMTAuNjg3NSAyMTMuODcxMDk0IDExMC45NzI2NTYgMjEzLjI3NzM0NCBDIDExMS4yNTc4MTIgMjEyLjY4MzU5NCAxMTEuOTY4NzUgMjEyLjQzMzU5NCAxMTIuNTYyNSAyMTIuNzE4NzUgQyAxMTYuMDg1OTM4IDIxNC40MDIzNDQgMTE5LjY0MDYyNSAyMTYuMDE5NTMxIDEyMy4xMjg5MDYgMjE3LjUyNzM0NCBDIDEyMy43MzQzNzUgMjE3Ljc4NTE1NiAxMjQuMDE1NjI1IDIxOC40ODgyODEgMTIzLjc1MzkwNiAyMTkuMDkzNzUgQyAxMjMuNTU4NTk0IDIxOS41NDI5NjkgMTIzLjEyMTA5NCAyMTkuODEyNSAxMjIuNjU2MjUgMjE5LjgxMjUgWiBNIDI3NC4xMjEwOTQgMjE4LjY4MzU5NCBDIDI3My43MjY1NjIgMjE4LjY4MzU5NCAyNzMuMzQzNzUgMjE4LjQ4ODI4MSAyNzMuMTE3MTg4IDIxOC4xMzI4MTIgQyAyNzIuNzYxNzE5IDIxNy41NzgxMjUgMjcyLjkyNTc4MSAyMTYuODM5ODQ0IDI3My40ODA0NjkgMjE2LjQ4NDM3NSBDIDI3Ni43MTQ4NDQgMjE0LjQyMTg3NSAyNzkuODgyODEyIDIxMi4xNzU3ODEgMjgyLjg5MDYyNSAyMDkuODA4NTk0IEMgMjgzLjQwNjI1IDIwOS40MDIzNDQgMjg0LjE1NjI1IDIwOS40OTIxODggMjg0LjU2MjUgMjEwLjAxMTcxOSBDIDI4NC45Njg3NSAyMTAuNTI3MzQ0IDI4NC44Nzg5MDYgMjExLjI3NzM0NCAyODQuMzU5Mzc1IDIxMS42ODM1OTQgQyAyODEuMjkyOTY5IDIxNC4wOTc2NTYgMjc4LjA2MjUgMjE2LjM5MDYyNSAyNzQuNzYxNzE5IDIxOC40OTYwOTQgQyAyNzQuNTYyNSAyMTguNjIxMDk0IDI3NC4zMzk4NDQgMjE4LjY4MzU5NCAyNzQuMTIxMDk0IDIxOC42ODM1OTQgWiBNIDEwMy41MTE3MTkgMjEwLjc0MjE4OCBDIDEwMy4zMjgxMjUgMjEwLjc0MjE4OCAxMDMuMTQ0NTMxIDIxMC42OTkyMTkgMTAyLjk2ODc1IDIxMC42MDkzNzUgQyA5OS41NjY0MDYgMjA4Ljg1MTU2MiA5Ni4wOTc2NTYgMjA2Ljk4ODI4MSA5Mi42NjQwNjIgMjA1LjA2NjQwNiBDIDkyLjA4OTg0NCAyMDQuNzQ2MDk0IDkxLjg4NjcxOSAyMDQuMDE5NTMxIDkyLjIwNzAzMSAyMDMuNDQ1MzEyIEMgOTIuNTI3MzQ0IDIwMi44NzEwOTQgOTMuMjUgMjAyLjY2NDA2MiA5My44MjQyMTkgMjAyLjk4NDM3NSBDIDk3LjIzODI4MSAyMDQuODk0NTMxIDEwMC42Nzk2ODggMjA2Ljc0NjA5NCAxMDQuMDU4NTk0IDIwOC40ODgyODEgQyAxMDQuNjQ0NTMxIDIwOC43ODkwNjIgMTA0Ljg3NSAyMDkuNTA3ODEyIDEwNC41NzQyMTkgMjEwLjA5Mzc1IEMgMTA0LjM1OTM3NSAyMTAuNTAzOTA2IDEwMy45NDUzMTIgMjEwLjc0MjE4OCAxMDMuNTExNzE5IDIxMC43NDIxODggWiBNIDEyNC42MjUgMjA4LjgxNjQwNiBDIDEyNC4wMTE3MTkgMjA4LjgxNjQwNiAxMjMuNDg4MjgxIDIwOC4zNDM3NSAxMjMuNDM3NSAyMDcuNzE4NzUgQyAxMjMuMTIxMDk0IDIwMy44NDM3NSAxMjIuOTQ5MjE5IDE5OS44OTQ1MzEgMTIyLjkyOTY4OCAxOTUuOTc2NTYyIEMgMTIyLjkyNTc4MSAxOTUuMzIwMzEyIDEyMy40NTMxMjUgMTk0Ljc4MTI1IDEyNC4xMTMyODEgMTk0Ljc3NzM0NCBDIDEyNC4xMTMyODEgMTk0Ljc3NzM0NCAxMjQuMTE3MTg4IDE5NC43NzczNDQgMTI0LjEyMTA5NCAxOTQuNzc3MzQ0IEMgMTI0Ljc3MzQzOCAxOTQuNzc3MzQ0IDEyNS4zMDg1OTQgMTk1LjMwODU5NCAxMjUuMzA4NTk0IDE5NS45NjQ4NDQgQyAxMjUuMzMyMDMxIDE5OS44MjAzMTIgMTI1LjUgMjAzLjcxMDkzOCAxMjUuODEyNSAyMDcuNTI3MzQ0IEMgMTI1Ljg2NzE4OCAyMDguMTgzNTk0IDEyNS4zNzg5MDYgMjA4Ljc1NzgxMiAxMjQuNzIyNjU2IDIwOC44MTI1IEMgMTI0LjY5MTQwNiAyMDguODEyNSAxMjQuNjU2MjUgMjA4LjgxNjQwNiAxMjQuNjI1IDIwOC44MTY0MDYgWiBNIDI5MC44NzEwOTQgMjA1Ljc1MzkwNiBDIDI5MC41NTA3ODEgMjA1Ljc1MzkwNiAyOTAuMjMwNDY5IDIwNS42MjEwOTQgMjg5Ljk5NjA5NCAyMDUuMzY3MTg4IEMgMjg5LjU1MDc4MSAyMDQuODgyODEyIDI4OS41ODIwMzEgMjA0LjEyODkwNiAyOTAuMDYyNSAyMDMuNjgzNTk0IEMgMjkyLjg3NSAyMDEuMDgyMDMxIDI5NS41OTM3NSAxOTguMzA0Njg4IDI5OC4xMzY3MTkgMTk1LjQzNzUgQyAyOTguNTc0MjE5IDE5NC45NDUzMTIgMjk5LjMyNDIxOSAxOTQuOTAyMzQ0IDI5OS44MjAzMTIgMTk1LjMzNTkzOCBDIDMwMC4zMDg1OTQgMTk1Ljc3MzQzOCAzMDAuMzU1NDY5IDE5Ni41MjczNDQgMjk5LjkxNzk2OSAxOTcuMDIzNDM4IEMgMjk3LjMyMDMxMiAxOTkuOTQ5MjE5IDI5NC41NTA3ODEgMjAyLjc4MTI1IDI5MS42Nzk2ODggMjA1LjQzMzU5NCBDIDI5MS40NTMxMjUgMjA1LjY0NDUzMSAyOTEuMTY0MDYyIDIwNS43NTM5MDYgMjkwLjg3MTA5NCAyMDUuNzUzOTA2IFogTSA4NS4wMDM5MDYgMjAwLjQyOTY4OCBDIDg0Ljc5Mjk2OSAyMDAuNDI5Njg4IDg0LjU3ODEyNSAyMDAuMzc1IDg0LjM4MjgxMiAyMDAuMjUzOTA2IEMgODEuMDQyOTY5IDE5OC4yMDcwMzEgNzcuNzUzOTA2IDE5Ni4wMzUxNTYgNzQuNTkzNzUgMTkzLjc5Mjk2OSBDIDc0LjA1ODU5NCAxOTMuNDEwMTU2IDczLjkzMzU5NCAxOTIuNjY0MDYyIDc0LjMxMjUgMTkyLjEyODkwNiBDIDc0LjY5NTMxMiAxOTEuNTkzNzUgNzUuNDM3NSAxOTEuNDY0ODQ0IDc1Ljk3NjU2MiAxOTEuODQ3NjU2IEMgNzkuMDg1OTM4IDE5NC4wNTg1OTQgODIuMzM1OTM4IDE5Ni4yMDMxMjUgODUuNjI4OTA2IDE5OC4yMjI2NTYgQyA4Ni4xOTE0MDYgMTk4LjU2MjUgODYuMzY3MTg4IDE5OS4yOTY4NzUgODYuMDIzNDM4IDE5OS44NTkzNzUgQyA4NS43OTY4NzUgMjAwLjIyNjU2MiA4NS40MDYyNSAyMDAuNDI5Njg4IDg1LjAwMzkwNiAyMDAuNDI5Njg4IFogTSAzMDUuMDYyNSAxOTAuMDQyOTY5IEMgMzA0LjgxMjUgMTkwLjA0Mjk2OSAzMDQuNTYyNSAxODkuOTY0ODQ0IDMwNC4zNDc2NTYgMTg5LjgwNDY4OCBDIDMwMy44MjAzMTIgMTg5LjQxMDE1NiAzMDMuNzE4NzUgMTg4LjY2MDE1NiAzMDQuMTEzMjgxIDE4OC4xMzY3MTkgQyAzMDYuNDIxODc1IDE4NS4wNzAzMTIgMzA4LjYwMTU2MiAxODEuODU1NDY5IDMxMC41OTM3NSAxNzguNTg1OTM4IEMgMzEwLjkzNzUgMTc4LjAyMzQzOCAzMTEuNjc1NzgxIDE3Ny44NDc2NTYgMzEyLjIzMDQ2OSAxNzguMTg3NSBDIDMxMi43OTI5NjkgMTc4LjUzMTI1IDMxMi45NzI2NTYgMTc5LjI2NTYyNSAzMTIuNjI4OTA2IDE3OS44MjgxMjUgQyAzMTAuNTk3NjU2IDE4My4xNjAxNTYgMzA4LjM3MTA5NCAxODYuNDQxNDA2IDMwNi4wMTU2MjUgMTg5LjU3MDMxMiBDIDMwNS43ODEyNSAxODkuODc4OTA2IDMwNS40MjE4NzUgMTkwLjA0Mjk2OSAzMDUuMDYyNSAxOTAuMDQyOTY5IFogTSA2Ny42Nzk2ODggMTg4LjI3NzM0NCBDIDY3LjQxNzk2OSAxODguMjc3MzQ0IDY3LjE1NjI1IDE4OC4xOTE0MDYgNjYuOTM3NSAxODguMDExNzE5IEMgNjMuODg2NzE5IDE4NS41NzQyMTkgNjAuODk0NTMxIDE4MyA1OC4wMzkwNjIgMTgwLjM1OTM3NSBDIDU3LjU1ODU5NCAxNzkuOTE0MDYyIDU3LjUyNzM0NCAxNzkuMTYwMTU2IDU3Ljk3MjY1NiAxNzguNjc1NzgxIEMgNTguNDIxODc1IDE3OC4xODc1IDU5LjE3MTg3NSAxNzguMTYwMTU2IDU5LjY1NjI1IDE3OC42MDkzNzUgQyA2Mi40Njg3NSAxODEuMjA3MDMxIDY1LjQxNzk2OSAxODMuNzQ2MDk0IDY4LjQyNTc4MSAxODYuMTUyMzQ0IEMgNjguOTM3NSAxODYuNTYyNSA2OS4wMjM0MzggMTg3LjMxMjUgNjguNjA5Mzc1IDE4Ny44MjgxMjUgQyA2OC4zNzUgMTg4LjEyMTA5NCA2OC4wMzEyNSAxODguMjc3MzQ0IDY3LjY3OTY4OCAxODguMjc3MzQ0IFogTSAxMjQuMzU5Mzc1IDE4Ny42Mjg5MDYgQyAxMjQuMzM1OTM4IDE4Ny42Mjg5MDYgMTI0LjMxMjUgMTg3LjYyODkwNiAxMjQuMjkyOTY5IDE4Ny42Mjg5MDYgQyAxMjMuNjM2NzE5IDE4Ny41ODk4NDQgMTIzLjEzMjgxMiAxODcuMDI3MzQ0IDEyMy4xNjc5NjkgMTg2LjM3MTA5NCBDIDEyMy4zODY3MTkgMTgyLjQ4NDM3NSAxMjMuNzUgMTc4LjU1MDc4MSAxMjQuMjUzOTA2IDE3NC42NzU3ODEgQyAxMjQuMzM5ODQ0IDE3NC4wMjM0MzggMTI0LjkzNzUgMTczLjU1ODU5NCAxMjUuNTg5ODQ0IDE3My42NDg0MzggQyAxMjYuMjQyMTg4IDE3My43MzA0NjkgMTI2LjcwMzEyNSAxNzQuMzMyMDMxIDEyNi42MTcxODggMTc0Ljk4NDM3NSBDIDEyNi4xMjEwOTQgMTc4LjgwMDc4MSAxMjUuNzYxNzE5IDE4Mi42Nzk2ODggMTI1LjU0Njg3NSAxODYuNTAzOTA2IEMgMTI1LjUxMTcxOSAxODcuMTM2NzE5IDEyNC45ODgyODEgMTg3LjYyODkwNiAxMjQuMzU5Mzc1IDE4Ny42Mjg5MDYgWiBNIDUyLjA0Njg3NSAxNzQuMDAzOTA2IEMgNTEuNzM0Mzc1IDE3NC4wMDM5MDYgNTEuNDI1NzgxIDE3My44Nzg5MDYgNTEuMTkxNDA2IDE3My42MzY3MTkgQyA0OC40OTIxODggMTcwLjgyODEyNSA0NS44NTkzNzUgMTY3Ljg3ODkwNiA0My4zNzEwOTQgMTY0Ljg3ODkwNiBDIDQyLjk0OTIxOSAxNjQuMzc1IDQzLjAxOTUzMSAxNjMuNjIxMDk0IDQzLjUyMzQzOCAxNjMuMTk5MjE5IEMgNDQuMDMxMjUgMTYyLjc4MTI1IDQ0Ljc4MTI1IDE2Mi44NTE1NjIgNDUuMjAzMTI1IDE2My4zNTU0NjkgQyA0Ny42NTYyNSAxNjYuMzEyNSA1MC4yNSAxNjkuMjE0ODQ0IDUyLjkxMDE1NiAxNzEuOTg0Mzc1IEMgNTMuMzYzMjgxIDE3Mi40NjA5MzggNTMuMzUxNTYyIDE3My4yMTQ4NDQgNTIuODc1IDE3My42Njc5NjkgQyA1Mi42NDQ1MzEgMTczLjg5MDYyNSA1Mi4zNDc2NTYgMTc0LjAwMzkwNiA1Mi4wNDY4NzUgMTc0LjAwMzkwNiBaIE0gMzE2LjIzODI4MSAxNzIuMDU4NTk0IEMgMzE2LjA1ODU5NCAxNzIuMDU4NTk0IDMxNS44NzUgMTcyLjAxOTUzMSAzMTUuNzAzMTI1IDE3MS45MzM1OTQgQyAzMTUuMTE3MTg4IDE3MS42MzY3MTkgMzE0Ljg3ODkwNiAxNzAuOTE3OTY5IDMxNS4xNzU3ODEgMTcwLjMzMjAzMSBDIDMxNi45MDYyNSAxNjYuODkwNjI1IDMxOC40NzI2NTYgMTYzLjMzNTkzOCAzMTkuODM1OTM4IDE1OS43Njk1MzEgQyAzMjAuMDcwMzEyIDE1OS4xNTIzNDQgMzIwLjc2MTcxOSAxNTguODQ3NjU2IDMyMS4zNzUgMTU5LjA4MjAzMSBDIDMyMS45ODgyODEgMTU5LjMxNjQwNiAzMjIuMjk2ODc1IDE2MC4wMDM5MDYgMzIyLjA1ODU5NCAxNjAuNjIxMDk0IEMgMzIwLjY3MTg3NSAxNjQuMjYxNzE5IDMxOS4wNzAzMTIgMTY3Ljg5MDYyNSAzMTcuMzAwNzgxIDE3MS40MDIzNDQgQyAzMTcuMDkzNzUgMTcxLjgyMDMxMiAzMTYuNjc1NzgxIDE3Mi4wNTg1OTQgMzE2LjIzODI4MSAxNzIuMDU4NTk0IFogTSAxMjYuOTQ1MzEyIDE2Ni42MTMyODEgQyAxMjYuODcxMDk0IDE2Ni42MTMyODEgMTI2Ljc5Njg3NSAxNjYuNjA5Mzc1IDEyNi43MTg3NSAxNjYuNTkzNzUgQyAxMjYuMDc0MjE5IDE2Ni40Njg3NSAxMjUuNjQ4NDM4IDE2NS44NDM3NSAxMjUuNzczNDM4IDE2NS4xOTkyMTkgQyAxMjYuNTAzOTA2IDE2MS4zNzUgMTI3LjM4MjgxMiAxNTcuNTE5NTMxIDEyOC4zOTA2MjUgMTUzLjc0NjA5NCBDIDEyOC41NTg1OTQgMTUzLjEwOTM3NSAxMjkuMjEwOTM4IDE1Mi43MzA0NjkgMTI5Ljg0NzY1NiAxNTIuOTAyMzQ0IEMgMTMwLjQ4NDM3NSAxNTMuMDc0MjE5IDEzMC44NjMyODEgMTUzLjcyNjU2MiAxMzAuNjkxNDA2IDE1NC4zNjMyODEgQyAxMjkuNjk5MjE5IDE1OC4wODIwMzEgMTI4LjgzMjAzMSAxNjEuODc4OTA2IDEyOC4xMTMyODEgMTY1LjY0NDUzMSBDIDEyOC4wMDM5MDYgMTY2LjIxNDg0NCAxMjcuNTAzOTA2IDE2Ni42MTMyODEgMTI2Ljk0NTMxMiAxNjYuNjEzMjgxIFogTSAzOC40MTc5NjkgMTU3LjgwMDc4MSBDIDM4LjA1MDc4MSAxNTcuODAwNzgxIDM3LjY4NzUgMTU3LjYzMjgxMiAzNy40NTcwMzEgMTU3LjMxNjQwNiBDIDM1LjE1NjI1IDE1NC4xOTE0MDYgMzIuOTI1NzgxIDE1MC45MjU3ODEgMzAuODMyMDMxIDE0Ny42MTcxODggQyAzMC40ODA0NjkgMTQ3LjA2MjUgMzAuNjQ4NDM4IDE0Ni4zMjQyMTkgMzEuMjAzMTI1IDE0NS45NzI2NTYgQyAzMS43NTc4MTIgMTQ1LjYyMTA5NCAzMi40OTYwOTQgMTQ1Ljc4NTE1NiAzMi44NDc2NTYgMTQ2LjM0Mzc1IEMgMzQuOTEwMTU2IDE0OS42MDE1NjIgMzcuMTA1NDY5IDE1Mi44MjAzMTIgMzkuMzc1IDE1NS45MDIzNDQgQyAzOS43NjU2MjUgMTU2LjQzMzU5NCAzOS42NTIzNDQgMTU3LjE3OTY4OCAzOS4xMjEwOTQgMTU3LjU3MDMxMiBDIDM4LjkxMDE1NiAxNTcuNzI2NTYyIDM4LjY2MDE1NiAxNTcuODAwNzgxIDM4LjQxNzk2OSAxNTcuODAwNzgxIFogTSAzMjMuOTY0ODQ0IDE1Mi4zNDM3NSBDIDMyMy44NTU0NjkgMTUyLjM0Mzc1IDMyMy43NDYwOTQgMTUyLjMyODEyNSAzMjMuNjM2NzE5IDE1Mi4yOTY4NzUgQyAzMjMuMDAzOTA2IDE1Mi4xMTMyODEgMzIyLjYzNjcxOSAxNTEuNDUzMTI1IDMyMi44MjAzMTIgMTUwLjgyMDMxMiBDIDMyMy44ODY3MTkgMTQ3LjA5NzY1NiAzMjQuNzUgMTQzLjMxMjUgMzI1LjM4MjgxMiAxMzkuNTc4MTI1IEMgMzI1LjQ5NjA5NCAxMzguOTI1NzgxIDMyNi4xMDkzNzUgMTM4LjQ4ODI4MSAzMjYuNzYxNzE5IDEzOC42MDE1NjIgQyAzMjcuNDEwMTU2IDEzOC43MTA5MzggMzI3Ljg0Mzc1IDEzOS4zMjgxMjUgMzI3LjczNDM3NSAxMzkuOTc2NTYyIEMgMzI3LjA4MjAzMSAxNDMuODAwNzgxIDMyNi4xOTkyMTkgMTQ3LjY2Nzk2OSAzMjUuMTEzMjgxIDE1MS40NzY1NjIgQyAzMjQuOTYwOTM4IDE1MiAzMjQuNDg0Mzc1IDE1Mi4zNDM3NSAzMjMuOTY0ODQ0IDE1Mi4zNDM3NSBaIE0gMTMyLjI2NTYyNSAxNDYuMTE3MTg4IEMgMTMyLjE0MDYyNSAxNDYuMTE3MTg4IDEzMi4wMTU2MjUgMTQ2LjA5NzY1NiAxMzEuODkwNjI1IDE0Ni4wNTQ2ODggQyAxMzEuMjY1NjI1IDE0NS44NDc2NTYgMTMwLjkyOTY4OCAxNDUuMTc1NzgxIDEzMS4xMzI4MTIgMTQ0LjU1MDc4MSBDIDEzMi4zNTkzNzUgMTQwLjg0Mzc1IDEzMy43MzQzNzUgMTM3LjEzNjcxOSAxMzUuMjE4NzUgMTMzLjUzNTE1NiBDIDEzNS40Njg3NSAxMzIuOTI5Njg4IDEzNi4xNjc5NjkgMTMyLjYzNjcxOSAxMzYuNzczNDM4IDEzMi44OTA2MjUgQyAxMzcuMzgyODEyIDEzMy4xNDA2MjUgMTM3LjY3MTg3NSAxMzMuODM5ODQ0IDEzNy40MjE4NzUgMTM0LjQ0NTMxMiBDIDEzNS45NTcwMzEgMTM3Ljk5NjA5NCAxMzQuNjAxNTYyIDE0MS42NDQ1MzEgMTMzLjM5NDUzMSAxNDUuMjk2ODc1IEMgMTMzLjIzMDQ2OSAxNDUuODAwNzgxIDEzMi43NjU2MjUgMTQ2LjExNzE4OCAxMzIuMjY1NjI1IDE0Ni4xMTcxODggWiBNIDI2Ljk2ODc1IDEzOS45NzY1NjIgQyAyNi41NTA3ODEgMTM5Ljk3NjU2MiAyNi4xNDQ1MzEgMTM5Ljc1NzgxMiAyNS45Mjk2ODggMTM5LjM2NzE4OCBDIDI0LjA0Mjk2OSAxMzUuOTg0Mzc1IDIyLjIzNDM3NSAxMzIuNDcyNjU2IDIwLjU1MDc4MSAxMjguOTI1NzgxIEMgMjAuMjY5NTMxIDEyOC4zMzIwMzEgMjAuNTIzNDM4IDEyNy42MjEwOTQgMjEuMTE3MTg4IDEyNy4zMzk4NDQgQyAyMS43MTA5MzggMTI3LjA1NDY4OCAyMi40MjE4NzUgMTI3LjMwODU5NCAyMi43MDMxMjUgMTI3LjkwMjM0NCBDIDI0LjM2MzI4MSAxMzEuNDAyMzQ0IDI2LjE0ODQzOCAxMzQuODY3MTg4IDI4LjAwNzgxMiAxMzguMjAzMTI1IEMgMjguMzI4MTI1IDEzOC43NzczNDQgMjguMTIxMDk0IDEzOS41MDM5MDYgMjcuNTQ2ODc1IDEzOS44MjgxMjUgQyAyNy4zNjMyODEgMTM5LjkyOTY4OCAyNy4xNjQwNjIgMTM5Ljk3NjU2MiAyNi45Njg3NSAxMzkuOTc2NTYyIFogTSAzMjcuNzEwOTM4IDEzMS41MDM5MDYgQyAzMjcuNjgzNTk0IDEzMS41MDM5MDYgMzI3LjY1NjI1IDEzMS41MDM5MDYgMzI3LjYyNSAxMzEuNSBDIDMyNi45Njg3NSAxMzEuNDUzMTI1IDMyNi40NzI2NTYgMTMwLjg4MjgxMiAzMjYuNTIzNDM4IDEzMC4yMjY1NjIgQyAzMjYuNjc5Njg4IDEyOC4wMjM0MzggMzI2Ljc2MTcxOSAxMjUuODA0Njg4IDMyNi43NjE3MTkgMTIzLjY0MDYyNSBDIDMyNi43NjE3MTkgMTIxLjk5MjE4OCAzMjYuNzE0ODQ0IDEyMC4zMzk4NDQgMzI2LjYyMTA5NCAxMTguNzE4NzUgQyAzMjYuNTg1OTM4IDExOC4wNjI1IDMyNy4wODU5MzggMTE3LjQ5NjA5NCAzMjcuNzQ2MDk0IDExNy40NjA5MzggQyAzMjguMzk0NTMxIDExNy40MjU3ODEgMzI4Ljk2NDg0NCAxMTcuOTI1NzgxIDMyOSAxMTguNTgyMDMxIEMgMzI5LjA5NzY1NiAxMjAuMjUgMzI5LjE0NDUzMSAxMjEuOTQ5MjE5IDMyOS4xNDQ1MzEgMTIzLjY0MDYyNSBDIDMyOS4xNDQ1MzEgMTI1Ljg2MzI4MSAzMjkuMDYyNSAxMjguMTM2NzE5IDMyOC44OTg0MzggMTMwLjM5ODQzOCBDIDMyOC44NTU0NjkgMTMxLjAyMzQzOCAzMjguMzMyMDMxIDEzMS41MDM5MDYgMzI3LjcxMDkzOCAxMzEuNTAzOTA2IFogTSAxNDAuMjEwOTM4IDEyNi40OTIxODggQyAxNDAuMDM5MDYyIDEyNi40OTIxODggMTM5Ljg2MzI4MSAxMjYuNDUzMTI1IDEzOS42OTUzMTIgMTI2LjM3NSBDIDEzOS4xMDE1NjIgMTI2LjA4NTkzOCAxMzguODU1NDY5IDEyNS4zNzUgMTM5LjE0MDYyNSAxMjQuNzgxMjUgQyAxNDAuODQ3NjU2IDEyMS4yNTM5MDYgMTQyLjY5OTIxOSAxMTcuNzYxNzE5IDE0NC42NDg0MzggMTE0LjM5ODQzOCBDIDE0NC45NzY1NjIgMTEzLjgyODEyNSAxNDUuNzA3MDMxIDExMy42MzI4MTIgMTQ2LjI3NzM0NCAxMTMuOTY0ODQ0IEMgMTQ2Ljg0Mzc1IDExNC4yOTY4NzUgMTQ3LjAzOTA2MiAxMTUuMDIzNDM4IDE0Ni43MDcwMzEgMTE1LjU5Mzc1IEMgMTQ0Ljc5Mjk2OSAxMTguOTA2MjUgMTQyLjk2NDg0NCAxMjIuMzQ3NjU2IDE0MS4yODUxNTYgMTI1LjgyMDMxMiBDIDE0MS4wNzgxMjUgMTI2LjI0NjA5NCAxNDAuNjU2MjUgMTI2LjQ5MjE4OCAxNDAuMjEwOTM4IDEyNi40OTIxODggWiBNIDE3Ljc2MTcxOSAxMjAuODkwNjI1IEMgMTcuMjk2ODc1IDEyMC44OTA2MjUgMTYuODUxNTYyIDEyMC42MTMyODEgMTYuNjY0MDYyIDEyMC4xNTIzNDQgQyAxNS4xODc1IDExNi41ODU5MzggMTMuNzkyOTY5IDExMi44OTA2MjUgMTIuNTA3ODEyIDEwOS4xNzE4NzUgQyAxMi4yOTI5NjkgMTA4LjU1MDc4MSAxMi42MjUgMTA3Ljg3MTA5NCAxMy4yNDYwOTQgMTA3LjY1NjI1IEMgMTMuODY3MTg4IDEwNy40NDE0MDYgMTQuNTQ2ODc1IDEwNy43Njk1MzEgMTQuNzYxNzE5IDEwOC4zOTQ1MzEgQyAxNi4wMjczNDQgMTEyLjA3MDMxMiAxNy40MTAxNTYgMTE1LjcxODc1IDE4Ljg2MzI4MSAxMTkuMjQyMTg4IEMgMTkuMTEzMjgxIDExOS44NDc2NTYgMTguODI4MTI1IDEyMC41NDY4NzUgMTguMjE4NzUgMTIwLjc5Njg3NSBDIDE4LjA3MDMxMiAxMjAuODU5Mzc1IDE3LjkxNDA2MiAxMjAuODkwNjI1IDE3Ljc2MTcxOSAxMjAuODkwNjI1IFogTSAzMjYuNzIyNjU2IDExMC4zNzEwOTQgQyAzMjYuMTU2MjUgMTEwLjM3MTA5NCAzMjUuNjU2MjUgMTA5Ljk2NDg0NCAzMjUuNTU0Njg4IDEwOS4zODY3MTkgQyAzMjQuODc4OTA2IDEwNS41NDY4NzUgMzIzLjkxNzk2OSAxMDEuODA4NTk0IDMyMi42OTkyMTkgOTguMjc3MzQ0IEMgMzIyLjQ4NDM3NSA5Ny42NTYyNSAzMjIuODEyNSA5Ni45NzY1NjIgMzIzLjQzMzU5NCA5Ni43NjE3MTkgQyAzMjQuMDU0Njg4IDk2LjU0Mjk2OSAzMjQuNzM0Mzc1IDk2Ljg3NSAzMjQuOTQ5MjE5IDk3LjQ5NjA5NCBDIDMyNi4yMTA5MzggMTAxLjE0ODQzOCAzMjcuMjA3MDMxIDEwNS4wMTE3MTkgMzI3Ljg5ODQzOCAxMDguOTcyNjU2IEMgMzI4LjAxMTcxOSAxMDkuNjIxMDk0IDMyNy41ODIwMzEgMTEwLjI0MjE4OCAzMjYuOTMzNTk0IDExMC4zNTU0NjkgQyAzMjYuODYzMjgxIDExMC4zNjcxODggMzI2Ljc5Mjk2OSAxMTAuMzcxMDk0IDMyNi43MjI2NTYgMTEwLjM3MTA5NCBaIE0gMTUwLjcwNzAzMSAxMDguMDg1OTM4IEMgMTUwLjQ4MDQ2OSAxMDguMDg1OTM4IDE1MC4yNTM5MDYgMTA4LjAyMzQzOCAxNTAuMDUwNzgxIDEwNy44ODY3MTkgQyAxNDkuNSAxMDcuNTIzNDM4IDE0OS4zNTE1NjIgMTA2Ljc4MTI1IDE0OS43MTg3NSAxMDYuMjM0Mzc1IEMgMTUxLjg5NDUzMSAxMDIuOTYwOTM4IDE1NC4yMTA5MzggOTkuNzUzOTA2IDE1Ni42MDU0NjkgOTYuNzA3MDMxIEMgMTU3LjAxMTcxOSA5Ni4xODc1IDE1Ny43NjE3MTkgOTYuMDk3NjU2IDE1OC4yNzczNDQgOTYuNTAzOTA2IEMgMTU4Ljc5Njg3NSA5Ni45MTAxNTYgMTU4Ljg4NjcxOSA5Ny42NjAxNTYgMTU4LjQ4MDQ2OSA5OC4xNzk2ODggQyAxNTYuMTI1IDEwMS4xNzk2ODggMTUzLjg0Mzc1IDEwNC4zMzIwMzEgMTUxLjcwMzEyNSAxMDcuNTU0Njg4IEMgMTUxLjQ3MjY1NiAxMDcuODk4NDM4IDE1MS4wOTM3NSAxMDguMDg1OTM4IDE1MC43MDcwMzEgMTA4LjA4NTkzOCBaIE0gMTAuNzM4MjgxIDEwMC44ODY3MTkgQyAxMC4yMjI2NTYgMTAwLjg4NjcxOSA5Ljc0NjA5NCAxMDAuNTQ2ODc1IDkuNTkzNzUgMTAwLjAyNzM0NCBDIDguNTA3ODEyIDk2LjMyODEyNSA3LjUgOTIuNTA3ODEyIDYuNTk3NjU2IDg4LjY3OTY4OCBDIDYuNDQ1MzEyIDg4LjAzOTA2MiA2Ljg0Mzc1IDg3LjM5ODQzOCA3LjQ4NDM3NSA4Ny4yNDYwOTQgQyA4LjEyMTA5NCA4Ny4wOTM3NSA4Ljc2NTYyNSA4Ny40OTIxODggOC45MTc5NjkgODguMTMyODEyIEMgOS44MDg1OTQgOTEuOTE3OTY5IDEwLjgwNDY4OCA5NS42OTUzMTIgMTEuODgyODEyIDk5LjM1NTQ2OSBDIDEyLjA2NjQwNiA5OS45ODgyODEgMTEuNzA3MDMxIDEwMC42NTIzNDQgMTEuMDc0MjE5IDEwMC44MzU5MzggQyAxMC45NjA5MzggMTAwLjg3MTA5NCAxMC44NDc2NTYgMTAwLjg4NjcxOSAxMC43MzgyODEgMTAwLjg4NjcxOSBaIE0gMTYzLjY3NTc4MSA5MS4zMzIwMzEgQyAxNjMuMzkwNjI1IDkxLjMzMjAzMSAxNjMuMTA1NDY5IDkxLjIzNDM3NSAxNjIuODc4OTA2IDkxLjAyNzM0NCBDIDE2Mi4zOTA2MjUgOTAuNTg1OTM4IDE2Mi4zNTE1NjIgODkuODMyMDMxIDE2Mi43ODkwNjIgODkuMzQzNzUgQyAxNjUuNDI1NzgxIDg2LjQxNDA2MiAxNjguMTk1MzEyIDgzLjU4NTkzOCAxNzEuMDIzNDM4IDgwLjk0MTQwNiBDIDE3MS41MDM5MDYgODAuNDkyMTg4IDE3Mi4yNTc4MTIgODAuNTE1NjI1IDE3Mi43MDcwMzEgODEgQyAxNzMuMTUyMzQ0IDgxLjQ4MDQ2OSAxNzMuMTI4OTA2IDgyLjIzNDM3NSAxNzIuNjQ4NDM4IDgyLjY4MzU5NCBDIDE2OS44NzEwOTQgODUuMjgxMjUgMTY3LjE1MjM0NCA4OC4wNTg1OTQgMTY0LjU1ODU5NCA5MC45Mzc1IEMgMTY0LjMyNDIxOSA5MS4yMDMxMjUgMTY0LjAwMzkwNiA5MS4zMzIwMzEgMTYzLjY3NTc4MSA5MS4zMzIwMzEgWiBNIDMyMC4wNzQyMTkgOTAuMzIwMzEyIEMgMzE5LjY0NDUzMSA5MC4zMjAzMTIgMzE5LjIyNjU2MiA5MC4wODU5MzggMzE5LjAxNTYyNSA4OS42NzU3ODEgQyAzMTcuMjQyMTg4IDg2LjI1NzgxMiAzMTUuMTYwMTU2IDgzLjAzMTI1IDMxMi44MjAzMTIgODAuMDg5ODQ0IEMgMzEyLjQxMDE1NiA3OS41NzQyMTkgMzEyLjQ5NjA5NCA3OC44MjQyMTkgMzEzLjAxMTcxOSA3OC40MTQwNjIgQyAzMTMuNTI3MzQ0IDc4LjAwMzkwNiAzMTQuMjczNDM4IDc4LjA4OTg0NCAzMTQuNjgzNTk0IDc4LjYwNTQ2OSBDIDMxNy4xMTcxODggODEuNjY3OTY5IDMxOS4yODUxNTYgODUuMDE5NTMxIDMyMS4xMjg5MDYgODguNTc4MTI1IEMgMzIxLjQzMzU5NCA4OS4xNjAxNTYgMzIxLjIwNzAzMSA4OS44Nzg5MDYgMzIwLjYyMTA5NCA5MC4xODM1OTQgQyAzMjAuNDQ1MzEyIDkwLjI3NzM0NCAzMjAuMjYxNzE5IDkwLjMyMDMxMiAzMjAuMDc0MjE5IDkwLjMyMDMxMiBaIE0gNS43NjU2MjUgODAuMjY5NTMxIEMgNS4yMDMxMjUgODAuMjY5NTMxIDQuNzA3MDMxIDc5Ljg3MTA5NCA0LjU5NzY1NiA3OS4zMDA3ODEgQyAzLjg2NzE4OCA3NS41IDMuMjIyNjU2IDcxLjYwOTM3NSAyLjY3MTg3NSA2Ny43MjY1NjIgQyAyLjU4MjAzMSA2Ny4wNzQyMTkgMy4wMzUxNTYgNjYuNDcyNjU2IDMuNjg3NSA2Ni4zNzg5MDYgQyA0LjM0Mzc1IDY2LjI4NTE1NiA0Ljk0MTQwNiA2Ni43NDIxODggNS4wMzEyNSA2Ny4zOTQ1MzEgQyA1LjU3NDIxOSA3MS4yMzQzNzUgNi4yMTQ4NDQgNzUuMDg5ODQ0IDYuOTM3NSA3OC44NTE1NjIgQyA3LjA1ODU5NCA3OS40OTYwOTQgNi42MzY3MTkgODAuMTIxMDk0IDUuOTkyMTg4IDgwLjI0NjA5NCBDIDUuOTE0MDYyIDgwLjI2MTcxOSA1LjgzOTg0NCA4MC4yNjk1MzEgNS43NjU2MjUgODAuMjY5NTMxIFogTSAxNzkuMDMxMjUgNzYuNzUzOTA2IEMgMTc4LjY4MzU5NCA3Ni43NTM5MDYgMTc4LjMzOTg0NCA3Ni42MDE1NjIgMTc4LjEwMTU2MiA3Ni4zMDg1OTQgQyAxNzcuNjkxNDA2IDc1Ljc5Njg3NSAxNzcuNzY5NTMxIDc1LjA0Mjk2OSAxNzguMjgxMjUgNzQuNjMyODEyIEMgMTgxLjM1OTM3NSA3Mi4xNTIzNDQgMTg0LjU1ODU5NCA2OS44MjAzMTIgMTg3Ljc4OTA2MiA2Ny42OTUzMTIgQyAxODguMzM5ODQ0IDY3LjMzMjAzMSAxODkuMDc4MTI1IDY3LjQ4NDM3NSAxODkuNDM3NSA2OC4wMzUxNTYgQyAxODkuODAwNzgxIDY4LjU4NTkzOCAxODkuNjQ4NDM4IDY5LjMyNDIxOSAxODkuMDk3NjU2IDY5LjY4NzUgQyAxODUuOTI5Njg4IDcxLjc2OTUzMSAxODIuNzkyOTY5IDc0LjA1ODU5NCAxNzkuNzc3MzQ0IDc2LjQ4ODI4MSBDIDE3OS41NTg1OTQgNzYuNjY3OTY5IDE3OS4yOTI5NjkgNzYuNzUzOTA2IDE3OS4wMzEyNSA3Ni43NTM5MDYgWiBNIDMwNy4yMzgyODEgNzMuNjAxNTYyIEMgMzA2Ljk0OTIxOSA3My42MDE1NjIgMzA2LjY2NDA2MiA3My41IDMwNi40Mzc1IDczLjI5Mjk2OSBDIDMwMy42NDA2MjUgNzAuNzY5NTMxIDMwMC41NTA3ODEgNjguNSAyOTcuMjUgNjYuNTQyOTY5IEMgMjk2LjY4MzU5NCA2Ni4yMDcwMzEgMjk2LjUgNjUuNDcyNjU2IDI5Ni44MzIwMzEgNjQuOTA2MjUgQyAyOTcuMTY3OTY5IDY0LjMzOTg0NCAyOTcuOTAyMzQ0IDY0LjE1NjI1IDI5OC40NjQ4NDQgNjQuNDg4MjgxIEMgMzAxLjg5ODQzOCA2Ni41MjczNDQgMzA1LjExNzE4OCA2OC44OTQ1MzEgMzA4LjAzMTI1IDcxLjUyMzQzOCBDIDMwOC41MjM0MzggNzEuOTY0ODQ0IDMwOC41NjI1IDcyLjcxODc1IDMwOC4xMjEwOTQgNzMuMjA3MDMxIEMgMzA3Ljg4NjcxOSA3My40Njg3NSAzMDcuNTYyNSA3My42MDE1NjIgMzA3LjIzODI4MSA3My42MDE1NjIgWiBNIDE5Ni42MDE1NjIgNjQuOTg4MjgxIEMgMTk2LjE3OTY4OCA2NC45ODgyODEgMTk1Ljc3MzQzOCA2NC43NjE3MTkgMTk1LjU1NDY4OCA2NC4zNjMyODEgQyAxOTUuMjQyMTg4IDYzLjc4NTE1NiAxOTUuNDU3MDMxIDYzLjA2MjUgMTk2LjAzNTE1NiA2Mi43NDYwOTQgQyAxOTkuNSA2MC44NTkzNzUgMjAzLjA3ODEyNSA1OS4xNTIzNDQgMjA2LjY2MDE1NiA1Ny42NzU3ODEgQyAyMDcuMjY5NTMxIDU3LjQyNTc4MSAyMDcuOTY0ODQ0IDU3LjcxNDg0NCAyMDguMjE0ODQ0IDU4LjMyNDIxOSBDIDIwOC40NjQ4NDQgNTguOTMzNTk0IDIwOC4xNzU3ODEgNTkuNjI4OTA2IDIwNy41NjY0MDYgNTkuODc4OTA2IEMgMjA0LjA2MjUgNjEuMzI0MjE5IDIwMC41NjY0MDYgNjIuOTkyMTg4IDE5Ny4xNzE4NzUgNjQuODM5ODQ0IEMgMTk2Ljk5MjE4OCA2NC45NDE0MDYgMTk2Ljc5Njg3NSA2NC45ODgyODEgMTk2LjYwMTU2MiA2NC45ODgyODEgWiBNIDI4OS4zNzEwOTQgNjIuMzg2NzE5IEMgMjg5LjIwMzEyNSA2Mi4zODY3MTkgMjg5LjAzOTA2MiA2Mi4zNTE1NjIgMjg4Ljg3ODkwNiA2Mi4yODEyNSBDIDI4NS4zMzk4NDQgNjAuNjcxODc1IDI4MS43MzA0NjkgNTkuMjM4MjgxIDI3OC4xNTYyNSA1OC4wMTk1MzEgQyAyNzcuNTM1MTU2IDU3LjgwODU5NCAyNzcuMTk5MjE5IDU3LjEyODkwNiAyNzcuNDEwMTU2IDU2LjUwNzgxMiBDIDI3Ny42MjUgNTUuODgyODEyIDI3OC4zMDA3ODEgNTUuNTUwNzgxIDI3OC45MjE4NzUgNTUuNzYxNzE5IEMgMjgyLjU3MDMxMiA1Ny4wMDc4MTIgMjg2LjI1IDU4LjQ2ODc1IDI4OS44NTkzNzUgNjAuMTA1NDY5IEMgMjkwLjQ2MDkzOCA2MC4zNzg5MDYgMjkwLjcyNjU2MiA2MS4wODU5MzggMjkwLjQ1MzEyNSA2MS42ODM1OTQgQyAyOTAuMjUzOTA2IDYyLjEyNSAyODkuODI0MjE5IDYyLjM4NjcxOSAyODkuMzcxMDk0IDYyLjM4NjcxOSBaIE0gMi42OTkyMTkgNTkuMjczNDM4IEMgMi4wOTc2NTYgNTkuMjczNDM4IDEuNTc4MTI1IDU4LjgxNjQwNiAxLjUxNTYyNSA1OC4yMDMxMjUgQyAxLjEyMTA5NCA1NC4zNTE1NjIgMC44MTI1IDUwLjQxNDA2MiAwLjU5Mzc1IDQ2LjUwNzgxMiBDIDAuNTU4NTk0IDQ1Ljg1MTU2MiAxLjA1ODU5NCA0NS4yODkwNjIgMS43MTQ4NDQgNDUuMjUgQyAyLjM3MTA5NCA0NS4yMTg3NSAyLjkzNzUgNDUuNzE4NzUgMi45NzI2NTYgNDYuMzc1IEMgMy4xODc1IDUwLjI0NjA5NCAzLjQ5NjA5NCA1NC4xNDQ1MzEgMy44ODY3MTkgNTcuOTYwOTM4IEMgMy45NTMxMjUgNTguNjE3MTg4IDMuNDc2NTYyIDU5LjIwMzEyNSAyLjgyNDIxOSA1OS4yNjk1MzEgQyAyLjc4MTI1IDU5LjI3MzQzOCAyLjc0MjE4OCA1OS4yNzM0MzggMi42OTkyMTkgNTkuMjczNDM4IFogTSAyMTYuMDcwMzEyIDU2Ljc1IEMgMjE1LjU2MjUgNTYuNzUgMjE1LjA5Mzc1IDU2LjQyMTg3NSAyMTQuOTMzNTk0IDU1LjkwNjI1IEMgMjE0Ljc0MjE4OCA1NS4yNzczNDQgMjE1LjA5Mzc1IDU0LjYwOTM3NSAyMTUuNzIyNjU2IDU0LjQxNzk2OSBDIDIxOS40ODA0NjkgNTMuMjU3ODEyIDIyMy4zMzIwMzEgNTIuMzE2NDA2IDIyNy4xNjc5NjkgNTEuNjEzMjgxIEMgMjI3LjgxNjQwNiA1MS41IDIyOC40Mzc1IDUxLjkyMTg3NSAyMjguNTU0Njg4IDUyLjU3MDMxMiBDIDIyOC42NzE4NzUgNTMuMjE4NzUgMjI4LjI0MjE4OCA1My44Mzk4NDQgMjI3LjU5Mzc1IDUzLjk1NzAzMSBDIDIyMy44NTE1NjIgNTQuNjQ0NTMxIDIyMC4wOTM3NSA1NS41NjY0MDYgMjE2LjQyMTg3NSA1Ni42OTkyMTkgQyAyMTYuMzA0Njg4IDU2LjczNDM3NSAyMTYuMTg3NSA1Ni43NSAyMTYuMDcwMzEyIDU2Ljc1IFogTSAyNjkuMzk4NDM4IDU1LjM5NDUzMSBDIDI2OS4zMDQ2ODggNTUuMzk0NTMxIDI2OS4yMTA5MzggNTUuMzg2NzE5IDI2OS4xMTMyODEgNTUuMzYzMjgxIEMgMjY1LjM2MzI4MSA1NC40MzM1OTQgMjYxLjU1NDY4OCA1My43MTA5MzggMjU3Ljc5Njg3NSA1My4yMTg3NSBDIDI1Ny4xNDQ1MzEgNTMuMTMyODEyIDI1Ni42ODM1OTQgNTIuNTMxMjUgMjU2Ljc2OTUzMSA1MS44Nzg5MDYgQyAyNTYuODU1NDY5IDUxLjIyNjU2MiAyNTcuNDU3MDMxIDUwLjc2OTUzMSAyNTguMTA1NDY5IDUwLjg1MTU2MiBDIDI2MS45NTMxMjUgNTEuMzU5Mzc1IDI2NS44NDc2NTYgNTIuMDk3NjU2IDI2OS42ODc1IDUzLjA0Njg3NSBDIDI3MC4zMjQyMTkgNTMuMjAzMTI1IDI3MC43MTQ4NDQgNTMuODUxNTYyIDI3MC41NTg1OTQgNTQuNDkyMTg4IEMgMjcwLjQyMTg3NSA1NS4wMzEyNSAyNjkuOTMzNTk0IDU1LjM5NDUzMSAyNjkuMzk4NDM4IDU1LjM5NDUzMSBaIE0gMjM2LjgxNjQwNiA1Mi43MTg3NSBDIDIzNi4yMDMxMjUgNTIuNzE4NzUgMjM1LjY3OTY4OCA1Mi4yNDYwOTQgMjM1LjYyODkwNiA1MS42MjUgQyAyMzUuNTc0MjE5IDUwLjk2ODc1IDIzNi4wNTg1OTQgNTAuMzkwNjI1IDIzNi43MTg3NSA1MC4zMzU5MzggQyAyNDAuNjE3MTg4IDUwLjAwNzgxMiAyNDQuNTk3NjU2IDQ5LjkxNDA2MiAyNDguNDk2MDk0IDUwLjA1MDc4MSBDIDI0OS4xNTIzNDQgNTAuMDc0MjE5IDI0OS42Njc5NjkgNTAuNjI4OTA2IDI0OS42NDQ1MzEgNTEuMjg1MTU2IEMgMjQ5LjYyMTA5NCA1MS45NDUzMTIgMjQ5LjEwMTU2MiA1Mi40NTMxMjUgMjQ4LjQxNDA2MiA1Mi40MzM1OTQgQyAyNDQuNjEzMjgxIDUyLjMwMDc4MSAyNDAuNzIyNjU2IDUyLjM5NDUzMSAyMzYuOTE3OTY5IDUyLjcxNDg0NCBDIDIzNi44ODI4MTIgNTIuNzE0ODQ0IDIzNi44NDc2NTYgNTIuNzE4NzUgMjM2LjgxNjQwNiA1Mi43MTg3NSBaIE0gMS40MjU3ODEgMzguMDkzNzUgQyAwLjc3NzM0NCAzOC4wOTM3NSAwLjI0NjA5NCAzNy41NzQyMTkgMC4yMzQzNzUgMzYuOTI1NzgxIEMgMC4yMDMxMjUgMzUuMjMwNDY5IDAuMTg3NSAzMy41ODk4NDQgMC4xODc1IDMyIEMgMC4xODc1IDI5LjczNDM3NSAwLjIxODc1IDI3LjQ0NTMxMiAwLjI3NzM0NCAyNS4xOTUzMTIgQyAwLjI5Njg3NSAyNC41MzUxNTYgMC44NTkzNzUgMjMuOTk2MDk0IDEuNSAyNC4wMzUxNTYgQyAyLjE2MDE1NiAyNC4wNTA3ODEgMi42Nzk2ODggMjQuNjAxNTYyIDIuNjYwMTU2IDI1LjI1NzgxMiBDIDIuNTk3NjU2IDI3LjQ4ODI4MSAyLjU3MDMxMiAyOS43NTM5MDYgMi41NzAzMTIgMzIgQyAyLjU3MDMxMiAzMy41NzQyMTkgMi41ODU5MzggMzUuMjAzMTI1IDIuNjE3MTg4IDM2Ljg3ODkwNiBDIDIuNjI4OTA2IDM3LjUzNTE1NiAyLjEwNTQ2OSAzOC4wODIwMzEgMS40NDkyMTkgMzguMDkzNzUgQyAxLjQ0MTQwNiAzOC4wOTM3NSAxLjQyOTY4OCAzOC4wOTM3NSAxLjQyNTc4MSAzOC4wOTM3NSBaIE0gMS45MTc5NjkgMTYuODkwNjI1IEMgMS44OTA2MjUgMTYuODkwNjI1IDEuODYzMjgxIDE2Ljg4NjcxOSAxLjgzNTkzOCAxNi44ODY3MTkgQyAxLjE3OTY4OCAxNi44Mzk4NDQgMC42ODM1OTQgMTYuMjczNDM4IDAuNzI2NTYyIDE1LjYxNzE4OCBDIDEuMjIyNjU2IDguMjkyOTY5IDEuODc1IDQuMDc0MjE5IDEuOTAyMzQ0IDMuODk4NDM4IEMgMi4wMDM5MDYgMy4yNSAyLjYxMzI4MSAyLjc5Njg3NSAzLjI2MTcxOSAyLjkwNjI1IEMgMy45MTAxNTYgMy4wMDc4MTIgNC4zNTU0NjkgMy42MTcxODggNC4yNTc4MTIgNC4yNjU2MjUgQyA0LjI1IDQuMzA4NTk0IDMuNTg5ODQ0IDguNTcwMzEyIDMuMTA1NDY5IDE1Ljc3NzM0NCBDIDMuMDYyNSAxNi40MDYyNSAyLjUzOTA2MiAxNi44OTA2MjUgMS45MTc5NjkgMTYuODkwNjI1IFogTSAxLjkxNzk2OSAxNi44OTA2MjUgIi8+CjwvZz4KPC9nPgo8L3N2Zz4K"
                    class="ue qx cb yb ib oh" style="width:calc(50% + 4rem)">
            </div>

            <div class="db uf dn om ce vk qv nx sy ty q2 cy rj">
                <div class="re hi ni">
                    <div class="bh">
                        <h3 class="vo oq">Robotics - Lego Education</h3>
                        <p class="ug ld bo oo xo">
                            Design, iteratively develop and program a prototype of a robot to solve a problem.
                        </p>
                        <div class="db xd d s">
                            <img class="em sj" src="/website/img/lego.image.jpg" alt="Program 02"></div>
                    </div>
                    <div class="xd">
                        <a href="https://innovation-hub.app/" class="io ap ok rq xq or">
                            Learn more
                            <svg xmlns="http://www.w3.org/2000/svg" class="ag df td sr" width="44" height="44"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <line x1="15" y1="16" x2="19" y2="12"></line>
                                <line x1="15" y1="8" x2="19" y2="12"></line>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="db uf dn om ce qv nx fx sy ty q2 cy fl rj">
                <div class="re hi ni">
                    <div class="bh">
                        <h3 class="vo oq">Mental Math</h3>
                        <p class="ug ld bo oo xo">
                            Mental math can help kids understand math concepts better and get to the answer faster.
                            Improve the Skills of Students of All Ages.
                        </p>
                        <div class="db xd d s">
                            <img class="em sj" src="/website/img/mental.math.image.jpg" alt="Program 03">
                        </div>
                    </div>
                    <div class="xd"><a href="https://innovation-hub.app/" class="io ap ok rq xq or">
                            Learn more
                            <svg xmlns="http://www.w3.org/2000/svg" class="ag df td sr" width="44" height="44"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <line x1="15" y1="16" x2="19" y2="12"></line>
                                <line x1="15" y1="8" x2="19" y2="12"></line>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="xm ok yv s2 ox">
    <div class="lm bd p1 rv">
        <div class="re hi ji mi">
            <h2 class="ug yn ap nq">See what parents are saying about us</h2>
        </div>
        <div class="te yi ce ly zu px b1 x3 c5 i4 qu k5 e2" style="direction: rtl;">
            <blockquote class="dn qm dq fq kq vk rv sy z2 p5 rj">
                <img src="/website/img/abacus.png" class="em eg mf yj lk qj cq bq" alt="Testimonial 01">
                <p class="ld bo jo vo">يامن</p>
                <div class="fe re ki uf gj">
                    <svg xmlns="http://www.w3.org/2000/svg" class="zf cf ep" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="zf cf ep" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="zf cf ep" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="zf cf ep" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="zf cf ep" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                </div>
                <p class="qd bo xo">
                    "حقيقي مهندسة هدير ربنا
                    يبارك لحضرتك صبورة على الولاد وبتحتوي قدراتهم وبتبسطي المعلومات جدًا لحد ما يستوعبوا ويفهموا
                    وفعلًا طريقة شرحك رائعة وبسيطة وكلها طولة بال اللهم بارك 💕"
                </p>
            </blockquote>
            <blockquote class="dn qm dq fq kq nk rv sy z2 p5 rj">
                <img src="/website/img/fll.jpeg" class="em eg mf yj lk qj cq bq" alt="Testimonial 01">
                <p class="ld bo jo vo">محمد</p>
                <div class="fe re ki uf gj">
                    <svg xmlns="http://www.w3.org/2000/svg" class="zf cf ep" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="zf cf ep" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="zf cf ep" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="zf cf ep" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="zf cf ep" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                </div>
                <p class="qd bo xo">
                    "جزاك الله خيرا ميس
                    هدير على تعبك وصبرك مع الاولاد وكمان على المادة العلمية حتى اللهم بارك وقت البريك بيكون ألعاب
                    مفيدة و محمد بيكون مبسوط معاكى .. بالتوفيق دائما يارب ونتقابل فى المسابقة باذن الله 💪"
                </p>
            </blockquote>
            <blockquote class="dn qm dq fq kq xk rv sy z2 p5 rj">
                <img
                    src="/website/img/m-bot-logo.png"
                    class="em eg mf yj lk qj cq bq" alt="Testimonial 03">
                <p class="ld bo jo vo">محمد</p>
                <div class="fe re ki uf gj">
                    <svg xmlns="http://www.w3.org/2000/svg" class="zf cf ep" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="zf cf ep" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="zf cf ep" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="zf cf ep" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="zf cf ep" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                </div>
                <p class="qd bo xo">
                    "شكرا جداااااا
                    باشمهندسة هدير على تعبك مع الولاد في الكورس محمد راجع مبسوط ومتحمس انه اتعلم حاجات ميعرفهاش يا
                    رب بالنفع والفائدة ان شاء الله ."
                </p>
            </blockquote>
            <blockquote class="dn qm dq fq kq fl rv sy z2 p5 rj">
                <img
                    src="/website/img/html-5.png"
                    class="em eg mf yj lk qj cq bq" alt="Testimonial 04">
                <p class="ld bo jo vo">آسر</p>
                <div class="fe re ki uf gj">
                    <svg xmlns="http://www.w3.org/2000/svg" class="zf cf ep" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="zf cf ep" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="zf cf ep" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="zf cf ep" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="zf cf ep" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                </div>
                <p class="qd bo xo">
                    "الحمد لله و بجد بشكر حضرتك جدا على دعمك ليه"
                </p>
            </blockquote>
        </div>
    </div>
</section>

<section class="xm rk yv" id="feedback">
    <div class="lm bd o1 rv r2">
        <div class="ug">
            <h2 class="vo nq">We'd love to hear from you</h2>
            <p class="ug md co mo xo i3">
                Your Feedback will help us identify strengths, opportunities for improvement, and to better plan
                priorities.
            </p>
        </div>
        <ul class="db ce cj">
            <div>
                <img class="cb ue ef gg sb tb d5"
                     src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iMjY0Ljc1cHQiIGhlaWdodD0iMzc0Ljk5OTk5MXB0IiB2aWV3Qm94PSIwIDAgMjY0Ljc1IDM3NC45OTk5OTEiIHZlcnNpb249IjEuMiI+CjxkZWZzPgo8Y2xpcFBhdGggaWQ9ImNsaXAxIj4KICA8cGF0aCBkPSJNIDAuMDMxMjUgMC4xOTE0MDYgTCAyNjQuNSAwLjE5MTQwNiBMIDI2NC41IDI5OC45ODA0NjkgTCAwLjAzMTI1IDI5OC45ODA0NjkgWiBNIDAuMDMxMjUgMC4xOTE0MDYgIi8+CjwvY2xpcFBhdGg+CjxjbGlwUGF0aCBpZD0iY2xpcDIiPgogIDxwYXRoIGQ9Ik0gMjMuMTAxNTYyIDMwNi41MzEyNSBMIDEyMy4zNDM3NSAzMDYuNTMxMjUgTCAxMjMuMzQzNzUgMzc0LjgyMDMxMiBMIDIzLjEwMTU2MiAzNzQuODIwMzEyIFogTSAyMy4xMDE1NjIgMzA2LjUzMTI1ICIvPgo8L2NsaXBQYXRoPgo8L2RlZnM+CjxnIGlkPSJzdXJmYWNlMSI+CjxnIGNsaXAtcGF0aD0idXJsKCNjbGlwMSkiIGNsaXAtcnVsZT0ibm9uemVybyI+CjxwYXRoIHN0eWxlPSIgc3Ryb2tlOm5vbmU7ZmlsbC1ydWxlOmV2ZW5vZGQ7ZmlsbDpyZ2IoOTcuMjQ4ODQlLDgxLjU2ODkwOSUsNDUuODc4NjAxJSk7ZmlsbC1vcGFjaXR5OjE7IiBkPSJNIDExNS40MTQwNjIgMjkwLjM0NzY1NiBDIDEyMS4zMDA3ODEgMjg5LjMyMDMxMiAxMjcuMzgyODEyIDI4OC40ODgyODEgMTMxLjg2NzE4OCAyODYuMDU0Njg4IEMgMTI2Ljg3ODkwNiAyODIuNDU3MDMxIDEyNC4xNDQ1MzEgMjc2LjYxNzE4OCAxMTguMjc3MzQ0IDI3My44OTg0MzggQyAxMTcuMDkzNzUgMjc5LjE1NjI1IDExNi41MDc4MTIgMjg1IDExNS40MTQwNjIgMjkwLjM0NzY1NiBaIE0gMTIyLjU3MDMxMiAyMzguMTQ4NDM4IEMgMTIxLjc5Njg3NSAyNDUuNDQxNDA2IDEyMC42MzY3MTkgMjU2LjcxODc1IDExOS43MDcwMzEgMjY2LjAzNTE1NiBDIDEyNS41MzUxNTYgMjcwLjIxODc1IDEyOC45NzY1NjIgMjc2Ljc4OTA2MiAxMzUuNDQxNDA2IDI4MC4zMzU5MzggQyAxMzYuNDA2MjUgMjcyLjI0MjE4OCAxMzYuNjI1IDI2My40MDIzNDQgMTM5LjAxOTUzMSAyNTYuNzQyMTg4IEMgMTMzLjQ0OTIxOSAyNTAuNjI4OTA2IDEzMy4xNTIzNDQgMjM5LjI0NjA5NCAxMjIuNTcwMzEyIDIzOC4xNDg0MzggWiBNIDEzNC43MjI2NTYgMjM4LjE0ODQzOCBDIDEzNC44MTY0MDYgMjQwLjIyMjY1NiAxMzguMzc4OTA2IDI0NC45NzY1NjIgMTQwLjQ0OTIxOSAyNDcuNDQ1MzEyIEMgMTQxLjc1MzkwNiAyNDQuNjk1MzEyIDE0MS45MTQwNjIgMjQwLjgwNDY4OCAxNDIuNTkzNzUgMjM3LjQzMzU5NCBDIDEzOS42NjAxNTYgMjM3LjM2MzI4MSAxMzYuNzM0Mzc1IDIzNy4yOTI5NjkgMTM0LjcyMjY1NiAyMzguMTQ4NDM4IFogTSAxNzYuMjEwOTM4IDIyNi43MTA5MzggQyAxNzUuODEyNSAyMjYuNzA3MDMxIDE3NS4zOTg0MzggMjI3LjI4OTA2MiAxNzYuMjEwOTM4IDIyNy40MjU3ODEgQyAxODkuMjk2ODc1IDIyMS4yMDcwMzEgMjA0LjIwNzAzMSAyMTYuODA0Njg4IDIxMy4zOTg0MzggMjA2LjY5MTQwNiBDIDIxMi4yMTQ4NDQgMjAzLjU4MjAzMSAyMTAuNDY4NzUgMjAxLjAzNTE1NiAyMDcuNjc1NzgxIDE5OS41MzkwNjIgQyAxOTkuOTMzNTk0IDIxMS4zNDM3NSAxODguODgyODEyIDIxOS44Mzk4NDQgMTc2LjIxMDkzOCAyMjYuNzEwOTM4IFogTSAyMTEuOTY4NzUgMTk0LjUzNTE1NiBDIDIxNC4zNjMyODEgMTk3LjE0ODQzOCAyMTYuNDc2NTYyIDIwMC4wMzkwNjIgMjE4LjQwMjM0NCAyMDMuMTEzMjgxIEMgMjI3Ljg1MTU2MiAxOTUuODc1IDIzNi4xMTMyODEgMTg3LjQ1MzEyNSAyNDAuNTc4MTI1IDE3NS4yMzA0NjkgQyAyMzcuMjc3MzQ0IDE2OC43NTc4MTIgMjMxLjgwODU5NCAxNjQuNDQ5MjE5IDIyNy43MDcwMzEgMTU4Ljc4NTE1NiBDIDIyMy43MTg3NSAxNzEuOTYwOTM4IDIxOC43MDcwMzEgMTg0LjEwOTM3NSAyMTEuOTY4NzUgMTk0LjUzNTE1NiBaIE0gMjI5Ljg1MTU2MiAxNTAuOTIxODc1IEMgMjM0LjU1MDc4MSAxNTYuOTQxNDA2IDIzOC4zMTY0MDYgMTYzLjkwNjI1IDI0NC44NjcxODggMTY4LjA4MjAzMSBDIDI0OS44NzUgMTU4Ljc4MTI1IDI1MS4zMDg1OTQgMTQ1LjkxNzk2OSAyNTQuODc4OTA2IDEzNS4xOTE0MDYgQyAyNDguNTE5NTMxIDEyNy40ODgyODEgMjQwLjYyNSAxMjEuMzEyNSAyMzQuMTQwNjI1IDExMy43MzgyODEgQyAyMzYuMDE1NjI1IDEyNS45Njg3NSAyMzIuNTE5NTMxIDEzOS4xODc1IDIyOS44NTE1NjIgMTUwLjkyMTg3NSBaIE0gMjMzLjQyNTc4MSAxMDUuMTYwMTU2IEMgMjQxLjIwNzAzMSAxMTIuMTU2MjUgMjQ3Ljc1IDEyMC4zOTQ1MzEgMjU2LjMxMjUgMTI2LjYwOTM3NSBDIDI1Ny42MTcxODggMTExLjQ3NjU2MiAyNTQuMzQzNzUgOTcuOTM3NSAyNTAuNTg5ODQ0IDg1Ljg1NTQ2OSBDIDI0My40Mzc1IDc5LjQxNzk2OSAyMzUuNjg3NSA3My41ODIwMzEgMjI2LjI3MzQzOCA2OS40MTAxNTYgQyAyMzAuNTcwMzEyIDgwLjMyNDIxOSAyMzQuMzI0MjE5IDkwLjY5MTQwNiAyMzMuNDI1NzgxIDEwNS4xNjAxNTYgWiBNIDIxOS44MzU5MzggNTguNjgzNTk0IEMgMjI2Ljg5NDUzMSA2NC45NTcwMzEgMjM3LjUwNzgxMiA2Ni4wNzAzMTIgMjQ0Ljg2NzE4OCA3Mi45ODQzNzUgQyAyMzQuMTEzMjgxIDUxLjgxNjQwNiAyMTYuNTkzNzUgMzUuNzIyNjU2IDE5NC4wODk4NDQgMzAuMDg1OTM4IEMgMjA1LjU5NzY1NiAzNi42MDU0NjkgMjEwLjE2MDE1NiA1MC4wODIwMzEgMjE5LjgzNTkzOCA1OC42ODM1OTQgWiBNIDE5Ni4yMzQzNzUgMjA1LjI1NzgxMiBDIDIxMi43OTY4NzUgMTg4Ljg3ODkwNiAyMjYuODA0Njg4IDE1Ny45OTIxODggMjI5LjEzMjgxMiAxMjguNzUzOTA2IEMgMjMyLjYzMjgxMiA4NC44OTQ1MzEgMjE3LjI5Mjk2OSA1OC43NzM0MzggMTk1LjUxOTUzMSAzNy45NDUzMTIgQyAxODYuODQ3NjU2IDI5LjY1MjM0NCAxNzQuMjI2NTYyIDI0LjQxNDA2MiAxNjEuOTA2MjUgMTkuMzU5Mzc1IEMgMTM5LjYwMTU2MiAxMC4yMDMxMjUgMTE3LjQ1NzAzMSA0LjY2NDA2MiA4Ny41MjM0MzggOS4zNDc2NTYgQyA2OS4wNTQ2ODggMTIuMjM4MjgxIDQyLjg3ODkwNiAyMi41ODIwMzEgMjYuMDE1NjI1IDMxLjUxNTYyNSBDIDIwLjY3MTg3NSAzNC4zNDM3NSAxMC4yMTQ4NDQgNDAuMTE3MTg4IDkuNTY2NDA2IDQzLjY3MTg3NSBDIDguOTg0Mzc1IDQ2Ljg1MTU2MiAxMy43NTc4MTIgNTMuNjMyODEyIDE2LjAwMzkwNiA1Ny4yNTM5MDYgQyAyNC4zMTI1IDcwLjY1NjI1IDMzLjA0Mjk2OSA4Mi40NDUzMTIgMzkuNjAxNTYyIDk1LjE0ODQzOCBDIDU0LjkwNjI1IDg1LjA0Mjk2OSA3Ni4zNzUgNzcuMzM1OTM4IDk3LjUzNTE1NiA3OC43MDMxMjUgQyAxMzguOTUzMTI1IDgxLjM4MjgxMiAxNzIuNjE3MTg4IDEyMy41MDM5MDYgMTU0LjAzOTA2MiAxNjMuNzg5MDYyIEMgMTM2LjY3NTc4MSAxODkuNDY0ODQ0IDk4LjQxMDE1NiAyMDAuNjE3MTg4IDU2LjA1NDY4OCAxOTYuNjc5Njg4IEMgNTAuNTkzNzUgMjIyLjY4MzU5NCA0Mi44MDg1OTQgMjQ4LjkzMzU5NCA0NC42MTMyODEgMjc4LjE5MTQwNiBDIDY3LjE5NTMxMiAyODIuMDM5MDYyIDkwLjM2NzE4OCAyODQuMTUyMzQ0IDExMC40MTAxNTYgMjg4LjkxNDA2MiBDIDExMy41NzAzMTIgMjcwLjI1NzgxMiAxMTQuNDE0MDYyIDI0OC40OTIxODggMTE5LjcwNzAzMSAyMzAuMjg1MTU2IEMgMTU0LjQyMTg3NSAyMzMuNjE3MTg4IDE3OS45NTMxMjUgMjIxLjM2MzI4MSAxOTYuMjM0Mzc1IDIwNS4yNTc4MTIgWiBNIDE1MS4xNzU3ODEgMjQxLjAwNzgxMiBDIDE0NS4wMzUxNTYgMjU2LjA4MjAzMSAxNDUuMDc4MTI1IDI3Ny4zMzk4NDQgMTM5LjczNDM3NSAyOTMuMjA3MDMxIEMgMTMwLjk3NjU2MiAyOTMuMzYzMjgxIDEyMy44NzEwOTQgMjk4LjgxMjUgMTE1LjQxNDA2MiAyOTguOTI1NzgxIEMgMTA5LjU4OTg0NCAyOTkgMTA1LjEwNTQ2OSAyOTUuOTE3OTY5IDk3LjUzNTE1NiAyOTQuNjMyODEyIEMgODguODQ3NjU2IDI5My4xNjAxNTYgNzYuNTc4MTI1IDI5Mi4yMTQ4NDQgNjYuMDY2NDA2IDI5MS4wNTg1OTQgQyA1Ny4zODI4MTIgMjkwLjEwOTM3NSA0MC45NjA5MzggMjg4LjY0ODQzOCAzNy40NTcwMzEgMjg0LjYyNSBDIDMzLjcxNDg0NCAyODAuMzE2NDA2IDM1Ljg1OTM3NSAyNjYuNDQxNDA2IDM2Ljc0NjA5NCAyNTkuNjAxNTYyIEMgMzcuODUxNTYyIDI1MS4wMTk1MzEgMzkuMTg3NSAyNDEuNTM5MDYyIDQwLjMyMDMxMiAyMzUuMjg5MDYyIEMgNDMuNDIxODc1IDIxOC4xNzE4NzUgNDUuMDM1MTU2IDIwMS44MjgxMjUgNDkuNjE3MTg4IDE4OC4xMDE1NjIgQyA2NC4wMzUxNTYgMTg4LjQ1MzEyNSA3OC4zNzEwOTQgMTg5LjMzMjAzMSA5Mi41MzEyNSAxODguMTAxNTYyIEMgMTE2LjE4NzUgMTg2LjAzNTE1NiAxNDAuNzM0Mzc1IDE3Mi45MDYyNSAxNDkuMDMxMjUgMTU3LjM1NTQ2OSBDIDE1OS45NjQ4NDQgMTM2Ljg3NSAxNDEuMzk4NDM4IDEwNy4xNjc5NjkgMTI4LjI4OTA2MiA5OC4wMDc4MTIgQyAxMTEuNTcwMzEyIDg2LjMyNDIxOSA3OC4yODkwNjIgODUuMjQyMTg4IDU3LjQ4NDM3NSA5NC40Mjk2ODggQyA1MS43ODkwNjIgOTYuOTUzMTI1IDQzLjY2Nzk2OSAxMDUuODUxNTYyIDM3LjQ1NzAzMSAxMDUuMTYwMTU2IEMgMzEuMDQyOTY5IDEwNC40NDE0MDYgMjAuODc1IDgwLjI4MTI1IDE3LjQzMzU5NCA3NS4xMjg5MDYgQyAxMy40Mjk2ODggNjkuMTI1IC0yLjA2NjQwNiA1My4xOTkyMTkgMC4yNjk1MzEgNDIuMjM4MjgxIEMgMS4yMTg3NSAzNy43NzczNDQgMTguMTg3NSAyNi42NTYyNSAyMi40NDE0MDYgMjQuMzYzMjgxIEMgMzIuMDAzOTA2IDE5LjIwNzAzMSA0NSAxNC44MzU5MzggNTcuNDg0Mzc1IDEwLjA2MjUgQyA3Ny43NSAyLjMxMjUgOTcuNDIxODc1IC0xLjMwNDY4OCAxMjQuNzE0ODQ0IDAuNzY5NTMxIEMgMTQwLjY2NDA2MiAxLjk4MDQ2OSAxNTIuMDkzNzUgOS4xNjAxNTYgMTY2LjkxMDE1NiAxMi45MjE4NzUgQyAxNzkuMzQzNzUgMTYuMDgyMDMxIDE5MC4xNjAxNTYgMTcuNDkyMTg4IDIwMS4yNDIxODggMjIuMjE4NzUgQyAyMDkuNDM3NSAyNS43MTQ4NDQgMjE4LjIxODc1IDI5LjgzOTg0NCAyMjMuNDEwMTU2IDMzLjY2MDE1NiBDIDI0OC4zOTA2MjUgNTIuMDI3MzQ0IDI3MC40NTcwMzEgOTAuOTAyMzQ0IDI2My40NjQ4NDQgMTM0LjQ3NjU2MiBDIDI2Mi40Mzc1IDE0MC44NDM3NSAyNTkuNTc4MTI1IDE0OC4zMzU5MzggMjU3Ljc0MjE4OCAxNTUuMjEwOTM4IEMgMjU1LjkyNTc4MSAxNjIuMDE5NTMxIDI1My43OTY4NzUgMTY5LjE3OTY4OCAyNTEuMzA0Njg4IDE3NC41MTU2MjUgQyAyMzQuOTI1NzgxIDIwOS41NDI5NjkgMTk5Ljc1IDIzNi4xMjUgMTUxLjE3NTc4MSAyNDEuMDA3ODEyICIvPgo8L2c+CjxnIGNsaXAtcGF0aD0idXJsKCNjbGlwMikiIGNsaXAtcnVsZT0ibm9uemVybyI+CjxwYXRoIHN0eWxlPSIgc3Ryb2tlOm5vbmU7ZmlsbC1ydWxlOmV2ZW5vZGQ7ZmlsbDpyZ2IoOTcuMjQ4ODQlLDgxLjU2ODkwOSUsNDUuODc4NjAxJSk7ZmlsbC1vcGFjaXR5OjE7IiBkPSJNIDkzLjk2MDkzOCAzNjMuOTkyMTg4IEMgOTguNDQ1MzEyIDM2My40Njg3NSAxMDEuOTE0MDYyIDM2MS45MzM1OTQgMTA2LjExNzE4OCAzNjEuMTMyODEyIEMgMTAyLjQ3MjY1NiAzNTcuMTQ4NDM4IDk5Ljk0NTMxMiAzNTIuMDUwNzgxIDk1LjM5MDYyNSAzNDguOTc2NTYyIEMgOTUuNTMxMjUgMzU0LjU5NzY1NiA5My4yNDYwOTQgMzU3Ljc5Mjk2OSA5My45NjA5MzggMzYzLjk5MjE4OCBaIE0gMTEzLjI2OTUzMSAzMzUuMzkwNjI1IEMgMTE0LjE5NTMxMiAzMzIuNSAxMTUuMjI2NTYyIDMyOS43MTg3NSAxMTUuNDE0MDYyIDMyNi4wOTc2NTYgQyAxMTIuMzI0MjE5IDMyNi4wODk4NDQgMTEwLjg3ODkwNiAzMjQuNDM3NSAxMDcuNTUwNzgxIDMyNC42NjQwNjIgQyAxMDguNjA1NDY5IDMyOS4wOTM3NSAxMTEuMjE0ODQ0IDMzMS45NjA5MzggMTEzLjI2OTUzMSAzMzUuMzkwNjI1IFogTSAxMDkuNjk1MzEyIDM1NC42OTUzMTIgQyAxMDkuNjQ4NDM4IDM1MC4zNTkzNzUgMTEwLjk5NjA5NCAzNDcuNDE3OTY5IDExMS44Mzk4NDQgMzQzLjk3MjY1NiBDIDEwNy4wMjczNDQgMzM3LjgyMDMxMiAxMDUuMDcwMzEyIDMyOC44MTI1IDk4Ljk2NDg0NCAzMjMuOTQ5MjE5IEMgOTYuMjIyNjU2IDMzOS40MDYyNSA5OS4zNjcxODggMzQ5LjI2MTcxOSAxMDkuNjk1MzEyIDM1NC42OTUzMTIgWiBNIDMzLjg4MjgxMiAzMTguMjMwNDY5IEMgMzEuNTMxMjUgMzMwLjM3ODkwNiAzMi4wNTQ2ODggMzQ0LjUxNTYyNSAzMS43MzgyODEgMzU4LjI3MzQzOCBDIDQ2Ljk1MzEyNSAzNjMuNzQ2MDk0IDcwLjQzNzUgMzY0LjEyODkwNiA4Ni44MDg1OTQgMzY2LjEzNjcxOSBDIDkwLjIxNDg0NCAzNTMuNzY1NjI1IDkzLjA3MDMxMiAzMzYuMTc5Njg4IDkzLjk2MDkzOCAzMjMuOTQ5MjE5IEMgNzMuOTgwNDY5IDMyMi40MDIzNDQgNTIuOTE0MDYyIDMxMS44NDc2NTYgMzMuODgyODEyIDMxOC4yMzA0NjkgWiBNIDEyMy4yODEyNSAzMjEuMDg5ODQ0IEMgMTIxLjQ0MTQwNiAzMzguMDc0MjE5IDExNy43NDIxODggMzUzLjIxMDkzOCAxMTMuMjY5NTMxIDM2Ny41NjY0MDYgQyAxMDUuOTQ1MzEyIDM2Ny43NzM0MzggOTguNzg5MDYyIDM3My40NDkyMTkgOTAuMzg2NzE5IDM3NC43MTQ4NDQgQyA3OS43NjE3MTkgMzc2LjMxNjQwNiA2Ni4xMjEwOTQgMzczLjIzMDQ2OSA1NC42MjUgMzcxLjg1NTQ2OSBDIDQyLjU1ODU5NCAzNzAuNDE0MDYyIDMwLjE5OTIxOSAzNzAuNzMwNDY5IDIzLjE1NjI1IDM2NC43MDcwMzEgQyAyMy4zMzU5MzggMzUzLjI3NzM0NCAyNC44MjAzMTIgMzQyLjc0NjA5NCAyNS4zMDQ2ODggMzMxLjgxNjQwNiBDIDI1LjUgMzI3LjMyMDMxMiAyNC4wOTc2NTYgMzIxLjU0Mjk2OSAyNS4zMDQ2ODggMzE2LjgwMDc4MSBDIDI3LjM2MzI4MSAzMDguNjY3OTY5IDM5LjI1IDMwNS45MDYyNSA1MC4zMzIwMzEgMzA2Ljc4OTA2MiBDIDY0LjczNDM3NSAzMDcuOTQxNDA2IDgzLjkwNjI1IDMxNC43NjE3MTkgMTAwLjM5ODQzOCAzMTYuMDg1OTM4IEMgMTA5LjY2NDA2MiAzMTYuODMyMDMxIDExNy44MjgxMjUgMzE2LjQzMzU5NCAxMjMuMjgxMjUgMzIxLjA4OTg0NCAiLz4KPC9nPgo8L2c+Cjwvc3ZnPgo="
                     alt="">
                <img class="cb ue ef gg ub vb d5"
                     src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iMjIxLjI1cHQiIGhlaWdodD0iMzc0Ljk5OTk4OXB0IiB2aWV3Qm94PSIwIDAgMjIxLjI1IDM3NC45OTk5ODkiIHZlcnNpb249IjEuMiI+CjxkZWZzPgo8Y2xpcFBhdGggaWQ9ImNsaXAxIj4KICA8cGF0aCBkPSJNIDEgMC42MzI4MTIgTCAyMjAuNTAzOTA2IDAuNjMyODEyIEwgMjIwLjUwMzkwNiAzNzQgTCAxIDM3NCBaIE0gMSAwLjYzMjgxMiAiLz4KPC9jbGlwUGF0aD4KPC9kZWZzPgo8ZyBpZD0ic3VyZmFjZTEiPgo8ZyBjbGlwLXBhdGg9InVybCgjY2xpcDEpIiBjbGlwLXJ1bGU9Im5vbnplcm8iPgo8cGF0aCBzdHlsZT0iIHN0cm9rZTpub25lO2ZpbGwtcnVsZTpldmVub2RkO2ZpbGw6cmdiKDk3LjI0ODg0JSw4MS41Njg5MDklLDQ1Ljg3ODYwMSUpO2ZpbGwtb3BhY2l0eToxOyIgZD0iTSAxMS4xNTYyNSAxOTAuMTQ0NTMxIEMgNS41NjI1IDE2OS4wODk4NDQgMS4zODY3MTkgMTUxLjEwOTM3NSA3LjIxNDg0NCAxMjkuMzU5Mzc1IEMgMTIuNjI1IDEwOS4xNjAxNTYgMjguNjA5Mzc1IDkzLjExNzE4OCA0Ni43MTA5MzggODMuNTI3MzQ0IEMgODguNzgxMjUgNjEuMjczNDM4IDE0MS42ODc1IDc1LjQ0MTQwNiAxNjYuOTg0Mzc1IDExNS43NTc4MTIgQyAxNzcuODc1IDEzMy4xMDU0NjkgMTgzLjY5NTMxMiAxNTQuOTk2MDk0IDE3OC4yODEyNSAxNzUuMTk5MjE5IEMgMTcyLjQ1MzEyNSAxOTYuOTQ1MzEyIDE1OS44NDc2NTYgMjEwLjQzMzU5NCAxNDQuNDcyNjU2IDIyNS44NjcxODggQyAxMzkuOTY4NzUgMjMwLjM5MDYyNSAxMzUuNDY0ODQ0IDIzNC45MTAxNTYgMTMxLjI5Mjk2OSAyMzkuNzUgQyAxMjkuMzY3MTg4IDI0MS45ODgyODEgMTI3LjMwODU5NCAyNDQuMTY0MDYyIDEyNS4yOTY4NzUgMjQ2LjMyODEyNSBDIDEyMi45NDkyMTkgMjQ4Ljg2MzI4MSAxMjAuNjA1NDY5IDI1MS4zODY3MTkgMTE4LjI5Njg3NSAyNTMuOTY0ODQ0IEMgMTE1LjAxNTYyNSAyNTcuNjIxMDk0IDEwOC4yODkwNjIgMjY0Ljk4NDM3NSAxMDYuNDg4MjgxIDI2OS40MjU3ODEgQyAxMDUuNDQ1MzEyIDI3MS45NzI2NTYgMTA0LjU5NzY1NiAyNzQuNjE3MTg4IDEwMy43NDIxODggMjc3LjIzODI4MSBDIDk5LjU1NDY4OCAyOTAuMTA5Mzc1IDk0LjU1MDc4MSAzMDUuNjg3NSA3Ny41MDM5MDYgMzAxLjEyNSBMIDMxLjUzNTE1NiAyODguODAwNzgxIEMgMTQuNDkyMTg4IDI4NC4yMzgyODEgMTcuOTM3NSAyNjguMjM0Mzc1IDIwLjc0NjA5NCAyNTUuMDAzOTA2IEMgMjEuMzE2NDA2IDI1Mi4yOTY4NzUgMjEuOTAyMzQ0IDI0OS41OTM3NSAyMi4yODUxNTYgMjQ2Ljg1MTU2MiBDIDIyLjkzNzUgMjQyLjEwOTM3NSAyMC44MDA3ODEgMjMyLjM2NzE4OCAxOS43ODEyNSAyMjcuNTU0Njg4IEMgMTkuMDY2NDA2IDIyNC4xOTE0MDYgMTguMzAwNzgxIDIyMC44MjgxMjUgMTcuNTMxMjUgMjE3LjQ1MzEyNSBDIDE2Ljg2NzE4OCAyMTQuNTc0MjE5IDE2LjE3MTg3NSAyMTEuNjYwMTU2IDE1LjYyNSAyMDguNzYxNzE5IEMgMTQuNDQxNDA2IDIwMi40ODA0NjkgMTIuNzkyOTY5IDE5Ni4zMTI1IDExLjE1NjI1IDE5MC4xNDQ1MzEgWiBNIDExMS40Mjk2ODggNTkuMjQ2MDk0IEwgMTI2LjAxNTYyNSA0LjgwNDY4OCBDIDEyOS45NDE0MDYgNS43MDMxMjUgMTMzLjgzMjAzMSA2LjczODI4MSAxMzcuNjc5Njg4IDcuOTI1NzgxIEwgMTIzLjA4NTkzOCA2Mi4zNjcxODggQyAxMTkuMjYxNzE5IDYxLjExNzE4OCAxMTUuMzcxMDk0IDYwLjA3MDMxMiAxMTEuNDI5Njg4IDU5LjI0NjA5NCBaIE0gMjUuNTE5NTMxIDEzLjUxNTYyNSBDIDI5LjI2OTUzMSAxMS45Mjk2ODggMzMuMDMxMjUgMTAuNDkyMTg4IDM2LjgzMjAzMSA5LjIxMDkzOCBMIDUxLjQ1MzEyNSA2My43NzM0MzggQyA0Ny42OTE0MDYgNjUuMjAzMTI1IDQzLjk3MjY1NiA2Ni44NTU0NjkgNDAuMzIwMzEyIDY4LjcyNjU2MiBaIE0gNzQuODEyNSAxLjI0MjE4OCBDIDc4LjgzNTkzOCAwLjg4MjgxMiA4Mi44NTE1NjIgMC42ODM1OTQgODYuODcxMDk0IDAuNjMyODEyIEwgODYuODcxMDk0IDU2Ljk0OTIxOSBDIDgyLjg1MTU2MiA1Ny4wMzkwNjIgNzguODI4MTI1IDU3LjM1MTU2MiA3NC44MjAzMTIgNTcuODg2NzE5IFogTSAxNzMuNjY3OTY5IDIzLjg3ODkwNiBDIDE3Ny4xMjEwOTQgMjUuOTM3NSAxODAuNSAyOC4xMjg5MDYgMTgzLjgwNDY4OCAzMC40NDE0MDYgTCAxNTUuNDcyNjU2IDc5LjUwMzkwNiBDIDE1Mi4yNjk1MzEgNzcuMDI3MzQ0IDE0OC45Mzc1IDc0Ljc1IDE0NS41MDM5MDYgNzIuNjYwMTU2IFogTSAyMTIuNzAzMTI1IDU2LjMzMjAzMSBDIDIxNS4zNTE1NjIgNTkuMzQzNzUgMjE3Ljg5ODQzOCA2Mi40ODQzNzUgMjIwLjM0NzY1NiA2NS43MjI2NTYgTCAxNzkuOTI5Njg4IDEwNi4xNDA2MjUgQyAxNzcuNzAzMTI1IDEwMi42ODc1IDE3NS4zMDg1OTQgOTkuNDAyMzQ0IDE3Mi43NTM5MDYgOTYuMjg1MTU2IFogTSAzMy41MjczNDQgMzczLjE2Nzk2OSBDIDI5LjUzOTA2MiAzNzIuMDIzNDM4IDI2LjQ2ODc1IDM3MC41OTM3NSAyNC42ODM1OTQgMzY3LjQ5NjA5NCBDIDIzLjA0Mjk2OSAzNjQuNjM2NzE5IDIwLjA4MjAzMSAzNjIuMjk2ODc1IDE3Ljg4NjcxOSAzNTkuNzk2ODc1IEMgMTcuMzg2NzE5IDM1OS4yMjY1NjIgMTcuMzIwMzEyIDM1OC40Mjk2ODggMTcuNzIyNjU2IDM1Ny43ODEyNSBDIDE4LjEyMTA5NCAzNTcuMTI1IDE4Ljg3NSAzNTYuODQ3NjU2IDE5LjYwOTM3NSAzNTcuMDM1MTU2IEwgMzYuNjYwMTU2IDM2MS42MDkzNzUgTCA1My43MTQ4NDQgMzY2LjE3NTc4MSBDIDU0LjQ0OTIxOSAzNjYuMzcxMDk0IDU0Ljk0OTIxOSAzNjcuMDAzOTA2IDU0Ljk3NjU2MiAzNjcuNzU3ODEyIEMgNTUgMzY4LjUxOTUzMSA1NC41NDI5NjkgMzY5LjE3OTY4OCA1My44MjAzMTIgMzY5LjQyMTg3NSBDIDUwLjY2NDA2MiAzNzAuNDk2MDk0IDQ2LjkzNzUgMzcxLjA0Mjk2OSA0NC4wNzQyMTkgMzcyLjcwMzEyNSBDIDQwLjk5NjA5NCAzNzQuNDg0Mzc1IDM3LjYxNzE4OCAzNzQuMTgzNTk0IDMzLjU4NTkzOCAzNzMuMTg3NSBDIDMzLjU3MDMxMiAzNzMuMTc1NzgxIDMzLjU0Njg3NSAzNzMuMTY3OTY5IDMzLjUyNzM0NCAzNzMuMTY3OTY5IFogTSAxMi44MjgxMjUgMzM2LjA4OTg0NCBMIDcwLjA1ODU5NCAzNTEuNDI5Njg4IEMgNzUuMzgyODEyIDM1Mi44NTU0NjkgNzguOTE3OTY5IDM1Ny4wODIwMzEgNzcuOTE0MDYyIDM2MC44MTY0MDYgTCA3Ny43NjU2MjUgMzYxLjM3ODkwNiBDIDc2Ljc2OTUzMSAzNjUuMTA5Mzc1IDcxLjU4OTg0NCAzNjYuOTk2MDk0IDY2LjI2NTYyNSAzNjUuNTcwMzEyIEwgOS4wMzkwNjIgMzUwLjIzODI4MSBDIDMuNzE0ODQ0IDM0OC44MDQ2ODggMC4xNzk2ODggMzQ0LjU4MjAzMSAxLjE3OTY4OCAzNDAuODUxNTYyIEwgMS4zMjQyMTkgMzQwLjI4OTA2MiBDIDIuMzI4MTI1IDMzNi41NTQ2ODggNy41IDMzNC42Njc5NjkgMTIuODI4MTI1IDMzNi4wODk4NDQgWiBNIDE3LjY4MzU5NCAzMTcuOTgwNDY5IEwgNzQuOTAyMzQ0IDMzMy4zMjAzMTIgQyA4MC4yMzA0NjkgMzM0Ljc0MjE4OCA4My43NjU2MjUgMzM4Ljk3MjY1NiA4Mi43Njk1MzEgMzQyLjcwMzEyNSBMIDgyLjYxNzE4OCAzNDMuMjYxNzE5IEMgODEuNjE3MTg4IDM0NyA3Ni40NDUzMTIgMzQ4Ljg4NjcxOSA3MS4xMTcxODggMzQ3LjQ2MDkzOCBMIDEzLjg5MDYyNSAzMzIuMTI4OTA2IEMgOC41NjY0MDYgMzMwLjY5NTMxMiA1LjAzMTI1IDMyNi40NzI2NTYgNi4wMzEyNSAzMjIuNzQ2MDk0IEwgNi4xNzU3ODEgMzIyLjE4NzUgQyA3LjE3NTc4MSAzMTguNDQ5MjE5IDEyLjM1NTQ2OSAzMTYuNTU4NTk0IDE3LjY4MzU5NCAzMTcuOTgwNDY5IFogTSAyMi42NDg0MzggMjk5LjQ0MTQwNiBMIDc5Ljg3NSAzMTQuNzg1MTU2IEMgODUuMTk1MzEyIDMxNi4yMDcwMzEgODguNzM4MjgxIDMyMC40Mjk2ODggODcuNzM0Mzc1IDMyNC4xNjc5NjkgTCA4Ny41ODU5MzggMzI0LjczMDQ2OSBDIDg2LjU4OTg0NCAzMjguNDU3MDMxIDgxLjQxMDE1NiAzMzAuMzUxNTYyIDc2LjA4MjAzMSAzMjguOTI1NzgxIEwgMTguODU1NDY5IDMxMy41OTM3NSBDIDEzLjUzNTE1NiAzMTIuMTY0MDYyIDkuOTkyMTg4IDMwNy45Mzc1IDEwLjk5NjA5NCAzMDQuMjA3MDMxIEwgMTEuMTQ0NTMxIDMwMy42NTIzNDQgQyAxMi4xNDg0MzggMjk5LjkxNDA2MiAxNy4zMjAzMTIgMjk4LjAyMzQzOCAyMi42NDg0MzggMjk5LjQ0MTQwNiBaIE0gMzQuNjAxNTYyIDI3Mi45MTQwNjIgQyAzNC45NzI2NTYgMjczLjA1ODU5NCAzNS40MjU3ODEgMjczLjE5MTQwNiAzNS42OTE0MDYgMjczLjI2NTYyNSBMIDgxLjY3MTg3NSAyODUuNTc4MTI1IEMgODEuOTQxNDA2IDI4NS42NTIzNDQgODIuMzk4NDM4IDI4NS43NjE3MTkgODIuNzg1MTU2IDI4NS44MTI1IEMgODQuOTAyMzQ0IDI4My40MDYyNSA4Ny41NzgxMjUgMjc0LjkyMTg3NSA4OC40NDE0MDYgMjcyLjI1NzgxMiBDIDg5LjQyMTg3NSAyNjkuMjY1NjI1IDkwLjM5ODQzOCAyNjYuMjg5MDYyIDkxLjU3ODEyNSAyNjMuMzcxMDk0IEMgOTQuNDQ5MjE5IDI1Ni4zMDg1OTQgMTAxLjE3OTY4OCAyNDguOTI5Njg4IDEwNi4zMjQyMTkgMjQzLjE5OTIxOSBDIDEwOC42OTE0MDYgMjQwLjU3ODEyNSAxMTEuMDkzNzUgMjM3Ljk4NDM3NSAxMTMuNTA3ODEyIDIzNS4zODI4MTIgQyAxMTUuMzkwNjI1IDIzMy4zNTkzNzUgMTE3LjI5Njg3NSAyMzEuMzQzNzUgMTE5LjEwMTU2MiAyMjkuMjUgQyAxMjMuNTI3MzQ0IDIyNC4xMTcxODggMTI4LjI4OTA2MiAyMTkuMzA0Njg4IDEzMy4wNzQyMTkgMjE0LjUwNzgxMiBDIDE0Ni4yMDMxMjUgMjAxLjMzNTkzOCAxNTcuNzg5MDYyIDE4OS41MTE3MTkgMTYyLjczODI4MSAxNzEuMDM1MTU2IEMgMTY2Ljk2NDg0NCAxNTUuMjgxMjUgMTYxLjgxNjQwNiAxMzcuNzg1MTU2IDE1My4zNTkzNzUgMTI0LjMyNDIxOSBDIDEzMi41NDI5NjkgOTEuMTIxMDk0IDg4Ljg2NzE4OCA3OS40MjU3ODEgNTQuMjM4MjgxIDk3Ljc1MzkwNiBDIDQwLjE4MzU5NCAxMDUuMTk1MzEyIDI2Ljk4MDQ2OSAxMTcuNzY5NTMxIDIyLjc1NzgxMiAxMzMuNTE5NTMxIEMgMTcuODA0Njg4IDE1MiAyMS45MjU3ODEgMTY4LjAzMTI1IDI2LjcwNzAzMSAxODYuMDExNzE5IEMgMjguNDQ5MjE5IDE5Mi41NjI1IDMwLjE3NTc4MSAxOTkuMDk3NjU2IDMxLjQzNzUgMjA1Ljc1NzgxMiBDIDMxLjk0OTIxOSAyMDguNDgwNDY5IDMyLjYwMTU2MiAyMTEuMTc5Njg4IDMzLjIxNDg0NCAyMTMuODY3MTg4IEMgMzQuMDAzOTA2IDIxNy4zMjgxMjUgMzQuNzg5MDYyIDIyMC43Njk1MzEgMzUuNTI3MzQ0IDIyNC4yMzA0NjkgQyAzNy4xMTMyODEgMjMxLjc2MTcxOSAzOS4yNjE3MTkgMjQxLjUxMTcxOSAzOC4yMTg3NSAyNDkuMDc0MjE5IEMgMzcuNzg1MTU2IDI1Mi4xODc1IDM3LjEzMjgxMiAyNTUuMjUzOTA2IDM2LjQ4MDQ2OSAyNTguMzM1OTM4IEMgMzUuOTEwMTU2IDI2MS4wNzgxMjUgMzMuOTc2NTYyIDI2OS43NjE3MTkgMzQuNjAxNTYyIDI3Mi45MTQwNjIgWiBNIDM0LjYwMTU2MiAyNzIuOTE0MDYyICIvPgo8L2c+CjwvZz4KPC9zdmc+Cg=="
                     alt="">
            </div>
            <div class="db qc uf lm om bd pk xp rj oz pz mv q2 q4">
                @if(Session::has('success'))
                    <div style="color: green;">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <form class="xd" method="POST" action="{{ route('mti.feedback') }}">
                    @csrf
                    <div>
                        <label for="name" class="yd vo io eo">Name *</label>
                        <input id="name" name="name" placeholder="your name"
                               class="uf gm pd eo io wo jp fq kq yj aq ze kp sj gk ir mr kr" required="">
                        <div data-lastpass-icon-root="true"
                             style="position: relative !important; height: 0 !important; width: 0 !important; float: left !important;"></div>

                        @error('name')
                        <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="ae">
                        <label for="email" class="yd vo io eo">Email *</label>
                        <input id="email" type="email" name="email" placeholder="email@example.com"
                               class="uf gm pd eo io wo jp fq kq yj aq ze kp sj gk ir mr kr" required="">
                        @error('email')
                        <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="ae">
                        <label for="phone" class="yd vo io eo">Phone</label>
                        <input id="phone" name="phone" placeholder="01123456789"
                               class="uf gm pd eo io wo jp fq kq yj aq ze kp sj gk ir mr kr">
                    </div>
                    <div class="ae">
                        <label for="feedback" class="yd vo io eo">Feedback *</label>
                        <textarea id="feedback" type="text" name="feedback" placeholder="feedback" rows="7"
                                  class="uf gm pd eo io wo jp fq kq yj aq kp sj gk ir mr kr" required=""></textarea>
                        @error('feedback')
                        <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="re ki ae">
                        <button href="#" class="bo ko vo uk qq yq">Send message</button>
                    </div>
                </form>
            </div>
        </ul>
    </div>
</section>

<section class="rm pk wv">
    <div class="rg lm bd rv r2">
        <img class="bd fg"
             src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iMjIxLjI1cHQiIGhlaWdodD0iOTMuNzQ5OTk3cHQiIHZpZXdCb3g9IjAgMCAyMjEuMjUgOTMuNzQ5OTk3IiB2ZXJzaW9uPSIxLjIiPgo8ZGVmcz4KPGNsaXBQYXRoIGlkPSJjbGlwMSI+CiAgPHBhdGggZD0iTSAzNyA0MCBMIDE4MyA0MCBMIDE4MyA5My40Njg3NSBMIDM3IDkzLjQ2ODc1IFogTSAzNyA0MCAiLz4KPC9jbGlwUGF0aD4KPGNsaXBQYXRoIGlkPSJjbGlwMiI+CiAgPHBhdGggZD0iTSAxMDggMC4xNjc5NjkgTCAxMTIgMC4xNjc5NjkgTCAxMTIgMjggTCAxMDggMjggWiBNIDEwOCAwLjE2Nzk2OSAiLz4KPC9jbGlwUGF0aD4KPGNsaXBQYXRoIGlkPSJjbGlwMyI+CiAgPHBhdGggZD0iTSAxOTMgNzcgTCAyMjAuNTAzOTA2IDc3IEwgMjIwLjUwMzkwNiA4OSBMIDE5MyA4OSBaIE0gMTkzIDc3ICIvPgo8L2NsaXBQYXRoPgo8L2RlZnM+CjxnIGlkPSJzdXJmYWNlMSI+CjxnIGNsaXAtcGF0aD0idXJsKCNjbGlwMSkiIGNsaXAtcnVsZT0ibm9uemVybyI+CjxwYXRoIHN0eWxlPSIgc3Ryb2tlOm5vbmU7ZmlsbC1ydWxlOmV2ZW5vZGQ7ZmlsbDpyZ2IoOTcuMjQ4ODQlLDgxLjU2ODkwOSUsNDUuODc4NjAxJSk7ZmlsbC1vcGFjaXR5OjE7IiBkPSJNIDExMC4yODEyNSA0MC42NDQ1MzEgQyA3Ny45NTMxMjUgNDAuNjQ0NTMxIDUwLjEzNjcxOSA2Mi4zNjMyODEgMzcuNzQ2MDk0IDkzLjUyMzQzOCBDIDUxLjU4NTkzOCA2NS40MTAxNTYgNzguODc1IDQ2LjI4MTI1IDExMC4yODEyNSA0Ni4yODEyNSBDIDE0MS42ODc1IDQ2LjI4MTI1IDE2OC45NzY1NjIgNjUuNDEwMTU2IDE4Mi44MTY0MDYgOTMuNTIzNDM4IEMgMTcwLjQyNTc4MSA2Mi4zNjMyODEgMTQyLjYxMzI4MSA0MC42NDQ1MzEgMTEwLjI4MTI1IDQwLjY0NDUzMSBaIE0gMTEwLjI4MTI1IDQwLjY0NDUzMSAiLz4KPC9nPgo8ZyBjbGlwLXBhdGg9InVybCgjY2xpcDIpIiBjbGlwLXJ1bGU9Im5vbnplcm8iPgo8cGF0aCBzdHlsZT0iIHN0cm9rZTpub25lO2ZpbGwtcnVsZTpldmVub2RkO2ZpbGw6cmdiKDk3LjI0ODg0JSw4MS41Njg5MDklLDQ1Ljg3ODYwMSUpO2ZpbGwtb3BhY2l0eToxOyIgZD0iTSAxMTAuMjgxMjUgMC4yMzgyODEgQyAxMDkuMzYzMjgxIDAuMjM4MjgxIDEwOC42MDkzNzUgMC45OTIxODggMTA4LjYwOTM3NSAxLjkxNDA2MiBMIDEwOC42MDkzNzUgMjYuMjczNDM4IEMgMTA4LjYwOTM3NSAyNy4xOTUzMTIgMTA5LjM2MzI4MSAyNy45NDkyMTkgMTEwLjI4MTI1IDI3Ljk0OTIxOSBDIDExMS4yMDMxMjUgMjcuOTQ5MjE5IDExMS45NTMxMjUgMjcuMTk1MzEyIDExMS45NTMxMjUgMjYuMjczNDM4IEwgMTExLjk1MzEyNSAxLjkxNDA2MiBDIDExMS45NTMxMjUgMC45OTIxODggMTExLjIwMzEyNSAwLjIzODI4MSAxMTAuMjgxMjUgMC4yMzgyODEgWiBNIDExMC4yODEyNSAwLjIzODI4MSAiLz4KPC9nPgo8cGF0aCBzdHlsZT0iIHN0cm9rZTpub25lO2ZpbGwtcnVsZTpldmVub2RkO2ZpbGw6cmdiKDk3LjI0ODg0JSw4MS41Njg5MDklLDQ1Ljg3ODYwMSUpO2ZpbGwtb3BhY2l0eToxOyIgZD0iTSAxOTcuNTYyNSA0MC4zMDg1OTQgQyAxOTYuOTk2MDk0IDM5LjU4MjAzMSAxOTUuOTQxNDA2IDM5LjQ0OTIxOSAxOTUuMjE0ODQ0IDQwLjAxNTYyNSBMIDE3Ni4wMzUxNTYgNTQuOTYwOTM4IEMgMTc1LjMwODU5NCA1NS41MjczNDQgMTc1LjE3OTY4OCA1Ni41ODU5MzggMTc1Ljc0MjE4OCA1Ny4zMTY0MDYgQyAxNzYuMzA0Njg4IDU4LjA0Mjk2OSAxNzcuMzYzMjgxIDU4LjE3NTc4MSAxNzguMDg5ODQ0IDU3LjYwOTM3NSBMIDE5Ny4yNjU2MjUgNDIuNjY0MDYyIEMgMTk3Ljk5MjE4OCA0Mi4wOTc2NTYgMTk4LjEyNSA0MS4wMzkwNjIgMTk3LjU2MjUgNDAuMzA4NTk0IFogTSAxOTcuNTYyNSA0MC4zMDg1OTQgIi8+CjxwYXRoIHN0eWxlPSIgc3Ryb2tlOm5vbmU7ZmlsbC1ydWxlOmV2ZW5vZGQ7ZmlsbDpyZ2IoOTcuMjQ4ODQlLDgxLjU2ODkwOSUsNDUuODc4NjAxJSk7ZmlsbC1vcGFjaXR5OjE7IiBkPSJNIDE1OC42MjEwOTQgMTAuMjMwNDY5IEMgMTU3LjgwNDY4OCA5LjgwODU5NCAxNTYuNzkyOTY5IDEwLjEzNjcxOSAxNTYuMzcxMDk0IDEwLjk1NzAzMSBMIDE0NS4yNTc4MTIgMzIuNjE3MTg4IEMgMTQ0LjgzNTkzOCAzMy40Mzc1IDE0NS4xNjQwNjIgMzQuNDUzMTI1IDE0NS45ODA0NjkgMzQuODc1IEMgMTQ2Ljc5Njg3NSAzNS4yOTY4NzUgMTQ3LjgxMjUgMzQuOTcyNjU2IDE0OC4yMzA0NjkgMzQuMTUyMzQ0IEwgMTU5LjM0Mzc1IDEyLjQ4ODI4MSBDIDE1OS43NjU2MjUgMTEuNjcxODc1IDE1OS40NDE0MDYgMTAuNjU2MjUgMTU4LjYyMTA5NCAxMC4yMzA0NjkgWiBNIDE1OC42MjEwOTQgMTAuMjMwNDY5ICIvPgo8ZyBjbGlwLXBhdGg9InVybCgjY2xpcDMpIiBjbGlwLXJ1bGU9Im5vbnplcm8iPgo8cGF0aCBzdHlsZT0iIHN0cm9rZTpub25lO2ZpbGwtcnVsZTpldmVub2RkO2ZpbGw6cmdiKDk3LjI0ODg0JSw4MS41Njg5MDklLDQ1Ljg3ODYwMSUpO2ZpbGwtb3BhY2l0eToxOyIgZD0iTSAyMjAuMjU3ODEyIDc4LjM3NSBDIDIxOS45NzI2NTYgNzcuNDk2MDk0IDIxOS4wMjczNDQgNzcuMDA3ODEyIDIxOC4xNTIzNDQgNzcuMjkyOTY5IEwgMTk1LjA0Mjk2OSA4NC43OTI5NjkgQyAxOTQuMTY3OTY5IDg1LjA3NDIxOSAxOTMuNjgzNTk0IDg2LjAyNzM0NCAxOTMuOTY0ODQ0IDg2LjkwMjM0NCBDIDE5NC4yNSA4Ny43ODEyNSAxOTUuMTk1MzEyIDg4LjI2NTYyNSAxOTYuMDcwMzEyIDg3Ljk4NDM3NSBMIDIxOS4xNzk2ODggODAuNDg0Mzc1IEMgMjIwLjA1NDY4OCA4MC4yMDMxMjUgMjIwLjUzOTA2MiA3OS4yNSAyMjAuMjU3ODEyIDc4LjM3NSBaIE0gMjIwLjI1NzgxMiA3OC4zNzUgIi8+CjwvZz4KPHBhdGggc3R5bGU9IiBzdHJva2U6bm9uZTtmaWxsLXJ1bGU6ZXZlbm9kZDtmaWxsOnJnYig5Ny4yNDg4NCUsODEuNTY4OTA5JSw0NS44Nzg2MDElKTtmaWxsLW9wYWNpdHk6MTsiIGQ9Ik0gMjMuMDAzOTA2IDQwLjMwODU5NCBDIDIzLjU2NjQwNiAzOS41ODIwMzEgMjQuNjI1IDM5LjQ0OTIxOSAyNS4zNDc2NTYgNDAuMDE1NjI1IEwgNDQuNTI3MzQ0IDU0Ljk2MDkzOCBDIDQ1LjI1MzkwNiA1NS41MjczNDQgNDUuMzg2NzE5IDU2LjU4NTkzOCA0NC44MjQyMTkgNTcuMzE2NDA2IEMgNDQuMjU3ODEyIDU4LjA0Mjk2OSA0My4yMDMxMjUgNTguMTc1NzgxIDQyLjQ3NjU2MiA1Ny42MDkzNzUgTCAyMy4yOTY4NzUgNDIuNjY0MDYyIEMgMjIuNTcwMzEyIDQyLjA5NzY1NiAyMi40Mzc1IDQxLjAzOTA2MiAyMy4wMDM5MDYgNDAuMzA4NTk0IFogTSAyMy4wMDM5MDYgNDAuMzA4NTk0ICIvPgo8cGF0aCBzdHlsZT0iIHN0cm9rZTpub25lO2ZpbGwtcnVsZTpldmVub2RkO2ZpbGw6cmdiKDk3LjI0ODg0JSw4MS41Njg5MDklLDQ1Ljg3ODYwMSUpO2ZpbGwtb3BhY2l0eToxOyIgZD0iTSA2MS45NDE0MDYgMTAuMjMwNDY5IEMgNjIuNzU3ODEyIDkuODA4NTk0IDYzLjc3MzQzOCAxMC4xMzY3MTkgNjQuMTkxNDA2IDEwLjk1NzAzMSBMIDc1LjMwNDY4OCAzMi42MTcxODggQyA3NS43MjY1NjIgMzMuNDM3NSA3NS40MDIzNDQgMzQuNDUzMTI1IDc0LjU4MjAzMSAzNC44NzUgQyA3My43NjU2MjUgMzUuMjk2ODc1IDcyLjc1MzkwNiAzNC45NzI2NTYgNzIuMzMyMDMxIDM0LjE1MjM0NCBMIDYxLjIxODc1IDEyLjQ4ODI4MSBDIDYwLjgwMDc4MSAxMS42NzE4NzUgNjEuMTI1IDEwLjY1NjI1IDYxLjk0MTQwNiAxMC4yMzA0NjkgWiBNIDYxLjk0MTQwNiAxMC4yMzA0NjkgIi8+CjxwYXRoIHN0eWxlPSIgc3Ryb2tlOm5vbmU7ZmlsbC1ydWxlOmV2ZW5vZGQ7ZmlsbDpyZ2IoOTcuMjQ4ODQlLDgxLjU2ODkwOSUsNDUuODc4NjAxJSk7ZmlsbC1vcGFjaXR5OjE7IiBkPSJNIDAuMzA4NTk0IDc4LjM3NSBDIDAuNTg5ODQ0IDc3LjQ5NjA5NCAxLjUzOTA2MiA3Ny4wMDc4MTIgMi40MTQwNjIgNzcuMjkyOTY5IEwgMjUuNTIzNDM4IDg0Ljc5Mjk2OSBDIDI2LjM5ODQzOCA4NS4wNzQyMTkgMjYuODc4OTA2IDg2LjAyNzM0NCAyNi41OTc2NTYgODYuOTAyMzQ0IEMgMjYuMzEyNSA4Ny43ODEyNSAyNS4zNjcxODggODguMjY1NjI1IDI0LjQ5MjE4OCA4Ny45ODQzNzUgTCAxLjM4MjgxMiA4MC40ODQzNzUgQyAwLjUwNzgxMiA4MC4yMDMxMjUgMC4wMjM0Mzc1IDc5LjI1IDAuMzA4NTk0IDc4LjM3NSBaIE0gMC4zMDg1OTQgNzguMzc1ICIvPgo8L2c+Cjwvc3ZnPgo=">
        <h2 class="tg bd ae yn vo mq">
            <span class="db pe">
                <span class="db">
                    <img
                        class="cb eb zh hh lu g4"
                        src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iODQ0LjVwdCIgaGVpZ2h0PSI0OHB0IiB2aWV3Qm94PSIwIDAgODQ0LjUgNDgiIHZlcnNpb249IjEuMiI+CjxkZWZzPgo8Y2xpcFBhdGggaWQ9ImNsaXAxIj4KICA8cGF0aCBkPSJNIDEyLjUgMCBMIDgzMS45NjA5MzggMCBMIDgzMS45NjA5MzggNDcuMDE5NTMxIEwgMTIuNSA0Ny4wMTk1MzEgWiBNIDEyLjUgMCAiLz4KPC9jbGlwUGF0aD4KPC9kZWZzPgo8ZyBpZD0ic3VyZmFjZTEiPgo8ZyBjbGlwLXBhdGg9InVybCgjY2xpcDEpIiBjbGlwLXJ1bGU9Im5vbnplcm8iPgo8cGF0aCBzdHlsZT0iIHN0cm9rZTpub25lO2ZpbGwtcnVsZTpub256ZXJvO2ZpbGw6cmdiKDgyLjM0ODYzMyUsNzcuNjQ4OTI2JSw5OC4wMzkyNDYlKTtmaWxsLW9wYWNpdHk6MTsiIGQ9Ik0gODE5LjYwMTU2MiA3Ljk3NjU2MiBDIDYxMC4yNDIxODggLTAuNTAzOTA2IDQwMC42MzI4MTIgLTIuNDY4NzUgMTkxLjE1MjM0NCAyLjE4NzUgQyAxMzEuNjYwMTU2IDMuNTExNzE5IDcyLjE3NTc4MSA1LjM3ODkwNiAxMi43MTQ4NDQgNy43NTc4MTIgQyAxMS4zMzIwMzEgNy44MDg1OTQgMTYuODA0Njg4IDQ3LjYyODkwNiAyNC4zMjAzMTIgNDcuMzI4MTI1IEMgMjMzLjY3OTY4OCAzOC45NjA5MzggNDQzLjI4OTA2MiAzNy4xMTMyODEgNjUyLjc2NTYyNSA0MS44ODY3MTkgQyA3MTIuMjYxNzE5IDQzLjIzODI4MSA3NzEuNzQyMTg4IDQ1LjE0MDYyNSA4MzEuMjA3MDMxIDQ3LjU1MDc4MSBDIDgzMy44MjAzMTIgNDcuNjUyMzQ0IDgyOC44MTY0MDYgMjguNDA2MjUgODI4LjM3MTA5NCAyNi44ODI4MTIgQyA4MjcuNDUzMTI1IDIzLjc0MjE4OCA4MjQuMTA5Mzc1IDguMTYwMTU2IDgxOS42MDE1NjIgNy45NzY1NjIgIi8+CjwvZz4KPC9nPgo8L3N2Zz4K">
                    <span class="db">Creative Journey to future</span>
                </span>
            </span>
        </h2>
        <div class="re mi ce v3">
            <a href="#feedback" class="bo ko vo uk qq yq or">
                Give us feedback
                <svg xmlns="http://www.w3.org/2000/svg" class="zf cf td sr" width="44" height="44" viewBox="0 0 24 24"
                     stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <line x1="15" y1="16" x2="19" y2="12"></line>
                    <line x1="15" y1="8" x2="19" y2="12"></line>
                </svg>
            </a>
        </div>
    </div>
</section>

<footer class="lm in dj rk lj rv r2 mj" style="padding-bottom: 3rem; padding-top: 3rem;">
    <div class="tg bd ae yn vo">
        &copy; Copyrights <strong>innovation-hub</strong>. All Rights Reserved
    </div>
</footer>

</body>
</html>
