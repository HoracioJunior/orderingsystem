SELECT a.id_produto, a.nome_produto, 
(SELECT ROUND(AVG(r.qtd_estrelas),1) 
    FROM tb_rating r WHERE r.fk_id_produto =a.id_produto)as RATE,
(SELECT COUNT(r.id_rating) FROM tb_rating r
 WHERE r.fk_id_produto = a.id_produto) as nr_avc
FROM tb_produto a