// Get client local time in EN format;
const localTime = 'Unknown';

function getLocalTime() {
    localTime = new Date().toLocaleTimeString("en-US");

    return localTime;
}



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