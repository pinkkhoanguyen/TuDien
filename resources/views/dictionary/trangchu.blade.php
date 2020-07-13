<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dictionary</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="overlay-bg hidden"></div>
    <!-- Begin: HEADER -->
    <div id="header">
    <div class="wrapper">
            <div class="header_content">
            <h1 class="logo">
                <a title="Về trang chủ" href="https://Skditionary.github.io" >SK Dictionary - Từ diển Anh Việt, Việt Anh</a>
            </h1>
            <div class="clr"></div>
        </div>
    </div>
</div>	
    <!-- END HEADER -->
    <!-- begin: Body site -->
    <div class="wrapper">
        <div class="laban_tudien">
            <div class="input_area">
                <input maxlength="49" type="text" class="input_box" autocomplete="off" value="" id="txtSearchBox" name="term">
                <select id="searchOptions" class="options" >
                    <option value="" >Anh - Việt</option>
                    <option value="_vi" >Việt - Anh</option>
                    <option value="_en_en" >Anh - Anh</option>
                </select>
                <a href="javascript:;" id="search">Tra từ</a>
            </div>
            <div>
                <div class="info_l">
                    <h3>SK Dictionary</h3>
                    <ul>
                        <li>Từ điển trực tuyến miễn phí cho người Việt</li>
                        <li>Cung cấp 2 bộ từ điển chính:  Anh – Việt, Việt – Anh và Anh – Anh</li>
                        <li>Kho từ đồ sộ cùng hệ thống gợi ý từ thông minh, SK Dictionary giúp tra cứu nhanh chóng nhất.</li>
                    </ul>
                </div>
                <div class="clr"></div>	
            </div>
        </div>    
    </div>
</body>
</html>