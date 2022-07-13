  function search(){
    // var input= document.getElementsByClassName("searchText")[0];
    var input1= document.getElementsByClassName("searchText")[0].value;
    // console.log(input1);
    // console.log(input1);
    javascript:void(readData(input1));
    $(".searchBtn").change(function(){
      window.location='http://www.domain.com/mypage?search=' + input1
    });
  }