<?php
include("header.php");

?> 
 <div id="wrapper">
  <div id="dialog">
    <button class="close">×</button>
    <h3>Please enter the 4-digit verification code we sent via email:</h3>
  
    <div id="form">
      <input type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" />
      <input type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" /><input type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" /><input type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" />
      <button class="btn btn-primary">Verify</button>
    </div>
    
    <div>
      Didn't receive the code?<br />
      <a href="#">Send code again</a><br />
     
    </div>
     <img src="http://jira.moovooz.com/secure/attachment/10424/VmVyaWZpY2F0aW9uLnN2Zw==" alt="test" />
  </div>
</div>

<script>$(function() {
  'use strict';

  var body = $('body');

  function goToNextInput(e) {
    var key = e.which,
      t = $(e.target),
      sib = t.next('input');

    if (key != 9 && (key < 48 || key > 57)) {
      e.preventDefault();
      return false;
    }

    if (key === 9) {
      return true;
    }

    if (!sib || !sib.length) {
      sib = body.find('input').eq(0);
    }
    sib.select().focus();
  }

  function onKeyDown(e) {
    var key = e.which;

    if (key === 9 || (key >= 48 && key <= 57)) {
      return true;
    }

    e.preventDefault();
    return false;
  }
  
  function onFocus(e) {
    $(e.target).select();
  }

  body.on('keyup', 'input', goToNextInput);
  body.on('keydown', 'input', onKeyDown);
  body.on('click', 'input', onFocus);

})</script>

<?php
	include("footer.php");
	
	?>