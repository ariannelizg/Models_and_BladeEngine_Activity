<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <style>
       .aboutcontents {
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
    <section class='aboutcontents'>
        <div>
            <h1>About Me</h1>
            <p><strong>Name:</strong> {{ $name }}</p>
            <p><strong>Date of Birth:</strong> {{ $dateOfBirth }}</p>
            <p><strong>Place of Birth:</strong> {{ $placeOfBirth }}</p>
            <p><strong>Age:</strong> {{ $age }}</p>
            <p><strong>Gender:</strong> {{ $gender }}</p>
            <p><strong>Civil Status:</strong> {{ $civilStatus }}</p>
            <p><strong>Citizenship:</strong> {{ $citizenship }}</p>
            <p><strong>Father's Name:</strong> {{ $f_Name }}</p>
            <p><strong>Mother's Name:</strong> {{ $m_Name }}</p>
            <p><strong>Height:</strong> {{ $height }}</p>
            <p><strong>Weight:</strong> {{ $weight }}</p>
            <p><strong>Language:</strong> {{ $language }}</p>
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