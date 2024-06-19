<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        .homecontents {
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
        }

        .button{
            display: flex;
            padding: 10px;
            justify-content: center;
            align-items: center;
        }
        a {
            text-decoration: none;
            font-size: 20px;
            color: #333;
        }

    </style>
</head>

<body>
    <section class='homecontents'>
        <div>
            <h1>HELLO, WELCOME TO ARIANNE'S INFORMATION</h1>
            <p> Click a button below to start knowing Arianne</p>
        </div> 
     </section>
        
     <section class='button'>
         <div>
             <button><a href="/about">ABOUT ME</a></button>
             <button><a href="/skills">SKILLS</a></button>
             <button><a href="/hobbies">HOBBIES</a></button>
         </div>
     </section>
</body>
</html>