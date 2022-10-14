<?php
  $userid = $_GET['userid'];
  //여기에 파이썬에 값 보내고 리스트 받아오는 부분 넣을 예정
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
    <!--favicon-->
        <!--아이콘 추가-->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>홍익대학교 중앙도서관 도서 추천 시스템</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css?after" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Pen+Script&family=Cookie&display=swap" rel="stylesheet">    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  </head>

    <body id="mainpage">
      <div class="container">
        <!--제목-->
        <a href="main.html"><h3 id="title"><strong>홍익대학교 중앙도서관 도서 추천 시스템</strong></h3></a>
        <div class="row">
          <div class = "col-0 col-md-2"></div>
          <div class = "col-md-8">

            <!--검색 학번 출력-->
            <div style="text-align :center; margin-top:20px;">
              <p style="display: inline-block;">'</p><p style="display: inline-block;"><strong><?php echo $userid ?></strong></p><p style="display: inline-block;">'님을 위한 도서 추천 결과입니다.</p>
            </div>
            
            <!--설명-->
            <p style="text-align: center; margin-bottom: 0; margin-top: 20px;">홍익대학교 중앙도서관 책 추천 시스템 입니다.</p>
            <p style="text-align: center; margin: 0px; line-height: 28px;">학번을 입력해주시면 이전에 홍익대학교 중앙도서관에서 대여하셨던 도서들을 기반으로 책을 추천해드립니다.
              추천드린 책들에 대한 별점을 매겨주세요. </p>
          </div>
          <div class = " col-md-2"></div>
        </div>
        <div class="row">
            <!--결과 출력-->
            <div class = "col-md-2"></div>
            <div class = "col-md-4" >
              <!--book1-->
              <div style = "margin-top : 30px; display: inline-block; margin-right: 45px; margin-left: 10px">
                <a  href = "https://honors.hongik.ac.kr/search/detail/CATTOT000002117211" target = "blank">
                  <img id = "book1" src="images/bookimg.png" style = "width : 144px; height : 200px;">
                </a>
                <p style = "margin-top: 10px; margin-bottom: 0px"><strong>제목</strong></p>
                <p style = "margin-top: 5px;">저자</p>
              </div>
            
              <!--book2-->
              <div style = "margin-top : 30px; display: inline-block;">
              <a  href = "https://honors.hongik.ac.kr/search/detail/CATTOT000002117211" target = "blank">
                  <img id = "book1" src="images/bookimg.png" style = "width : 144px; height : 200px;">
                </a>
                <p style = "margin-top: 10px; margin-bottom: 0px"><strong>제목</strong></p>
                <p style = "margin-top: 5px;">저자</p>
              </div>
            </div>
            <div class = "col-md-4" >
              <!--book3-->
              <div style = "margin-top : 30px; display: inline-block;  margin-right: 40px; margin-left: 10px;">
                <a  href = "https://honors.hongik.ac.kr/search/detail/CATTOT000002117211" target = "blank">
                  <img id = "book1" src="images/bookimg.png" style = "width : 144px; height : 200px;">
                </a>
                <p style = "margin-top: 10px; margin-bottom: 0px">제목</p>
                <p style = "margin-top: 5px;">저자</p>
              </div>
            
              <!--book4-->
              <div style = "margin-top : 30px; display: inline-block;">
                <a  href = "https://honors.hongik.ac.kr/search/detail/CATTOT000002117211" target = "blank">
                  <img id = "book1" src="images/bookimg.png" style = "width : 144px; height : 200px;">
                </a>
                <p style = "margin-top: 10px; margin-bottom: 0px">제목</p>
                <p style = "margin-top: 5px;">저자</p>
              </div>
            </div>
            <div class = "col-md-2"></div>    
        </div> <!--화면 max 상태에서 첫 번째 줄-->

        <div class="row">
            <!--결과 출력-->
            <div class = "col-md-2"></div>
        
            <div class = "col-md-4" >
              <!--book1-->
              <div style = "margin-top : 30px; display: inline-block; margin-right: 45px; margin-left: 10px">
                <a  href = "https://honors.hongik.ac.kr/search/detail/CATTOT000002117211" target = "blank">
                  <img id = "book1" src="images/bookimg.png" style = "width : 144px; height : 200px;">
                </a>
                <p style = "margin-top: 10px; margin-bottom: 0px">제목</p>
                <p style = "margin-top: 5px;">저자</p>
              </div>
            
              <!--book2-->
              <div style = "margin-top : 30px; display: inline-block;">
              <a  href = "https://honors.hongik.ac.kr/search/detail/CATTOT000002117211" target = "blank">
                  <img id = "book1" src="images/bookimg.png" style = "width : 144px; height : 200px;">
                </a>
                <p style = "margin-top: 10px; margin-bottom: 0px">제목</p> <!--수정중-->
                <p style = "margin-top: 5px;">저자</p>
              </div>
            </div>
            <div class = "col-md-4">
              <!--book3-->
              <div style = "margin-top : 30px; display: inline-block;  margin-right: 40px; margin-left: 10px;">
                <a  href = "https://honors.hongik.ac.kr/search/detail/CATTOT000002117211" target = "blank">
                  <img id = "book1" src="images/bookimg.png" style = "width : 144px; height : 200px;">
                </a>
                <p style = "margin-top: 10px; margin-bottom: 0px">제목</p>
                <p style = "margin-top: 5px;">저자</p>
              </div>
            
              <!--book4-->
              <div style = "margin-top : 30px; display: inline-block;">
                <a  href = "https://honors.hongik.ac.kr/search/detail/CATTOT000002117211" target = "blank">
                  <img id = "book1" src="images/bookimg.png" style = "width : 144px; height : 200px;">
                </a>
                <p style = "margin-top: 10px; margin-bottom: 0px">제목</p>
                <p style = "margin-top: 5px;">저자</p>
              </div>
            </div>
            <div class = "col-md-2"></div>    
        </div> <!--화면 max 상태에서 첫 번째 줄-->




          <!-- Optional JavaScript; choose one of the two! -->

          <!-- Option 1: Bootstrap Bundle with Popper -->
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>


          <!-- Option 2: Separate Popper and Bootstrap JS -->
          <!--
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
          -->
      </div>
    </body>
</html>