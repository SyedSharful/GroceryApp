**Application link:** https://web.njit.edu/~klz4/CS490/index.php

**Final Program is in the MergedThree Folder**

**Background Information:** 

**Testing information for Signing Up:**
In our application we have a few test present that are automatic that help authorize the information being sent to our database. When regestering for our application services there are are certain requirements that will prevent users from entering invalid information. For example, for email there are certain requirements for key elements and size. When these requirements are not meet the client will recevie a short message saying what is incorrect and what is the correct format. These tests can be found in signin.php and signinCheck.php . 
Information that were tested include:
1. Username : check whether its a valid username that meets requirement and if username already exist notifies client. 
2. Password: Authorizes password length and security
3. Email: Contains valid email attibutes
4. Address: Contains valid address attributes
5. Phone Number: Length and format is correct

**Testing information for cart**
We have few test present in the checkout phase to validate information being used to purchase. The client receives notifications notifying them what was the error.
Information that were tested include:
1. Credit card info size were certain length
2. CSV size
3. Date format 

**Testing information for coupon**
In our coupon tab we have testing for search bar set up to make sure the coupon is present in our database or else client recieves not found notification.
