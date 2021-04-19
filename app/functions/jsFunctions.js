const app = {
    init: function () {
        // Get client local date and time and display it
        app.getLocalTime();
        // Get client screen resolution and display it
        app.getScreenResolution();
    },

    getLocalTime: function () {
        localTime = new Date().toLocaleString("fr-FR");

        document.querySelector('.localtime').innerHTML = localTime;
    },

    getScreenResolution: function () {
        const screenWidth = screen.width;
        const screenHeight = screen.height;

        document.querySelector('.screen-resolution').innerHTML = screenWidth + "*" + screenHeight;
    }
}

document.addEventListener('DOMContentLoaded', app.init);