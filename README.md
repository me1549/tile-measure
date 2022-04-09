# タイル測定ツール
## 概要
タイル施工を営む父から依頼を受け開発したタイル割りの測定ツールです。タイルを貼る場所の全体の幅とタイルの幅、目地の幅を入力するだけで、必要なタイルの枚数と切れ物の幅、床に印をつけるときのメジャーのメモリを取得することができます。

https://tile-measure.herokuapp.com/


## 床タイルの貼り方

### 1.タイルをどのように貼るか決める。

まず貼る場所の全体の長さとタイルの幅を測ってから、必要なタイルの枚数と最後の切れ物の長さを計算します。ここでややこしいのが目地の幅も考えて計算しなければいけないという点です。

目地とはタイルとタイルの繋ぎ目の隙間のことです。

例えば全体の長さが1000mmの場所に幅300mm目地5mmのタイルを貼るとします。

![S__63340546](https://user-images.githubusercontent.com/64354869/162578510-656441aa-304c-4925-96df-db2617b2e6bb.jpg)
まず必要なタイルの枚数を計算します。

全体の長さ　÷　（タイルの幅　＋　目地）<br>
1000 ÷ (300 ＋　5) = 3.27...

タイル3枚と切れ物1枚が必要なことがわかりました。

次に切れ物の幅を計算します。

全体の長さ　-　（タイルの幅　＋　目地)　× 必要な枚数　- 目地　× 2
1000 - 305 × 3 - 5 × 2 = 75

切れ物の長さが75mmです。


次にはる場所に印をつけていきます。















![4896](https://user-images.githubusercontent.com/64354869/162576777-114ff50a-61cd-4855-9753-9be022109648.jpg)
![4897](https://user-images.githubusercontent.com/64354869/162576778-915e1a1b-ce79-4bdd-93a1-5fda008bdf3a.jpg)
![4913](https://user-images.githubusercontent.com/64354869/162576780-7f0c9054-b0c1-442a-b3d0-6326b12ca276.jpg)
![4914](https://user-images.githubusercontent.com/64354869/162576781-83823ce1-095f-49bd-9ee4-aa5d619696ac.jpg)
![4915](https://user-images.githubusercontent.com/64354869/162576783-944ed6fa-7c52-48dd-90a6-529dff3b693e.jpg)
![4916](https://user-images.githubusercontent.com/64354869/162576784-ecb3a23c-82a7-4841-8aeb-6d3889f2b83f.jpg)
![4917](https://user-images.githubusercontent.com/64354869/162576785-389e6426-b464-4935-966d-4cc83cb38c61.jpg)
![4918](https://user-images.githubusercontent.com/64354869/162576787-437aa950-12fc-47de-8424-c490d534db81.jpg)
