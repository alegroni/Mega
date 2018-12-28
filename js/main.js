var breakoutGame = function () {

    this.start = function () {

        var ball;
        var paddle;
        var bricks;
        var introText;
        var texto;
        var originalLive;
        var extraLive;
        var extraLive2;
        var clock;
        var s;
        var exclamation;
        var ballOnPaddle = true;
        var cursor;
        var explodeSound;
        
        var qtykillballs = 0;
        var ballVelocity = [1.40, 1.45, 1.55, 1.65, 1.65, 1.70, 1.75, 1.8, 1.85];
        var maxVelocity = 600;
        var maxMegaBricks = 15;
        var megaBricks = [2];
        var commonBricks = [1];
        var brickMessages = [
		'MÁS FÁCIL DE APRETAR, MÁS FÁCIL DE VENDER.',
		'AUMENTÁ TUS VENTAS CON LA CÁPSULA MÁS GRANDE DEL MERCADO.',
		'PENSÁ EN GRANDE, PENSÁ EN MEGA VENTAS.',
		'VENDÉ A LO GRANDE CON MARLBORO MEGA BLAST.',
		'MÁS FRESCURA PARA TUS CLIENTES, MÁS VENTAS PARA VOS.'
        ];

        //*****Setting Timer********/
        var timer;
        var miliSecondsLimit = 180000;
        var secondsLimit = 180;
        var minSeconds = 27;
        var timeText;
        var speedTimer = 1;
        var currentSpeed = 0;
        var header;

        /*****/

        var timeLeft = secondsLimit;
        var secondsLeft = Math.floor(timeLeft % 60);
        var minutesLeft = Math.floor(timeLeft / 60);
        var points = 0;
        var lives = 3;

        // var isIE11 = !!navigator.userAgent.match(/Trident.*rv[ :]*11\./);
        var iOS = !!navigator.platform && /iPad|iPhone|iPod/.test(navigator.platform);
        var renderer = Phaser.CANVAS;
        // if (isIE11 || iOS) {
        //     renderer = Phaser.CANVAS;
        // }
        var game = new Phaser.Game(1440, 800, renderer, 'canvas-container', { preload: preload, create: create, update: update, render: render });

        function preload() {
            game.load.image('background', './assets/images/scene-background.png');

            game.load.image('brick1', './assets/images/brick1.png');
            game.load.image('brick2', './assets/images/brick2.png');

            game.load.image('paddle', './assets/images/paddle.png');
            game.load.image('ball', './assets/images/ball.png');
            game.load.image('header', './assets/images/header.png');
            game.load.image('clock', './assets/images/clock.png');
            game.load.image('exclamation', './assets/images/exclamation.png');

            game.load.audio('explode', './assets/audios/explode.mp3');
            
            game.scale.windowConstraints.bottom = "visual";
            game.scale.scaleMode = Phaser.ScaleManager.SHOW_ALL;
            game.scale.pageAlignHorizontally = true;
            game.scale.pageAlignVertically = true;
        }

        function create() {

            game.physics.startSystem(Phaser.Physics.CANVAS);
            game.physics.arcade.checkCollision.down = false;

            game.onPause.add(onGamePause, this);
            game.onResume.add(onGameResume, this);

            s = game.add.tileSprite(0, 0, 1440, 800, 'background');

            createUI();

            createBricks();

            createPaddle();

            createBall();

            explodeSound = game.add.audio('explode');

            game.input.onDown.add(releaseBall, this);
            
            var spaceKey = game.input.keyboard.addKey(Phaser.Keyboard.SPACEBAR);
            spaceKey.onDown.add(releaseBall, this);

            game.input.keyboard.addKeyCapture([ Phaser.Keyboard.SPACEBAR ]);

            timer = game.time.create(false);
            // timer.loop(miliSecondsLimit, gameOver, this);

            cursor = game.input.keyboard.createCursorKeys();

            function onGamePause() {
                timer.pause();
            }
    
            function onGameResume() {
                timer.resume();
            }

            function createUI() {
                header = game.add.sprite(0, 0, 'header');
    
                clock = game.add.sprite(25, 15, 'clock');

                originalLive = game.add.sprite(200, 5, 'ball');
                originalLive.scale.x = 0.8;
                originalLive.scale.y = 0.8;

                extraLive = game.add.sprite(280, 5, 'ball');
                extraLive.scale.x = 0.8;
                extraLive.scale.y = 0.8;

                extraLive2 = game.add.sprite(360, 5, 'ball');
                extraLive2.scale.x = 0.8;
                extraLive2.scale.y = 0.8;
    
                introText = game.add.text(game.world.centerX, 620, 'HACÉ CLICK PARA EMPEZAR', { font: "27px Michroma", fill: "#000000", align: "center" });
                introText.anchor.setTo(0.5, 0.5);

                var minutesText = minutesLeft;
                var secondsText = secondsLeft;

                if (minutesLeft <= 9) {
                    minutesText = '0' + minutesLeft;
                }

                if (secondsLeft <= 9) {
                    secondsText = '0' + secondsLeft;
                }

                timeText = game.add.text(80, 22,  minutesText + ':' + secondsText, { font: "24px Michroma", fill: "#ffffff", align: "left" });
                
                texto = game.add.text(440, 25, brickMessages[0], { font: "18px Michroma", fill: "#ffffff", align: "left" });
                texto.visible = false;

                exclamation = game.add.sprite(1360, 10, 'exclamation');
                exclamation.visible = false;
            }

            function createBricks() {
                bricks = game.add.group();
                bricks.enableBody = true;
                bricks.physicsBodyType = Phaser.Physics.CANVAS;
    
                var brick;
                var megaBricksAmount = 0;
                var xBase = 40;
                var yBase = 160;

                for (var y = 0; y < 5; y++) {
    
                    for (var x = 0; x < 18; x++) {
                        var currentBrick = 1;
                        if (Math.abs(x % 2) === 1) {
                            currentBrick = getRandomArbitrary(1, 2);
                        }
                        if(_.includes(megaBricks, currentBrick)) {
                            megaBricksAmount++;
                        }

                        if (megaBricksAmount > maxMegaBricks) {
                            currentBrick = _.sample(commonBricks);
                        }
                        
                        brick = bricks.create(xBase + Math.round(x * 75), yBase + Math.round(y * 80), 'brick' + currentBrick);

                        if (currentBrick === 2) {
                            brick.anchor.setTo(0.1, 0.1);
                        }
    
                        brick.body.bounce.set(1);
                        brick.body.immovable = true;
                    }
                }

                function getRandomArbitrary(min, max) {
                    return Math.round(Math.random() * (max - min) + min);
                }
            }

            function createPaddle() {
                paddle = game.add.sprite(game.world.centerX, 750, 'paddle');
                paddle.anchor.setTo(0.5, 0.5);
    
                game.physics.enable(paddle, Phaser.Physics.CANVAS);
    
                paddle.body.collideWorldBounds = true;
                paddle.body.bounce.set(1);
                paddle.body.immovable = true;
            }
    
            function createBall() {
                ball = game.add.sprite(paddle.x - 40, paddle.y - 110, 'ball');
    
                game.physics.enable([ball, header], Phaser.Physics.CANVAS);
    
                header.body.collideWorldBounds = true;
                header.body.immovable = true;
                header.body.allowGravity = false;
    
                ball.body.collideWorldBounds = true;
                ball.body.bounce.set(1.03);
                ball.body.maxVelocity = new Phaser.Point(maxVelocity, maxVelocity);
                ball.checkWorldBounds = true;
                ball.events.onOutOfBounds.add(ballLost, this);

                function ballLost() {
                    lives--;
                    if (lives <= 0) {
                        gameOver();
                    } else {
                        if (lives === 2) {
                            extraLive2.kill();
                        } else {
                            extraLive.kill();
                        }
                        ball.body.velocity.y = 0;
                        ball.body.velocity.x = 0;
                        paddle.x = game.world.centerX;
                        paddle.y = 750;
                        ball.x = paddle.x - 40;
                        ball.y = paddle.y - 110;
                        timer.pause();
                        introText.setText('HACÉ CLICK PARA CONTINUAR');
                        introText.visible = true;
                        ballOnPaddle = true;
                    }
                }
            }

            function releaseBall() {
                if (!timer.ms) {
                    timer.start(100);
                    setTimeout(function() {
                    }, 100);
                }

                if (timer.paused) {
                    timer.resume();
                }

                if (ballOnPaddle) {
                    ballOnPaddle = false;
                    ball.body.velocity.y = -300;
                    ball.body.velocity.x = -75;
                    introText.visible = false;
                }
            }

        }


        function update() {

            var paddleX = 190;

            movePadleWithKey();

            if (game.input.activePointer.isDown) {
                paddle.x = game.input.x;
            }

            if (paddle.x < paddleX) {
                paddle.x = paddleX;

            }
            else if (paddle.x > game.width - paddleX) {
                paddle.x = game.width - paddleX;
            }

            if (ballOnPaddle) {
                ball.body.x = paddle.x - 40;
            }
            else {
                game.physics.arcade.collide(ball, paddle, ballHitPaddle, null, this);
                game.physics.arcade.collide(ball, bricks, ballHitBrick, null, this);
                game.physics.arcade.collide(ball, header);
            }

            function movePadleWithKey() {
                var forceX = 650;
    
                if (cursor.right.isDown) {
                    paddle.body.velocity.x = forceX;
                }
                else if (cursor.left.isDown) {
                    paddle.body.velocity.x = -forceX;
                }
                else
                    paddle.body.velocity.x = 0;
            }

            function ballHitBrick(_ball, _brick) {
                _brick.kill();
                explodeSound.play();
                
                addPoints(_brick.key);

                qtykillballs++;
    
                if (qtykillballs >= 90) {
                    gameOver();
                } else {
                    ballSpeed();
                }

                function ballSpeed() {
                    if (timer.seconds >= (speedTimer * minSeconds)) {
                        if (speedTimer < ballVelocity.length) {
                            speedTimer++;
                            currentSpeed++;
                        }
                    }
                    ball.body.bounce.set(ballVelocity[currentSpeed]);
                }
            }
    
            function ballHitPaddle(_ball, _paddle) {
                var diff = 0;
    
                if (_ball.x < _paddle.x) {
                    //  Ball is on the left-hand side of the paddle
                    diff = _paddle.x - _ball.x;
                    _ball.body.velocity.x = (-4 * diff);
                }
                else if (_ball.x > _paddle.x) {
                    //  Ball is on the right-hand side of the paddle
                    diff = _ball.x - _paddle.x;
                    _ball.body.velocity.x = (4 * diff);
                }
                else {
                    //  Ball is perfectly in the middle
                    //  Add a little random X to stop it bouncing straight up!
                    _ball.body.velocity.x = 2 + Math.random() * 2;
                }
            }

            function addPoints(key) {
                var pointsToAdd = 0;
                if (key.toLowerCase() === 'brick2')
                {
                    pointsToAdd = 10;
                    var text = _.sample(brickMessages);
                    texto.setText(text);
                    texto.visible = true;
                    exclamation.visible = true;
                } else {
                    pointsToAdd = 1;
                }

                points += pointsToAdd;
            } 

        }


        function render() {
            timeLeft = secondsLimit - timer.seconds;
            secondsLeft = Math.floor(timeLeft % 60);
            minutesLeft = Math.floor(timeLeft / 60);
            var minutesText = minutesLeft;
            var secondsText = secondsLeft;
            if (minutesLeft <= 9) {
                minutesText = '0' + minutesLeft;
            }
            if (secondsLeft <= 9) {
                secondsText = '0' + secondsLeft;
            }

            timeText.text =  minutesText + ':' + secondsText;

            if (timer.seconds >= (miliSecondsLimit / 1000)) {
                gameOver();
            }
        }

        function gameOver() {
            timer.pause();
            sendEndEvent();

            timer.stop();
            timer.destroy();
            timer.removeAll();

            game.destroy();

            // scalemanager = new Phaser.ScaleManager(game, 1440, 801);
            // scalemanager.destroy();

            function sendEndEvent() {
                var score = Math.round(points);
                if (lives > 0) {
                    score = Math.round(points + timeLeft + (lives * 20));
                }
                var event = new CustomEvent('gameover');
                event.finalScore = {'score': score};
                window.parent.document.dispatchEvent(event);
            }
        }

        function deviceMoveFunction(event) {

            var acX = event.accelerationIncludingGravity.x;
            var acY = event.accelerationIncludingGravity.y;

            if (isiOS()) {
                acX = acX * -1;
                acY = acY * -1;
            }

            switch (window.orientation) {
                case -90:
                    movePaddleAccelerometer(acY);
                    break;
                case 90:
                    movePaddleAccelerometer(-acY);
                    break;
                case 0:
                    movePaddleAccelerometer(acX);
                    break;
                case 180:
                    movePaddleAccelerometer(-acX);
                    break;
                default:
                    break;
            }
                 
            function isiOS() {
                return navigator.userAgent.match(/Mac OS/i);
            }

            function movePaddleAccelerometer(dx) {
                if (dx > 0) {
                    paddle.body.velocity.x -= 300;
    
                }
                else {
                    paddle.body.velocity.x += 300;
                }
            }

        }

        function isMobile() {
            return (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino|android|ipad|playbook|silk/i.test(navigator.userAgent || navigator.vendor || window.opera) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test((navigator.userAgent || navigator.vendor || window.opera).substr(0, 4)));
        }

    };

    start();
};

// window.AudioContext = null;
// window.webkitAudioContext = null;
breakoutGame();
setTimeout(function() {
    document.body.style.display = 'block';
}, 1000);
