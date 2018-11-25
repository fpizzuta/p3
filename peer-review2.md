## P3 Peer Review

+ Reviewer's name: Frank Pizzuta
+ Reviwee's name: Jared Jessup
+ URL to Reviewe's P3 Github Repo URL: https://github.com/jessupjs/p3


## 1. Interface

+ My initial impression of the interface is slight confusion. Without reading the README file I would not understand what the purpose of the form was. Beyond that, the interface is colorful and interesting to look at. I also like the slight transparency to the form background.
+ It is not clear what the form does without playing with maximum values and observing what happens to the interface. 
+ The parallax scrolling effect is very cool and works well.
+ The page / form needs a title or some explanation for the purpose of the page. I would also consider shrinking the button size. 


## 2. Functional testing

+ An empty form submission marks all field entries red. However, there is no indication that they are all mandatory. 
+ Partially completed forms return with data present and unfilled form elements are properly marked red. 
+ Inputs correctly verify range of entry. One issue is with the incrementing of the input element. When clicked on they start at .01 much smaller than the minimum allowed. The default value should be set to your minimum allowed value. 
+ Invalid URLs all return to the main page. 

Good job on handling input validation with the form. As stated above I only have 2 recommendations. All of the inputs must be filled in to properly submit the form. This is not indicated anywhere and what if a user only wanted to change 1 slide. Would that be possible? Perhaps having default values filled in for each input would help and also allow for more discrete use of the form. 



## 3. Code: Routes
Routes don't contain any extraneous code. Good job.  

## 4. Code: Views

+ Template inheritance is used properly. 
+ View files only contains display code and use proper blade insertions {{}}.
+ I do not see any extra php. Blade is used to insert values into html to change parallax effect.
+ All blade code was familiar. 

## 5. Code: General


+ You did a good job with matching the coding standards as defined in this class. 
+ Best practices where followed.
+ The html and css are more complicated then the php/blade code. You might want to add comments so that users can better understand how you are using and changing the parallax effect.
+ You might want to consider storing the inputs as an array or even a json object as opposed to a large number of individual variables. 
+ I have never used the parallax effect before though i have seen it implemented on websites. It is an excellent example of more advanced front end coding. 
+ Your code was well formatted and easy to understand. 

## 6. Misc
This was a great example of front end coding using minimal server side code. 