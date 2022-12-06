<!DOCTYPE html>
<html lang="en">
<body>
  <hr>
    <div class="contact-us section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="row achivement">
              <!--Start achivement single-->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <h1 class="fa fa-user"></h1>
                  <div class="achivement-single">
                      <h1><span class="counter-number" data-from="100" data-to="205" data-speed="5000" data-refresh-interval="50"></span></h1>
                        <p>Total Clients</p>
                    </div>
                </div>
                <!--End achivement single-->
                <!--Start achivement single-->
              
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="achivement-single">
                      <h1><span class="counter-number1" data-from="10" data-to="567" data-speed="5000" data-refresh-interval="50"></span></h1>
                        <p>Total Customers</p>
                    </div>
                </div>
                <!--End achivement single-->
            </div>
          </div>
        </div>
      </div>
    </div>
  <style>
@property --num {
  syntax: "<integer>";
  initial-value: 0;
  inherits: false;
}

.counter-number {
  animation: counter 5s infinite alternate;
  counter-reset: num var(--num);
  font: 800 40px system-ui;
  padding: 2rem;
}
.counter-number::after {
  content: counter(num);
}

@keyframes counter {
  from {
    --num: 999;
  }
  to {
    --num: 1999;
  }
}

.counter-number1 {
  animation: counter 5s infinite alternate;
  counter-reset: num var(--num);
  font: 800 40px system-ui;
  padding: 2rem;
}
.counter-number1::after {
  content: counters(num);
}

@keyframes counters {
  from {
    --num: 777;
  }
  to {
    --num: 1499;
  }
}
</style>
</body>

</html>
