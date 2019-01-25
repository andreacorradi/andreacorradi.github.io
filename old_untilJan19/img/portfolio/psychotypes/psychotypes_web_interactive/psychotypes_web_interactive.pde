//PSYCHOTYPES
//personal project - infographic design
//Andrea Corradi 2012

//griglia composta da 20 righe e 20 colonne, singolo elemento 25px x 25px

int numcells = 68;
cell[] cells1 = new cell[numcells];
cell[] cells2 = new cell[numcells];
float[] data1 = new float[numcells];
float[] data2 = new float[numcells];

float Br1, BK1, BS1, Bg1, Gb1, GK1, GS1, Gy1, Yg1, YK1, YS1, Yr1, Ry1, RK1, RS1, Rb1, B1sum, G1sum, Y1sum, R1sum;
float Br2, BK2, BS2, Bg2, Gb2, GK2, GS2, Gy2, Yg2, YK2, YS2, Yr2, Ry2, RK2, RS2, Rb2, B2sum, G2sum, Y2sum, R2sum, Ref, Mot, Hel, Coo, mel, cho, san, phl;

int r=0;   //counter per scansione array di dati in uscita (display)

int scan = 20;
int[][] diagram_shape = {  {0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0},
                           {0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0},
                           {0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0},
                           {0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0},
                           {0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0},
                           {0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0},
                           {0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0},
                           {0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0},
                           {0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0},
                           {0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0},
                           {0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0},
                           {0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0},
                           {0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0},
                           {0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0},
                           {0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0},
                           {0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0},
                           {0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0},
                           {0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0},
                           {0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0},
                           {0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0}  };

PFont font;
//PFont font_bold;
int ratio = 1; //fattore di scala default = 1; prova con 5
int moltiplicatore = 1; 
PImage wheel;
boolean normalmode_toggle = true;
boolean differencemode_toggle = false;
boolean overlaymode_toggle = false;
boolean wheel_toggle = true;
boolean data1_toggle = true;
boolean data2_toggle = false;

boolean draw_cells = true;

int transparency = 128; //default 120; prova con 40
color rosso = color(191, 0, 0, transparency);
color blu = color(0, 55, 166, transparency);
color viola = color(111, 91, 147, transparency);
color verde = color(64, 191, 0, transparency);
color giallo = color(229, 229, 46, transparency);
color bianco = color(255, 255, 255, 255);
color light_grey = color(180, 180, 180, 255);
color text_color = color(100, 100, 100, 255);
color control_color = color(200, 200, 200, 255);

int valore;

float ratio_radius = 0.5;
int offset_center = 10;

int button_size = 14;
Button button_wheel, button_data1, button_data2, button_normalmode, button_differencemode, button_overlaymode, button_aggregatemode, button_senddata;
HScrollbar hs1, hs2;
HScrollbar[] hs_interactive;
int k = 0; //contatore slider interattivi
int m = 0; //contatore slider interattivi per calcolo size celle

boolean senddata = false;

float dimensione_celle;
float trasparenza_celle;

int spaziatura_texture = 5;

String[] descrizione;

int hcentergraph = 480;
int hdiff = 160;

float hum[] = { 0, 0, 0, 0 };
float psy[] = { 0, 0, 0, 0, 0, 0, 0, 0 };
float hum_data2;
float psy_data2;

String humour = "no data";
String personality = "no data";

boolean total_visited = false; // =true se almeno una scrollbar è stata toccata


/* --------------------------------------------------------- */
 

