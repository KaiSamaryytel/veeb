<?php
function vorm(){
    echo '
<form action="aeg.php" method="post">
Eesnimi: <input type="text" name="eesnimi">
<br>  
Perenimi: <input type="text" name="perenimi">  
<br>
Aasta: <select name="aasta">
       <option value = "1">2009</option>
       <option value = "2">2010</option>
       <option value = "3">2011</option>
       <option value = "4">2012</option>
       <option value = "6">2013</option>
       <option value = "7">2014</option>
       <option value = "8">2015</option>
       <option value = "9">2016</option>
       <option value = "10">2017</option>
       <option value = "11">2018</option>
</select>
Kuu: <select name="kuu">
       <option value = "1">Jaanuar</option>
       <option value = "2">Veebruar</option>
       <option value = "3">Märts</option>
       <option value = "4">Aprill</option>
       <option value = "5">Mai</option>
       <option value = "6">Juuni</option>
       <option value = "7">Juuli</option>
       <option value = "8">August</option>
       <option value = "9">September</option>
       <option value = "10">Oktoober</option>
       <option value = "11">November</option>
       <option value = "12">Detsember</option>
</select>
Päev: <select name="paev">
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
         <option value="6">6</option>
         <option value="7">7</option>
         <option value="8">8</option>
         <option value="9">9</option>
         <option value="10">10</option>
         <option value="11">11</option>
         <option value="12">12</option>
         <option value="13">13</option>
         <option value="14">14</option>
         <option value="15">15</option>
         <option value="16">16</option>
         <option value="17">17</option>
         <option value="18">18</option>
         <option value="19">19</option>
         <option value="20">20</option>
         <option value="21">21</option>
         <option value="22">22</option>
         <option value="23">23</option>
         <option value="24">24</option>
         <option value="25">25</option>
         <option value="26">26</option>
         <option value="27">27</option>
         <option value="28">28</option>
         <option value="29">29</option>
         <option value="30">30</option>
         <option value="31">31</option>
</select>
<br>
<input type="submit" value="Registreeri">
</form>
';
}

vorm();

?>