<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      .baris{
        box-sizing: border-box;
      }
      .kolom{
        width: 333px;
        height: 300px;
        /* background-color: aquamarine; */
        margin: 3px;
        box-sizing: border-box;
      }
      .kolom1,.kolom2, .kolom3{
        float: left;
      }
      .kolom1{
         width:70%;
         background-color: aquamarine;
      }
      .kolom2{
         background-color: white;  
      }
      .kolom4{
        clear: left;
        width:100%
      }
      .col1{
         width: 30%;
      }
      .col2{
         width: 30%;
      }
      .h2{ 
         display: block;
         font-size: 2em;
         margin-top: 0.67em;
         margin-bottom: 0.67em;
         margin-left: 0;
         margin-right: 0;
         font-weight: bold;
         text-align: center;
      }
      .p{ 
         display: block;
         font-size: 2em;
         margin-top: 0.67em;
         margin-bottom: 0.67em;
         margin-left: 0;
         margin-right: 0;
         text-align: center;
      }
      .button {
         background-color: #4CAF50;
         border: none;
         color: white;
         padding: 15px 32px;
         text-align: center;
         text-decoration: none;
         display: inline-block;
         font-size: 16px;
         margin: 4px 2px;
         cursor: pointer;
         border-radius: 30%;         
      }
      .img{
         float: right;
         margin: 5px;
      }
    </style>
</head>
<body>
  <section class="baris">
	   <div class="kolom kolom1">
         <div id="konten">
            <div class="col1">
                  <h2 class="h2 h21" style="color:white; ">LATEST</h2>
                  <h2 class="h2 h22" style="color:white;">DESING BLOGS</h2>
                  <p class="p p1">Lorem ipsum dolor sit magna dolor.</p>
                  <div style="text-align:center;">
                     <button class="button">Button</button>
                  </div>
            </div>
               <img class="img" src="download.jpg" alt="">
         </div>
      </div>
	   <div class="kolom kolom2"></div>
  </section>
</body>
</html>