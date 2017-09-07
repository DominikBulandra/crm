  <!-- sidebar nav -->
    <P>menu</P>
            
       <div id="menuleft"></div>


<script type="text/javascript">




 $(function() {
    var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("menuleft").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "connect", true);
  xhttp.send();
  });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>