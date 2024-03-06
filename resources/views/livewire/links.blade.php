<div>
    <div class="space-y-3">
        @foreach ($links as $link)
            <div class="bg-slate-200 text-gray-700 py-3 px-6 rounded-xl font-medium">
                {{ $link->url }}
            </div>
        @endforeach
    </div>
</div>
