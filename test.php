<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>TEST2</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous">
</head>

<body class="p-5">
  <div class="container-fluid">
    <div class="row mb-4">
      <div class="col-md-6 mx-auto">

        <div class="card">
          <div class="card-header">
            <h3>TEST 1</h3>
          </div>

          <div class="card-body">
            <div class="mb-3">
              <input type="text" id="txtList" value="1,2,4,6,5,100,0,10000,3" class="form-control">
            </div>

            <div class="mb-3">
              <input type="text" id="txtSearch" value="100" class="form-control">
            </div>

            <div class="mb-3">
              <select id="ddlTypeSearch" class="form-select">
                <option value="0" disabled>-- type search --</option>
                <option value="linear" selected>Linear</option>
                <option value="binary">Binary</option>
                <option value="bubble">Bubble</option>
              </select>
            </div>

            <div class="mb-3">
              <textarea id="txtResult" rows="10" class="form-control"></textarea>
            </div>

            <button type="button" id="btnSearch" onclick="fncSearch()" class="btn btn-success">
              ค้นหา
            </button>
          </div>
        </div>

      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3>TEST 2</h3>
          </div>

          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <?php
                  // 1.

                  // 1.2


                  // 2.
                  // 2.1
                  $salary = 10000;
                  if($salary < 10000){
                    $salary = $salary+200;
                  }
                  elseif($salary < 11000){
                    $salary += 200;
                  }
                  elseif($salary < 12000){
                    $salary += 300;
                  }

                  // 2.2
                  // 2.2.1 
                  // 200

                  // 2.2.2
                  $score = 9;
                  $age = 10;
                  // echo ($score>10 ?($age>10 ?'Average' :'Exceptional') :($age>10 ?'Horrible' :'Average2'));

                  // 3.1
                  $data = array(
                    10000=>15000,
                    15000=>20000,
                    'salary'=>30000
                  );
                  // print_r($data);
                  foreach ($data as $key => $salary) {
                    if($salary < 10000){
                      $salary = $salary+200;
                    }
                    elseif($salary < 11000){
                      $salary += 200;
                    }
                    elseif($salary < 12000){
                      $salary += 300;
                    }
                    // echo "<div>{$salary}</div>";
                  }

                  //3.2
                  $masks = array(
                    'mohammad'=>[
                      'physics'=>35,
                      'maths'=>30,
                      'chemistry'=>39,
                    ],
                    'qadir'=>[
                      'physics'=>30,
                      'maths'=>32,
                      'chemistry'=>29,
                    ],
                    'zara'=>[
                      'physics'=>31,
                      'maths'=>22,
                      'chemistry'=>39,
                    ],
                  );
                ?>

                <div class="fw-bold">1. (ทดสอบ Loop) จงเขียนโปรแกรมให้แสดงดังภาพต่อไปนี้ (ใช้ภาษา PHP และวงกลมคือตัวอักษร O )</div><br>
                <div class="fw-bold">1.1</div>
                <div>
                  <!--
                    $j = 5;
                    for ($i=0; $i<=5; $i++) {
                      echo str_repeat("&nbsp;&nbsp;", $j);
                      echo str_repeat("O", $i);
                      echo "<br>";
                      $j--;
                    } 
                  
                    for ($i=1; $i<=5; $i++) {
                      for ($c=1; $c<=$i; $c++) {
                        echo "O&nbsp;";
                      }
                      echo "<br>";
                    }
                    
                    for ($i=1; $i<10; $i += 2) {
                      $k = (10-$i);

                      for ($j=$k; $j>=1; $j--) {
                        echo "&nbsp;&nbsp;";
                      }
                      for ($j=0; $j < $i; $j++) {
                        echo "O";
                      }
                      echo "<br>";
                    }
                  -->
                  <!-- <pre></pre> -->
                  <code class="">
                    for ($i=1; $i<=5; $i++) {
                      echo "&lt;tr&gt;";
                        $k = (5-$i);

                        for ($j=$k; $j>=1; $j--) {
                          echo "&lt;td&gt;&lt;td&gt;";
                        }

                        for($j=1; $j<=$i; $j++) {
                          echo "&lt;td&gt;O&lt;td&gt;";
                        }
                      echo "&lt;/tr&gt;";
                    }
                    <!-- &lt;div id=&quot;carouselExampleSlidesOnly&quot; class=&quot;carousel slide&quot; data-ride=&quot;carousel&quot;&gt;
                        &lt;div class=&quot;carousel-inner&quot; role=&quot;listbox&quot;&gt;
                            &lt;div class=&quot;carousel-item active&quot;&gt; &lt;img class=&quot;img-fluid&quot; src=&quot;../assets/images/big/img1.jpg&quot; alt=&quot;First slide&quot;&gt; &lt;/div&gt;
                            &lt;div class=&quot;carousel-item&quot;&gt; &lt;img class=&quot;img-fluid&quot; src=&quot;../assets/images/big/img2.jpg&quot; alt=&quot;Second slide&quot;&gt; &lt;/div&gt;
                            &lt;div class=&quot;carousel-item&quot;&gt; &lt;img class=&quot;img-fluid&quot; src=&quot;../assets/images/big/img3.jpg&quot; alt=&quot;Third slide&quot;&gt; &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt; -->
                  </code>

                  <table class="table-bordered-">
                    <?php
                      for ($i=1; $i<=5; $i++) {
                        echo "</tr>";
                          $k = (5-$i);

                          for ($j=$k; $j>=1; $j--) {
                            echo "<td></td>";
                          }

                          for($j=1; $j<=$i; $j++) {
                            echo "<td>O</td>";
                          }
                        echo "</tr>";
                      }
                    ?>
                  </table>
                </div>

                <div class="fw-bold">1.2</div>
                <div>
                  <code>
                    for ($i=1; $i<=5; $i++) {
                      echo "&lt;tr&gt;";
                        $k = (5-$i);

                        for ($j=$k; $j>=1; $j--) {
                          echo "&lt;td&gt;&lt;td&gt;";
                        }

                        for($j=1; $j<=$i; $j++) {
                          echo "&lt;td&gt;O&lt;td&gt;";
                        }

                        for($j=1; $j<$i; $j++) {
                          echo "&lt;td&gt;O&lt;td&gt;";
                        }

                        for ($j=$k; $j>=1; $j--) {
                          echo "&lt;td&gt;&lt;td&gt;";
                        }
                      echo "&lt;/tr&gt;";
                    }
                  </code>

                  <table>
                    <?php
                      for ($i=1; $i<=5; $i++) {
                        echo "<tr>";
                          $k = (5-$i);

                          for ($j=$k; $j>=1; $j--) {
                            echo "<td></td>";
                          }

                          for($j=1; $j<=$i; $j++) {
                            echo "<td>O</td>";
                          }

                          for($j=1; $j<$i; $j++) {
                            echo "<td>O</td>";
                          }

                          for ($j=$k; $j>=1; $j--) {
                            echo "<td></td>";
                          }
                        echo "</tr>";
                      }
                    ?>
                  </table>
                </div>
                <hr>

                <div class="fw-bold">2. (ทดสอบความเข้าใจif, else)</div>
                <div class="fw-bold">2.1 มีเงินเดือน 10,000 บาท เดือนนี้จะได้เงินเท่าไหร่ หากมีเงื่อนไขดังน</div>
                <div>10200</div>

                <div class="fw-bold">2.2 (ทดสอบ short if) จากข้อมูลที่ให้มาข้างล่าง Output คืออะไร</div>
                <div class="fw-bold">2.2.1</div>
                <div>200</div>

                <div class="fw-bold">2.2.2</div>
                <div>Your Score is : Average</div>
                <hr>

                <div class="fw-bold">3.1หากวนลูป echo เฉพาะ Value และใช้เงื่อนไขข้อ 2.1 โดยใช้ Value แทน Salary จะได้ค่าอะไรบ้าง</div>
                <div>
                  15000<br>
                  20000<br> 
                  30000<br>
                </div>

                <div class="fw-bold">3.2 (ทดสอบ อาร์เรย์หลายมิติ Multidimensional array)</div>
                <div class="fw-bold">3.2.1 Output 35 มาแสดง จะต้องเขียน code อย่างไร (เขียนได้หลายวิธี)</div>
                <div>
                  <code>
                    // 1
                    echo $masks["mohammad"]["physics"];
                  </code>
                  <br>
                  <code>
                    // 2
                    foreach ($masks as $k => $mask) {
                      $key = array_search(35, $mask);
                      if($key){
                        echo "$mask[$key] ";
                      }
                    }
                  </code>
                  <br>
                  <code>
                    // 3
                    foreach ($masks as $key => $mask) {
                      foreach ($mask as $k => $m) {
                        if($m == 35){
                          echo "$m ";
                        }
                      }
                    }
                  </code>
                </div>

                <div class="fw-bold">3.2.2 Output 35 30 39 30 32 29 31 22 39 จะต้องเขียน code อย่างไร</div>
                <div?>
                  <code>
                    foreach ($masks as $key => $mask) {
                      foreach ($mask as $k => $m) {
                        echo "$m ";
                      }
                    }
                  </code>
                </div>
                <hr>

                <div class="fw-bold">4. (ทดสอบ html และ css) เขียน html และ css ดังภาพต่อไปนี้(วางโครงสร้างให้ ดีที่สุด)</div>
                <style type="text/css" media="screen">
                  .box {
                    display: inline-block;
                    border: 1px solid #000;
                  }
                  .margin-5 {
                    margin: 5px;
                  }
                  .w-240 {
                    width: 240px;
                  }
                  .h-200 {
                    height: 200px;
                  }
                </style>

                <div class="box margin-5 w-240 h-200">1</div>
                <div class="box margin-5 w-240 h-200">2</div>
                <div class="box margin-5 w-240 h-200">3</div>

                <!-- <pre>
                  <code>
                      // css
                      .box {
                        display: inline-block;
                        border: 1px solid #000;
                      }
                      .margin-5 {
                        margin: 5px;
                      }
                      .w-240 {
                        width: 240px;
                      }
                      .h-200 {
                        height: 200px;
                      }

                    &lt;div class=&quot;box margin-5 w-240 h-200&quot;&gt;1&lt;/div&gt;
                    &lt;div class=&quot;box margin-5 w-240 h-200&quot;&gt;2&lt;/div&gt;
                    &lt;div class=&quot;box margin-5 w-240 h-200&quot;&gt;3&lt;/div&gt;
                  </code>
                </pre> -->
                <hr>

                <div class="fw-bold">
                  5.(ทดสอบการออกแบบฐานข้อมูลด้วย ER Diagram และเขียน sql)
                  เครือบริษัทMaster-programmer มีพนักงานทั้งหมด 400 คน มีตําแหน่งหลาย
                  ตําแหน่งและมีสาขาอยู่ที่จังหวัดกรุงเทพ ระยอง เลย และปัตานี
                </div>   

                <div class="fw-bold">5.1 ออกแบบฐานข้อมูลให้เหมาะสมกับโจทย์ข้างต้นโดยแสดงในรูปแบบ ER Diagram</div>
                <div>
                  employee id-employee_name-salary-position_id-branch_id
                  position id-position_name
                  branch id-branch_name
                </div>

                <div class="fw-bold">5.2 ต้องการเพิ่มสาขาที่จังหวัด เชียงใหม่ เชียงรายและภูเก็ต</div>
                <code>
                  INSERT INTO branch (branch_name) VALUES('เชียงใหม่'),('ภูเก็ต')
                </code>

                <div class="fw-bold">5.3 ต้องการลบตําแหน่ง sale</div>
                <code>
                  DELETE position WHERE position_name = 'sale'
                </code>

                <div class="fw-bold">5.4 ต้องการแก้ไข สาขาปัตตานี เป็น นราธิวาส</div>
                <code>
                  UPDATE branch SET branch_name = 'นราธิวาส' WHERE branch_name = 'ปัตตานี'
                </code>

                <div class="fw-bold">
                  5.5 ต้องการแสดงข้อมูลพนักงานบริษัท Master-programmerทั้งหมด 400 คน
                </div>
                <code>
                  SELECT * FROM employee LIMIT 400
                </code>

                <div class="fw-bold">
                  5.6 ต้องการแสดงข้อมูลพนักงานบริษัท master-programmer ที่ อยู่ในสาขาระยอง และกรุงเทพ
                </div>
                <code>
                  SELECT<br>
                  employee.employee_name,<br>
                  employee.salary,<br>
                  branch.branch_name<br>
                  FROM employee<br>
                  INNER JOIN branch ON branch.id = employee.branch_id<br>
                  WHERE branch.branch_name IN ('ระยอง','กรุงเทพ')
                </code>


                <div class="fw-bold">
                  5.7 ต้องการแสดงข้อมูลพนักงานบริษัท master-programmer ที่ อยู่ในสาขาเลย และมีตําแหน่งเป็น programmer
                </div>
                <code>
                  SELECT<br>
                  employee.employee_name,<br>
                  employee.salary,<br>
                  branch.branch_name,<br>
                  position.position_name<br>
                  FROM employee<br>
                  INNER JOIN branch ON branch.id = employee.branch_id<br>
                  INNER JOIN position ON position.id = employee.position_id<br>
                  WHERE branch.branch_name = 'เลย' AND position.position_name = 'กรุงเทพ'
                </code>

                <div class="fw-bold">
                  5.8 ต้องการแสดงข้อมูลพนักงาน โดยมีข้อมูล สาขาและตําแหน่งของพนักงานแต่ละคน ในบริษัท master-programmer ทั้งหมด
                </div>
                <code>
                  SELECT<br>
                  employee.employee_name,<br>
                  employee.salary,<br>
                  branch.branch_name,<br>
                  position.position_name<br>
                  FROM employee<br>
                  INNER JOIN branch ON branch.id = employee.branch_id<br>
                  INNER JOIN position ON position.id = employee.position_id
                </code>
                <hr>

                <div class="fw-bold">
                  6. ทําไมถึงอยากเป็นโปรแกรมเมอร์
                </div>
                <div>
                  เรียนจบด้านนี้มาตั้งแต่ ปวช > มหาิทยาลัย
                </div>
                <hr>

                <div class="fw-bold">
                  7. ถ้ามีปัญหาติดขัดในการเขียนโปรแกรม จะทําอย่างไร
                </div>
                <div>
                  - อ่าน document<br>
                  - ปรึกษาทีม<br>
                </div>
                <hr>

                <div class="fw-bold">
                  8. อธิบายการทํางาน ในรูปแบบ MVC มาพอสังเขป
                </div>
                <div>
                  - model ส่วนของการเก็บรวบรวมข้อมูล หรือติดต่อกับฐานข้อมูล เพื่อส่งให้ controller ต่อไป<br>
                  - view ส่วนของการแสดงผล (UI)<br>
                  - controller เป็นเหมือนตัวกลางระหว่าง model กับ view ใช้สำหรับเขียน function การทำงาน และติดต่อกับ model เพื่อส่งข้อมูลไปยัง view ที่ร้องขอมา<br>
                </div>
                <hr>

                <div class="fw-bold">
                  9. อธิบายการทํางาน Git ยกตัวอย่าง GIT มา 3 เว็บ
                </div>
                <div>
                  เป็น Version Control สำหรับ Project โดยเก็บประวัติการแก้ไขโค้ดไว้ทุกครั้ง และรู้ได้ว่าโค้ดตรงไหนใครเป็นคนเพิ่มเข้ามาหรือแก้ไขได้จาก History<br>
                  - bitbucket<br>
                  - github<br>
                  - gitlab<br>
                </div>
                <hr>

                <div class="fw-bold">
                  10. อธิบายการทํางาน Docker
                </div>
                <div>
                  จะจำลองระบบปฏิบัติการของเซิร์ฟเวอร์ คล้ายกับวิธีการจำลองเครื่องจริง (ลดความจำเป็นในการจัดการโดยตรง) และมีคำสั่งที่ใช้งานง่าย ไม่ต้องยุ่งยาก ในการลงโปรแกรมของแต่ละเครื่อง
                </div>
                <hr>

                <div class="fw-bold">
                  11. อธิบายการทํางานของ Composer
                </div>
                <div>
                  ใช้สำหรับจัดการ package ต่างๆ ของ php เมื่อติดตั้งจะมีไฟล์ชื่อว่า composer.json
                  สำหรับรวบรวม Package และ version
                  ช่วยให้ง่ายเวลา package ต่างๆ มีการ update
                </div>
                <hr>

                <div class="fw-bold">
                  12. อธิบายการทํางานของ Prepros (Scss)
                </div>
                <div>
                  ช่วยจัดระเบียบในการเขียน css
                </div>
                <hr>

                <div class="fw-bold">
                  13. ในเวลาที่เราเรียนอยู่มหาลัย จะมีคนเก่งอยูในห้อง มีทั้งหมดกี่คน
                </div>
                <div>7-8 คน</div>
                <hr>

                <div class="fw-bold">
                  14. เคยทํางาน Freelance มาก่อนหรือไม่ (ถ้ามี แนบไฟล์ หรือ เว็บงานที่เคยทํา)
                </div>
                <div>ไม่เคย</div>
                <hr>

                <div class="fw-bold">
                  15. เคยใช้ Framework อะไรมาบ้างและบอกเหตุผลที่เลือกใช้
                </div>
                <div>
                  laravel framework เพราะคิดว่ามีจุดเด่นด้าน security และ function การทำงานที่เข้าใจง่าย
                </div>
                <hr>

                <div class="fw-bold">
                  16. Google Page speed คืออะไร เคยใช้หรือไม่
                </div>
                <div>
                  ไม่เคยใช้
                </div>
                <hr>

                <div class="fw-bold">
                  17. การทำ On page Seo ทำอย่างไร
                </div>
                <div>
                  
                </div>
                <hr>
              </div>
          </div>

          <div class="card-footer"></div>
        </div>

      </div>
    </div>
  </div>