void setup() {
  
    size(960, 960 + hdiff);
    colorMode(RGB, 255, 255, 255, 255);
    background(bianco);
    noStroke();
    smooth();
    
    font = loadFont("img/portfolio/psychotypes/ArialMT-11.vlw");
    //font_bold = loadFont("http://www.andreacorradi.com/portfolio/wp-content/themes/andreacorradi/psychotypes_web_interactive/Arial-BoldMT-24.vlw");
    
    
    String[] lines1 = loadStrings("img/portfolio/psychotypes/andrea.txt");
    //String[] lines2 = loadStrings("http://www.andreacorradi.com/portfolio/wp-content/themes/andreacorradi/psychotypes_web/marco.txt");
    descrizione = loadStrings("img/portfolio/psychotypes/aggettivi_en.txt");
    
    
    for (int j = 0; j < numcells; j++){ //popolamento dell'array di dati1 in ingresso
          valore = int(lines1[j]); 
          if (int(valore) == 1){ moltiplicatore = ratio*4; }
          if (int(valore) == 2){ moltiplicatore = ratio*5; }
          if (int(valore) == 3){ moltiplicatore = ratio*6; }
          if (int(valore) == 4){ moltiplicatore = ratio*7; }
          if (int(valore) == 5){ moltiplicatore = ratio*8; } 
          data1[j] = moltiplicatore*valore;       
    }
    
    //if (int(lines2[0]) != 0){
      for (int j = 0; j < numcells; j++){ //popolamento dell'array di dati2 in ingresso 
          /*valore = int(lines2[j]);
          if (int(valore) == 1){ moltiplicatore = ratio*4; }
          if (int(valore) == 2){ moltiplicatore = ratio*5; }
          if (int(valore) == 3){ moltiplicatore = ratio*6; }
          if (int(valore) == 4){ moltiplicatore = ratio*7; }
          if (int(valore) == 5){ moltiplicatore = ratio*8; }
          data2[j] = moltiplicatore*valore;*/
          data2[j] = 0;
      }
    //}
    
    
    for (int i = 0; i < numcells; i++){ //popolamento dell'array delle cellule con i valori dell'array data1
        cells1[i] = new cell(1,1,data1[i],descrizione[i]);
    }
    
    for (int i = 0; i < numcells; i++){ //popolamento dell'array delle cellule con i valori dell'array data2
        cells2[i] = new cell(1,1,data2[i],descrizione[i]);
    }
    
    //DATA1 AGGREGATION
    Br1 = cells1[0].size1 + cells1[4].size1 + cells1[11].size1 + cells1[19].size1;
    BK1 = cells1[2].size1 + cells1[8].size1 + cells1[9].size1;
    BS1 = cells1[3].size1 + cells1[10].size1 + cells1[16].size1 + cells1[17].size1 + cells1[18].size1;
    Bg1 = cells1[24].size1 + cells1[25].size1 + cells1[26].size1 + cells1[27].size1;
    
    Gb1 = cells1[34].size1 + cells1[35].size1 + cells1[36].size1 + cells1[37].size1;
    GK1 = cells1[52].size1 + cells1[53].size1 + cells1[60].size1;
    GS1 = cells1[44].size1 + cells1[45].size1 + cells1[46].size1 + cells1[54].size1 + cells1[61].size1;
    Gy1 = cells1[47].size1 + cells1[55].size1 + cells1[62].size1 + cells1[66].size1;
    
    Yg1 = cells1[48].size1 + cells1[56].size1 + cells1[63].size1 + cells1[67].size1;
    YK1 = cells1[58].size1 + cells1[59].size1 + cells1[65].size1;
    YS1 = cells1[49].size1 + cells1[50].size1 + cells1[51].size1 + cells1[57].size1 + cells1[64].size1;
    Yr1 = cells1[40].size1 + cells1[41].size1 + cells1[42].size1 + cells1[43].size1;
    
    Ry1 = cells1[30].size1 + cells1[31].size1 + cells1[32].size1 + cells1[33].size1;
    RK1 = cells1[7].size1 + cells1[14].size1 + cells1[15].size1;
    RS1 = cells1[6].size1 + cells1[13].size1 + cells1[21].size1 + cells1[22].size1 + cells1[23].size1;
    Rb1 = cells1[1].size1 + cells1[5].size1 + cells1[12].size1 + cells1[20].size1;
    
    B1sum = BK1 + BS1 + cells1[28].size1;
    G1sum = GK1 + GS1 + cells1[38].size1;
    Y1sum = YK1 + YS1 + cells1[39].size1;
    R1sum = RK1 + RS1 + cells1[29].size1;
    
    
    wheel = loadImage("img/portfolio/psychotypes/wheel_eurostile.jpg");
    imageMode(CENTER);
    
    ellipseMode(CENTER);
    
    button_wheel = new Button(0, 0, 22, 125, 0, button_size, color(100), color(control_color), color(102), color(51), color(150), color(102));
    
    button_data1 = new Button(0, 0, width-85, 60, 0, button_size, color(100), color(rosso), color(rosso), color(rosso), color(rosso), color(102));
    button_data2 = new Button(0, 0, width-30, 60, 0, button_size, color(100), color(blu), color(102), color(51), color(blu), color(102));
    
    button_normalmode = new Button(0, 0, width-148, 125, 0, button_size, color(100), color(control_color), color(102), color(51), color(150), color(102));
    button_differencemode = new Button(0, 0, width-90, 125, 0, button_size, color(100), color(control_color), color(102), color(51), color(150), color(102));
    button_overlaymode = new Button(0, 0, width-30, 125, 0, button_size, color(100), color(control_color), color(102), color(51), color(150), color(102));
    
    button_aggregatemode = new Button(0, 0, width-30, 180, 0, button_size, color(100), color(control_color), color(102), color(51), color(150), color(102));
    
    button_senddata = new Button(0, 0, width-25, 1090, 0, 20, color(100), color(control_color), color(102), color(51), color(150), color(102));
    
    hs1 = new HScrollbar(15, 40, 100, 10, 10, 5, false); //posizione riposo fondo scala minimo: (15, 40, 100, 10, 5, 5, false)
    hs2 = new HScrollbar(15, 80, 100, 10, 50, 5, false);
    
    hs_interactive = new HScrollbar[numcells];
    for (int i = 0; i<10; i++){
      for( int j=0; j<7; j++ ){
        if (k<numcells){
          hs_interactive[k] = new HScrollbar(15 + i*95, 977 + 20*j, 75, 6, 3, 5, true);
          k++;
        }
      }
    }

  
}


