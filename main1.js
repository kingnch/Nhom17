function searchFunction() {
    var searchTerm = document.getElementById("search").value;
    var resultsElement = document.getElementById("results");
    resultsElement.innerHTML = alert("Kết quả tìm kiếm cho: " + searchTerm);
    // Thêm mã JavaScript xử lý tìm kiếm của bạn ở đây
}

var KichThuoc = document.getElementsByClassName("slideshow-container")[0].clientWidth;
var ChuyenSlide = document.getElementsByClassName("mySlides")[0];
var chuyen = 0;
var Img = ChuyenSlide.getElementsByTagName("img");
var Max = KichThuoc*Img.length;
Max -= KichThuoc; 
function Next(){
    if(chuyen < Max) chuyen += KichThuoc;
    else chuyen=0;
    ChuyenSlide.style.marginLeft = '-' + chuyen + 'px'; 
}

function Back(){
    if(chuyen==0) chuyen = Max;
    else chuyen -= KichThuoc;
    ChuyenSlide.style.marginLeft = '-' + chuyen + 'px';
}

setInterval(function(){
    Next();
} , 6000);
function Dangnhap() {
    window.location.href = "login.php";
}




