<div id="contact"
    class="text-gray-500 bg-black grid w-full grid-cols-1 gap-8 px-8
        py-16 mx-auto min-h-screen md:grid-cols-2 lg:px-16 xl:px-32 dark:bg-gray-100 dark:text-gray-800">
    <div class="flex flex-col justify-between">
        <div class="space-y-2">
            <h2 class="text-4xl font-bold leading-tight lg:text-5xl">Vamos <span class="text-blue-500 ">conversar</span>?
            </h2>
            <div class="dark:text-gray-600">Nos envie suas dúvidas, sugestões, elogios, etc.</div>
        </div>
        <style>
            svg#freepik_stories-call-center:not(.animated) .animable {
                opacity: 0;
            }

            svg#freepik_stories-call-center.animated #freepik--background-complete--inject-18 {
                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideRight;
                animation-delay: 0s;
            }

            svg#freepik_stories-call-center.animated #freepik--Desk--inject-18 {
                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomIn;
                animation-delay: 0s;
            }

            svg#freepik_stories-call-center.animated #freepik--character-2--inject-18 {
                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) fadeIn;
                animation-delay: 0s;
            }

            svg#freepik_stories-call-center.animated #freepik--character-1--inject-18 {
                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideRight;
                animation-delay: 0s;
            }

            svg#freepik_stories-call-center.animated #freepik--call-button--inject-18 {
                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) fadeIn;
                animation-delay: 0s;
            }

            svg#freepik_stories-call-center.animated #freepik--Device--inject-18 {
                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) lightSpeedRight;
                animation-delay: 0s;
            }

            svg#freepik_stories-call-center.animated #freepik--speech-bubbles--inject-18 {
                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideLeft;
                animation-delay: 0s;
            }

            @keyframes slideRight {
                0% {
                    opacity: 0;
                    transform: translateX(30px);
                }

                100% {
                    opacity: 1;
                    transform: translateX(0);
                }
            }

            @keyframes zoomIn {
                0% {
                    opacity: 0;
                    transform: scale(0.5);
                }

                100% {
                    opacity: 1;
                    transform: scale(1);
                }
            }

            @keyframes fadeIn {
                0% {
                    opacity: 0;
                }

                100% {
                    opacity: 1;
                }
            }

            @keyframes lightSpeedRight {
                from {
                    transform: translate3d(50%, 0, 0) skewX(-20deg);
                    opacity: 0;
                }

                60% {
                    transform: skewX(10deg);
                    opacity: 1;
                }

                80% {
                    transform: skewX(-2deg);
                }

                to {
                    opacity: 1;
                    transform: translate3d(0, 0, 0);
                }
            }

            @keyframes slideLeft {
                0% {
                    opacity: 0;
                    transform: translateX(-30px);
                }

                100% {
                    opacity: 1;
                    transform: translateX(0);
                }
            }
        </style>
        <img src="{{ url('storage/svg/call_center.svg') }}" alt="apiaero-contato" class="w-4/5 mx-auto">
    </div>
    <div>
        @if ($sended == false)
            <form wire:submit class="space-y-6">
                <div>
                    <label for="name" class="text-sm text-gray-200">Seu nome</label>
                    <input wire:model="name" required type="text" placeholder=""
                        class="w-full p-3 rounded bg-gray-900 border border-gray-200 hover:border-blue-500">
                </div>
                <div>
                    <label for="email" class="text-sm text-gray-200">Email</label>
                    <input wire:model="email" required type="email"
                        class="w-full p-3 rounded bg-gray-900 border border-gray-200 hover:border-blue-500">
                </div>
                <div>
                    <label for="message" class="text-sm text-gray-200">Mensagem</label>
                    <textarea wire:model="message" rows="3"
                        class="w-full p-3 rounded bg-gray-900 border border-gray-200 hover:border-blue-500"></textarea>
                </div>
                <button wire:click='send()' type="submit"
                    class="w-full p-3 text-sm font-bold tracking-wide uppercase rounded bg-blue-600
                text-blue-50">
                    Enviar
                </button>
            </form>
        @else
            <div id="form-message-warning" class="space-y-6"></div>
            <div class='text-green-500'>
                <p class='text-green-500'>Sua mensagem foi enviada, obrigado!</p>
                <p class='text-green-500'>Em alguns dias nossa equipe entrará em contato.</p>
            </div>
        @endif
    </div>
</div>
