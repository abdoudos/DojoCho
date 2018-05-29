
<header>
<php echo "Ceci est du texte"; ?>
  <table >
  <th>
   <td>
    <div name="logo">
    <a href="#"><img src="logo.jpg" width="100px" alt="logo"></a>
    </div>
   </td>

<td>
  <div id="act" >

    <a href="#Activite">   Activite</a>
      </div>
  </div>
</td>

<td>
  <div id="ev">
    <p><a href="evenement.html">   Evenements</a></p>
  </div>
</td>

<td>
  <div id="res">

    <p><a href="formulaire.html"> join-us </a></p>

  </div>
</td>

<td>
  <div id="log">

    <p><a href="login.html">log-in</a></p>

  </div>
</td>

<td>
  <div id="con">
<a href="#contactez">contactez nous </a>
  </div>
</td>


<td>
<button onclick="myFunction()">  <h3> Search</h3>  </button>
<input type="search" id="mySearch" placeholder="Search for something..">
<p id="demo"></p>

<script>
function myFunction() {
    var x = document.getElementById("mySearch").placeholder;
    document.getElementById("demo").innerHTML = x;
}
</script>
</td>
</th>
</table>
</header>
