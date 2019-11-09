{include file='header.tpl'}
{if $imagenes}
    {foreach  from=$imagenes item=imagen}
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{$imagen->ruta_img}" class="d-block w-100">
                </div>
        </div>
        <a class="carousel-control-prev" href="carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div> 
    
    {/foreach}
    {else !$imagenes}
        <h1>No hay imagen de este producto</h1>
{/if}
{include file='footer.tpl'}