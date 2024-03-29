let typeSwitch = document.getElementById("productType");


let toggle = function (type) {
    all = document.querySelectorAll(".toggle");
    all.forEach(element => {
        element.setAttribute('hidden', true);
        element.value = '';
        element.removeAttribute('name');
        element.removeAttribute('required');
    });
    fields = document.querySelectorAll(`.${type}`);
    fields.forEach(element => {
        element.removeAttribute('hidden');
        element.setAttribute('name', 'spec');
        element.setAttribute('required', 'true');
    });
}

let setSpec = function() {
  let length = document.getElementById("length").value;
  let width = document.getElementById("width").value;
  let height = document.getElementById("height").value;
  document.getElementById("spec").value = `${length} x ${width} x ${height}`;
}

const prodTypes = {
  dvd: `<label for="size">Size (MB) *</label>
          <input name="spec" required 
          type="number" id="size" 
          min="1" max="1000000000" 
          autocomplete="off"
          <span id="description">Please, provide size in MB format.</span>`,

  furniture: `
          <label for="height">Height (cm) *</label>
          <input name="height" required 
          type="number" id="height"
          min="1" max="100000" 
          autocomplete="off">
          <label for="width">Width (cm) *</label>
          <input name="width" required 
          type="number" id="width" 
          min="1" max="100000" 
          autocomplete="off">
          
          <label for="length">Length (cm) *</label>
          <input name="length" required 
          type="number" id="length" 
          min="1" max="100000" 
          autocomplete="off">
          <span id="description">Please, provide dimensions in HxWxL format.</span>
          
          <input hidden name="spec" required 
          type="text" id="spec"
          autocomplete="off">
          `,

  book: `
          <label for="weight">Weight (kg) *</label>
          <input name="spec" required
          type="text" id="weight" 
          minlength="1" maxlength="10" 
          autocomplete="off">
          <span id="description">Please, provide weight in KG format.</span>`

}

let switchFunc = function () {
    

    let type = typeSwitch.value.toLowerCase();
    let content = document.getElementById("cont");
    
    content.innerHTML = prodTypes[type];

    if (type == 'furniture') {
      document.getElementById("length").addEventListener('input', setSpec);
      document.getElementById("width").addEventListener('input', setSpec);
      document.getElementById("height").addEventListener('input', setSpec);
    }
}

typeSwitch.addEventListener('input', switchFunc)


