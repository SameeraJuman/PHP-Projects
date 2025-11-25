Sending ASCII art through email
This project has a few ASCII art and sends it as a .txt file attachment via email. It uses PHP file handling, loops, heredoc, concatenation assignment and email sending using PHPMailer. 


What the code does:
1. Pre-defines the message to be sent (ascii art) in a PHP variable using a heredoc
2. Repeats the art 50 times with a for loop
3. Saves the art as a .txt file locally.
4. Uses PHPMailer server settings to sent the .txt file as an attachment via email
5. Works with gmail SMTP using an app password.