let count = 0;
function updateCount(){
count+=1;
document.getElementById('number').innerHTML=count;
setTimeout(updateCount,1000)
}
