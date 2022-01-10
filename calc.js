function check() {
  let rad = document.getElementById('radius');
  if (rad.value =="") {
      alert("※半径を入力してください。");
      return false;
  }else if (rad.value.match(/[^0-9]+/)) {
      alert("半角数字で入力してください。");
      return false;
  }   
      return true;
  } 