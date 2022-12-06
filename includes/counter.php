<section id="achivement-area">
      <div class="container">
          <div class="row achivement">
              <!--Start achivement single-->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="achivement-single">
                      <h1><span id="CounterVisitor" data-from="100" data-to="205" data-speed="5000" data-refresh-interval="50">205</span></h1>
                        <p>Total Clients</p>
                    </div>
                </div>
                <!--End achivement single-->
                <!--Start achivement single-->
              
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="achivement-single">
                      <h1><span id="CounterVisitor1" data-from="10" data-to="567" data-speed="5000" data-refresh-interval="50">567</span></h1>
                        <p>Total Customers</p>
                    </div>
                </div>
                <!--End achivement single-->
            </div>
        </div>
    </section>

<script>
var n = localStorage.getItem('on_load_counter');

if (n === null) {
  n = 10010;
}
n++;

localStorage.setItem("on_load_counter", n);

nums = n.toString().split('').map(Number);
document.getElementById('CounterVisitor1').innerHTML = '';
for (var i of nums) {
  document.getElementById('CounterVisitor1').innerHTML += '<span class="counter-item">' + i + '</span>';
}

var n = localStorage.getItem('on_load_counter');

if (n === null) {
  n = 10010;
}
n++;

localStorage.setItem("on_load_counter", n);

nums = n.toString().split('').map(Number);
document.getElementById('CounterVisitor').innerHTML = '';
for (var i of nums) {
  document.getElementById('CounterVisitor').innerHTML += '<span class="counter-item">' + i + '</span>';
}

</script>