/* --------------------------------------------------------- */


void draw() {
    
    background(bianco);
    if (wheel_toggle) { image(wheel, 480, 480); }
    smooth();
    
    // GUI
    fill(text_color);
    textFont(font, 10);
    text("CELL SIZE", 15, 30);
    hs1.display();
    hs1.update();
    fill(text_color);
    text("CELL TRANSPARENCY", 15, 70); 
    hs2.display();
    hs2.update();
    fill(text_color);
    text("SHOW/HIDE DIAGRAM", 15, 110);
    button_wheel.display();
    textAlign(RIGHT);
    fill(text_color);
    text("SHOW/HIDE DATA", width-15, 30);
    text("myself      yourself", width-15, 45);
    button_data1.display();
    button_data2.display();
    //stroke(100, 100, 100, 100);
    //strokeWeight(1);
    //line(width-180, 75, width-15, 75);
    //noStroke();
    fill(text_color);
    text("DISPLAY MODE", width-15, 95);
    text("normal      difference      overlay", width-15, 110);
    button_normalmode.display();
    button_differencemode.display();
    button_overlaymode.display();
    //stroke(100, 100, 100, 100);
    //strokeWeight(1);
    //line(width-180, 145, width-15, 145);
    //noStroke();
    fill(text_color);
    text("AGGREGATE MODE", width-15, 165);
    button_aggregatemode.display();
    textAlign(LEFT);
    
    if (!senddata){
      k = 0;
      stroke(0, 55, 166, 125);
      strokeWeight(1);
      line(1, 950, 1, height-5);
      line(1, height-5, width-1, height-5);
      line(width-1, 950, width-1, height-5);
      line(1, 950, 10, 950);
      line(300, 950, width-1, 950);
      noStroke();
      fill(0, 55, 166, 125);
      textFont(font, 18);
      text("INSERT YOUR DATA HERE", 15, 950);
      textFont(font, 10);
      fill(text_color);
      text("SEND", 890, 1100);
      for (int i = 0; i<10; i++){
        for( int j=0; j<7; j++ ){
          if (k<numcells){
            //fill(color(0, 55, 166, 125));
            if ( hs_interactive[k].visited == true ) fill(0, 55, 166, 125);
            else fill(125, 125, 125, 255);
            text(descrizione[k], 15 + i*95, 970 + 20*j);
            hs_interactive[k].display();
            hs_interactive[k].update();
            k++;
          }
        }
      }
        button_senddata.display();
    } else {
        textFont(font, 15);
        fill(text_color);
        text("Your humour is: ", 250, 1040);
        textFont(font, 36);
        //textFont(font_bold);
        text(humour, 250 + 105, 1040);
        textFont(font, 15);
        fill(text_color);
        text("Your psychological type is: ", 250, 1080);
        textFont(font, 36);
        //textFont(font_bold);
        text(personality, 250 + 175, 1080);
        stroke(0, 55, 166, 125);
        strokeWeight(1);
        noFill();
        rect(230, 1000, 480, 92);
        noStroke();
    }
    // end GUI
    
    
    // visited BUTTONS
    if (wheel_toggle) { 
      fill(text_color);
      ellipse(button_wheel.circleX, button_wheel.circleY, 10, 10); 
    }
    if (data1_toggle) { 
      fill(text_color);
      ellipse(button_data1.circleX, button_data1.circleY, 10, 10); 
    }
    if (data2_toggle) { 
      fill(text_color);
      ellipse(button_data2.circleX, button_data2.circleY, 10, 10); 
    }
    if (normalmode_toggle) { 
      fill(text_color);
      ellipse(button_normalmode.circleX, button_normalmode.circleY, 10, 10); 
    }
    if (differencemode_toggle) { 
      fill(text_color);
      ellipse(button_differencemode.circleX, button_differencemode.circleY, 10, 10); 
    }
    if (overlaymode_toggle) { 
      fill(text_color);
      ellipse(button_overlaymode.circleX, button_overlaymode.circleY, 10, 10); 
    }
    if (!draw_cells) { 
      fill(text_color);
      ellipse(button_aggregatemode.circleX, button_aggregatemode.circleY, 10, 10); 
    }
    // end visited BUTTONS
    
    
    dimensione_celle = (hs1.getPos()/20);
    trasparenza_celle = (int)(hs2.getPos());
    
    
    if (draw_cells){  //STANDARD DISPLAY MODE (CELLS)
        r=0;
        //beginRecord(PDF, "lifeview.pdf");
        for(int i=0; i<scan; i+=1) {
            for(int j=0; j<scan; j+=1) {
                if (diagram_shape[i][j] == 1){
                    cells1[r].x = (j*width/scan) + (width/scan)/2; 
                    cells1[r].y = (i*(height-hdiff)/scan) + (width/scan)/2; //(height-hdiff): l'altezza della finestra è 1050 anziché 960 per alloggiare gli slider interactive
                    cells1[r].display(r);
                    r++;
                }
            }
         }
         //endRecord();
    } else {             //AGGREGATE DISPLAY MODE (CELL UNION)
        //fill(blu);
        //if (data1_toggle) { ellipse(375 - BK1 + Br1 + offset_center, 375 - BK1 + Bg1 + offset_center, (B1sum + Bg1 + Br1)*ratio_radius, (B1sum + Bg1 + Br1)*ratio_radius); }
        //if (data2_toggle) { ellipse(375 - BK2 + Br2 + offset_center, 375 - BK2 + Bg2 + offset_center, (B2sum + Bg2 + Br2)*ratio_radius, (B2sum + Bg2 + Br2)*ratio_radius); }
        stroke(blu);  
        if (data1_toggle) { circle_texture(375 - BK1 + Br1 + offset_center, 375 - BK1 + Bg1 + offset_center, ((B1sum + Bg1 + Br1)*ratio_radius)/2, spaziatura_texture, "vert"); }
        if (data2_toggle) { circle_texture(375 - BK2 + Br2 + offset_center, 375 - BK2 + Bg2 + offset_center, ((B2sum + Bg2 + Br2)*ratio_radius)/2, spaziatura_texture, "hor"); }
        
        //fill(verde);
        //if (data1_toggle) { ellipse(375 - GK1 + Gy1 + offset_center, 625 + GK1 - Gb1 - offset_center, (G1sum + Gb1 + Gy1)*ratio_radius, (G1sum + Gb1 + Gy1)*ratio_radius); }
        //if (data2_toggle) { ellipse(375 - GK2 + Gy2 + offset_center, 625 + GK2 - Gb2 - offset_center, (G2sum + Gb2 + Gy2)*ratio_radius, (G2sum + Gb2 + Gy2)*ratio_radius); }
        stroke(verde);
        if (data1_toggle) { circle_texture(375 - GK1 + Gy1 + offset_center, 625 + GK1 - Gb1 - offset_center, ((G1sum + Gb1 + Gy1)*ratio_radius)/2, spaziatura_texture, "vert"); }
        if (data2_toggle) { circle_texture(375 - GK2 + Gy2 + offset_center, 625 + GK2 - Gb2 - offset_center, ((G2sum + Gb2 + Gy2)*ratio_radius)/2, spaziatura_texture, "hor"); }
        
        //fill(giallo);
        //if (data1_toggle) { ellipse(625 + YK1 - Yg1 - offset_center, 625 + YK1 - Yr1 - offset_center, (Y1sum + Yg1 + Yr1)*ratio_radius, (Y1sum + Yg1 + Yr1)*ratio_radius); }
        //if (data2_toggle) { ellipse(625 + YK2 - Yg2 - offset_center, 625 + YK2 - Yr2 - offset_center, (Y2sum + Yg2 + Yr2)*ratio_radius, (Y2sum + Yg2 + Yr2)*ratio_radius); }
        stroke(229, 229, 46, 255);
        if (data1_toggle) { circle_texture(625 + YK1 - Yg1 - offset_center, 625 + YK1 - Yr1 - offset_center, ((Y1sum + Yg1 + Yr1)*ratio_radius)/2, spaziatura_texture, "vert"); }
        if (data2_toggle) { circle_texture(625 + YK2 - Yg2 - offset_center, 625 + YK2 - Yr2 - offset_center, ((Y2sum + Yg2 + Yr2)*ratio_radius)/2, spaziatura_texture, "hor"); }
        
        //fill(rosso);
        //if (data1_toggle) { ellipse(625 + RK1 - Rb1 - offset_center, 375 - RK1 + Ry1 + offset_center, (R1sum + Ry1 + Rb1)*ratio_radius, (R1sum + Ry1 + Rb1)*ratio_radius); }
        //if (data2_toggle) { ellipse(625 + RK2 - Rb2 - offset_center, 375 - RK2 + Ry2 + offset_center, (R2sum + Ry2 + Rb2)*ratio_radius, (R2sum + Ry2 + Rb2)*ratio_radius); }
        stroke(rosso);
        if (data1_toggle) { circle_texture(625 + RK1 - Rb1 - offset_center, 375 - RK1 + Ry1 + offset_center, ((R1sum + Ry1 + Rb1)*ratio_radius)/2, spaziatura_texture, "vert"); }
        if (data2_toggle) { circle_texture(625 + RK2 - Rb2 - offset_center, 375 - RK2 + Ry2 + offset_center, ((R2sum + Ry2 + Rb2)*ratio_radius)/2, spaziatura_texture, "hor"); }
        
        noStroke();
    }
    
}

