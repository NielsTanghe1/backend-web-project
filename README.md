
# Project Backend Web - Bootleg Reddit

For my final project I made a forum based off Reddit.


    

## Functionality

- Guest users can:
    - View posts
    - View news
    - View FAQ
    - View user profiles
    - Make an account
- Users can
    - Make a post:
        - Title
        - Content
        - Optional image
    - Edit their profile:
        - Profile picture
        - Display name
        - Bio
        - Birthday
- Admins can
    - Everything users can
    - Acces the admin panel:
        - Make other users admin
        - Delete users
        - Make news posts
        - Make FAQ posts

## Extras
- Commenting
- Voting
- Admin dashboard for contactmessages

## Implementation Technical Requirements Assignment
- Views
    - 3 Layouts -> Guest, User, Admin
    - Used components for Posts, Profiles, News, Faq..
    - Redirecting users if they arent logged in/ arent an Admin
- Routes
    - Routes use controller methods -> to fetch posts, users ect
    - Routes user middelware -> Edit profile, Admin page
- Controller
    - Used controllers for the logic of all pages
- Models
    - Made all the neccesairy models for the entities i needed
    - Relations
        - One to Many
            - One user can have many posts
            - Votes can be given by multiple user to multiple posts
- Database
    - Is equipped with seeders to populate the Database
- Authentication
    - Login/out
    - Remeber methods
    - Register
    - Default Admin
        - admin
        - admin@ehb.be
        - Password!321
## Installation

Install via laravel

- Make sure blade is installed
- Make sure npm is installed


    
## Sources
- https://canvas.ehb.be/courses/39355
- https://laravel.com/docs/12.x
- https://laracasts.com/discuss
- https://stackoverflow.com/questions
- No AI used
## Screenshots
![Screenshot 2025-05-27 115611](https://github.com/user-attachments/assets/a11e3cb9-1b0e-4eaa-8738-c43af666e805)
![Screenshot 2025-05-27 115602](https://github.com/user-attachments/assets/20d63ce0-4c37-48a7-adb1-3f823a84ac43)
![user](https://github.com/user-attachments/assets/a1c9aeaf-5fa5-4d81-858f-a97da1151bb7)
![admin](https://github.com/user-attachments/assets/a25756f3-2b88-4616-af03-e63661f2a329)
![guest](https://github.com/user-attachments/assets/5328b673-1ce6-4479-9d68-de260b18db1f)
![Screenshot 2025-05-27 115542](https://github.com/user-attachments/assets/287ef4d2-e91b-4f84-bf91-775b4bcdb65a)
![Screenshot 2025-05-27 115504](https://github.com/user-attachments/assets/ffbcb3d4-b380-4c85-84ea-7c80b0128c18)
![Screenshot 2025-05-27 115459](https://github.com/user-attachments/assets/0def3a83-43c4-46a4-b48f-0796af0195b8)
![Screenshot 2025-05-27 115453](https://github.com/user-attachments/assets/f1b28ad4-6733-4feb-8a42-20f378e70ed0)
![Screenshot 2025-05-27 115443](https://github.com/user-attachments/assets/9997f646-1ae3-4bee-bb21-be66f9d07033)

