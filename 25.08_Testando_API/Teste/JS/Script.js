cpfInput.addEventListener("input", () => {
    let value = cpfInput.value.replace(/\D/g, ""); // só números
    value = value.substring(0, 11); // limita a 11 dígitos
    value = value.replace(/(\d{3})(\d)/, "$1.$2");
    value = value.replace(/(\d{3})(\d)/, "$1.$2");
    value = value.replace(/(\d{3})(\d{1,2})$/, "$1-$2");
    cpfInput.value = value;
  });