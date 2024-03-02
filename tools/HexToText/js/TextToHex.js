function convertTextToHex() {
    const textInput = document.getElementById('hexInput').value;
    const hexOutput = document.getElementById('hexOutput');

    try {
        const hexString = textInput.split('').map(char => char.charCodeAt(0).toString(16)).join('');

        hexOutput.value = hexString.toUpperCase();
    } catch (error) {
        hexOutput.value = 'Conversion failed.';
    }
}

function redirectToNewPage() {
    window.location.href = "HexToText.html";
}
