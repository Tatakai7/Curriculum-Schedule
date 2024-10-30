<head>
    <meta charset="UTF-8">
    <meta name="description" content="A website">
    <meta name="viewport" content="width=device-width, initial scale=1">

    <style>
        .wrapper {
            display: flex;
            flex-direction: row;
        }

        #userprof {
            background-color:whitesmoke;
            width: 200px;
            margin-left: -150px;
            position: fixed;
            height: 200px;
            border-radius: 10px;
            border: 3px #002e63 solid;
        }
        #username{
            font-size: 30px;
            color: #002e63;
            width: 150px;
            margin: 0 auto;
            border-bottom: 1px #002e63 solid;
        }
        #userpic{
            margin: 0 auto;
            margin-top: 20px;
        }
        #dp {
            height: 100px;
            width: 100px;
            border-radius: 100%;
            border: 1px #002e63 solid;
        }
        #usercont {
            width: 100%;
        }
        #logo{
            width: 100%;
            height: 700px;
        }
    </style>   
</head>

<body>
    <div class="wrapper">
        <div id="userprof">
            <div id="userpic">
                <center><img id="dp" src="imgs/users/user2.jpg"></center>
            </div>
            <div id="username">
                <center><P>user2</P></center>
            </div>
        </div>
        <div id="usercont">
            <center><img id="logo" src="imgs/logo/logo.jpg" alt="logo"></center> 
        </div>
    </div>
</body>