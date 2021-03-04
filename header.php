<ul class="naveg">
    <li><a id="inicio" href="index.php#inicio">Inicio</a></li>
    <li><a id="blog" href="blog.php#blog">Blog</a></li>
</ul>
<script>
    let hash = window.location.hash.split('#')[1];
    let elemento = document.getElementById(`${hash}`);
    elemento.classList.add('estilosBarra'); 
</script>