void mousePressed() {
  
  if(button_wheel.circleOver) {
    wheel_toggle = !wheel_toggle; 
  }
  if(button_data1.circleOver) {
    data1_toggle = !data1_toggle;
  }
  if(button_data2.circleOver) {
    data2_toggle = !data2_toggle;
  }
  if(button_normalmode.circleOver) {
    normalmode_toggle = true;
    differencemode_toggle = false;
    overlaymode_toggle = false;
  }
  if(button_differencemode.circleOver) {
    normalmode_toggle = false;
    differencemode_toggle = true;
    overlaymode_toggle = false;
  }
  if(button_overlaymode.circleOver) {
    normalmode_toggle = false;
    differencemode_toggle = false;
    overlaymode_toggle = true;
  }
  if(button_aggregatemode.circleOver) {
    draw_cells = !draw_cells;
  }
  
  if(button_senddata.circleOver) {
      //button_senddata.currentColor = button_senddata.circleColor;
      senddata = true;
      for (int i = 0; i<10; i++){
        for( int j=0; j<7; j++ ){
            if (m<numcells){
              int valore_aux = int(hs_interactive[m].getPos());
              int slider_span = 95;
              int slider_offset = 15;
              if ( valore_aux == slider_offset + i*slider_span ) { moltiplicatore = ratio*4; valore = 1; data2[m] = moltiplicatore*valore; cells2[m].size1 = moltiplicatore*valore; }
              if ( valore_aux >= slider_offset + i*slider_span && valore_aux < slider_offset*2 + i*slider_span ) { moltiplicatore = ratio*4; valore = 1; data2[m] = moltiplicatore*valore; cells2[m].size1 = moltiplicatore*valore; }
              if ( valore_aux >= slider_offset*2 + i*slider_span && valore_aux < slider_offset*3 + i*slider_span ) { moltiplicatore = ratio*5; valore = 2; data2[m] = moltiplicatore*valore; cells2[m].size1 = moltiplicatore*valore; }
              if ( valore_aux >= slider_offset*3 + i*slider_span && valore_aux < slider_offset*4 + i*slider_span ) { moltiplicatore = ratio*6; valore = 3; data2[m] = moltiplicatore*valore; cells2[m].size1 = moltiplicatore*valore; }
              if ( valore_aux >= slider_offset*4 + i*slider_span && valore_aux < slider_offset*5 + i*slider_span ) { moltiplicatore = ratio*7; valore = 4; data2[m] = moltiplicatore*valore; cells2[m].size1 = moltiplicatore*valore; }
              if ( valore_aux >= slider_offset*5 + i*slider_span && valore_aux <= slider_offset*6 + i*slider_span ) { moltiplicatore = ratio*8; valore = 5; data2[m] = moltiplicatore*valore; cells2[m].size1 = moltiplicatore*valore; }
              m++;
              //println(valore_aux);
            }
        }
      } 
    
    for (int i = 0; i<numcells; i++){
        if ( hs_interactive[i].visited == true ) total_visited = true;
    }
    
    if ( total_visited == true ){  
      
        //DATA2 AGGREGATION
        Br2 = cells2[0].size1 + cells2[4].size1 + cells2[11].size1 + cells2[19].size1;
        BK2 = cells2[2].size1 + cells2[8].size1 + cells2[9].size1;
        BS2 = cells2[3].size1 + cells2[10].size1 + cells2[16].size1 + cells2[17].size1 + cells2[18].size1;
        Bg2 = cells2[24].size1 + cells2[25].size1 + cells2[26].size1 + cells2[27].size1;
        
        Gb2 = cells2[34].size1 + cells2[35].size1 + cells2[36].size1 + cells2[37].size1;
        GK2 = cells2[52].size1 + cells2[53].size1 + cells2[60].size1;
        GS2 = cells2[44].size1 + cells2[45].size1 + cells2[46].size1 + cells2[54].size1 + cells2[61].size1;
        Gy2 = cells2[47].size1 + cells2[55].size1 + cells2[62].size1 + cells2[66].size1;
        
        Yg2 = cells2[48].size1 + cells2[56].size1 + cells2[63].size1 + cells2[67].size1;
        YK2 = cells2[58].size1 + cells2[59].size1 + cells2[65].size1;
        YS2 = cells2[49].size1 + cells2[50].size1 + cells2[51].size1 + cells2[57].size1 + cells2[64].size1;
        Yr2 = cells2[40].size1 + cells2[41].size1 + cells2[42].size1 + cells2[43].size1;
        
        Ry2 = cells2[30].size1 + cells2[31].size1 + cells2[32].size1 + cells2[33].size1;
        RK2 = cells2[7].size1 + cells2[14].size1 + cells2[15].size1;
        RS2 = cells2[6].size1 + cells2[13].size1 + cells2[21].size1 + cells2[22].size1 + cells2[23].size1;
        Rb2 = cells2[1].size1 + cells2[5].size1 + cells2[12].size1 + cells2[20].size1;
        
        B2sum = BK2 + BS2 + cells2[28].size1; //observer
        G2sum = GK2 + GS2 + cells2[38].size1; //supporter
        Y2sum = YK2 + YS2 + cells2[39].size1; //inspirer
        R2sum = RK2 + RS2 + cells2[29].size1; //director
        
        Ref = Br2 + Rb2;
        Mot = Ry2 + Yr2;
        Hel = Yg2 + Gy2;
        Coo = Gb2 + Bg2;
        
        mel = B2sum + Br2 + Bg2;
        cho = R2sum + Rb2 + Ry2;
        san = Y2sum + Yr2 + Yg2;
        phl = G2sum + Gy2 + Gb2;
        
        hum[0] = mel;
        hum[1] = cho;
        hum[2] = san;
        hum[3] = phl;
        
        psy[0] = Ref;
        psy[1] = R2sum;
        psy[2] = Mot;
        psy[3] = Y2sum;
        psy[4] = Hel;
        psy[5] = G2sum;
        psy[6] = Coo;
        psy[7] = B2sum;
        
        hum_data2 = max(hum);
        psy_data2 = max(psy);
        
        if ( hum_data2 == mel ) { humour = "MELANCHOLIC"; }
        else if ( hum_data2 == cho ) { humour = "CHOLERIC"; }
        else if ( hum_data2 == san ) { humour = "SANGUINE"; }
        else { humour = "PHLEGMATIC"; }
        
        if ( psy_data2 == Ref ) { personality = "REFORMER"; }
        else if ( psy_data2 == R2sum ) { personality = "DIRECTOR"; }
        else if ( psy_data2 == Mot ) { personality = "MOTIVATOR"; }
        else if ( psy_data2 == Y2sum ) { personality = "INSPIRER"; }
        else if ( psy_data2 == Hel ) { personality = "HELPER"; }
        else if ( psy_data2 == G2sum ) { personality = "SUPPORTER"; }
        else if ( psy_data2 == Coo ) { personality = "COORDINATOR"; }
        else { personality = "OBSERVER"; }
        
        data2_toggle = !data2_toggle;
        data1_toggle = !data1_toggle;
        button_senddata.circleOver = false;
    }

  }
  
}


