<b>Todo List</b> <br/>
===
This is a basic project for creating and editing tasks. Registration is necessary.
Registered users can create their teams or join other teams, set tasks in specific categories.
Every team can create their own categories' and tasks' list. Creating a new task is simple:
you can choose task's priority, status, category, set due date and comment more about task
<br/>
<br/>
<br/>
<b>Installation:</b> <br/>
After cloning a repository to your computer, firstly you must install composer for this specific project. 
<br/>
Configure your parameters.yml file in order to connect to database. Update your database with command: php bin/console doctrine:schema:update --force
<br/>
Server starts with command: php bin/console server:start
<br/>
If everything is okay, you can now reach web page.
In order to use this web app, you have to register and then log in with your username and password.
<br/>
<br/>
<br/>
<b>Usage:</b><br/>
After registration user must log in. 
Then user reaches a home - profile page, where he can see his profile info and edit it, 
see what teams he is in and what recent tasks he has.
<br/>
In order to create a new team or join other teams, you have to click "Teams"->"Create a new team"
 or "List of all teams" while you're in your home page. When you create a team,
 you'll be the only member in it, but other members can join your team.
 <br/>
 When you are done with teams, it is time to start create tasks. Click "Tasks" 
 and choose a team which you want to add a task in and start setting tasks! 
 <br/>
 <br/>

<u>A Symfony project created on April 21, 2017, 5:22 pm.</u>
