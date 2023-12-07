<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyChattttt</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="wrapper">
        <div id="left_pannel">
            <div id="user_wrap">
                <img id="profile_image"src="ui/images/user3.jpg">
                <br>
                Kelly Hartmann
                <br>
                <span style="font-size:12px; opacity:0.5">kellyHartmen@gmail.com</span>
                <br>
                <br>
                <br>
                <div>
                    <label id="label_chat" for="radio_chat">Chat <img src="ui/icons/chat.png"></label>
                    <label id="label_ccontacts" for="radio_contacts">Contacts <img src="ui/icons/contacts.png"></label>
                    <label id="label_settings" for="radio_settings">Settings <img src="ui/icons/settings.png"></label>
                </div>
            </div>
        </div>
        <div id="right_pannel">
            <div id="header">MyChat</div>
            <div id="container">

                <div id="inner_left_pannel">
                   
                </div>

                <input type="radio" id="radio_chat" name = "myradio" style="display:none;"></input>
                <input type="radio" id="radio_contacts" name = "myradio" style="display:none;"></input>
                <input type="radio" id="radio_settings" name = "myradio" style="display:none;"></input>

                <div id ="inner_right_pannel">

                </div>

            </div>
        </div>



    </div>
</body>
</html>