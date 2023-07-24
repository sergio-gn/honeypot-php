# HoneyPot Implementation for Contact Form Submission
This repository contains a simple implementation of a HoneyPot technique to prevent spam bots from abusing the contact form submission feature on a website. The HoneyPot technique involves adding a hidden field to the contact form that is invisible to users but can be detected by bots. When a bot fills in this hidden field, the submission is flagged as spam, and the form data is discarded.

## How it Works
Form Fields:

The contact form contains the following fields: name, email, phone, message, and a hidden honeypot field.

## Submission Handling:
When a user submits the form, the PHP script submit.php is executed.

## HoneyPot Detection:
The script retrieves the form data using $_POST.
It checks the honeypot field to detect if it's filled out. If the honeypot field is not empty, the script discards the submission, assuming it is a bot trying to submit spam. Otherwise, the email is sent.
Email Setup:

The script sets up the email with the provided form data and sends it to the specified recipient (example@fakemail.com) using the mail() function.
Success Message:

If the email is sent successfully, the script echoes "Message sent with success" to provide feedback to the user.
How to Use
To use this HoneyPot implementation on your website's contact form, follow these steps:

Clone this repository to your local machine or download the submit.php file.

Place the submit.php file on your web server where your contact form is located.

Modify your existing contact form HTML code to include the honeypot field as a hidden field:
><form action="submit.php" method="post">
>    <!-- Your existing form fields -->
>    <input type="text" name="name" placeholder="Your Name" required>
>    <input type="email" name="email" placeholder="Your Email" required>
>    <input type="tel" name="phone" placeholder="Your Phone" required>
>    <textarea name="message" placeholder="Your Message" required></textarea>
>
>    <!-- HoneyPot field (hidden) -->
>    <input type="text" name="honeypot" style="display:none;">
>    
>    <button type="submit">Submit</button>
></form>

Ensure that the submit.php file and the modified contact form are live on your website.

Disclaimer
The HoneyPot technique is not foolproof and may not prevent all types of spam. It is intended as an additional layer of defense against automated spam bots. Make sure to regularly monitor your website's contact form submissions and adjust your spam prevention strategies as needed.

Contributing
If you find any issues or have suggestions for improvement, feel free to open an issue or submit a pull request.

License
This project is licensed under the MIT License. Feel free to use and modify the code as per the license terms.

Note: The code provided in this repository is a basic implementation for educational purposes and may require additional security measures and error handling for production use. Use it at your own risk.
