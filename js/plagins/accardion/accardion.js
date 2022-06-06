function slide(link) {
  
    const down = function (callback, time) {
        const subMenu = link.nextElementSibling;
        const height = subMenu.clientHeight; 
        const part = height / 100;
      
        const paddingTop = parseInt(window.getComputedStyle(subMenu, null).getPropertyValue('padding-top'));
        const paddingBottom = parseInt(window.getComputedStyle(subMenu, null).getPropertyValue('padding-bottom'));
        const paddingTopPart = parseInt(paddingTop) / 50;
        const paddingBottomPart = parseInt(paddingBottom) / 30;
      
      (function innerFunc(i, t, b) {
  
        subMenu.style.height = `${i}px`;
        
        i += part;
        
        if(t < paddingTop) {
        
          t += paddingTopPart;
          subMenu.style.paddingTop = `${t}px`
            
        } else if(b < paddingBottom) {
  
          b += paddingBottomPart;
          subMenu.style.paddingBottom = `${b}px`
        }
        
        if(i < height) { 
        
          setTimeout(function() {
              
              innerFunc(i, t, b);
              
          }, time / 100);
            
        } else { 
            
          subMenu.removeAttribute('style');
          callback();
        }
          
      })(0, 0, 0);
    },
    
    up = function (callback, time) {
          
      const subMenu = link.nextElementSibling;
      var height = subMenu.clientHeight; 
      var part = subMenu.clientHeight / 100;
      var paddingTop = parseInt(window.getComputedStyle(subMenu).paddingTop);
      var paddingBottom = parseInt(window.getComputedStyle(subMenu).paddingBottom);
      var paddingTopPart = parseInt(paddingTop) / 30;
      var paddingBottomPart = parseInt(paddingBottom) / 50;
  
      (function innerFunc(i, t, b) {

        subMenu.style.height = `${i}px`
        i -= part;
        i = i.toFixed(2);
  
        if(b > 0) {
            
          b -= paddingBottomPart;
          b = b.toFixed(1);                
          subMenu.style.paddingBottom = `${b}px`
            
        } else if(t > 0) {
            
          t -= paddingTopPart;
          t = t.toFixed(1); 
          subMenu.style.paddingTop = `${t}px`
        }
        
        if(i > 0) { 
        
          setTimeout(function() {
              
              innerFunc(i, t, b);
              
          }, time / 100);
            
        } else {
            
          subMenu.removeAttribute('style');
          callback(); 
        }
          
      })(height, paddingTop, paddingBottom);
    }
        
    return {
      down: down,
      up: up
    }
  } 
      
  const accordion = (function() {
  
    const menu = document.querySelectorAll('.accordion');
    const activeClass = 'accordion__link_active';
    const arr = [];
    const timer = 0;
      
      for(let i = 0; i < menu.length; i++) {
  
          for(let p = 0; p < menu[i].children.length; p++) {
  
              var link = menu[i].children[p].firstElementChild;
              
              if(link.classList.contains(activeClass)) {
                  arr[i] = link;
              }
          }
      }
         
      function accordionInner(i) {
        var clicked = false;
        
        menu[i].addEventListener('click', function(e) {
  
          if(e.target.tagName === 'A' && !clicked) {
            clicked = true;
            if(e.target.classList.contains(activeClass)) {
              slide(e.target).up(function() {
        
                clicked = false;
                
                e.target.classList.remove(activeClass);
                              
              }, timer);
                
            } else {
  
              if(arr.length > 0) {
                  
                slide(arr[i-1]).up(function() {
                    
                  arr[i-1].classList.remove(activeClass);
                  
                  arr[i-1] = e.target;  
                }, timer);
              }
  
              e.target.classList.add(activeClass);
              
              slide(e.target).down(function() {
                
                clicked = false;
                
                arr[i-1] = e.target;
                              
              }, timer);
            }
          }
        });
        
        i++;
        
        if(i < menu.length) { accordionInner(i); }
          
      } accordionInner(0);
  })();