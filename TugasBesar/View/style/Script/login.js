
  // label textBox animation function
  function checkLabel(labelID,input){
    let label = document.getElementById(labelID);
    input = input;
    if(input.value == ""){
      if(!label.classList.contains('label-active')){
        label.classList.add('label-active');
      }else{
        label.classList.remove('label-active');
      }
    }
  }