</body>

<!-- vue -->
<!-- <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script> 
  
  function fncSearch() {
    result_binary = '';
    document.getElementById("txtResult").value = ''; //innerHTML

    let txtList = document.getElementById("txtList").value;
    let txtSearch = document.getElementById("txtSearch").value;
    let ddlTypeSearch = document.getElementById("ddlTypeSearch").value;
    let arrayList = txtList.split(',');
    // console.log(txtList,txtSearch,ddlTypeSearch, arrayList);
    
    if(ddlTypeSearch === 'linear') {
      linearSearch(txtSearch, arrayList);
    }
    else if(ddlTypeSearch === 'binary') {
      arrayList.sort(function (a, b) {
        return a - b;
      });
      // console.log(arrayList);
      
      // var arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 44, 55];
      binarySearch(arrayList,txtSearch);
    }
    else if(ddlTypeSearch === 'bubble') {
      bubbleSort(arrayList);
    }
    
  }

  function linearSearch(txtSearch, arrayList) {
    let result = '';

    for(let i=0; i < arrayList.length; i++) {
      // let div = document.createElement(`div`);
      // div.innerHTML += `Round : ${i} ==> ${txtSearch} != ${arrayList[i]} found !!`;
      // divResult.appendChild(div);
      let round = (i + 1);
      if(arrayList[i] === txtSearch){
        console.log(`Round : ${round} ==> ${txtSearch} = ${arrayList[i]} found !!`);
        // $(`#divResult`).append(`<div>Round : ${i} ==> ${txtSearch} = ${arrayList[i]} found !!</div>`);
        result += `Round : ${round} ==> ${txtSearch} = ${arrayList[i]} found !!`;
        break;
      } else {
        console.log(`Round : ${round} ==> ${txtSearch} != ${arrayList[i]}`);
        // $(`#divResult`).append(`<div>Round : ${i} ==> ${txtSearch} != ${arrayList[i]}</div>`);
        result += `Round : ${round} ==> ${txtSearch} != ${arrayList[i]}\n`;
      }
    }
    document.getElementById("txtResult").value = result;
  }

  //_________________________________________________BEGIN notes

      // Step 1. Get length of array 
      // Step 2. Find mid point
      // Step 3. Compare if mid point is lower or higher than searched number
      // Step 4. lop off unneeded side
      // Step 5. go to step 1
  //_________________________________________________END notes

  var result_binary = '';
  function binarySearch(arr, txtSearch) {
    var length = arr.length;
    var midPoint = Math.floor(length / 2);
    var newArr = arr;
    console.log(arr);
    console.log("array midpoint value: " + arr[midPoint]);
    
    if(arr.length > 0) {
      result_binary += `${JSON.stringify(arr)} ${arr.length} array midpoint value : ${arr[midPoint]}\n`;
    }
    document.getElementById("txtResult").value = result_binary;

    if (arr[midPoint] > txtSearch) {
      var newArr = arr.slice(0, midPoint);
      return binarySearch(newArr, txtSearch);
    }
    else if (arr[midPoint] < txtSearch) {
      var newArr = arr.slice(midPoint + 1, arr.length);
      return binarySearch(newArr, txtSearch);
    }
    else {
      return midPoint;
    }
  }

  function bubbleSort(arrayList) { 
    $n = arrayList.length; 
  
    for($i = 0; $i < $n; $i++){ 
      for ($j = 0; $j < $n - $i - 1; $j++){
        if (arrayList[$j] > arrayList[$j+1])  { 
            $t = arrayList[$j]; 
            arrayList[$j] = arrayList[$j+1]; 
            arrayList[$j+1] = $t; 
        } 
      } 
    }
    // console.log(Object.assign({}, arrayList));
    document.getElementById("txtResult").value = JSON.stringify(arrayList);
  }

  $arr = [64, 34, 25, 12, 22, 11, 90]; 
  // bubbleSort($arr);
  // console.log($arr);

/*
  function binarySearch(i, arr) {
    var mid = Math.floor(arr.length / 2);
    console.log(arr[mid], i);
    
    if (arr[mid] === i) {
        console.log('match', arr[mid], i);
        return arr[mid];
    } else if (arr[mid] < i && arr.length > 1) {
        console.log('mid lower', arr[mid], i);
        return binarySearch(arr.splice(mid, Number.MAX_VALUE), i);
    } else if (arr[mid] > i && arr.length > 1) {
        console.log('mid higher', arr[mid], i);
        return binarySearch(arr.splice(0, mid), i);
    } else {
        console.log('not here', i);
        return -1;
    }
    
  }
*/
</script>
</html>
