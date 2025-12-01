<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[> HACKED BY B3RT1337 <]</title>
    <meta name="description" content="Security Demonstration">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="https://fonts.googleapis.com/css?family=Iceland" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

    <style>
        body {
            background-color: #000;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            background-image: 
                radial-gradient(circle at 20% 30%, rgba(255,0,0,0.1) 0%, transparent 25%),
                radial-gradient(circle at 80% 70%, rgba(0,0,255,0.1) 0%, transparent 25%);
        }

        .glitch {
            position: relative;
            color: white;
            font-size: 4em;
            text-shadow: 0.05em 0 0 #00fffc, -0.05em -0.025em 0 #fc00ff;
            animation: glitch 500ms infinite;
        }

        @keyframes glitch {
            0% { text-shadow: 0.05em 0 0 #00fffc, -0.05em -0.025em 0 #fc00ff; }
            14% { text-shadow: 0.05em 0 0 #00fffc, -0.05em -0.025em 0 #fc00ff; }
            15% { text-shadow: -0.05em -0.025em 0 #00fffc, 0.025em 0.025em 0 #fc00ff; }
            49% { text-shadow: -0.05em -0.025em 0 #00fffc, 0.025em 0.025em 0 #fc00ff; }
            50% { text-shadow: 0.025em 0.05em 0 #00fffc, 0.05em 0 0 #fc00ff; }
            99% { text-shadow: 0.025em 0.05em 0 #00fffc, 0.05em 0 0 #fc00ff; }
            100% { text-shadow: -0.025em 0 0 #00fffc, -0.025em -0.025em 0 #fc00ff; }
        }

        .avatar {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 3px solid;
            animation: border-pulse 5s infinite alternate;
            box-shadow: 0 0 20px rgba(255,0,255,0.7);
            transition: transform 0.3s;
        }

        .avatar:hover {
            transform: scale(1.1);
        }

        @keyframes border-pulse {
            0% { border-color: #ff0000; }
            33% { border-color: #0000ff; }
            66% { border-color: #00ff00; }
            100% { border-color: #ffff00; }
        }

        .typing-effect {
            border-right: 3px solid;
            white-space: nowrap;
            overflow: hidden;
            margin: 0 auto;
            animation: 
                typing 3.5s steps(40, end),
                blink-caret 0.75s step-end infinite;
        }

        @keyframes typing {
            from { width: 0 }
            to { width: 100% }
        }

        @keyframes blink-caret {
            from, to { border-color: transparent }
            50% { border-color: #f00; }
        }

        .scrolling-text {
            font-family: 'Iceland', sans-serif;
            color: #fff;
            text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #ff00de, 0 0 20px #ff00de;
            font-size: 1.2em;
            margin: 20px 0;
        }

        .matrix-effect {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 0.15;
        }
    </style>
</head>
<body>
    <canvas id="matrix" class="matrix-effect"></canvas>
    
    <div style="padding: 50px 20px; text-align: center;">
        <h1 class="glitch" style="font-family: 'Quicksand', sans-serif;"> HACKED BY B3RT1337 </h1>
        
        <img src="https://avatars.githubusercontent.com/u/117980516?s=400&u=73998fe7f368b16f0def49f0fd34032650f77e65&v=4" alt="Avatar" class="avatar">
        
        <div style="margin: 30px auto; max-width: 600px;">
            <h2 class="typing-effect" style="font-family: 'Quicksand', sans-serif; color: white; font-size: 1.5em;">
                Why Hacked?
            </h2>
            
            <p style="color: #ccc; font-family: 'Quicksand', sans-serif; text-shadow: 0 0 5px rgba(255,255,255,0.3);">
                Hi Admin, I want to inform you because your website is shit,<br> vulnerable to hacking.
                <br>Fix it or another hacker might delete your whole database.</br>
		<br>Telegram: <a href="https://t.me/CosmicNetworkOfficialV2">@CosmicNetworkOfficialV2</a></br>
			
            </p>
        </div>
        
        <div class="scrolling-text">
            <marquee scrolldelay="3" scrollamount="10">
                Deathnote Hackers international | Nullsec Philippines | HonkSec | NullBytes Security | Pinoy ExploitSec | Reaper Byte Philippines |And you
            </marquee>
        </div>
    </div>

    <script>
        // Matrix effect
        const canvas = document.getElementById('matrix');
        const ctx = canvas.getContext('2d');
        
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
        
        const katakana = 'アァカサタナハマヤャラワガザダバパイィキシチニヒミリヰギジヂビピウゥクスツヌフムユュルグズブヅプエェケセテネヘメレヱゲゼデベペオォコソトノホモヨョロヲゴゾドボポヴッン';
        const latin = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        const nums = '0123456789';
        
        const alphabet = katakana + latin + nums;
        
        const fontSize = 16;
        const columns = canvas.width / fontSize;
        
        const rainDrops = [];
        
        for (let x = 0; x < columns; x++) {
            rainDrops[x] = 1;
        }
        
        const draw = () => {
            ctx.fillStyle = 'rgba(0, 0, 0, 0.05)';
            ctx.fillRect(0, 0, canvas.width, canvas.height);
            
            ctx.fillStyle = '#0f0';
            ctx.font = fontSize + 'px monospace';
            
            for (let i = 0; i < rainDrops.length; i++) {
                const text = alphabet.charAt(Math.floor(Math.random() * alphabet.length));
                ctx.fillText(text, i * fontSize, rainDrops[i] * fontSize);
                
                if (rainDrops[i] * fontSize > canvas.height && Math.random() > 0.975) {
                    rainDrops[i] = 0;
                }
                rainDrops[i]++;
            }
        };
        
        setInterval(draw, 30);
        
        window.addEventListener('resize', () => {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        });
    </script>
</body>

</html>

