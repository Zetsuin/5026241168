<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="style.css">
  <title>Linktree Pweb</title>

  <style>

    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Inter', sans-serif;
}

body {
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background: #1f2937;
}

.wrapper {
  width: 100%;
  display: flex;
  justify-content: center;
  padding: 20px;
}

.container {
  width: 92%;
  max-width: 620px;

  min-height: 100vh;
  padding: 70px 40px;

  border-radius: 32px;

  background: linear-gradient(
    to bottom,
    rgba(255,255,255,0.18),
    rgba(255,255,255,0.08) 40%,
    rgba(0,0,0,0.6)
  );

  backdrop-filter: blur(25px);
  border: 1px solid rgba(255,255,255,0.2);

  text-align: center;
  color: white;

  box-shadow: 0 25px 60px rgba(0,0,0,0.4);

  overflow-y: hidden;
}

.top-icons {
  display: flex;
  justify-content: space-between;
  margin-bottom: 25px;
}

.left-icon {
  background: rgba(255,255,255,0.2);
  width: 38px;
  height: 38px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 16px;
}

.right-icons {
  display: flex;
  gap: 10px;
}

.icon {
  width: 38px;
  height: 38px;
  border-radius: 50%;
  background: rgba(255,255,255,0.2);
  display: flex;
  align-items: center;
  justify-content: center;
}

.icon svg {
  width: 18px;
  height: 18px;
  fill: white;
}

.avatar {
  width: 95px;
  height: 95px;
  margin: 0 auto 18px;
  border-radius: 50%;
  overflow: hidden;
}

.avatar img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}


.username {
  font-size: 21px;
  font-weight: 600;
  margin-bottom: 6px;
}

.subtitle {
  font-size: 14px;
  color: rgba(255,255,255,0.7);
  margin-bottom: 35px;
}


.link {
  position: relative;
  display: block;
  width: 100%;
  height: 8%;

  padding: 20px;
  margin: 16px 0;

  border-radius: 999px;
  border: 1px solid rgba(255,255,255,0.25);

  font-size: 15px;
  text-align: auto;
  font-weight: 500;

  color: white;
  text-decoration: none;
}

.dots {
  position: absolute;
  right: 18px;
  top: 50%;
  transform: translateY(-50%);
  opacity: 0.6;
}

.link:hover {
  background: rgba(255,255,255,0.08);
  border-color: rgba(255,255,255,0.4);
}

.cta {
  margin-top: 50px;
  padding: 14px 20px;
  background: white;
  color: black;
  border-radius: 999px;
  font-size: 17px;
  font-weight: 500;
  display: inline-block;
}

.footer {
  margin-top: 20px;
  font-size: 11px;
  color: rgba(255,255,255,0.5);
}
  </style>
</head>

<body>

<div class="wrapper">

  <div class="container">


    <div class="top-icons">
      <div class="left-icon">
        ✷
      </div>

      <div class="right-icons">

        <div class="icon">
          <svg viewBox="0 0 24 24">
            <path d="M12 22a2 2 0 0 0 2-2h-4a2 2 0 0 0 2 2zm6-6V11a6 6 0 1 0-12 0v5l-2 2v1h16v-1l-2-2z"/>
          </svg>
        </div>


        <div class="icon">
          <svg viewBox="0 0 24 24">
            <path d="M18 16a3 3 0 0 0-2.4 1.2L8.9 13a3 3 0 0 0 0-2l6.6-4.2A3 3 0 1 0 14 5a3 3 0 0 0 .1.7L7.5 10A3 3 0 1 0 8 14l6.5 4.2A3 3 0 1 0 18 16z"/>
          </svg>
        </div>
      </div>
    </div>


    <div class="avatar">
      <img src="https://ugc.production.linktr.ee/65c65c02-c6f2-423e-9de3-c512a4f22344_VCT-PACIFIC-avatar-facebook.jpeg?io=true&size=avatar-v3_0" alt="logo">
    </div>

    <div class="username">@VALORANTINDONESIA</div>
    <div class="subtitle">Welcome to VALORANT Esports Indonesia!</div>


    <a href="#" class="link">
      FLICKR
      <span class="dots">⋮</span>
    </a>

    <a href="#" class="link">
      WEBSITE
      <span class="dots">⋮</span>
    </a>

    <a href="#" class="link">
      YOUTUBE
      <span class="dots">⋮</span>
    </a>

    <a href="#" class="link">
      TWITCH
      <span class="dots">⋮</span>
    </a>

    <a href="#" class="link">
      FACEBOOK
      <span class="dots">⋮</span>
    </a>


    <div class="cta">Join VALORANTINDONESIA on Linktree</div>

    <div class="footer">Cookie Preferences • Report • Privacy</div>

  </div>

</div>

</body>
</html>
