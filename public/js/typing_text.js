const hightlight = document.getElementById("hightlight");
// console.log(hightlight);
 
const messages = [
  "Học web đi làm",
  "Kèm cặp qua nhóm kín",
  "Tạo dự án thực tế",
  "Lương 8 đến 30tr/tháng",
  "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam fuga, optio suscipit illum autem eligendi molestias incidunt rem et tempora quo officia nobis? Provident error porro libero ipsum in rem maiores sunt sed ratione cum eos, dicta optio id asperiores officiis adipisci dolorem nostrum architecto? Excepturi eos cum consectetur reiciendis. Fuga error, est impedit, saepe odit at nemo maiores illo, id iste temporibus enim eveniet adipisci sapiente odio eum quam sunt totam! Nihil omnis eveniet, asperiores, accusamus quas, repudiandae totam qui beatae eligendi voluptates iusto? Rem laboriosam, voluptas ipsa mollitia quisquam aliquam aspernatur, porro ipsam iure ea magni corrupti odio!"
];
 
let messLength = messages.length;
 
// console.log(messLength);
let messIndex = 0;
let charIndex = 0;
 
function typing(messIndex) {
  let currentMess = messages[messIndex];
  if (charIndex < currentMess.length) {
    let currentChar = currentMess.substring(0, charIndex + 1);
    // console.log(currentChar);
    hightlight.textContent = currentChar;
    document.title = currentChar;
    charIndex ++;
  }else{
    if(messIndex < messLength - 1){
        messIndex ++;
    }else{
        messIndex = 0;
    }
    charIndex = 0;
  }
//   console.log(currentMess);
  setTimeout(typing, 150, messIndex);
}
 
typing(0);