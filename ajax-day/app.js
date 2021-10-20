$(function () {
  $("#search_btn").click(function () {
    // 入力された値を取得
    const zipcode = $("#zipcode").val();
    // console.log(zipcode);

    // urlを設定
    var url = `http://zipcloud.ibsnet.co.jp/api/search?zipcode=${zipcode}`;
    // 送るデータを成形する
    var param = { zipcode: zipcode };
    // サーバーと通信(Ajax)

    $.ajax({
      type: "GET",
      cache: false,
      data: param,
      url: url,
      dataType: "json",
    })
      .done(function (res) {
        // console.log(res);
        if (res.status != 200) {
          // 通信には成功。APIの結果がエラー
          // エラー内容を表示
          $("#zip_result").html(res.message);
        } else {
          let html = "";
          //住所を表示
          let result = res.results[0];
          //   console.log(res.results[0]);
          html += "<div>a.都道府県コード：" + result.prefcode + "</div>";
          html += "<div>b.都道府県：" + result.address1 + "</div>";
          html += "<div>c.市区町村：" + result.address2 + "</div>";
          html += "<div>d.町域：" + result.address3 + "</div>";
          html += "<div>e.都道府県(カナ)：" + result.kana1 + "</div>";
          html += "<div>f.市区町村(カナ)：" + result.kana1 + "</div>";
          html += "<div>d.町域(カナ)：" + result.kana1 + "</div>";

          $("#zip_result").html(html);
        }
      })
      .fail(function (error) {
        console.log(error);
        $("#zip_result").html(
          "<p>通信エラーです。時間をおいてお試しください</p>"
        );
      });
  });
});
