<label class="fixed top-5 right-10 z-50">
    <input class="toggle-checkbox" type="checkbox" @click="isDarkMode = ! isDarkMode">
    <div class="toggle-slot">
        <div class="sun-icon-wrapper">
            <div class="iconify sun-icon" data-icon="feather-sun" data-inline="false" x-show="isDarkMode"></div>
        </div>

        <div class="toggle-button"></div>

        <div class="moon-icon-wrapper">
            <div class="iconify moon-icon" data-icon="feather-moon" data-inline="false" x-show="! isDarkMode"></div>
        </div>
    </div>
</label>
