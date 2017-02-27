//Creates the enemy object
var Enemy = function() {
    //Loads image for enemy.
    this.sprite = 'images/enemy-bug.png';

    //Setting x and y coordinates for enemy
    this.setXY();

    //Setting the speed of movement of enemy
    this.moveX = Math.floor(Math.random() * 500) + 100;
}

//Controls movement of the enemy and looks if it collides with the player
Enemy.prototype.update = function(dt) {
    //Looks if enemy and player collide and if they do, sends player to the start
    if (this.collide()) {
        player.x = 101*2;
        player.y = 83*4.5;
    }

    //Moves the enemy
    this.x = Math.round(this.x + (dt * this.moveX));

    //Resets the enemy's position whe if it goes off the screen
    if (this.x > 101*5) {
        this.setXY();
    }
}

//Renders images of enemies at specific coordinates
Enemy.prototype.render = function() {
    ctx.drawImage( Resources.get(this.sprite), this.x, this.y);
}

//Sets the starting postions for enemy
Enemy.prototype.setXY = function() {
    //Setting random starting x position off screen for the enemy
    this.x = - Math.floor(Math.random() * 400) - 101;

    //Setting random row for enemy
    var positionY = [83*0.5, 83*1.5, 83*2.5];
    this.y = positionY[Math.floor(Math.random() * 3)];
}


//Checks if the enemy and player collide, returns true or false
Enemy.prototype.collide = function() {
    if (this.y == player.y) {
        return !(player.x + 101 - 15 < this.x || player.x + 15 > this.x + 83);
    }
    return false;
}

//Creates the player object
var Player = function() {
    //Sets the player's image
    this.sprite = 'images/char-boy.png';

    //Sets player's coordinates at the starting position.
    this.x = 101*2;
    this.y = 83*4.5;
}

//This function is required by the engine but doesn't do anything.
Player.prototype.update = function() {
}

//Draws the player using data about its image, x and y coordinates.
Player.prototype.render = function() {
    ctx.drawImage(Resources.get(this.sprite), this.x, this.y);
}

//Allows player's movement
Player.prototype.handleInput = function(allowedKeys) {
    //Allows the movement when the player stays on the screen
    if (allowedKeys === 'left' && this.x >= 101) {
        this.x = this.x - 101;
    }
    if (allowedKeys === 'up' && this.y >= 83/2) {
        this.y = this.y - 83;
    }
    if (allowedKeys === 'right' && this.x <= 303) {
        this.x = this.x + 101;
    }
    if (allowedKeys === 'down' && this.y <= 83*4) {
        this.y = this.y + 83;
    }

    //Sends a message about being a winner!
    if (allowedKeys === 'up' && this.y == -83/2) {
        alert("Wooohooo! Congrats! You have won the game! You are awesome! :)");

        //Sends player to the start.
        this.x = 101*2;
        this.y = 83*4.5;
    }
}

//Creates allEnemies array
var allEnemies = [];

//Creates 4 enemies
for (var i=0; i<4; i++){
    var enemy = new Enemy();
    allEnemies.push(enemy);
};

//Creates the player
var player = new Player();

//Listens to the four keyboard inputs for player's movement in four directions
document.addEventListener('keyup', function(e) {
    var allowedKeys = {
        37: 'left',
        38: 'up',
        39: 'right',
        40: 'down'
    };

    player.handleInput(allowedKeys[e.keyCode]);
});