/* --------------------------------------------------------- */

void circle_texture (float xcentro, float ycentro, float raggio, int spaziatura, String verso) {
  for (int i = 1; i*spaziatura < 2*raggio; i++ ) {
    float segmento = sqrt(2*raggio*spaziatura*i - sq(spaziatura*i));
    if (verso == "vert") { line(xcentro - raggio + spaziatura*i, ycentro + segmento, xcentro - raggio + spaziatura*i, ycentro - segmento); }
    if (verso == "hor"){ line(xcentro - segmento, ycentro - raggio + spaziatura*i, xcentro + segmento, ycentro - raggio + spaziatura*i); }
  }
}

/*
void keyPressed() {
  if (key=='s' || key=='S') saveFrame(timestamp()+"_##.png");
}

// timestamp
String timestamp() {
  Calendar now = Calendar.getInstance();
  return String.format("%1$ty%1$tm%1$td_%1$tH%1$tM%1$tS", now);
}*/

/* --------------------------------------------------------- */


//CLASSE CELL
class cell {
  int x, y;
  float size1;
  String qualita;
  
  cell(int xpos, int ypos, float dia1, String qual){
    x = xpos;
    y = ypos;
    size1 = dia1;
    qualita = qual;
  }
  
  void display(int k){
    
    int overcell_diameter = 0;  // variabile d'appoggio hover per didascalie
    int radius_text = 330;  // distanza dal centro delle descrizioni delle singole celle
    color didacolor; // colore didascalie e linee
    
    if (draw_cells){          //standard (celle separate) display mode
    
        noStroke();
        
        if (data1_toggle){    //disegna data1
          //fill(rosso); 
          fill(191, 0, 0, trasparenza_celle);
          if (normalmode_toggle) { ellipse(x, y, cells1[k].size1*dimensione_celle, cells1[k].size1*dimensione_celle); } //disegna normal mode
          else if (differencemode_toggle) {
            if (cells1[k].size1 > cells2[k].size1) {
              ellipse(x, y, (cells1[k].size1-cells2[k].size1)*dimensione_celle, (cells1[k].size1-cells2[k].size1)*dimensione_celle); //disegna difference mode
            }
          } else {     //disegna overlay mode
            if (!data2_toggle){ //per evitare che le celle vengano disegnate due volte
              if (cells2[k].size1 >= cells1[k].size1){
                fill(111, 91, 147, trasparenza_celle*2); 
                ellipse(x, y, cells1[k].size1*dimensione_celle, cells1[k].size1*dimensione_celle);     
              } else { 
                fill(111, 91, 147, trasparenza_celle*2); 
                ellipse(x, y, cells2[k].size1*dimensione_celle, cells2[k].size1*dimensione_celle);   
              }
            }
          }
        }
        
        if (data2_toggle){    //disegna data2
          //fill(blu);
          fill(0, 55, 166, trasparenza_celle); 
          if (normalmode_toggle) { ellipse(x, y, cells2[k].size1*dimensione_celle, cells2[k].size1*dimensione_celle); } //disegna normal mode
          else if (differencemode_toggle) {
            if (cells2[k].size1 > cells1[k].size1) {
              ellipse(x, y, (cells2[k].size1-cells1[k].size1)*dimensione_celle, (cells2[k].size1-cells1[k].size1)*dimensione_celle); //disegna difference mode
            }
          } else {     //disegna overlay mode
            if (cells2[k].size1 >= cells1[k].size1){
              fill(111, 91, 147, trasparenza_celle*2);
              ellipse(x, y, cells1[k].size1*dimensione_celle, cells1[k].size1*dimensione_celle);
            } else { 
              fill(111, 91, 147, trasparenza_celle*2);
              ellipse(x, y, cells2[k].size1*dimensione_celle, cells2[k].size1*dimensione_celle);
            }
          }
        }
        
        if (data1_toggle && !data2_toggle) { overcell_diameter = int(cells1[k].size1); }
        else if (data2_toggle && !data1_toggle) { overcell_diameter = int(cells2[k].size1); }
        else { overcell_diameter = max(int(cells1[k].size1),int(cells2[k].size1)); }
        if ( overCell(x, y, overcell_diameter) ) {  //disegna didascalie
          
          float distanza = sqrt(sq( width/2 - x ) + sq( (hcentergraph) - y ));
          
          if (data1_toggle && !data2_toggle && !overlaymode_toggle) { didacolor = rosso; }
          else if (!data1_toggle && data2_toggle && !overlaymode_toggle) { didacolor = blu; }
          else { didacolor = color(111, 91, 147, 255); }
          
          stroke(didacolor);
          textFont(font, 11);
          if (x > width/2 && y < hcentergraph){ // I quad
            line( x, y, int(width/2 + radius_text*(abs(x - width/2)/distanza)), int(hcentergraph - radius_text*(abs(y - hcentergraph)/distanza)) ); 
            fill(didacolor);
            text(cells1[k].qualita, int(width/2 + radius_text*(abs(x - width/2)/distanza))-20, int(hcentergraph - radius_text*(abs(y - hcentergraph)/distanza))-10);
          } else if (x > width/2 && y > hcentergraph) { // II quad
            line( x, y, int(width/2 + radius_text*(abs(x - width/2)/distanza)), int(hcentergraph + radius_text*(abs(y - hcentergraph)/distanza)) );
            fill(didacolor);
            text(cells1[k].qualita, int(width/2 + radius_text*(abs(x - width/2)/distanza))-20, int(hcentergraph + radius_text*(abs(y - hcentergraph)/distanza))+20 );
          } else if (x < width/2 && y > hcentergraph) { // III quad
            line( x, y, int(width/2 - radius_text*(abs(x - width/2)/distanza)), int(hcentergraph + radius_text*(abs(y - hcentergraph)/distanza)) );
            fill(didacolor);
            text(cells1[k].qualita, int(width/2 - radius_text*(abs(x - width/2)/distanza))-40, int(hcentergraph + radius_text*(abs(y - hcentergraph)/distanza))+20);
          } else { // IV quad
            line( x, y, int(width/2 - radius_text*(abs(x - width/2)/distanza)), int(hcentergraph - radius_text*(abs(y - hcentergraph)/distanza)) );
            fill(didacolor);
            text(cells1[k].qualita, int(width/2 - radius_text*(abs(x - width/2)/distanza))-40, int(hcentergraph - radius_text*(abs(y - hcentergraph)/distanza))-10);
          }
          noStroke();
          
        } // fine disegna didascalie     
        
    } // (fine if draw_cells)
    
  } //END display

  
  
