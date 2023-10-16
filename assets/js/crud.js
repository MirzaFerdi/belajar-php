
$(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

  
  const bEdit = document.getElementsByName('btn-edit');
  const bHapus = document.getElementsByName('btn-hapus');
  const bTambah = document.querySelector('.btn-tambah');

  const form = document.getElementById('form');

  const colId = document.getElementsByName('id');
  const colProductName = document.getElementsByName('product_name');
  const colCategoyId = document.getElementsByName('category_id');
  const colProductCode = document.getElementsByName('product_code');
  const colDescription = document.getElementsByName('description');
  const colPrice = document.getElementsByName('price');
  const colUnit = document.getElementsByName('unit');
  const colDiskon = document.getElementsByName('discount_amount');
  const colStock = document.getElementsByName('stock');
  const colImg = document.getElementsByName('image');
  console.log(colImg);

  // Mengambil data dari tabel dan memasukkan ke form ketika tombol edit diklik


  bTambah.addEventListener('click', () => form.reset());


  bEdit.forEach((bEdit) => {
    bEdit.addEventListener('click', () => {
      const parent = bEdit.parentElement.parentElement.parentElement.parentElement.parentElement;
      const id = parent.children[0].textContent;
      const category_id = parent.children[1].textContent;
      const product_code = parent.children[2].textContent;
      const product_name = parent.children[3].textContent;
      const description = parent.children[4].textContent;
      const price = parent.children[5].textContent;
      const unit = parent.children[6].textContent;
      const discount_amount = parent.children[7].textContent;
      const stock = parent.children[8].textContent;
      const image = parent.children[9].textContent;

      colId.forEach((colId) => colId.value = id);
      colCategoyId.forEach((colCategoyId) => colCategoyId.value = category_id);
      colProductName.forEach((colProductName) => colProductName.value = product_name);
      colProductCode.forEach((colProductCode) => colProductCode.value = product_code);
      colDescription.forEach((colDescription) => colDescription.value = description);
      colPrice.forEach((colPrice) => colPrice.value = price);
      colUnit.forEach((colUnit) => colUnit.value = unit);
      colDiskon.forEach((colDiskon) => colDiskon.value = discount_amount);
      colStock.forEach((colStock) => colStock.value = stock);
      colImg.forEach((colImg) => colImg.value = image);
      
    });
  });
  
  // Mengambil ID dari tabel dan menghapus data sesuai ID ketika tombol hapus dikliks
  bHapus.forEach((bHapus) => {
    bHapus.addEventListener('click', () => {
      const parent = bHapus.parentElement.parentElement.parentElement.parentElement.parentElement;
      const isi = parent.children[0].textContent;
      colId.forEach((colId) => {
        colId.value = isi;
      });
      
    });
  });


  // idProduk.forEach((idProduk) => {
  //   console.log(idProduk);
  //   idProduk.value = idProduk.textContent;  
  // });
