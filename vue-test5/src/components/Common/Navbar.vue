<script setup>

</script>

<template>
    

  <nav>
    <ul>
      <li class="logo"><RouterLink to="/"><h3>ServiceKey</h3></RouterLink></li>
      <div class="items">
        <li><RouterLink to="/">Home</RouterLink></li>
        <li><RouterLink to="/about">About</RouterLink></li>
        <li><RouterLink to="/contact">Contact</RouterLink></li>
        <li><a href="#">Service</a></li>
      </div>
      <li class="search-icon">
        <input type="search" class="search-box" name="search" placeholder="Searching..">
        <span class="fas fa-search"></span>
      </li>
    </ul>
  </nav>

  <!-- <div>
    <ul>
      <li><RouterLink to="/" class="active" >Home</RouterLink></li>
      <li><RouterLink to="/about" >About</RouterLink></li>
      <li><RouterLink to="/Contact" >Contact</RouterLink></li>
      <li><RouterLink to="/Service" >Service</RouterLink></li>
      <li class="search"><input type="search" class="search-bar" name="search" placeholder="Searching..." ></li>
    </ul>
  </div> -->

</template>

<style scoped>

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'montserat', sans-serif;
  color: f2f2f2;
}




</style>

