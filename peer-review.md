## P3 Peer Review

+ Reviewer's name: Frank Pizzuta
+ Reviwee's name: 
+ URL to Reviewe's P3 Github Repo URL: *https://github.com/cpowell1/project3*


## 1. Interface

+ My initial impression of the interface was very positive. The page flows nicely and is easy to read. The logo is a nice touch.
+ I was a little confused my the checkbox being above its label. Checkbox was probably not the best choice but in the context of this class and needing a third type of input, I understand the decision. Also, the check boxes are not aligned to the center on my machine.
+ The drop down for Pet Size worked really well. The choices made sense and were categorized appropriately.
+ One suggestion would be to play around with color. The logo pops but the rest of the site and surrounding white is very neutral. My other thought is to increase the size of the error messages as they don't really grab ones attention.


## 2. Functional testing

I tried the following:
+ When entering just a Pet name and submitting the form the entered name is not carried over to the incomplete form. 
+ Submitting an empty form flags all required fields with error messages.
+ I tried entering a number in the dogs name and it will only accept characters. 
+ Entering different paths on the URL all delivered 404 messages.

The page passed all but one test. You should look back through the notes and implement the carry over of any field in fields.


## 3. Code: Routes

No extraneous code found in the controller. Good job.

## 4. Code: Views

+ Template inheritance is used.
+ Are there any separation of concern issues (i.e. non-display specific logic in view files)?
+ The drop down list could have used a module and populated the list items from app.config. This would have streamlined the code a bit and allowed for easier additions of sizes at a later date.
+ Blade syntax looked good. I did not see anything not covered in lectures. 

## 5. Code: General

+ All best practices from class were followed.
+ Code is clean, well formatted and easy to follow.
+ Everyone should strive to write code in such a clean and concise manner. 
+ All the code was understandable. 

## 6. Misc
I thought you did a great job on this project. If you could incorporate pictures of dogs somehow the page would really shine. Good luck with the rest of class. 