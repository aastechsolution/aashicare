<hr>
<div class="container-fluid py-5">
    <div class="container" id="counter">
        <div class="row g-5 statscounts">
          <div class="col-md-4">
                <div class="service-item bg-light d-flex p-4">
                    <div class="text-align">
                       <div class="statwrap">
                        <h1><span class="stat-count"> 5000</span><span>+</span></h1>
                        <h3>Visitors</h3>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-item bg-light d-flex p-4">
                    <div class="text-align">
                       <div class="statwrap">
                        <h1><span class="stat-count"> 1000</span><span>+</span></h1>
                        <h3>Clients</h3>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-item bg-light d-flex p-4">
                    <div class="text-align">
                      <div class="statwrap">
                        <h1 class="stat-count ">950</h1>
                        <h3>Satisfied Clients</h3>
                      </div>
                    </div>
                </div>
            </div>
         </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>

  function count($this) {
  var current = parseInt($this.html(), 10);
  current = current + 1;
  $this.html(++current);
  if (current > $this.data('count')) {
    $this.html($this.data('count'));
  } else {
    setTimeout(function() {
      count($this)
    }, 1);
  }
}

$(".stat-count").each(function() {
  $(this).data('count', parseInt($(this).html(), 10));
  $(this).html('0');
  count($(this));
});



</script>