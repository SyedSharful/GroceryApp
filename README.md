**Applicationm link:** https://web.njit.edu/~klz4/CS490/index.php
**Background Information:** 

**Testing information:**
In our application we have a few test present that are automatic that help authorize the information being sent to our database. When regestering for our application services there are are certain requirements that will prevent users from entering invalid information. For example, for email there are certain requirements for key elements and size. When these requirements are not meet the client will recevie a short message saying what is incorrect and what is the correct format. These tests can be found in signin.php and signinCheck.php . 
Information that were tested include:
1. Username : check whether its a valid username that meets requirement and if username already exist notifies client. 
2. Password: Authorizes password length and security
3. Email: Contains valid email attibutes
4. Address: Contains valid address attributes
5. Phone Number: Length and format is correct
