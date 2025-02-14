<div class="group">
    <div class="bg-white rounded-2xl shadow-xl p-8 transform transition duration-500">
        <div class="flex items-center justify-center h-40 mb-8">
            <lottie-player src="{{ $banner }}" background="transparent" speed="1" loop autoplay>
            </lottie-player>
        </div>
        <h3 class="text-2xl font-bold text-center mb-6">{{ $title }}</h3>
        <div class="space-y-4">
            @foreach ($technologies as $name => $icon)
                <div class="flex items-center gap-3 bg-purple-50 p-3 rounded-lg">
                    <div class="w-10 h-10 flex items-center">
                        <img src="{{ $icon }}" alt="{{ $name }}">
                    </div>
                    <span class="font-medium">{{ $name }}</span>
                </div>
            @endforeach
        </div>
    </div>
</div>
