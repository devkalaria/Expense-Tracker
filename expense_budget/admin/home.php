<style>
/* General Reset */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Tooltip Styling */
.info-tooltip, .info-tooltip:focus, .info-tooltip:hover {
  background: unset;
  border: unset;
  padding: unset;
  color: #ff4500; /* Vibrant Orange */
  font-size: 1.3em;
  cursor: pointer;
  transition: transform 0.3s ease-in-out;
}

.info-tooltip:hover {
  transform: scale(1.1);
}

/* General Styling */
body {
  font-family: 'Poppins', sans-serif;
  background: linear-gradient(to bottom right, #ffffff, #f9f9f9); /* Elegant Light Gradient */
  margin: 0;
  padding: 0;
  color: #333; /* Neutral Dark */
  overflow-x: hidden;
}

/* Header Styling */
h2 {
  text-align: center;
  color: #1e90ff; /* Dodger Blue */
  font-weight: 700;
  font-size: 2.5rem;
  margin: 20px 0;
  letter-spacing: 2px;
  text-transform: uppercase;
  text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
}

h4 {
  color: #2e8b57; /* Sea Green */
  text-align: left;
  font-weight: 600;
  font-size: 1.6rem;
  letter-spacing: 1px;
  margin-bottom: 15px;
}

/* Card Title */
h5.card-title {
  color: #ff6b6b; /* Coral */
  font-weight: 700;
  font-size: 1.4rem;
  text-transform: uppercase;
  letter-spacing: 1px;
}

/* Card Text */
.card-text {
  font-size: 1.2rem;
  color: #444; /* Soft Black */
  font-weight: 600;
}

/* Card Styling */
.card {
  background: linear-gradient(135deg, #ffffff, #f2f2f2); /* Sleek Gradient */
  box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.1), -10px -10px 20px rgba(255, 255, 255, 0.5); /* Neumorphism */
  border: none;
  border-radius: 15px;
  overflow: hidden;
  transition: transform 0.4s ease, box-shadow 0.4s ease;
}

.card:hover {
  transform: scale(1.05);
  box-shadow: 15px 15px 30px rgba(0, 0, 0, 0.2), -15px -15px 30px rgba(255, 255, 255, 0.5);
}

.card-body {
  padding: 25px;
  text-align: center;
}

/* Icons */
i {
  color: #ff6b6b; /* Coral */
  font-size: 1.5rem;
  transition: color 0.3s ease-in-out, transform 0.3s ease-in-out;
}

i:hover {
  color: #1e90ff; /* Dodger Blue */
  transform: rotate(10deg);
}

/* Text Colors */
.text-pink {
  color: #ff69b4 !important; /* Hot Pink */
}

.text-green {
  color: #2e8b57 !important; /* Sea Green */
}

/* Divider */
hr {
  border: none;
  border-top: 2px solid #ff69b4; /* Hot Pink */
  margin: 20px 0;
  width: 80%;
}

/* Input Field */
.form-control {
  border: 2px solid #2e8b57; /* Sea Green */
  border-radius: 8px;
  background: #f9f9f9;
  color: #333;
  padding: 15px;
  font-size: 1.1rem;
  box-shadow: inset 3px 3px 6px rgba(0, 0, 0, 0.1), inset -3px -3px 6px rgba(255, 255, 255, 0.6);
  transition: all 0.3s ease-in-out;
}

.form-control:focus {
  background-color: #fff;
  border-color: #ff69b4; /* Hot Pink */
  box-shadow: 0 0 10px rgba(255, 105, 180, 0.6); /* Subtle Glow */
}

/* Input Group Styling */
.input-group-text {
  background-color: #ff69b4; /* Hot Pink */
  color: #fff;
  border: 2px solid #ff69b4;
  border-radius: 0 8px 8px 0;
  font-size: 1.3rem;
  transition: background-color 0.3s ease, transform 0.2s ease-in-out;
}

.input-group-text:hover {
  background-color: #1e90ff; /* Dodger Blue */
  transform: scale(1.1);
}

/* Category Items */
.cat-items {
  transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

.cat-items:hover {
  transform: translateY(-5px);
  box-shadow: 4px 4px 12px rgba(0, 0, 0, 0.2), -4px -4px 12px rgba(255, 255, 255, 0.5);
}

/* Info Box */
.callout-info {
  background-color: rgba(135, 206, 250, 0.2); /* Light Sky Blue Background */
  border-left: 5px solid #1e90ff; /* Dodger Blue */
  padding: 15px;
  border-radius: 10px;
  transition: transform 0.3s ease-in-out;
}

.callout-info:hover {
  transform: translateX(10px);
  box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
}

/* No Data Text */
#noData {
  color: #ff4500; /* Orange Red */
  font-weight: 700;
  font-size: 1.2rem;
  text-align: center;
  margin-top: 20px;
  animation: fadeIn 1.2s ease;
}

@keyframes fadeIn {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Responsive Design */
@media (max-width: 768px) {
  h2 {
    font-size: 2rem;
  }

  h4 {
    font-size: 1.2rem;
  }

  h5.card-title {
    font-size: 1.1rem;
  }

  .card-text {
    font-size: 1rem;
  }

  .card-body {
    padding: 20px;
  }
}

</style>



<h2>Hi DEVA!🤑</h2>
<hr>
<div class="row">
  <!-- Current Overall Budget -->
  <div class="col-md-4">
    <div class="card">
      <div class="card-body text-right">
        <i class="fas fa-money-bill-alt fa-3x mb-3 text-secondary"></i>
        <h5 class="card-title">Current Overall Budget</h5>
        <p class="card-text">
          <?php 
            $cur_bul = $conn->query("SELECT sum(balance) as total FROM `categories` where status = 1 ")->fetch_assoc()['total'];
            echo number_format($cur_bul);
          ?>
        </p>
      </div>
    </div>
  </div>
  <!-- Today's Budget Entries -->
  <div class="col-md-4">
    <div class="card">
      <div class="card-body text-right">
        <i class="fas fa-calendar-day fa-3x mb-3 text-pink"></i>
        <h5 class="card-title">Today's Budget Entries</h5>
        <p class="card-text">
          <?php 
            $today_budget = $conn->query("SELECT sum(amount) as total FROM `running_balance` where category_id in (SELECT id FROM categories where status =1) and date(date_created) = '".(date("Y-m-d"))."' and balance_type = 1 ")->fetch_assoc()['total'];
            echo number_format($today_budget);
          ?>
        </p>
      </div>
    </div>
  </div>
  <!-- Today's Budget Expenses -->
  <div class="col-md-4">
    <div class="card">
      <div class="card-body text-right">
        <i class="fas fa-calendar-day fa-3x mb-3 text-green"></i>
        <h5 class="card-title">Today's Budget Expenses</h5>
        <p class="card-text">
          <?php 
            $today_expense = $conn->query("SELECT sum(amount) as total FROM `running_balance` where category_id in (SELECT id FROM categories where status =1) and date(date_created) = '".(date("Y-m-d"))."' and balance_type = 2 ")->fetch_assoc()['total'];
            echo number_format($today_expense);
          ?>
        </p>
      </div>
    </div>
  </div>
</div>
        <br>
</br>
<div class="row">
  <div class="col-lg-12">
    <h4>Budget left in each category</h4>
    <hr>
  </div>
</div>
<div class="col-md-12 d-flex justify-content-left">
  <div class="input-group mb-3 col-md-5">
    <input type="text" class="form-control" id="search" placeholder="Search Category">
    <div class="input-group-append">
      <span class="input-group-text"><i class="fa fa-search"></i></span>
    </div>
  </div>
</div>
<div class="row row-cols-4 row-cols-sm-1 row-cols-md-4 row-cols-lg-4">
  <?php 
  $categories = $conn->query("SELECT * FROM `categories` where status = 1 order by `category` asc ");
    while($row = $categories->fetch_assoc()):
  ?>
  <div class="col p-2 cat-items">
    <div class="callout callout-info">
      <span class="float-right ml-1">
        <button type="button" class="btn btn-secondary info-tooltip" data-toggle="tooltip" data-html="true" title='<?php echo (html_entity_decode($row['description'])) ?>'>
          <span class="fa fa-info-circle text-info"></span>
        </button>
      </span>
      <h5 class="mr-4"><b><?php echo $row['category'] ?></b></h5>
      <div class="d-flex justify-content-end">
        <b><?php echo number_format($row['balance']) ?></b>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
</div>
<div class="col-md-12">
  <h3 class="text-center" id="noData" style="display:none">No Data to display. 😕</h3>
</div>
<script>
  function check_cats(){
    if($('.cat-items:visible').length > 0){
      $('#noData').hide('slow')
    }else{
      $('#noData').show('slow')
    }
  }
  $(function(){
    $('[data-toggle="tooltip"]').tooltip({
      html:true
    })
    check_cats()
    $('#search').on('input',function(){
      var _f = $(this).val().toLowerCase()
      $('.cat-items').each(function(){
        var _c = $(this).text().toLowerCase()
        if(_c.includes(_f) == true)
          $(this).toggle(true);
        else
          $(this).toggle(false);
      })
    check_cats()
    })
  })
</script>
