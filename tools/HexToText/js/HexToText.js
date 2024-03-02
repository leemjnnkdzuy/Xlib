function convertHexToText() {
    const hexInput = document.getElementById('hexInput').value;
    const textOutput = document.getElementById('textOutput');

    try {
        const hexString = hexInput.replace(/\s/g, '');
        const hexArray = hexString.match(/.{1,2}/g);
        const textString = hexArray.map(hex => String.fromCharCode(parseInt(hex, 16))).join('');

        textOutput.value = textString;
    } catch (error) {
        textOutput.value = 'Invalid hex input.';
    }
}

function redirectToNewPage() {
    window.location.href = "TextToHex.html";
}