function filter(ambito)
{
    var municipales=document.getElementsByClassName('municipal');
    var estatales=document.getElementsByClassName('estatal');
 
    if (ambito === 'estatales') {
        for (var i=0;i<estatales.length;i+=1){
            estatales[i].style.display = 'block';
        }
        for (var i=0;i<municipales.length;i+=1){
            municipales[i].style.display = 'none';
        }   
    }
    if(ambito === 'municipales'){
        for (var i=0;i<municipales.length;i+=1){
            municipales[i].style.display = 'block';
        }
        for (var i=0;i<estatales.length;i+=1){
            estatales[i].style.display = 'none';
        }   
    
    }
    if(ambito === 'all')
    {
        for (var i=0;i<estatales.length;i+=1){
            estatales[i].style.display = 'block';
        }
        for (var i=0;i<municipales.length;i+=1){
            municipales[i].style.display = 'block';
        }   
    }   
}

/*function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }*/