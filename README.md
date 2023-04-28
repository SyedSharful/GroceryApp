**Application link:** https://web.njit.edu/~klz4/CS490/index.php

**Running the Program:**
To run the application link, you must be at NJIT or use NJIT VPN if off campus. To run the whole program on your own computer, change the connection to the database and code under database.php.

**Final Program is in the MergedThree Folder**
**We have included images to confirm that we used AI functionalities with Browse AI:"**
Under BrowseAI1.png and BrowseAI2.png

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

**Documentation**
Grocery Service Website Documentation
Syed Alam and Kevin Zhou

PRODUCT FEATURES OVERVIEW
Saveit! is an online grocery service website that offers customers the convenience of shopping from the comfort of their own homes. Our website allows users to purchase products from different grocery stores and have them delivered straight to their doorstep. This documentation will provide a detailed overview of how to use Saveit!, including how to create an account, browse products, compare prices, and make a purchase.
When users click on our website link, they will be directed to the main page of our website. From there, they can browse through the stores and coupons for different products, but to add additional items to their shopping cart, customers must create an account or log into an existing account. To sign in, users can click on the Login button at the top right of the website, if they do not have an account, they can click the link at the bottom of the page which directs them to input their credentials. Once logged in, users will be once again redirected to the main page. Logging in also gives users access to their cart and a new tab called “My Orders”. In the shop tab, customers can browse products by selecting different tabs that display various categories. If the user wants to compare prices from different stores, they can use the search bar to find the product they want and see which products they desire. Customers can also use the “Coupons” page to look for current coupons. 
Customers can add products to their cart by selecting the desired quantity and changing the interval before adding the item to the cart. If the customer wants to remove an item from their cart, they can easily do so by clicking on the “Remove” button next to the product. If they want to remove all items from the cart, the bottom of the page contains a “Remove All” button, prompting the user that there are no items in the cart and providing a link to the Shop page. Once the customer has added all the desired products to their cart, they can proceed to the payment page. Here, they will be asked to provide their credit card information, delivery address, and desired delivery time. After filling out the form, customers can place their order and wait for it to arrive. Users can also check their order status in the “My Orders” tab. On that page, it will display each order the user has placed such as when they created the order, the time and destination, and the list of items that the user is ordering.
To ensure the security of our customer’s information, we automatically log users out of their session if the page has been inactive for over 15 minutes. Customers can also manually log out by clicking on the “Logout” button. In conclusion, Saveit! is a user-friendly and convenient online grocery service that offers customers the ability to shop from multiple stores, compare prices, and have products delivered straight to their door.

The main page of our site

User sign-up page

The Shop page

User is logged in and viewing their cart

User purchasing another order	






TECHNICAL OVERVIEW
Front end 

 Back end Architecture

TECHNICAL OVERVIEW
Introduction
The grocery service app is a web-based platform that allows users to shop for groceries online. The app was developed with the help of BrowseAI, which enabled the team to gather all the necessary information from credible sources. The development team faced several challenges during the development process, including the need to update information on the server end and the use of static web pages. This article provides an overview of the development process, including the front-end design, back-end implementation, and the challenges faced during the development process.

Front-End Design
The development team used basic HTML and CSS to create a unique, simple, and engaging user experience for the website. The team conducted research on various other web pages and articles regarding how grocery shopping is affected by physical parameters such as color and color schemes. Based on their research, the team made design choices that separated the platform from its competitors and provided more engaging experiences for clients. The code was straightforward and created in a way that any engineer, down to the associate level of any company, could understand and read the code easily. However, the team faced some issues when launching the service on NJIT AFS servers since they only accept PHP back-end and non-dynamic features.

JavaScript Implementation
The code originally had some JavaScript script tags for a more dynamic experience. However, the team had to remove these tags as they faced problems when launching the service on NJIT AFS servers. The servers only accept PHP back-end and non-dynamic features. This meant that the development team had to work on a static web page, requiring them to update information on the server end each time there was a change. While this was a tedious and repetitive task, it was necessary to ensure that users had access to up-to-date information on the website.

Conclusion
The front-end design of the grocery service app was developed to provide an engaging experience for clients. The use of basic HTML and CSS ensured that the code was easy to understand, while the research conducted by the team allowed them to make design choices that separated the platform from its competitors. The removal of JavaScript tags was necessary due to the limitations of the NJIT AFS servers, but this did not impact the overall user experience.

Back-End Implementation
The back-end implementation of the grocery service app was developed using PHP and MySQL with the database PhpmyAdmin. The development team manually saved all the coupons and stored information on the database. The plan was to have the information updated continuously with no developer interference. However, due to the team's size and time constraints, they had to settle for manual updates. The team used scripts and tags to gather the required information for the site and save it to a file in CSV format. This file was later manually imported into the database.

Challenges Faced
The development team faced several challenges during the implementation process. One of the main challenges was the need to manually update the database due to the limited team size and time constraints. This was a time-consuming process and prevented the team from providing real-time updates to the website. Another challenge was the use of scripts and tags to gather information for the site. While these tools were useful, they required constant monitoring to ensure that the information was accurate and up-to-date. Another challenge our team faced was we also used Python on the back end originally for the web scrappers and have them continuously update our servers, however, we ran into problems with hosting them on the NJIT AFS server again and settled for PHP. Lastly, because both engineers had experience with PHP which saved us time on the development and planning of back-end features. 

