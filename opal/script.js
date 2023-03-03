const input1 = document.getElementById("input-support1");
const input2 = document.getElementById("input-support2");
const input3 = document.getElementById("input-support3");
const input4 = document.getElementById("input-support4");
const input5 = document.getElementById("input-support5");
const limit = 4; 



input1.addEventListener("input", updateTotal);
input2.addEventListener("input", updateTotal);
input3.addEventListener("input", updateTotal);
input4.addEventListener("input", updateTotal);
input5.addEventListener("input", updateTotal);


function updateTotal() {
    
    const value1 = Number(input1.value);
    const value2 = Number(input2.value);
    const value3 = Number(input3.value);
    const value4 = Number(input4.value);
    const value5 = Number(input5.value);
  
    
  const total = value1 + value2 + value3 + value4 + value5;


  function resetForm() {
    document.getElementById("form-opal").reset();
}


  if (total > limit) {
    alert("Veuillez selectionner 4 supports maximum !");
    resetForm();
  }
}

//********************************************************************************** */


function test() {

console.log();

}







