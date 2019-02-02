<?php

// function active($item, $uri) {
//     return $uri->segment(1) == $item? 'class="active"' : null;
// }
?>

<header class="header">
    <div class="container">
        <div class="logo grid-6">
            <a href="/">Admin</a>
        </div>

        <nav class="menu grid-6">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/empresas">Empresas</a></li>
                <li><a href="/colaboradores">Colaboradores</a></li>
            </ul>
        </nav>
    </div>
</header>

<style>

.header {
    width: 100%;
    padding: 20px 0;
    background-color: #2679ff;
}

.logo {
    position: relative;
  
}

.logo a{
    font-size: 2em;
    color: #fff;
}

.menu ul {
    position: relative;
    top: 10px;
    float: right; 
}

.menu ul li {
    display: inline-block;
}

.menu ul li a {
    color: #fff;
    font-size: 1.4em;
    padding: 10px;
}

.menu ul li a:hover {
    color: #04398e;
}



</style>


