# QR Code Scanner/Generator

This project consists of an HTML page that includes a QR Code Generator and a QR Code Scanner.

## Description

The HTML page provides two main functionalities:

1. QR Code Generator:
   - Enter text into the input field.
   - Click the "Generate" button to generate a custom QR code based on the entered text.
   - The generated QR code will be displayed below the input field.

2. QR Code Scanner:
   - This section allows you to scan QR codes using your device's camera.
   - The video feed from the camera will be displayed within the designated area.
   - When a QR code is detected, an alert will be displayed showing the content of the scanned QR code.

## Usage

To use this project, follow these steps:

1. Clone the repository or download the provided HTML file.

2. Open the HTML file in a web browser.

3. QR Code Generator:
   - Enter the desired text in the input field.
   - Click the "Generate" button to generate a QR code representing the entered text.
   - The generated QR code will be displayed below the input field.

4. QR Code Scanner:
   - Grant access to your device's camera when prompted.
   - Enter the Mobile No. registered to your Vonage Account.
   - Align the camera with a QR code.
   - The scanner will automatically detect the QR code and send it to the provided number.
     
## Requirements

The project requires a web browser that supports HTML5 features, including the `canvas` and `video` elements.

## Dependencies

The following dependencies are used in this project:

- [QRious](https://github.com/neocotic/qrious): A JavaScript library for generating QR codes.
- [Instascan](https://github.com/schmich/instascan): A JavaScript library for scanning QR codes using the device's camera.
- Bootstrap: The project utilizes Bootstrap for styling.

## Credits

The project includes the following resources:

- [Font Awesome](https://fontawesome.com/) - Used for icons.
- [Bootstrap](https://getbootstrap.com/) - CSS framework for styling.

## License

This project is licensed under the [MIT License](LICENSE).
