<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Jai Shree Ram</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Georgia', serif;
      background: url('https://wallpaperaccess.com/full/1979001.jpg') no-repeat center center fixed;
      background-size: cover;
      color: #fff3cd;
      text-align: center;
      animation: fadeIn 2s ease-in;
    }

    .overlay {
      background-color: rgba(0, 0, 0, 0.7);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: 2rem;
    }

    h1 {
      font-size: 4rem;
      color: #ffd700;
      margin-bottom: 1rem;
      text-shadow: 2px 2px 10px #000;
    }

    p {
      font-size: 1.5rem;
      color: #ffffff;
      max-width: 800px;
      margin: auto;
      line-height: 1.6;
      text-shadow: 1px 1px 5px #000;
    }

    .btn {
      margin-top: 2rem;
      padding: 1rem 2rem;
      font-size: 1.2rem;
      color: #fff;
      background: #d97706;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      transition: background 0.3s;
      box-shadow: 0 4px 15px rgba(0,0,0,0.3);
    }

    .btn:hover {
      background: #b45309;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    footer {
      margin-top: 3rem;
      font-size: 1rem;
      color: #eee;
    }
  </style>
</head>
<body>
  <div class="overlay">
    <h1>🚩 जय श्री राम 🚩</h1>
    <p>
      श्रीराम का नाम कलियुग में सबसे बड़ा मंत्र है।<br>
      ये नाम हर दुःख और संकट से रक्षा करता है।<br>
      राम ही सत्य हैं, राम ही शक्ति हैं।<br>
      आइये मिलकर राम नाम का गुणगान करें।
    </p>
    <button class="btn" onclick="alert('🚩 Jai Shree Ram! 🚩')">बोलो जय श्री राम!</button>

    <footer>© 2025 || Jai Shree Ram || श्री राम जी की कृपा बनी रहे</footer>
  </div>
</body>
</html>
