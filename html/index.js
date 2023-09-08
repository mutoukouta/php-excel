const button = document.getElementById("button");
const nameText = document.getElementById("name");
const telephoneNumber = document.getElementById("telephonenumber");
const inquiry = document.getElementById("inquiry");
const regexp = /^0\d{9,10}$/;

function onSubmit(token , event) {
  document.getElementById("demo-form").submit();
  if (!nameText.value.match(/\S/g)) {
    //名前入力チェック
    alert("未入力があります。");
    event.preventDefault();
    location.href = "./index.php";
  } else if (!regexp.test(String(telephoneNumber.value))) {
    //電話番号入力チェック
    alert("未入力があります。");
    event.preventDefault();
    location.href = "./index.php";
  } else if (!inquiry.value.match(/\S/g)) {
    //問い合わせ入力チェック
    alert("未入力があります。");
    event.preventDefault();
    location.href = "./index.php";
  } else {
    return true;
  }
}


