// const copyText = document.querySelector("#copyMe");
// const showText = document.querySelector("#textShow");

// const copyMeOnClipboard = () => {
//   copyText.select();
//   copyText.setSelectionRange(0, 99999); //for mobile phone
//   document.execCommand("copy");
//   showText.innerHTML = `${copyText.value} is copied`    
//   setTimeout(() => {
//   showText.innerHTML = ''    
//   }, 1000)
// }

function copyMeOnClipboard() {
  // Get the text field
  var copyText = document.getElementById("copyMe");
  const showText = document.querySelector("#textShow");

  // Select the text field
  copyText.select();
  copyText.setSelectionRange(0, 99999); // For mobile devices

   // Copy the text inside the text field
  navigator.clipboard.writeText(copyText.value);

  // Alert the copied text
  showText.innerHTML = `${copyText.value} is copied` 
  showText.innerHTML = `${copyText.value} is copied`    
  setTimeout(() => {
  showText.innerHTML = ''    
  }, 1000)
}