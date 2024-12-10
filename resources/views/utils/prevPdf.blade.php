<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura</title>
    <style>
        *,:before,:after{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}:before,:after{--tw-content: ""}html,:host{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;-o-tab-size:4;tab-size:4;font-family:ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji",Segoe UI Symbol,"Noto Color Emoji";font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,samp,pre{font-family:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;letter-spacing:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}button,input:where([type=button]),input:where([type=reset]),input:where([type=submit]){-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dl,dd,h1,h2,h3,h4,h5,h6,hr,figure,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}ol,ul,menu{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::-moz-placeholder,textarea::-moz-placeholder{opacity:1;color:#9ca3af}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}button,[role=button]{cursor:pointer}:disabled{cursor:default}img,svg,video,canvas,audio,iframe,embed,object{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*,:before,:after{--tw-border-spacing-x: 0;--tw-border-spacing-y: 0;--tw-translate-x: 0;--tw-translate-y: 0;--tw-rotate: 0;--tw-skew-x: 0;--tw-skew-y: 0;--tw-scale-x: 1;--tw-scale-y: 1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness: proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width: 0px;--tw-ring-offset-color: #fff;--tw-ring-color: rgb(59 130 246 / .5);--tw-ring-offset-shadow: 0 0 #0000;--tw-ring-shadow: 0 0 #0000;--tw-shadow: 0 0 #0000;--tw-shadow-colored: 0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }::backdrop{--tw-border-spacing-x: 0;--tw-border-spacing-y: 0;--tw-translate-x: 0;--tw-translate-y: 0;--tw-rotate: 0;--tw-skew-x: 0;--tw-skew-y: 0;--tw-scale-x: 1;--tw-scale-y: 1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness: proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width: 0px;--tw-ring-offset-color: #fff;--tw-ring-color: rgb(59 130 246 / .5);--tw-ring-offset-shadow: 0 0 #0000;--tw-ring-shadow: 0 0 #0000;--tw-shadow: 0 0 #0000;--tw-shadow-colored: 0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }.container{width:100%}@media (min-width: 640px){.container{max-width:640px}}@media (min-width: 768px){.container{max-width:768px}}@media (min-width: 1024px){.container{max-width:1024px}}@media (min-width: 1280px){.container{max-width:1280px}}@media (min-width: 1536px){.container{max-width:1536px}}.collapse{visibility:collapse}.relative{position:relative}.z-10{z-index:10}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.mx-auto{margin-left:auto;margin-right:auto}.-mt-px{margin-top:-1px}.ml-4{margin-left:1rem}.mr-1{margin-right:.25rem}.mt-16{margin-top:4rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.inline-flex{display:inline-flex}.table{display:table}.grid{display:grid}.hidden{display:none}.h-16{height:4rem}.h-5{height:1.25rem}.h-6{height:1.5rem}.h-7{height:1.75rem}.h-\[155px\]{height:155px}.h-\[78px\]{height:78px}.h-\[90px\]{height:90px}.min-h-screen{min-height:100vh}.w-16{width:4rem}.w-5{width:1.25rem}.w-6{width:1.5rem}.w-7{width:1.75rem}.w-\[102\.5px\]{width:102.5px}.w-\[1033px\]{width:1033px}.w-\[1161px\]{width:1161px}.w-\[130px\]{width:130px}.w-\[134\.5px\]{width:134.5px}.w-\[137px\]{width:137px}.w-\[180px\]{width:180px}.w-\[185px\]{width:185px}.w-\[212px\]{width:212px}.w-\[214\.25px\]{width:214.25px}.w-\[22px\]{width:22px}.w-\[241px\]{width:241px}.w-\[246\.25px\]{width:246.25px}.w-\[254px\]{width:254px}.w-\[273px\]{width:273px}.w-\[280px\]{width:280px}.w-\[285px\]{width:285px}.w-\[352px\]{width:352px}.w-\[484px\]{width:484px}.w-\[516px\]{width:516px}.w-\[828px\]{width:828px}.w-auto{width:auto}.w-full{width:100%}.max-w-7xl{max-width:80rem}.flex-shrink-0,.shrink-0{flex-shrink:0}.flex-grow{flex-grow:1}.flex-grow-0{flex-grow:0}.border-collapse{border-collapse:collapse}.scale-100{--tw-scale-x: 1;--tw-scale-y: 1;transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.resize{resize:both}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.justify-start{justify-content:flex-start}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.justify-between{justify-content:space-between}.gap-0\.5{gap:.125rem}.gap-2{gap:.5rem}.gap-2\.5{gap:.625rem}.gap-3{gap:.75rem}.gap-4{gap:1rem}.gap-5{gap:1.25rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.self-stretch{align-self:stretch}.overflow-hidden{overflow:hidden}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:.5rem}.border{border-width:1px}.border-\[\#d9d9d9\]{--tw-border-opacity: 1;border-color:rgb(217 217 217 / var(--tw-border-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity: 1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-red-500{--tw-bg-opacity: 1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.bg-red-800{--tw-bg-opacity: 1;background-color:rgb(153 27 27 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.from-gray-700{--tw-gradient-from: #374151 var(--tw-gradient-from-position);--tw-gradient-to: rgb(55 65 81 / 0) var(--tw-gradient-to-position);--tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)}.from-gray-700\/50{--tw-gradient-from: rgb(55 65 81 / .5) var(--tw-gradient-from-position);--tw-gradient-to: rgb(55 65 81 / 0) var(--tw-gradient-to-position);--tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops: var(--tw-gradient-from), transparent var(--tw-gradient-via-position), var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-gray-400{stroke:#9ca3af}.stroke-gray-600{stroke:#4b5563}.stroke-red-500{stroke:#ef4444}.object-cover{-o-object-fit:cover;object-fit:cover}.p-6{padding:1.5rem}.px-0{padding-left:0;padding-right:0}.px-16{padding-left:4rem;padding-right:4rem}.px-4{padding-left:1rem;padding-right:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-3{padding-top:.75rem;padding-bottom:.75rem}.py-8{padding-top:2rem;padding-bottom:2rem}.text-left{text-align:left}.text-center{text-align:center}.text-right{text-align:right}.text-2xl{font-size:1.5rem;line-height:2rem}.text-\[40px\]{font-size:40px}.text-base{font-size:1rem;line-height:1.5rem}.text-sm{font-size:.875rem;line-height:1.25rem}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-bold{font-weight:700}.font-semibold{font-weight:600}.uppercase{text-transform:uppercase}.leading-relaxed{line-height:1.625}.text-\[\#1e1e1e\]{--tw-text-opacity: 1;color:rgb(30 30 30 / var(--tw-text-opacity))}.text-\[\#303030\]{--tw-text-opacity: 1;color:rgb(48 48 48 / var(--tw-text-opacity))}.text-\[\#5a5a5a\]{--tw-text-opacity: 1;color:rgb(90 90 90 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.opacity-50{opacity:.5}.opacity-80{opacity:.8}.shadow-2xl{--tw-shadow: 0 25px 50px -12px rgb(0 0 0 / .25);--tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.shadow-gray-500{--tw-shadow-color: #6b7280;--tw-shadow: var(--tw-shadow-colored)}.shadow-gray-500\/20{--tw-shadow-color: rgb(107 114 128 / .2);--tw-shadow: var(--tw-shadow-colored)}.ring-white{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity))}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:.15s}.selection\:bg-red-500 *::-moz-selection{--tw-bg-opacity: 1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:bg-red-500 *::selection{--tw-bg-opacity: 1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::-moz-selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:text-white *::selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::-moz-selection{--tw-bg-opacity: 1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity: 1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::-moz-selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:text-white::selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x: 1.01;--tw-scale-y: 1.01;transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:right-0{right:0}.sm\:top-0{top:0}.sm\:ml-0{margin-left:0}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:pt-1\.5{padding-top:.375rem}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}@media (prefers-color-scheme: dark){.dark\:bg-gray-800\/50{background-color:#1f293780}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-red-800\/20{background-color:#991b1b33}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left,var(--tw-gradient-stops))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow: 0 0 #0000;--tw-shadow-colored: 0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset: inset}.dark\:ring-white\/5{--tw-ring-color: rgb(255 255 255 / .05)}.dark\:hover\:text-white:hover{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}}
    </style>
</head>
<body>
    <div class="flex flex-col justify-start items-start w-[1161px] gap-6 px-16 py-8 bg-white">
        <div class="flex flex-col justify-start items-start self-stretch flex-grow-0 flex-shrink-0 gap-6">
          <div
            class="flex flex-col justify-start items-start self-stretch flex-grow-0 flex-shrink-0 gap-3"
          >
            <div class="flex justify-start items-center self-stretch flex-grow-0 flex-shrink-0 h-5 gap-5">
              <div
                class="flex flex-col justify-start items-start flex-grow-0 flex-shrink-0 relative gap-2"
              >
                <p
                  class="self-stretch flex-grow-0 flex-shrink-0 w-[185px] text-sm text-left text-[#5a5a5a]"
                >
                  31 de Agosto a las 20:53pm
                </p>
              </div>
              <div class="flex flex-col justify-start items-start flex-grow relative gap-2">
                <p
                  class="self-stretch flex-grow-0 flex-shrink-0 w-[828px] text-sm text-right text-[#5a5a5a]"
                >
                  <span
                    class="self-stretch flex-grow-0 flex-shrink-0 w-[828px] text-sm text-right text-[#5a5a5a]"
                    >Esta formula se creó gracias a </span
                  ><span
                    class="self-stretch flex-grow-0 flex-shrink-0 w-[828px] text-sm font-bold text-right text-[#5a5a5a]"
                    >PAO</span
                  ><span
                    class="self-stretch flex-grow-0 flex-shrink-0 w-[828px] text-sm text-right text-[#5a5a5a]"
                    >, software óptico administrativo, visite isersolutions.com</span
                  >
                </p>
              </div>
            </div>
            <div
              class="flex justify-between items-center self-stretch flex-grow-0 flex-shrink-0 h-[90px]"
            >
              <div class="flex justify-start items-center flex-grow-0 flex-shrink-0 relative gap-3">
                <img
                  src="https://i.pinimg.com/236x/8a/33/86/8a33868eb7147fa29d97fde05d70bd5c.jpg"
                  class="flex-grow-0 flex-shrink-0 w-[137px] h-[78px] object-cover"
                /><svg
                  width="1"
                  height="78"
                  viewBox="0 0 1 78"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  class="self-stretch flex-grow-0 flex-shrink-0 opacity-50"
                  preserveAspectRatio="none"
                >
                  <line opacity="0.5" x1="0.5" x2="0.5" y2="78" stroke="black"></line>
                </svg>
                <div
                  class="flex flex-col justify-start items-start flex-grow-0 flex-shrink-0 relative gap-2"
                >
                  <p
                    class="self-stretch flex-grow-0 flex-shrink-0 w-[280px] text-[40px] font-bold text-left text-[#1e1e1e]"
                  >
                    Formula óptica
                  </p>
                  <p
                    class="self-stretch flex-grow-0 flex-shrink-0 w-[280px] text-base text-left text-[#303030]"
                  >
                    <span
                      class="self-stretch flex-grow-0 flex-shrink-0 w-[280px] text-base text-left text-[#303030]"
                      >CODIGO: </span
                    ><span
                      class="self-stretch uppercase flex-grow-0 flex-shrink-0 w-[280px] text-base font-bold text-left text-[#303030]"
                      >{{ $record->codigo }}</span
                    >
                  </p>
                </div>
              </div>
              <div
                class="flex flex-col justify-start items-start flex-grow-0 flex-shrink-0 relative gap-2"
              >
                <p
                  class="self-stretch flex-grow-0 flex-shrink-0 w-[352px] text-base text-left text-[#1e1e1e]"
                >
                  <span
                    class="self-stretch flex-grow-0 flex-shrink-0 w-[352px] text-base text-left text-[#1e1e1e]"
                    >ASOCIADO A NO. DOCUMENTO: </span
                  ><span
                    class="self-stretch flex-grow-0 flex-shrink-0 w-[352px] text-base font-bold text-left text-[#1e1e1e]"
                    >{{ $record->cliente->no_doc }}</span
                  >
                </p>
              </div>
            </div>
            <div
              class="flex flex-col justify-start items-start self-stretch flex-grow-0 flex-shrink-0 gap-3"
            >
              <div class="flex justify-start items-start self-stretch flex-grow-0 flex-shrink-0 gap-4">
                <div class="flex flex-col justify-start items-start flex-grow relative gap-2">
                  <p
                    class="self-stretch flex-grow-0 flex-shrink-0 w-[516px] text-base text-left text-[#1e1e1e]"
                  >
                    Nombre completo del paciente
                  </p>
                  <div
                    class="flex justify-start items-center self-stretch flex-grow-0 flex-shrink-0 relative overflow-hidden px-4 py-3 rounded-lg bg-white border border-[#d9d9d9]"
                  >
                    <p class="flex-grow uppercase w-[484px] text-base text-left text-[#1e1e1e]">
                        {{ $record->cliente->nombre_completo }}
                    </p>
                  </div>
                </div>
                <div
                  class="flex flex-col justify-start items-start flex-grow-0 flex-shrink-0 w-[212px] relative gap-2"
                >
                  <p
                    class="self-stretch flex-grow-0 flex-shrink-0 w-[212px] text-base text-left text-[#1e1e1e]"
                  >
                    Tipo documento
                  </p>
                  <div
                    class="flex justify-start items-center self-stretch flex-grow-0 flex-shrink-0 relative overflow-hidden px-4 py-3 rounded-lg bg-white border border-[#d9d9d9]"
                  >
                    <p class="flex-grow w-[180px] text-base text-left text-[#1e1e1e]">{{ $record->cliente->tipo_doc }}</p>
                  </div>
                </div>
                <div
                  class="flex flex-col justify-start items-start flex-grow-0 flex-shrink-0 w-[273px] relative gap-2"
                >
                  <p
                    class="self-stretch flex-grow-0 flex-shrink-0 w-[273px] text-base text-left text-[#1e1e1e]"
                  >
                    Número de documento
                  </p>
                  <div
                    class="flex justify-start items-center self-stretch flex-grow-0 flex-shrink-0 relative overflow-hidden px-4 py-3 rounded-lg bg-white border border-[#d9d9d9]"
                  >
                    <p class="flex-grow w-[241px] text-base text-left text-[#1e1e1e]">{{ $record->cliente->no_doc }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="flex flex-col justify-start items-start self-stretch flex-grow-0 flex-shrink-0 gap-3"
          >
            <div
              class="flex flex-col justify-start items-start self-stretch flex-grow-0 flex-shrink-0 gap-4"
            >
              <div class="flex justify-start items-start self-stretch flex-grow-0 flex-shrink-0 gap-4">
                <div class="flex flex-col justify-start items-start flex-grow relative gap-2">
                  <p
                    class="self-stretch flex-grow-0 flex-shrink-0 w-[516px] text-base text-left text-[#1e1e1e]"
                  >
                    Nombre completo del especialista
                  </p>
                  <div
                    class="flex justify-start items-center self-stretch flex-grow-0 flex-shrink-0 relative overflow-hidden px-4 py-3 rounded-lg bg-white border border-[#d9d9d9]"
                  >
                    <p class="flex-grow w-[484px] text-base text-left text-[#1e1e1e]">
                        {{ $record->doctor->nombre_completo }}
                    </p>
                  </div>
                </div>
                <div
                  class="flex flex-col justify-start items-start flex-grow-0 flex-shrink-0 w-[212px] relative gap-2"
                >
                  <p
                    class="self-stretch flex-grow-0 flex-shrink-0 w-[212px] text-base text-left text-[#1e1e1e]"
                  >
                    Tipo documento
                  </p>
                  <div
                    class="flex justify-start items-center self-stretch flex-grow-0 flex-shrink-0 relative overflow-hidden px-4 py-3 rounded-lg bg-white border border-[#d9d9d9]"
                  >
                    <p class="flex-grow w-[180px] text-base text-left text-[#1e1e1e]">{{ $record->doctor->tipo_doc }}</p>
                  </div>
                </div>
                <div
                  class="flex flex-col justify-start items-start flex-grow-0 flex-shrink-0 w-[273px] relative gap-2"
                >
                  <p
                    class="self-stretch flex-grow-0 flex-shrink-0 w-[273px] text-base text-left text-[#1e1e1e]"
                  >
                    Número de documento
                  </p>
                  <div
                    class="flex justify-start items-center self-stretch flex-grow-0 flex-shrink-0 relative overflow-hidden px-4 py-3 rounded-lg bg-white border border-[#d9d9d9]"
                  >
                    <p class="flex-grow w-[241px] text-base text-left text-[#1e1e1e]">{{ $record->doctor->no_doc }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="flex flex-col justify-start items-start self-stretch flex-grow-0 flex-shrink-0 gap-3"
          >
            <div
              class="flex flex-col justify-start items-start self-stretch flex-grow-0 flex-shrink-0 gap-3"
            >
              <div
                class="flex flex-col justify-center items-start self-stretch flex-grow-0 flex-shrink-0 gap-4"
              >
                <div
                  class="flex justify-start items-center self-stretch flex-grow-0 flex-shrink-0 relative gap-4"
                >
                  <p class="flex-grow-0 flex-shrink-0 text-xl font-bold text-left text-[#1e1e1e]">
                    Ojo izquierdo
                  </p>
                  <div class="flex flex-col justify-start items-start flex-grow relative gap-2">
                    <p
                      class="self-stretch flex-grow-0 flex-shrink-0 w-[134.5px] text-base text-left text-[#1e1e1e]"
                    >
                      Esfera
                    </p>
                    <div
                      class="flex justify-start items-center self-stretch flex-grow-0 flex-shrink-0 relative overflow-hidden px-4 py-3 rounded-lg bg-white border border-[#d9d9d9]"
                    >
                      <p class="flex-grow w-[102.5px] text-base text-left text-[#1e1e1e]">{{ $record->ojo_izquierdo_esfera }}</p>
                    </div>
                  </div>
                  <div class="flex flex-col justify-start items-start flex-grow relative gap-2">
                    <p
                      class="self-stretch flex-grow-0 flex-shrink-0 w-[134.5px] text-base text-left text-[#1e1e1e]"
                    >
                      CIlindro
                    </p>
                    <div
                      class="flex justify-start items-center self-stretch flex-grow-0 flex-shrink-0 relative overflow-hidden px-4 py-3 rounded-lg bg-white border border-[#d9d9d9]"
                    >
                      <p class="flex-grow w-[102.5px] text-base text-left text-[#1e1e1e]">{{ $record->ojo_izquierdo_cilindro }}</p>
                    </div>
                  </div>
                  <div class="flex flex-col justify-start items-start flex-grow relative gap-2">
                    <p
                      class="self-stretch flex-grow-0 flex-shrink-0 w-[134.5px] text-base text-left text-[#1e1e1e]"
                    >
                      Eje
                    </p>
                    <div
                      class="flex justify-start items-center self-stretch flex-grow-0 flex-shrink-0 relative overflow-hidden px-4 py-3 rounded-lg bg-white border border-[#d9d9d9]"
                    >
                      <p class="flex-grow w-[102.5px] text-base text-left text-[#1e1e1e]">{{ $record->ojo_izquierdo_eje }}</p>
                    </div>
                  </div>
                  <div class="flex flex-col justify-start items-start flex-grow relative gap-2">
                    <p
                      class="self-stretch flex-grow-0 flex-shrink-0 w-[134.5px] text-base text-left text-[#1e1e1e]"
                    >
                      A.V
                    </p>
                    <div
                      class="flex justify-start items-center self-stretch flex-grow-0 flex-shrink-0 relative overflow-hidden px-4 py-3 rounded-lg bg-white border border-[#d9d9d9]"
                    >
                      <p class="flex-grow w-[102.5px] text-base text-left text-[#1e1e1e]">{{ $record->ojo_izquierdo_av }}</p>
                    </div>
                  </div>
                  <div class="flex flex-col justify-start items-start flex-grow relative gap-2">
                    <p
                      class="self-stretch flex-grow-0 flex-shrink-0 w-[134.5px] text-base text-left text-[#1e1e1e]"
                    >
                      A.D.D
                    </p>
                    <div
                      class="flex justify-start items-center self-stretch flex-grow-0 flex-shrink-0 relative overflow-hidden px-4 py-3 rounded-lg bg-white border border-[#d9d9d9]"
                    >
                      <p class="flex-grow w-[102.5px] text-base text-left text-[#1e1e1e]">{{ $record->ojo_izquierdo_add }}</p>
                    </div>
                  </div>
                  <div class="flex flex-col justify-start items-start flex-grow relative gap-2">
                    <p
                      class="self-stretch flex-grow-0 flex-shrink-0 w-[134.5px] text-base text-left text-[#1e1e1e]"
                    >
                      D.P
                    </p>
                    <div
                      class="flex justify-start items-center self-stretch flex-grow-0 flex-shrink-0 relative overflow-hidden px-4 py-3 rounded-lg bg-white border border-[#d9d9d9]"
                    >
                      <p class="flex-grow w-[102.5px] text-base text-left text-[#1e1e1e]">{{ $record->ojo_izquierdo_dp }}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="flex flex-col justify-start items-start self-stretch flex-grow-0 flex-shrink-0 gap-3"
            >
              <div
                class="flex flex-col justify-start items-start self-stretch flex-grow-0 flex-shrink-0 gap-4"
              >
                <div
                  class="flex justify-start items-center self-stretch flex-grow-0 flex-shrink-0 relative gap-4"
                >
                  <p
                    class="flex-grow-0 flex-shrink-0 w-[130px] text-xl font-bold text-left text-[#1e1e1e]"
                  >
                    Ojo derecho
                  </p>
                  <div class="flex flex-col justify-start items-start flex-grow relative gap-2">
                    <p
                      class="self-stretch flex-grow-0 flex-shrink-0 w-[134.5px] text-base text-left text-[#1e1e1e]"
                    >
                      Esfera
                    </p>
                    <div
                      class="flex justify-start items-center self-stretch flex-grow-0 flex-shrink-0 relative overflow-hidden px-4 py-3 rounded-lg bg-white border border-[#d9d9d9]"
                    >
                      <p class="flex-grow w-[102.5px] text-base text-left text-[#1e1e1e]">{{ $record->ojo_derecho_esfera }}</p>
                    </div>
                  </div>
                  <div class="flex flex-col justify-start items-start flex-grow relative gap-2">
                    <p
                      class="self-stretch flex-grow-0 flex-shrink-0 w-[134.5px] text-base text-left text-[#1e1e1e]"
                    >
                      CIlindro
                    </p>
                    <div
                      class="flex justify-start items-center self-stretch flex-grow-0 flex-shrink-0 relative overflow-hidden px-4 py-3 rounded-lg bg-white border border-[#d9d9d9]"
                    >
                      <p class="flex-grow w-[102.5px] text-base text-left text-[#1e1e1e]">{{ $record->ojo_derecho_cilindro }}</p>
                    </div>
                  </div>
                  <div class="flex flex-col justify-start items-start flex-grow relative gap-2">
                    <p
                      class="self-stretch flex-grow-0 flex-shrink-0 w-[134.5px] text-base text-left text-[#1e1e1e]"
                    >
                      Eje
                    </p>
                    <div
                      class="flex justify-start items-center self-stretch flex-grow-0 flex-shrink-0 relative overflow-hidden px-4 py-3 rounded-lg bg-white border border-[#d9d9d9]"
                    >
                      <p class="flex-grow w-[102.5px] text-base text-left text-[#1e1e1e]">{{ $record->ojo_derecho_eje }}</p>
                    </div>
                  </div>
                  <div class="flex flex-col justify-start items-start flex-grow relative gap-2">
                    <p
                      class="self-stretch flex-grow-0 flex-shrink-0 w-[134.5px] text-base text-left text-[#1e1e1e]"
                    >
                      A.V
                    </p>
                    <div
                      class="flex justify-start items-center self-stretch flex-grow-0 flex-shrink-0 relative overflow-hidden px-4 py-3 rounded-lg bg-white border border-[#d9d9d9]"
                    >
                      <p class="flex-grow w-[102.5px] text-base text-left text-[#1e1e1e]">{{ $record->ojo_derecho_av }}</p>
                    </div>
                  </div>
                  <div class="flex flex-col justify-start items-start flex-grow relative gap-2">
                    <p
                      class="self-stretch flex-grow-0 flex-shrink-0 w-[134.5px] text-base text-left text-[#1e1e1e]"
                    >
                      A.D.D
                    </p>
                    <div
                      class="flex justify-start items-center self-stretch flex-grow-0 flex-shrink-0 relative overflow-hidden px-4 py-3 rounded-lg bg-white border border-[#d9d9d9]"
                    >
                      <p class="flex-grow w-[102.5px] text-base text-left text-[#1e1e1e]">{{ $record->ojo_derecho_add }}</p>
                    </div>
                  </div>
                  <div class="flex flex-col justify-start items-start flex-grow relative gap-2">
                    <p
                      class="self-stretch flex-grow-0 flex-shrink-0 w-[134.5px] text-base text-left text-[#1e1e1e]"
                    >
                      D.P
                    </p>
                    <div
                      class="flex justify-start items-center self-stretch flex-grow-0 flex-shrink-0 relative overflow-hidden px-4 py-3 rounded-lg bg-white border border-[#d9d9d9]"
                    >
                      <p class="flex-grow w-[102.5px] text-base text-left text-[#1e1e1e]">{{ $record->ojo_derecho_dp }}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="flex flex-col justify-start items-start self-stretch flex-grow-0 flex-shrink-0 gap-3"
          >
            <div class="flex justify-start items-start self-stretch flex-grow-0 flex-shrink-0 gap-4">
              <div class="flex flex-col justify-start items-start flex-grow relative gap-2">
                <p
                  class="self-stretch flex-grow-0 flex-shrink-0 w-[246.25px] text-base text-left text-[#1e1e1e]"
                >
                  Tipo de lente
                </p>
                <div
                  class="flex justify-start items-center self-stretch flex-grow-0 flex-shrink-0 relative overflow-hidden px-4 py-3 rounded-lg bg-white border border-[#d9d9d9]"
                >
                  <p class="flex-grow w-[214.25px] text-base text-left text-[#1e1e1e]">{{ $record->tipo_lente }}</p>
                </div>
              </div>
              <div class="flex flex-col justify-start items-start flex-grow relative gap-2">
                <p
                  class="self-stretch flex-grow-0 flex-shrink-0 w-[246.25px] text-base text-left text-[#1e1e1e]"
                >
                  Valor lente
                </p>
                <div
                  class="flex justify-between items-center self-stretch flex-grow-0 flex-shrink-0 overflow-hidden px-4 py-3 rounded-lg bg-white border border-[#d9d9d9]"
                >
                  <div class="flex justify-start items-center flex-grow">
                    <div
                      class="flex justify-start items-center flex-grow-0 flex-shrink-0 w-[22px] relative gap-2.5"
                    >
                      <p class="flex-grow-0 flex-shrink-0 text-base text-left text-[#1e1e1e]">$</p>
                    </div>
                    <div
                      class="flex justify-center items-center flex-grow-0 flex-shrink-0 w-[254px] relative gap-2.5"
                    >
                      <p class="flex-grow w-[254px] text-base text-left text-[#1e1e1e]">{{ $record->valor_lente }}</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex flex-col justify-start items-start flex-grow relative gap-2">
                <p
                  class="self-stretch flex-grow-0 flex-shrink-0 w-[246.25px] text-base text-left text-[#1e1e1e]"
                >
                  Montura
                </p>
                <div
                  class="flex justify-start items-center self-stretch flex-grow-0 flex-shrink-0 relative overflow-hidden px-4 py-3 rounded-lg bg-white border border-[#d9d9d9]"
                >
                  <p class="flex-grow w-[214.25px] text-base text-left text-[#1e1e1e]">{{ $record->montura->nombre }}</p>
                </div>
              </div>
              <div class="flex flex-col justify-start items-start flex-grow relative gap-2">
                <p
                  class="self-stretch flex-grow-0 flex-shrink-0 w-[246.25px] text-base text-left text-[#1e1e1e]"
                >
                  Valor montura
                </p>
                <div
                  class="flex justify-between items-center self-stretch flex-grow-0 flex-shrink-0 overflow-hidden px-4 py-3 rounded-lg bg-white border border-[#d9d9d9]"
                >
                  <div class="flex justify-start items-center flex-grow">
                    <div
                      class="flex justify-start items-center flex-grow-0 flex-shrink-0 w-[22px] relative gap-2.5"
                    >
                      <p class="flex-grow-0 flex-shrink-0 text-base text-left text-[#1e1e1e]">$</p>
                    </div>
                    <div
                      class="flex justify-center items-center flex-grow-0 flex-shrink-0 w-[254px] relative gap-2.5"
                    >
                      <p class="flex-grow w-[254px] text-base text-left text-[#1e1e1e]">{{ $record->montura->precio }}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="flex justify-between items-center self-stretch flex-grow-0 flex-shrink-0">
            <div class="flex flex-col justify-start items-start flex-grow relative gap-2">
              <p
                class="self-stretch flex-grow-0 flex-shrink-0 w-[1033px] text-2xl font-semibold text-left text-[#1e1e1e]"
              >
                Observaciones
              </p>
              <p
                class="self-stretch flex-grow-0 flex-shrink-0 w-[1033px] text-xl text-left text-[#303030]"
              >
                {{ $record->notas_adicionales }}
              </p>
            </div>
          </div>
          <div
            class="flex flex-col justify-end items-center flex-grow-0 flex-shrink-0 h-[155px] w-[285px] gap-0.5"
          >
            <div
              class="flex flex-col justify-start items-center self-stretch flex-grow-0 flex-shrink-0 relative gap-0.5"
            >
              <svg
                width="285"
                height="2"
                viewBox="0 0 285 2"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="self-stretch flex-grow-0 flex-shrink-0 opacity-80"
                preserveAspectRatio="none"
              >
                <line opacity="0.8" y1="1" x2="285" y2="1" stroke="black" stroke-width="2"></line>
              </svg>
              <p class="flex-grow-0 flex-shrink-0 text-base font-bold text-left text-[#1e1e1e]">
                Firma del profesional
              </p>
            </div>
          </div>
        </div>
      </div>
      <script>
</body>
</html>
