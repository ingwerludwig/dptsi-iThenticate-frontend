// Validation errors messages for Parsley
// Load this after Parsley

Parsley.addMessages('id', {
  defaultMessage: "Isian tidak valid",
  type: {
    email:        "Isian email tidak valid",
    url:          "Isian url tidak valid",
    number:       "Isian nomor tidak valid",
    integer:      "Isian integer tidak valid",
    digits:       "Isian harus berupa digit",
    alphanum:     "Isian harus berupa alphanumeric"
  },
  notblank:       "Isian tidak boleh kosong",
  required:       "Isian tidak boleh kosong",
  pattern:        "Isian tidak valid",
  min:            "Isian harus lebih besar atau sama dengan %s.",
  max:            "Isian harus lebih kecil atau sama dengan %s.",
  range:          "Isian harus dalam rentang %s dan %s.",
  minlength:      "Isian terlalu pendek, minimal %s karakter atau lebih.",
  maxlength:      "Isian terlalu panjang, maksimal %s karakter atau kurang.",
  length:         "Isian panjang karakter harus dalam rentang %s dan %s",
  mincheck:       "Isian pilih minimal %s pilihan",
  maxcheck:       "Isian pilih maksimal %s pilihan",
  check:          "Isian pilih antar %s dan %s pilihan",
  equalto:        "Isian harus sama"
});

Parsley.setLocale('id');
