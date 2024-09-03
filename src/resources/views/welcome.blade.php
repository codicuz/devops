<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center"><p>Special Edition*</p></div>
                <div class="flex justify-center">
                    <svg
                        xmlns:dc="http://purl.org/dc/elements/1.1/"
                        xmlns:cc="http://creativecommons.org/ns#"
                        xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                        xmlns:svg="http://www.w3.org/2000/svg"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                        xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
                        width="223"
                        height="265px"
                        viewBox="0 0 446.75101 530.66003"
                        version="1.1"
                        id="svg758"
                        sodipodi:docname="Coat_of_Arms_of_Moscow.svg"
                        inkscape:version="0.92.4 (5da689c313, 2019-01-14)">
                        <metadata
                            id="metadata764">
                            <rdf:RDF>
                            <cc:Work
                                rdf:about="">
                                <dc:format>image/svg+xml</dc:format>
                                <dc:type
                                rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
                                <dc:title></dc:title>
                            </cc:Work>
                            </rdf:RDF>
                        </metadata>
                        <defs
                            id="defs762" />
                        <sodipodi:namedview
                            pagecolor="#ffffff"
                            bordercolor="#666666"
                            borderopacity="1"
                            objecttolerance="10"
                            gridtolerance="10"
                            guidetolerance="10"
                            inkscape:pageopacity="0"
                            inkscape:pageshadow="2"
                            inkscape:window-width="1920"
                            inkscape:window-height="1017"
                            id="namedview760"
                            showgrid="false"
                            fit-margin-top="0"
                            fit-margin-left="0"
                            fit-margin-right="0"
                            fit-margin-bottom="0"
                            inkscape:zoom="0.64954128"
                            inkscape:cx="515.16138"
                            inkscape:cy="391.66678"
                            inkscape:window-x="-8"
                            inkscape:window-y="-8"
                            inkscape:window-maximized="1"
                            inkscape:current-layer="svg758" />
                        <g
                            transform="translate(-5.649417,-5.440435)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g4" />
                        <g
                            style="fill:#161413;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g8">
                            <path
                            d="m 0,0 c 0,0 446.751,0 446.751,0 0,0 0,418.083 0,418.083 0,0 -0.21,4.186 -0.21,4.186 0,0 -0.209,4.184 -0.209,4.184 0,0 -0.419,4.186 -0.419,4.186 0,0 -0.627,3.975 -0.627,3.975 0,0 -0.838,3.976 -0.838,3.976 0,0 -1.046,3.976 -1.046,3.976 0,0 -1.045,3.557 -1.045,3.557 0,0 -1.256,3.766 -1.256,3.766 0,0 -1.465,3.557 -1.465,3.557 0,0 -1.674,3.558 -1.674,3.558 0,0 -1.883,3.139 -1.883,3.139 0,0 -1.884,3.347 -1.884,3.347 0,0 -2.301,3.139 -2.301,3.139 0,0 -2.302,2.93 -2.302,2.93 0,0 -2.511,2.72 -2.511,2.72 0,0 -2.721,2.72 -2.721,2.72 0,0 -2.719,2.511 -2.719,2.511 0,0 -3.139,2.512 -3.139,2.512 0,0 -3.139,2.301 -3.139,2.301 0,0 -3.348,2.092 -3.348,2.092 0,0 -3.557,1.884 -3.557,1.884 0,0 -3.557,1.883 -3.557,1.883 0,0 -3.767,1.674 -3.767,1.674 0,0 -4.186,1.465 -4.186,1.465 0,0 -3.975,1.255 -3.975,1.255 0,0 -4.394,1.256 -4.394,1.256 0,0 -4.394,1.046 -4.394,1.046 0,0 -4.813,0.628 -4.813,0.628 0,0 -4.603,0.837 -4.603,0.837 0,0 -5.023,0.419 -5.023,0.419 0,0 -5.021,0.209 -5.021,0.209 0,0 -5.232,0.209 -5.232,0.209 0,0 -51.894,0 -51.894,0 0,0 -3.557,0 -3.557,0 0,0 -3.558,0.209 -3.558,0.209 0,0 -3.557,0 -3.557,0 0,0 -3.348,0.419 -3.348,0.419 0,0 -3.348,0.209 -3.348,0.209 0,0 -3.139,0.419 -3.139,0.419 0,0 -3.139,0.628 -3.139,0.628 0,0 -3.138,0.418 -3.138,0.418 0,0 -2.93,0.628 -2.93,0.628 0,0 -2.93,0.627 -2.93,0.627 0,0 -2.929,0.837 -2.929,0.837 0,0 -2.929,0.837 -2.929,0.837 0,0 -2.721,0.837 -2.721,0.837 0,0 -2.511,0.837 -2.511,0.837 0,0 -2.719,1.046 -2.719,1.046 0,0 -2.512,1.047 -2.512,1.047 0,0 -2.511,1.046 -2.511,1.046 0,0 -2.302,1.256 -2.302,1.256 0,0 -2.51,1.046 -2.51,1.046 0,0 -2.302,1.255 -2.302,1.255 0,0 -2.093,1.256 -2.093,1.256 0,0 -2.302,1.255 -2.302,1.255 0,0 -2.092,1.465 -2.092,1.465 0,0 -2.092,1.465 -2.092,1.465 0,0 -2.093,1.465 -2.093,1.465 0,0 -2.093,1.464 -2.093,1.464 0,0 -1.884,1.465 -1.884,1.465 0,0 -1.882,1.674 -1.882,1.674 0,0 -1.883,1.674 -1.883,1.674 0,0 -1.884,1.465 -1.884,1.465 0,0 -1.674,1.674 -1.674,1.674 0,0 -3.766,3.557 -3.766,3.557 0,0 -3.558,-3.557 -3.558,-3.557 0,0 -1.883,-1.674 -1.883,-1.674 0,0 -1.884,-1.465 -1.884,-1.465 0,0 -1.882,-1.674 -1.882,-1.674 0,0 -1.883,-1.674 -1.883,-1.674 0,0 -1.884,-1.465 -1.884,-1.465 0,0 -2.093,-1.464 -2.093,-1.464 0,0 -2.092,-1.465 -2.092,-1.465 0,0 -2.092,-1.465 -2.092,-1.465 0,0 -2.093,-1.465 -2.093,-1.465 0,0 -2.092,-1.255 -2.092,-1.255 0,0 -2.302,-1.256 -2.302,-1.256 0,0 -2.511,-1.255 -2.511,-1.255 0,0 -2.302,-1.046 -2.302,-1.046 0,0 -2.302,-1.256 -2.302,-1.256 0,0 -2.511,-1.046 -2.511,-1.046 0,0 -2.51,-1.047 -2.51,-1.047 0,0 -2.721,-1.046 -2.721,-1.046 0,0 -2.511,-0.837 -2.511,-0.837 0,0 -2.93,-0.837 -2.93,-0.837 0,0 -2.719,-0.837 -2.719,-0.837 0,0 -2.721,-0.837 -2.721,-0.837 0,0 -2.93,-0.627 -2.93,-0.627 0,0 -3.138,-0.628 -3.138,-0.628 0,0 -3.139,-0.418 -3.139,-0.418 0,0 -3.139,-0.628 -3.139,-0.628 0,0 -3.138,-0.419 -3.138,-0.419 0,0 -3.349,-0.209 -3.349,-0.209 0,0 -3.348,-0.419 -3.348,-0.419 0,0 -3.557,0 -3.557,0 0,0 -3.557,-0.209 -3.557,-0.209 0,0 -3.766,0 -3.766,0 0,0 -51.6861,0 -51.6861,0 0,0 -5.2305,-0.209 -5.2305,-0.209 0,0 -5.0225,-0.209 -5.0225,-0.209 0,0 -5.0224,-0.419 -5.0224,-0.419 0,0 -4.8125,-0.837 -4.8125,-0.837 0,0 -4.6035,-0.628 -4.6035,-0.628 0,0 -4.3936,-1.046 -4.3936,-1.046 0,0 -4.3945,-1.256 -4.3945,-1.256 0,0 -4.1856,-1.255 -4.1856,-1.255 0,0 -3.7666,-1.465 -3.7666,-1.465 0,0 -3.9756,-1.674 -3.9756,-1.674 0,0 -3.7666,-1.883 -3.7666,-1.883 0,0 -3.3476,-1.884 -3.3476,-1.884 0,0 -3.3486,-2.092 -3.3486,-2.092 0,0 -3.1387,-2.301 -3.1387,-2.301 0,0 -3.1387,-2.512 -3.1387,-2.512 0,0 -2.7197,-2.511 -2.7197,-2.511 0,0 -2.7207,-2.72 -2.7207,-2.72 0,0 -2.5108,-2.72 -2.5108,-2.72 0,0 -2.3017,-2.93 -2.3017,-2.93 0,0 -2.3018,-3.139 -2.3018,-3.139 0,0 -1.8838,-3.347 -1.8838,-3.347 0,0 -1.88282,-3.139 -1.88282,-3.139 0,0 -1.6738,-3.558 -1.6738,-3.558 0,0 -1.4649,-3.557 -1.4649,-3.557 0,0 -1.2558,-3.766 -1.2558,-3.766 0,0 -1.2549,-3.557 -1.2549,-3.557 0,0 -0.83691,-3.976 -0.83691,-3.976 0,0 -0.83691,-3.976 -0.83691,-3.976 0,0 -0.62793,-3.975 -0.62793,-3.975 0,0 -0.41895,-4.186 -0.41895,-4.186 0,0 -0.20898,-4.184 -0.20898,-4.184 0,0 0,-4.186 0,-4.186 C 0,418.083 0,0 0,0 Z"
                            id="path6"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(2.51074,2.71972)"
                            style="fill:#a8002c;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g12">
                            <path
                            d="m 0,0 c 0,0 220.76,0 220.76,0 0,0 220.55,0 220.55,0 0,0 0,415.363 0,415.363 0,44.779 -28.668,76.377 -84.328,76.377 0,0 -51.894,0 -51.894,0 -39.967,0 -65.495,13.811 -84.328,32.434 -18.832,-18.623 -44.571,-32.434 -84.328,-32.434 0,0 -51.8949,0 -51.8949,0 C 28.8769,491.74 0,460.142 0,415.363 0,415.363 0,0 0,0 Z"
                            id="path10"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(29.50388,22.59867)"
                            style="fill:#161413;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g16">
                            <path
                            d="m 69.263,354.889 c 3.347,-12.554 11.09,-19.042 23.854,-21.133 12.346,-2.093 25.947,-8.998 40.804,-15.904 6.277,-4.603 7.114,-2.511 2.511,6.487 0,0 -7.115,8.161 -7.115,8.161 -3.766,4.184 -4.603,8.579 0.628,12.763 7.115,3.558 10.044,6.907 8.998,9.835 -7.743,-2.091 -14.857,-1.046 -20.925,4.605 -4.394,-1.256 -9.625,-0.628 -16.95,2.929 -3.766,-2.093 -7.951,-2.302 -12.973,-0.837 -1.255,-3.139 -4.813,-3.976 -10.881,-2.93 -1.674,-1.883 -4.395,-3.139 -7.951,-3.976 z m 85.583,0 c -7.532,-7.742 -8.37,-14.647 0.21,-20.506 4.812,-3.348 11.926,-11.09 20.716,-22.808 5.858,-0.419 11.089,-1.675 16.949,-2.512 23.435,-2.928 45.616,-7.951 63.402,-17.786 3.349,-1.046 5.859,-0.418 7.324,2.093 0,0 13.811,18.205 13.811,18.205 0,0 -3.976,1.465 -3.976,1.465 0,0 10.462,7.951 10.462,7.951 -1.883,1.465 -0.628,2.511 1.675,3.348 -1.256,1.883 -0.419,3.766 1.465,3.557 0.837,2.511 2.72,6.278 -2.721,1.046 -3.349,-1.674 -3.766,0 -1.047,5.232 0,0 5.651,8.161 5.651,8.161 0.419,3.766 1.882,6.905 4.812,9.625 0,0 4.604,9.417 4.604,9.417 0,1.464 0.837,2.928 1.256,4.184 0.627,3.558 1.464,5.441 4.394,5.86 -2.93,5.649 -6.696,10.881 -12.974,14.228 -12.345,6.696 -22.18,3.976 -21.134,-12.346 0.628,-8.788 2.301,-16.112 2.511,-25.11 3.557,-14.019 0.209,-21.134 -11.927,-21.971 -6.278,0.209 -11.09,0.209 -14.648,2.72 -3.348,2.302 -8.161,1.465 -14.647,-2.302 -12.556,-9.416 -21.972,-14.438 -28.249,-14.438 6.068,6.906 7.742,13.81 2.929,20.716 5.022,2.301 4.813,4.603 -0.21,6.905 -12.135,0.419 -25.737,-2.092 -39.966,-6.067 -4.604,-0.838 -5.441,0 -2.302,2.51 10.463,4.185 16.112,10.463 16.112,19.251 -6.695,0.209 -12.346,0.628 -15.484,1.256 -2.93,1.883 -6.069,1.674 -8.998,-1.884 z m 118.645,67.588 c -3.557,1.884 -4.394,3.976 -1.046,6.069 2.302,1.465 3.557,1.673 3.976,0.628 4.184,-0.837 -1.674,-3.139 -2.93,-6.697 z M 164.053,413.27 c -2.302,1.674 -3.348,3.558 -2.092,6.069 0,0 4.603,3.975 4.603,3.975 1.883,-1.674 1.465,-4.184 -0.627,-5.858 -1.047,-0.838 -1.674,-2.302 -1.884,-4.186 z m -53.569,-21.971 c 3.349,1.465 3.349,4.603 -0.836,6.487 -3.139,-1.256 -2.929,-3.976 0.836,-6.487 z M 49.3838,267.004 c 15.0652,17.368 17.7862,37.038 5.4404,59.846 -4.6035,11.09 -3.9755,18.204 2.0918,21.553 1.6748,-3.767 3.1397,-9.626 3.9766,-15.694 1.2549,-9.416 7.3234,-8.37 15.2754,-16.531 8.579,-8.789 6.068,-17.996 5.231,-32.643 -1.465,-31.388 5.022,-49.593 14.229,-59.846 -23.437,-6.486 -37.6651,10.881 -46.2442,43.315 z M 64.2403,7.3242 c -2.7198,0.4179 -3.7666,2.3017 -3.3477,5.4404 0,0 18.6234,26.3652 18.6234,26.3652 0.628,1.2559 1.883,2.5118 1.673,3.5577 -1.464,3.5576 -2.091,5.8593 1.047,8.998 0,0 6.278,6.0684 6.278,6.0684 0.628,4.3935 1.465,7.9511 2.929,9.207 -1.464,2.9297 0.418,5.6493 2.93,8.3703 0.627,0.837 0.836,1.883 1.883,2.72 0,0 1.046,8.998 1.046,8.998 -8.788,7.323 -13.183,12.764 -14.02,16.1118 -0.419,1.883 -0.837,3.348 0.419,4.394 0,0 12.346,-1.255 12.346,-1.255 1.046,0.627 2.302,0.836 2.72,1.673 1.883,4.395 -0.628,11.3 -7.324,12.137 -15.275,3.767 -26.366,8.998 -21.971,19.251 5.649,7.324 2.719,13.811 -6.9056,19.67 -2.3017,2.092 -3.3476,4.813 -2.9297,8.369 -2.7207,2.303 -4.8125,5.86 -6.6962,9.835 -1.4639,4.186 -1.4639,6.068 1.4648,5.651 21.3437,-7.116 42.2697,-10.044 57.1257,2.301 7.324,6.069 6.069,9.207 17.577,9.835 -1.255,4.813 0,7.532 4.185,8.369 0,0 0.628,5.442 0.628,5.442 -4.604,1.046 -9.835,1.046 -14.439,2.302 -5.231,1.254 -10.252,3.347 -14.856,3.347 -3.976,-3.138 -8.579,-5.021 -12.346,-7.323 -19.251,-11.928 -35.364,-12.556 -49.3835,3.766 -7.3232,8.58 -14.0195,20.297 -19.46,38.293 -1.0459,3.138 -3.5576,4.394 -8.5791,1.464 -10.0439,-8.16 -11.9277,-15.484 -6.9052,-20.296 7.1142,-6.697 9.8349,-2.721 6.0683,0.836 0,0 0.209,0.837 0.209,0.837 5.4404,0 7.5332,3.767 9.625,7.743 4.6045,-11.928 2.0928,-20.088 -4.3935,-26.576 0,0 -1.4649,-0.209 -1.4649,-0.209 0,0 0.6279,10.253 0.6279,10.253 -11.0908,-2.301 -17.1591,6.279 -17.996,14.23 -0.628,7.742 2.9296,14.647 12.9736,20.507 5.6494,1.882 7.3242,8.37 2.9297,14.856 -10.8809,15.903 -9.2071,32.853 0.6279,54.614 0,0 1.2549,-0.627 1.2549,-0.627 2.0928,-23.855 7.1152,-35.991 15.0664,-38.293 2.5107,-0.837 4.8125,-2.511 6.9053,-5.231 2.3017,-3.558 3.5576,-3.139 5.2314,0.628 4.3945,10.044 3.9756,19.669 -2.0928,29.295 -13.8105,22.389 -14.4384,39.548 5.2315,53.149 0,0 0.6279,1.674 0.6279,1.674 0,0 -5.2314,6.696 -5.2314,6.696 -1.6739,2.721 -0.419,6.069 4.1855,9.835 3.3477,3.976 5.0215,10.463 6.0674,18.623 -1.6738,2.511 -1.8828,5.65 -0.8369,9.207 2.9297,4.185 10.0439,6.487 20.0886,5.441 1.046,-0.209 0.836,-1.046 0.836,-2.092 0.838,-4.605 -2.302,-7.952 -5.649,-13.602 -9.8352,-8.789 -11.928,-17.159 -8.7883,-25.319 0,0 1.4648,-2.302 1.4648,-2.302 7.7425,2.72 17.5775,5.859 26.5745,7.115 -3.767,7.742 -3.348,17.368 0,23.017 6.278,10.881 12.973,15.903 25.738,14.857 16.949,-1.464 25.319,-15.485 19.042,-34.527 6.068,-3.347 10.044,-3.138 12.137,0.628 -0.21,8.579 3.556,5.86 3.765,14.23 -10.044,8.788 -13.809,16.321 -2.929,21.133 5.65,5.651 2.511,7.743 -4.813,8.162 -7.742,-1.884 -13.391,-1.465 -14.438,4.812 -7.115,0.419 -9.206,4.604 -8.997,11.3 2.092,-5.023 6.068,-5.441 8.16,-4.185 3.766,-0.21 7.742,0.836 11.091,-0.628 3.138,-1.464 6.695,-1.464 10.671,0.209 2.093,0 3.557,0.837 4.604,2.511 5.021,5.232 4.394,-0.628 15.484,6.068 2.721,0.209 7.325,0 8.162,4.395 0,0 1.045,-3.976 1.045,-3.976 0.837,-1.464 0.418,-3.138 -1.255,-4.603 -3.557,-4.186 2.092,-4.395 11.927,-2.512 5.232,2.302 10.044,3.349 13.811,2.721 4.394,-4.395 5.44,-1.674 6.277,4.184 3.139,-8.579 1.047,-13.182 -7.533,-13.6 1.465,-4.604 2.093,2.302 5.231,-3.349 2.721,-1.255 5.441,0 8.162,2.721 0.627,-4.186 -1.884,-6.696 -7.325,-7.952 -1.256,-3.557 -3.975,-3.766 -7.742,-0.209 -15.903,-4.185 -17.577,-13.811 -8.579,-15.694 4.813,-1.255 6.696,3.767 10.463,5.231 2.929,1.047 4.393,0.628 8.37,1.047 4.394,0.209 8.369,1.046 11.09,2.929 0,0 3.139,1.046 3.139,1.046 1.673,-1.254 3.347,-1.046 5.44,0.837 2.302,3.349 4.604,3.767 6.696,1.047 6.278,-5.022 15.694,-5.022 15.066,-1.884 -0.209,4.604 0.628,6.278 2.301,5.86 1.465,0.209 2.093,2.092 2.093,5.44 -6.068,-0.209 -10.253,0.837 -10.253,5.232 -5.65,1.673 -5.44,5.649 -2.929,10.88 -0.628,-10.043 7.952,-1.883 16.321,-7.324 0,0 5.859,-0.627 5.859,-0.627 0.628,2.929 3.348,4.185 8.579,3.976 1.884,-0.838 4.813,-0.838 6.697,-1.256 10.253,-2.72 18.414,-2.093 24.482,6.277 1.255,-2.51 1.046,-5.231 -0.628,-7.742 7.114,-4.812 14.857,-2.929 10.253,4.813 4.186,-2.092 8.37,-12.764 2.93,-12.555 2.302,-6.277 11.718,-1.046 8.998,3.558 3.975,-2.093 4.603,-5.232 -0.209,-9.207 -0.628,-3.558 -3.558,-4.604 -8.789,-3.139 -2.93,-5.023 -6.696,-5.232 -11.718,-0.837 -5.022,2.301 -8.998,2.511 -11.509,-0.838 -2.72,-4.393 -2.093,-6.486 1.674,-5.021 1.883,0.628 2.721,-1.674 5.023,-6.069 0.836,-1.884 2.51,-3.347 3.766,-5.859 5.441,-0.837 9.834,-5.65 15.484,-15.275 3.976,-1.883 5.859,-9.625 6.069,-21.762 1.674,0.837 3.766,0.209 6.486,-1.465 -1.883,-0.209 -2.72,-0.837 -2.72,-5.649 0,0 5.231,0 5.231,0 2.093,-0.837 2.93,-1.674 2.721,-2.721 0,-0.837 -2.093,-0.627 -3.558,-2.93 -0.628,-2.929 -2.302,-5.858 -5.44,-8.788 0,0 -5.022,-8.161 -5.022,-8.161 -3.558,-11.299 -7.742,-17.786 -12.974,-13.601 0,0 -1.464,-0.838 -1.464,-0.838 -3.976,-4.393 -6.906,-10.252 -9.207,-16.739 0.209,-7.952 -8.162,-8.37 -12.556,-0.837 0,0 -1.255,-6.278 -1.255,-6.278 0,0 -2.093,3.349 -2.093,3.349 0,0 -13.182,-19.042 -13.182,-19.042 1.464,-0.209 3.975,-1.674 5.44,-1.884 16.112,-1.255 32.225,-6.068 48.755,-15.276 0,0 11.719,-3.556 11.719,-3.556 5.231,-2.093 6.905,-0.419 9.625,2.302 0,0 11.927,12.345 11.927,12.345 2.302,2.511 2.302,4.813 1.046,7.324 -1.255,2.511 1.674,5.859 5.86,9.416 3.766,4.185 4.184,9.835 0.837,16.95 -1.883,4.603 -1.465,7.533 1.255,8.998 0,0 8.161,5.858 8.161,5.858 5.44,4.395 8.161,2.93 7.952,-4.812 -0.419,-3.976 -1.675,-7.743 -3.977,-11.718 -2.719,-4.814 -4.602,-9.417 -4.812,-14.23 -0.209,-9.625 -1.465,-14.647 -5.441,-17.995 -4.603,-4.394 -8.579,-9.416 -11.717,-14.857 -1.047,-3.139 -1.884,-5.022 -3.558,-5.859 -0.418,-10.044 -7.742,-15.066 -12.346,-12.345 -3.975,0.837 -7.742,1.255 -11.927,0.627 0,0 0,-2.302 0,-2.302 5.231,-2.929 14.229,-12.137 23.227,-22.181 3.348,-4.184 5.022,-2.51 8.37,0.838 0,0 12.974,13.601 12.974,13.601 -0.419,6.696 0.628,11.091 5.23,10.672 3.14,5.44 4.604,10.671 1.675,12.973 -2.93,2.511 -5.231,4.186 -5.231,7.742 0.628,5.232 6.696,10.672 13.391,13.183 0.628,0.21 1.674,-0.209 2.093,-1.046 1.884,-4.603 2.093,-10.044 0.209,-15.484 0,0 -2.302,-7.742 -2.302,-7.742 -0.418,-3.139 0,-5.651 0.21,-7.953 0.627,-6.068 0.837,-9.416 -5.65,-14.019 -8.16,-8.37 -15.067,-16.949 -20.716,-25.947 0.209,-11.927 -10.044,-15.066 -16.53,-2.093 0,0 -12.556,8.789 -12.556,8.789 -3.139,2.093 -5.231,-1.256 -5.231,-4.604 -1.255,-15.693 -11.927,-28.249 -23.645,-40.385 -6.277,-19.042 -14.857,-34.945 -17.996,-49.592 11.928,1.255 20.925,3.557 24.482,7.114 5.232,5.65 11.928,8.579 13.602,4.604 0.628,-1.256 -3.139,-3.558 -5.023,-5.441 2.093,0 4.813,1.883 7.743,4.813 5.231,0 6.905,-3.976 5.44,-9.416 0.628,-4.395 0.419,-7.742 -1.464,-9.207 0,0 -4.394,-2.511 -4.394,-2.511 -7.325,-7.952 -13.393,-15.9028 -18.414,-24.6918 -0.628,-1.046 -0.837,-1.883 -0.837,-2.72 0,-3.558 -1.047,-6.696 -4.604,-9.835 0,0 1.674,-0.837 1.674,-0.837 0,0 -0.209,-1.256 -0.209,-1.256 0,0 3.767,0.837 3.767,0.837 0,0 -3.767,-6.2773 -3.767,-6.2773 -2.093,-7.7422 -9.207,-8.9981 -19.879,-5.8584 -1.465,0.4179 -3.349,-1.2559 -5.231,-3.3487 -6.697,-6.4863 -13.811,-10.0439 -11.3,-5.2314 0.419,0.8369 2.511,3.1387 0.209,2.9297 0,0 -11.509,-1.8828 -11.509,-1.8828 -2.511,-0.419 -2.929,0.4179 -2.302,1.6738 2.093,2.3017 4.186,4.3945 5.023,6.9053 0,0 -14.648,0.8369 -14.648,0.8369 -2.929,0.209 -5.44,1.4648 -8.161,1.2558 -7.951,-6.6963 -17.786,-1.6748 -28.039,6.0674 0,0 -1.465,-0.6269 -1.465,-0.6269 0,0 -0.209,-11.9278 -0.209,-11.9278 0,0 1.255,0 1.255,0 0,0 -1.046,-7.7422 -1.046,-7.7422 0,0 0.837,0 0.837,0 0.837,-11.7177 -1.465,-19.2509 -5.859,-24.4824 -0.837,-3.5576 2.721,-3.1386 3.557,-4.1845 3.348,-4.1856 3.139,-8.9981 3.139,-11.5088 -0.628,-5.0225 -2.302,-6.6963 -4.812,-5.0225 0,0 -2.93,0 -2.93,0 -3.139,-0.4189 -5.65,-1.4648 -6.905,-2.9297 C 190.209,0 187.07,0 183.932,2.0927 c -15.067,3.7666 -17.786,15.4844 -36.201,7.5332 -2.092,-0.2089 -2.51,0.628 -1.673,2.3018 3.138,4.1846 7.533,6.9053 12.345,8.998 -1.673,1.2549 -5.022,1.4639 -10.463,1.0459 3.139,4.1846 9.207,6.2774 18.624,6.0684 3.557,2.0918 7.743,1.2559 12.346,-0.6279 2.511,-1.4649 2.72,-0.628 1.046,2.7197 -4.812,3.9766 -8.161,11.7187 -8.788,25.7383 -1.884,2.9297 -2.93,6.0683 -3.558,9.626 -6.905,-1.8838 -12.973,-3.1387 -15.484,-1.0469 0,0 -2.721,-0.209 -2.721,-0.209 -6.068,-4.6035 -11.926,-4.3945 -16.74,-1.2559 0,0 -10.671,8.1609 -10.671,8.1609 -3.976,2.721 -7.324,2.93 -7.952,-0.4187 0,0 -4.394,-9.416 -4.394,-9.416 0.209,-6.6953 -2.302,-9.835 -6.906,-10.2529 -2.092,-1.8838 -3.556,-4.1846 -3.975,-6.6963 0,0 -3.139,-3.9756 -3.139,-3.9756 1.047,-3.5576 -0.419,-4.8125 -2.93,-4.8125 -2.719,0 -5.231,-0.4189 -6.695,-1.4648 0,0 -21.7627,-26.7842 -21.7627,-26.7842 z"
                            id="path14"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(394.64788,307.38987)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g20">
                            <path
                            d="m 1.045,32.433 c 0,0 2.093,-4.394 2.093,-4.394 1.046,-1.465 1.883,-1.465 2.511,-0.209 0,0 5.022,4.603 5.022,4.603 -1.046,1.046 -3.348,1.046 -5.022,1.465 0,0 1.674,2.721 1.674,2.721 0,0 -1.674,0.836 -1.674,0.836 0,0 -0.628,2.303 -0.628,2.303 C 1.882,37.246 0,34.944 1.045,32.433 Z M 5.44,17.367 c 0.628,0 1.255,1.884 1.255,3.977 0,2.091 -0.627,3.975 -1.255,3.975 -0.838,0 -1.256,-1.884 -1.256,-3.975 0,-2.093 0.418,-3.977 1.256,-3.977 z M 2.51,0.418 C 2.928,0 3.975,0.837 4.602,1.883 5.44,3.138 5.649,4.393 5.23,4.603 4.812,4.812 3.766,4.184 3.138,2.929 2.3,1.674 2.091,0.628 2.51,0.418 Z"
                            id="path18"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(405.94588,259.26187)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g24">
                            <path
                            d="M 4.604,28.039 C 3.976,27.412 3.349,27.621 2.721,28.249 0.419,30.969 0,33.061 1.256,34.944 c 0,0 4.604,3.558 4.604,3.558 1.465,1.256 3.138,0.628 2.302,-0.628 0,0 -1.674,-2.302 -1.674,-2.302 1.046,0.419 1.883,1.465 2.929,1.465 0.837,0 1.046,-1.255 0,-2.093 C 7.743,33.27 7.325,32.642 8.371,31.597 8.789,31.179 8.789,30.76 8.162,30.341 c 0,0 -3.558,-2.302 -3.558,-2.302 z m 0,-19.46 C 2.512,6.068 2.93,4.603 5.651,4.812 3.139,0.837 5.86,0 8.371,4.184 c 1.255,1.884 1.464,5.651 1.046,10.044 -0.21,1.256 -1.674,1.675 -2.092,0 C 6.488,11.718 5.651,10.044 4.604,8.579 Z M 6.278,25.11 c 0,0 1.047,-4.813 1.047,-4.813 0.209,-1.255 0.628,-1.046 1.255,0 1.674,2.092 3.139,4.185 3.557,7.742 0.419,1.465 0.209,2.302 -0.837,2.512 C 10.045,30.76 8.998,30.132 7.953,29.086 6.488,27.412 6.069,26.365 6.278,25.11 Z"
                            id="path22"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(329.15088,205.69287)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g28">
                            <path
                            d="M 8.999,25.111 C 9.208,16.322 10.254,9.208 10.254,2.721 10.254,0 12.137,0 12.137,3.139 c 0.419,6.905 -0.419,14.02 -1.256,21.344 0,1.046 -1.882,2.93 -1.882,0.628 z m 12.136,34.944 c 0.418,0 0.627,0.419 0.627,0.837 0,0.419 -0.209,0.838 -0.627,0.838 -0.419,0 -0.628,-0.419 -0.628,-0.838 0,-0.418 0.209,-0.837 0.628,-0.837 z M 0.419,29.086 c 0,0 0.837,-0.628 0.837,-0.628 0.209,-0.208 0.628,-0.208 0.837,0.209 0,0 3.139,3.977 3.139,3.977 0.209,0.209 0.209,0.627 0,0.837 0,0 -0.837,0.628 -0.837,0.628 -0.209,0.209 -0.628,0.209 -0.837,-0.21 0,0 -3.349,-3.976 -3.349,-3.976 C 0,29.714 0,29.295 0.419,29.086 Z m 30.132,22.39 c 0,0 1.255,-8.161 1.255,-8.161 0,0 -1.464,2.93 -1.464,2.93 -1.256,0 -1.465,-1.255 -1.674,-3.767 -0.21,-2.929 0,-3.976 1.674,-3.348 0,0 1.046,2.721 1.046,2.721 0,0 0.837,-1.884 0.837,-1.884 1.465,-0.837 1.674,0 1.047,2.511 0,0 -0.419,8.998 -0.419,8.998 -0.837,1.256 -1.465,3.558 -2.302,0 z M 52.732,25.739 c -1.256,-1.674 -1.465,-3.767 0,-5.232 1.256,-1.465 3.139,-1.674 4.603,-0.628 1.256,0.628 1.674,1.465 1.674,2.093 0,0 -2.51,0.837 -2.51,0.837 0,0 3.138,0.837 3.138,0.837 1.674,1.465 0.209,4.185 -1.256,1.883 -1.255,-1.255 -2.719,-1.464 -4.184,-0.628 0,1.884 -0.419,2.302 -1.465,0.838 z M 22.39,40.386 c 0.419,-0.21 1.256,0.628 1.884,1.674 0.418,1.046 0.628,2.093 0,2.302 C 23.855,44.78 23.018,43.943 22.6,42.897 21.972,41.851 21.972,40.595 22.39,40.386 Z M 3.139,38.712 c 0.419,-0.21 1.256,0.418 1.884,1.464 0.628,1.256 0.628,2.302 0.209,2.512 C 4.813,42.897 3.976,42.269 3.349,41.014 2.721,39.967 2.721,38.921 3.139,38.712 Z M 8.79,28.458 c 1.464,-0.208 3.347,1.465 3.766,3.767 0.627,2.511 -0.419,4.604 -1.884,5.023 C 8.999,37.457 7.325,35.992 6.697,33.481 6.278,30.969 7.115,28.877 8.79,28.458 Z m 2.719,13.811 c -0.837,-3.976 0.419,-4.603 1.884,-0.837 2.302,5.441 3.557,12.346 3.348,20.716 0,3.139 -2.511,3.348 -2.721,0.419 -0.837,-7.324 -1.046,-14.23 -2.511,-20.298 z m 24.274,6.487 c 0.209,-3.976 1.046,-8.161 2.51,-12.136 0.628,-1.884 1.465,-2.093 2.511,-1.047 3.767,-6.068 2.93,-2.72 1.256,1.884 0,0 1.046,0.627 1.046,0.627 4.603,-8.579 2.721,-1.673 2.302,2.092 -3.348,4.186 -5.65,5.023 -6.696,2.093 0,0 -1.046,5.44 -1.046,5.44 -0.837,2.511 -1.465,2.93 -1.883,1.047 z"
                            id="path26"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(72.61038,241.89387)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g32">
                            <path
                            d="m 7.7422,158.194 c -1.4649,5.649 -7.7422,2.72 -4.6036,-2.302 7.7422,-12.555 15.2754,-25.11 16.7403,-42.059 0.4179,-6.069 4.1846,-8.789 8.9966,-11.509 10.254,-5.65 13.811,-15.275 13.602,-26.156 C 40.1755,28.877 53.3585,8.161 73.6565,0 c 0,0 -0.628,1.883 -0.628,1.883 -18.205,11.09 -25.738,32.434 -25.947,61.52 -0.209,6.486 -0.837,13.183 0,20.297 0,0 0.627,-1.464 0.627,-1.464 0.628,-17.159 0.628,-31.807 2.72,-41.851 2.302,-11.09 5.86,-17.786 9.417,-22.599 1.255,-1.674 2.301,-3.767 3.557,-5.022 1.674,-1.673 3.557,-2.092 5.022,-3.557 0,0 -0.209,1.465 -0.209,1.465 -6.905,6.905 -12.764,15.694 -15.485,27.203 -2.93,13.182 -3.139,28.458 -2.092,44.361 -0.21,2.302 -0.628,4.185 -1.465,5.858 0,0 0.837,-0.418 0.837,-0.418 1.256,-2.511 1.883,-5.44 1.883,-8.998 -1.465,-19.251 0,-38.712 6.905,-52.312 4.814,-9.417 7.743,-12.974 21.135,-20.507 0,0 -0.419,1.465 -0.419,1.465 -11.299,7.742 -21.971,16.74 -24.063,47.29 0,0 0.628,-0.627 0.628,-0.627 2.091,-23.228 10.462,-40.386 25.947,-46.663 5.44,-2.302 11.927,-1.884 19.0405,-1.884 0,0 -1.2545,1.047 -1.2545,1.047 -10.881,-1.047 -20.298,2.72 -28.458,11.299 0,0 1.255,0.419 1.255,0.419 7.742,-7.951 16.74,-12.346 28.0395,-9.835 0,0 -0.8365,1.674 -0.8365,1.674 -7.951,-1.255 -14.647,1.673 -20.925,6.487 0,0 0,0.837 0,0.837 7.114,-4.813 13.601,-7.114 19.878,-5.86 2.0925,0.209 2.7205,1.884 2.0925,4.395 0,0 -1.2545,11.509 -1.2545,11.509 -0.21,11.091 -0.838,21.971 -3.558,31.806 0,0 -1.047,0.836 -1.047,0.836 0,0 1.047,-19.25 1.047,-19.25 0,0 -4.394,23.855 -4.394,23.855 -0.418,2.72 -2.302,2.302 -1.883,-0.21 1.046,-5.022 2.72,-11.927 3.767,-19.251 -1.047,0.209 -1.884,0.837 -2.093,2.302 -1.256,10.254 -2.93,18.624 -5.232,21.552 1.465,-6.486 2.302,-12.973 2.511,-19.46 0,0 -1.255,1.046 -1.255,1.046 0,0 -3.138,18.205 -3.138,18.205 2.301,1.256 -0.628,3.139 -1.465,0.837 0,0 1.046,-10.044 1.046,-10.044 0,0 -0.837,-0.209 -0.837,-0.209 0,0 -4.395,16.113 -4.395,16.113 0,0 1.465,-11.091 1.465,-11.091 0,0 -3.767,11.091 -3.767,11.091 0,0 -1.464,0 -1.464,0 0,0 1.883,-9.416 1.883,-9.416 0,0 -6.277,17.158 -6.277,17.158 -1.884,0.418 -2.093,-0.209 -0.628,-3.139 0,0 3.976,-11.718 3.976,-11.718 0,0 -1.256,0.209 -1.256,0.209 -2.511,8.58 -4.394,14.648 -7.533,16.531 0,0 -1.046,0.209 -1.046,0.209 4.394,-7.742 5.022,-11.508 5.231,-15.275 -2.302,7.324 -4.603,12.555 -8.789,16.95 -0.627,-0.628 0.21,-2.511 2.721,-7.116 0,0 2.302,-6.067 2.302,-6.067 -1.046,-1.256 -1.674,-0.838 -2.302,1.046 -1.465,5.231 -2.93,8.788 -5.65,12.137 0,0 2.72,-10.253 2.72,-10.253 0,0 -0.418,-1.256 -0.418,-1.256 -1.884,6.068 -4.394,11.3 -7.952,14.438 0,0 1.675,0.837 1.675,0.837 5.649,-3.766 13.391,-2.512 21.343,-6.068 1.674,-0.837 3.348,-1.256 4.394,-0.419 0,0 -1.465,3.975 -1.465,3.975 0,0 -1.465,-2.301 -1.465,-2.301 -0.836,3.139 -2.091,6.068 -3.766,7.324 0,0 -0.628,-4.604 -0.628,-4.604 -3.348,7.324 -5.649,11.3 -5.858,7.743 0,0 0.627,-4.395 0.627,-4.395 -2.511,2.512 -4.185,5.44 -4.813,8.998 -1.255,-0.209 -1.465,-2.721 -1.046,-6.277 0,0 -2.093,7.742 -2.093,7.742 -1.883,0.418 -2.301,-1.674 -1.255,-6.277 -1.674,4.184 -3.139,7.114 -3.766,7.533 -0.837,-1.256 -1.047,-3.349 -0.419,-6.069 0,0 -2.092,3.976 -2.092,3.976 0,2.93 -0.838,3.976 -2.093,3.767 0.627,-4.395 0.627,-6.069 -0.21,-5.023 0,0 -2.51,6.696 -2.51,6.696 -1.465,0.837 -1.883,-0.837 -1.674,-4.603 -2.302,1.256 -1.674,5.859 -3.348,7.742 -1.256,-0.837 -1.465,-2.93 -1.256,-5.231 -1.046,3.557 -2.093,5.649 -3.557,5.859 0,0 -0.418,-6.905 -0.418,-6.905 -0.628,3.138 -1.465,5.649 -2.721,7.742 0,0 -1.883,-5.023 -1.883,-5.023 0,0 -0.837,4.814 -0.837,4.814 -1.465,0.837 -2.72,-0.419 -3.557,-3.558 -0.209,6.488 -0.837,11.928 -5.023,14.648 0.419,1.674 -1.4637,6.068 -3.9754,11.091 0,0 6.6964,-9.835 6.6964,-9.835 1.465,-0.419 2.093,0.418 1.465,3.557 0,0 -6.9056,11.299 -6.9056,11.299 -1.0459,1.256 -2.3017,0.837 -3.5576,0 -1.4648,5.65 -3.9756,9.626 -6.4863,13.393 2.9297,-1.884 4.8125,-5.86 7.1142,-11.3 0.419,-1.674 2.3018,0.418 1.6739,3.766 0,0 -1.6739,1.465 -1.6739,1.465 0,0 0.209,2.511 0.209,2.511 0,0 -2.0918,0.209 -2.0918,0.209 0,0 0,3.349 0,3.349 0,0 -1.8838,0.837 -1.8838,0.837 1.8838,4.603 -0.4179,7.533 -5.0214,5.231 z"
                            id="path30"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(119.69188,241.05687)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g36">
                            <path
                            d="M 0,1.465 C 0,1.465 8.161,0 8.161,0 8.161,0 7.742,1.674 7.742,1.674 7.742,1.674 0,1.465 0,1.465 Z"
                            id="path34"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(43.52438,292.53187)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g40">
                            <path
                            d="M 0,13.811 C 1.0459,9.835 3.7666,7.534 6.4864,2.721 8.1602,0 8.7881,1.884 8.5791,4.395 5.0215,9.626 2.3018,12.346 0,13.811 Z"
                            id="path38"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(43.73338,220.54987)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g44">
                            <path
                            d="M 85.3745,18.205 C 71.9825,6.278 58.7995,0 48.9649,2.093 30.3408,6.278 21.3438,23.436 15.9033,39.758 19.042,34.317 21.7617,30.76 25.1104,29.714 15.9033,44.361 10.6719,59.219 9.835,76.377 9.207,78.47 8.1611,80.352 6.4873,81.817 0.6279,86.212 1.0459,89.769 0,93.326 1.2559,92.489 2.7197,89.769 4.6035,87.468 7.1143,84.328 10.044,80.98 11.2998,75.54 c 1.8828,-7.324 2.7197,-14.647 4.1846,-20.088 2.0928,-7.115 4.1855,-11.928 7.9512,-18.205 6.6963,-11.09 15.2754,-21.135 25.1103,-25.319 0,0 0,0.837 0,0.837 -9.625,5.231 -16.5303,13.182 -24.2724,25.528 -1.8838,3.139 -3.1387,6.068 -4.8135,10.463 -1.6739,3.975 -3.3477,8.579 -3.7666,13.81 -1.2549,11.3 -3.9756,18.623 -7.1143,23.018 -3.3476,4.394 -5.4404,6.277 -6.0683,8.37 C 2.0928,95 1.2559,96.884 1.4649,98.976 8.7881,85.166 12.1367,86.421 15.2754,76.586 19.6699,61.52 16.7403,46.035 36.8281,24.064 c 0,0 1.4649,0 1.4649,0 -9.626,11.09 -16.1123,21.553 -19.46,43.943 -0.6279,3.766 -1.2558,8.998 -2.9297,12.136 -2.5117,4.813 -7.7422,8.58 -9.207,13.392 0,0 1.0459,-0.209 1.0459,-0.209 2.5107,-2.511 7.5332,-8.37 9.416,-12.346 C 23.2266,69.263 21.1348,53.568 28.877,41.014 38.9209,24.482 46.6631,15.903 59.0085,11.091 c 0,0 1.465,-0.209 1.465,-0.209 -16.9491,8.997 -19.8788,15.484 -27.203,25.528 -2.5107,3.348 -4.3935,6.695 -6.4863,12.974 -1.8838,5.44 -3.1387,13.81 -4.1856,20.297 -1.2548,8.37 -4.3935,13.392 -7.7421,17.577 -1.8829,2.302 -3.3477,3.348 -4.8125,5.44 -1.2559,1.884 -2.5108,5.442 -3.1387,7.952 0,0 1.0459,-0.419 1.0459,-0.419 4.6035,-12.345 7.3242,-9.625 10.6719,-13.81 1.8838,-2.511 4.8125,-7.533 5.6504,-13.392 1.2548,-12.136 3.7656,-21.344 7.9511,-29.296 4.3946,-8.788 11.2998,-18.414 19.0419,-24.9 3.558,-2.93 6.277,-4.604 11.09,-6.068 0,0 1.047,0 1.047,0 -5.651,3.766 -9.417,4.812 -13.8107,8.998 -7.1152,6.695 -14.0205,16.74 -17.3682,25.319 -3.5576,8.161 -5.4404,17.158 -6.4873,26.365 0.21,-1.255 0.8379,0.628 1.2559,-0.418 3.7666,-21.762 11.5088,-37.038 21.3437,-46.872 5.4406,-5.65 11.9266,-9.835 17.9956,-11.3 0,0 3.976,-0.209 3.976,-0.209 -9.207,2.511 -17.996,6.906 -24.6923,17.159 0,0 1.2559,-0.209 1.2559,-0.209 8.1614,-8.789 16.3214,-12.765 24.2734,-14.648 0,0 1.255,0.209 1.255,0.209 -5.441,1.883 -10.462,3.976 -13.601,6.905 0,0 0.418,1.255 0.418,1.255 6.069,-3.975 15.276,-6.067 26.157,-7.114 z"
                            id="path42"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(43.94238,322.45487)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g48">
                            <path
                            d="M 1.4648,7.742 C 0.4189,6.069 0,4.186 0,2.512 0.209,0 2.0928,0.21 2.5107,1.884 2.9297,5.023 1.4648,5.232 1.4648,7.742 Z"
                            id="path46"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(69.68068,349.44887)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g52">
                            <path
                            d="M 0,3.138 C 0,3.138 2.0918,0.837 2.0918,0.837 3.1387,0.209 4.3935,0 5.2314,0.418 5.0215,1.464 2.7197,2.511 0,3.138 Z"
                            id="path50"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(67.79688,354.88987)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g56">
                            <path
                            d="M 0,4.184 C 0,4.184 2.7207,1.255 2.7207,1.255 4.1855,0.209 5.8594,0 7.1152,0.627 6.6963,1.883 3.7666,3.347 0,4.184 Z"
                            id="path54"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(68.00688,358.65587)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g60">
                            <path
                            d="m 0,3.766 c 0,0 3.1386,-2.72 3.1386,-2.72 C 4.6035,0.209 6.4863,0 7.7421,0.837 7.3232,1.883 3.7656,3.139 0,3.766 Z"
                            id="path58"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(68.84378,362.00387)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g64">
                            <path
                            d="M 0,3.348 C 0,3.348 2.9287,0.837 2.9287,0.837 4.3935,0 6.0683,0 7.3232,0.628 6.6963,1.883 3.5566,2.93 0,3.348 Z"
                            id="path62"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(70.30858,365.56087)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g68">
                            <path
                            d="M 0,2.929 C 0,2.929 1.8828,0.838 1.8828,0.838 2.9287,0.21 4.1846,0 5.0215,0.419 4.8125,1.256 2.5108,2.301 0,2.929 Z"
                            id="path66"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(80.98048,333.54587)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g72">
                            <path
                            d="M 0,1.465 C 0,1.465 1.6738,0.418 1.6738,0.418 2.5107,0 3.5566,0.209 3.9756,0.628 3.7656,1.255 1.8828,1.465 0,1.465 Z"
                            id="path70"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(78.25978,336.68487)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g76">
                            <path
                            d="M 0,1.883 C 0,1.883 3.5576,0.209 3.5576,0.209 5.2314,0 6.9053,0.209 7.7422,1.255 6.9053,2.301 3.7666,2.51 0,1.883 Z"
                            id="path74"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(80.35258,327.26787)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g80">
                            <path
                            d="M 0,2.72 C 0,2.72 2.7197,0.628 2.7197,0.628 3.9755,0 5.4404,0 6.4863,0.628 5.8584,1.675 3.1386,2.302 0,2.72 Z"
                            id="path78"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(82.44438,324.33887)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g84">
                            <path
                            d="M 0,0.628 C 0,0.628 2.7207,0 2.7207,0 3.9755,0 5.2314,0.628 5.6503,1.465 5.0224,2.093 2.5117,1.674 0,0.628 Z"
                            id="path82"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(76.58598,379.99887)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g88">
                            <path
                            d="M 0,1.256 C 0,1.256 1.8828,0.21 1.8828,0.21 2.7197,0 3.7666,0.21 4.1845,0.419 3.9755,1.047 2.0918,1.465 0,1.256 Z"
                            id="path86"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(74.28418,374.76887)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g92">
                            <path
                            d="m 8.1602,0 c 0,0 -4.6026,0.627 -4.6026,0.627 C 1.6738,1.464 0.209,3.138 0,4.603 1.4648,5.021 4.8125,2.928 8.1602,0 Z"
                            id="path90"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(73.65628,372.67587)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g96">
                            <path
                            d="m 6.6963,0 c 0,0 -3.5577,0 -3.5577,0 C 1.4648,0.418 0.209,1.465 0,2.72 1.0459,3.139 3.9756,1.883 6.6963,0 Z"
                            id="path94"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(96.67388,383.13787)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g100">
                            <path
                            d="M 0,6.696 C 0,6.696 2.093,2.302 2.093,2.302 3.139,0.838 5.021,0 6.696,0 6.696,1.465 3.767,4.394 0,6.696 Z"
                            id="path98"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(105.88088,383.97587)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g104">
                            <path
                            d="M 0.209,1.464 C 0.209,1.464 3.976,0 3.976,0 5.859,0 7.533,0.627 8.37,1.674 c 0,0 -0.209,0 -0.209,0 -0.21,1.254 -2.721,3.556 -5.859,5.23 0,0 1.883,-3.557 1.883,-3.557 0.418,-0.419 0.837,-0.837 1.464,-1.255 -0.418,0 -0.837,0 -1.254,0 C 3.557,3.138 1.883,4.393 0,5.649 0,5.649 1.465,2.719 1.465,2.719 1.674,2.301 2.093,2.092 2.302,1.883 1.674,1.674 1.046,1.674 0.209,1.464 Z"
                            id="path102"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(118.64588,385.43987)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g108">
                            <path
                            d="M 5.649,0.628 C 6.905,0 11.298,1.046 10.672,2.511 c -0.21,1.255 -2.93,3.557 -5.86,5.65 0,0 1.674,-3.767 1.674,-3.767 0.419,-0.628 0.837,-0.837 1.256,-1.256 -0.419,0 -1.047,0 -1.465,0 C 5.44,4.185 3.975,5.44 2.091,6.696 c 0,0 1.256,-3.139 1.256,-3.139 C 3.556,3.348 3.975,3.138 4.184,2.929 3.765,2.929 3.347,2.72 3.138,2.72 2.51,3.557 1.255,4.394 0,5.231 0,5.231 0.837,3.138 0.837,3.138 2.301,1.255 3.347,1.464 5.649,0.628 Z"
                            id="path106"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(151.28788,378.32487)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g112">
                            <path
                            d="M 0,7.115 C 0,3.558 2.721,1.465 7.952,0.837 14.02,0 21.344,1.256 19.251,3.977 c 0,0 -0.209,0 -0.627,0 0,0 -1.047,2.511 -1.047,2.511 0,0 -2.301,4.184 -2.301,4.184 0,0 1.464,-4.603 1.464,-4.603 0,0 0.628,-2.302 0.628,-2.302 -0.628,-0.209 -1.673,-0.628 -2.72,-0.837 0,0 -1.883,1.883 -1.883,1.883 0,0 -3.139,3.557 -3.139,3.557 0,0 2.511,-4.184 2.511,-4.184 0,0 1.047,-1.675 1.047,-1.675 -0.419,0 -0.838,-0.209 -1.256,-0.209 0,0 -1.884,1.884 -1.884,1.884 0,0 -3.139,3.557 -3.139,3.557 0,0 2.511,-3.976 2.511,-3.976 0,0 1.047,-1.674 1.047,-1.674 -0.628,0 -1.256,0 -1.674,0 0,0 -1.256,1.884 -1.256,1.884 0,0 -2.929,3.766 -2.929,3.766 0,0 2.092,-4.394 2.092,-4.394 0,0 0.628,-1.047 0.628,-1.047 -0.836,0.209 -1.673,0.419 -2.301,0.628 0,0 -1.465,3.558 -1.465,3.558 0,0 0.628,-3.349 0.628,-3.349 C 2.302,3.977 0.628,5.023 0,7.115 Z"
                            id="path110"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(131.61888,382.30187)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g116">
                            <path
                            d="m 0,6.067 c 0,0 0,-0.209 0,-0.209 0,0 0,-0.209 0,-0.209 0,0 0.418,0 0.418,0 0,0 5.232,-3.348 5.232,-3.348 3.557,-1.674 7.951,-2.301 7.323,0.628 0,0.209 -0.418,0.628 -1.255,0.837 0,1.046 0.209,2.301 0.209,3.557 0,0 -1.465,-3.139 -1.465,-3.139 -0.418,0 -0.628,0 -0.837,0 0,1.674 0,3.348 0.209,5.022 0,0 -2.092,-4.604 -2.092,-4.604 -0.418,0.21 -0.627,0.21 -1.046,0.21 0.21,2.302 0.21,4.813 0.21,7.324 0,0 -2.93,-6.069 -2.93,-6.069 0,-0.209 0,-0.418 0,-0.418 -0.419,1.255 -0.628,2.72 -1.047,3.976 0,0 -0.627,-4.186 -0.627,-4.186 0,0 0,0 0,0 C 1.674,7.114 0.837,9.206 0.209,11.299 0.209,11.299 0,6.904 0,6.904 0,6.486 0,6.276 0,5.858 c 0,0 0,0 0,0.209 z"
                            id="path114"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(71.77248,237.91787)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g120">
                            <path
                            d="M 0,8.998 C 2.9297,6.068 6.0693,2.93 8.998,0 5.4414,1.465 2.3017,4.395 0,8.998 Z"
                            id="path118"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(119.27288,396.11087)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g124">
                            <path
                            d="M 1.883,14.439 C 1.046,12.346 0,10.463 1.883,5.651 3.557,1.256 5.65,0 6.906,0.21 8.37,1.884 6.487,5.232 7.324,9.417 c 0,0 -3.348,-2.929 -3.348,-2.929 0,0 1.046,5.649 1.046,5.649 0,0 -2.511,-2.72 -2.511,-2.72 0,0 -0.628,5.022 -0.628,5.022 z"
                            id="path122"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(149.19588,414.73487)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g128">
                            <path
                            d="M 1.674,1.255 C 1.255,0.418 0.627,0 0.418,0 0,0.209 0.418,1.046 0.836,1.883 1.464,2.72 2.092,3.139 2.302,3.139 2.511,2.93 2.302,2.092 1.674,1.255 Z"
                            id="path126"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(148.35888,417.87387)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g132">
                            <path
                            d="M 2.511,1.883 C 1.673,0.627 0.837,0 0.418,0.209 0,0.418 0.418,1.465 1.255,2.72 2.092,3.976 2.929,4.604 3.348,4.395 3.557,4.185 3.348,3.139 2.511,1.883 Z"
                            id="path130"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(147.10388,421.64087)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g136">
                            <path
                            d="M 1.882,1.674 C 1.255,0.628 0.627,0 0.418,0 0,0.209 0.209,1.255 0.627,2.302 1.255,3.138 1.882,3.975 2.092,3.766 2.51,3.766 2.301,2.719 1.882,1.674 Z"
                            id="path134"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(144.80188,423.94287)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g140">
                            <path
                            d="M 2.302,2.928 C 1.883,1.254 0.837,0 0.418,0.208 0,0.417 0,1.882 0.627,3.556 1.046,5.021 1.883,6.277 2.302,6.277 2.929,6.068 2.929,4.603 2.302,2.928 Z"
                            id="path138"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(120.31888,425.19687)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g144">
                            <path
                            d="M 2.302,0.21 C 3.558,0.419 4.394,0.837 4.394,1.256 4.185,1.465 3.139,1.674 2.092,1.465 1.046,1.256 0,0.837 0.209,0.628 0.209,0.21 1.255,0 2.302,0.21 Z"
                            id="path142"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(118.85488,422.47787)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g148">
                            <path
                            d="M 2.719,0.209 C 4.184,0.418 5.231,1.046 5.231,1.465 5.231,1.882 3.975,2.091 2.51,1.882 1.046,1.465 0,1.046 0,0.628 0,0.209 1.254,0 2.719,0.209 Z"
                            id="path146"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(117.38988,419.12887)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g152">
                            <path
                            d="M 3.557,0.21 C 5.231,0.628 6.487,1.256 6.487,1.675 6.277,2.302 4.812,2.512 3.138,2.093 1.465,1.884 0,1.256 0.209,0.628 0.209,0.21 1.674,0 3.557,0.21 Z"
                            id="path150"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(174.09688,378.11587)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g156">
                            <path
                            d="M 1.255,5.65 C 0,1.465 4.603,0 9.416,2.093 13.182,3.558 17.786,4.186 23.854,2.93 26.784,2.302 29.923,2.302 33.061,2.72 36.2,4.395 35.991,5.86 32.433,6.487 25.738,12.764 20.716,19.251 19.879,25.529 17.577,22.39 22.389,14.439 29.923,4.604 25.319,8.161 21.135,12.764 17.158,17.995 17.995,14.648 20.716,10.044 24.482,5.022 16.321,11.09 10.672,20.088 11.509,36.828 8.37,26.785 10.463,17.159 16.949,7.743 c 0,0 -8.998,9.416 -8.998,9.416 0,0 8.161,-12.555 8.161,-12.555 0,0 -5.022,1.674 -5.022,1.674 0,0 0.419,-1.883 0.419,-1.883 0,0 -3.139,1.465 -3.139,1.465 0,0 0,-2.093 0,-2.093 0,0 -4.186,3.348 -4.186,3.348 0,0 0.838,-3.557 0.838,-3.557 C 3.557,2.72 2.511,3.976 1.255,5.65 Z"
                            id="path154"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(178.69988,407.41087)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g160">
                            <path
                            d="M 0.419,0 C 0,2.511 0.209,5.441 2.302,8.37 2.93,8.998 3.767,8.161 3.348,6.697 1.883,5.441 1.046,2.93 0.419,0 Z"
                            id="path158"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(188.74388,408.66687)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g164">
                            <path
                            d="m 0.837,0 c 0.419,0 0.837,1.046 0.837,2.511 0,1.465 -0.418,2.72 -0.837,2.72 C 0.419,5.231 0,3.976 0,2.511 0,1.046 0.419,0 0.837,0 Z"
                            id="path162"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(196.90488,397.78587)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g168">
                            <path
                            d="M 2.302,0.209 C 2.511,0.418 2.511,1.464 2.092,2.511 1.464,3.766 0.837,4.604 0.418,4.394 0,4.394 0.209,3.139 0.628,2.092 1.255,0.837 1.883,0 2.302,0.209 Z"
                            id="path166"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(198.99688,392.97287)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g172">
                            <path
                            d="M 2.512,0 C 2.93,0.419 2.512,1.256 1.884,2.093 1.256,3.138 0.419,3.766 0.21,3.557 0,3.348 0.21,2.302 0.838,1.465 1.465,0.419 2.302,0 2.512,0 Z"
                            id="path170"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(279.97788,401.13387)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g176">
                            <path
                            d="M 0,0 C 3.557,1.256 3.975,6.277 2.092,12.346 2.301,7.323 1.465,3.348 0,0 Z"
                            id="path174"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(260.51788,423.73287)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g180">
                            <path
                            d="M 1.255,3.138 C 1.046,2.092 0.628,1.046 0,0 c 0.209,1.255 0.418,2.511 0.628,3.766 0,0 0.627,-0.628 0.627,-0.628 z"
                            id="path178"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(220.75988,363.67787)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g184">
                            <path
                            d="m 0,0 c 0.418,0 1.046,0 1.674,0.209 0,0 1.674,2.721 1.674,2.721 C 2.72,2.93 2.093,2.721 1.465,2.511 1.465,2.511 0,0 0,0 Z"
                            id="path182"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(216.78388,381.88287)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g188">
                            <path
                            d="m 0.627,0 c 0.419,0.209 1.047,1.255 1.256,2.302 0.209,1.046 0,1.674 -0.418,1.465 C 1.046,3.557 0.418,2.72 0.209,1.674 0,0.628 0.209,0 0.627,0 Z"
                            id="path186"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(220.13188,381.46387)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g192">
                            <path
                            d="M 0.419,0.21 C 0.628,0 1.256,0.838 1.465,1.884 1.883,2.93 2.093,3.767 1.883,3.976 1.465,3.976 1.046,3.349 0.628,2.302 0.209,1.047 0,0.21 0.419,0.21 Z"
                            id="path190"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(224.10788,381.04587)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g196">
                            <path
                            d="M 0.209,0 C 0.627,0 1.464,1.256 1.673,2.72 1.883,3.976 2.092,4.604 1.046,4.604 0.209,4.813 0.418,4.185 0.209,2.72 0,1.465 0,0 0.209,0 Z"
                            id="path194"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(227.45588,379.78987)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g200">
                            <path
                            d="M 0.418,0 C 0.627,0 1.464,1.046 2.092,2.721 2.511,4.186 2.72,5.65 2.302,5.65 1.883,5.86 1.255,4.813 0.627,3.139 0.209,1.465 0,0.209 0.418,0 Z"
                            id="path198"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(231.22188,379.58087)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g204">
                            <path
                            d="M 0.419,0.209 C 1.047,0 1.675,1.465 2.093,3.139 2.512,5.022 2.302,6.487 1.884,6.696 1.465,6.696 0.628,5.232 0.419,3.557 0,1.674 0,0.209 0.419,0.209 Z"
                            id="path202"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(235.40688,380.20887)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g208">
                            <path
                            d="M 0.419,0.209 C 0.837,0 2.093,2.093 2.302,3.767 2.721,5.441 2.93,6.277 1.674,6.486 0.209,6.695 0.628,5.859 0.209,3.976 0,2.302 0,0.209 0.419,0.209 Z"
                            id="path206"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(238.12788,379.37187)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g212">
                            <path
                            d="M 0.418,0.209 C 1.046,0 1.674,1.464 2.302,3.348 2.72,5.231 2.72,6.905 2.302,6.905 1.883,7.114 1.046,5.65 0.627,3.766 0.209,1.883 0,0.209 0.418,0.209 Z"
                            id="path210"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(241.89388,378.53387)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g216">
                            <path
                            d="M 1.047,0 C 1.465,0 2.092,1.884 2.092,4.186 2.092,6.488 1.674,8.37 1.047,8.37 0.628,8.37 0,6.488 0,4.186 0,1.884 0.419,0 1.047,0 Z"
                            id="path214"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(245.65988,379.78987)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g220">
                            <path
                            d="M 0.837,0 C 1.256,0 1.674,1.674 1.674,3.558 1.674,5.65 1.256,7.114 0.837,7.114 0.21,7.114 0,5.65 0,3.558 0,1.674 0.21,0 0.837,0 Z"
                            id="path218"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(249.21788,378.74387)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g224">
                            <path
                            d="M 0.837,0 C 1.256,0 1.674,1.883 1.674,4.185 1.674,6.487 1.256,8.37 0.837,8.37 0.418,8.37 0,6.487 0,4.185 0,1.883 0.418,0 0.837,0 Z"
                            id="path222"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(252.35688,377.69687)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g228">
                            <path
                            d="M 1.464,0 C 2.092,0.21 2.301,2.093 2.092,4.814 1.673,7.116 1.255,9.207 0.627,9.207 0.209,9.207 0,7.116 0.209,4.605 0.419,2.093 0.836,0 1.464,0 Z"
                            id="path226"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(256.75088,377.48787)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g232">
                            <path
                            d="M 2.092,0 C 2.72,0 2.72,2.093 2.302,4.604 1.883,7.115 1.255,8.998 0.628,8.998 0.209,8.998 0,6.906 0.418,4.395 0.837,1.884 1.674,0 2.092,0 Z"
                            id="path230"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(261.35488,374.97787)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g236">
                            <path
                            d="m 1.464,0.209 c 0.628,0 1.674,3.138 1.255,6.068 C 2.092,9.416 1.254,11.926 0.627,11.717 0,11.508 0.418,8.998 0.837,6.068 1.254,2.929 1.046,0 1.464,0.209 Z"
                            id="path234"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(241.26588,398.62287)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g240">
                            <path
                            d="M 0.21,0.209 C 0.419,0 0.838,0.837 1.256,1.674 1.675,2.72 1.675,3.767 1.675,3.767 1.466,3.976 0.838,3.139 0.628,2.302 0.21,1.255 0,0.209 0.21,0.209 Z"
                            id="path238"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(244.19488,397.78587)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g244">
                            <path
                            d="M 0.21,0 C 0.628,0 1.256,1.046 1.675,2.302 2.093,3.557 2.093,4.185 1.465,4.394 0.628,4.813 0.837,3.976 0.419,2.72 0,1.674 0,0.209 0.21,0 Z"
                            id="path242"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(272.65288,378.95287)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g248">
                            <path
                            d="m 0,10.044 c 0,0.419 0,0.837 0,1.465 C 0.628,11.091 1.256,10.672 1.884,10.253 2.302,6.487 2.302,2.93 2.093,0 1.465,3.767 0.838,7.115 0,10.044 Z"
                            id="path246"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(224.94388,358.23687)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g252">
                            <path
                            d="m 45.618,35.364 c -1.047,5.44 -1.256,7.114 -3.349,8.998 0.837,-3.349 0.419,-5.86 0.419,-6.488 -0.628,0.21 -1.046,0.419 -1.465,0.419 0,0.209 0,0.419 0,0.628 0.209,2.092 0.209,4.813 -2.302,8.16 -0.209,-2.928 1.046,-5.649 1.046,-8.579 -0.628,0.21 -1.046,0.419 -1.674,0.628 0,0.419 0,2.721 0,2.93 -0.209,1.255 -1.464,4.395 -1.673,4.604 0.209,0 1.045,-6.069 0.418,-7.325 -0.418,0.21 -1.046,0.21 -1.464,0.419 0,0.209 0,0.628 0,0.837 -0.21,0.628 -0.21,1.256 -0.628,1.256 -0.21,0 -0.419,-0.419 -0.419,-1.047 -0.209,-0.209 -0.209,-0.628 -0.418,-0.837 -0.21,0 -0.628,0 -1.047,0.209 0,0 0,0.21 0,0.21 0.21,0.627 0.21,1.046 0,1.255 -0.209,0 -0.627,-0.628 -1.046,-1.255 -0.419,0 -0.837,0.209 -1.046,0.209 0.209,1.046 0.209,1.465 -0.628,1.883 -1.047,0.419 -1.047,-0.627 -1.256,-1.674 -0.628,0.209 -1.254,0.209 -1.882,0.419 0.209,0.837 0,1.465 -0.21,1.465 -0.209,0.209 -0.627,-0.419 -1.046,-1.256 -0.628,0 -1.046,0 -1.674,0 0.209,0.837 0.209,1.256 0,1.465 -0.209,0 -0.628,-0.419 -1.046,-1.256 0,0 -0.21,0.21 -0.21,0.21 0,-0.21 0,-0.21 0.21,-0.21 -0.21,-0.209 -0.21,-0.628 -0.419,-1.046 -0.628,-1.256 -0.837,-2.511 -0.628,-2.721 0.419,-0.209 1.047,0.628 1.674,2.093 0.21,0.419 0.419,1.046 0.419,1.465 0.418,-0.209 1.046,-0.419 1.465,-0.419 0,-0.418 0,-0.627 -0.209,-0.837 -0.419,-1.674 -0.419,-3.138 0,-3.347 0.418,-0.209 1.046,1.045 1.464,2.72 0,0.209 0.21,0.627 0.21,1.046 0.628,-0.209 1.045,-0.419 1.673,-0.628 -0.209,-1.046 -0.209,-1.465 -0.209,-2.093 0,-0.836 0,-1.254 0.209,-1.254 0.209,-0.209 1.256,1.254 1.674,2.929 0.419,-0.21 0.628,-0.21 1.046,-0.419 -0.209,-0.209 -0.209,-0.209 -0.209,-0.418 -0.418,-1.256 -0.418,-1.674 -0.418,-2.511 -0.21,-0.628 -0.21,-0.837 0,-1.046 0.209,-0.21 1.255,1.465 1.674,2.929 0,0.209 0,0.418 0.209,0.628 0.419,-0.21 0.628,-0.21 1.046,-0.419 0,0 0,-0.209 0,-0.419 0,-1.045 0,-2.091 0,-2.929 0,-0.836 0.21,-1.255 0.419,-1.255 0.209,0 0.418,0.419 0.628,1.046 0.209,0.837 0.418,1.884 0.628,2.929 0,0 0,0 0,0 0.418,0 0.837,-0.209 1.255,-0.417 0,-0.837 0,-1.256 0,-1.675 0.209,-0.628 0.209,-1.046 0.419,-1.046 0.209,-0.209 0.627,1.046 0.836,2.093 0.628,-0.209 1.046,-0.419 1.674,-0.628 0,-0.837 0,-1.674 0,-2.302 0,-0.628 0.209,-1.256 0.419,-1.256 0.209,-0.209 0.418,0.209 0.418,0.837 0.21,0.628 0.419,1.256 0.419,2.093 0.418,-0.209 0.837,-0.209 1.255,-0.628 0,0 0,0 0,0 0,-1.255 0.21,-2.511 0.21,-3.348 0.209,-0.837 0.418,-1.465 0.627,-1.465 0.21,-0.209 0.419,0.209 0.419,1.046 0.209,0.838 0.209,1.884 0.209,3.14 0.419,-0.21 0.837,-0.419 1.256,-0.419 1.465,-5.859 3.347,-13.811 3.347,-20.925 C 47.919,11.927 47.5,11.3 47.082,10.463 46.664,18.414 46.036,25.111 43.525,29.504 44.781,23.018 44.99,16.113 43.316,8.162 c 0,0 -0.21,0 -0.21,0 -0.209,0 -0.209,0 -0.418,0 0.209,8.579 0.209,15.693 -2.093,20.505 C 41.432,21.762 41.223,14.439 38.503,6.278 38.084,6.069 37.665,5.86 37.248,5.86 c 1.882,1.674 1.464,8.37 0.627,9.416 -1.255,-3.976 -0.21,-5.232 -3.766,-7.952 -0.419,0 -0.628,0 -1.047,0 1.884,2.092 2.093,5.231 1.674,7.743 -1.046,-2.302 -2.72,-5.023 -4.394,-6.696 -0.628,0 -1.256,0 -1.884,0 2.721,3.138 2.721,3.766 2.302,6.277 -1.046,-2.721 -5.23,-4.604 -6.905,-5.859 -0.837,0 -1.046,0.209 -1.883,0.209 2.093,1.046 5.022,4.813 3.976,6.069 -1.465,-1.674 -4.604,-3.349 -5.86,-5.651 -0.837,0 -0.418,0.419 -1.255,0.419 0.418,1.256 0,2.092 0.209,3.558 -1.882,-0.419 -2.929,-0.628 -5.231,-3.14 -0.418,0 -1.255,-0.209 -1.255,0 0.209,0.628 1.046,2.093 1.255,2.721 C 13.393,12.346 8.999,10.044 8.58,9.416 8.371,9.207 9.416,9.207 6.906,8.998 7.115,9.625 8.58,12.974 8.79,13.602 8.371,12.974 5.232,9.625 4.814,9.207 3.767,8.998 2.93,8.998 1.884,8.789 1.884,8.789 0,5.65 0,5.65 9.416,6.278 19.879,5.86 32.435,3.558 c 0,0 11.718,-2.302 11.718,-2.302 3.975,-1.256 6.696,0.837 7.533,6.906 0,0 0.627,6.695 0.627,6.695 2.512,3.557 3.558,7.952 1.047,14.02 1.046,4.394 3.556,8.161 7.323,11.299 3.349,3.139 3.767,7.533 -0.209,13.811 -3.558,9.207 -8.579,14.857 -12.974,20.926 0,0.209 -0.418,0.418 -0.418,0.626 -0.209,0.21 -0.418,0.419 -0.627,0.838 0.209,-0.419 0.418,-0.628 0.627,-1.046 -0.209,-1.046 -0.418,-2.093 -0.627,-3.139 0.627,0.837 0.836,1.465 1.045,2.302 0.628,-1.046 1.256,-2.092 1.884,-3.139 -0.21,-1.046 -0.419,-2.093 -0.628,-3.348 0.418,0.837 0.837,1.465 1.255,2.302 0.419,-0.837 1.047,-1.675 1.465,-2.512 -0.418,-1.046 -0.627,-2.301 -1.046,-3.556 0.628,0.837 1.046,1.673 1.465,2.51 0.628,-1.045 1.256,-2.092 1.674,-3.138 -0.209,-1.046 -0.628,-2.093 -0.837,-3.139 0.419,0.628 0.837,1.256 1.256,2.093 0.627,-1.884 1.046,-3.349 1.255,-4.605 0,0 -21.553,13.393 -21.553,13.393 1.884,-1.674 3.975,-3.139 5.859,-4.813 0,0 -0.21,0.209 -0.21,0.209 -0.209,-1.255 -0.418,-2.719 -0.627,-3.975 0.627,1.046 1.046,2.302 1.465,3.347 0.418,-0.417 1.046,-0.836 1.465,-1.254 -0.21,-1.675 -0.419,-3.349 -0.628,-5.023 0.837,1.465 1.255,2.93 1.674,4.186 0.628,-0.419 1.256,-1.047 1.883,-1.465 -0.209,-2.093 -0.418,-4.395 -0.837,-6.696 1.047,1.882 1.674,3.766 2.093,5.649 0.628,-0.628 1.046,-1.046 1.673,-1.465 -0.209,-2.929 -0.627,-6.277 -1.045,-9.416 1.464,2.93 2.51,5.65 2.51,7.951 0.419,-0.418 0.837,-0.628 1.256,-1.046 -0.21,-3.138 -0.628,-6.905 -1.256,-10.253 1.674,3.139 2.721,6.278 2.93,8.789 0,-0.209 0.418,-0.419 0.628,-0.628 0,-3.348 -0.628,-7.952 -1.256,-12.137 2.093,3.976 3.139,7.743 2.721,10.463 0.418,-0.418 0.837,-0.837 1.255,-1.256 -0.209,-6.067 -2.302,-11.509 -4.185,-17.158 -0.837,2.929 -0.837,3.975 -1.674,3.766 0.418,-3.347 0.209,-4.812 -0.419,-5.231 -0.418,4.603 -1.465,7.533 -2.929,8.998 0,0 0.837,-7.533 0.837,-7.533 0,0 -1.255,0 -1.255,0 z"
                            id="path250"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(250.05488,406.78287)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g256">
                            <path
                            d="m 1.674,0 c 0,1.256 0,2.302 -0.837,2.302 C 0,2.093 0.209,1.047 0.419,0 c 0,0 1.255,0 1.255,0 z"
                            id="path254"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(252.35688,404.48187)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g260">
                            <path
                            d="m 1.673,0 c 0.419,0.21 0.628,0.628 0.628,2.092 0,1.465 0,2.511 -1.046,2.511 C 0,4.394 0.209,3.138 0.627,1.883 1.045,0.419 1.255,0 1.673,0 Z"
                            id="path258"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(255.28588,404.90087)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g264">
                            <path
                            d="m 1.674,0 c 0,2.301 0,3.975 -0.837,3.766 C 0,3.556 0,1.882 0.418,0 c 0,0 1.256,0 1.256,0 z"
                            id="path262"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(255.91388,401.97087)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g268">
                            <path
                            d="m 0.627,0 c 0.21,0 0.21,0.419 0.419,1.046 0,0 -1.046,0 -1.046,0 C 0.209,0.419 0.418,0 0.627,0 Z"
                            id="path266"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(257.16888,401.55187)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g272">
                            <path
                            d="m 2.302,0 c 0.419,0 0.628,0.838 0.628,2.721 0,1.882 0,3.557 -1.465,3.347 C 0,5.859 0.419,4.185 0.837,2.302 1.465,0.628 1.674,0 2.302,0 Z"
                            id="path270"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(245.03188,341.49687)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g276">
                            <path
                            d="m 0,0 c 5.232,1.256 10.672,5.651 16.114,10.254 0.836,1.464 0.418,1.883 -0.838,1.255 C 11.509,10.254 6.069,3.976 0,0 Z"
                            id="path274"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(262.81888,354.26187)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g280">
                            <path
                            d="M 2.302,0.837 C 3.348,1.465 3.767,2.093 3.557,2.302 3.348,2.72 2.511,2.511 1.464,1.883 0.628,1.255 0,0.418 0.209,0.209 0.418,0 1.255,0.209 2.302,0.837 Z"
                            id="path278"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(212.38988,362.84087)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g284">
                            <path
                            d="m 0,0 c 1.883,0.209 3.766,0.418 5.649,0.628 0,0 1.256,2.092 1.256,2.092 0,0 -0.209,-0.209 -0.209,-0.209 -0.628,0 1.883,6.696 -1.465,-0.418 C 4.812,1.256 3.556,1.465 2.511,1.046 1.465,0.628 1.883,0.418 0,0 Z"
                            id="path282"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(184.34988,453.23687)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g288">
                            <path
                            d="M 1.884,0 C 2.929,0 3.975,0.418 3.975,0.837 3.975,1.046 3.348,1.465 2.301,1.465 1.047,1.465 0.21,1.255 0.21,0.837 0,0.418 0.837,0 1.884,0 Z"
                            id="path286"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(186.23388,457.84087)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g292">
                            <path
                            d="M 2.719,0.628 C 4.393,0.209 6.277,0 6.486,0.419 6.905,0.837 5.649,1.465 3.975,2.093 2.301,2.511 0.627,2.511 0.209,2.093 0,1.674 1.045,1.046 2.719,0.628 Z"
                            id="path290"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(187.27888,459.51487)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g296">
                            <path
                            d="M 3.348,0.628 C 5.232,0.209 7.115,0 7.534,0.419 7.743,0.837 6.488,1.674 4.604,2.093 2.512,2.72 0.837,2.72 0.419,2.302 0,1.884 1.256,1.046 3.348,0.628 Z"
                            id="path294"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(190.83688,461.60787)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g300">
                            <path
                            d="M 2.302,0.418 C 3.557,0 4.813,0 5.022,0.418 5.231,0.627 4.395,1.254 3.139,1.673 1.674,1.882 0.418,1.882 0.209,1.464 0,1.254 1.046,0.627 2.302,0.418 Z"
                            id="path298"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(193.13888,463.69987)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g304">
                            <path
                            d="M 1.674,0 C 2.929,0 3.766,0.418 3.766,0.836 3.975,1.255 3.138,1.464 2.093,1.464 1.046,1.464 0,1.255 0,0.836 0,0.418 0.628,0 1.674,0 Z"
                            id="path302"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(214.48288,454.70187)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g308">
                            <path
                            d="M 2.719,0.628 C 4.393,0 6.068,0 6.277,0.837 6.695,1.465 5.44,2.72 3.766,3.348 2.091,3.976 0.418,3.976 0.209,3.139 0,2.511 1.045,1.465 2.719,0.628 Z"
                            id="path306"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(211.97088,452.81787)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g312">
                            <path
                            d="M 2.302,0.628 C 3.557,0 4.813,0 5.022,0.628 5.231,1.256 4.394,2.093 3.139,2.512 1.884,3.14 0.628,2.93 0.419,2.512 0,1.884 1.047,1.047 2.302,0.628 Z"
                            id="path310"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(209.87888,449.26187)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g316">
                            <path
                            d="M 1.674,0.418 C 2.72,0 3.557,0.209 3.766,0.418 3.976,1.046 3.348,1.674 2.302,1.883 1.255,2.302 0.418,2.302 0.209,1.883 0,1.465 0.627,0.837 1.674,0.418 Z"
                            id="path314"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(179.32788,431.26587)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g320">
                            <path
                            d="M 1.883,1.047 C 1.674,0 0.628,0 0.209,0.837 0,2.302 0.418,4.185 1.883,5.022 3.557,5.859 3.976,4.185 3.139,3.557 2.302,2.72 2.092,2.093 1.883,1.047 Z"
                            id="path318"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(175.14288,428.96387)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g324">
                            <path
                            d="M 3.138,1.884 C 3.348,0.628 2.301,0 1.465,1.047 0.419,2.511 0,4.812 1.256,6.277 2.72,8.161 3.976,6.487 3.557,5.44 2.929,3.977 2.72,3.139 3.138,1.884 Z"
                            id="path322"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(322.66488,334.80087)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g328">
                            <path
                            d="M 1.674,2.093 C 0.418,3.976 0,11.091 6.278,19.67 c 2.301,2.93 -0.419,5.022 2.929,5.44 1.255,-0.209 2.092,-1.255 2.302,-3.138 0,0 -2.093,-1.046 -2.093,-1.046 0,0 2.93,0 2.93,0 0,0 -3.139,-2.093 -3.139,-2.093 1.046,-0.209 3.557,0.419 3.348,-0.628 -0.209,-1.255 -3.139,-1.465 -4.604,-2.093 0,0 3.558,-0.837 3.558,-0.837 0.209,-1.046 -1.884,-1.883 -5.231,-2.928 0,0 3.347,-0.837 3.347,-0.837 0,0 -3.766,-2.302 -3.766,-2.302 0,0 2.929,-0.838 2.929,-0.838 0,0 -4.603,-2.302 -4.603,-2.302 0,0 2.51,-1.255 2.51,-1.255 0,0 -2.719,-0.837 -2.719,-0.837 0,0 2.51,-1.255 2.51,-1.255 C 4.395,1.884 3.557,0 1.674,2.093 Z"
                            id="path326"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(317.85188,330.40687)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g332">
                            <path
                            d="M 1.465,11.927 C 0.21,9.207 0,6.906 0.628,4.813 2.092,1.046 3.557,0 4.813,0 7.324,2.72 3.138,4.394 2.301,6.487 1.674,6.906 1.465,8.37 1.465,11.927 Z"
                            id="path330"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(316.59688,327.68687)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g336">
                            <path
                            d="M 1.674,1.673 C 2.72,0.628 3.975,0 4.393,0.419 4.812,0.837 4.184,1.883 3.138,3.138 2.093,4.185 0.837,5.022 0.418,4.603 0,4.185 0.628,2.929 1.674,1.673 Z"
                            id="path334"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(315.75988,342.75287)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g340">
                            <path
                            d="M 1.465,0 C 2.092,0 2.72,0.628 2.72,1.465 2.72,2.092 2.092,2.72 1.465,2.72 0.628,2.72 0,2.092 0,1.465 0,0.628 0.628,0 1.465,0 Z"
                            id="path338"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(317.43388,346.51987)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g344">
                            <path
                            d="M 2.51,0.418 C 3.347,0.628 3.556,1.673 2.929,2.719 2.51,3.766 1.674,4.393 1.046,3.975 0.209,3.766 0,2.719 0.628,1.673 1.046,0.628 1.883,0 2.51,0.418 Z"
                            id="path342"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(318.89888,350.91287)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g348">
                            <path
                            d="M 3.975,0.419 C 5.021,0.838 5.231,1.884 4.393,3.14 3.766,4.186 2.301,4.814 1.254,4.604 0.209,4.186 0,2.93 0.627,1.884 1.254,0.838 2.719,0 3.975,0.419 Z"
                            id="path346"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(322.03688,355.30787)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g352">
                            <path
                            d="M 3.976,0.837 C 4.604,1.674 4.185,2.51 3.139,2.929 2.302,3.348 1.046,3.138 0.418,2.302 0,1.674 0.209,0.837 1.255,0.419 2.302,0 3.348,0.209 3.976,0.837 Z"
                            id="path350"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(331.03488,351.12287)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g356">
                            <path
                            d="M 10.044,7.533 C 10.462,6.905 10.462,5.859 9.416,5.65 8.37,5.441 7.742,5.441 7.115,4.394 6.278,1.883 7.533,0.628 9.625,0 c 1.674,0 2.302,0.628 1.884,1.674 0,0 -1.047,0.837 -1.047,0.837 1.884,0.628 3.139,1.256 3.767,2.302 -1.046,0 -1.674,0.209 -1.883,1.046 3.557,-0.627 3.348,5.022 0.209,3.976 -2.093,-0.628 -3.139,0.209 -2.093,3.767 0.837,4.184 3.767,5.23 3.558,0.836 -0.419,-2.092 6.696,-2.511 7.533,2.092 0,0 -2.721,-1.045 -2.721,-1.045 0.628,3.347 3.348,1.882 3.767,4.812 0,0 -2.302,0.21 -2.302,0.21 2.721,1.883 4.813,4.185 5.86,6.904 -2.93,-0.418 -3.139,-3.556 -5.86,-3.556 3.558,4.812 7.742,3.766 9.835,8.579 -2.93,-0.209 -6.486,-2.511 -10.463,-6.278 3.558,5.023 5.86,9.207 5.023,11.299 -5.232,-2.301 -6.278,-10.044 -8.37,-12.345 0,3.976 2.929,6.278 1.882,10.671 -2.091,-2.51 -3.138,-6.486 -3.138,-12.763 2.092,0.418 2.929,-1.047 2.929,-4.604 -0.419,-3.766 -2.301,-3.557 -1.882,0 0,2.72 -1.884,3.557 -7.534,0.209 -0.837,0.837 0.418,1.884 3.557,3.767 0,0 -0.209,3.138 -0.209,3.138 0,0 1.674,-2.72 1.674,-2.72 0,0 0.628,8.789 0.628,8.789 -0.209,2.302 -0.837,1.883 -1.465,-0.418 0,0 -0.628,-4.395 -0.628,-4.395 0,3.139 -0.418,4.604 -1.464,4.395 0,0 -0.838,-8.161 -0.838,-8.161 0,0 -2.301,2.929 -2.301,2.929 0,0 -0.627,-4.603 -0.627,-4.603 0,0 -2.093,1.674 -2.093,1.674 0,0 0,-5.651 0,-5.651 C 3.348,18.205 1.674,17.577 0,15.066 2.302,15.694 3.767,15.276 5.65,14.229 4.603,10.044 6.487,7.951 10.044,7.533 Z"
                            id="path354"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(288.55688,378.11587)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g360">
                            <path
                            d="M 2.72,6.069 C 2.929,4.186 3.348,3.558 1.465,1.046 0.628,0.209 0,0 0.21,1.046 0.628,2.72 2.302,4.395 2.72,6.069 Z"
                            id="path358"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(287.92888,371.41987)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g364">
                            <path
                            d="M 0,0 C 2.721,1.465 3.976,1.674 5.44,5.65 5.859,7.114 5.65,8.161 4.603,6.905 2.93,5.023 2.093,1.884 0,0 Z"
                            id="path362"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(288.34788,363.25887)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g368">
                            <path
                            d="M 0,0 C 3.557,2.512 5.021,2.93 6.696,8.789 7.114,11.091 6.486,12.347 5.231,10.463 3.138,7.533 2.511,3.14 0,0 Z"
                            id="path366"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(290.02188,357.40087)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g372">
                            <path
                            d="m 0,0 c 3.975,1.255 6.905,6.068 6.905,10.252 0,2.302 -1.046,3.767 -1.674,1.675 C 4.394,8.998 2.929,2.929 0,0 Z"
                            id="path370"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(291.69488,354.26187)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g376">
                            <path
                            d="m 0,0 c 3.558,1.465 5.86,3.975 7.116,7.742 0.209,2.093 0,3.139 -1.465,1.465 C 4.814,6.068 2.721,2.93 0,0 Z"
                            id="path374"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(316.38788,453.65487)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g380">
                            <path
                            d="M 0,4.186 C 0.837,2.093 3.975,0 7.742,1.675 9.416,2.093 9.206,4.186 9.206,5.651 8.16,4.605 7.114,3.349 6.067,4.605 3.138,2.303 2.092,3.558 0,4.186 Z"
                            id="path378"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(303.83188,458.67787)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g384">
                            <path
                            d="M 1.256,0 C 2.093,0 2.721,0.418 2.721,1.256 2.721,1.883 2.093,2.302 1.256,2.302 0.628,2.302 0,1.883 0,1.256 0,0.418 0.628,0 1.256,0 Z"
                            id="path382"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(297.34588,458.46887)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g388">
                            <path
                            d="M 0.418,0.209 C 0.837,0 1.465,0.837 1.883,1.883 2.092,2.93 2.092,3.975 1.674,3.975 1.255,4.184 0.627,3.557 0.209,2.302 0,1.255 0,0.209 0.418,0.209 Z"
                            id="path386"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(299.85688,458.25987)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g392">
                            <path
                            d="M 0.418,0 C 0.627,0 1.045,0.418 1.255,1.255 1.464,1.883 1.464,2.511 1.045,2.72 0.836,2.72 0.418,2.301 0.209,1.464 0,0.836 0,0.209 0.418,0 Z"
                            id="path390"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(294.20688,420.38487)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g396">
                            <path
                            d="M 6.695,10.881 C 6.486,11.09 6.277,11.3 6.277,11.509 5.441,12.346 4.604,12.974 4.394,12.556 3.976,12.346 4.185,11.3 4.813,10.463 5.231,10.044 5.441,9.835 5.65,9.626 5.441,9.416 5.441,9.207 5.231,8.998 5.022,9.207 5.022,9.416 4.813,9.626 3.976,10.672 2.929,11.3 2.511,10.881 2.092,10.672 2.302,9.416 3.139,8.37 3.348,7.951 3.766,7.742 3.976,7.533 3.766,7.324 3.766,7.114 3.557,7.114 2.72,8.161 1.674,8.579 1.255,8.37 0.837,7.951 1.046,6.905 1.883,5.859 1.883,5.649 2.092,5.44 2.302,5.44 1.883,5.022 1.883,4.812 1.674,4.603 1.046,5.022 0.627,5.231 0.209,5.022 0,4.812 0.209,3.975 0.837,3.139 0.418,2.302 0.209,1.465 0.837,1.046 2.092,0 2.72,1.465 3.976,4.184 c 0.418,1.047 0,1.675 0.628,2.302 0.418,0.838 1.673,1.256 2.091,1.884 1.465,2.302 1.256,4.186 1.047,4.395 -0.419,0.209 -0.209,-0.209 -1.047,-1.884 z"
                            id="path394"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(296.92688,432.94087)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g400">
                            <path
                            d="M 3.975,0.418 C 4.603,0.835 4.185,2.091 3.139,3.347 2.093,4.602 1.046,5.23 0.628,4.812 0,4.393 0.419,3.137 1.256,1.882 2.302,0.627 3.557,0 3.975,0.418 Z"
                            id="path398"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(324.33888,420.80387)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g404">
                            <path
                            d="m 2.302,0.209 c 0.209,0 0,1.256 -0.419,2.511 C 1.465,3.975 0.628,4.812 0.209,4.603 0,4.603 0.209,3.347 0.628,2.092 1.255,0.837 1.883,0 2.302,0.209 Z"
                            id="path402"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(319.52588,419.54787)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g408">
                            <path
                            d="M 3.976,0.209 C 4.394,0.419 4.185,2.093 3.348,3.976 2.302,5.649 1.255,7.114 0.627,6.905 0,6.696 0.209,5.021 1.255,3.139 2.092,1.256 3.348,0 3.976,0.209 Z"
                            id="path406"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(313.45788,416.61787)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g412">
                            <path
                            d="M 2.72,0.209 C 3.139,0.419 2.93,1.674 2.302,3.349 1.674,4.813 0.837,5.86 0.418,5.651 0,5.441 0.209,4.186 0.837,2.721 1.465,1.047 2.302,0 2.72,0.209 Z"
                            id="path410"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(112.99488,58.58987)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g416">
                            <path
                            d="M 0.21,4.6035 C 0.837,1.6738 2.721,0.2099 4.814,0 c 0,0 4.602,0.8369 4.602,0.8369 1.675,1.2558 1.466,1.6748 -0.418,1.8838 C 5.232,2.0927 3.139,2.9297 2.093,5.4404 0.628,7.5332 0,7.7422 0.21,4.6035 Z"
                            id="path414"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(126.80588,71.98237)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g420">
                            <path
                            d="m 1.047,0 c 0.418,0 1.046,0.418 1.046,1.2549 0,0.628 -0.628,1.2559 -1.046,1.2559 C 0.419,2.5108 0,1.8829 0,1.2549 0,0.418 0.419,0 1.047,0 Z"
                            id="path418"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(111.11188,61.93847)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g424">
                            <path
                            d="M 1.465,5.8584 C 0,7.7422 0.418,9.834 2.93,12.3457 c 0,0 3.348,4.1846 3.348,4.1846 2.929,2.0927 4.394,1.6738 3.975,-1.4649 -0.418,-2.0918 0.209,-2.9297 2.093,-2.9297 1.255,-0.2089 2.093,-0.8369 2.721,-1.8828 0.418,-1.6738 0.209,-2.5107 -1.256,-2.9297 -2.721,1.8838 -5.022,2.7207 -6.905,3.1387 2.51,-1.6738 4.393,-2.9287 5.021,-3.9756 0.628,-0.6279 1.465,-0.8369 2.721,-0.4189 0,-1.0459 -0.419,-2.0918 -1.883,-2.5108 -2.93,0 -5.859,2.0928 -8.58,5.0225 C 5.859,5.0215 8.371,2.9287 12.137,2.9287 12.346,1.8828 12.137,1.0459 11.09,0.209 8.789,0 6.487,0.627 4.604,2.0918 c 0,0 -3.139,3.7666 -3.139,3.7666 z"
                            id="path422"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(129.52588,93.74387)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g428">
                            <path
                            d="m 0,0 c 6.906,6.697 12.764,14.648 17.369,23.646 0,0 0,7.742 0,7.742 0,0 -2.512,-8.789 -2.512,-8.789 0.209,6.069 0,10.045 -0.628,8.789 0,0 -2.092,-12.555 -2.092,-12.555 0,0 -1.465,5.441 -1.465,5.441 0,0 -1.255,-7.742 -1.255,-7.742 C 8.371,15.695 8.161,20.507 8.371,27.203 6.487,25.32 6.697,19.879 6.906,13.811 c 0,0 -2.093,5.859 -2.093,5.859 -1.256,-3.138 -0.628,-7.324 0,-11.3 C 3.557,7.324 2.72,9.416 2.302,15.695 0.837,11.509 1.255,8.161 1.883,4.186 c 0,0 -1.465,3.138 -1.465,3.138 C 0.418,7.324 0,0 0,0 Z"
                            id="path426"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(177.86288,28.24897)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g432">
                            <path
                            d="m 2.93,6.4864 c 2.302,1.6738 5.441,2.0928 8.579,2.0928 0,0 0.209,1.6738 0.209,1.6738 5.023,0 10.254,-2.3018 15.485,-5.8594 -0.209,-0.209 -1.255,-0.418 -2.302,0 -3.767,1.8838 -3.348,0.6279 3.766,-2.9297 1.047,-0.6269 1.884,0.21 3.558,-0.418 C 32.225,1.0459 36.829,0 36.829,0 33.062,3.3477 29.295,6.6954 25.111,9.834 19.251,13.1827 14.02,14.0196 9.207,12.3458 6.487,11.0899 3.767,9.4161 1.256,7.5323 0.628,6.4864 0,5.8584 2.93,6.4864 Z"
                            id="path430"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(208.83188,35.78127)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g436">
                            <path
                            d="M 0.837,0 C 1.465,0 1.884,0.4189 1.884,0.8379 1.884,1.2558 1.465,1.6748 0.837,1.6748 0.419,1.6748 0,1.2558 0,0.8379 0,0.4189 0.419,0 0.837,0 Z"
                            id="path434"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(215.52788,47.49997)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g440">
                            <path
                            d="M 0.418,0.8369 C 0.837,0.209 1.256,0 1.674,0.418 c 0.419,0.21 0.419,0.8369 0,1.2559 C 1.256,2.3018 0.628,2.5108 0.418,2.3018 0,2.0928 0,1.4649 0.418,0.8369 Z"
                            id="path438"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(229.54788,42.47757)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g444">
                            <path
                            d="M 1.256,0.2089 C 1.884,0 2.511,0 2.721,0.4189 2.93,0.8369 2.721,1.6748 1.884,1.8838 1.256,2.3017 0.628,2.3017 0.419,1.6748 0,1.2558 0.419,0.6279 1.256,0.2089 Z"
                            id="path442"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(227.03688,39.75777)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g448">
                            <path
                            d="M 0.419,0.627 C 1.046,0.209 1.674,0 1.883,0.418 2.302,0.627 2.093,1.4649 1.674,1.8829 1.046,2.3018 0.419,2.5108 0.209,2.0928 0,1.8829 0,1.2549 0.419,0.627 Z"
                            id="path446"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(203.60088,44.57027)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g452">
                            <path
                            d="M 1.047,0.209 C 1.675,0 2.301,0.209 2.511,0.628 2.511,1.0459 2.092,1.6739 1.465,1.6739 0.838,1.8829 0.21,1.6739 0,1.2559 0,0.837 0.419,0.418 1.047,0.209 Z"
                            id="path450"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(211.34288,59.84567)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g456">
                            <path
                            d="M 1.466,0.418 C 2.302,0 3.349,0 3.558,0.418 3.767,0.8369 3.349,1.4649 2.302,1.8828 1.466,2.0928 0.419,2.0928 0.21,1.6739 0,1.2559 0.419,0.628 1.466,0.418 Z"
                            id="path454"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(183.09488,39.75777)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g460">
                            <path
                            d="M 2.929,6.2774 C 5.23,6.0684 8.37,5.2305 12.555,3.3477 c 0,0 4.812,-2.3018 4.812,-2.3018 C 19.669,0 20.088,0.209 18.204,2.0928 16.112,4.1846 13.391,5.2305 11.509,6.6954 9.625,7.9512 6.905,9.625 2.302,8.3702 0,7.7422 0.837,6.4864 2.929,6.2774 Z"
                            id="path458"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(198.99688,34.94437)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g464">
                            <path
                            d="M 1.675,8.998 C 4.395,6.4873 6.069,5.8593 9.835,4.1855 13.393,2.7207 16.949,2.3017 20.507,2.3017 23.018,0 25.32,3.1386 22.6,5.6504 21.763,6.4873 20.716,6.9062 19.67,7.5332 16.949,9.6259 14.021,10.4629 11.091,11.2998 7.324,12.3457 6.905,11.9277 10.044,9.8349 11.091,8.998 11.928,8.3701 12.974,7.7421 15.276,6.2783 17.787,5.8593 20.089,5.6504 16.531,3.3486 9.626,6.9062 2.721,10.2539 0.628,11.2998 0,10.6718 1.675,8.998 Z"
                            id="path462"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(219.50388,32.64257)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g468">
                            <path
                            d="M 0,0.4189 C 1.465,0 2.721,0.21 4.395,0.21 7.114,1.0469 8.37,2.5117 8.579,4.3945 7.952,6.2783 7.114,7.3242 5.859,7.7422 5.231,4.3945 3.976,2.5117 2.093,1.8838 1.256,1.6748 0.837,1.6748 0,1.6748 c 0,0 0,-1.2559 0,-1.2559 z"
                            id="path466"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(214.90088,33.06147)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g472">
                            <path
                            d="M 1.464,0.837 C 2.301,0.419 2.51,0.209 3.348,0 c 0,0 0,1.2559 0,1.2559 C 2.51,1.4649 2.51,1.4649 1.673,1.6739 0.836,1.8829 0,1.2559 1.464,0.837 Z"
                            id="path470"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(211.76188,28.24897)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g476">
                            <path
                            d="M 0.837,3.5567 C 2.721,1.8829 4.812,0.418 7.324,0.209 9.835,0 12.555,0 15.275,0.418 20.507,2.3018 18.414,3.9756 15.066,2.7198 12.973,1.4639 10.463,1.6739 7.533,2.7198 7.324,4.8125 3.766,3.1387 1.674,4.6036 0.209,5.2315 0,4.8125 0.837,3.5567 Z"
                            id="path474"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(227.87388,32.43357)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g480">
                            <path
                            d="M 0,0 C 1.674,0 2.93,0.209 3.139,1.6738 3.348,3.5576 2.93,5.0225 1.674,5.8594 2.302,1.8838 0.419,2.3018 0,0 Z"
                            id="path478"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(230.38488,27.62107)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g484">
                            <path
                            d="m 2.093,3.7666 c 0.419,0.628 0.628,2.3018 0,5.0215 0,0 -1.674,3.1387 -1.674,3.1387 -0.419,1.4648 0,1.8838 1.046,1.4648 1.674,-1.0459 2.51,-2.5107 2.51,-4.6035 0,-3.1387 0.21,-4.6035 1.256,-5.6494 C 3.349,0 1.465,0.418 2.093,3.7666 Z"
                            id="path482"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(219.08588,43.10547)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g488">
                            <path
                            d="M 0,6.6963 C 0,8.7891 4.813,9.207 5.44,6.9053 6.486,4.3945 4.603,2.5107 5.231,0 2.092,0.8369 0,3.1387 0,6.6963 Z"
                            id="path486"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(216.99288,52.73047)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g492">
                            <path
                            d="M 0.837,2.5117 C 1.883,0.6279 3.558,0 6.069,0.21 c 1.882,0 2.929,0.4179 2.929,2.3017 0,1.8828 0.209,3.9756 -0.21,5.6494 C 8.161,9.835 7.951,9.626 5.86,9.835 3.558,9.835 2.72,8.7891 0.209,10.2539 1.674,6.6963 0,5.2314 0.837,2.5117 Z"
                            id="path490"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(225.78088,44.77927)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g496">
                            <path
                            d="M 1.047,2.3018 C 0,0.628 1.256,0 2.302,1.2559 3.558,2.3018 4.395,3.7666 4.395,5.2315 4.604,6.6963 2.93,7.9512 1.884,6.6963 0.837,5.4405 2.093,4.1856 1.047,2.3018 Z"
                            id="path494"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(227.24588,52.73047)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g500">
                            <path
                            d="M 0.628,2.3027 C 0,0.21 0.837,0 3.349,1.0469 5.023,2.5117 5.232,3.5576 4.395,4.3945 6.069,6.0693 6.069,8.3711 4.604,11.0908 3.558,10.2539 2.302,10.6719 1.465,9.417 1.256,8.5801 0.628,8.998 1.047,5.8594 1.256,4.6045 1.256,3.5576 0.628,2.3027 Z"
                            id="path498"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(229.12988,72.19137)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g504">
                            <path
                            d="M 1.674,0 C 2.72,0 3.348,0.628 3.348,1.2559 3.348,1.8828 2.511,2.3018 1.674,2.0928 0.628,2.0928 0,1.4649 0,0.8369 0,0.419 0.837,0 1.674,0 Z"
                            id="path502"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(215.73688,70.09867)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g508">
                            <path
                            d="m 2.093,0.2089 c 1.046,0 1.883,0.628 1.674,1.2559 0,0.6279 -0.837,1.2559 -1.883,1.0469 C 0.837,2.5117 0,1.8837 0.209,1.2558 0.209,0.6279 1.047,0 2.093,0.2089 Z"
                            id="path506"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(210.50588,63.40237)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g512">
                            <path
                            d="M 23.228,4.6035 C 21.972,2.5117 18.833,1.0468 14.229,0.4189 11.3,0 7.324,0.8379 3.139,1.8838 0.837,4.3945 0,8.1611 0.419,13.1836 c 0,0 1.884,0.4179 1.884,0.4179 0,0 -1.675,1.2559 -1.675,1.2559 0,0 2.302,0 2.302,0 0,0 -1.465,2.0928 -1.465,2.0928 0,0 1.256,0.4179 1.256,0.4179 0,0 -1.046,2.7207 -1.046,2.7207 0,0 1.255,0.837 1.255,0.837 0,0 -0.627,1.6738 -0.627,1.6738 0,0 1.674,0.209 1.674,0.209 0,0 -0.419,1.6738 -0.419,1.6738 0,0 1.255,0.21 1.255,0.21 0,0 -0.418,1.6738 -0.418,1.6738 0,0 1.255,0.4189 1.255,0.4189 0.837,1.2549 2.302,2.3018 3.976,3.3477 1.256,0.6277 2.511,0.6277 3.976,0.4177 2.51,-1.8826 3.138,-3.5564 5.231,-5.8581 0.628,-0.21 0.837,-1.4649 0.837,-3.3487 1.256,-0.6269 1.674,-1.6738 1.674,-3.1387 0,0 1.047,-1.4648 1.047,-1.4648 0,0 0,-5.0215 0,-5.0215 -1.256,0.418 -2.093,0.6279 -3.139,0.418 0,0 -2.93,-1.2549 -2.93,-1.2549 0,0 -0.837,6.4863 -0.837,6.4863 0,1.2559 -0.628,3.1387 -2.092,2.5108 0,0 -3.558,-1.6739 -3.558,-1.6739 -0.837,-0.4179 -0.628,-1.6738 0.419,-2.0917 0,0 1.255,-0.21 1.255,-0.21 0,0 0,-5.6494 0,-5.6494 C 9.417,10.8818 7.115,11.0908 5.022,9.6259 4.186,9.208 3.349,9.208 2.512,9.208 3.139,7.9521 3.977,6.9052 4.813,6.2783 c 0,0 -1.255,-1.8838 -1.255,-1.8838 0.419,0 1.255,0.209 1.882,0.209 2.93,-0.209 4.395,-0.627 5.232,0.2099 0.837,0.837 1.465,1.4649 2.302,1.8829 0,0 0.209,-1.4649 0.209,-1.4649 0.628,-1.6738 1.883,-2.0918 3.767,-1.4639 0,0 -0.419,4.1846 -0.419,4.1846 0,0 6.697,-2.0928 6.697,-2.0928 0,0 0,-1.2558 0,-1.2558 z M 7.743,21.7627 c 1.883,-0.419 3.976,-0.419 5.859,0 3.348,0.8369 3.557,2.0927 0.418,3.9756 -1.883,0 -3.975,0 -6.068,-0.628 0.628,-1.0459 1.255,-1.4648 -0.209,-3.3476 z m 2.511,1.4648 c 0.837,-0.6279 2.093,-0.6279 3.348,0 0.627,0.418 0.418,1.0459 -0.209,1.4649 -0.837,0.2089 -1.465,0.2089 -2.302,0 -0.628,-0.628 -0.209,-1.0469 -0.837,-1.4649 z"
                            id="path510"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(220.75988,80.14257)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g516">
                            <path
                            d="m 0.628,0 c 0.418,0 0.627,0.21 0.627,0.6279 0,0.209 -0.209,0.419 -0.627,0.419 C 0.418,1.0469 0,0.8369 0,0.6279 0,0.21 0.418,0 0.628,0 Z"
                            id="path514"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(224.73488,67.37887)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g520">
                            <path
                            d="M 0,3.1387 C 0,2.7198 0.209,2.3018 0.209,1.6739 1.256,0.627 1.674,0 1.674,1.0459 c 0,0.8369 0,1.4649 -0.209,2.0928 0,0 -1.465,0 -1.465,0 z"
                            id="path518"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(223.47988,72.40037)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g524">
                            <path
                            d="M 0,8.3701 C 0.209,5.6494 0.628,3.3486 1.046,0 1.046,0 2.511,0 2.511,0 2.301,2.3018 2.092,4.8135 1.255,8.7891 0.837,9.626 0.419,9.207 0,8.3701 Z"
                            id="path522"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(205.06588,64.65817)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g528">
                            <path
                            d="M 2.301,1.6739 C 2.092,0 3.766,0.209 3.975,1.6739 4.394,4.6035 3.975,6.9053 2.511,8.3701 1.464,8.9981 0,8.3701 0.836,7.1143 2.301,5.0225 2.72,3.5576 2.301,1.6739 Z"
                            id="path526"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(205.69288,75.74897)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g532">
                            <path
                            d="M 0.419,2.5108 C 0,0.627 1.256,0 1.674,2.0918 3.139,7.7422 5.65,13.1827 11.3,18.4139 c 2.302,1.883 -0.209,3.557 -2.301,1.674 C 3.348,15.2745 1.674,8.5792 0.419,2.5108 Z"
                            id="path530"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(226.82788,89.76857)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g536">
                            <path
                            d="M 0.209,5.6493 C 0,3.9753 0.628,2.3017 2.511,0.8369 3.767,0 4.185,1.4648 3.557,2.3017 2.302,3.7666 1.255,3.7666 0.209,5.6493 Z"
                            id="path534"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(167.60888,109.85687)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g540">
                            <path
                            d="M 4.814,8.788 C 5.023,7.324 5.232,6.277 6.069,5.231 5.651,5.022 5.023,4.603 4.605,4.184 3.558,6.486 2.093,8.37 0,11.09 1.465,6.696 2.93,3.347 6.069,0 5.651,1.464 5.232,2.72 4.814,3.766 5.232,4.184 5.86,4.603 6.279,5.022 6.697,4.603 7.116,4.184 7.325,3.766 c 0,0.628 0,1.256 -0.209,1.884 0,0 0.209,0 0.209,0 0,0 -0.209,0.627 -0.209,0.627 0,0 -0.209,-0.209 -0.209,-0.209 C 6.488,7.114 5.86,7.742 4.814,8.788 Z"
                            id="path538"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(169.91188,119.48287)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g544">
                            <path
                            d="M 0,2.929 C 0.209,1.673 0.627,0.836 1.464,0 1.255,1.464 1.046,1.882 0,2.929 Z"
                            id="path542"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(181.00188,119.06387)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g548">
                            <path
                            d="M 0,5.022 C 0.209,4.185 0.418,3.348 0.628,2.72 c 0,0 0,0 0,0 0,0 0.418,-0.419 0.418,-0.419 0,-0.209 0.21,-0.628 0.419,-0.837 C 1.883,1.046 2.302,0.419 2.72,0 2.511,2.51 1.883,3.348 0,5.022 Z"
                            id="path546"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(179.95588,125.34087)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g552">
                            <path
                            d="M 0.627,4.813 C 0,2.721 0.627,1.256 3.139,0 c 0,3.139 -0.21,3.976 -2.512,4.813 z"
                            id="path550"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(185.60588,114.66887)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g556">
                            <path
                            d="M 0,13.602 C 2.092,8.58 2.301,6.278 1.673,0 3.975,5.859 3.557,7.533 0,13.602 Z"
                            id="path554"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(188.32488,115.50687)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g560">
                            <path
                            d="m 31.388,31.806 c 1.047,-4.395 1.465,-8.579 1.256,-12.974 -0.418,0.209 -0.628,0.209 -1.046,0.419 -0.21,2.302 -0.837,5.021 -2.093,8.37 0.628,-2.721 1.046,-5.441 0.837,-8.161 -0.418,0.209 -0.837,0.418 -1.256,0.418 -0.209,1.884 -0.837,3.975 -1.674,6.696 0.419,-2.302 0.628,-4.394 0.628,-6.486 -0.628,0 -1.255,0.209 -1.882,0.209 -0.21,2.721 -0.628,5.649 -1.256,9.416 0,-3.139 -0.209,-6.277 -0.209,-9.207 -0.628,0 -1.256,0 -2.093,0 0,3.138 -0.419,6.277 -1.046,10.672 -0.21,-3.767 -0.21,-7.325 -0.419,-10.881 -0.628,-0.209 -1.256,-0.209 -2.093,-0.419 0,3.349 -0.418,6.696 -1.046,11.3 -0.209,-3.976 -0.419,-7.742 -0.419,-11.509 -0.626,-0.209 -1.254,-0.418 -1.882,-0.628 -0.209,3.139 -0.837,6.278 -1.674,10.463 0,-3.767 0,-7.114 0.209,-10.881 -0.628,-0.21 -1.256,-0.419 -1.883,-0.628 -0.21,4.185 -0.628,7.951 -0.837,12.346 C 10.882,24.9 10.463,21.134 10.882,17.367 10.254,17.158 9.626,16.949 9.208,16.53 8.161,21.553 7.743,25.946 8.161,30.969 6.697,24.481 6.488,20.715 7.952,16.111 7.534,15.693 7.116,15.484 6.697,15.274 6.069,16.949 5.023,18.832 3.767,20.925 4.814,18.832 5.232,16.739 5.86,14.856 5.232,14.437 4.395,14.019 3.767,13.601 3.349,16.321 2.093,19.041 0,22.808 2.721,16.111 2.93,9.834 3.14,1.883 3.767,5.021 4.186,7.532 4.186,9.834 5.023,10.253 5.651,10.462 6.488,10.881 6.907,7.323 7.116,3.976 7.116,0 8.161,4.603 8.58,7.951 7.952,11.09 c 0.628,0.209 1.256,0.628 1.883,0.628 0.209,-0.419 0.628,-1.047 1.047,-1.674 -0.21,0.627 -0.419,1.255 -0.628,1.883 0.418,0 1.046,0.209 1.465,0.209 0.418,-1.255 0.628,-2.72 1.255,-4.394 0,1.674 -0.209,3.139 -0.209,4.813 0.628,0 1.047,0.209 1.674,0.209 0,-1.046 0.21,-2.302 0.21,-3.558 0.418,1.465 0.418,2.512 0.627,3.767 0.628,0 1.465,0.21 2.092,0.21 0,-1.465 0,-3.139 0,-4.814 0.419,1.884 0.837,3.349 1.046,4.814 0.838,0.209 1.675,0.209 2.512,0.209 0,-1.674 0,-3.139 0.209,-5.023 0.419,1.884 0.628,3.558 1.046,5.023 0.628,0 1.465,0 2.093,0 0,-2.511 0,-4.813 0,-7.534 0.837,2.93 1.256,5.232 1.465,7.325 0.628,0 1.255,-0.21 1.882,-0.21 0,-1.674 -0.418,-3.557 -0.627,-5.441 0.837,1.884 1.465,3.558 1.674,5.232 0.418,0 0.837,-0.209 1.256,-0.209 -0.21,-1.884 -0.628,-3.767 -0.838,-5.86 0.838,2.093 1.465,3.767 1.884,5.441 0.418,0 0.837,0 1.256,-0.209 -0.419,-2.93 -0.628,-6.069 -1.256,-9.625 4.813,11.926 4.813,17.367 0.418,29.504 z"
                            id="path558"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(225.15388,118.43587)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g564">
                            <path
                            d="m 0.418,15.066 c 0,0 0.837,1.883 0.837,1.883 0,0 2.93,-2.72 2.93,-2.72 0.837,-1.047 1.674,-0.837 2.302,0.628 0,0 0.209,-3.349 0.209,-3.349 1.047,-0.627 1.884,-0.209 2.72,0.837 0.628,-0.837 0.628,-1.882 0.209,-3.138 0,0 0.419,-4.185 0.419,-4.185 C 8.37,2.301 7.115,0.628 5.231,0 6.278,2.301 6.278,4.185 5.65,5.859 5.441,3.138 4.185,1.256 2.092,0.209 2.929,1.883 3.348,3.557 2.929,5.231 2.511,4.603 1.883,3.976 0.837,3.348 c 0,0 0.418,2.511 0.418,2.511 0,0 -1.255,0.837 -1.255,0.837 0,0 0.418,8.37 0.418,8.37 z"
                            id="path562"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(242.94088,118.64487)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g568">
                            <path
                            d="m 1.882,0 c 0,0.628 0,1.047 -0.418,1.047 C 1.045,1.047 0.627,0.628 0,0 0,0 1.882,0 1.882,0 Z"
                            id="path566"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(240.63888,115.08787)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g572">
                            <path
                            d="m 2.929,0 c 0.418,1.046 0.837,1.883 0.837,2.511 0,0 -2.301,0 -2.301,0 C 1.046,1.883 0.627,1.255 0.209,0.419 0,0.419 0,0.209 0,0 0,0 2.929,0 2.929,0 Z"
                            id="path570"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(239.17388,111.11187)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g576">
                            <path
                            d="m 0.628,0 c 0.628,0 2.092,1.255 3.139,3.139 0,0 -2.721,0 -2.721,0 C 0.209,1.465 0,0 0.628,0 Z"
                            id="path574"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(238.33688,118.22687)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g580">
                            <path
                            d="M 0.209,0.209 C 0.418,0 1.255,0.837 2.093,2.092 2.72,3.347 2.929,4.394 2.72,4.603 2.511,4.812 1.674,3.975 1.046,2.72 0.209,1.465 0,0.209 0.209,0.209 Z"
                            id="path578"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(234.15088,117.38987)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g584">
                            <path
                            d="M 0.419,0.209 C 0.628,0 1.675,1.046 2.721,2.511 3.558,4.184 3.977,5.44 3.558,5.649 3.349,5.859 2.302,4.812 1.256,3.347 0.419,1.674 0,0.419 0.419,0.209 Z"
                            id="path582"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(166.98288,109.43887)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g588">
                            <path
                            d="M 0,0 C 0.626,0.418 1.045,0.837 1.464,1.046 1.673,0.837 2.091,0.418 2.51,0 2.301,1.463 1.882,1.882 0.836,2.928 1.045,2.3 1.254,1.673 1.464,1.254 1.045,0.837 0.626,0.418 0,0 Z"
                            id="path586"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(146.68488,319.31687)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g592">
                            <path
                            d="M 1.674,0 C 1.674,0 0.837,2.72 0.837,2.72 0.837,2.72 0,2.301 0,2.301 0,2.301 0.419,0 0.419,0 c 0,0 1.255,0 1.255,0 z"
                            id="path590"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(83.49118,410.54987)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g596">
                            <path
                            d="M 0,1.047 C 2.7198,0 3.3477,1.256 4.1846,4.394 6.4864,6.487 7.9512,8.161 7.9512,9.835 12.7637,13.81 11.9267,15.484 5.4405,14.857 3.3477,14.229 2.0928,12.765 2.0928,9.835 2.0928,9.835 0,1.047 0,1.047 Z"
                            id="path594"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(82.86328,425.40687)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g600">
                            <path
                            d="M 1.6738,2.302 C 0,4.813 0.4189,7.952 2.5107,10.462 c 1.2559,1.465 2.7207,1.884 4.1856,1.884 0,0 -0.8369,-2.302 -0.8369,-2.302 0,0 2.5107,1.674 2.5107,1.674 0,-1.256 -1.0459,-2.721 -3.3476,-4.394 0,0 3.1386,0.837 3.1386,0.837 0,-1.674 -1.4648,-3.139 -3.9765,-4.395 0,0 2.0927,0 2.0927,0 C 5.2314,0.837 3.3477,0 1.6738,2.302 Z"
                            id="path598"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(91.65138,428.96387)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g604">
                            <path
                            d="M 1.0469,0.209 C 1.8838,0 2.5115,1.047 2.7205,2.302 2.9295,3.558 2.5115,4.604 1.6748,4.812 1.0469,5.022 0.2099,3.977 0,2.721 0,1.465 0.4189,0.209 1.0469,0.209 Z"
                            id="path602"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(135.17588,266.16687)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g608">
                            <path
                            d="M 0,19.67 C 0,12.974 2.93,6.486 6.696,0 3.976,6.696 1.674,13.183 0,19.67 Z"
                            id="path606"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(147.52188,239.80187)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g612">
                            <path
                            d="M 2.72,7.114 C 0.209,8.16 0,6.067 1.883,4.603 5.859,1.255 10.254,0 15.275,0 c 0,0 8.789,0 8.789,0 3.348,0 2.93,3.348 -0.21,3.139 0,0 -6.277,0 -6.277,0 C 11.927,2.929 7.324,4.603 2.72,7.114 Z"
                            id="path610"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(165.09888,243.77687)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g616">
                            <path
                            d="M 4.185,0 C 6.487,0 8.37,0.418 8.37,0.837 8.37,1.465 6.487,1.674 4.185,1.674 1.884,1.674 0,1.465 0,0.837 0,0.418 1.884,0 4.185,0 Z"
                            id="path614"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(181.41988,198.99687)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g620">
                            <path
                            d="M 5.023,0.419 C 4.604,0 3.558,1.465 2.093,3.349 0.838,5.023 0,6.696 0.21,6.696 0.419,6.905 1.675,5.651 2.93,3.767 4.395,2.093 5.231,0.419 5.023,0.419 Z"
                            id="path618"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(170.74788,204.22887)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g624">
                            <path
                            d="M 1.047,9.626 C 0,11.508 0.419,12.555 2.512,13.392 c 8.37,2.511 16.531,-0.21 24.691,-4.813 0,0 10.253,-4.813 10.253,-4.813 1.884,-2.302 1.465,-2.929 -1.046,-2.093 0,0 -5.021,2.512 -5.021,2.512 0,0 1.255,-4.185 1.255,-4.185 -2.72,2.092 -4.395,4.185 -5.65,6.487 0,0 -0.837,-2.093 -0.837,-2.093 -1.255,1.046 -2.301,2.511 -2.72,4.395 0,0 -1.046,-2.302 -1.046,-2.302 -1.047,0.627 -1.884,1.465 -2.512,2.72 0,0 0.419,-2.93 0.419,-2.93 -0.837,-0.627 -2.093,0.837 -3.767,4.186 0,0 0.837,-3.139 0.837,-3.139 -0.627,-0.628 -1.673,0.628 -3.138,3.765 0,0 3.347,-10.043 3.347,-10.043 -1.674,0.21 -3.975,3.976 -6.486,10.671 -1.046,0.21 -1.465,-0.209 -1.256,-1.045 0,0 3.767,-7.325 3.767,-7.325 -1.883,-0.209 -3.976,2.512 -6.487,7.325 0,0 2.93,-8.371 2.93,-8.371 0,0 -5.441,7.115 -5.441,7.115 0,0 0,-2.72 0,-2.72 -1.255,0.418 -2.511,1.465 -3.557,2.93 z"
                            id="path622"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(172.00388,348.40187)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g628">
                            <path
                            d="M 0.837,1.674 C 0,0.837 1.465,0 1.884,0.419 c 0,0 2.511,2.302 2.511,2.302 0.627,0.628 -0.837,1.674 -1.465,1.255 0,0 -2.093,-2.302 -2.093,-2.302 z"
                            id="path626"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(174.30588,346.93787)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g632">
                            <path
                            d="M 0.419,1.464 C 0,0.837 1.046,0 1.465,0.419 c 0,0 2.092,2.092 2.092,2.092 0.628,0.627 -0.628,1.464 -1.045,1.046 0,0 -2.093,-2.093 -2.093,-2.093 z"
                            id="path630"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(175.14288,344.63587)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g636">
                            <path
                            d="M 0.837,1.884 C 0,1.047 1.465,0 2.092,0.628 c 0,0 2.511,2.511 2.511,2.511 0.628,0.627 -1.046,1.674 -1.465,1.046 0,0 -2.301,-2.301 -2.301,-2.301 z"
                            id="path634"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(176.18988,340.86887)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g640">
                            <path
                            d="M 0.836,2.512 C 0,1.465 1.882,0 2.929,0.628 c 0,0 3.766,3.767 3.766,3.767 1.047,1.047 -1.465,2.721 -2.092,1.884 0,0 -3.767,-3.767 -3.767,-3.767 z"
                            id="path638"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(179.74588,337.10287)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g644">
                            <path
                            d="M 1.256,2.929 C 0,1.674 1.674,0 2.721,1.047 c 0,0 4.603,3.975 4.603,3.975 1.255,1.046 -0.627,2.93 -1.673,2.093 0,0 -4.395,-4.186 -4.395,-4.186 z"
                            id="path642"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(182.67588,335.42887)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g648">
                            <path
                            d="M 1.046,2.511 C 0,1.465 1.256,0 2.302,0.837 c 0,0 3.975,3.348 3.975,3.348 1.047,1.046 -0.628,2.511 -1.464,1.883 0,0 -3.767,-3.557 -3.767,-3.557 z"
                            id="path646"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(186.44288,334.59187)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g652">
                            <path
                            d="M 0.836,2.093 C 0,1.256 1.046,0 1.882,0.628 c 0,0 3.349,2.93 3.349,2.93 0.837,0.836 -0.628,2.301 -1.256,1.673 0,0 -3.139,-3.138 -3.139,-3.138 z"
                            id="path650"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(168.23688,311.99287)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g656">
                            <path
                            d="M 2.302,1.046 C 2.302,0 0.628,0.418 0.419,1.255 0.419,1.255 0,5.022 0,5.022 0,5.859 1.884,5.441 1.884,4.813 c 0,0 0.418,-3.767 0.418,-3.767 z"
                            id="path654"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(163.21588,316.59687)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g660">
                            <path
                            d="M 1.883,1.674 C 1.674,0 0,0.837 0,1.883 c 0,0 0.418,2.929 0.418,2.929 0,1.465 2.093,0.628 1.884,-0.209 0,0 -0.419,-2.929 -0.419,-2.929 z"
                            id="path658"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(157.14788,320.78087)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g664">
                            <path
                            d="M 1.673,1.465 C 1.464,0 0.418,0.419 0.418,1.465 c 0,0 -0.209,2.721 -0.209,2.721 -0.209,1.465 1.464,0.837 1.464,0 0,0 0,-2.721 0,-2.721 z"
                            id="path662"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(166.14588,317.01487)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g668">
                            <path
                            d="M 0.627,0 C 1.046,0 1.463,0.419 1.463,1.047 1.463,1.675 1.046,2.093 0.627,2.093 0.418,2.093 0,1.675 0,1.047 0,0.419 0.418,0 0.627,0 Z"
                            id="path666"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(159.86688,320.78087)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g672">
                            <path
                            d="M 1.047,0 C 1.675,0 2.093,0.628 2.093,1.256 2.093,2.093 1.675,2.511 1.047,2.511 0.419,2.511 0,2.093 0,1.256 0,0.628 0.419,0 1.047,0 Z"
                            id="path670"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(154.00888,323.29187)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g676">
                            <path
                            d="M 1.674,1.256 C 1.674,0 0,0 0,1.047 c 0,0 0,2.511 0,2.511 0,1.256 1.883,1.046 1.883,0.209 0,0 -0.209,-2.511 -0.209,-2.511 z"
                            id="path674"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(200.25288,166.35487)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g680">
                            <path
                            d="M 0.837,0 C 1.465,0 1.884,0.627 1.884,1.464 1.884,2.301 1.465,3.138 0.837,3.138 0.419,3.138 0,2.301 0,1.464 0,0.627 0.419,0 0.837,0 Z"
                            id="path678"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(202.97388,165.51787)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g684">
                            <path
                            d="M 0.627,4.812 C 0.209,4.812 0,3.766 0,2.51 0,1.046 0.209,0 0.627,0 c 0.419,0 0.838,1.046 0.838,2.51 0,1.256 -0.419,2.302 -0.838,2.302 z"
                            id="path682"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(205.90188,169.28387)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g688">
                            <path
                            d="M 1.675,0 C 2.721,0 3.558,0.418 3.558,0.837 3.558,1.046 2.721,1.465 1.675,1.465 0.837,1.465 0,1.046 0,0.837 0,0.418 0.837,0 1.675,0 Z"
                            id="path686"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(209.04088,172.84087)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g692">
                            <path
                            d="M 0.628,0 C 1.047,0 1.465,0.419 1.465,0.837 1.465,1.465 1.047,1.884 0.628,1.884 0.419,1.884 0,1.465 0,0.837 0,0.419 0.419,0 0.628,0 Z"
                            id="path690"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(211.76188,172.63187)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g696">
                            <path
                            d="m 1.256,0 c 0,0 7.742,0 7.742,0 2.511,0 2.929,1.256 1.255,3.558 C 11.091,7.742 5.859,10.463 6.068,3.767 5.649,2.511 4.184,1.883 1.256,1.883 0,1.465 0,0.209 1.256,0 Z"
                            id="path694"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(200.04388,221.80587)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g700">
                            <path
                            d="M 0.837,0 C 1.465,0 1.883,0.419 1.883,1.046 1.883,1.674 1.465,2.302 0.837,2.302 0.418,2.302 0,1.674 0,1.046 0,0.419 0.418,0 0.837,0 Z"
                            id="path698"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(196.27688,222.85187)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g704">
                            <path
                            d="M 1.256,0 C 1.883,0 2.511,0.628 2.511,1.465 2.511,2.092 1.883,2.72 1.256,2.72 0.418,2.72 0,2.092 0,1.465 0,0.628 0.418,0 1.256,0 Z"
                            id="path702"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(196.90488,222.01487)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g708">
                            <path
                            d="M 4.813,3.138 C 7.534,1.256 10.253,0 10.672,0.628 11.09,1.256 9.207,3.348 6.278,5.441 3.348,7.324 0.837,8.37 0.209,7.743 0,7.115 1.883,5.022 4.813,3.138 Z"
                            id="path706"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(208.83188,216.36487)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g712">
                            <path
                            d="M 2.93,2.302 C 4.604,0.837 6.278,0 6.487,0.209 6.905,0.628 5.651,2.093 3.977,3.558 2.302,4.813 0.628,5.86 0.419,5.441 0,5.023 1.256,3.558 2.93,2.302 Z"
                            id="path710"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(205.27588,222.64287)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g716">
                            <path
                            d="m 0,11.927 c 0.626,-1.464 1.254,-2.929 2.091,-4.185 0,0 -0.418,-0.209 -0.418,-0.209 0.418,-2.511 2.302,-4.395 4.813,-5.65 0,0 0.419,0.209 0.419,0.209 C 7.742,1.256 8.788,0.628 10.043,0 9.416,1.046 8.997,2.092 8.369,2.929 c 0,0 0.628,0.418 0.628,0.418 1.464,-1.464 3.348,-2.719 5.44,-3.347 -1.255,1.674 -2.511,2.929 -3.976,4.185 0,0 1.256,0.837 1.256,0.837 1.883,-1.675 4.185,-2.93 6.069,-3.766 -1.465,1.464 -2.93,3.138 -4.604,4.603 0,0 1.465,0.837 1.465,0.837 1.883,-1.465 4.185,-2.511 6.277,-2.93 -1.046,0.837 -2.092,1.674 -2.929,2.511 1.464,-0.418 3.138,-0.418 5.231,-0.628 -2.721,1.256 -4.394,1.675 -6.487,2.512 0,0 1.674,1.046 1.674,1.046 2.092,-1.256 4.394,-1.883 6.278,-1.883 -1.465,0.837 -3.139,1.883 -4.813,2.72 0,0 1.464,0.837 1.464,0.837 1.884,-1.046 4.186,-1.464 6.069,-1.255 -1.674,0.627 -3.139,1.255 -4.604,2.091 0,0 0.837,0.628 0.837,0.628 1.884,-0.837 3.767,-1.254 5.65,-1.254 -1.673,0.626 -2.929,1.464 -4.394,2.091 0,0 1.256,0.628 1.256,0.628 1.674,-0.628 3.347,-0.628 4.812,-0.418 -1.256,0.418 -2.51,0.627 -3.766,1.255 0,0 4.394,2.721 4.394,2.721 0,0 -0.837,0.418 -0.837,0.418 0,0 -6.696,-2.302 -6.696,-2.302 -0.419,0 -0.628,0.21 -0.837,0.419 0,-0.209 0.209,-0.419 0.418,-0.628 0,0 -1.674,-0.418 -1.674,-0.418 -0.837,0.418 -1.883,1.046 -2.929,1.464 0.627,-0.837 1.046,-1.464 1.674,-1.883 0,0 -1.674,-0.628 -1.674,-0.628 -0.837,0.419 -1.883,1.047 -2.929,1.465 0.418,-0.628 1.046,-1.465 1.674,-2.093 0,0 -1.674,-0.627 -1.674,-0.627 -1.256,0.837 -2.302,1.674 -3.558,2.302 0.628,-1.047 1.256,-1.884 2.093,-2.721 0,0 -2.302,-0.836 -2.302,-0.836 -1.047,1.045 -2.093,1.882 -3.138,2.719 0.209,-1.046 0.836,-2.302 1.673,-3.138 0,0 -2.092,-0.837 -2.092,-0.837 -1.046,1.047 -2.302,2.092 -3.558,3.138 0.628,-1.255 1.256,-2.51 2.093,-3.556 0,0 -3.348,-1.256 -3.348,-1.256 C 2.928,9.626 1.463,10.881 0,11.927 Z"
                            id="path714"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(172.00388,241.05687)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g720">
                            <path
                            d="m 9.835,0 c -2.72,5.44 -5.44,13.81 -7.323,30.76 -1.047,7.533 -1.675,15.066 -0.21,22.808 0.837,4.185 2.72,5.65 4.603,5.441 0,0 31.179,-5.022 31.179,-5.022 2.302,-0.419 4.604,-2.302 3.557,-4.394 0,0 -1.255,-2.511 -1.255,-2.511 0,0 -1.047,3.556 -1.047,3.556 0,0 -1.674,-2.929 -1.674,-2.929 0,0 -1.255,3.348 -1.255,3.348 0,0 -1.884,-4.185 -1.884,-4.185 0,0 -1.464,5.022 -1.464,5.022 0,0 -1.883,-3.975 -1.883,-3.975 0,0 -1.046,4.184 -1.046,4.184 0,0 -1.047,-3.557 -1.047,-3.557 0,0 -1.255,4.394 -1.255,4.394 0,0 -1.466,-3.975 -1.466,-3.975 0,0 -1.255,4.812 -1.255,4.812 0,0 -1.673,-4.603 -1.673,-4.603 0,0 -1.256,3.348 -1.256,3.348 0,0 -1.465,-2.72 -1.465,-2.72 0,0 -1.046,2.511 -1.046,2.511 0,0 -1.465,-2.093 -1.465,-2.093 -1.465,-0.627 -2.93,-0.627 -4.394,0 0,0 -0.628,1.046 -0.628,1.046 0,0 -0.837,-1.046 -0.837,-1.046 -2.302,-0.627 -4.813,-1.046 -7.115,-1.464 0,0 2.93,-1.465 2.93,-1.465 0,-1.047 -1.046,-1.465 -2.93,-1.256 0,0 3.139,-2.302 3.139,-2.302 0,0 -3.348,-0.628 -3.348,-0.628 0,0 3.139,-1.883 3.139,-1.883 0,-0.836 -0.837,-1.673 -3.347,-2.72 0,0 3.347,-1.046 3.347,-1.046 0,0 0,-0.837 0,-0.837 0,0 -3.347,-0.419 -3.347,-0.419 0,0 3.556,-1.674 3.556,-1.674 0.419,-0.837 -0.628,-1.465 -2.93,-2.302 0,0 2.93,-0.837 2.93,-0.837 -0.209,-0.836 -0.418,-1.882 -2.511,-2.719 0,0 2.511,-0.838 2.511,-0.838 0,0 -2.511,-1.883 -2.511,-1.883 0,0 3.139,-1.256 3.139,-1.256 0,-1.046 -0.419,-1.465 -2.302,-2.302 0,0 3.348,-1.464 3.348,-1.464 -0.209,-0.627 -1.046,-1.674 -3.139,-2.302 0,0 3.139,-1.046 3.139,-1.046 0,0 -2.511,-1.674 -2.511,-1.674 0,0 2.93,-1.256 2.93,-1.256 0,0 -2.302,-0.837 -2.302,-0.837 0,0 2.72,-1.674 2.72,-1.674 0.628,-0.627 -0.418,-1.255 -2.72,-1.464 0,0 3.139,-1.256 3.139,-1.256 0,0 0.209,-1.255 0.209,-1.255 0,0 -2.93,0.418 -2.93,0.418 0,0 1.465,-1.255 1.465,-1.255 0,0 -1.883,-1.465 -1.883,-1.465 0,0 4.395,-1.047 4.395,-1.047 0,0 0.418,-0.837 0.418,-0.837 0,0 -3.139,-0.837 -3.139,-0.837 0,0 2.511,-1.464 2.511,-1.464 C 11.928,0.419 11.091,0 9.835,0 Z m 4.812,4.394 c 0,0 0.628,-0.209 0.628,-0.209 -2.719,14.857 -3.975,29.086 -1.882,41.85 -1.047,-19.879 1.464,-41.013 5.23,-44.57 0,0 0.628,1.464 0.628,1.464 -4.394,15.904 -4.812,30.132 -1.883,42.897 -1.883,-21.762 -0.209,-34.317 3.557,-41.014 0,0 0,2.093 0,2.093 -2.929,15.275 -3.138,27.621 -0.418,37.665 0,0 0.837,-0.628 0.837,-0.628 -1.883,-15.902 -0.837,-28.248 1.674,-40.594 0,0 1.464,0.209 1.464,0.209 -2.929,16.113 -2.929,28.667 -0.836,40.176 0,0 0.836,-0.837 0.836,-0.837 -1.673,-16.53 -1.464,-28.04 1.047,-38.502 0,0 1.255,0.209 1.255,0.209 -2.302,15.904 -2.511,28.458 -0.419,38.712 0,0 0.838,-0.21 0.838,-0.21 -1.674,-17.367 -0.838,-29.713 1.465,-38.92 0,0 0.837,0.837 0.837,0.837 -1.674,13.811 -1.465,25.947 0,37.456 0,0 0.837,-0.419 0.837,-0.419 -0.419,-15.066 -1.256,-26.993 0.628,-35.782 0,0 1.046,-1.255 1.046,-1.255 -1.465,11.09 -1.465,23.436 0.419,37.246 0,0 0.837,0 0.837,0 -1.465,-16.321 -1.047,-28.667 0.626,-38.711 0,0 0.837,0.628 0.837,0.628 -0.837,13.183 -0.837,25.11 0.21,38.293 0,0 0.837,-0.21 0.837,-0.21 -0.837,-17.995 -0.209,-30.34 1.674,-37.665 1.674,-0.628 1.674,1.465 0.209,3.767 -1.046,10.881 -1.465,21.762 0,33.689 0,0 1.256,0.209 1.256,0.209 -1.256,-17.367 -0.209,-27.412 1.674,-37.246 1.046,-1.047 2.093,0.209 0.837,2.72 -1.465,12.137 -2.302,20.716 -1.046,34.526 0,0 1.465,0 1.465,0 1.673,0.628 1.882,1.256 0.209,1.884 -10.253,2.092 -20.088,3.976 -29.504,4.604 -1.884,0.209 -2.512,-0.837 -2.512,-3.558 C 9.416,30.342 11.091,16.74 14.647,4.394 Z m 34.527,8.579 c 0,0 1.256,-6.277 1.256,-6.277 1.465,-0.837 2.092,-0.419 1.883,1.255 0,0 -2.72,5.231 -2.72,5.231 0,0 -0.419,-0.209 -0.419,-0.209 z M 46.872,6.277 c -1.465,10.463 -1.465,16.74 -2.511,27.621 0,0 0.837,1.884 0.837,1.884 C 45.407,23.645 47.082,15.903 48.756,6.696 49.384,5.022 47.709,4.603 46.872,6.277 Z M 43.733,5.859 c 0.628,-0.837 1.674,-0.628 1.465,0.418 -1.674,8.998 -2.719,19.67 -2.929,31.807 0,0 -0.628,0 -0.628,0 C 41.014,26.366 41.432,15.903 43.733,5.859 Z M 0.21,74.284 C 0,70.936 0.419,67.379 1.674,63.821 2.093,62.357 3.558,61.519 6.068,61.31 c 0,0 28.04,-4.184 28.04,-4.184 1.465,-0.21 1.674,0.627 1.465,2.51 -0.419,2.721 -0.838,5.232 -2.093,7.325 -1.045,0.837 -1.255,-2.721 -1.045,-8.161 -2.093,5.021 -1.256,10.253 -4.604,11.089 -1.466,-2.301 0.837,-6.696 1.255,-10.044 -3.139,2.93 -2.093,6.488 -4.813,10.254 -1.045,0.209 -0.836,-3.348 -0.209,-8.998 -1.464,4.185 -2.72,7.534 -4.185,8.998 -0.837,-1.255 -0.837,-4.394 -0.628,-7.742 -1.255,5.441 -2.72,9.206 -3.976,9.834 -0.418,-3.138 -0.209,-6.068 0.21,-8.998 0,0 -0.628,-0.627 -0.628,-0.627 -0.837,5.232 -1.674,8.37 -2.929,9.835 -1.047,-2.93 -1.256,-6.278 0.418,-9.626 0,0 -1.255,0 -1.255,0 -0.837,2.721 -1.256,5.023 -2.512,5.86 C 6.905,68.425 6.068,66.542 6.068,63.403 4.604,69.262 2.512,72.401 0.21,74.284 Z"
                            id="path718"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(207.78588,243.14987)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g724">
                            <path
                            d="m 17.368,12.973 c -1.674,1.256 -2.301,2.72 1.046,2.511 -2.301,2.093 -2.511,3.558 -0.628,4.185 -4.184,5.231 -4.184,6.696 -0.209,4.394 -4.603,5.859 -3.975,6.696 -0.837,5.65 -3.975,4.813 -3.348,5.441 -2.092,5.65 -2.721,3.766 -2.721,5.649 -0.209,5.44 -2.093,0.837 -3.558,2.511 -3.976,5.86 -0.838,3.347 -9.835,7.114 -2.303,10.253 2.303,1.255 4.186,4.394 5.651,9.835 0.628,2.929 1.883,3.138 4.394,2.092 2.092,-0.628 4.185,-0.837 6.278,-1.047 3.975,0.419 4.184,-3.975 -0.21,-4.603 0.419,-1.674 -1.046,-2.511 -3.348,-1.465 1.884,-3.139 -0.418,-2.302 -1.255,-2.72 1.255,-0.628 1.046,-2.092 -2.302,-0.21 0,0 -0.419,-1.046 -0.419,-1.046 1.883,-0.627 2.511,-1.673 2.721,-2.929 0,0 -5.65,1.884 -5.65,1.884 1.674,-1.465 2.511,-2.511 2.302,-3.558 0,0 -3.976,0.837 -3.976,0.837 4.185,-2.93 5.859,-5.022 5.649,-6.068 0,0 -4.393,1.255 -4.393,1.255 3.138,-2.51 5.23,-4.603 5.021,-5.859 0,0 -3.766,1.465 -3.766,1.465 0,-1.255 1.674,-2.511 4.813,-3.348 2.511,-1.256 3.766,-2.93 3.348,-5.231 0,0 -5.65,2.72 -5.65,2.72 4.604,-4.185 8.37,-7.952 9.416,-10.462 -0.419,-1.465 -5.022,1.673 -11.09,6.696 0,0 0,-1.047 0,-1.047 5.859,-3.976 10.254,-8.579 13.601,-13.811 0,0 -11.09,8.58 -11.09,8.58 0,0 10.044,-11.927 10.044,-11.927 -0.628,-1.465 -3.557,0.209 -9.207,6.068 0,0 0.418,-1.256 0.418,-1.256 0,0 5.232,-5.649 5.232,-5.649 3.975,-2.302 6.486,-5.232 8.161,-8.789 1.046,-2.72 -2.511,0.837 -7.952,5.65 -1.255,1.256 -2.72,1.883 -4.185,3.348 0,0 12.764,-13.392 12.764,-13.392 0,0 0.21,-1.674 0.21,-1.674 C 32.434,0 24.273,9.626 17.368,12.973 Z M 2.302,64.658 C 0,63.193 2.511,59.845 4.185,61.31 c 0,0 6.278,4.604 6.278,4.604 1.883,1.464 0,3.975 -1.465,2.929 0,0 -6.696,-4.185 -6.696,-4.185 z m 2.511,-3.976 c -2.302,-1.465 0.419,-4.394 1.884,-3.139 0,0 3.347,3.348 3.347,3.348 1.883,1.675 0.628,3.139 -1.046,2.302 0,0 -4.185,-2.511 -4.185,-2.511 z m 13.392,12.556 c -1.674,-0.838 -2.511,0.418 -1.465,1.255 2.72,2.301 5.65,4.184 8.789,5.649 3.138,1.675 6.487,1.884 9.626,1.884 2.301,0 3.347,-1.465 0.418,-2.093 -5.441,-1.465 -10.881,-3.139 -17.368,-6.695 z m 1.674,-0.21 c -1.047,-1.256 -0.837,-2.302 0.628,-3.139 0,0 7.533,-0.628 7.533,-0.628 1.464,0 2.72,0.837 3.976,2.511 0,0 3.557,3.977 3.557,3.977 1.464,1.882 0.209,3.347 -1.255,2.928 -5.023,-1.464 -9.835,-3.347 -14.439,-5.649 z"
                            id="path722"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(235.19788,260.30787)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g728">
                            <path
                            d="m 0,35.991 c 1.255,-2.302 3.139,-3.976 5.859,-5.022 7.115,-1.046 14.229,-2.511 20.925,-5.022 2.092,-1.465 2.929,-1.046 2.72,1.256 -0.628,6.486 -1.465,11.927 -3.347,13.601 0,0 0,-11.299 0,-11.299 0,0 -0.837,0.209 -0.837,0.209 -0.628,5.65 -1.465,9.835 -2.93,11.508 0,0 0.418,-10.462 0.418,-10.462 0,0 -1.046,0 -1.046,0 0,0 -2.302,10.253 -2.302,10.253 0,0 0.628,-8.998 0.628,-8.998 0,-1.255 -0.419,-1.464 -1.047,-0.837 -1.463,10.462 -3.347,14.857 -5.44,16.322 2.093,-6.696 2.093,-11.3 1.675,-15.276 0,0 -0.628,-0.418 -0.628,-0.418 -0.628,5.441 -1.465,10.672 -3.349,14.648 -2.092,-3.139 1.884,-8.579 1.047,-13.811 0,0 -0.419,0 -0.419,0 0,0 -3.766,12.974 -3.766,12.974 -1.255,0 -0.837,-1.675 0.418,-5.023 0,0 0.418,-7.323 0.418,-7.323 0,0 -0.627,0.418 -0.627,0.418 -1.046,3.976 -2.092,6.905 -3.557,9.417 0,0 0.628,-9.626 0.628,-9.626 0,0 -2.721,6.905 -2.721,6.905 0,0 0.21,-5.649 0.21,-5.649 0,0 -2.93,1.255 -2.93,1.255 z M 30.969,28.04 c 0.209,-2.302 2.721,-1.674 1.674,0.628 0,0 -1.255,2.928 -1.255,2.928 0,0 -0.628,0 -0.628,0 0,0 0.209,-3.556 0.209,-3.556 z m -0.628,8.579 c 0.21,0 0.419,0.628 0.419,1.465 0,0.837 -0.209,1.465 -0.419,1.465 -0.209,0 -0.418,-0.628 -0.418,-1.465 0,-0.837 0.209,-1.465 0.418,-1.465 z m 1.047,-3.139 c 0.418,0 0.627,0.209 0.627,0.837 0,0.419 -0.209,0.837 -0.627,0.837 -0.419,0 -0.837,-0.418 -0.837,-0.837 0,-0.628 0.418,-0.837 0.837,-0.837 z m -0.21,-12.764 c 0.628,0 1.047,0.836 1.256,1.883 0.209,1.046 0.209,2.092 -0.419,2.092 -0.209,0.21 -0.837,-0.627 -1.046,-1.674 -0.209,-1.046 0,-2.092 0.209,-2.301 z m -3.139,-6.069 c 1.884,1.884 2.093,3.558 1.884,5.023 -0.21,2.092 -1.884,3.557 -1.884,2.092 -0.209,-1.883 0,-3.975 -1.464,-6.487 -0.837,-1.046 0.628,-1.465 1.464,-0.628 z M 12.764,10.881 c 0.21,-2.092 1.884,-0.418 1.884,0.837 0,0 -0.628,3.348 -0.628,3.348 -0.628,0.628 -0.837,0.209 -1.465,-1.046 0,0 0.209,-3.139 0.209,-3.139 z M 5.441,21.762 c -1.675,1.046 -1.675,1.883 0.209,2.511 0,0 0.837,-0.209 0.837,-0.209 0,0 0,0.209 0,0.209 0,0.837 0.419,1.465 0.837,1.465 0.419,0 0.837,-0.628 0.837,-1.465 0,-0.209 0,-0.419 0,-0.628 0,0 1.883,-0.418 1.883,-0.418 0,0 0,4.185 0,4.185 -0.628,0.209 -1.256,0.209 -2.092,0.419 0,-0.419 -0.418,-0.628 -0.628,-0.628 -0.418,0 -0.837,0.418 -0.837,0.837 0,0 0.209,0.209 0.209,0.418 -0.418,0.21 0,0.21 0.838,0.837 0,0 14.019,-3.139 14.019,-3.139 4.185,0 5.231,-3.139 4.185,-8.16 0.628,-1.675 0.21,-2.302 -1.256,-2.093 0,0 -3.139,-0.418 -3.139,-0.418 0,0 1.884,-1.256 1.884,-1.256 2.511,-1.256 2.511,-1.884 0.418,-1.884 0,0 -4.394,-0.627 -4.394,-0.627 0,0 3.557,-0.627 3.557,-0.627 1.047,-0.21 1.465,-1.465 -0.209,-2.093 0,0 -3.767,-0.419 -3.767,-0.419 0,0 2.93,-0.627 2.93,-0.627 C 23.645,6.487 22.599,5.44 19.041,5.022 20.297,3.557 20.088,2.511 18.623,2.511 17.995,1.047 16.113,0 16.74,2.72 c 0,0 0.838,13.811 0.838,13.811 0.417,1.465 -0.21,2.511 -1.884,3.139 0,0 -10.253,2.092 -10.253,2.092 z m 7.951,-5.441 c 0.628,0 1.046,0.419 1.046,1.047 0,0.628 -0.418,1.046 -1.046,1.046 -0.418,0 -0.837,-0.418 -0.837,-1.046 0,-0.628 0.419,-1.047 0.837,-1.047 z m 8.37,4.395 c 0.209,0 0.419,0.209 0.419,0.419 0,0.417 -0.21,0.627 -0.419,0.627 -0.209,0 -0.419,-0.21 -0.419,-0.627 0,-0.21 0.21,-0.419 0.419,-0.419 z m -0.837,-2.72 c 0.837,-0.209 1.465,0 1.674,0.418 0.209,0.628 -0.418,1.047 -1.256,1.256 -0.837,0.209 -1.464,0 -1.674,-0.628 -0.209,-0.209 0.419,-0.837 1.256,-1.046 z m -9.626,8.997 c 0.21,0 0.21,0 0.419,0 0,0 0,-4.185 0,-4.185 0,0 -1.046,0.419 -1.046,0.419 0,0 0.627,3.766 0.627,3.766 z m 2.302,-0.627 c 0.419,0 0.628,-0.21 1.047,-0.21 0,0 0,-3.976 0,-3.976 0,0 -1.884,0.419 -1.884,0.419 0,0 0.837,3.767 0.837,3.767 z m 2.512,-0.837 c 0.209,-0.21 0.418,-0.21 0.627,-0.419 0,0 0,-3.348 0,-3.348 0,0 -0.837,0.209 -0.837,0.209 0,0 0.21,3.558 0.21,3.558 z m 1.882,-0.838 c 0,0 0.419,0 0.628,-0.209 1.465,-1.674 1.465,-2.511 -0.209,-2.93 0,0 -0.419,0 -0.419,0 0,0 0,3.139 0,3.139 z"
                            id="path726"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(227.03688,85.79297)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g732">
                            <path
                            d="M 58.59,1.4648 C 41.223,0 32.853,5.6494 28.249,11.5089 c -3.975,5.021 -6.068,10.672 -6.487,16.949 0.419,1.046 2.302,-1.256 5.022,-4.812 0,0 -1.673,-0.628 -1.673,-0.628 0.418,-1.256 1.045,-2.302 1.882,-3.558 0.419,-0.628 0.419,-1.674 1.465,-2.302 1.256,-0.628 2.093,-1.883 2.093,-2.301 0,0 -1.465,0 -1.465,0 4.813,-5.859 11.509,-7.3247 19.042,-7.1147 2.092,0.2087 3.976,0.4177 5.859,0.6277 1.046,0.209 2.092,-0.21 2.72,-0.6277 C 57.335,7.3232 57.544,6.6963 56.498,6.6963 49.802,5.6494 43.106,6.0684 36.619,7.5322 41.432,4.3945 48.337,4.1846 58.172,4.6035 62.148,4.8125 62.357,1.8828 58.59,1.4648 Z M 28.249,113.204 c 0.628,0.419 0.837,1.674 0.418,3.139 -0.418,1.256 -1.465,2.303 -2.092,2.093 -0.836,-0.209 -1.046,-1.674 -0.628,-2.93 0.628,-1.465 1.465,-2.511 2.302,-2.302 z m -15.066,6.069 c 0.21,0 0.628,1.046 0.628,2.092 0,1.256 -0.418,2.093 -0.628,2.093 -0.418,0 -0.628,-0.837 -0.628,-2.093 0,-1.046 0.21,-2.092 0.628,-2.092 z m 1.256,7.324 c 0.628,-3.976 2.51,-7.533 5.858,-9.835 2.93,-2.093 3.558,-1.465 1.256,1.465 -2.093,2.72 -3.348,6.068 -5.022,8.998 -0.627,1.255 -2.511,2.719 -2.092,-0.628 z m 8.788,-15.904 c -2.93,1.046 -5.232,2.93 -6.696,5.65 -1.046,2.512 -0.627,2.721 1.255,0.837 1.884,-2.092 4.186,-3.348 6.278,-5.022 0.837,-0.628 1.675,-2.092 -0.837,-1.465 z m -17.995,14.02 c -1.465,1.884 -1.256,2.512 1.255,1.465 3.976,-6.069 6.696,-10.044 8.998,-11.3 0,0 7.114,-6.277 7.114,-6.277 5.441,-1.255 8.58,-7.115 9.626,-16.9501 0,0 -0.419,-1.254 -0.419,-1.254 -2.72,6.905 -5.859,11.9261 -10.044,14.6471 -3.767,2.72 -6.905,6.068 -9.835,10.044 -1.255,1.255 -1.255,2.72 -2.302,4.394 -1.255,1.674 -3.347,3.348 -4.393,5.231 z m -1.674,-4.394 c -1.256,2.302 -0.21,3.139 1.046,1.255 4.812,-6.696 8.161,-11.299 13.182,-15.484 4.604,-3.558 11.3,-10.0441 14.02,-18.6231 1.675,-5.023 -0.209,-6.487 -1.464,-3.349 -2.721,7.533 -5.859,14.23 -10.882,18.2051 -5.649,4.604 -11.718,9.835 -15.902,17.996 z M 2.93,113.414 c -1.047,1.883 -1.256,3.348 -0.419,4.394 3.976,-1.465 2.721,-7.742 12.556,-12.764 1.255,-1.674 0.837,-2.302 -1.256,-1.674 0,0 -9.207,6.696 -9.207,6.696 3.138,-5.022 6.277,-8.998 10.881,-10.044 2.929,-0.4181 5.65,-1.6741 8.161,-4.3941 1.046,-2.302 0.628,-2.93 -1.047,-1.884 -5.65,3.767 -10.462,5.232 -14.857,8.5791 -3.975,3.349 -6.696,7.534 -7.742,12.346 0,0 2.93,-1.255 2.93,-1.255 z M 2.302,101.277 c 1.674,-3.5571 6.277,-5.8591 12.765,-7.9511 4.393,-1.466 7.951,-4.604 11.089,-8.37 3.348,-2.093 2.721,-0.21 1.674,2.092 -1.255,2.093 -2.091,2.721 -4.184,3.976 -2.511,2.092 -6.278,3.976 -9.207,5.231 -3.558,1.256 -6.906,3.349 -10.044,7.1151 -1.884,1.464 -2.721,0.836 -2.093,-2.093 z m 9.835,-11.9271 c 3.139,-1.883 5.858,-3.767 7.951,-6.906 2.93,-4.184 4.186,-4.393 3.349,0 -0.838,3.558 -3.349,7.325 -8.58,9.207 -4.394,1.675 -5.65,-0.418 -2.72,-2.301 z m 13.183,-9.625 c 0,0 1.464,-7.533 1.464,-7.533 0.209,-2.93 1.256,-5.651 3.139,-7.953 0,0 2.302,-6.277 2.302,-6.277 0.628,-2.511 1.674,-2.302 1.674,0.837 0,0 -1.465,3.976 -1.465,3.976 1.256,0.627 0.628,1.883 -0.209,3.139 -0.209,1.465 -0.209,3.139 -1.674,3.557 -0.419,5.65 -1.047,10.254 -2.721,11.718 -2.51,3.139 -3.347,2.72 -2.51,-1.464 z m -10.044,-1.047 c 0,0 3.347,-8.16 3.347,-8.16 0.837,-2.93 2.302,-4.604 4.186,-4.814 0,0 4.603,-4.393 4.603,-4.393 1.046,-1.256 1.674,0.418 1.046,1.464 0,0 -3.347,5.441 -3.347,5.441 -0.628,4.393 -2.302,8.369 -6.278,12.973 -0.838,0.837 -2.302,0.837 -1.465,-0.418 0,0 3.976,-7.952 3.976,-7.952 0,0 -5.022,6.906 -5.022,6.906 -1.465,1.883 -1.674,0.418 -1.046,-1.047 z m -5.86,3.348 c 1.884,-5.022 2.511,-7.742 4.395,-9.417 2.302,-2.3 2.929,-2.091 1.465,0.628 -1.047,2.093 -2.511,5.023 -2.511,10.254 0,4.185 -5.232,3.348 -3.349,-1.465 z m -0.418,-6.696 c 0.209,1.674 0.418,1.255 1.255,0 0,0 1.884,-5.231 1.884,-5.231 2.092,-1.883 5.021,-3.976 7.742,-7.324 1.256,1.883 3.558,0.209 7.114,-4.603 4.395,-2.093 6.488,-5.44 7.743,-9.626 1.046,-3.558 0.419,-4.185 -1.883,-1.883 -3.349,4.394 -5.86,6.069 -7.114,9.206 -3.977,1.256 -7.116,5.651 -11.719,7.743 -1.255,0.837 -1.674,2.092 -1.674,3.767 -1.883,1.255 -3.139,3.348 -3.348,7.951 z m 0.418,-10.253 c 0.419,-0.628 1.256,-0.838 1.675,-0.628 0.418,0.418 0.418,1.255 -0.21,1.883 -0.418,0.837 -1.256,1.047 -1.883,0.628 -0.209,-0.419 -0.209,-1.256 0.418,-1.883 z m 23.227,-35.782 c 2.929,-3.558 6.487,-6.068 9.835,-7.533 3.976,-1.674 3.766,1.465 1.047,1.465 -2.093,0 -5.023,1.882 -9.835,7.951 -1.256,1.674 -2.721,0.21 -1.047,-1.883 z M 5.022,71.9829 c -0.627,-7.534 1.047,-11.928 4.603,-14.439 9.626,-5.859 12.974,-14.438 16.114,-14.229 3.138,-5.441 7.951,-11.09 13.6,-16.322 4.186,-2.929 5.023,-2.301 2.721,2.302 -6.069,8.579 -12.137,18.832 -17.577,21.762 -2.511,0.21 -4.395,1.675 -5.86,3.976 0,0 3.767,-1.883 3.767,-1.883 1.884,-0.209 2.093,0.417 0.837,1.673 -3.139,1.674 -8.37,9.835 -9.625,4.604 -2.093,3.975 -5.651,3.348 -5.86,7.324 0,0 -0.419,5.232 -0.419,5.232 -0.836,1.463 -1.463,1.463 -2.301,0 z m 37.247,-54.825 c 1.884,0.209 2.72,0.837 1.256,2.511 -4.604,1.884 -8.998,5.44 -13.183,10.463 0.418,1.884 -0.419,3.558 -2.512,4.812 0,3.139 -1.883,4.604 -5.021,5.023 0,0 -4.604,5.858 -4.604,5.858 1.046,1.465 -0.628,3.767 -3.976,7.116 -2.092,2.301 -2.929,1.673 -2.511,-2.093 2.511,-6.906 7.324,-16.949 9.626,-16.949 1.255,0 1.255,-0.419 1.674,-2.721 0.209,-1.674 1.883,-1.255 1.465,0 -0.209,1.674 0.209,1.884 1.256,0.628 5.23,-8.579 10.88,-12.974 16.53,-14.648 z m -14.02,2.093 c 3.767,-4.394 10.253,-7.324 22.39,-7.114 2.511,0.209 2.093,2.72 -0.209,2.511 -1.884,-0.209 -3.976,0.627 -5.859,1.045 -2.302,0.628 -4.813,0.837 -6.906,2.093 -4.184,2.302 -7.951,6.069 -11.3,11.3 -1.254,0.628 -1.464,0.209 -0.836,-1.256 4.185,-7.533 9.207,-11.509 14.438,-11.928 0,0 0.209,-0.418 0.209,-0.418 -2.93,-0.627 -6.486,0.628 -11.718,5.441 -0.628,0.628 -0.837,0 -0.209,-1.674 z m 4.604,-6.487 c 4.603,-2.93 9.835,-4.604 15.903,-3.766 3.766,0.418 3.766,2.72 1.674,2.511 -5.859,-0.837 -11.509,-0.628 -17.159,2.092 -2.092,1.047 -1.674,0 -0.418,-0.837 z"
                            id="path730"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(287.51088,78.46877)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g736">
                            <path
                            d="M 1.465,2.9297 C 0,1.0469 1.046,0 3.557,0.209 c 6.487,1.2558 12.136,2.0927 15.694,5.0224 2.093,1.4649 0.418,2.9297 -1.046,1.8828 0,0 -4.395,-2.3017 -4.395,-2.3017 C 14.019,6.6963 12.346,5.8594 9.835,3.7666 8.16,5.4404 6.068,4.6035 3.766,2.0927 c 0,0 1.465,4.1846 1.465,4.1846 0.209,0.8369 -0.628,0.8369 -1.047,0.21 0,0 -2.719,-3.5576 -2.719,-3.5576 z m 8.997,3.3476 C 9.625,6.9052 10.672,8.3701 11.3,8.998 12.137,9.8349 13.182,9.416 12.764,8.1611 12.555,6.9052 11.3,5.6504 10.462,6.2773 Z"
                            id="path734"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(309.06388,82.02637)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g740">
                            <path
                            d="M 2.301,7.9512 C 1.673,7.5332 0.209,6.9053 2.092,6.4863 0,5.2314 0.837,3.5566 2.301,3.3476 7.951,3.1387 12.345,0 18.832,3.5566 c 0,0 2.929,3.3487 2.929,3.3487 1.884,4.3935 0.21,6.4862 -2.301,3.3476 -1.255,-1.8828 -0.209,-3.5576 -3.348,-5.0215 1.674,3.1387 2.93,6.2774 2.93,9.8351 4.812,4.602 0.418,5.649 -0.837,2.72 0,0 -1.884,-8.5795 -1.884,-8.5795 0.419,4.1845 0.628,7.3235 0,7.3235 -1.465,0 -0.627,-2.93 -1.255,-6.4866 -0.419,-1.4648 -0.838,-4.1855 -1.675,-4.3945 -3.556,-1.2559 -6.905,-0.209 -9.625,0 4.604,-0.209 7.742,0 8.788,1.2559 1.465,2.0918 1.674,4.3935 1.047,6.4862 -1.047,1.675 -1.675,1.256 -1.675,-0.837 0,0 -0.627,-2.7195 -0.627,-2.7195 C 11.089,8.3701 9.416,8.1611 7.114,8.3701 5.649,8.5791 3.975,8.9971 2.301,7.9512 Z"
                            id="path738"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(251.93788,230.59387)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g744">
                            <path
                            d="m 1.255,15.694 c 6.697,11.091 14.439,21.762 23.227,31.807 1.047,1.255 0.21,-2.512 1.047,-1.047 1.883,3.976 4.812,7.742 6.068,8.998 1.255,-1.047 -2.72,-4.603 -3.348,-8.789 0,0 11.927,13.811 11.927,13.811 1.046,-1.883 -5.859,-10.044 -11.508,-17.159 0,0 0.837,-0.837 0.837,-0.837 0,0 13.601,17.787 13.601,17.787 0,0 0.627,-0.209 0.627,-0.209 -2.092,-5.86 -8.37,-12.974 -12.555,-19.461 0,0 0.419,-1.464 0.419,-1.464 2.511,3.138 5.859,7.951 8.579,11.926 3.976,5.65 7.534,10.672 8.579,11.091 5.023,1.255 -11.926,-16.531 -19.669,-31.387 0,0 0.21,-0.837 0.21,-0.837 9.207,14.019 17.367,26.783 26.365,32.642 1.046,0.628 1.884,-0.628 0.837,-1.883 -8.161,-9.626 -17.786,-20.088 -23.646,-29.504 0,0 0.419,-0.837 0.419,-0.837 8.788,10.463 13.392,22.389 30.132,32.434 1.047,0.627 1.674,1.674 2.721,0.836 3.766,-2.929 -14.439,-7.323 -28.459,-30.969 0,0 0.21,-1.673 0.21,-1.673 5.231,7.114 6.068,9.207 10.88,14.229 6.697,7.323 17.159,15.902 18.833,14.648 1.674,-1.465 -15.066,-12.974 -24.064,-26.995 0,0 0.419,-0.418 0.419,-0.418 7.114,9.835 17.158,21.762 31.806,29.295 2.092,1.047 1.256,0.837 3.766,0.837 6.488,0.419 -14.438,-10.253 -25.319,-22.18 0,0 0.209,-1.046 0.209,-1.046 3.14,2.719 7.115,6.277 11.509,9.835 5.231,3.766 10.672,7.114 15.066,9.625 3.976,2.092 7.114,3.348 8.579,2.72 3.767,-1.883 -14.437,-8.37 -19.042,-13.183 2.721,1.466 5.441,2.512 7.742,3.557 7.953,3.976 13.602,6.697 14.858,5.232 0.837,-1.046 -3.348,-3.348 -10.672,-6.069 -0.837,-0.836 -0.209,-1.045 1.883,-0.627 8.37,3.348 13.183,5.65 14.229,5.022 2.72,-0.837 -1.674,-2.721 -6.696,-5.859 6.278,2.72 11.719,5.231 14.647,4.394 1.047,-0.209 -3.556,-2.721 -7.533,-6.277 5.651,3.556 19.042,8.37 6.279,-0.628 0,0 0.836,-0.419 0.836,-0.419 4.813,3.558 10.881,5.022 3.557,-0.837 0,0 1.047,0 1.047,0 4.185,3.349 6.486,5.859 3.348,-1.046 4.185,6.069 8.37,8.37 2.72,-0.419 0,0 6.487,5.023 6.487,5.023 -2.302,1.046 -2.092,1.673 0,2.929 5.44,3.557 5.859,2.93 4.813,0 0.627,-5.65 -1.466,-9.417 -5.231,-11.718 -4.186,-2.72 -3.977,0.419 0.837,7.952 -1.884,-1.465 -3.349,-3.139 -4.395,-4.813 -0.837,-1.675 -2.721,-2.72 -4.812,-2.72 -9.835,0.209 -19.461,2.092 -28.668,3.347 -7.115,1.047 -12.555,0 -15.066,-1.674 -2.512,-2.092 -3.348,-2.929 -2.093,-5.231 0.837,-1.883 0,-3.348 -1.255,-3.976 0,0 -6.697,-13.391 -6.697,-13.391 0.838,1.465 1.884,2.093 2.721,3.347 2.721,4.395 4.603,7.952 5.231,7.743 -1.046,-2.93 -4.603,-9.416 -7.324,-16.741 5.232,9.207 9.835,17.16 11.091,16.113 -0.628,-3.557 -4.813,-10.462 -8.998,-17.577 1.256,1.255 1.674,1.674 2.511,2.72 1.674,2.093 3.138,3.976 3.976,3.558 -3.348,-6.905 -6.905,-11.3 -10.672,-12.556 -5.859,-2.092 -9.416,-2.93 -8.58,0.837 0,0 -2.928,-3.348 -2.928,-3.348 0,0 -3.139,-0.419 -3.139,-0.419 -1.047,0.419 0.418,2.093 2.511,5.651 0,0 -0.628,0.418 -0.628,0.418 0,0 -3.558,-5.65 -3.558,-5.65 -1.046,-0.628 -2.511,-1.255 -2.72,0 0,0 1.883,3.767 1.883,3.767 0,0 -3.975,-4.395 -3.975,-4.395 -1.883,-1.045 -3.976,-1.464 -3.976,-0.627 0,0 5.859,9.626 5.859,9.626 -1.046,-1.465 -2.72,-2.93 -4.185,-5.023 -2.302,-3.139 -4.185,-5.44 -6.905,-5.858 -2.72,-0.209 2.72,4.184 6.486,13.182 0,0 -8.997,-12.973 -8.997,-12.973 -0.837,-0.628 -4.395,-1.256 -4.604,0 0,0 10.463,15.066 10.463,15.066 C 27.412,11.51 22.599,6.906 19.879,1.675 19.252,1.047 18.624,1.047 17.996,1.047 c -0.419,-0.209 -0.837,0 -1.256,0.419 0,0 12.765,16.53 12.765,16.53 C 26.994,15.694 24.482,13.183 22.599,10.882 19.879,7.115 17.368,4.604 15.275,1.256 14.438,0.21 12.764,0.628 12.555,1.047 11.509,2.512 22.18,13.392 26.785,19.879 20.297,13.811 15.275,7.952 10.671,1.047 8.58,0 7.115,0 6.487,1.047 5.859,2.302 19.461,15.275 24.692,23.436 17.577,15.903 10.671,8.789 5.022,1.047 4.185,0 1.674,0 1.674,1.047 1.674,3.14 13.392,13.811 22.808,26.785 15.903,19.252 7.533,9.208 3.976,7.115 2.301,6.906 8.161,14.229 21.553,29.505 14.857,23.436 8.789,16.95 3.139,10.045 1.464,11.51 8.789,20.716 19.461,32.434 19.461,32.434 2.72,14.857 2.72,14.857 0.419,13.392 0,13.601 1.255,15.694 Z m 71.146,-3.975 c -1.465,-2.093 0.628,-3.139 2.302,-0.628 3.347,5.649 6.486,10.463 8.788,15.903 1.047,2.511 -0.418,3.139 -1.465,0.837 C 79.306,21.763 75.958,16.95 72.401,11.719 Z M 65.914,9.626 c -1.046,-1.674 1.674,-2.72 3.766,0.209 4.814,6.696 8.998,13.392 12.346,20.298 1.884,4.184 0,5.231 -1.883,1.465 C 76.168,23.436 70.936,16.322 65.914,9.626 Z"
                            id="path742"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(253.82088,90.39647)"
                            style="fill:#ffffff;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g748">
                            <path
                            d="m 34.108,8.3704 c -0.209,3.766 1.884,8.579 5.859,11.718 0,-0.628 -1.883,-3.558 -3.138,-6.069 -1.256,-2.93 -1.883,-5.231 -2.721,-5.649 z M 47.081,138.942 c -0.418,-6.068 -3.766,-10.463 -10.461,-15.484 0.209,1.463 4.393,5.021 6.905,9.416 2.511,4.185 2.511,5.231 3.556,6.068 z m -0.209,-6.277 c -0.836,-0.628 -1.464,-2.93 -3.557,-6.278 -2.092,-3.557 -5.65,-7.115 -5.859,-8.161 5.441,3.976 8.998,9.625 9.416,14.439 z m -0.836,-7.952 c -0.628,-0.627 -1.256,-2.302 -2.721,-4.813 -1.674,-2.721 -4.394,-5.44 -4.604,-6.277 4.395,2.929 7.116,7.114 7.325,11.09 z m -0.837,-8.161 c 0,-2.72 -2.093,-5.65 -5.023,-7.324 0.21,0.628 1.884,2.302 3.139,4.186 1.047,1.674 1.465,2.719 1.884,3.138 z M 42.06,1.8828 c -1.047,3.5576 0,8.5796 3.348,12.7646 0.209,-0.837 -1.046,-3.976 -1.883,-6.905 C 42.897,5.0214 42.688,2.3018 42.06,1.8828 Z M 5.022,136.64 c -3.139,0.209 -3.766,-0.419 -3.976,-3.557 1.465,1.464 2.721,2.092 3.976,3.557 z M 0.837,131.2 c 2.093,2.092 4.185,3.347 6.278,5.649 1.046,0.419 2.092,0.419 3.138,-0.418 -3.347,-3.557 -6.486,-5.65 -10.044,-9.207 0.209,1.255 0.419,2.72 0.628,3.976 z M 0,125.34 c 4.395,4.395 7.743,7.115 11.718,11.3 1.256,0.628 2.093,0.628 2.721,0 C 9.626,130.572 5.232,125.968 0.418,119.9 0,121.784 0,123.667 0,125.34 Z m 0.837,-6.696 c 5.441,6.277 10.672,11.719 16.322,18.624 1.673,0.837 2.929,0.837 3.557,0.209 -5.44,-7.114 -12.345,-14.856 -18.623,-22.599 -0.419,1.046 -0.628,1.883 -1.047,2.72 -0.209,0.419 -0.209,0.628 -0.209,1.046 z m 1.465,-5.23 c 7.114,8.16 13.602,15.484 21.134,24.481 1.047,0.628 2.093,0.628 2.93,0.21 -0.837,-0.837 -5.859,-6.905 -6.696,-7.952 -6.068,-7.532 -9.626,-11.509 -16.531,-19.879 -0.209,1.047 -0.419,2.093 -0.837,3.14 z m 1.256,-4.395 c 7.532,8.37 10.253,12.137 18.414,21.762 0.837,1.256 5.231,5.65 6.067,6.696 1.047,2.093 4.605,2.093 2.93,0.628 -1.465,-1.674 0,-0.419 -2.092,-3.139 -6.696,-8.161 -17.787,-21.552 -24.482,-29.922 -0.21,1.464 -0.628,2.719 -0.837,3.975 z m 1.046,-5.022 c 0.209,-1.255 0.418,-2.302 0.628,-3.348 6.277,7.951 18.623,22.809 25.737,31.597 3.767,4.603 3.558,4.394 5.651,6.696 0,1.046 -0.838,0.628 -2.302,0.209 -1.884,-2.092 -1.674,-1.883 -3.558,-4.395 -8.788,-10.252 -18.414,-22.18 -26.156,-30.759 z m 0.628,-4.3946 c 0.418,-1.464 0.418,-3.138 0.627,-4.602 6.696,10.4616 16.322,21.5516 26.994,31.3866 -0.837,-4.185 -14.23,-15.694 -22.391,-26.5746 -1.674,-2.93 -3.137,-5.65 -4.184,-7.952 0.209,-1.255 0.209,-2.302 0.419,-3.766 5.649,11.508 14.647,22.1796 27.202,33.0616 -1.465,-3.767 -14.439,-14.23 -21.344,-25.3186 -2.511,-4.395 -4.394,-7.953 -5.44,-10.882 0,-0.627 0,-1.255 0,-1.883 5.65,11.3 15.484,23.0166 27.203,33.0606 -1.256,-3.766 -14.648,-14.647 -21.135,-25.3186 -2.721,-4.603 -4.395,-8.161 -5.649,-11.09 0,-0.628 0,-1.465 0,-2.093 5.44,10.881 17.577,25.5286 28.667,35.1546 -1.255,-3.558 -16.322,-16.7396 -22.599,-26.9926 -2.721,-4.814 -4.604,-8.58 -5.65,-11.51 0,-0.836 0,-2.092 0,-2.929 4.603,10.881 16.322,25.319 27.83,34.7346 -1.255,-3.557 -15.694,-15.4836 -21.553,-25.3186 -3.139,-5.231 -4.813,-9.207 -5.858,-12.137 0,-1.045 0,-2.301 0.209,-3.138 3.975,11.09 15.066,24.482 26.784,33.48 -1.256,-3.138 -14.648,-14.02 -20.088,-23.226 -3.558,-6.069 -5.232,-10.044 -6.488,-12.974 0,-1.256 0,-2.302 0.21,-3.558 3.348,10.881 13.811,24.064 25.529,33.271 -0.837,-3.139 -13.393,-12.974 -18.833,-21.762 -3.976,-6.696 -5.232,-11.091 -6.487,-14.019 0,-0.21 0,-0.419 0,-0.628 0.209,-1.256 0.209,-2.721 0.419,-3.976 2.302,10.881 12.346,24.901 24.273,34.526 C 33.062,83.9094 21.553,74.0744 16.741,65.9144 12.137,58.1714 11.09,53.5684 9.626,51.0564 13.183,20.9244 25.948,3.1387 44.571,0 c 0,0 0.419,0.209 0.419,0.209 -0.628,3.5574 0,7.9514 2.091,12.1364 0.419,-0.837 -0.627,-5.022 -0.836,-8.579 0,-1.2556 0,-2.3015 0,-3.1394 0,0 1.674,0.4189 1.674,0.4189 0.209,4.1845 1.674,8.1615 3.557,8.5795 -1.465,-2.302 -1.674,-5.231 -1.674,-7.7426 0,0 2.302,0.628 2.302,0.628 0,4.3946 1.465,9.2066 3.558,9.4156 -1.884,-2.51 -1.884,-5.858 -1.675,-8.579 0,0 0.419,0.209 0.419,0.209 0.418,1.674 1.046,3.349 1.882,4.186 0.837,-1.046 0.419,-3.139 -0.208,-5.4406 2.301,-1.2559 5.022,-1.0469 7.951,0.8369 1.047,1.2557 0.628,1.8827 -0.837,1.8827 0,0 -1.465,0 -1.465,0 0,0 3.349,1.465 3.349,1.465 0.209,0.419 0.836,0.837 -1.047,1.047 0,0 -1.255,1.046 -1.255,1.046 0,0 4.393,0.418 4.393,0.418 1.465,0.628 1.256,1.047 0.838,1.674 0,0 -1.047,1.255 -1.047,1.255 3.767,0 7.743,0.837 12.556,3.349 -0.21,1.674 -2.093,1.465 -5.65,-0.419 0.837,2.093 4.185,2.302 3.975,3.558 -0.418,2.301 -5.44,0.209 -7.742,3.138 0,0 5.65,0.209 5.65,0.209 1.255,0.837 0.837,1.465 -1.046,1.465 2.929,3.558 5.231,4.604 6.068,2.093 0.837,-1.884 1.674,-1.884 2.512,0 3.556,2.093 4.184,2.302 2.091,2.72 0,0 -3.347,0.628 -3.347,0.628 0,0 3.975,0.628 3.975,0.628 1.046,0.418 1.046,1.255 0.419,1.882 -2.72,0.419 -2.929,0.838 2.092,1.047 2.093,1.046 2.93,2.092 2.093,2.93 -4.395,0.209 -4.185,0.837 1.046,1.255 1.256,0.628 1.675,1.465 1.465,2.093 -2.72,0.627 -2.302,1.255 1.046,1.255 0.418,0.627 0.837,1.046 0.209,1.674 -3.138,0.837 -2.72,1.255 1.256,1.255 0.209,1.465 2.511,1.256 3.348,3.139 3.348,-0.627 4.812,1.675 1.884,1.675 0,0 -0.21,0.628 -0.21,0.628 4.812,0.209 6.905,1.463 6.277,4.393 -0.418,1.256 -6.905,-2.511 -4.184,7.533 0,0 1.045,1.046 1.045,1.046 1.884,0.419 -0.208,-4.603 2.93,-4.184 0.418,0.209 0.837,1.673 0.209,4.184 -0.627,2.302 -2.092,3.349 -4.393,1.884 -2.093,-1.465 -3.349,-2.93 -3.14,-4.604 0,0 0.21,-3.138 0.21,-3.138 -2.302,0.209 -2.721,-1.256 -2.93,-3.558 0,-0.419 -0.837,-0.209 -0.628,-0.837 -3.766,-0.628 -5.44,0.628 -6.486,3.348 -0.21,1.047 -1.047,0.21 -1.465,-0.837 0.209,-0.627 -1.256,0.21 -2.093,-0.209 -0.628,0 -0.418,-1.465 -1.046,-1.256 -0.418,0 -0.418,0.628 -1.255,0.628 -0.628,-0.209 -0.418,-1.674 -1.674,-0.418 -0.837,0.837 -1.046,0.837 -1.256,-0.419 0.21,-1.046 1.046,-3.138 -1.255,-0.209 -0.837,0.418 -1.047,0.418 -1.465,-0.628 -1.256,-3.557 -2.093,-3.766 -2.512,-0.628 -0.626,1.256 -1.254,1.465 -1.254,-0.418 -1.256,-5.44 -1.465,-5.44 -1.046,-0.21 -0.21,2.302 -0.838,2.093 -2.093,-0.628 -1.465,-4.393 -2.093,0.419 -3.139,-1.673 -1.465,-2.511 -0.419,-6.069 -2.929,-7.115 0,0 1.464,7.325 1.464,7.325 0,1.046 -1.673,1.254 -1.883,-0.419 -0.837,-4.813 -3.976,-13.183 -3.348,-10.463 0,0 1.883,10.045 1.883,10.045 0.21,0.837 -2.092,0.418 -2.511,-0.838 0,0 -2.511,-12.555 -2.511,-12.555 -0.628,-3.557 -0.628,6.696 0.837,11.091 0,0.627 -1.674,0.627 -1.465,-0.21 0,-1.046 -1.882,-12.974 -2.51,-12.346 -1.465,1.465 2.51,13.393 -0.628,11.509 -0.419,-0.209 -1.465,-12.137 -1.884,-12.346 -0.209,0 0,11.509 -0.418,11.3 -3.349,-4.185 0.209,-15.484 -2.093,-16.112 -0.418,0 -1.465,13.81 -1.883,13.391 1.465,10.672 10.044,11.091 9.416,14.23 0,0 -6.068,-3.139 -6.068,-3.139 1.674,3.139 4.186,6.487 5.859,10.044 -1.883,0.628 0.209,3.139 1.464,4.395 -1.883,-0.21 -1.464,1.046 2.093,4.393 0.837,0.628 1.047,1.256 0.837,1.884 -4.394,-1.047 -4.813,-1.047 2.302,4.604 -4.394,-0.628 -4.604,-0.209 0.419,3.138 0.837,0.628 1.882,1.883 2.092,3.139 0.209,0.837 -0.628,0.418 -1.046,0.418 -0.837,-0.418 -2.092,-1.255 -2.511,-1.464 -1.256,-0.21 -0.418,1.464 5.44,5.858 1.465,1.256 2.093,2.302 1.046,2.721 -7.114,-4.394 -6.695,-3.348 1.047,3.348 1.883,2.93 2.093,4.184 1.465,4.603 -6.278,-5.231 -10.463,-8.579 0.418,2.3016 1.884,1.884 2.302,3.139 0.838,3.349 -10.882,-8.1606 -5.023,-2.721 2.3,4.812 0.419,0.418 0,1.046 -0.417,0.837 -10.463,-7.742 -10.881,-5.859 0.208,5.65 0.419,1.046 1.046,1.883 0.628,2.72 -0.209,0.418 -1.045,0 -1.464,-0.21 -7.534,-7.114 -6.906,-5.649 1.673,6.069 1.256,1.883 1.884,3.557 -0.209,2.511 -9.416,-10.671 -12.345,-12.973 -0.209,3.348 1.255,2.093 1.465,3.139 -0.21,2.511 -8.579,-11.718 -8.788,-10.253 -0.417,2.302 0.627,1.464 0.627,1.673 0,1.464 -7.743,-9.416 -10.044,-11.717 -0.419,2.093 1.255,2.511 1.046,2.93 -0.209,1.674 -9.416,-11.718 -9.625,-10.253 -0.419,1.884 0.838,1.464 1.255,2.302 -0.209,1.674 -10.881,-12.346 -10.881,-11.928 -0.418,1.464 0.209,3.348 0.209,3.139 -1.884,1.465 -1.046,-1.256 -1.046,-2.301 -2.093,-3.348 -6.695,-8.161 -7.532,-7.534 0.419,2.929 -0.837,0.837 -1.883,0.837 -3.139,-0.209 -6.905,-8.998 -7.533,-8.998 -2.092,-0.419 0,0 -3.767,-0.628 -3.767,-0.628 -0.627,-1.254 -1.255,-1.882 -2.093,-2.719 -6.486,-6.278 -8.788,-6.906 -2.302,1.255 0.21,0.21 -0.417,0.419 -0.209,0.628 0,0 -7.323,-1.255 -7.323,-1.255 -0.837,0 -1.884,-0.419 -2.72,-1.465 -3.139,-5.441 -5.022,-7.533 -10.253,-12.556 0.418,1.884 4.394,5.232 7.533,10.463 0.837,3.349 -2.93,1.883 -4.186,1.256 -2.301,-3.139 -3.138,-3.558 -6.486,-7.533 C 23.436,120.946 13.392,108.391 5.232,99.6024 Z m 25.319,-87.885 c 0.627,0.419 1.465,3.139 3.139,6.278 1.674,3.347 4.184,6.487 4.394,7.533 -5.022,-3.976 -7.742,-9.416 -7.533,-13.811 z m -3.138,3.348 c 0.836,0.837 1.464,3.558 3.347,7.324 2.093,3.767 5.441,7.533 5.441,8.788 -5.441,-4.603 -8.788,-10.881 -8.788,-16.112 z m -2.93,3.767 c 1.046,0.837 1.674,3.975 3.975,8.161 2.302,4.184 6.278,8.579 6.488,9.835 -6.488,-5.023 -10.463,-12.137 -10.463,-17.996 z m -2.511,3.766 c 0.209,6.488 4.813,14.439 11.927,20.088 -0.209,-1.465 -5.022,-6.277 -7.533,-11.09 -2.72,-4.603 -3.348,-7.952 -4.394,-8.998 z m -2.302,3.976 c 0.418,7.115 5.441,15.694 13.601,22.18 -0.418,-1.673 -5.858,-7.114 -8.788,-12.345 -2.93,-5.232 -3.767,-8.788 -4.813,-9.835 z m -2.092,3.976 c 0.627,7.743 6.277,17.159 15.066,24.064 -0.419,-1.883 -6.696,-7.533 -9.835,-13.393 -3.349,-5.649 -3.977,-9.416 -5.231,-10.671 z m -2.093,3.976 c 0.837,8.579 7.324,18.623 16.74,26.156 -0.419,-2.093 -7.323,-8.37 -11.091,-14.647 -3.347,-6.069 -4.184,-10.044 -5.649,-11.509 z m -1.674,3.976 c 0.837,9.207 7.951,20.087 18.205,28.249 -0.628,-2.302 -8.161,-8.998 -12.137,-15.695 -3.766,-6.695 -4.603,-10.881 -6.068,-12.554 z m -1.465,4.184 c 0.837,9.835 8.579,21.553 19.67,30.342 -0.838,-2.511 -8.998,-9.835 -13.393,-17.158 -4.184,-7.116 -4.812,-11.509 -6.277,-13.184 z m -1.674,3.977 c 1.465,10.462 10.253,23.854 21.972,33.27 -0.838,-2.72 -10.463,-11.3 -15.066,-19.042 -4.395,-7.742 -5.232,-12.137 -6.906,-14.228 z M 38.293,5.4404 c 0.628,0.209 1.465,2.511 2.302,4.813 0.837,2.092 2.093,4.394 2.093,5.022 -3.349,-2.721 -4.814,-6.696 -4.395,-9.835 z m 54.615,55.242 c -2.302,-2.302 -3.767,0.418 -0.628,3.348 2.72,2.511 5.65,1.675 4.812,0.837 0,0 -4.184,-4.185 -4.184,-4.185 z m -16.95,-25.947 c -0.419,0 0.209,2.511 0.418,3.767 0,1.255 0.419,2.092 1.256,3.138 0.837,1.046 1.256,1.256 1.047,0.837 -0.838,-2.302 -1.675,-4.394 -1.884,-6.277 0,-0.837 -0.419,-1.256 -0.837,-1.465 z m -2.929,-3.139 c -0.418,0 0.21,2.93 0.21,4.395 0,1.255 0.418,2.511 1.255,3.766 0.836,1.046 1.255,1.464 1.045,1.046 -0.836,-2.929 -1.673,-5.231 -1.673,-7.533 -0.209,-1.046 -0.627,-1.465 -0.837,-1.674 z m -3.139,-3.138 c -0.419,-0.21 0.209,3.138 0.209,4.812 0,1.674 0.21,3.139 1.256,4.604 0.837,1.255 1.256,1.673 1.046,1.046 -0.628,-3.139 -1.674,-5.859 -1.674,-8.58 0,-1.254 -0.209,-1.673 -0.837,-1.882 z m -2.93,-3.139 c -0.418,-0.419 0,3.557 0,5.44 -0.209,1.883 0.209,3.348 1.047,5.232 1.046,1.465 1.464,1.883 1.255,1.255 -0.628,-3.767 -1.465,-6.906 -1.465,-9.834 0,-1.466 -0.418,-1.884 -0.837,-2.093 z m -2.929,-3.349 c -0.418,-0.209 0,4.186 -0.209,6.278 -0.209,2.092 0.209,3.767 1.047,5.65 0.836,1.883 1.463,2.302 1.254,1.674 -0.627,-4.185 -1.464,-7.742 -1.254,-11.09 0,-1.465 -0.419,-2.093 -0.838,-2.512 z m -3.139,-3.138 c -0.418,-0.418 0,4.394 -0.209,6.905 -0.209,2.093 0,4.185 1.046,6.278 0.838,2.092 1.256,2.511 1.256,1.883 -0.628,-4.603 -1.465,-8.579 -1.256,-12.346 0.21,-1.673 -0.209,-2.301 -0.837,-2.72 z m -2.72,0.21 c -0.209,-0.419 -0.209,3.556 -0.419,5.44 -0.209,1.883 0,3.557 0.837,5.231 0.628,1.674 1.047,2.092 1.047,1.464 -0.419,-3.765 -1.047,-6.905 -0.838,-9.835 0.21,-1.463 -0.209,-1.882 -0.627,-2.3 z m -2.301,0 c -0.419,-0.21 -0.419,2.928 -0.628,4.393 -0.209,1.256 -0.209,2.511 0.419,3.977 0.626,1.464 0.835,1.674 0.835,1.255 -0.209,-2.93 -0.626,-5.441 -0.209,-7.743 0.209,-1.045 -0.208,-1.464 -0.417,-1.882 z"
                            id="path746"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(92.07028,33.27047)"
                            style="fill:#e2b700;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g752">
                            <path
                            d="m 1.8826,0.8369 c 6.279,7.7432 12.137,15.0665 18.833,23.8545 0,1.4649 -0.628,2.3018 -2.302,2.3018 C 11.5086,17.1582 6.2776,9.2071 1.0459,1.6739 0,0.21 1.2559,0 1.8826,0.8369 Z m 31.598,53.7774 c 0.628,1.6748 -0.628,2.5117 -1.884,0.8369 -2.72,-3.1387 -2.093,-7.1143 0.837,-10.6719 3.139,-3.7656 7.115,-3.7656 10.672,-1.0459 2.093,1.6739 1.465,1.8838 -1.046,1.8838 -7.115,0 -9.835,3.5567 -8.579,8.9971 z m 7.323,-3.3477 c -2.93,-1.0459 -3.766,0.209 -3.139,3.3477 41.851,59.0087 105.2534,145.2207 179.9574,246.9157 0,0 -0.419,1.465 -0.419,1.465 0,0 6.277,3.557 6.277,3.557 0,0 -2.092,-8.37 -2.092,-8.37 0,0 -1.256,0.837 -1.256,0.837 C 162.588,218.667 95.8366,124.086 40.8036,51.2666 Z"
                            id="path750"
                            inkscape:connector-curvature="0" />
                        </g>
                        <g
                            transform="translate(86.21098,85.58297)"
                            style="fill:#0092d0;fill-rule:evenodd;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-dasharray:none"
                            id="g756">
                            <path
                            d="m 148.149,14.4389 c 0,-1.465 5.442,-5.231 12.556,-10.0443 3.139,-2.5108 6.068,-3.3477 8.788,-3.3477 0.837,0.209 2.093,0.418 3.767,0.209 1.675,1.0459 1.047,1.8828 -0.837,2.3018 -0.837,-0.628 -1.674,-0.837 -2.511,-0.419 -1.884,0.419 -2.093,1.6748 -3.347,2.0928 0,0 -0.838,-1.2549 -0.838,-1.2549 -2.511,1.6738 -4.185,6.2773 -6.068,8.5793 0,0 -0.419,-2.302 -0.419,-2.302 -1.256,0.209 -2.092,2.93 -3.975,4.395 0.209,-1.675 -0.21,-2.512 -0.837,-2.512 -3.139,2.093 -5.441,3.139 -6.279,2.302 z M 65.0769,124.086 c 1.884,0 3.558,0.628 3.558,1.256 0,0.837 -1.674,1.465 -3.558,1.465 -2.092,0 -3.766,-0.628 -3.766,-1.465 0,-0.628 1.674,-1.256 3.766,-1.256 z m 14.23,-2.929 c 1.255,-1.883 2.719,-2.72 3.138,-2.301 0.418,0.627 -0.209,2.51 -1.255,4.184 -1.255,1.883 -2.72,2.93 -3.139,2.302 -0.418,-0.419 0.21,-2.302 1.256,-4.185 z m -4.604,2.511 c 0.837,-1.465 1.883,-2.302 2.302,-1.884 0.418,0.419 0,1.884 -0.837,3.349 -1.047,1.465 -2.093,2.302 -2.512,1.883 -0.418,-0.418 0,-1.883 1.047,-3.348 z m -4.185,0.837 c 0.837,-1.256 1.673,-1.884 1.883,-1.674 0.418,0.418 0,1.674 -0.628,2.929 -0.836,1.047 -1.673,1.675 -2.092,1.465 -0.209,-0.418 0,-1.674 0.837,-2.72 z M 0.8369,109.648 c 0,0 -0.8369,2.301 -0.8369,2.301 1.0468,0.21 1.8837,-1.255 2.9296,-1.882 0,0 -0.8369,3.766 -0.8369,3.766 1.2559,0.209 4.1856,-2.93 6.2772,-4.394 0,0 -1.4647,3.766 -1.4647,3.766 1.8837,0 3.1387,-2.72 4.6037,-4.184 0,0 -0.837,3.975 -0.837,3.975 2.302,-0.21 3.767,-3.138 5.65,-4.812 0,0 -0.419,3.765 -0.419,3.765 1.674,-0.209 2.93,-2.51 4.604,-3.975 0,0 0.837,2.72 0.837,2.72 1.465,0.209 2.302,-1.883 3.557,-2.72 0,0 0.628,2.511 0.628,2.511 0,0 3.139,-3.139 3.139,-3.139 0,0 0.628,2.721 0.628,2.721 0,0 3.557,-1.256 3.557,-1.256 0,0 1.045,1.465 1.045,1.465 0,0 2.93,-1.465 2.93,-1.465 0,0 -0.209,3.138 -0.209,3.138 0,0 3.976,-1.673 3.976,-1.673 0,0 0.419,2.092 0.419,2.092 0,0 2.929,-1.674 2.929,-1.674 0,0 0,2.72 0,2.72 0,0 3.348,-0.837 3.348,-0.837 0,0 0.209,2.511 0.209,2.511 0,0 5.023,-2.092 5.023,-2.092 0,0 -1.674,3.767 -1.674,3.767 0,0 4.393,-2.721 4.393,-2.721 0,0 -0.627,2.93 -0.627,2.93 0,0 4.813,-2.093 4.813,-2.093 0,0 -2.721,4.395 -2.721,4.395 3.139,0.209 4.186,-2.093 6.278,-3.139 0,0 -1.465,3.975 -1.465,3.975 3.139,-0.627 5.859,-3.138 8.58,-6.486 0.628,1.046 0.209,2.72 -2.093,6.278 3.348,-1.465 5.022,-3.767 6.277,-6.278 0,0 -1.046,4.394 -1.046,4.394 2.093,-0.209 4.185,-1.883 6.069,-4.813 0,0 -0.21,4.185 -0.21,4.185 1.675,-1.255 2.929,-2.929 3.766,-5.022 2.093,0.837 4.395,-0.419 5.232,-3.766 1.256,-3.139 0.419,-4.186 -2.302,-3.139 -8.998,6.277 -20.925,7.951 -38.502,2.721 -11.3,-3.14 -23.018,-3.558 -34.735,-3.977 -5.2317,-0.209 -9.6263,0.628 -11.719,5.441 z m 26.575,-44.9891 c 0.837,-1.465 2.511,-2.72 4.604,-3.975 0,0 0.419,1.883 0.419,1.883 0,0 5.021,-1.674 5.021,-1.674 0,0 0.419,1.674 0.419,1.674 0,0 5.44,-2.93 5.44,-2.93 -3.138,3.975 -3.766,5.65 -2.72,5.65 0.837,0 4.813,-4.603 6.068,-3.348 -2.72,4.185 -0.209,2.929 4.395,-0.837 1.256,0.419 -1.674,3.347 -1.256,3.766 0.419,0.419 2.093,-0.837 5.44,-3.138 0.837,-0.628 2.721,-2.721 3.139,-1.674 0.21,1.255 -1.046,1.883 -1.674,2.72 -3.348,3.975 -2.511,3.348 3.349,-0.418 0.837,-0.419 2.092,-1.465 2.929,-1.047 -3.976,5.231 -2.301,4.185 3.557,0.628 0.837,-0.418 1.884,-1.883 2.93,-0.837 -7.324,6.487 -6.069,7.324 3.347,2.72 -4.393,5.022 -3.347,5.231 3.558,0.837 0.628,-0.21 1.465,0 2.302,-0.419 -3.139,3.139 -3.558,5.441 -2.093,4.604 2.302,-1.046 5.231,-2.302 6.696,-1.883 -2.929,2.93 -2.72,4.185 1.046,3.558 1.256,0.418 0,1.883 -3.766,4.393 -0.627,1.047 -1.255,0 -1.883,-2.51 -0.418,1.464 -1.046,1.464 -1.674,0.627 0,0 -0.837,5.441 -0.837,5.441 0,0 -1.256,-0.209 -1.256,-0.209 0,0 0,-3.14 0,-3.14 -0.628,-0.837 -1.256,-0.837 -1.883,0 0,0 -1.047,4.186 -1.047,4.186 0,0 -1.882,-1.046 -1.882,-1.046 -0.628,1.464 -1.465,2.929 -2.93,3.975 -1.256,-1.673 -2.093,-1.255 -2.511,0.209 -0.838,0.209 -1.256,-0.418 -2.093,-0.209 -0.627,1.883 -1.255,2.302 -2.301,1.046 -1.674,1.046 -3.139,2.093 -4.813,3.767 0,0 -0.837,-2.093 -0.837,-2.093 -1.465,2.093 -2.72,3.349 -3.557,2.93 0,0 -1.465,-1.465 -1.465,-1.465 0,0 -2.302,3.767 -2.302,3.767 0,0 -3.767,1.046 -3.767,1.046 0,1.046 1.465,1.046 3.976,0.627 3.349,-0.418 9.835,-1.882 14.02,-3.138 4.185,-1.256 8.789,-1.883 13.811,-3.976 3.976,-1.883 8.579,-5.231 13.183,-7.533 1.046,0.837 0.209,2.93 -8.579,9.835 0,0 -4.186,-1.256 -4.186,-1.256 0,0 2.302,3.139 2.302,3.139 -1.046,1.047 -1.883,1.465 -2.93,1.256 0,0 -3.766,-1.883 -3.766,-1.883 0,0 1.255,3.975 1.255,3.975 -2.72,0 -3.975,-3.348 -6.486,-1.883 0,0 1.046,3.139 1.046,3.139 0,0 -5.65,-1.675 -5.65,-1.675 0,0 1.046,3.767 1.046,3.767 0,0 -4.812,-2.092 -4.812,-2.092 0,0 -1.047,2.092 -1.047,2.092 -1.465,0 -2.302,0.419 -2.511,1.046 11.091,1.884 23.227,-2.092 35.783,-8.16 0.628,-0.209 0.836,0.209 0.836,1.255 -1.046,5.022 -4.603,9.417 -10.253,13.3921 0,0 1.674,-6.6961 1.674,-6.6961 -3.766,1.674 -7.952,9.8351 -11.09,10.8811 0,0 3.347,-8.7881 3.347,-8.7881 0,0 -9.834,8.1611 -9.834,8.1611 -0.838,-1.047 0.418,-3.349 2.511,-6.278 -2.93,0 -7.952,6.905 -8.789,6.487 -2.092,-1.046 1.675,-3.139 2.512,-4.604 -2.721,-0.21 -4.604,2.302 -6.906,3.558 -0.21,-1.256 1.255,-2.721 3.767,-5.022 0,0 -8.161,3.766 -8.161,3.766 0,-1.465 3.139,-2.721 3.766,-4.8121 -3.766,2.5101 -7.114,4.1841 -7.951,3.9751 0,0 2.511,-3.9751 2.511,-3.9751 0,0 -7.115,3.7661 -7.115,3.7661 0,0 4.394,-4.6041 4.394,-4.6041 0,0 -7.532,3.5571 -7.532,3.5571 0,0 2.092,-3.9751 2.092,-3.9751 0,0 -5.441,3.5561 -5.441,3.5561 0,0 2.302,-4.3931 2.302,-4.3931 -2.721,2.3021 -5.231,3.7661 -6.696,3.7661 1.465,-1.8831 2.512,-3.3481 2.302,-4.3941 -2.511,2.093 -5.022,3.5581 -6.069,3.5581 0,0 1.047,-3.5581 1.047,-3.5581 -2.093,2.093 -4.394,3.5581 -6.905,4.3941 0,0 2.511,-4.1851 2.511,-4.1851 0.418,-0.628 0.209,-1.464 -0.628,-0.837 0,0 -5.65,4.6031 -5.65,4.6031 1.255,-2.3011 1.883,-3.7661 1.046,-4.3941 0,0 -3.975,2.093 -3.975,2.093 0,0 0.419,-2.302 0.419,-2.302 0,0 -4.604,5.0221 -4.604,5.0221 -0.628,-0.209 0.209,-1.464 0.837,-3.7661 0,0 -4.8135,3.1391 -4.8135,3.1391 2.5115,-5.0221 6.6965,-8.3711 12.3455,-10.0441 6.696,-2.093 11.928,-2.302 16.112,-2.93 7.325,-1.046 11.928,-1.674 17.788,-4.395 2.719,-1.046 5.858,-2.301 9.207,-5.021 1.673,-1.256 1.046,-1.675 -0.837,-1.465 0,0 -7.533,0.418 -7.533,0.418 0,0 0,-3.348 0,-3.348 0,0 -2.93,3.976 -2.93,3.976 0,0 -0.628,-3.976 -0.628,-3.976 0,0 -2.511,6.906 -2.511,6.906 0,0 -1.046,-7.952 -1.046,-7.952 0,0 -1.884,8.58 -1.884,8.58 0,0 -1.045,-8.371 -1.045,-8.371 0,0 -3.139,9.626 -3.139,9.626 0,0 -0.838,-10.045 -0.838,-10.045 0,0 -1.883,10.254 -1.883,10.254 0,0 -1.883,-10.463 -1.883,-10.463 0,0 -1.255,10.463 -1.255,10.463 0,0 -2.093,-9.835 -2.093,-9.835 0,0 -0.837,9.416 -0.837,9.416 0,0 -2.72,-9.625 -2.72,-9.625 0,0 -0.21,10.044 -0.21,10.044 0,0 -3.139,-9.626 -3.139,-9.626 0,0 -0.627,8.58 -0.627,8.58 0,0 -2.092,-8.371 -2.092,-8.371 0,0 -0.837,7.534 -0.837,7.534 0,0 -1.675,-6.906 -1.675,-6.906 0,0 -1.046,7.534 -1.046,7.534 -3.139,-5.859 -4.394,-10.672 -2.302,-13.392 3.139,-3.558 7.324,-4.395 11.509,-3.767 z m 23.855,-22.808 c 0.628,0 1.256,0.837 1.674,2.301 0.418,1.465 0.418,2.721 0.209,2.721 -0.627,0.209 -1.255,-0.838 -1.674,-2.302 -0.418,-1.255 -0.418,-2.511 -0.209,-2.72 z m -21.344,-2.511 c 3.139,-4.813 5.65,-6.278 7.324,-2.511 2.093,-6.696 4.395,-7.324 7.323,-1.465 3.976,0 4.814,6.068 4.186,15.066 0,0 -3.767,-10.044 -3.767,-10.044 0,0 0,6.487 0,6.487 -2.51,-11.091 -18.623,-4.603 -15.066,-7.533 z M 99.3949,2.9297 c 4.6031,0.419 9.2071,2.0928 13.6011,4.6035 0.209,0.6277 0.418,1.0467 -0.419,0.6277 -1.674,-1.2546 -3.138,-1.8825 -4.394,-1.8825 0.419,1.8825 0.21,2.7195 -0.627,2.5105 -1.675,-2.9295 -3.14,-3.3484 -4.395,-2.7205 -0.419,0.21 -0.628,0.4189 -1.047,0.21 -1.255,-2.7207 -1.882,-2.7207 -2.5101,-1.6739 -1.255,-1.0468 -1.255,-1.6748 -0.209,-1.6748 z m -23.646,1.2559 c -1.046,0.6279 -1.046,1.0459 -0.209,1.2549 1.465,-1.2549 2.93,-1.4639 4.813,0.4189 0,-2.7207 1.045,-2.5107 3.348,0.8369 -0.838,-3.3476 0,-4.1845 3.557,0.8369 0,-2.7197 0.209,-3.1386 2.511,1.4647 0.628,0.837 1.255,0.837 1.464,0.419 -1.254,-4.8124 -0.626,-4.6034 2.093,0.418 0.837,1.047 1.256,1.047 1.256,0.419 -0.21,-3.3476 1.255,-2.7207 4.394,1.883 0.837,1.047 1.2561,1.465 1.4641,0.419 -0.6271,-2.721 0.628,-2.512 3.349,0.837 2.092,-0.209 5.022,1.465 8.788,4.812 0.419,0.628 0.837,0.837 1.256,0.628 -2.093,-3.766 0.418,-2.302 3.767,0 2.091,-1.046 2.301,-1.674 1.046,-2.093 -7.115,-2.51 -12.974,-5.23 -17.159,-8.37 C 96.6739,4.6045 94.5819,5.6504 88.9319,2.0928 84.1189,0 79.7249,1.0469 75.7489,4.1856 Z m -10.253,6.6963 c -2.511,0.837 -2.511,1.883 -0.209,2.302 1.046,0.209 1.883,0.209 2.72,0 1.465,-0.21 2.093,0 2.721,1.255 1.045,2.092 2.301,2.929 3.347,2.301 0.628,-0.628 -3.975,-3.975 -1.674,-3.975 0,0 1.255,0 1.255,0 3.558,3.347 6.906,5.231 6.697,4.603 0,0 -1.465,-3.766 -1.465,-3.766 -0.418,-1.255 1.465,-0.628 2.302,0.209 0,0 4.813,4.185 4.813,4.185 0.627,0.837 0,-0.628 -0.838,-3.347 -0.418,-0.838 0.838,-0.838 1.674,0 2.93,2.928 6.487,7.951 6.487,6.067 0,0 0,-1.883 0,-1.883 0,-0.837 1.046,-0.837 1.674,0 1.674,2.093 3.976,3.976 3.767,3.139 0,0 -0.418,-1.674 -0.418,-1.674 -0.21,-1.046 0.627,-1.046 1.8831,0 0,0 5.022,4.185 5.022,4.185 1.046,0.836 1.883,0.419 1.464,-0.209 0,0 -0.837,-1.256 -0.837,-1.256 -0.627,-1.046 -0.209,-1.255 1.047,-0.418 0,0 4.394,3.138 4.394,3.138 0.836,0.628 0.836,-0.209 -0.419,-2.092 0,0 2.511,0 2.511,0 0.419,1.464 1.465,1.883 3.976,2.929 0.628,0.419 0.838,-0.419 2.092,-0.837 0,0 6.069,-1.882 6.069,-1.882 1.883,-0.628 1.674,-1.884 0,-1.465 -8.788,2.302 -17.995,-2.093 -27.8301,-7.533 -12.974,-6.9057 -23.437,-6.9057 -32.225,-3.976 z m 86.2111,4.812 c 0.419,0.418 0,1.046 -0.628,1.883 -0.628,0.628 -1.464,0.837 -1.883,0.628 -0.209,-0.418 0,-1.255 0.628,-1.883 0.837,-0.628 1.465,-0.837 1.883,-0.628 z m 6.696,1.674 c -1.464,-1.046 -2.092,1.465 0.418,0.628 0,0 3.558,-3.138 3.558,-3.138 1.674,-2.93 0.628,0.836 1.674,0.627 1.256,-0.418 3.138,-4.185 2.72,-5.65 0,0 2.93,-1.465 2.93,-1.465 1.674,-1.4636 1.255,-2.0915 -1.047,-1.8826 -2.719,2.0926 -5.44,4.3946 -7.742,7.5336 0,0 -2.511,3.347 -2.511,3.347 z"
                            id="path754"
                            inkscape:connector-curvature="0" />
                        </g>
                        </svg>
                        </div>
                <div class="flex justify-center"><p>* использовано в учебных целях. Все авторские и иные права принадлежат правообладателям!</p></div>

                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <a href="https://laravel.com/docs" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Documentation</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer or have prior experience with Laravel, we recommend reading our documentation from beginning to end.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laracasts.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laracasts</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laravel-news.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laravel News</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Forge</a>, <a href="https://vapor.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Vapor</a>, <a href="https://nova.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Nova</a>, and <a href="https://envoyer.io" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Telescope</a>, and more.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm sm:text-left">
                        &nbsp;
                    </div>

                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
