//constantes
const  bs_width = 960; //largeur de la fenêtre
const  bs_height = 960; //hauteur de la fenêtre
const  _up = 0b11; // le type var permet d'utiliser un switch case
const  _dwn = 0b00; 
const  _lft = 0b10;
const  _rgt = 0b01;
//variables globales
var imgGrass ; // image de gazon
var i; //variable d'itération
var j; //variable d'itération
//instances
//snake mySnake = new snake(); // nouvelle instance de la classe snake

//initialisation
function setup() {
  size(960, 960); //taille de la fenêtre
  frameRate(24);
  imgGrass = loadImage( "grass.png");
}// end setup


function draw (){ //boucle principale
  grassDisplay();
  mySnake.display();  //affichage du serpent
  mySnake.checkCol(); //test de la collision
  
  for(i=mySnake.tail-1;i>0; i-- ) { //shift la position des carrés du serpent dans le tableau
    mySnake.x[i] = mySnake.x[i-1];
    mySnake.y[i] = mySnake.y[i-1];
  } 
  switch (mySnake.dir){
    case _up : mySnake.y[0] -= mySnake.body;
      break;
    case _dwn : mySnake.y[0] += mySnake.body;
      break;
    case _rgt :  mySnake.x[0] += mySnake.body;
      break;
    case _lft :  mySnake.x[0] -= mySnake.body;    
      break; 
  }// end switch  direction
}// end Draw

class snake {
    constructor(body, x, y, tail, dir, colorSnake) {
        body = 32;
        x[0] = (bs_width / 2) + (body / 2); //position des deux blocs au centre de l'écran
        y[0] = (bs_height / 2);
        x[1] = x[0] - body;
        y[1] = y[0];
        tail = 2; //nombre de bloc du serpent
        dir = _rgt; //direction du serpent, 
        colorSnake = color(255); //blanc  


        this.display = function () {
            fill(colorSnake);
            rectMode(CENTER);
            //noStroke();
            for (i = 0; i < tail; i++)
                rect(x[i], y[i], body, body);
        }; //end method display 

        this.checkCol = function () {
            for (i = 1; i < tail; i++) {
                if ((x[0] == x[i] && y[0] == y[i]) || mySnake.x[0] < 0 || mySnake.x[0] > bs_width || mySnake.y[0] < 0 || mySnake.y[0] > bs_height) {
                    frameRate(0);
                    println("end");
                } //end if
            } //end for
        }; //end function checkCol

        this.growUp= function() {
            tail++;
            x[tail - 1] = x[tail - 2];
            y[tail - 1] = y[tail - 2];
        } //end function growUp
    }
}

function keyPressed(){ // teste les events provenant du clavier
  if (key == 's') mySnake.growUp();
  else if(keyCode == UP && mySnake.dir != _dwn)    mySnake.dir = _up;  
  else if(keyCode == DOWN && mySnake.dir != _up)   mySnake.dir = _dwn;   
  else if(keyCode == LEFT && mySnake.dir != _rgt)  mySnake.dir = _lft; 
  else if(keyCode == RIGHT && mySnake.dir != _lft) mySnake.dir = _rgt;    
}// end function keyPressed

function grassDisplay (){ //  remplissage de l'arrière plan avec l'image "grass.png"
  for(i=0;i<bs_height/32;i++){
    for(j=0;j<bs_width/32;j++){
      image(imgGrass,i*32,j*32);
    }//end for j
  }// end for i
}// end function grassDisplay