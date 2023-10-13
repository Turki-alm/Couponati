<div class="popup-overlay">
    <div class="popup-container">
      <div class="popup-card">
        <img src="<?=URL.$getCouponById["logo"]?>" width="100px">
        <br><br>
        <h6>أقوى اكواد <?=$getCouponById["company"]?>&nbsp;<img style="width: 23px;" src="<?=URL?>website/img/dollar.png"></h6>
        <div class="box_copon">
									<div class="label_copon" style="font-size: 19px; font-weight: bold;"><input type="text" id="coupon" value="<?=$getCouponById["coupon"]?>"></div><br>
									<div><?=$getCouponById["short_description"]?></div><br>
									<button style="color:white !important" class="btn btn_copy" onclick="copyCode()">نسخ الكود</button>
        </div>
        <button id="close-popup">x</button>
     
      </div>
      <div class="modal_footer">
		      		<ul class="action_modal clearfix">
		      			<li><a href="<?=$getCouponById["webiste"]?>" style="color:black !important">إنقلني للمتجر<span> <img src="<?=URL.'website/icons/web.png'?>" width="35px"></span></a></li>
		      		</ul>
        </div>
    </div>
  </div>


<style>
  #coupon{background: none;border: none;color: gold;text-align: center;}
  .action_modal li{list-style: none;}
  .action_modal li > a {
    text-align: center;
    text-decoration: none;
    display: block;
    background-color: #fff;
    padding: 10px 15px 10px;
    color: #404254;
    font-size: 18px;
    font-weight: 500;
    border: 1px solid #E8EAF1;
    border-radius: 10px;
    -webkit-box-shadow: 0px 2px 50px 0px rgba(0,0,0,0.11);
    -moz-box-shadow: 0px 2px 50px 0px rgba(0,0,0,0.11);
    box-shadow: 0px 2px 50px 0px rgba(0,0,0,0.11);
}

  .modal_footer {
    padding: 25px 20px;
    border-radius: 30px 30px 0 0;
    -webkit-box-shadow: 0px 2px 25px 0px rgba(0,0,0,0.11);
    box-shadow: 0px 2px 25px 0px rgba(0,0,0,0.11);
}


  .label_copon{font-size: 19px;
    font-weight: bold;
    color: gold;
    border: 1px solid gold;
    padding: 10px;
    background: #481aa0;}
    /* styles.css */
    .box_copon {
    position: relative;
    background-color: #fff;
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
    border: 1px solid #240d50;
    border-radius: 25px;
    padding: 30px 40px 20px;
    -webkit-box-shadow: 0px 2px 50px 0px rgba(0,0,0,0.11);
    -moz-box-shadow: 0px 2px 50px 0px rgba(0,0,0,0.11);
    box-shadow: 0px 2px 50px 0px rgba(0,0,0,0.11);
    overflow: hidden;
}
.btn-take-coupon{color: white;}
.popup-overlay {
  display: block;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
  justify-content: center;
  align-items: center;
  z-index: 999;
}

.popup-container {
    max-width: 400px;
  margin-left: auto;
  margin-right: auto;
  background-color: white;
  border-radius: 8px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
  overflow: hidden;
  opacity: 1;
  transform: scale(0.8);
  transition: all 0.3s ease-in-out;
}

.popup-card {
  padding: 20px;
  padding-top: 50px;
  text-align: center;
}

.popup-card h2 {
  font-size: 24px;
  margin-bottom: 10px;
}

.popup-card p {
  font-size: 16px;
  margin-bottom: 20px;
}

#close-popup {
  position: absolute;
    top: 20px;
    right: 20px;
    width: 45px;
    height: 45px;
    color: white !important;
    background-color: #f00;
    border: 1px solid #E8EAF1;
    border-radius: 12px;
    font-size: 24px;
    box-shadow: none !important;
    outline: none !important;
    opacity: 1;
    -webkit-box-shadow: 0px 2px 50px 0px rgba(0,0,0,0.11);
    -moz-box-shadow: 0px 2px 50px 0px rgba(0,0,0,0.11);
    box-shadow: 0px 2px 50px 0px rgba(0,0,0,0.11);
    cursor: pointer;
    z-index: 9;


}

#close-popup:hover {
  background-color: red;
}

  </style>

<script>
    // script.js
const popupOverlay = document.querySelector(".popup-overlay");
const popupContainer = document.querySelector(".popup-container");
const closePopupButton = document.getElementById("close-popup");

function openPopup() {
  popupOverlay.style.display = "flex";
  setTimeout(() => {
    popupContainer.style.opacity = "1";
    popupContainer.style.transform = "scale(1)";
  }, 100);
}

function closePopup() {
  popupContainer.style.opacity = "0";
  popupContainer.style.transform = "scale(0.8)";
  setTimeout(() => {
    popupOverlay.style.display = "none";
  }, 300);
}



// Automatically open the popup when the page loads
window.addEventListener("load", openPopup);

closePopupButton.addEventListener("click", closePopup);

</script>



<script>
        function copyCode() {
            let copyGfGText =document.getElementById("coupon");
            copyGfGText.select();
            document.execCommand("copy");
        }
    </script>