Conclusion
The back-end implementation of the grocery service app was developed using PHP and MySQL with an Oracle database. While the team initially planned to have the information updated continuously, they had to settle for manual updates due to time constraints. The use of scripts and tags helped the team gather the necessary information, but constant monitoring was required to ensure that the information was accurate and up-to-date. Overall, the development team was able to overcome these challenges and deliver a functional and engaging platform for users to shop for groceries online.

PROCESS OVERVIEW
Project Task Assignments during Scrums:
For the initial stage of the project, the first task assigned to the team members is conducting background research on grocery service applications, their pros and cons, and possible programming languages for implementation. This task will be completed in Sprint 2 and is of medium size. Kevin and Syed will also research frontend technologies, dev ops implementation, and other relevant topics.
In the Front-end Webpage task, Syed will be responsible for developing a working website prototype that users can interact with. This task is of large size and will be completed in Sprint 2. Kevin will design a login-in and sign-up page for the user to access the website, and this task is of large size and will be completed in Sprint 2.
In the Coupon Implementation task, Syed will implement a scraper to collect all available coupons. This task is of large size and will be completed in Sprint 2. In the Item Implementation task, Syed will also be responsible for implementing a scraper that collects items available at stores for users to select from. This task is of large size and will be completed in Sprint 3.
Kevin will be working on the User Cart and Ordering system task, where he will create a cart for users to add items to an order. This task is of large size and will be completed in Sprint 3. Kevin will also research PHP and SQL to connect to the database and frontend in the Back-end research task, which is of medium size and will be completed in Sprint 2.
For the Implementation of the AI task, both Syed and Kevin will collaborate to add an AI search and item suggestion to the project. This task is of large size and will be completed in Sprint 3-4. In the Testing task, both team members will be testing the website and looking for any possible issues. This task is of large size and will be completed in Sprint 4.
During the Changes task, Syed and Kevin will clean up the website to make it more presentable and add any parameters to the backend to make it more stable. This task is of medium size and will be completed in Sprint 4. In the Documentation task, both Syed and Kevin will document the uses for the application and progress. This task is of large size and will be completed in Sprint 4.
Overall, the team will collaborate to achieve the project goals and ensure a successful implementation of the grocery service application. Each member has been assigned specific tasks that align with their skill sets and areas of expertise. The project will be completed in four sprints, and each sprint will have a specific set of deliverables to be completed.
Task Assignments for Grocery Service Application Project
The Grocery Service Application project requires a team effort to develop a functional and user-friendly application that allows customers to order groceries online. The team comprises two members, Syed and Kevin, who are assigned various tasks throughout the project's sprints. This paper will discuss the task assignments for each member, their expected outcomes, and the sprints in which they will be completed.
Coupon Implementation: The first task assigned to Syed is to implement a scraper to get all possible coupons. This task is of large size and is assigned in Sprint 2. The goal is to provide users with a comprehensive list of coupons available for them to use. Syed will need to develop a scraper that can gather data from various sources and update the database with this information.
User Cart and Ordering System: Kevin is assigned to develop a cart that users can add items and order from. This task is of large size and is assigned in Sprint 3. The aim is to create a system that allows users to select items and add them to a cart. Once the user is done selecting items, they can proceed to checkout and place their order. This will require Kevin to design a backend that can interact with the front end and allow users to carry out these actions seamlessly.
Item Implementation: Syed is assigned to implement a scraper to grab items at stores for users to choose from. This task is of large size and is assigned in Sprint 3. The aim is to provide users with a comprehensive list of items available for purchase. This will require Syed to develop a scraper that can gather data from various sources and update the database with this information.
Implementation of AI: Syed and Kevin are assigned to implement AI into the project in Sprint 3-4. The aim is to improve the user experience by implementing two AI methods. Firstly, an AI search can help users find items they are looking for quickly. Secondly, an item suggestion system can recommend items to users based on their previous purchases. This will require Syed and Kevin to research and implement these AI methods into the project.
Testing, Changes, and Documentation Tasks for Grocery Service Application Project
Testing: Syed and Kevin are assigned to test the website and see possible issues in Sprint 4. This is a large task assigned to both team members. The aim is to ensure that the website is running smoothly and without any issues. If there are any issues found, they will be fixed before proceeding.
Changes: Syed and Kevin are assigned to clean up the website to look more presentable in Sprint 4. This is a medium-sized task assigned to both team members. The aim is to make any necessary changes to the website to make it more aesthetically pleasing and user-friendly. They will also add any parameters to the backend to make it more stable.

Documentation: Syed and Kevin are assigned to document the uses for the application and progress in Sprint 4. This is a large task assigned to both team members. The aim is to document the uses of the application and the progress made during the project. This documentation will help future developers understand the project's purpose and how it was developed.
In conclusion, the Grocery Service Application project requires the team members, Syed and Kevin, to work together to develop a functional and user-friendly online grocery ordering system. Each member is assigned various tasks of different sizes and durations, with a focus on ensuring that the system is functional and easy to use. The project's success will depend on the team's ability to collaborate and deliver high-quality work within the assigned sprints.
What are the major changes:
Switch the scrapping process to AI to meet project requirements

