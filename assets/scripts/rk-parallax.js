(function () {
  "use strict";
  
  var ParallaxClass = function() {
    var bucket = document.querySelector(".parallax");
    var doc = document.documentElement;
    var oldScroll = 0;
    var keywords = ["agresja", "lęk", "mobbing", "uzależnienie", "złość", "rozstanie", "depresja", "DDA", "nerwica", "bezsenność", "sens życia", "mobbing", "anoreksja", "bulimia", "rozstanie", "stres", "żałoba", "schizofrenia", "kim jestem ?", "mobbing", "współuzależnienie", "cierpienie", "sens życia", "smutek", "samotność", "fobia", "kryzys", "rozwód"]
    var database = [];
    
    var bindEvents = function() {
      window.addEventListener("scroll", onScroll.bind(this));  
    }
     
    var onScroll = function() {
      var currentScroll = getYScrollPos();
      doAnimation(currentScroll - oldScroll);
      oldScroll =  currentScroll;
    }
    
    var getYScrollPos = function() {
        var top = parseInt((window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0));
        return top;
    } 
/*
    ANIMATION
*/
    
    var doAnimation = function(_step) {
      for (var i=0; i<database.length; i++) {
        database[i]['posY'] = database[i]['posY'] - 
          (_step / 30 * database[i]['speed'] * database[i]['speed']);
        // database[i]['element'].style.top = database[i]['posY'] + 'px';
       jQuery(database[i]['element']).stop(true);
        jQuery(database[i]['element']).animate({ top: database[i]['posY'] }, {duration: 1200}, function() {});
      }
    }
    
/*
    INIT
*/
    
    this.init = function() {  
      // initiate database object
      for (var i=0; i < keywords.length; i++) {
        database.push(
          { 'word': keywords[i] }
        );
      }
      // calc content  
      for (var i=0; i<database.length; i++) {
        var para = document.createElement("p");
        var node = document.createTextNode(database[i]['word']);
        
        database[i]['element'] = para;
        database[i]['speed'] = parseInt(Math.random() * 3) + 2;
       
        para.style.fontSize = database[i]['speed'] - 0.8 + 'em';
        para.style.letterSpacing = database[i]['speed']*1.5 + 'px';
        
        // var shadow, color;
        // switch (database[i]['speed']) {
        //   case 2:
        //     shadow = 3; break;
        //   case 3:
        //     shadow = 5; break;
        //   default:
        //     shadow = 3; break;
        // }

        // color = 30;
        
        // para.style.color = "rgb("+color+","+color+","+color+")";
        // // para.style.textShadow = "0px 0px 3px #fff";
        // para.style.textShadow = "0px 0px " + shadow + "px #eee";
        para.appendChild(node);
        bucket.appendChild(para);
      }
      
      scatterElements();
      bindEvents(); 
    }
    
/*
    SCATTER ELEMENTS
*/    
    var scatterElements = function() {      

      var previousElementHeight = 30;
      var columnWidth = parseInt(bucket.offsetWidth/3);
      var column = 0;
      for (var i=0; i<database.length; i++) {
        var newPosX = parseInt(column*columnWidth + (bucket.offsetWidth/3 - database[i]['element'].offsetWidth)  * Math.random());

        database[i]['posX'] = newPosX;
        database[i]['posY'] = previousElementHeight + 50;
        previousElementHeight += database[i]['element'].offsetHeight;
        database[i]['element'].style.left = database[i]['posX'] + 'px';
        database[i]['element'].style.top = database[i]['posY'] + 'px';
        
        if ( ( i>0 ) && ( ( i % parseInt(database.length / 3) ) == 0)) {
          column = column + 1;
          previousElementHeight = 0;
        }
      }
    }
  }
  
  var myParallax = new ParallaxClass();
  myParallax.init();
  
}) ();