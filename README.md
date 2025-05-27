
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
