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

let switchFunc = function () {
    const dvd = `
      <label for="size">Size (MB) *</label>
      <input name="spec" required 
      type="number" id="size" 
      min="1" max="1000000000" 
      autocomplete="off"
      value="<?php echo $_POST['size] ?? ''; ?>">
      <span id="description">Please, provide size in MB format.</span>`;

    const furniture = `
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
      <span id="description">Please, provide dimensions in HxWxL format.</span>`;

    const book = `
      <label for="weight">Weight (kg) *</label>
      <input name="spec" required
      type="text" id="weight" 
      minlength="1" maxlength="10" 
      autocomplete="off">
      <span id="description">Please, provide weight in KG format.</span>`;

    let type = productType.value;
    type = type.toLowerCase();
    let content = document.getElementById("genContent");
    
    if (type === "dvd") {
      content.innerHTML = dvd;
    } else if (type === "furniture") {
        content.innerHTML = furniture;
    } else if (type === "book") {
        content.innerHTML = book;
    } else {
        content.innerHTML = "";
    }
}

typeSwitch.addEventListener('input', switchFunc)