  boolean overCell(int x, int y, int diametro) {  //per display didascalie
      float disX = x - mouseX;
      float disY = y - mouseY;
      if(int(sqrt(sq(disX) + sq(disY))) < diametro/2 ) {
        return true;
      } else {
        return false;
      }
    }


  
} //END cell


/* --------------------------------------------------------- */


//CONTROLS//

//BUTTON//
class Button {
  
    int rectX, rectY;
    int circleX, circleY;
    int rectSize;
    int circleSize;
    color rectColor, circleColor, baseColor;
    color rectHighlight, circleHighlight;
    color currentColor;
    boolean over = false;
    boolean pressed = false;
    boolean rectOver = false;
    boolean circleOver = false;
    
    Button(int rxp, int ryp, int cxp, int cyp, int rs, int cs, color rcolor, color ccolor, color bcolor, color rhigh, color chigh, color ccurrent) {
      rectX = rxp;
      rectY = ryp;
      circleX = cxp;
      circleY = cyp;
      rectSize = rs;
      circleSize = cs;
      rectColor = rcolor;
      circleColor = ccolor;
      baseColor = bcolor;
      rectHighlight = rhigh;
      circleHighlight = chigh;
      currentColor = ccurrent;
    }
    
    void update(int x, int y) {
      if( overCircle(circleX, circleY, circleSize) ) {
        circleOver = true;
        rectOver = false;
      } else if ( overRect(rectX, rectY, rectSize, rectSize) ) {
        rectOver = true;
        circleOver = false;
      } else {
        circleOver = rectOver = false;
      }
    }
   
    
    void display() {
      update(mouseX, mouseY);
      
      if(rectOver) {
        fill(rectHighlight);
      } else {
        fill(rectColor);
      }
      noStroke();
      rect(rectX, rectY, rectSize, rectSize);
      
      if(circleOver) {
        fill(circleHighlight);
      } else {
        fill(circleColor);
      }
      noStroke();
      ellipse(circleX, circleY, circleSize, circleSize);
    }
    
    
    boolean overRect(int x, int y, int width, int height)  {
      if (mouseX >= x && mouseX <= x+width && 
          mouseY >= y && mouseY <= y+height) {
        return true;
      } else {
        return false;
      }
    }
    
