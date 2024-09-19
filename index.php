<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Input</title>
    <style>
        :root {
            --main-bg-color: #f0f8ff;  /* 薄い青色 */
            --primary-color: #0073e6;  /* 青色 */
            --hover-color: #005bb5;    /* ホバー時の青色 */
            --text-color: #333;        /* テキストカラー */
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: var(--main-bg-color);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px;
        }

        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
            display: grid;
            grid-gap: 20px;
        }

        h1 {
            color: var(--primary-color);
            text-align: center;
            font-size: 2rem;
            margin-bottom: 10px;
        }

        label {
            color: var(--text-color);
            font-size: 1rem;
        }

        input[type="text"], textarea {
            width: 100%;
            padding: 12px;
            margin-top: 6px;
            border: 1px solid var(--primary-color);
            border-radius: 8px;
            font-size: 1rem;
        }

        textarea {
            resize: vertical;
        }

        button {
            background-color: var(--primary-color);
            color: white;
            padding: 14px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s;
            width: 100%;
        }

        button:hover {
            background-color: var(--hover-color);
        }

        @media (min-width: 600px) {
            h1 {
                font-size: 2.5rem;
            }

            input[type="text"], textarea {
                font-size: 1.2rem;
            }

            button {
                font-size: 1.2rem;
            }
        }

        @media (prefers-color-scheme: dark) {
            body {
                background-color: #1c1c1c;
                color: white;
            }

            .form-container {
                background-color: #333;
            }

            input[type="text"], textarea {
                background-color: #555;
                color: white;
                border: 1px solid #0073e6;
            }

            button {
                background-color: #0073e6;
            }

            button:hover {
                background-color: #005bb5;
            }
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h1>Survey Form</h1>
        <form action="write.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" placeholder="Enter your email" required>

            <label for="memo">Questions/Comments:</label>
            <textarea id="memo" name="memo" rows="5" placeholder="Enter your questions or comments"></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>

</body>
</html>


