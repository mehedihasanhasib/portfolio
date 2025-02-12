<div id="toast-container" class="fixed top-4 right-4 z-50 flex flex-col space-y-4 max-w-[90vw] sm:max-w-md">
    <!-- Toast Notification -->
    <div class="bg-white border border-gray-200 shadow-xl rounded-lg p-4 flex items-center space-x-4 animate-slide-in-right transition-all duration-300 hover:shadow-2xl mx-4 sm:mx-0">
        <!-- Icon -->
        <div class="flex-shrink-0 flex items-center justify-center w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-red-500 to-red-600 text-white rounded-full transform transition-transform duration-300 hover:scale-105">
            <svg class="w-5 h-5 sm:w-6 sm:h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
            </svg>
        </div>

        <!-- Content -->
        <div class="flex-1 min-w-0">
            <p class="text-sm sm:text-base text-gray-600 font-medium break-words">
                {{ session()->get('error') ?? 'Something Went Worng!' }}
            </p>
        </div>

        <!-- Close Button -->
        <button class="flex-shrink-0 p-2 text-gray-400 hover:text-gray-600 focus:outline-none focus:ring-2 focus:ring-red-500 rounded-full transition-colors duration-200" onclick="this.parentElement.remove()">
            <svg class="w-5 h-5 sm:w-6 sm:h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
</div>

<style>
    @keyframes slideInRight {
        from {
            transform: translateX(100%);
            opacity: 0;
        }

        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    .animate-slide-in-right {
        animation: slideInRight 0.3s ease-out forwards;
    }
</style>