    boolean overCircle(int x, int y, int diameter) {
      float disX = x - mouseX;
      float disY = y - mouseY;
      if(sqrt(sq(disX) + sq(disY)) < diameter/2 ) {
        return true;
      } else {
        return false;
      }
    }
  
}



//SCROLLBAR//
class HScrollbar
{
  int swidth, sheight;    // width and height of bar
  int xpos, ypos;         // x and y position of bar
  int offset;             // x default position of bar
  float spos, newspos;    // x position of slider
  int sposMin, sposMax;   // max and min values of slider
  int loose;              // how loose/heavy
  boolean over_slider;           // is the mouse over the slider?
  boolean locked;
  float ratio;
  boolean blu;
  boolean visited = false;

  HScrollbar (int xp, int yp, int sw, int sh, int off, int l, boolean colore) {
    offset = off;
    swidth = sw;
    sheight = sh;
    int widthtoheight = sw - sh;
    ratio = (float)sw / (float)widthtoheight;
    xpos = xp;
    ypos = yp-sheight/2;
    spos = xpos + offset - sheight/2;
    newspos = spos;
    sposMin = xpos;
    sposMax = xpos + swidth - sheight;
    loose = l;
    blu = colore; 
  }

  void update() {
    if(over()) {
      over_slider = true;
    } else {
      over_slider = false;
    }
    if(mousePressed && over_slider) {
      locked = true;
      if ( blu == true ) visited = true;
    }
    if(!mousePressed) {
      locked = false;
    }
    if(locked) {
      newspos = constrain(mouseX-sheight/2, sposMin, sposMax);
    }
    if(abs(newspos - spos) > 1) {
      spos = spos + (newspos-spos)/loose;
    }
  }

  int constrain(int val, int minv, int maxv) {
    return min(max(val, minv), maxv);
  }

  boolean over() {
    if(mouseX > xpos && mouseX < xpos+swidth &&
    mouseY > ypos && mouseY < ypos+sheight) {
      return true;
    } else {
      return false;
    }
  }

  void display() {
    if ( visited == true ) fill(0, 55, 166, 125);
    else fill(control_color);
    rect(xpos, ypos, swidth, sheight);
    if(over_slider || locked) {
      if ( visited == true ) fill(0, 55, 166, 255);
      else fill(0, 0, 0);
    } else {
      if ( visited == true ) fill(0, 0, 0, 255);
      else fill(102, 102, 102);
    }
    rect(spos, ypos, sheight, sheight);
  }

  float getPos() {
    // Convert spos to be values between
    // 0 and the total width of the scrollbar
    //return spos * ratio;
    return spos;
  }
}
