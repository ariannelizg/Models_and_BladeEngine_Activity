<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hobbies</title>
    <style>
        .hobbiescontents {
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
    <section class='hobbiescontents'>
        <div>
            <h1>Hobbies</h1>
            <p><strong>Sing:</strong> {{ $sing }}</p>
            <p><strong>Insturments:</strong> {{ $instruments }}</p>
            <p><strong>Games:</strong> {{ $games }}</p>
            <p><strong>Movies:</strong> {{ $movies }}</p>
            <p><strong>Sports:</strong> {{ $sports }}</p>
            <p><strong>Kpop Idols:</strong> {{ $kpopidol }}</p>
            <p><strong>Kpop Things:</strong> {{ $kpopthing }}</p>
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