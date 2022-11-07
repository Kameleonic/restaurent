<x-portal-layout>
</x-portal-layout>

<head>
    @include('admin.admincss')
</head>

<body>

    @include('admin.navbar')

    <div class="page ml">
        <div class="mx-5 my-5">
            <div class="dash-card rounded-md">
                <div class="text-xxl font-semibold">
                    Settings
                </div>
                <div class="dash-panel">
                    <div class="text-lg mb-2">Change Logo</div>
                    <div>
                        <input class=" file-upload-info" type="file">
                    </div>

                </div>
                <div class="dash-panel">
                    <div class="text-lg mb-2">Accent Colour</div>
                    <div class="flex flex-col">
                        <label for="user_accent" class="text-sm form-label">
                            Use this color-picker to set your preffered
                            accent
                            color.<br>
                            <div class="text-xxxs text-white-50 font-bold">(Please note some colors may not blend with
                                the font
                                colors)
                            </div>
                        </label>
                        <input class="input-color-picker" name="user_accent" type="color" placeholder="var(--accent)">
                    </div>

                </div>
            </div>
        </div>
    </div>
