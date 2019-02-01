function validateContactForm() { //validates the contact form.
    var namefield = document.forms["contactForm"]["name"].value;
    var lastnamefield = document.forms["contactForm"]["lname"].value;
    var genderfield = document.forms["contactForm"]["gender"].value;
    var emailfield = document.forms["contactForm"]["email"].value;
    var countryfield = document.forms["contactForm"]["country"].value;
    var messagefield = = document.forms["contactForm"]["message"].value;
    if (namefield == "") {
        alert("Name must be filled out");
        return false;
    }
    if (lastnamefield == "") {
        alert("Last name must be filled out");
        return false;
    }
    if (genderfield == "") {
        alert("Gender must be filled out");
        return false;
    }
    if (emailfield == "") {
        alert("Email must be filled out");
        return false;
    }
    if (countryfield == "") {
        alert("Country must be filled out");
        return false;
    }
    if (messagefield == "") {
        alert("Message must be filled out");
        return false;
    }
}

function validateLoginForm() { //validates the login form (public)
    var username_field = document.forms["loginForm"]["username"].value;
    var password_field = document.forms["loginForm"]["password"].value;
    if (username_field == "") {
        alert("Username must be filled out");
        return false;
    }
    if (password_field == "") {
        alert("Password must be filled out");
        return false;
    }
}

function validateRegisterForm() { //validates the register form
    var namefield = document.forms["registerForm"]["name"].value;
    var lastnamefield = document.forms["contactForm"]["lname"].value;
    var emailfield = document.forms["contactForm"]["email"].value;
    var usernamefield = document.forms["contactForm"]["username"].value;
    var passwordfield = document.forms["contactForm"]["password"].value;
    if (namefield == "") {
        alert("Name must be filled out");
        return false;
    }
    if (lastnamefield == "") {
        alert("Last name must be filled out");
        return false;
    }
    if (emailfieldd == "") {
        alert("Email must be filled out");
        return false;
    }
    if (usernamefield == "") {
        alert("Username must be filled out");
        return false;
    }
    if (passwordfield == "") {
        alert("Password must be filled out");
        return false;
    }

}

function validateAddUserForm() { //validates the add user form (admin)
    var namefield = document.forms["addUserForm"]["name"].value;
    var lastnamefield = document.forms["addUserForm"]["lname"].value;
    var emailfield = document.forms["addUserForm"]["email"].value;
    var usernamefield = document.forms["addUserForm"]["username"].value;
    var passwordfield = document.forms["addUserForm"]["password"].value;
    var rolefield = document.forms["addUserForm"]["role"].value;
    if (namefield == "") {
        alert("Name must be filled out");
        return false;
    }
    if (lastnamefield == "") {
        alert("Last name must be filled out");
        return false;
    }
    if (emailfieldd == "") {
        alert("Email must be filled out");
        return false;
    }
    if (usernamefield == "") {
        alert("Username must be filled out");
        return false;
    }
    if (passwordfield == "") {
        alert("Password must be filled out");
        return false;
    }

}

function validateAddPostForm() { //validates the add post form (admin&user)
    var post_namefield = document.forms["addPostForm"]["post_name"].value;
    var post_contentfield = document.forms["addPostForm"]["post_content"].value;
    if (post_namefield == "") {
        alert("Post name must be filled out");
        return false;
    }
    if (post_contentfield == "") {
        alert("Post content must be filled out");
        return false;
    }
}

function validateAddNoteForm() { //validates the add note form (admin)
    var note_namefield = document.forms["addNoteForm"]["note_name"].value;
    var note_contentfield = document.forms["addNoteForm"]["note_content"].value;
    if (note_namefield == "") {
        alert("Note name must be filled out");
        return false;
    }
    if (note_contentfield == "") {
        alert("Note content must be filled out");
        return false;
    }
}

function validateAddAboutForm() { //validates the add about form (admin)
    var about_titlefield = document.forms["addAboutForm"]["note_name"].value;
    var about_contentfield = document.forms["addAboutForm"]["note_content"].value;
    if (about_titlefield == "") {
        alert("About title must be filled out");
        return false;
    }
    if (about_contentfield == "") {
        alert("About content must be filled out");
        return false;
    }
}