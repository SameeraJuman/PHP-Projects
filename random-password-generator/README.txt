Project: Random Password Generator with HTML, CSS and PHP

Used uiverse.io for the generate button and input fields.

What the code does:
- Create a set of characters
- Shuffle them randomly using str_shuffle()
- Cut off a piece of the shuffled string (based on the length the user picks) using substr()
- The above points are all wrapped in a function
- If the length input field is not empty, then check if the data entered is the correct data type (integer). 
- If both of these conditions are true, then store the length entered in a variable.
- Use that same variable to check if the number entered is valid. If it's valid, run the function to generate the password. If not, then display an error message. 
