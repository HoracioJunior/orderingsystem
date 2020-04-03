SELECT a.id_produto, a.nome_produto, 
(SELECT ROUND(AVG(r.qtd_estrelas),1) 
    FROM tb_rating r WHERE r.fk_id_produto =a.id_produto)as RATE,
(SELECT COUNT(r.id_rating) FROM tb_rating r
 WHERE r.fk_id_produto = a.id_produto) as nr_avc
FROM tb_produto a



    <div class="tenor-gif-embed" data-postid="13715540" data-share-method="host" data-width="100%" data-aspect-ratio="2.7065217391304346">
    <a href="https://tenor.com/view/popcorn-delivery-gif-13715540">Popcorn Delivery GIF</a> from <a href="https://tenor.com/search/popcorn-gifs">Popcorn GIFs</a></div><script type="text/javascript" async src="https://tenor.com/embed.js"></script>
