// Get client local time in EN format;
function getLocalTime() {
    const localTime = new Date().toLocaleTimeString("en-US");

    return localTime;
}

console.log(localTime);

// Get client screen resolution
function getScreenResolution() {
    const screenWidth = screen.width;
    const screenHeight = screen.height;

    resolutionArr = {
        'width' : screenWidth,
        'height' : screenHeight,
    }
    return resolutionArr;
}

console.log(getScreenResolution());