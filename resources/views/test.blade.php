<html>
<head>
    @livewireStyles
</head>
<body>
    <form action="/" method="post" enctype='multipart/form-data'>
        <div>
            <input type="text" name="title" />
            @error('title')
                <p class="text-red-500 text-xs mt-1 ml-1">{{ $message }}</p>
            @enderror
        </div>

        <input type="submit" value="save" />
        @livewire('bad-component')
        @csrf
    </form>

    @livewireScripts
</body>
